@extends('layout.master')

@section('above-main')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex justify-cntent-center align-items-center">
        <div id="heroCarousel" class="container carousel carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
            <!-- Slide 1 -->
            <div class="carousel-item active">
                <div class="carousel-container">
                    <h2 class="animate__animated animate__fadeInDown" style="font-family: 'Lemonada', cursive;"> أهلا بكم في
                        <span>متجر الزرقاء الإلكتروني</span>
                    </h2>

                    <a style="font-family: 'Lemonada', cursive;" href="#stores"
                        class="btn-get-started animate__animated animate__fadeInUp">إنتقل للمتاجر </a>
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

                <div class="col-lg-4 col-md-6 store-wrap filter-web">
                    <div class="store-item">
                        <a href="store"><img
                                src="https://media.istockphoto.com/photos/all-your-necessities-stored-in-one-place-picture-id1157106624?k=20&m=1157106624&s=612x612&w=0&h=jLXRK4qRL_3QITpschx1Wy2Aj2Vyy47Q1Q_R7hVcPQg="
                                class="img-fluid" alt=""><a>
                                <div style="background-color:#1e4356; color:white; padding:20px;" class="details mt-0">
                                    <p class="right"><strong>إسم المتجر</strong>:ملابس الباشا للملبوسات</p>
                                    <p class="right"><strong> الفئة</strong>:اكيد ملابس,اوعي, ثياب</p>
                                </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 store-wrap filter-web">
                    <div class="store-item">
                        <a href="store"><img
                                src="https://media.istockphoto.com/photos/all-your-necessities-stored-in-one-place-picture-id1157106624?k=20&m=1157106624&s=612x612&w=0&h=jLXRK4qRL_3QITpschx1Wy2Aj2Vyy47Q1Q_R7hVcPQg="
                                class="img-fluid" alt=""><a>
                                <div style="background-color:#1e4356; color:white; padding:20px;" class="details mt-0">
                                    <p class="right"><strong>إسم المتجر</strong>:ملابس الباشا للملبوسات</p>
                                    <p class="right"><strong> الفئة</strong>:اكيد ملابس,اوعي, ثياب</p>
                                </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 store-wrap filter-web">
                    <div class="store-item">
                        <a href="store"><img
                                src="https://media.istockphoto.com/photos/all-your-necessities-stored-in-one-place-picture-id1157106624?k=20&m=1157106624&s=612x612&w=0&h=jLXRK4qRL_3QITpschx1Wy2Aj2Vyy47Q1Q_R7hVcPQg="
                                class="img-fluid" alt=""><a>
                                <div style="background-color:#1e4356; color:white; padding:20px;" class="details mt-0">
                                    <p class="right"><strong>إسم المتجر</strong>:ملابس الباشا للملبوسات</p>
                                    <p class="right"><strong> الفئة</strong>:اكيد ملابس,اوعي, ثياب</p>
                                </div>
                    </div>
                </div>





            </div>
        </div>
    </section>
    <!-- End store Section -->
@endsection
