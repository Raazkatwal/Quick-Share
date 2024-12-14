<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>QuickShare</title>
    <link rel="shortcut icon" href="{{ asset('img/pointer.webp') }}" type="image/x-icon" />
    <script src="https://kit.fontawesome.com/a3c06e4acc.js" crossorigin="anonymous"></script>
    <script src="https://cdn.rawgit.com/davidshimjs/qrcodejs/gh-pages/qrcode.min.js"></script>
    @vite('resources/css/app.css')
</head>

<body class="overflow-hidden">
    @yield('content')
</body>
<script>
    function copyToClipboard() {
        var copyText = document.getElementById("myInput");
        var copyButton = document.getElementById("copyButton");
        var copyIcon = document.getElementById("copyIcon");

        navigator.clipboard.writeText(copyText.value);

        copyButton.disabled = true;
        copyButton.innerHTML = 'Copied <i class="fa-solid fa-check"></i>';

        setTimeout(function() {
            copyButton.innerHTML = 'Copy <i id="copyIcon" class="fa-solid fa-copy"></i>';
            copyButton.disabled = false;
        }, 2000);
    }
</script>
@stack('scripts')

</html>