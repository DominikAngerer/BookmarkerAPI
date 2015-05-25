<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Bookmark extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'bookmarks';

	/**
	 * The attributes that are protected;
	 *
	 * @var array
	 */
	protected $guarded = ['id'];


	/**
	 * The attributes that are hidden from response;
	 *
	 * @var array
	 */
	protected $hidden = ['created_at', 'updated_at'];

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['title', 'url', 'tags'];

}
