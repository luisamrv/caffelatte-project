<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\View;

use App\EarlyRegistration;
use App\Mail\Early_Registration;

class FormsController extends Controller
{
    public function earlyRegistration(Request $request) {
    	$validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:early_registrations'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        } else {

            $user = new EarlyRegistration;
            $user->email = $request->email;

            if(!$user->save()){
                return redirect()->back()->with('message', 'Please try again.');
            }  
            else {
                Mail::to(env('BRAND_EMAIL_GERAL'), 'Caffe Latte')->send(new Early_Registration($request));
                return redirect()->back()->with('message', 'You are now subscribed to receive our updates.');
            }
            
        }
    }
}
