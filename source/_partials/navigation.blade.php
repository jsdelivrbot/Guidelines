<nav class="navbar navbar-expand-md navbar-light navbar-laravel">
    <div class="container">
        <a class="navbar-brand" href="{{ $page->baseUrl }}">
            Nuclear Campaign - Guidelines
        </a>
          
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                &nbsp;
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="{{ $page->social->facebook_url }}" class="nav-link"><i class="fab social-facebook fa-facebook-square"></i></a>
                </li>

                <li class="nav-item">
                    <a href="{{ $page->social->twitter_url }}" class="nav-link"><i class="fab social-twitter fa-twitter"></i></a>
                </li>

                <li class="nav-item">
                    <a href="{{ $page->social->github_url }}" class="nav-link"><i class="fab social-github fa-github"></i></a>
                </li>
            </ul>
        </div>
    </div>
</nav>