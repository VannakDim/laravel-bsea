<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <!-- Favicon -->
    <link href="/img/bsea-logo.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="/lib/animate/animate.min.css" rel="stylesheet">
    <link href="/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="/css/style.css" rel="stylesheet">

    <!-- Khmer Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chenla&family=Koulen&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container-xxl bg-white p-0">

        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="/" class="navbar-brand p-0">
                    <img src="/img/bsea-logo.png" width="50" height="50" class="d-inline-block align-middle" alt="brand logo">
                    <h1 class="d-inline-block align-middle m-0 brand-title">BSEA Cambodia</h1>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="/" class="nav-item nav-link">Home</a>
                        <a href="/about" class="nav-item nav-link">About</a>
                        <a href="/error" class="nav-item nav-link">Service</a>
                        <div class="nav-item dropdown">
                            <a id="dropdown-page" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu m-0 page">
                                <a href="/team" class="dropdown-item">Our Team</a>
                            </div>
                        </div>
                        <a href="/contact" class="nav-item nav-link">Contact</a>
                        <a href="/auth/login" class="nav-item nav-link">Login</a>
                        
                        <div class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle lang" data-bs-toggle="dropdown">EN</a>
                            <div class="dropdown-menu m-0">
                                <a class="dropdown-item lang-kh">ភាសាខ្មែរ</a>
                                <a class="dropdown-item lang-en">English</a>
                                <a class="dropdown-item lang-cn">中文</a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>

        @yield('heading')
        @yield('carousel')
        @yield('content')

        <!-- Footer Start -->
        <div class="container-fluid bg-primary text-light footer wow fadeIn" data-wow-delay="0.1s">
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-lg-12">
                            <h5 class="text-white mb-4">Get In Touch</h5>
                            <a class="text-white" href="https://goo.gl/maps/TYmLWon48gfHAK9f9"><i class="fa fa-map-marker-alt me-3"></i>#84,#86,#88 st.Betong, Borey The Varina Sen Sok, Krang Thnong, Sen Sok, Phnom Penh, Cambodia</a>
                            <br><a class="text-white"><i class="fa fa-phone-alt me-3"></i>+855 69 668 788</a>
                            <br><a class="text-white"><i class="fa fa-envelope me-3"></i>info@bseacambodia.org</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->

        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/lib/wow/wow.min.js"></script>
    <script src="/lib/easing/easing.min.js"></script>
    <script src="/lib/waypoints/waypoints.min.js"></script>
    <script src="/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="/js/main.js"></script>
    <script src="/js/activePage.js"></script>
    <script src="/js/langSwitcher.js"></script>
</body>
</html>