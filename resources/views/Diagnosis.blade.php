@extends('layout.app')

@section('content')
<h1> Diagnosis </h1>
{!! Form::open(['url' => 'Diagnosis/submit']) !!}
<div>
  <div style="margin-left:5px">
    <div class="form-group row">
      <label class="col-md-3"> Diagnosis Code </label>
      <input type="text" name='diagnosisCode' class='form-control col-md-6'>
    </div>
    <div class="form-group row">
      <label class="col-md-3"> Diagnosis Name </label>
      <input type="text" name='diagnosisName' class='form-control col-md-6'>
    </div>
    <div class="form-group row">
      <label class="col-md-3">Description</label>
      <input type="text" name="description" class="form-control col-md-6">
    </div>
  </div>
</div>

{{Form::submit('Save', ['class'=> 'btn btn-primary'])}}
{!! Form::close() !!}
@endsection
