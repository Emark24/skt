<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <title>Conference System</title>
</head>
<body>
    <nav>
        <a href="/">Home</a>
        <a href="#">Logout</a>
    </nav>
    <main>
        @yield('content')
    </main>
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
