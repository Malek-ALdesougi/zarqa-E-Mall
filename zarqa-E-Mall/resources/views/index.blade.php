@extends('layout.master')

@section('above-main')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex justify-cntent-center align-items-center">
        <div id="heroCarousel" class="container carousel carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
            <!-- Slide 1 -->
            <div class="carousel-item active">
                <div class="carousel-container">
                    <h2 class="animate__animated animate__fadeInDown" style="font-family: 'Lemonada', cursive;"> أهلا في <span>متجر الزرقاء الإلكتروني</span></h2>
                    
                    <a style="font-family: 'Lemonada', cursive;" href="#stores" class="btn-get-started animate__animated animate__fadeInUp">إنتقل للمتاجر </a>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero -->
@endsection

@section('content')
    <!-- ======= Our store Section ======= -->
    <section style="margin-top:80px" class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-center align-items-center">
                <h2>Our Stores</h2>
            </div>
        </div>
    </section>
    <!-- End Our store Section -->

    <!-- ======= store Section ======= -->
    <section id="stores" class="store">
        <div class="container">

            <div class="row">
                <div class="col-lg-8">
                    <ul id="store-flters">
                        <li style="font-family: 'Lemonada', cursive;" data-filter="*" class="filter-active">الكل</li>
                        <li style="font-family: 'Lemonada', cursive;" data-filter=".filter-app">ملابس</li>
                        <li style="font-family: 'Lemonada', cursive;" data-filter=".filter-card">هدايا</li>
                        <li style="font-family: 'Lemonada', cursive;" data-filter=".filter-web">كهربائيات</li>
                    </ul>
                </div>
                
                <div class="col-lg-4">
                  <input type="text" class="">
                  <button id="search-button">إبحث</button>
                </div>
            </div>

            <div class="row store-container" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
                <div class="col-lg-4 col-md-6 store-wrap filter-app">
                    <div class="store-item">
                        <img src="" class="img-fluid" alt="null">
                        <div class="store-info">
                            <h3>App 1</h3>
                            <div>
                                <a href="assets/img/store/store-1.jpg" data-gallery="storeGallery" class="store-lightbox"
                                    title="App 1"><i class="bx bx-plus"></i></a>
                                <a href="store-details.html" title="store Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 store-wrap filter-web">
                    <div class="store-item">
                        <img src="https://image.shutterstock.com/image-vector/vector-shop-market-store-front-260nw-1009297618.jpg"
                            class="img-fluid" alt="">
                        <div class="store-info">
                            <h3>Web 3</h3>
                            <div>
                                <a href="assets/img/store/store-2.jpg" data-gallery="storeGallery" class="store-lightbox"
                                    title="Web 3"><i class="bx bx-plus"></i></a>
                                <a href="store-details.html" title="store Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 store-wrap filter-app">
                    <div class="store-item">
                        <img src="https://image.shutterstock.com/image-vector/vector-shop-market-store-front-260nw-1009297618.jpg" class="img-fluid" alt="">
                        <div class="store-info">
                            <h3>App 2</h3>
                            <div>
                                <a href="assets/img/store/store-3.jpg" data-gallery="storeGallery" class="store-lightbox"
                                    title="App 2"><i class="bx bx-plus"></i></a>
                                <a href="store-details.html" title="store Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 store-wrap filter-card">
                    <div class="store-item">
                        <img src="assets/img/store/store-4.jpg" class="img-fluid" alt="">
                        <div class="store-info">
                            <h3>Card 2</h3>
                            <div>
                                <a href="assets/img/store/store-4.jpg" data-gallery="storeGallery" class="store-lightbox"
                                    title="Card 2"><i class="bx bx-plus"></i></a>
                                <a href="store-details.html" title="store Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 store-wrap filter-web">
                    <div class="store-item">
                        <img src="assets/img/store/store-5.jpg" class="img-fluid" alt="">
                        <div class="store-info">
                            <h3>Web 2</h3>
                            <div>
                                <a href="assets/img/store/store-5.jpg" data-gallery="storeGallery" class="store-lightbox"
                                    title="Web 2"><i class="bx bx-plus"></i></a>
                                <a href="store-details.html" title="store Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 store-wrap filter-app">
                    <div class="store-item">
                        <img src="assets/img/store/store-6.jpg" class="img-fluid" alt="">
                        <div class="store-info">
                            <h3>App 3</h3>
                            <div>
                                <a href="assets/img/store/store-6.jpg" data-gallery="storeGallery" class="store-lightbox"
                                    title="App 3"><i class="bx bx-plus"></i></a>
                                <a href="store-details.html" title="store Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 store-wrap filter-card">
                    <div class="store-item">
                        <img src="assets/img/store/store-7.jpg" class="img-fluid" alt="">
                        <div class="store-info">
                            <h3>Card 1</h3>
                            <div>
                                <a href="assets/img/store/store-7.jpg" data-gallery="storeGallery" class="store-lightbox"
                                    title="Card 1"><i class="bx bx-plus"></i></a>
                                <a href="store-details.html" title="store Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 store-wrap filter-card">
                    <div class="store-item">
                        <img src="assets/img/store/store-8.jpg" class="img-fluid" alt="">
                        <div class="store-info">
                            <h3>Card 3</h3>
                            <div>
                                <a href="assets/img/store/store-8.jpg" data-gallery="storeGallery" class="store-lightbox"
                                    title="Card 3"><i class="bx bx-plus"></i></a>
                                <a href="store-details.html" title="store Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 store-wrap filter-web">
                    <div class="store-item">
                        <img src="assets/img/store/store-9.jpg" class="img-fluid" alt="">
                        <div class="store-info">
                            <h3>Web 1</h3>
                            <div>
                                <a href="assets/img/store/store-9.jpg" data-gallery="storeGallery" class="store-lightbox"
                                    title="Web 1"><i class="bx bx-plus"></i></a>
                                <a href="store-details.html" title="store Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- End store Section -->
@endsection
