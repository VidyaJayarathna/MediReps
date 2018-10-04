<!DOCTYPE>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- Bootstrap core CSS -->
  <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="{{asset('css/modern-business.css')}}" rel="stylesheet">
  <style>

</style>

  <title>Medireps</title>
</head>
<body>
    <!-- Navigation -->
  @include('inc.navebar')
    <!-- Messages -->
<div style="margin-left:20px">
  @include('inc.messages')
    <!-- Page Content -->
  @yield('content')
</div>


  <footer class="py-3 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; MediRep Team</p>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->

  <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>




</body>
</html>
