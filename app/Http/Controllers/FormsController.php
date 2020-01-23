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
use App\Mail\Subscriber;

class FormsController extends Controller
{

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


            $impact = new \ImpactData();
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
                'cta_color'       => 'Brown',
                'page'            => 'Product',
                'page_position'   => 'Center',
            ];

            $impact->send($jsonContent); 

            $response = salesForce($request, 'Lead', 'Website', 'Forms', 'Price', ' ', $request->get('product_name'));

            if($response == true){

                //Mail::to(env('BRAND_EMAIL_GERAL'), 'Caffe Latte')->send(new ProductPrice($request));

                return redirect()->route('actions.get-price');
                
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


            $impact = new \ImpactData();
            $jsonContent = [
                'email'           => $request->get('email'),
                'first_name'      => $request->get('name'),
                'country'         => $request->get('country'),
                'city'            => $request->get('city'),
                'company'         => $request->get('company'),
                'phone'           => $request->get('phone'),
                'form'            => 'Download',
                'lead_type'       => 'Lead',
                'url_origin'      => $request->get('origin'),
                'url_converted'   => $_SERVER['HTTP_REFERER'],
                'referrer'        => $request->get('referrer'),
                'lead_path'       => $request->get('lead_path'),
                'more_info'       => $request->get('product_name'),
                'cta'             => 'Send',
                'cta_color'       => 'Brown',
                'page'            => 'Landing Pages',
                'page_position'   => 'Center',
            ];

            $impact->send($jsonContent); 


            $response = salesForce($request, 'Lead', 'Website', 'Forms', 'Brochures', ' ', "Download Brochure New Products");

            if($response == true){

                //Mail::to(env('BRAND_EMAIL_GERAL'), 'Caffe Latte')->send(new DownloadBrochure($request));

                $slug = "brochure-caffe-latte.pdf";

                return view('includes.thank-you.download-content',compact('slug'));
            } else {

                return redirect()->back()->with('message', 'Please try again');

            }

        }

    }

    public function downloadHRImages(Request $request){

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


            $impact = new \ImpactData();
            $jsonContent = [
                'email'           => $request->get('email'),
                'first_name'      => $request->get('name'),
                'country'         => $request->get('country'),
                'city'            => $request->get('city'),
                'company'         => $request->get('company'),
                'phone'           => $request->get('phone'),
                'form'            => 'HR Image',
                'lead_type'       => 'Lead',
                'url_origin'      => $request->get('origin'),
                'url_converted'   => $_SERVER['HTTP_REFERER'],
                'referrer'        => $request->get('referrer'),
                'lead_path'       => $request->get('lead_path'),
                'more_info'       => $request->get('product_name'),
                'cta'             => 'Send',
                'cta_color'       => 'Brown',
                'page'            => 'Landing Pages',
                'page_position'   => 'Center',
            ];

            $impact->send($jsonContent); 


            $response = salesForce($request, 'Lead Press', 'Website', 'Forms', 'HR Images', ' ', "Download HR Images");

            if($response == true){

                //Mail::to(env('BRAND_EMAIL_GERAL'), 'Caffe Latte')->send(new DownloadBrochure($request));

                $slug = "events/".$request->get('product_name')."/".$request->get('product_name').".zip";

                return view('includes.thank-you.download-content',compact('slug'));
            } else {

                return redirect()->back()->with('message', 'Please try again');

            }

        }

    }



    public function bookMeeting(Request $request){

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

        	$impact = new \ImpactData();
            $jsonContent = [
                'email'           => $request->get('email'),
                'first_name'      => $request->get('name'),
                'country'         => $request->get('country'),
                'city'            => $request->get('city'),
                'company'         => $request->get('company'),
                'phone'           => $request->get('phone'),
                'form'            => 'Book a Meeting',
                'lead_type'       => 'Lead',
                'url_origin'      => $request->get('origin'),
                'url_converted'   => $_SERVER['HTTP_REFERER'],
                'referrer'        => $request->get('referrer'),
                'lead_path'       => $request->get('lead_path'),
                'more_info'       => $request->get('product_name'),
                'cta'             => 'Submit Request',
                'cta_color'       => 'Brown',
                'page'            => 'Landing Pages',
                'page_position'   => 'Top',
                'debug'           => 1,
            	'debugEmail'      => 'teste_dcv@mailinator.com',
            ];

            $impact->send($jsonContent);


            $response = salesForce($request, 'Lead', 'Website', 'Forms', 'Book a Meeting', ' ', $request->get('product_name'));

            if($response == true){

                //Mail::to(env('BRAND_EMAIL_GERAL'), 'Caffe Latte')->send(new DownloadBrochure($request));

               return redirect()->back()->with('message', 'Your request was successful');
            } else {

                return redirect()->back()->with('message', 'Please try again');

            }

        }

    }

    public function downloadEbook(Request $request){

        if($request->get('interested') !== null){
            return redirect('https://www.google.com/');
            die();
        }

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'country' => 'required',
            'occupation' => 'required',
            'company' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        } else {

        	$impact = new \ImpactData();
            $jsonContent = [
                'email'           => $request->get('email'),
                'first_name'      => $request->get('name'),
                'country'         => $request->get('country'),
                'occupation'      => $request->get('occupation'),
                'form'            => 'Download',
                'lead_type'       => 'Lead',
                'url_origin'      => $request->get('origin'),
                'url_converted'   => $_SERVER['HTTP_REFERER'],
                'referrer'        => $request->get('referrer'),
                'lead_path'       => $request->get('lead_path'),
                'more_info'       => 'Downloaded digital e-book '.$request->get('product_name'),
                'interested_name' => 'Other',
                'cta'             => 'Download Now',
                'cta_color'       => 'Brown',
                'page'            => 'Landing Pages',
                'page_position'   => 'Center',
            ];

            $impact->send($jsonContent);

            $response = salesForce($request, 'Lead', 'Website', 'Forms', 'Ebooks', ' ', $request->get('product_name'));

            if($response == true){

                //Mail::to(env('BRAND_EMAIL_GERAL'), 'Caffe Latte')->send(new DownloadBrochure($request));
                
                $slug = $request->get('product_name');

                return view('includes.thank-you.download-ebook',compact('slug'));
            } else {
                return redirect()->back()->with('message', 'Please try again');

            }

        }

    }

    public function downloadPricelist(Request $request){

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

        	$currency = checkCurrency($request->get('country'));

            $impact = new \ImpactData();
            $jsonContent = [
                'email'           => $request->get('email'),
                'first_name'      => $request->get('name'),
                'country'         => $request->get('country'),
                'company'         => $request->get('company'),
                'phone'           => $request->get('phone'),
                'form'            => 'PriceList',
                'lead_type'       => 'Lead',
                'url_origin'      => $request->get('origin'),
                'url_converted'   => $_SERVER['HTTP_REFERER'],
                'referrer'        => $request->get('referrer'),
                'lead_path'       => $request->get('lead_path'),
                'more_info'       => 'Request Pricelist '.$currency,
                'cta'             => 'Get Price List',
                'cta_color'       => 'Brown',
                'page'            => 'Pricelist',
                'page_position'   => 'Top',
            ];

            $impact->send($jsonContent);

            $response = salesForce($request, 'Lead', 'Website', 'Forms', 'PriceList', ' ', 'request pricelist '.$currency);

            if($response == true){

                //Mail::to(env('BRAND_EMAIL_GERAL'), 'Caffe Latte')->send(new DownloadBrochure($request));

                $slug = "pocket/pocket-maison-objet-jan-2020-caffe-latte.pdf";

                return view('includes.thank-you.download-content',compact('slug'));

            } else {

                return redirect()->back()->with('message', 'Please try again');

            }

        }

    }

    public function downloadPressRelease(Request $request){

        if($request->get('interested') !== null){
            return redirect('https://www.google.com/');
            die();
        }

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'country' => 'required',
            'occupation' => 'required',
            'company' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        } else {

        	$impact = new \ImpactData();
            $jsonContent = [
                'email'           => $request->get('email'),
                'first_name'      => $request->get('name'),
                'country'         => $request->get('country'),
                'company'         => $request->get('company'),
                'phone'           => $request->get('phone'),
                'form'            => 'Press Release',
                'lead_type'       => 'Lead',
                'url_origin'      => $request->get('origin'),
                'url_converted'   => $_SERVER['HTTP_REFERER'],
                'referrer'        => $request->get('referrer'),
                'lead_path'       => $request->get('lead_path'),
                'more_info'       => $request->get('product_name'),
                'cta'             => 'Submit Request',
                'cta_color'       => 'Brown',
                'page'            => 'Press',
                'page_position'   => 'Top',
            ];

            $impact->send($jsonContent);

            $response = salesForce($request, 'Lead Press', 'Website', 'Forms', 'Press Release', ' ', 'Download Press Release: '.$request->get('product_name'));

            if($response == true){

                //Mail::to(env('BRAND_EMAIL_GERAL'), 'Caffe Latte')->send(new DownloadBrochure($request));

                $slug = $request->get('product_name');

                return view('includes.thank-you.download-press-release',compact('slug'));
            } else {

                return redirect()->back()->with('message', 'Please try again');

            }

        }

    }

    public function subscribe(Request $request){

        if($request->get('interested') !== null){
            return redirect('https://www.google.com/');
            die();
        }

        $validator = Validator::make($request->all(), [
            'email' => 'required|email'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        } else {

        	$impact = new \ImpactData();
            $jsonContent = [
                'email'           => $request->get('email'),
                'form'            => 'Subscriber',
                'lead_type'       => 'Lead',
                'url_origin'      => $request->get('origin'),
                'url_converted'   => $_SERVER['HTTP_REFERER'],
                'referrer'        => $request->get('referrer'),
                'lead_path'       => $request->get('lead_path'),
                'cta'             => 'Send',
                'cta_color'       => 'Brown',
                'page'            => 'Homepage',
                'page_position'   => 'Center',
            ];

            $impact->send($jsonContent);


            $response = salesForce($request, 'Lead', 'Website', 'Forms', 'Subscriber', ' ', "");


            if($response == true){

                //Mail::to(env('BRAND_EMAIL_GERAL'), 'Caffe Latte')->send(new Subscriber($request));

                return redirect()->back()->with('message', 'Your request was successful');
            } else {

                return redirect()->back()->with('message', 'Please try again');

            }

        }

    }

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
