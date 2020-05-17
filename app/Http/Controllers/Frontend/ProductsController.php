<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller ;
use Illuminate\Http\Request;
use App\Models\product;




class ProductsController extends Controller
{

   public function index()
    {
    	$products = product::orderBy('id','desc')->paginate(9);

    	return view('Frontend.pages.product.index')->with('products',$products);
    }

    public function show($slug)
    {
        $product = product::where('slug',$slug)->first();

        if(!is_null($product))	
        {
        return view('frontend.pages.product.show',compact('product'));
        }else{
        	session()->flash('errors','sorry no product found');
        	return redirect('products');
        }
    }

}
  