
<!DOCTYPE html>
<html style="font-size: 16px;" lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Member Login">
    <meta name="description" content="">
    <title>Login</title>
    <link rel="stylesheet" href="{{asset('/forum/css/nicepage.css')}}" media="screen">
    <link rel="stylesheet" href="{{asset('/users/css/Login.css')}}" media="screen">
    <script class="u-script" type="text/javascript" src="{{asset('/forum/js/jquery.js')}}" defer=""></script>
    <script class="u-script" type="text/javascript" src="{{asset('/forum/js/nicepage.js')}}" defer=""></script>
    <meta name="generator" content="#">
    <link id="u-theme-google-font" rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">


    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Login">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
</head>
<body class="u-body u-xl-mode" data-lang="en">
<header class="u-clearfix u-header" id="sec-70aa">
    <div class="u-clearfix u-sheet u-sheet-1">
        <a class="u-login u-login-1"></a>
        <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
            <div class="menu-collapse">
                <a class="u-button-style u-nav-link" href="#">
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
                <ul class="u-nav u-unstyled">
                    <li class="u-nav-item"><a class="u-button-style u-nav-link" href="{{route('index')}}">Home</a>
                    </li>
                    <li class="u-nav-item"><a class="u-button-style u-nav-link" href="{{route('login')}}">Login</a>
                    </li>
                    <li class="u-nav-item"><a class="u-button-style u-nav-link" href="{{route('about')}}">About</a>
                    </li>
                </ul>

            </div>
        </nav>

    </div>
</header>
<section class="u-clearfix u-image u-section-1" id="sec-eb94" data-image-width="1771" data-image-height="1121">
    <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-align-center u-container-style u-grey-25 u-group u-shape-rectangle u-group-1">
            <div class="u-container-layout u-valign-top u-container-layout-1"><span class="u-file-icon u-icon u-icon-1"><img
                        src="{{asset('users/images/7399de1107c7f8cd95591f3755c1e07a.jpg')}}" alt=""></span>
                <h2 class="u-text u-text-body-alt-color u-text-default u-text-1">Member Register</h2>
                <div class="u-form u-login-control u-form-1">
                    <form action="{{ route('register.custom') }}" method="POST">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="username"></label><input type="text" placeholder="Username" id="username" class="form-control" name="username"
                                                                 required autofocus>
                            @if ($errors->has('username'))
                                <span class="text-danger">{{ $errors->first('username') }}</span>
                            @endif
                        </div>
                        <div class="form-group mb-3">
                            <label for="email_address"></label><input type="text" placeholder="Email" id="email_address" class="form-control"
                                                                      name="email" required autofocus>
                            @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                        <div class="form-group mb-3">
                            <input type="password" placeholder="Password" id="password" class="form-control"
                                   name="password" required>
                            @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
                        </div>
{{--                        <div class="form-group mb-3">--}}
{{--                            <div class="checkbox">--}}
{{--                                <label><input type="checkbox" name="remember"> Remember Me</label>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="d-grid mx-auto">--}}
{{--                            <button type="submit" class="btn btn-dark btn-block">Sign up</button>--}}
{{--                        </div>--}}
                        <div class="u-align-left u-form-group u-form-submit">
                            <button type="submit"
                                    class="u-active-palette-2-light-2 u-border-none u-btn u-btn-submit u-button-style u-hover-palette-2-light-2 u-palette-5-dark-1 u-text-active-palette-2-base u-text-body-alt-color u-text-hover-palette-2-base u-btn-1">
                                Register
                            </button>
                            <input type="submit" value="submit" class="u-form-control-hidden">
                        </div>
                        <input type="hidden" value="" name="recaptchaResponse">
                    </form>
{{--                    <form method="post"--}}
{{--                          class="u-clearfix u-form-custom-backend u-form-spacing-10 u-form-vertical u-inner-form"--}}
{{--                          source="custom" name="form" style="padding: 0px;">--}}

{{--                        <div class="u-form-group u-form-name">--}}
{{--                            <label for="username-a30d" class="u-label u-text-grey-5 u-label-1">Username *</label>--}}
{{--                            --}}
{{--                        </div>--}}

{{--                        <div class="u-align-left u-form-group u-form-submit">--}}
{{--                            <button type="submit"--}}
{{--                                    class="u-active-palette-2-light-2 u-border-none u-btn u-btn-submit u-button-style u-hover-palette-2-light-2 u-palette-5-dark-1 u-text-active-palette-2-base u-text-body-alt-color u-text-hover-palette-2-base u-btn-1">--}}
{{--                                Register--}}
{{--                            </button>--}}
{{--                            <input type="submit" value="submit" class="u-form-control-hidden">--}}
{{--                        </div>--}}
{{--                        <input type="hidden" value="" name="recaptchaResponse">--}}
{{--                    </form>--}}
                </div>
            </div>
        </div>
    </div>
</section>


<footer class="u-align-center u-clearfix u-footer u-grey-90 u-footer" id="sec-12d5">
    <div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1">Cit-Cat! 2022</p>
    </div>
</footer>
<section class="u-backlink u-clearfix u-grey-80">
    <a class="u-link" href="#" target="_blank">
        <span>Website Templates</span>
    </a>
    <p class="u-text">
        <span>created with</span>
    </p>
    <a class="u-link" href="" target="_blank">
        <span>Website Builder Software</span>
    </a>.
</section>

</body>
</html>
