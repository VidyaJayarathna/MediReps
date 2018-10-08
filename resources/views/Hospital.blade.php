@extends('layout.app')

@section('content')
<h1> Hospital </h1>
{!! Form::open(['url' => 'Hospital/submit']) !!}
<div style="margin-left:15vh; margin-right:15vh">
  <div style="margin-left:5px">
    <div class="form-group row">
      <label class="col-md-4"> Hospital Code </label>
      <input type="text" name='diagnosisCode' class='form-control col-md-6'>
    </div>
    <div class="form-group row">
      <label class="col-md-4"> Hospital Name </label>
      <input type="text" name='diagnosisName' class='form-control col-md-6'>
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
    <label class="col-md-4"> Country </label>
    <input type="text" name="country" class=" form-control col-md-6">
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
      <label class="col-md-4"> Sample Document </label>
      <input type="file" name="Doc1" class="col-md-6">
    </div>
    <div class="form-group row">
      <label class="col-md-4">Description</label>
      <input type="text" name="description" class="form-control col-md-6">
    </div>
  </div>
</div>

{{Form::submit('Save', ['class'=> 'btn btn-primary'])}}
{!! Form::close() !!}
@endsection
