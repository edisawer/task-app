<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Task App</title>
    </head>
    <body> 
        <div class="container">
            @yield('content')
        </div>
        @vite(['resources/js/app.js'])
    </body>
</html>