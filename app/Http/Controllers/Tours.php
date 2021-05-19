<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Tour;
use Illuminate\Http\Request;

class Tours extends BaseController
{
	public function page(Request $request){
		$tour = Tour::find($request->id);
		return view('site.tours.page',['tour'=>$tour]);
	}

	public function list(){
		$tours = Tour::all();
		$title = 'Лучшие туры из Алматы';
		$section = 'tour';
		return view('site.tours.list',['tours'=>$tours,'title'=>$title,'section'=>$section]);
	}
}
