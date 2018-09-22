@extends('layout.app')
@section('content')
<h1> Patient Registation</h1>

{!! Form::open(['url' => 'Patient/submit']) !!}
<div>
  <div style="margin-left:5px">
    <div class="form-group row">
      <label class="col-md-3"> Pation Code </label>
      <input type="text" name="pationCode" class=" form-control col-md-6">
    </div>
  <div class="form-group row">
    <label class="col-md-3"> Pation Name </label>
    <input type="text" name="pationName" class=" form-control col-md-6">
  </div>
  <div class="form-group row">
    <label  class="col-md-3"> Address </label>
    <input type="textarea" name="address" class=" form-control col-md-6">
  </div>
  <div class="form-group row">
    <label class="col-md-3"> Country </label>
    <input type="text" name="country" class=" form-control col-md-6">
  </div>
  <div class="form-group row">
    <label  class="col-md-3"> Date Of Birth </label>
    <input type="date" name="DOB" class=" form-control col-md-6">
  </div>
  <div class="form-group row">
    <label  class="col-md-3"> Contact Number 1</label>
    <input type="text" name="telephone1" class=" form-control col-md-6">
  </div>
  <div class="form-group row">
    <label  class="col-md-3"> Contact Number 2</label>
    <input type="text" name="telephone2" class=" form-control col-md-6">
  </div>
  <div class="form-group row">
    <label class="col-md-3"> Email </label>
    <input type="text" name="email" class=" form-control col-md-6">
  </div>
</div>
</div>

  {{Form::submit('Save', ['class'=> 'btn btn-primary'])}}
{!! Form::close() !!}
@endsection
