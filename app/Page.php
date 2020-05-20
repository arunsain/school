<?php

namespace App;
use App\PageMeta;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    //

     public function pageMeta()
    {
        return $this->hasOne(PageMeta::class);
    }
}
