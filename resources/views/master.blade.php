<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>
            @hasSection('title')
                @yield('title') |
            @endif
            {{ config('app.name') }}
        </title>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">

        <!-- resources -->
        @vite([
            'resources/css/app.css',
            'resources/css/Nunito.css',

            'resources/sass/app.scss',
            'resources/sass/custom.scss',

            'resources/js/bootstrap.js',
            'resources/js/app.js',
        ])
        @yield('styles')

        <script src={{asset('js/ckeditor.js')}}></script>

    </head>

    <body>
        <main class="container pt-5">
            @yield('content')
        </main>

        <script>
            ClassicEditor
                .create( document.querySelector( '.ckeditor' ) )
                .then( editor => {
                    console.log( editor );
                } )
                .catch( error => {
                    console.error( error );
                } );
        </script>

        @yield('scripts')
    </body>
</html>
