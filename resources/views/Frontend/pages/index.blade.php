@extends('Frontend.layouts.master')
@section('content')
<div class = 'container margin-top-20'>
	<div class= "row">
		<div class = "col-md-4">
       
           </div>
          
		<div class = "col-md-8">
			<h2>Welcome to our online Shopping</h2>
		<div class = "widget">
			<h3>All  products</h3>
			@include('frontend.pages.product.partials.all_products')
		
		</div>

		</div>
		</div>
		</div>	

	</div>




@endsection