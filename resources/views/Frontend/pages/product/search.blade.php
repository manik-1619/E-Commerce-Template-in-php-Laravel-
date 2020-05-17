@extends('Frontend.layouts.master')


@section('content')


<div class = 'container margin-top-20'>
	<div class= "row">
	<div class = "col-md-4">
	@include('Frontend.partials.product_sidebar')	
     </div>
		<div class = "col-md-8">
			<div class = "widget">
			<h3> Searched Products For - <span class = "badge badge-primary">{{$search}}</span></h3>
			@include('frontend.pages.product.partials.all_products')
		
	</div>
	
		</div>

		</div>
	</div>	

@endsection