<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'Al-Qur\'an App')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Amiri:wght@400;700&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="safe-area">
        @yield('content')
        <script src="{{ asset('js/app.js') }}"></script>
    </div>
    {{-- <script src="https://cdn.jsdelivr.net/npm/@hotwired/turbo@7.3.0/dist/turbo.es2017-umd.js"></script> --}}
</body>
</html>
