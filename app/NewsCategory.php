<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use App\NewsContent;

class NewsCategory extends Model
{
    //
    protected $table = 'news_categories';

      public function newscontents()
    {
        return $this->hasMany(NewsContent::class);
    }


     public function limitContent() {
        return $this->newscontents()->take(2);
    }

}
