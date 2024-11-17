<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Page Title -->
<title> @yield('headadd', 'Welcome | Roman Stock Manager')</title>

    <!-- Google Fonts -->
    <!-- Config -->
    <link type="text/css" rel="stylesheet" href=" {{ asset('frontend/assets/css/config.css') }}">
    <!-- Libraries -->
    <link type="text/css" rel="stylesheet" href=" {{ asset('frontend/assets/css/libs.css') }}">
    <!-- Template Styles -->
    <link type="text/css" rel="stylesheet" href=" {{ asset('frontend/assets/css/style.css') }}">
    <!-- Responsive -->
    <link type="text/css" rel="stylesheet" href=" {{ asset('frontend/assets/css/responsive.css') }}">

    <!-- Favicon -->
    <link rel="icon" href=" {{ asset('frontend/assets/img/favicon.png') }}">
</head>
<body>
    <!-- Header -->
    <header id="bringer-header" class="is-frosted is-sticky" data-appear="fade-down" data-unload="fade-up">
        <!-- Desktop Header -->
        <div class="bringer-header-inner">
            <!-- Header Logo -->
            <div class="bringer-header-lp">
                <a href="./" class="bringer-logo">
                    <img src=" {{ asset('frontend/assets/img/logo.png') }}" alt="bringer." width="150px">
                </a>
            </div>
            <!-- Main Menu -->
            <div class="bringer-header-mp">
                <nav class="bringer-nav">
                    <ul class="main-menu" data-stagger-appear="fade-down" data-stagger-delay="75">
                    <a href="{{ route('welcome.route') }}">WELCOME</a>
                    <li>
                            <a href="{{ route('service.route') }}">SERVICES</a>
                        </li>
                        <li>
                        <a href="{{ route('faq.route') }}">FAQ</a>
                        </li>
                        <li>
                            <a href="{{ route('contact.route') }}">CONTACT</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <!-- Header Button -->
            <div class="bringer-header-rp">
                <a href="{{ route('login.route') }}" class="bringer-button">Login</a>
            </div>
            <div class="bringer-header-rp">
                <a href="{{ route('register.route') }}" class="bringer-button">SignUp</a>
            </div>
        </div>
        <!-- Mobile Header -->
        <div class="bringer-mobile-header-inner">
            <a href="./" class="bringer-logo">
                <img src=" {{ asset('frontend/assets/img/logo.png') }}" alt="bringer." width="200px">
            </a>
            <a href="#" class="bringer-mobile-menu-toggler">
                <i class="bringer-menu-toggler-icon">
                    <span></span>
                    <span></span>
                    <span></span>
                </i>
            </a>
        </div>
    </header>

  <!---main mtaa--->
  @yield('admin')
  @yield('faq')
  @yield('cont')
  @yield('serv')


    <!-- Right Click Protection Block -->
    <div class="bringer-rcp-wrap">
        <div class="bringer-rcp-overlay"></div>
        <div class="bringer-rcp-container">
            <h2>#MtaaDigital🚧</h2>
        </div>
    </div>

    <!-- Dynamic Backlight -->
    <div class="bringer-backlight"></div>

    <!-- JS Scripts -->
    <script src=" {{ asset('frontend/assets/js/lib/jquery.min.js') }}"></script>
    <script src=" {{ asset('frontend/assets/js/lib/libs.js') }}"></script>
    <script src=" {{ asset('frontend/assets/js/contact_form.js') }}"></script>
    <script src=" {{ asset('frontend/assets/js/st-core.js') }}"></script>
    <script src=" {{ asset('frontend/assets/js/classes.js') }}"></script>
    <script src=" {{ asset('frontend/assets/js/main.js') }}"></script>
</body>
</html>
