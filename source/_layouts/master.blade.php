<!DOCTYPE html>
<html lang="en">
    <head>
        @include ('_partials.head')
    </head>
    <body>
       @include ('_partials.navigation')

       <main class="{{ isset($py) ? $py : 'py-4' }}">
            @yield('body')
        </main>


        <!-- Scripts -->
        <script src="{{ mix('js/main.js', 'assets/build') }}"></script>
        <script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js"></script>
    </body>
</html>
