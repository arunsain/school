<?php

namespace App\Http\View\Composer;

use Illuminate\View\View;
use App\Page;


 class ChannelComposer {

 	public function compose($view){

		$view->with('page',Page::where('id',1)->first());

 	}





 }