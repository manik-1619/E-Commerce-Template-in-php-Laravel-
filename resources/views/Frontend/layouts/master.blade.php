<!doctype html>
<html>
<head>
<meta charset = "utf-8">	
<title> @yield('title','Laravel Ecommerce project') </title>
<link rel = "stylesheet" href = "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
<link rel = "stylesheet" href = "{{asset('style.css')}} ">

</head>
<body>
<div class = "wrapper">

@include('Frontend.partials.nav')

@yield('content')




@include('Frontend.partials.footer')

</div>
@include('Frontend.partials.script')




 
</body>
</html>