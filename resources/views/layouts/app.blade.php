    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1"><!--Define a escala de tamanho(fonte,site) responsivamente-->
        <!--Import Google Icon Font-->
            <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

            <link rel="stylesheet" type="text/css" href="{{asset('lib/materialize/dist/css/materialize.css')}}">
            <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">


        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>



        <!-- Scripts -->
        <script>
            window.Laravel = {!! json_encode([
                'csrfToken' => csrf_token(),
            ]) !!};
        </script>
    </head>
    <body>

         

            @yield('content')


        <!-- Scripts -->
        <script src="{{asset('lib/jquery/dist/jquery.js')}}"></script>
        <script src="{{asset('lib/materialize/dist/js/materialize.js')}}"></script>
        <script src="{{asset('js/init.js')}}"></script>

    </body>
    </html>
