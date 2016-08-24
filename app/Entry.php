<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Entry extends Model {

	protected $table = 'entries';
	protected $fillable = ['name','alias','intro','content','image','keywords','classify','description','news_cates_id'];
	public $timestamps = true;
	
	public function newscate() {
		return $this->belongsTo('App\NewsCate');
	}

}
