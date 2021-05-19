<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Place;
use Illuminate\Http\Request;

class Places extends BaseController
{
	public function page(Request $request){
		$place = Place::find($request->id);
		return view('site.places.page',['place'=>$place]);
	}
}
