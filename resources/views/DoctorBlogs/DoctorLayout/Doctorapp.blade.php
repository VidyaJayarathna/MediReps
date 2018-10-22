@extends('layout.app')

@section('content')

<div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3"> Doctor Name
      <!--  <small>Subheading</small> -->
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="/">Home</a>
        </li>
        <li class="breadcrumb-item active">Doctor Blog</li>
      </ol>

      <!-- Content Row -->
      <div class="row">
        <!-- Sidebar Column -->
      @include('DoctorBlogs.DoctorInc.DoctorSidebar')
        <!-- Content Column -->
      @yield('contentDoctor')
      </div>
      <!-- /.row -->

</div>
    <!-- /.container -->

@endsection
