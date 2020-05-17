<?php

namespace App\Http\Controllers\Backend;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller ;
use Image;
use App\Models\Category ;
use File ;
class CategoriesController extends Controller
{

	public function index()
	{


		$categories = Category::orderBy('id','desc')->get();
		return view('backend.pages.categories.index',compact('categories'));
	}


	public function create()
	{

		$main_categories = Category::orderBy('name','desc')->where('parent_id',NULL)->get();
      return view('backend.pages.categories.create',compact('main_categories'));
	}

	public function  store(Request $request)
    {
        $this->validate($request,[
          'name'  => 'required',
        
          'image'  => 'nullable|image',


        ],[  'name.required' =>"please provide a category name",'image.required' =>"please provide a valid image with .jpg .png .gif .jpeg e"
    ]);

         $category = new Category;
        $category->name = $request->name ;
        $category->description = $request->description ;
        $category->parent_id = $request->parent_id ;
        
 if($request->hasFile('image')){
        
             $image = $request->file('image');
            $img = time().'.'. $image->getClientOriginalName();
            $location = public_path('images/categories/'.$img);

          Image::make($image)->save($location);
          $category->image = $img;
             $category->save();

    }

        session()->flash("success",'A new category has added successfully !!!');

    return redirect()->route('admin.categories');

    }


public function  update(Request $request,$id)
    {
        $this->validate($request,[
          'name'  => 'required',
        
          'image'  => 'nullable|image',


        ],[  'name.required' =>"please provide a category name",'image.required' =>"please provide a valid image with .jpg .png .gif .jpeg e"
    ]);

         $category =  Category ::find($id);
        $category->name = $request->name ;
        $category->description = $request->description ;
        $category->parent_id = $request->parent_id ;
        
// if(count($request->image)>0){

	if(File::exists('iamges/categories/'.$category->image)){

		File::delete('iamges/categories/'.$category->image);
	// }
        
             $image = $request->file('image');
	
            $img = time().'.'. $image->getClientOriginalName();
            $location = public_path('images/categories/'.$img);

          Image::make($image)->save($location);
          $category->image = $img;

      }

           
             $category->save();


    

        session()->flash("success",'A new category has added successfully !!!');

    return redirect()->route('admin.categories');

    }







    public function edit($id)
    {
	     $main_categories = Category::orderBy('name','desc')->where('parent_id',NULL)->get();
       $category = Category::find($id);
     	if(!is_null($category))
     	{
            return view('backend.pages.categories.edit',compact('category','main_categories'));
     	} else{
     		return redirect()->route('admin.categories');
     	}

    }

    public function delete($id)
    {


$category = Category::find($id);
if(!is_null($category))
{
	// if it is parent category ,then delete all its categort
	if($category->parent_id == NULL)
	{
$sub_categories = Category::orderBy('name','desc')->where('parent_id',$category->id)->get();

foreach ($sub_categories as $sub) {
	if(File::exists('iamges/categories/'.$sub->image)){

		File::delete('iamges/categories/'.$sub->image);
	$sub->delete();
	# code...
}

	}
//delete category image
	if(File::exists('iamges/categories/'.$category->image)){

		File::delete('iamges/categories/'.$category->image);
	}
	$category->delete();
}

session()->flash('success','category has deleted successfully!!');
return back();

    }



}

}

