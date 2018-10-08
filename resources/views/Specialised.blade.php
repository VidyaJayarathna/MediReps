@extends('layout.app')

@section('content')
<h1> Specialised Area </h1>
{!! Form::open(['url' => 'Diagnosis/submit']) !!}
<div style="margin-left:15vh; margin-right:15vh">
  <div style="margin-left:5px">
    <div class="form-group row">
      <label class="col-md-4"> Specialised Code </label>
      <input type="text" name='diagnosisCode' class='form-control col-md-6'>
    </div>
    <div class="form-group row">
      <label class="col-md-4"> Specialised Area </label>
      <input type="text" name='diagnosisName' class='form-control col-md-6'>
    </div>
    <div class="form-group row">
      <label class="col-md-4">Description</label>
      <input type="text" name="description" class="form-control col-md-6">
    </div>
    <div class="form-group row">
      <label class="col-md-4"> Sample Document </label>
      <input type="file" name="Doc1" class="col-md-6">
    </div>
  </div>
</div>

{{Form::submit('Save', ['class'=> 'btn btn-primary'])}}
{!! Form::close() !!}
@endsection
