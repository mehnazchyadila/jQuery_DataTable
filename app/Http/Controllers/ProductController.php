<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use DB;
class ProductController extends Controller
{
    public function all(){
    	$products = DB::table('products')
    						->join('categories','products.category_id','categories.id')
    						->select('products.name as product','products.price','categories.name as category')
    						->get();
    	// dd($products);
    	return view('product.all',compact('products'));
    }
}
