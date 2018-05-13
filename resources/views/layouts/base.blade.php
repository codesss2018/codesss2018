<!DOCTYPE HTML>
<html>
<head>
<title>Anyone Anywhere can Learn Anything | code-s.org</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
@section('css')
@include('layouts/styles')
@show

</head>
<body>
@include('layouts/head')
@include('layouts/nav')

@yield('content')
@include('layouts/login')
@section('js')
@include('layouts/scripts')
@show
</body>
</html>
