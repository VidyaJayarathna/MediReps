<!DOCTYPE>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/modern-business.css" rel="stylesheet">
  <title>Medireps</title>
</head>
<body>
    <!-- Navigation -->
  @include('inc.navebar')
    <!-- Messages -->
  @include('inc.messages');
    <!-- Page Content -->
  @yield('content')

  <footer id="footer" class="text-center" >
    <p>copyrigth 2018 &copy; Acme</p>
  </footer>
</body>
</html>
