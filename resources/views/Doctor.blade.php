@extends('layout.app')

@section('content')
<h1> Doctor Registation</h1>
{!! Form::open(['url' => 'Doctor/submit']) !!}
<div>
  <div style="margin-left:5px">
    <div class="form-group row">
      <label class="col-md-3"> Doctor Code </label>
      <input type="text" name='doctorCode' class='form-control col-md-6'>
    </div>
    <div class="form-group row">
      <label class="col-md-3">Doctor Name</label>
      <input type="text" name="doctorName" class="form-control col-md-6">
    </div>
    <div class="form-group row">
      <label class="col-md-3">Address</label>
      <input type="text" name="address" class="form-control col-md-6">
    </div>
    <div class="form-group row">
      <label class="col-md-3">Country</label>
      <input type="text" name="country" class="form-control col-md-6">
    </div>
    <div class="form-group row">
    <label class="col-md-3"> Specialist in </label>
    <input type="text" name="specialisted" class=" form-control col-md-6">
  </div>
  <div class="form-group row">
    <label  class="col-md-3"> Sex </label>
    <input type="text" name="sex" class=" form-control col-md-6">
  </div>
   <div class="form-group row">
    <label  class="col-md-3"> DOB </label>
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
