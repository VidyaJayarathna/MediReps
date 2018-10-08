@extends('PatientBlogs.PatientLayout.Patientapp')

@section('contentPatients')
<div class="col-lg-9 mb-4">
  <h2>Patient Profile</h2>

  <div>
    <div class="form-group row">
      <label class="col-md-4" > Patient Code </label>
      <input type="text" name="pationCode" class=" form-control col-md-6" readonly>
    </div>
    <div class="form-group row"  style="margin-left:5px"><i><b>
      <label > Patient Name </label></b></i>
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
    <label class="col-md-4"> Country </label>
    <input type="text" name="country" class=" form-control col-md-6">
  </div>
  <div class="form-group row">
    <label class="col-md-4"> Sex </label>
    <input type="radio" name="sex" value="female">   Female
  </div>
  <div class="form-group row">
    <label  class="col-md-4"> Date Of Birth </label>
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
  <input type="button" value="Update" class="btnlog col-md-2">
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta, et temporibus, facere perferendis veniam beatae non debitis, numquam blanditiis necessitatibus vel mollitia dolorum laudantium, voluptate dolores iure maxime ducimus fugit.</p>
</div>
@endsection
