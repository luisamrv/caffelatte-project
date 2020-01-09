<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Repositories
use App\Repositories\ProductRepository;

class FrontendController extends Controller
{
    public function getHomepage() {
        return view('frontend.homepage');
    }

    public function getAllProducts() {
        return "all products";
    }

    public function getProduct($slug) {
        return "single product";
    }
}
