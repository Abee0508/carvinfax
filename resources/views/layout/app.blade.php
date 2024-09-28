<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ asset('front/images/favicon.png') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('front/css/custom.css') }}">
    <link href="{{ asset('front/css/cndk.beforeafter.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('front/css/responsive.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('front/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/slick-theme.css') }}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('front/css/owl.carousel.min.css') }}">
    <!-- Use only one version of Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('front/css/fancybox.min.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Georgian:wght@100..900&display=swap"
          rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">

    <style>
        .invalid {
            border-color: red; /* Optional: Style for invalid input */
        }

        .valid {
            border-color: green; /* Optional: Style for valid input */
        }
    </style>

    <title>Carvin Fax</title>
</head>
<body>

<header id="main-header">
    <div class="container">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ route('front.index') }}">
                    <img src="{{ asset('front/images/logo.png') }}">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('front.index') }}">
                                <i class="fa-solid fa-house"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('front.about') }}"> About Us
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('front.pricing') }}">
                                Packages
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('front.sample.report') }}">Sample Report</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('front.vehicle.history') }}">
                                Vehicle History Report
                            </a>
                        </li>
                    </ul>
                    <div class="lang-signup">
                        <button id="language">
                            <img src="{{ asset('front/images/language.png') }}">
                            <span id="current-lang">EN</span>
                        </button>
                        <a href="{{ route('front.pricing') }}">Buy a report</a>
                    </div>
                </div>

            </div>
        </nav>
    </div>
</header>

@yield('content')

<footer>
    <div class="container">
        <div class="headd">
            <div>
                <img src="{{ asset('front/images/logo-white.png') }}">
                <a href="mailto:support@carvinfax.com">support@carvinfax.com</a>
            </div>
            <img src="{{ asset('front/images/footer-imgg.svg') }}">
        </div>
        <div class="bodyy">
            <ul>
                <li><a href="{{ route('front.index') }}">Home</a></li>
                <li><a href="{{ route('front.about') }}">About Us</a></li>
                <li><a href="{{ route('front.pricing') }}">Packages</a></li>
                <li><a href="{{ route('front.sample.report') }}">Sample Report</a></li>
                <li><a href="{{ route('front.vehicle.history') }}">Vehicle History Report</a></li>
            </ul>
        </div>
        <div class="footerr">
            <p>© Since 1999 - 2024 CVF Designs and Solutions LLC, All rights reserved</p>
            <img src="{{ asset('front/images/visa.png') }}">
        </div>
    </div>
</footer>

<script src="{{ asset('front/js/jquery-3.6.0.min.js') }}"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
<script src="{{ asset('front/js/cndk.beforeafter.js') }}"></script>
<script src="{{ asset('front/js/custom.js') }}"></script>

<!-- Google Translate Script -->
<script type="text/javascript"
        src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({
            pageLanguage: 'en',
            includedLanguages: 'en,ja,es,ru,de,tl'
        }, 'google_translate_element');
    }
</script>

</body>
</html>
