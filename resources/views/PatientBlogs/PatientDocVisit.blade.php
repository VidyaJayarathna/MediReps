@extends('PatientBlogs.PatientLayout.Patientapp')

@section('contentPatients')
<div class="col-lg-9 mb-4">
    <h2>Add New Doctor Visit Data </h2>

    <div class="form-group row">
      <label class="col-md-4" > Visit Code </label>
      <input type="text" name="visitCode" class=" form-control col-md-6" readonly>
    </div>
    <div class="form-group row">
      <label class="col-md-4"> Docter </label>
      <input type="text" name="doctor" class=" form-control col-md-6">
    </div>
    <div class="form-group row">
      <label  class="col-md-4"> Date Visited </label>
      <input type="date" name="DOB" class=" form-control col-md-6">
    </div>
    <div class="form-group row">
      <label  class="col-md-4"> Visit Description </label>
      <input type="text" name="DOB" class=" form-control col-md-6">
    </div>
    <div class="form-group row">
      <label class="col-md-4"> Visit Documents 1</label>
      <input type="file" name="Doc1" class="col-md-6">
    </div>
    <div class="form-group row">
      <label class="col-md-4"> Visit Documents 2</label>
      <input type="file" name="Doc2" class="col-md-6">
    </div>
</div>
@endsection
