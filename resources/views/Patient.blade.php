@extends('layout.app')
@section('content')
<h1> Patient Registation</h1>

{!! Form::open(['url' => 'Patient/submit']) !!}
<div>
  <div style="margin-left:15vh; margin-right:15vh">
      @include('PatientBlogs.Common.PatientPro')
  </div>
</div>

<button type="submit" class="btn btn-primary">{{$saveupdate}}</button>

{!! Form::close() !!}
@endsection
