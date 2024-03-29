<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
        SISTEM INFORMASI KEPEGAWAIAN
    </title>
    @include('layouts.partial.link')
</head>

<body class="g-sidenav-show   bg-gray-100">
<div class="min-height-300 bg-primary position-absolute w-100"></div>
@include('layouts.partial.asidenavbar')
<main class="main-content position-relative border-radius-lg ">
    @include('layouts.partial.header')
        @yield('content')
        @include('layouts.partial.footer')
</main>
</body>
@include('layouts.partial.script')
</html>