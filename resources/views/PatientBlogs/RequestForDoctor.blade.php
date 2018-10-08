@extends('PatientBlogs.PatientLayout.Patientapp')

@section('contentPatients')

<div class="col-lg-9 mb-4">
  <h2>New Request For Doctor</h2>
  <div class="form-group row">
    <label class="col-md-4" > Visit Code </label>
    <input type="text" name="visitCode" class=" form-control col-md-6" >
  </div>
  <div class="form-group row">
    <label class="col-md-4"> Testing Code </label>
    <input type="text" name="testCode" class=" form-control col-md-6">
  </div>
  <div class="form-group row">
    <input type="checkbox"  class="col-md-3"> <label>   Report 1</label>
  </div>
  <div class="form-group row">
    <input type="checkbox"  class="col-md-3"> <label>   Report 2</label>
  </div>
  <div class="form-group row">
    <input type="checkbox"  class="col-md-3"> <label>   Report 3</label>
  </div>
  <div class="form-group row">
    <label class="col-md-4"> Other Documents </label>
    <input type="file" name="Doc" class="col-md-6">
  </div>
  <div class="form-group row">
    <label class="col-md-4"> Message </label>
    <input type="text" name="testCode" class=" form-control col-md-6">
  </div>
  <input type="button" value="Send" class="btnlog col-md-2">
</div>

@endsection
