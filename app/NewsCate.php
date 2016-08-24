<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class NewsCate extends Model {

	protected $table = 'news_cates';
	protected $fillable = ['name','alias','menu'];
	//public $timestamps = false;

	public function products()
	{
		return $this->belongsTo('App\Entry');
	}

}
