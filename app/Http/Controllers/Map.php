<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Region;

class Map extends BaseController
{
	public function info(Request $request){
      $region = Region::where([
         ['tag',$request->obl]
      ])->first();

      if(!$region) return response()->json([
         'title' => 'Описание не найдено',
         'body' => ''
      ]);

      return response()->json([
         'title' => $region->title,
         'body' => $region->description
      ]);

	}
}
