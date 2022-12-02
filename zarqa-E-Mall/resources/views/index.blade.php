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
            <div id="stores" class="d-flex justify-content-center align-items-center">
                <h2 class="my-font">كل المتاجر</h2>
            </div>
        </div>
    </section>

    <!-- End Our store Section -->

    <!-- ======= store Section ======= -->
    <section class="store">
        <div class="container">

            <div class="row d-flex ">
                <div class="col-lg-8">
                    <ul id="store-flters">
                        @foreach($categories as $category)
                        <li style="font-family: 'Lemonada', cursive;" ><a href="/index">{{$category}}</a></li>
                        {{-- <li style="font-family: 'Lemonada', cursive;" >هدايا</li>
                        <li style="font-family: 'Lemonada', cursive;" >كهربائيات</li>
                        <li style="font-family: 'Lemonada', cursive;" >أثاث</li>
                        <li style="font-family: 'Lemonada', cursive;" >ألعاب وهدايا</li>
                        <li style="font-family: 'Lemonada', cursive;" >ساعات وعطور</li>
                        <li style="font-family: 'Lemonada', cursive;" >منظفات</li>
                        <li style="font-family: 'Lemonada', cursive;" class="filter-active">الكل</li>
                        <li style="font-family: 'Lemonada', cursive;" >مواد تموينية</li> --}}
                        @endforeach
                    </ul>
                </div>

                <div class="col-lg-4 text-right mb-2">
                    <input type="text" class="">
                    <button style="backgrund-color:#1e4356" id="search-button">إبحث</button>
                </div>
            </div>

            <div class="row store-container" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">

                @foreach ($owners as $owner)
                    @if ($owner->stores->status === 1)
                        <div class="col-lg-4 col-md-6 store-wrap filter-web">
                            <div class="store-item">
                                <a href="store">
                                    <img style="display: block; width:100%; height:300px" src="images/{{ $owner->image }}"
                                        alt="avhellllatar" class="img-fluid">
                                    <a>
                                        <div style="background-color:#1e4356; color:white; padding:20px; height: 150px;"
                                            class="details mt-0">
                                            <p class="right my-font"><strong>إسم المتجر</strong>:
                                                {{ $owner->stores->store_name }}</p>
                                            <p class="right my-font fs-6"><strong> فئة المتجر </strong>:
                                                {{ $owner->stores->category }}
                                            </p>
                                        </div>
                            </div>
                        </div>
                    @endif
                @endforeach

            </div>
        </div>
    </section>
    <!-- End store Section -->
@endsection
