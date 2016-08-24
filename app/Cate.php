<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Cate extends Model {

	protected $table = 'cates';
	protected $fillable = ['name','alias','order','parent_id','keywords','description'];
	//public $timestamps = false;

	public function products()
	{
		return $this->belongsTo('App\Product');
	}
	public function children()
	{
	    return $this->hasMany('App\Cate', 'parent_id', 'cate_id');
	}
	public function parent()
	{
	    return $this->belongsTo('App\Cate', 'parent_id');
	}
}
