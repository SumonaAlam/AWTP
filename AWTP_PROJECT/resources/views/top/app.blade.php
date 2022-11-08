<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Litol App</title>

  @vite('resources/js/app.js')
</head>

<body>

@include('top.header')

<div>
    @yield('content')
</div>

@include('top.footer')

</body>

</html>
