<?php 

namespace Chamilo\Model;

use Illuminate\Database\Eloquent\Model;

class Class extends Eloquent
{
	protected $table = 'class';

	public function users()
	{
		return $this->belongsToMany(
			// Table Related
			'Chamilo\Model\User',
			// Table Pivot
			'class_user',
			// Class FK in table pivot
			'class_id',
			// User FK in table pivot
			'user_id'
		);
	}
}

/* End of file Class.php */
/* Location: .//var/www/html/chamilo-lms-utp/dev/src/Chamilo/Model/Class.php */