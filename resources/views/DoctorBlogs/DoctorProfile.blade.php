@extends('DoctorBlogs.DoctorLayout.Doctorapp')

@section('contentDoctor')
<div class="col-lg-9 mb-4">
  <h2>Doctor Profile</h2>

  <div>
      @include('DoctorBlogs.Common.DoctorPro')
  </div>

  <input type="button" value="Update" class="btnlog col-md-2">
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta, et temporibus, facere perferendis veniam beatae non debitis, numquam blanditiis necessitatibus vel mollitia dolorum laudantium, voluptate dolores iure maxime ducimus fugit.</p>
</div>
@endsection
