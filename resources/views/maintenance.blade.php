
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/0e035b9984.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/0e035b9984.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('asset/css/main.css') }}">
</head>

<body class="min-vh-100 d-flex flex-column">

    @include('layouts.include.header')
    <main class="my-auto">
        <div class="container">
            <h1 class="page-title">We're coming soon</h1>
            <p class="page-description">Something Big is Coming Your Way”, “Be The First To Know”, or “Drop By Again Soon”
            </p>
            {{-- <p>Stay connected</p>
            <nav class="footer-social-links">
                <a href="#!" class="social-link"><i class="mdi mdi-facebook-box"></i></a>
                <a href="#!" class="social-link"><i class="mdi mdi-twitter"></i></a>
                <a href="#!" class="social-link"><i class="mdi mdi-google"></i></a>
                <a href="#!" class="social-link"><i class="mdi mdi-slack"></i></a>
                <a href="#!" class="social-link"><i class="mdi mdi-skype"></i></a>
            </nav> --}}
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>

</html>
