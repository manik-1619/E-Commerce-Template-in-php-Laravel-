<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Star Admin</title>
  <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css" />
  <link rel="stylesheet" href="node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css" />
  <link rel="stylesheet" href="node_modules/flag-icon-css/css/flag-icon.min.css" />
  <link rel="stylesheet" href="{{asset('css/admin_style.css')}}">
  <link rel="shortcut icon" href="{{asset('images/favicon.png')}}" >
</head>

<body>
  <div class=" container-scroller">
    <!-- partial:partials/_navbar.html -->
    @include('backend.partials.nav')

    <!-- partial -->
    <div class="container-fluid">
      <div class="row row-offcanvas row-offcanvas-right">
        <!-- partial:partials/_sidebar.html -->




 @include('backend.partials.left_sidebar')

       

        <!-- partial -->

       @yield('content')
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="float-right">
                <a href="#">Star Admin</a> &copy; 2017
            </span>
          </div>
        </footer>

        <!-- partial -->
      </div>
    </div>

  </div>

 <script src="{{asset('js/jquery-3.4.1.slim.min.js')}}"></script>


<script src="{{asset('js/popper.min.js')}}" ></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
  <script src="node_modules/chart.js/dist/Chart.min.js"></script>
  <script src="node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB5NXz9eVnyJOA81wimI8WYE08kW_JMe8g&callback=initMap" async defer></script>
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/misc.js"></script>
  <script src="js/chart.js"></script>
  <script src="js/maps.js"></script>
</body>

</html>
