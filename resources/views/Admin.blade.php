@extends('layout.app')

@section('content')
<h1> Admin Registation</h1>
{!! Form::open(['url' => 'Admin/submit']) !!}
<div style="margin-left:15vh; margin-right:15vh">
  <div style="margin-left:5px">
    <div class="form-group row">
      <label class="col-md-4"> Admin Code </label>
      <input type="text" name='adminCode' class='form-control col-md-6'>
    </div>
    <div class="form-group row">
      <label class="col-md-4">Branch id</label>
      <input type="text" name="branchid" class="form-control col-md-6">
    </div>
    <div class="form-group row">
      <label class="col-md-4">Admin Name</label>
      <input type="text" name="adminName" class="form-control col-md-6">
    </div>
    <div class="form-group row">
      <label class="col-md-4">Employee Number</label>
      <input type="text" name="adminName" class="form-control col-md-6">
    </div>
    <div class="form-group row">
      <label class="col-md-4">Password</label>
      <input type="password" name="password" class="form-control col-md-6">
    </div>
    <div class="form-group row">
      <label class="col-md-4">Confirm Password</label>
      <input type="password" name="password" class="form-control col-md-6">
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
