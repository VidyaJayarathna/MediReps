@extends('layout.app')

@section('content')
<h1> Branch Registation</h1>
{!! Form::open(['url' => 'Branch/submit']) !!}
<div style="margin-left:15vh; margin-right:15vh">
  <div style="margin-left:5px">
    <div class="form-group row">
      <label class="col-md-4"> Branch Code </label>
      <input type="text" name='branchCode' class='form-control col-md-6'>
    </div>
    <div class="form-group row">
      <label class="col-md-4">Branch Name</label>
      <input type="text" name="branchName" class="form-control col-md-6">
    </div>
    <div class="form-group row">
      <label  class="col-md-4"> Address </label>
      <textarea  name="branchAddress" class=" form-control col-md-6"> </textarea>
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
      <label class="col-md-4">Description</label>
      <input type="text" name="description" class="form-control col-md-6">
    </div>
    <div class="form-group row">
      <label class="col-md-4">Picture </label>
      <input type="file" name="profPic" class="col-md-6">
    </div>
  </div>
</div>

{{Form::submit('Save', ['class'=> 'btn btn-primary'])}}
{!! Form::close() !!}
@endsection
