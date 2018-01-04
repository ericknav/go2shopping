<?php

# app/Models/Quote.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

final class Category extends Model
{
	// *** Custom name connection ***
	// protected $connection = 'connection-name';

	// *** Custom name table ***
	// protected $table = "Category";
	
	// *** Primary key is no increment ***
	// public $incrementing = false;

	// *** No used columns created_at and updated_at ***
	public $timestamps = false;

	// *** Custom columns created_at and updated_ad ****
	// const CREATED_AT = "creation_date";
	// const UPDATED_AT = "last_update";

	// *** Defined my format ***
	protected $dateFormat = 'U';
}