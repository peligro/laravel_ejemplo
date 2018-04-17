<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <title>Título por defecto - @yield('title')</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('public/css/bootstrap.min.css') }}" />
    </head>
    <body>
        
        
        <div class="container">
            <div class="panel panel-primary">
                <div class="panel-heading">Listado de productos</div>
                <div class="panel-body">

                    <!--contenido-->
                    @yield('content')
                    <!--/contenido-->
                    
                </div>
            </div>
            
        </div>

        <!--dependencias javascript-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script type="text/javascript" src="{{ asset('public/js/bootstrap.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('public/js/funciones.js') }}"></script>
        @stack('scripts')
        <!--/dependencias javascript-->
    </body>
</html>