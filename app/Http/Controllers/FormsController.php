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

use App\Repositories\ProductRepository;

use App\Product;
use App\EarlyRegistration;

use App\Mail\ProductPrice;
use App\Mail\DownloadBrochure;
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

    public function productPrice(Request $request, $product){

        if($request->get('interested') !== null){
            return redirect('https://www.google.com/');
            die();
        }

        $product = ProductRepository::getProduct($product);

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'country' => 'required',
            'city' => 'required',
            'occupation' => 'required',
            'company' => 'required',
            'phone' => 'nullable|numeric'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        } else {


            /* $impact = new \ImpactData();
            $jsonContent = [
                'email'           => $request->get('email'),
                'first_name'      => $request->get('name'),
                'country'         => $request->get('country'),
                'city'            => $request->get('city'),
                'company'         => $request->get('company'),
                'phone'           => $request->get('phone'),
                'form'            => 'Price',
                'lead_type'       => 'Lead Commercial',
                'url_origin'      => $request->get('origin'),
                'url_converted'   => $_SERVER['HTTP_REFERER'],
                'referrer'        => $request->get('referrer'),
                'lead_path'       => $request->get('lead_path'),
                'more_info'       => $request->get('product_name'),
                'cta'             => 'Get Price',
                'cta_color'       => 'Green',
                'page'            => 'Product',
                'page_position'   => 'Center',
            ];

            $impact->send($jsonContent); */


            $response = salesForce($request, 'Lead', 'Website', 'Forms', 'Price', ' ', "Caffe Latte ".$request->get('product_name'));


            if($response == true){

                Mail::to(env('BRAND_EMAIL_GERAL'), 'Caffe Latte')->send(new ProductPrice($request));

                return redirect()->back()->with('message', 'Your request was successful');
            } else {

                return redirect()->back()->with('message', 'Please try again');

            }

        }

    }

    public function downloadBrochure(Request $request){

        if($request->get('interested') !== null){
            return redirect('https://www.google.com/');
            die();
        }

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'country' => 'required',
            'city' => 'required',
            'occupation' => 'required',
            'company' => 'required',
            'phone' => 'nullable|numeric'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        } else {


            /* $impact = new \ImpactData();
            $jsonContent = [
                'email'           => $request->get('email'),
                'first_name'      => $request->get('name'),
                'country'         => $request->get('country'),
                'city'            => $request->get('city'),
                'company'         => $request->get('company'),
                'phone'           => $request->get('phone'),
                'form'            => 'Price',
                'lead_type'       => 'Lead Commercial',
                'url_origin'      => $request->get('origin'),
                'url_converted'   => $_SERVER['HTTP_REFERER'],
                'referrer'        => $request->get('referrer'),
                'lead_path'       => $request->get('lead_path'),
                'more_info'       => $request->get('product_name'),
                'cta'             => 'Get Price',
                'cta_color'       => 'Green',
                'page'            => 'Product',
                'page_position'   => 'Center',
            ];

            $impact->send($jsonContent); */


            $response = salesForce($request, 'Lead', 'Website', 'Forms', 'Price', ' ', "Caffe Latte ".$request->get('product_name'));


            if($response == true){

                Mail::to(env('BRAND_EMAIL_GERAL'), 'Caffe Latte')->send(new DownloadBrochure($request));

                return redirect()->back()->with('message', 'Your request was successful');
            } else {

                return redirect()->back()->with('message', 'Please try again');

            }

        }

    }

}
