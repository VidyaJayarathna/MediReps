@extends('PatientBlogs.PatientLayout.Patientapp')

@section('contentPatients')
<div class="col-lg-9 mb-4">
    <h2>Add Testing Details </h2>

    <div class="form-group row">
      <label class="col-md-4" > Visit Code </label>
      <input type="text" name="visitCode" class=" form-control col-md-6" >
    </div>
    <div class="form-group row">
      <label class="col-md-4"> Testing Code </label>
      <input type="text" name="testCode" class=" form-control col-md-6">
    </div>
    <div class="form-group row">
      <label  class="col-md-4"> Tested Date </label>
      <input type="date" name="testDate" class=" form-control col-md-6">
    </div>
    <div class="form-group row">
      <label class="col-md-4"> Test Description </label>
      <input type="text" name="testDes" class=" form-control col-md-6">
    </div>
    <div class="form-group row">
      <label class="col-md-4"> Test Documents 1</label>
      <input type="file" name="Doc1" class="col-md-6">
    </div>
    <div class="form-group row">
      <label class="col-md-4"> Test Documents 2</label>
      <input type="file" name="Doc2" class="col-md-6">
    </div>
</div>
@endsection
