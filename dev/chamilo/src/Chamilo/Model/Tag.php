<?php 

namespace Chamilo\Model;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Tag extends Eloquent
{
	protected $table = 'tag';

	public static function users()
	{
		return $this->belongsToMany(
			// Table Related
			'Chamilo\Model\User',
			// Table Pivot
			'user_rel_tag',
			// Tag FK in table pivot
			'tag_id',
			// User FK in table pivot
			'user_id'
		);
	}
}

/* End of file Tag.php */
/* Location: .//var/www/html/chamilo-lms-utp/dev/src/Chamilo/Model/Tag.php */