<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Page;

class PageMeta extends Model
{
    //

protected $table = 'page_metas';

       public function page()
    {
        return $this->belongsTo(Page::class);
    }

}
