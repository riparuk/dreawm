<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Dreawm') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased" id="theme-toggle">
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
        <!-- component -->
        <div class="w-full flex flex-row flex-wrap">
            <link rel="stylesheet" type="text/css"
                href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
            <style>
                .round {
                    border-radius: 50%;
                }
            </style>


            <div class="w-full bg-gray-30 dark:bg-gray-800 h-screen flex flex-row flex-wrap justify-center ">
                @if (Auth::check())
                    @include('components2.navbar2')
                @endif
                <div class="w-full md:w-3/4 lg:w-4/5 p-5 md:px-12 lg:24 h-full overflow-x-scroll antialiased ">
                    @yield('content')
                    <div class="h-16">
                        &nbsp
                    </div>
                </div>
            </div>

        </div>
    </div>
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
</body>

</html>
