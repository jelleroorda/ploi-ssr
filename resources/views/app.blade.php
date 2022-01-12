<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link href="{{ mix('/css/app.css') }}" rel="stylesheet" />
    <script src="{{ mix('/js/app.js') }}" defer></script>

    @inertiaHead
</head>
<body class="font-sans antialiased">
    <noscript>
        <div class="w-full bg-yellow-500 text-center py-2">
            You need to enable JavaScript to properly use this app.
        </div>
    </noscript>

    @inertia
</body>
</html>
