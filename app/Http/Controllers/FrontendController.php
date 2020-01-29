<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Repositories
use App\Repositories\CategoryRepository;
use App\Repositories\ProductRepository;

class FrontendController extends Controller
{
    
    public function getHomepage() {
        return view('frontend.homepage');
    }

    public function getBrochure() {
        $products = ProductRepository::getBrandProducts()->take(4);
        return view('landings.brochure', compact('products'));
    }

    public function getEbook($slug){
        $products = ProductRepository::getBrandProducts()->take(4);
        return view('landings.download-ebook', compact('slug', 'products'));
    }

    public function getAllProducts() {

        $all_products = array();
        $categories = CategoryRepository::getAllCategories();
        $brand_products = ProductRepository::getBrandProducts();
        $products = ProductRepository::getAllProducts();

        foreach($categories as $category):
            $all_products += array($category->category_languages[0]->name => array());
            foreach ($products as $product):
                if ($product->sub_category->category->category_languages[0]->name == $category->category_languages[0]->name):
                    array_push($all_products[$category->category_languages[0]->name], $product);
                endif;
            endforeach;
        endforeach;

        return view('frontend.all-products', compact('categories', 'brand_products', 'all_products'));
    }

    public function getEventLanding($event)
    {

        $brand_products = ProductRepository::getBrandProducts();

        return view('frontend.events.'.$event, compact('brand_products'));
    }

    public function getProduct($slug) {
        $random_products = ProductRepository::getBrandProducts()->take(4);
        $product = ProductRepository::getProduct($slug);
        return view('frontend.product',compact('product', 'random_products'));
    }

    public function getTermsConditions() {
        return view('frontend.terms-and-conditions');
    }

    
    public function getModalProductPrice($product){
        $product = ProductRepository::getProduct($product);
        return view('includes.forms.modal-product-price',compact('product'));
    }

    public function getModalBrochure(){
        return view('includes.forms.modal-download-brochure');
    }

    public function getModalHRImages($slug){
        return view('includes.forms.modal-download-hr-images', compact('slug'));
    }

    public function getModalEbookPop(){
        return view('includes.forms.modal-download-ebookpop');
    }


    public function getModalPricelist(){
        return view('includes.forms.modal-download-pricelist');
    }

    public function getModalBookMeeting(){
        return view('includes.forms.modal-book-a-meeting');
    }

    public function getModalEbook($ebook){
        return view('includes.forms.modal-ebook',compact('ebook'));
    }

    public function getModalPressRelease($slug){
        return view('includes.forms.modal-download-press-release',compact('slug'));
    }

    //Thank you pages
    public function ThankYouPageGetprice(){
        return view('includes.thank-you.get-price');
    }

    public function ThankYouPageDownloadEbook(){
        return view('includes.thank-you.download-ebook');
    }

    public function ThankYouPagePressRelease(){
        return view('includes.thank-you.download-press-release');
    }

    // public function ThankYouPageBookMeeting(){
    //     return view('includes.thank-you.book-meeting');
    // }

    // public function ThankYouPageNewsletter(){
    //     return view('includes.thank-you.newsletter');
    // }

    // public function ThankYouPagePocketFair(){
    //     return view('includes.thank-you.pricelist');
    // }

    

    // public function ActionsError(){
    //     return view('includes.thank-you.error');
    // }
    
}
