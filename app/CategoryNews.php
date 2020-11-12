<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryNews extends Model
{
    protected $table = "categories_news";

    public function news(){
        return $this->hasMany('App\News','category_news_id');
    }

}
