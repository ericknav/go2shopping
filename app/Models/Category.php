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
	protected $table = "CNF_CATALOG";
	
	// *** Custom primary key ***
	// protected $primaryKey = "idCatory";
	protected $primaryKey = "catalogId";

	// *** Primary key is no increment ***
	// public $incrementing = false;

	// *** No used columns created_at and updated_at ***
	public $timestamps = false;

	// *** Custom columns created_at and updated_ad ****
	// const CREATED_AT = "creation_date";
	// const UPDATED_AT = "last_update";

	// *** Defined my format ***
	protected $dateFormat = 'U';

	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
	/*
    protected $fillable = [
        'categoryId', 'categoryCode', 'categoryName',
	];
	//*/

	protected $fillable = [
        'catalogId', 'name', 'description',
	];
}