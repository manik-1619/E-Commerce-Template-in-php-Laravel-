<?php
namespace App\Http\Controllers\Backend;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller ;

use App\Models\Product;
use Illuminate\Support\Str ;
use Image ;
use App\Models\ProductImage;

class ProductsController extends Controller
{
     public function  index()
    {
        $products = product::orderBy('id','desc')->get();

        return view('backend.pages.product.index')->with('products',$products);
    }
    public function create()
    {

    	return view('backend.pages.product.create');
    }
 

    public function  edit($id)
    {
         $product = Product::find($id);

        return view('backend.pages.product.edit')->with('product',$product);
    }

 




  
    public function  store(Request $request)
    {
        $request->validate([
          'title'  => 'required|max:150',
          'description'  => 'required',
          'price'  => 'required|numeric',
          'quantity'  => 'required|numeric',


        ]);

        $product = new Product ;
        $product->title = $request->title ;
        $product->description = $request->description ;
        $product->price = $request->price ;
        $product->quantity = $request->quantity ;
         // $product->slug = str_slug($request->title);
        $product->slug= Str::slug($request->title);
        // "Str::slug" instead of "str_slug" and
        $product->category_id = 1;
        
        $product->brand_id = 1;
        $product->admin_id = 1;
        $product->save();

        //Productimage model insert image

//      if($request->hasFile('image')){

//          $image = $request->file('image');
//          $img = time().'.'. $image->getClientOriginalExtension();
//          $location = public_path('images/products/'.$img);

//           Image::make($image)->save($location);

//           $image = new ProductImage;
//           $image->product_id = $product->id ;
//           $image->image = $img; 
//           $image->save();
// }

if(count($request->product_image) > 0)
{

    foreach($request->product_image as $image)
    {


        
            // $image = $request->file('image');
            $img = time().'.'. $image->getClientOriginalName();
            $location = public_path('images/products/'.$img);

          Image::make($image)->save($location);

          $product_image = new ProductImage;
          $product_image->product_id = $product->id ;
          $product_image->image = $img; 
          $product_image->save();


    }
} 
return redirect()->route('admin.product.create') ;

}
  
    public function update(Request $request,$id)
    {
        $request->validate([
          'title'  => 'required|max:150',
          'description'  => 'required',
          'price'  => 'required|numeric',
          'quantity'  => 'required|numeric',


        ]);

    	$product = Product::find($id) ;
    	$product->title = $request->title ;
    	$product->description = $request->description ;
    	$product->price = $request->price ;
    	$product->quantity = $request->quantity ;
    	 // $product->slug = str_slug($request->title);
    
    	$product->save();



    	return redirect()->route('admin.products') ;
      }

     public function delete($id)
     {
        
         $product = Product::find($id);
         if(!is_null($product)){

         $product->delete();

         }
         session()->flash('success','product has deleted successfully !!');
         return back();

     }






  }

// php artisan config:cache ;
// composer dump-autoload
//php artisan view:clear