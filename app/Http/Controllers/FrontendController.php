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

    public function getProduct($slug) {
        return "single product";
    }

    public function getModalProductPrice($product){
        $product = ProductRepository::getProduct($product);
        return view('includes.forms.modal-product-price',compact('product'));
    }
}
