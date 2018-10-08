@extends('layout.app')

@section('content')
<h1> Doctor Registation</h1>
{!! Form::open(['url' => 'Doctor/submit']) !!}
<div>
  <div style="margin-left:15vh; margin-right:15vh">
    <div class="form-group row">
      <label class="col-md-4"> Doctor Code </label>
      <input type="text" name='doctorCode' class='form-control col-md-6'>
    </div>
    <div class="form-group row"  style="margin-left:5px"><i><b>
      <label > Doctor Name </label></b></i>
    </div>
    <div class="form-group row">
      <label class="col-md-4"> First Name </label>
      <input type="text" name="firstName" class=" form-control col-md-6">
    </div>
    <div class="form-group row">
      <label class="col-md-4"> Last Name </label>
      <input type="text" name="lastName" class=" form-control col-md-6">
    </div>
    <div class="form-group row"  style="margin-left:5px"><i><b>
      <label > Address </label></b></i>
    </div>
    <div class="form-group row">
      <label  class="col-md-4"> Line 1 </label>
      <input type="textarea" name="addLine1" class=" form-control col-md-6">
    </div>
    <div class="form-group row">
      <label  class="col-md-4"> Line 2 </label>
      <input type="textarea" name="addLine2" class=" form-control col-md-6">
    </div>
    <div class="form-group row">
      <label  class="col-md-4"> Line 3 </label>
      <input type="textarea" name="addLine3" class=" form-control col-md-6">
    </div>
    <div class="form-group row">
      <label  class="col-md-4"> City </label>
      <input type="textarea" name="city" class=" form-control col-md-6">
    </div>
    <div class="form-group row">
      <label  class="col-md-4"> District </label>
      <input type="textarea" name="district" class=" form-control col-md-6">
    </div>
    <div class="form-group row">
      <label class="col-md-4">Country</label>
      <input type="text" name="country" class="form-control col-md-6">
    </div>
    <div class="form-group row">
      <label class="col-md-4"> Specialist in </label>
      <input type="text" name="specialisted" class=" form-control col-md-6">
    </div>
    <div class="form-group row">
      <label class="col-md-4"> Base Hospital </label>
      <input type="select" name="specialisted" class=" form-control col-md-6">
    </div>
    <div class="form-group row">
      <label  class="col-md-4"> Sex </label>
      <input type="text" name="sex" class=" form-control col-md-6">
    </div>
    <div class="form-group row">
      <label  class="col-md-4"> DOB </label>
      <input type="date" name="DOB" class=" form-control col-md-6">
    </div>
    <div class="form-group row">
      <label  class="col-md-4"> Contact Number 1</label>
      <input type="text" name="telephone1" class=" form-control col-md-6">
    </div>
    <div class="form-group row">
        <label  class="col-md-4"> Contact Number 2</label>
        <input type="text" name="telephone2" class=" form-control col-md-6">
    </div>
    <div class="form-group row">
      <label class="col-md-4"> Email </label>
      <input type="text" name="email" class=" form-control col-md-6">
    </div>
    <div class="form-group row">
      <label class="col-md-4"> Profile Picture </label>
      <input type="file" name="profPic" class="col-md-6">
    </div>
  </div>
</div>


{{Form::submit('Save', ['class'=> 'btn btn-primary'])}}
{!! Form::close() !!}
@endsection
