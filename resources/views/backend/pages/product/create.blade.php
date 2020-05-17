 @extends('backend.layouts.master')
@section('content')

 <div class="content-wrapper">
         
<div class = "card">
<div class = "card-header">
 
Add Product
</div>

 <div class = "card-body">
  <form action ="{{route('admin.product.store')}}" method = "post" enctype = "multipart/form-data">
{{ csrf_field()}}
 @include('backend.partials.messeges')
 
  <div class="form-group">
    <label for="exampleInputEmail1">Title</label>
    <input type="text" class="form-control"name = "title" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter title">
   
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Description</label>
   
    <textarea name ="description" rows = "8" cols = "80"  class = "form-control"></textarea>
  
    
  </div>


   <div class="form-group">
    <label for="exampleInputEmail1">Price</label>
    <input type="integer" class="form-control"name = "price" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter price">
    
  </div>


   <div class="form-group">
    <label for="exampleInputEmail1">Quantity</label>
    <input type="integer" class="form-control" name = "quantity" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Quantity">
   
  </div>

  

<div class="form-
group">
    <label for="product_image">Product Image </label>
  <div class = "row">
   <div class = "col-md-4">
      <input type="file" class="form-control" name = "product_image[]" id="product_image" >
   </div>

    <div class = "col-md-4">
      <input type="file" class="form-control" name = "product_image[]" id="product_image" >
   </div>

    <div class = "col-md-4">
      <input type="file" class="form-control" name = "product_image[]" id="product_image" >
   </div>

    <div class = "col-md-4">
      <input type="file" class="form-control" name = "product_image[]" id="product_image" >
   </div>
  </div>
   
  </div>


  <button type="submit" class="btn btn-primary">Add product</button>
</form>
</div>
          </div>
        </div>

  @endsection