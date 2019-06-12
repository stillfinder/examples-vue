<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Vue Sandbox | @yield('title')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="flex min-h-screen flex-col" id="app">
        @include('partials.navbar', ['active' => $active])

        <div class="container mx-auto flex-1 flex flex-col mt-10 section">
            @yield('content')
        </div>

        @include('partials.footer')
    </div>

    <script src="{{ mix('js/app.js') }}"></script>

</body>
</html>