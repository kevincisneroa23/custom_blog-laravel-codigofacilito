<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = "articles";
    protected $fillable = ['title','content','category_id','user_id'];


    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function category()
    {
    	return $this->belongsTo('App\Category');
    }

    public function tags()
    {
    	return $this->belongsToMany('App\Tag');
    }

    public function images()
    {
        return $this->hasMany('App\Image');
    }

    public function scopeSearch($query, $searchArticle)
    {
        return $query->where('title', 'LIKE', "%$searchArticle%");
    }


}
