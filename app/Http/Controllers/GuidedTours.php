<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\GuidedTour;
use Illuminate\Http\Request;

class GuidedTours extends BaseController
{
	public function page(Request $request){
		$tour = GuidedTour::find($request->id);
		return view('site.tours.page',['tour'=>$tour]);
	}

	public function list(){
		$tours = GuidedTour::all();
		$title = 'Лучшие экскурсии из Алматы';
		$section = 'guided';
		return view('site.tours.list',['tours'=>$tours,'title'=>$title,'section'=>$section]);
	}
}
