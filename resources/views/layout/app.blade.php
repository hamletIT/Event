<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--========== BOX ICONS ==========-->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

        <!--========== CSS ==========-->
        <link rel="stylesheet" href="assets/css/styles.css">

        <title>@yield('title')</title>
    </head>
    <body>

        <!--========== SCROLL TOP ==========-->
        <a href="#" class="scrolltop" id="scroll-top">
            <i class='bx bx-chevron-up scrolltop__icon'></i>
        </a>

        <!--========== HEADER ==========-->
        <header class="l-header" id="header">
            <nav class="nav bd-container">
                <a href="" class="nav__logo">Events</a>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item"><a href="#home" class="nav__link active-link">Home</a></li>
                        <li class="nav__item"><a href="#about" class="nav__link">About</a></li>
                        <li class="nav__item"><a href="#services" class="nav__link">All Events</a></li>
                        <li class="nav__item"><a href="#menu" class="nav__link">Menu</a></li>
                        <li class="nav__item"><a href="#contact" class="nav__link">Contact us</a></li>
                        <li class="nav__item"><a href="{{route('login')}}" class="nav__link active-link">Log in</a></li>

                        <li><i class='bx bx-moon change-theme' id="theme-button"></i></li>
                    </ul>
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-menu'></i>
                </div>
            </nav>
        </header>

        @yield('content')
  <!--========== FOOTER ==========-->
  <footer class="footer section bd-container">
            <div class="footer__container bd-grid">
                <div class="footer__content">
                    <a href="#" class="footer__logo">Yerevan events</a>
                    <span class="footer__description">Events</span>
                    <div>
                        <a href="#" class="footer__social"><i class='bx bxl-facebook'></i></a>
                        <a href="#" class="footer__social"><i class='bx bxl-instagram'></i></a>
                        <a href="#" class="footer__social"><i class='bx bxl-telegram'></i></a>
                    </div>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">Services</h3>
                    <ul>
                        <li><a href="#" class="footer__link">something</a></li>
                        <li><a href="#" class="footer__link">something</a></li>
                        <li><a href="#" class="footer__link">something</a></li>
                        <li><a href="#" class="footer__link">something</a></li>
                    </ul>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">Information</h3>
                    <ul>
                        <li><a href="#" class="footer__link">something</a></li>
                        <li><a href="#" class="footer__link">something</a></li>
                        <li><a href="#" class="footer__link">something</a></li>
                        <li><a href="#" class="footer__link">something</a></li>
                    </ul>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">Adress</h3>
                    <ul>
                        <li>something</li>
                        <li>something</li>
                        <li>something</li>
                        <li>something</li>
                    </ul>
                </div>
            </div>

            <p class="footer__copy">&#169; 2022. Hamlet Hakobjanyan</p>
            <p class="footer__copy">&#169; Git hub. <a href="https://github.com/hamletIT">github.com</a> </p>
        </footer>

        <!--========== scripts ==========-->
        <script src="https://unpkg.com/scrollreveal"></script>
        <script src="assets/js/main.js"></script>

    </body>
</html>