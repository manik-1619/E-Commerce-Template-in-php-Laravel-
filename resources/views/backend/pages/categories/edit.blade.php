 @extends('backend.layouts.master')
@section('content')

 <div class="content-wrapper">
         
<div class = "card">
<div class = "card-header">
 
Edit Product
</div>

 <div class = "card-body">
  <form action ="{{route('admin.category.update',$category->id)}}" method = "post" enctype = "multipart/form-data">
  @csrf
 @include('backend.partials.messeges')
 
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" name = "name" id ="" aria-describedby="emailHelp" value="{{$category->name}}">
   
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Description(optional)</label>
   
    <textarea name ="description" rows = "8" cols = "80"  class = "form-control">{!!$category->description!!}</textarea>
  
    
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Parent Category(optional)</label>
   
    <select class = "form-control" name = "parent_id">
      <option value = "">Please select a primary category</option>
  
      @foreach($main_categories as $cat)
    <option value = "{{$cat->parent_id}}" > {{$cat->name}} </option>


      @endforeach

      


    </select>
  
    
  </div>
   

<div class="form-
group">
    <label for="oldimage">Category old Image </label><br>
<img src = "{!! asset('images/categories/'.$category->image)!!}" width = "100"><br>

       <label for="newimage">Category new Image(optional) </label>

      <input type="file" class="form-control" name = "image" id="image" >
  
   
  </div>


  <button type="submit" class="btn btn-success">Update Category</button>
</form>
</div>
          </div>
        </div>

  @endsection