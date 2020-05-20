<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\NewsCategory;

class NewsContent extends Model
{
    //
      protected $table = 'news_contents';


         public function newsCat()
    {
        return $this->belongsTo(NewsCategory::class);
    }
}
