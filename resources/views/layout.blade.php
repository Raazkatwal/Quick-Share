<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>QuickShare</title>
    <link rel="shortcut icon" href="{{ asset('img/pointer.webp') }}" type="image/x-icon">
    <script src="https://kit.fontawesome.com/a3c06e4acc.js" crossorigin="anonymous"></script>
    @vite('resources/css/app.css')
</head>

<body class="overflow-hidden">
        @stack('content');
</body>

</html>