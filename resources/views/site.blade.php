<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ isset($title) ? SITE_NAME.' - '.$title : SITE_NAME }}</title>
    <link rel="icon" type="image/png" href="{{ asset('images/logo/site_logo.png') }}">
    <link rel="stylesheet" href="css/site/style.css">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 text-gray-800">

    <!-- Header -->
    @include('site.layouts.header')

    <!-- Contenu -->
    <main class="pt-16">
        @yield('content')
    </main>

    <!-- Footer -->
    @include('site.layouts.footer')

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="js/site/script.js"></script>
    @yield('script')
</body>
</html>
