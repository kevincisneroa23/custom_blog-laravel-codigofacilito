<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "categories";
    protected $fillable = ['name'];

    public function articles()
    {
    	return $this->hasMany('App\Article');
    }

    public function scopeSearch($query, $searchCategory)
    {
    	return $query->where('name', 'LIKE', "%$searchCategory%");
    }

    public function scopeSearchByCategory($query, $category)
    {
        return $query->where('name', '=', $category);
    }
}
