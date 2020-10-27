<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';
    protected $guarded = [];
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function news_category(){
        return $this->belongsTo(Category::class,'category_id');
    }
}