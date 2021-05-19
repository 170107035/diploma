<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Tour;
use App\GuidedTour;
use Illuminate\Http\Request;

class Search extends BaseController
{
	public function page(Request $request){
		$request->validate([
         'where' => 'required'
      ]);

      $search_cfg = [
         ['title','LIKE','%'.$request->where.'%']
      ];

      if(isset($request->when) && !empty($request->when)){
         $when = date('Y-m-d',strtotime($request->when));
         $search_cfg[] = [['date',$when]];
      }

      $tours = Tour::where($search_cfg)->get();
      $guided_tours = GuidedTour::where($search_cfg)->get();

      return view('site.search.page',['tours'=>$tours,'guided_tours'=>$guided_tours]);
	}
}
