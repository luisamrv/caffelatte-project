<?php

namespace App\Repositories;

use App\Http\Requests;

//Models
use App\Product;
use App\Category;

//Facades
use Illuminate\Support\Facades\DB;

//Models

class ProductRepository
{
    public static function getAllProducts() {
        return Product::with([
			'sub_category' => function($query){
			$query->with([
				'sub_category_languages' => function($query){
					$query->where('language_id', '=', 1); 
				}, 
				'category' => function($query){
					$query->with([
						'category_languages' => function($query){
							$query->where('language_id', '=', 1); 
						}]); 
				}]); 
		},])
		->where('is_active', '=', true)
		->where('is_deleted', '=', false)
		->get();
    }

    public static function getBrandProducts() {
        return Product::with([
			'sub_category' => function($query){
			$query->with([
				'sub_category_languages' => function($query){
					$query->where('language_id', '=', 1); 
				}, 
				'category' => function($query){
					$query->with([
						'category_languages' => function($query){
							$query->where('language_id', '=', 1); 
						}]); 
				}]); 
        },])
        ->where('is_partner', '=', 0)
		->where('is_active', '=', true)
		->where('is_deleted', '=', false)
		->get();
    }
}