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
  <a  id="main" class="btn btn-danger btn-lg" href="{{URL::to('/')}}">Return to Main</a>

  </div>

</div>

<div class="container w-25 my-5" >
<h1 class="text-center my-3 fw-bolder">Products Form</h1>
<form method="POST" action="{{url('/add-product')}}">
    {{csrf_field()}}
  <div class="mb-3">
    <label for="productName" class="form-label">Name</label>
    <input type="text" class="form-control" id="productName" name="productName" required>
  </div>
  <div class="mb-3">
    <label for="productDescription" class="form-label">Description</label>
    <input type="text" class="form-control" id="productDescription" name="productDescription" required>
  </div>
  <div class="mb-3">
    <label for="productImage" class="form-label">Image Url</label>
    <input type="text" class="form-control" id="productImage" name="productImage" required>
  </div>

  <div class="mb-3">
    <label for="productPrice" class="form-label">Price</label>
    <input type="number" class="form-control" id="productPrice" name="productPrice" required>
  </div>
  <div class="input-group mb-3">
  <label class="input-group-text" for="productStatus">Status</label>
  <select class="form-select" id="productStatus"  name="productStatus" required>

    <option value="1">Available</option>
    <option value="0">Out Of Stock</option>
  </select>
</div>
<div class="input-group mb-3">
  <label class="input-group-text" for="productCategory">Category</label>
  <select class="form-select" id="productCategory"  name="productCategory" required>
            @foreach ($categories as $category)
              <option value="{{$category->id}}">{{$category->cat_name}}</option>
              @endforeach
  </select>
</div>


  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@if (session('status'))
  <div id="status" class="alert alert-success my-3">
  {{ session('status') }}
  </div>
  @endif

</div>



</body>
</html>
