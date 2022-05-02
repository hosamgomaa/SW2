<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Scripts -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>

<div class="position-relative">

  <div class="position-absolute top-0 end-0 px-5">
  <a id="main" class="btn btn-danger btn-lg" href="{{URL::to('/')}}">Return to Main</a>

  </div>

</div>

<div class="container w-25 my-5" >
<h1 class="text-center my-3 fw-bolder">Category Form</h1>
<form method="POST" action="{{url('/add-category')}}">
    {{csrf_field()}}
  <div class="mb-3">
    <label for="categoryName" class="form-label">Name</label>
    <input type="text" class="form-control" id="categoryName" name="categoryName" required>
  </div>
  <div class="mb-3">
    <label for="categoryDescription" class="form-label">Description</label>
    <input type="text" class="form-control" id="categoryDescription" name="categoryDescription" required>
  </div>
  <div class="mb-3">
    <label for="categoryImage" class="form-label">Image Url</label>
    <input type="text" class="form-control" id="categoryImage" name="categoryImage" required>
  </div>





  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@if (session('status'))
  <div id="status"  class="alert alert-success my-3">
  {{ session('status') }}
  </div>
  @endif

</div>



</body>
</html>
