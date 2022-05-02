
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


<div class="container my-5">
        <div class="row">
            <div class="col-xs-12">
                <div  class="text-center my-5">
                    <a  id="products" class="btn btn-success btn-lg" href="{{URL::to('add/product')}}">Products</a>
                    <a  id="categories" class="btn btn-danger btn-lg" href="{{URL::to('add/category')}}">Categories</a>

                </div>
            </div>
        </div>
    </div>



</body>
</html>
