@extends('layout.app')

@section('content')

<div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">Sidebar Page
        <small>Subheading</small>
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.html">Home</a>
        </li>
        <li class="breadcrumb-item active">About</li>
      </ol>

      <!-- Content Row -->
      <div class="row">
        <!-- Sidebar Column -->
      @include('PatientBlogs.PatirntInc.PatientSidebar')
        <!-- Content Column -->
      @yield('PatientBlogs.contentPatients')
      </div>
      <!-- /.row -->

</div>
    <!-- /.container -->

@endsection
