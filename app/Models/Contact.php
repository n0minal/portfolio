<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
	const CREATED_AT = 'created_at';
	const UPDATED_AT = 'updated_at';
	
	protected $table = 'contacts';

    protected $fillable = [
    	'name',
    	'email',
    	'phone',
    	'message'
    ];

    protected $guarded = [
    	'id',
    	'created_at',
    	'updated_at'
    ];
}
