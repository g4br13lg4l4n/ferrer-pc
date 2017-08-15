<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ferrer PC</title>
    <link href="{{ asset('styles.css') }}" rel="stylesheet">
</head>
<body>
    @yield('content')
    <script src="{{ asset('bundle.js') }}"></script>
</body>
</html>
