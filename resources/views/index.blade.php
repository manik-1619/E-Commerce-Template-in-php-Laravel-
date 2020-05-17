@extends('layouts.master')
@section('content')
<div class = 'container margin-top-20'>
	<div class= "row">
		<div class = "col-md-4">
          <div class="list-group">
           <a href="#" class="list-group-item list-group-item-action">First item</a>
           <a href="#" class="list-group-item list-group-item-action">Second item</a>
           <a href="#" class="list-group-item list-group-item-action">Third item</a>
           <a href="#" class="list-group-item list-group-item-action">Fourth item</a>
           <a href="#" class="list-group-item list-group-item-action">Fifth item</a>
           <a href="#" class="list-group-item list-group-item-action">Sixth item</a>
           <a href="#" class="list-group-item list-group-item-action">Seventh item</a>
           <a href="#" class="list-group-item list-group-item-action">Eighth item</a>
           <a href="#" class="list-group-item list-group-item-action">Ninth item</a>
           <a href="#" class="list-group-item list-group-item-action">Tenth item</a>
           <a href="#" class="list-group-item list-group-item-action">Eleventh item</a>
           </div>
           </div>
          
		<div class = "col-md-8">
			<h2>Welcome to our online Shopping</h2>
		<div class = "widget">
			<h3>All products</h3>
			@include('frontend.pages.product.partials.all_products')
		</div>
		</div>
		</div>
		</div>	

@endsection