<?php

$language_file = array('admin', 'registration');
$cidReset = true;

require_once '../inc/global.inc.php';

$this_section = SECTION_PLATFORM_ADMIN;
api_protect_admin_script(true);

$execute = isset($_GET['execute']) ? Database::escape_string($_GET['execute']) : null;
/*$courseCode = Database::escape_string($_GET['course_code']);
if (empty($courseCode)) {
    echo 'add the ?course_code=XXX';
    exit;
}*/

$table = Database::get_main_table(TABLE_STATISTIC_TRACK_E_EXERCICES);
$tableRecording = Database::get_statistic_table(TABLE_STATISTIC_TRACK_E_ATTEMPT_RECORDING);
$tableUser= Database::get_main_table(TABLE_MAIN_USER);
$tableCourse = Database::get_main_table(TABLE_MAIN_COURSE);

$tableQuiz = Database::get_course_table(TABLE_QUIZ_TEST);
$tableLpItemView = Database::get_course_table(TABLE_LP_ITEM_VIEW);

$sql = "SELECT * FROM $table WHERE status = '' AND exe_result = '0' ";
$result = Database::query($sql);
$www = api_get_path(WEB_CODE_PATH);

if ($execute) {
    echo 'Database will be modified.';
} else {
    echo 'No changes will be modified in the Database. If you want to execute the queries add this ?execute=1';
}
echo '<br />';

echo "<h2>Attempts where status is ='' and exe_result = 0 </h2><br />";

if (Database::num_rows($result)) {
//if (0) {

    while ($attempt = Database::fetch_array($result, 'ASSOC')) {

        $exeId = $attempt['exe_id'];
        $courseCode = $attempt['exe_cours_id'];
        $sessionId = $attempt['session_id'];
        $lpItemViewId = $attempt['orig_lp_item_view_id'];
        $lpItemId = $attempt['orig_lp_item_id'];

        $courseInfo = api_get_course_info($courseCode);
        $courseId = $courseInfo['real_id'];

        // Check if the exercise was reviewed by a teacher:

        $sql = "SELECT count(*) count_result
                FROM $tableRecording WHERE exe_id = $exeId ";

        $recordingResult = Database::query($sql);
        $recordings = Database::fetch_array($recordingResult, 'ASSOC');
        $recordings = $recordings['count_result'];

        // The attempt was not review by the teacher, you can modify the total
        if ($recordings == 0) {
            $questionAttempts = get_all_exercise_event_by_exe_id(
                $attempt['exe_id']
            );

            $total = 0;
            foreach ($questionAttempts as $results) {
                foreach ($results as $questionResult) {
                    $total += $questionResult['marks'];
                }
            }

            if ($total != 0) {
                echo "Attempt #$exeId<br />";
                echo 'Ready to update track_e_exercise with new score: ' . $total . '<br />';
                $sql = " UPDATE $table SET exe_result = '$total' WHERE exe_id = $exeId";
                echo $sql;
                echo '<br />';
                if ($execute) {
                    Database::query($sql);
                }

                // Updating lp_item_view

                if (!empty($lpItemViewId)) {
                    echo 'Ready to update lp_item_view with new score: ' . $total . '<br />';
                    $sql = "UPDATE $tableLpItemView
                            SET score = '$total'
                            WHERE
                              id = $lpItemViewId AND
                              c_id = $courseId AND
                              lp_item_id = $lpItemId";
                    echo $sql;
                    echo '<br />';
                    if ($execute) {
                        Database::query($sql);
                    }
                }

                echo '<br />';
                $url = $www . "exercice/exercise_show.php?cidReq=$courseCode&id_session=$sessionId&gidReq=0&action=qualify&id=$exeId";
                echo "See exercise result: " . Display::url($url, $url);
                echo '<br />';
                echo '<br />';
            }
        }
    }
} else {
    echo "Nothing to fix.<br />";
}

$sql = "SELECT
            COUNT(*) as count,
            start_time,
            course.id course_id,
            exe_user_id,
            user.firstname,
            user.lastname,
            exe_exo_id,
            track_e_exercices.session_id,
            exe_cours_id
        FROM $table track_e_exercices
            INNER JOIN $tableUser user
            ON user.user_id = exe_user_id AND user.status = 5
            INNER JOIN $tableCourse course
            ON course.code = exe_cours_id
            INNER JOIN $tableExercise c_quiz
            ON c_quiz.id = exe_exo_id  AND c_quiz.c_id = course.id
        WHERE
          track_e_exercices.status = '' AND
          c_quiz.max_attempt = 1
        GROUP BY exe_user_id, c_quiz.id, track_e_exercices.session_id, exe_cours_id
        HAVING COUNT(*) > 1
        ORDER BY exe_cours_id";

$result = Database::query($sql);
if (Database::num_rows($result)) {
    echo "<h2>Double students attempts in exercises with only 1 attempt setting.</h2><br />";
    var_dump($sql);
    while ($attempt = Database::fetch_array($result, 'ASSOC')) {

        $userId = $attempt['exe_user_id'];
        $courseCode = $attempt['exe_cours_id'];
        $exerciseId = $attempt['exe_exo_id'];
        $sessionId = $attempt['session_id'];
        $user = $attempt["firstname"].' '.$attempt['lastname'];

        $url = $www . "exercice/exercise_report.php?cidReq=$courseCode&exerciseId=$exerciseId&id_session=$sessionId";
        echo "Search and select one attempt for user '$user' here: <br /> " . Display::url($url, $url).'<br /><br />';

        /*
        $userResults = get_all_exercise_results_by_user($userId, $courseCode, $sessionId);
        var_dump($userResults);
        foreach ($userResults as $result) {
            var_dump($result);
        }*/
    }
}
