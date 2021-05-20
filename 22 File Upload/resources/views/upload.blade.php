
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

<div class="container">
<h1 class="mt-5 text-center">upload files</h1>

{{-- @if (session('email'))
<h2 class="text-success">{{session('email')}} has been added</h2>
@endif --}}

<form action="upload" method="POST" enctype="multipart/form-data">
    @csrf
  <div class="mb-3 ">
    <label for="file" class="form-label">File uploading</label>
    <input type="file" class="form-control" id="file" name="file" aria-describedby="emailHelp">
  </div>

  {{-- <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password">
  </div> --}}

  <button type="submit" class="btn btn-primary">upload file</button>
</form>

</div>

