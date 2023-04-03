<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">

    <title>@yield('title')</title>
    <link rel="stylesheet" href="/assets/css/style.css"/>
    {{-- <link rel="stylesheet" href="/bootstrap/dist/css/bootstrap.css"/> --}}


</head>

<body>

@include('components.header')

@yield('content')

</body>
</html>
