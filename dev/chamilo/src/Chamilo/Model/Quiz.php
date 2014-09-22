<?php

namespace Chamilo\Model;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Quiz extends Eloquent
{
	protected $table = 'c_quiz';

	public function questions()
	{
		return $this->belongsToMany(
			// Table Related
			'Chamilo\Model\QuizQuestion',
			// Table Pivot
			'c_quiz_rel_question',
			// Quiz FK in table pivot
			'c_id',
			// Question FK in table pivot
			'question_id'
		);
	}
}

/* End of file QuizTest.php */
/* Location: .//var/www/html/chamilo-lms-utp/dev/models/QuizTest.php */