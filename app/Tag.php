<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = "tags";
    protected $fillable = ['name'];

    public function articles()
    {
    	return $this->belongsToMany('App\Article')->withTimestamps();
    }

    public function scopeSearch($query, $searchTag)
    {
    	return $query->where('name', 'LIKE', "%$searchTag%");
    }

    public function scopeSearchByTag($query, $tag)
    {
        return $query->where('name', '=', $tag);
    }

}
