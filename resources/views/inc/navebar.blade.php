<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container">

    <a class="navbar-brand" href="/">MediRep</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="/About">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/Services">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/Contact">Contact</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Registations
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
            <a class="dropdown-item" href="/Patient"> Patient Registation </a>
            <a class="dropdown-item" href="/Doctor"> Doctor Registation </a>
            <a class="dropdown-item" href="/Branch"> Branch Registation </a>
            <a class="dropdown-item" href="/Admin"> Admin Registation </a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Main File
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
            <a class="dropdown-item" href="/Testing"> Testing </a>
            <a class="dropdown-item" href="/Diagnosis">Diagnosis</a>
            <a class="dropdown-item" href="/Hospital">Hospital</a>
            <a class="dropdown-item" href="/Specialised">Specialised Area</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Blogs
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
            <a class="dropdown-item" href="Patientblog">Patient Blog</a>
            <a class="dropdown-item" href="Doctorblog">Doctor Blog</a>
              <a class="dropdown-item" href="popupform">Doctor Blog</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" onclick="document.getElementById('id01').style.display='block'" >Login</a>
        </li>

      </ul>
    </div>
  </div>
</nav>

<div id="id01" class="modal">
<!-- <form class="modal-content animate" action="Patient/Login"> -->
      {!! Form::open(['url' => 'Patient/Login']) !!}
      <div class="container">
        <div   style="background-color:#fdffb9; ">
          @include('login')
        </div>
      </div>
{!! Form::close() !!}
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
