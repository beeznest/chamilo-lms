<?php
/* 
 * This file contains only grids without headers or footers
 * @author Francis Gonzales <fgonzales@beeznest.com> 
 */
$language_file = array('admin', 'exercice', 'gradebook', 'tracking');

require_once '../global.inc.php';

$gridId = !empty($_REQUEST['gridId']) ? $_REQUEST['gridId'] : "";
$sessionId = !empty($_REQUEST['sessionId']) ? intval($_REQUEST['sessionId']) : 0;
$courseId = !empty($_REQUEST['courseId']) ? intval($_REQUEST['courseId']) : 0;

switch ($gridId) {
    case 'studentProgress':
        echo MySpace::displayStudentProgressReport($sessionId, $courseId);
    break;
    case 'sessionProgress':
        echo MySpace::displaySessionProgressSummaryByCourse($courseId, $sessionId);
        break;
    default:
        echo "Parameters not found";
        break;
}