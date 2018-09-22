<!DOCTYPE>
<html>
<head>
  <meta charset="utf-8">
  <title>Medireps</title>
  <link rel="stylesheet" href="/css/app.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
  @include('inc.navebar')



<div class="row col-md-13">
  <div class="col-md-1">
  </div>
    <div class="col-md-11">
<div  id='bodycontent' >
  <div style="margin-top:10px">
    @if(Request::is('/'))
      @include('inc.showcase')
    @endif
  </div>

  <div class="row">
      <div class="col-md-8 ">
        @include('inc.messages');
        @yield('content')
      </div>
      <div class="col-md-4 ">
        @include('inc.sidebar')
      </div>
  </div>
</div>
</div>
</div>

  <footer id="footer" class="text-center" >
  <p>copyrigth 2018 &copy; Acme</p>
</footer>

</body>
</html>
