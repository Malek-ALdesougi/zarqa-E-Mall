@extends('layout.master')
@section('new-class', 'second-nav')

@section('content')

    <!-- ======= Our store Section ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Store Details</h2>
                <ol>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="stores.html">Stores</a></li>
                    <li>Store Details</li>
                </ol>
            </div>
        </div>
    </section>
    <!-- End Our store Section -->

    <!-- ======= store Details Section ======= -->
    <section id="store-details" class="store-details">
        <div class="container">

            <div class="row gy-4">
                <div class="col-lg-1"></div>

                <div class="col-lg-6">
                    <div class="store-details-slider swiper">
                        <div class="swiper-wrapper align-items-center">
                            <div class="swiper-slide">
                                <img src="https://media.istockphoto.com/photos/all-your-necessities-stored-in-one-place-picture-id1157106624?k=20&m=1157106624&s=612x612&w=0&h=jLXRK4qRL_3QITpschx1Wy2Aj2Vyy47Q1Q_R7hVcPQg="
                                    alt="">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="store-info">
                        <h3 style="text-align: right; font-family: 'Lemonada', cursive;">معلومات عن المتجر</h3>
                        <ul>
                            <li style="text-align: right; font-family: 'Lemonada', cursive;"><strong>إسم
                                    المتجر</strong>:اواعي</li>
                            <li style="text-align: right; font-family: 'Lemonada', cursive;"><strong> الفئة</strong>:ملابس
                            </li>
                            <li style="text-align: right; font-family: 'Lemonada', cursive;"><strong>العنوان </strong>:شارع
                                السعادة-شارع الأطفال</li>
                            <li style="text-align: right; font-family: 'Lemonada', cursive;"><strong>الهاتف
                                </strong>:87541225511</li>
                        </ul>
                    </div>
                    <div class="store-description">
                        <h2 style="text-align: right; font-family: 'Lemonada', cursive;">وصف المتجر</h2>
                        <p class="right">
                            متجر رائع ويحتوي على العديد من الخيارات بأسعار منافسة
                            متجر رائع ويحتوي على العديد من الخيارات بأسعار منافسة
                            متجر رائع ويحتوي على العديد من الخيارات بأسعار منافسة
                            متجر رائع ويحتوي على العديد من الخيارات بأسعار منافسة
                            متجر رائع ويحتوي على العديد من الخيارات بأسعار منافسة
                            متجر رائع ويحتوي على العديد من الخيارات بأسعار منافسة
                            متجر رائع ويحتوي على العديد من الخيارات بأسعار منافسة
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End store Details Section -->

    {{-- store products section --}}



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
    </div>









@endsection
