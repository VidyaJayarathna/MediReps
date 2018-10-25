@extends('PatientBlogs.PatientLayout.Patientapp')

@section('contentPatients')
<div class="col-lg-9 mb-4">
  <h2>Patient Profile</h2>
  {!! Form::open(['url' => 'Patient/update']) !!}

  <div>
      @include('PatientBlogs.Common.PatientPro')
  </div>

<button type="submit" class="btn btn-primary">update</button>

{!! Form::close() !!}

  <p></p>
</div>
@endsection
