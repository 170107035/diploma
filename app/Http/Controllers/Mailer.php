<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use App\Mail\FeedbackSender;

class Mailer extends BaseController
{
	public function send(Request $request){
      $validator = Validator::make($request->all(),[
         'name' => 'required',
         'phone' => 'required'
      ]);

		if($validator->fails()) return response()->json([
         'status' => 'error',
         'message' => 'Заполните все поля' 
      ]);

      Mail::to(setting('site.admin_email'))->send(new FeedbackSender($request));

      return response()->json([
         'status' => 'success',
         'message' => 'Заявка успешно отправлена'
      ]);
	}
}
