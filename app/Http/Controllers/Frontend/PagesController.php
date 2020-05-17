<?php

namespace App\Http\Controllers\Frontend;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller ;
use App\Models\product; 

class PagesController extends Controller
{
    public function index()
    {
    	$products = product::orderBy('id','desc')->paginate(9);

    	return view('Frontend.pages.index',compact('products'));
    }
     public function contact()
    {

    	return view('Frontend.pages.contact');

    }


       public function search(Request $request)
    {
    	$search = $request->search;

    	$products = product::orWhere('title','like','%'.$search.'%')
    	->orWhere('description','like','%'.$search.'%')
    	->orWhere('price','like','%'.$search.'%')
    	->orWhere('quantity','like','%'.$search.'%')
    	->orderBy('id','desc')->paginate(9);

    	return view('Frontend.pages.product.search',compact('search','products'));
    }



}

