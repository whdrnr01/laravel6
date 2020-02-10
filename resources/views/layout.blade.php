<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <title>@yield('title', 'Laravel')</title>
        <link rel="stylesheet" href="{{ mix('css/tailwind.css')}}">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    </head>
    <body>

        <div class="container mx-auto">
            <div class="bg-gray-200 right-0 py-10 text-center">
                <a href="/tasks" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">List</a>
                <a href="/tasks/create" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Create</a>
            </div>
            @yield('content')
        </div>

    </body>
</html>
