<!DOCTYPE html>
<html lang="en">
    <head>
        @include ('_partials.head')
    </head>
    <body>
        @include ('_partials.navigation')

        <main class="{{ isset($py) ? $py : 'py-4' }}">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="card mb-3"> {{-- Workflow guideline menu --}}
                            <div class="card-header">
                                <span class="text-secondary"><i class="fas fa-fw mr-1 fa-list"></i> Workflow guidelines</span>
                            </div>
                        </div> {{-- /// END workflow guideline menu --}}

                        <div class="card mb-3"> {{-- Coding guideline menu --}}
                            <div class="card-header">
                                <span class="text-secondary"><i class="fas fa-fw mr-1 fa-list"></i> Coding guidelines </span>
                            </div>
                            <div class="list-group list-group-flush">
                                <a href="#" class="list-group-item list-group-item-action">
                                    <i class="fab fa-fw mr-1 fa-php"></i> PHP & Laravel guidelines
                                </a>
                                <a href="" class="list-group-item list-group-item-action">
                                    <i class="fas fa-fw mr-2 fa-database"></i>MySQL guidelines
                                </a>
                            </div>
                        </div> {{-- /// END coding guideline menu --}}
                    </div>

                    <div class="col-md-9">
                        <div class="card card-body">
                            @yield('body')
                        </div>
                    </div>
                </div>
            </div>
        </main>


        <!-- Scripts -->
        <script src="{{ mix('js/main.js', 'assets/build') }}"></script>
        <script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js"></script>
    </body>
</html>
