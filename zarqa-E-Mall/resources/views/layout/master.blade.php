<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Zarqa E-Mall</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/zoomify-logo.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Lemonada&family=Mada:wght@200&family=Scheherazade+New:wght@700&display=swap"
        rel="stylesheet">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    {{-- form style cdn --}}
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.css" rel="stylesheet" />

    <!-- =======================================================
  * Template Name: Moderna - v4.10.1
  * Template URL: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center header-transparent @yield('new-class', 'none')">
        <div class="container d-flex justify-content-between align-items-center">

            <nav id="navbar" class="navbar">
                <i class="bi bi-list mobile-nav-toggle"></i>
                <ul>
                    <li><a data-mdb-toggle="modal" data-mdb-target="#staticBackdropp" href=""
                            style="font-family: 'Lemonada', cursive;">السلة</a></li>
                    <i style="color:white; margin-left:3px;" class="fas fa-shopping-cart"></i>
                    <li><a class="{{ str_contains(Request::url(), '/login') ? 'active' : '' }}" href="login"
                            style="font-family: 'Lemonada', cursive;">تسجيل الدخول</a></li>
                    <li><a class="{{ str_contains(Request::url(), '/contact') ? 'active' : '' }}" href="contact"
                            style="font-family: 'Lemonada', cursive;">تواصل معنا</a></li>
                    <li><a class="{{ str_contains(Request::url(), '/about') ? 'active' : '' }}" href="about"
                            style="font-family: 'Lemonada', cursive;">من نحن</a></li>
                    <li><a class="{{ str_contains(Request::url(), '/index') ? 'active' : '' }}" href="index"
                            style="font-family: 'Lemonada', cursive;">الرئيسية</a></li>
                    </li>
                </ul>
            </nav>
            <!-- .navbar -->
            <div class="logo">
                <h1 class="text-light"><a href="index"><span style="font-family: none;">Zarqa E-Mall</span></a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

        </div>
    </header>
    <!-------- End Header ------>


    <!------------ Modal AND CART --------------->
    <div class="modal fade" id="staticBackdropp" data-mdb-backdrop="static" data-mdb-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdroppLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header d-flex justify-content-between">
                    <h5 style="font-weight: 900" class="modal-title my-font my-color" id="staticBackdroppLabel">
                        عربةالتسوق</h5>
                    <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    {{-- ------------------------ CART START ------------------ --}}
                    <section class="h-100 w-100 h-custom" style="background-color: #1e4356;">
                        <div class="container py-5 h-100">
                            <div class="row d-flex justify-content-center align-items-center h-100">
                                <div class="col">
                                    <div class="card">
                                        <div class="card-body p-4">
                                            <div class="row">
                                                <div class="col-lg-12">

                                                    {{-- This is the cart items section --}}
                                                    <div class="card col-md-12 mb-3 p-0">
                                                        <div style="margin: 0%; padding:0%;" class="card-body w-50">
                                                            <div style="width:200px"
                                                                class="d-flex justify-content-between">
                                                                <div
                                                                    class="d-flex flex-row align-items-center col-md-12">
                                                                    <div>
                                                                        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-shopping-carts/img1.webp"
                                                                            class=" rounded-3" alt="Shopping item"
                                                                            style="width: 55px;">
                                                                    </div>
                                                                    <div class="ms-3">
                                                                        <p style="width:100px">Iphone 11
                                                                            pjhjkhhjhrkjkgfgfgfgdfgfgfgjkjkjkkjjho</p>
                                                                        {{-- <p class="small mb-0">256GB, Navy Blue</p> --}}
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex flex-row align-items-center">
                                                                    <div style="width: 50px;">
                                                                        <h5 class="fw-normal mb-0">2</h5>
                                                                    </div>
                                                                    <div style="width: 80px;">
                                                                        <h5 class="mb-0">$900</h5>
                                                                    </div>
                                                                    <a href="#!" style="color: #cecece;"><i
                                                                            class="fas fa-trash-alt"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    {{-- end cart items --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-mdb-dismiss="modal">
                        <p style="display: inline" class="my-font">إغلاق</p>
                    </button>
                    <a href="checkout"><button type="button" class="btn btn-success">
                            <p style="display:inline" class="my-font">الإنتقال للدفع</p>
                        </button></a>
                </div>
            </div>
        </div>
    </div>

    @yield('above-main')

    {{-- start main --}}
    <main>

        @yield('content')

    </main>


    {{-- Footer start --}}
    <footer id="footer" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-info">
                        <h3 class="my-font right">عن متجر الزرقاء الإلكتروني</h3>
                        <h6 style="line-height: 25px;" class="my-font right">هو إول موقع إلكتروني متخصص لجمع كافة
                            انواع المتاجر من شارع السعادة الكائن في مدينة الزرقاء في مكان واحد سهل وسريع الوصول اليه في
                            أي وقت</h6>
                        <div class="social-links mt-3">
                            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                        </div>
                    </div>


                    <div class="col-lg-4 col-md-6 footer-contact">
                        <h4 class="my-font right">تواصل معنا</h4>
                        <p class="my-font right">
                            الزرقاء البتراوي<br>
                            الزرقاء الجديدة<br>
                            عمارة رقم 77<br><br>
                            +962-5589 55488<strong>: الهاتف</strong><br>
                            contact@yahoo.com<strong>: البريد الإلكتروني</strong><br>
                        </p>
                    </div>

                    <div class="col-lg-1 col-md-2 footer-links">
                        {{-- <h4>Our Services</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
                        </ul> --}}
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4 class="my-font right">للوصول السريع</h4>
                        <div class="d-flex justify-content-end">
                            <ul>
                                <li><a href="/index">
                                        <p style=" display:inline" class="right my-font d-flex justify-content-end">
                                            الرئيسية</p>
                                    </a></li>
                                <li><a href="/about">
                                        <p style=" display:inline" class="right my-font d-flex justify-content-end">من
                                            نحن</p>
                                    </a></li>
                                <li style="text-align: right"><a href="/contact">
                                        <h6 class="right my-font">تواصل معنا</h6>
                                    </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>Orange</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                Designed by <a href="https://github.com/Malek-ALdesougi">Malek AL-Desougi</a>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    {{-- form style cdn --}}
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.js"></script>

</body>

</html>
