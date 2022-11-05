<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Zarqa E-Mall</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
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
                    <li><a data-mdb-toggle="modal" data-mdb-target="#staticBackdrop" href=""
                            style="font-family: 'Lemonada', cursive;">السلة</a></li>
                    <i style="color:white; margin-left:3px;" class="fas fa-shopping-cart"></i>
                    <li><a href="login" style="font-family: 'Lemonada', cursive;">تسجيل الدخول</a></li>
                    <li><a href="contact" style="font-family: 'Lemonada', cursive;">تواصل معنا</a></li>
                    <li><a href="about" style="font-family: 'Lemonada', cursive;">من نحن</a></li>
                    <li><a class="active" href="index" style="font-family: 'Lemonada', cursive;">الرئيسية</a></li>
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
    <div class="modal fade" id="staticBackdrop" data-mdb-backdrop="static" data-mdb-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header d-flex justify-content-between">
                    <h5 style="font-weight: 900" class="modal-title my-font my-color" id="staticBackdropLabel">عربةالتسوق</h5>
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
                                                    <h5 class="mb-3"><a href="#!" class="text-body"><i
                                                                class="fas fa-long-arrow-alt-left me-2"></i>Continue
                                                            shopping</a></h5>
                                                    <hr>

                                                    <div style="padding:0%;"
                                                        class="d-flex justify-content-between align-items-center mb-4">
                                                        <div>
                                                            <p class="mb-1">Shopping cart</p>
                                                            <p class="mb-0">You have 4 items in your cart</p>
                                                        </div>
                                                        <div>
                                                            <p class="mb-0"><span class="text-muted">Sort by:</span>
                                                                <a href="#!" class="text-body">price <i
                                                                        class="fas fa-angle-down mt-1"></i></a></p>
                                                        </div>
                                                    </div>

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
                                                                        <h5>Iphone 11 pro</h5>
                                                                        <p class="small mb-0">256GB, Navy Blue</p>
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
                    <button type="button" class="btn btn-danger" data-mdb-dismiss="modal"><p style="display: inline" class="my-font">إغلاق</p></button>
                    <button type="button" class="btn btn-success"><p style="display:inline" class="my-font">الإنتقال للدفع</p></button>
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
                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h4>Contact Us</h4>
                        <p>
                            A108 Adam Street <br>
                            New York, NY 535022<br>
                            United States <br><br>
                            <strong>Phone:</strong> +1 5589 55488 55<br>
                            <strong>Email:</strong> info@example.com<br>
                        </p>

                    </div>
                    <div class="col-lg-3 col-md-6 footer-info">
                        <h3>About Moderna</h3>
                        <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita
                            valies
                            darta donna mare fermentum iaculis eu non diam phasellus.</p>
                        <div class="social-links mt-3">
                            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
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
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/ -->
                Designed by <a href="https://bootstrapmade.com/">Malek AL-Desougi</a>
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
