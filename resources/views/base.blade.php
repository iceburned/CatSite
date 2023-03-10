<!DOCTYPE html>
<html style="font-size: 16px;" lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title></title>
    <link rel="stylesheet" href="{{ asset('/forum/css/nicepage.css') }}" media="screen">
    <link rel="stylesheet" href="{{ asset('/forum/css/Home.css') }}" media="screen">
    <script class="u-script" type="text/javascript" src="{{ asset('/forum/js/jquery.js') }}" defer=""></script>
    <script class="u-script" type="text/javascript" src="{{ asset('/forum/js/nicepage.js') }}" defer=""></script>
    <meta name="generator" content="">
    <meta name="referrer" content="origin">
    <link id="u-theme-google-font" rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster:400">
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Home">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
</head>
<body data-home-page="Home.html" data-home-page-title="Home" class="u-body u-xl-mode" data-lang="en">
<header class="u-clearfix u-header" id="sec-70aa">
    <div class="u-clearfix u-sheet u-sheet-1">

        <a class="u-align-left u-custom-font u-font-lobster u-login u-text-black u-text-hover-palette-2-light-2 u-login-1">Cit-Cat!</a>

        <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
            <div class="menu-collapse u-custom-font u-font-lobster" style="font-size: 1.5rem;">
                <a class="u-button-style u-custom-text-color u-nav-link" href="#">
                    <svg class="u-svg-link" viewBox="0 0 24 24">
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-651f"></use>
                    </svg>
                    <svg class="u-svg-content" version="1.1" id="svg-651f" viewBox="0 0 16 16" x="0px" y="0px"
                         xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
                        <g>
                            <rect y="1" width="16" height="2"></rect>
                            <rect y="7" width="16" height="2"></rect>
                            <rect y="13" width="16" height="2"></rect>
                        </g>
                    </svg>
                </a>
            </div>
            <div class="u-custom-menu u-nav-container">
                <ul class="u-custom-font u-font-lobster u-nav u-unstyled u-nav-1">
                    <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-palette-5-dark-1"
                                              href="{{route('index')}}">Home</a></li>

                    @if(auth()->check())
                    <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-palette-5-dark-1"
                                              href="{{route('signout')}}">Logout</a></li>
                    <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-palette-5-dark-1"
                                              href="{{route('about')}}">About</a></li>
                    @else
                    <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-palette-5-dark-1"
                                              href="{{route('login')}}">Login</a></li>
                    <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-palette-5-dark-1"
                                              href="{{route('register-user')}}">Register</a></li>
                    <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-palette-5-dark-1"
                                              href="{{route('about')}}">About</a></li>
                    @endif
                </ul>
            </div>
            <div class="u-custom-menu u-nav-container-collapse">
                <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
                    <div class="u-inner-container-layout u-sidenav-overflow">
                        <div class="u-menu-close"></div>
                        <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-3">

                            <li class="u-nav-item"><a class="u-button-style u-nav-link" href="#">Home</a>
                            </li>
                            <li class="u-nav-item"><a class="u-button-style u-nav-link" href="#">Forum</a>
                                <div class="u-nav-popup">
                                    <ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10">
                                        <li class="u-nav-item"><a class="u-button-style u-nav-link" href="#">Posts</a>
                                        </li>
                                        <li class="u-nav-item"><a class="u-button-style u-nav-link" href="#">Topic</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
            </div>
        </nav>
        @if(False)
        <form action="{% url 'search' subcategory_pk %}" method="get"
              class="u-align-left u-border-1 u-border-grey-30 u-search u-search-left u-white u-search-1">
            <button class="u-search-button" type="submit">
            <span class="u-search-icon u-spacing-10">
              <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 56.966 56.966"><use
                      xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-8c15"></use></svg>
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                   id="svg-8c15" x="0px" y="0px" viewBox="0 0 56.966 56.966"
                   style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve" class="u-svg-content"><path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z"></path></svg>
            </span>
            </button>
            <input class="u-search-input" type="search" name="q" value="" placeholder="Search">
        </form>
        @elseif(False)
        <form action="{% url 'search_topic' subcategory_pk topics_ek %}" method="get"
              class="u-align-left u-border-1 u-border-grey-30 u-search u-search-left u-white u-search-1">
            <button class="u-search-button" type="submit">
                <span class="u-search-icon u-spacing-10">
                <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 56.966 56.966"><use
                        xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-8c15"></use></svg>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                     id="svg-8c15" x="0px" y="0px" viewBox="0 0 56.966 56.966"
                     style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve" class="u-svg-content"><path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z"></path></svg>
                </span>
            </button>
            <input class="u-search-input" type="search" name="q" value="" placeholder="Search">
        </form>
        @endif
    </div>
</header>

    @yield('nav')

<footer class="u-align-center u-clearfix u-footer u-grey-90 u-footer" id="sec-12d5">
    <div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1">Cat Chat 2022</p>
    </div>
</footer>
<section class="u-backlink u-clearfix u-grey-80">
    <a class="u-link" href="#" target="_blank">
        <span>Website Templates</span>
    </a>
    <p class="u-text">
        <span>created by</span>
    </p>
    <a class="u-link" href="" target="_blank">
        <span>Teodor Vulev</span>
    </a>.
</section>

</body>
</html>
