@extends('layout.master')
@section('new-class', 'second-nav')

@section('css')
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
@endsection

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

                <div class="col-lg-6 d-flex align-items-center">
                    <div class="store-details-slider swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img width="400px" height="450px" src="../images/{{ $store->user->image }}" alt="nope">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="store-info">
                        <h3 style="text-align: right; font-family: 'Lemonada', cursive;">معلومات عن المتجر</h3>
                        <ul>
                            <li style="text-align: right; font-family: 'Lemonada', cursive;"><strong>إسم
                                    المتجر</strong>:{{ $store->store_name }}</li>
                            <li style="text-align: right; font-family: 'Lemonada', cursive;"><strong>
                                    الفئة</strong>:{{ $store->category }}
                            </li>
                            <li style="text-align: right; font-family: 'Lemonada', cursive;"><strong>العنوان
                                </strong>:{{ $store->user->address }} </li>
                            <li style="text-align: right; font-family: 'Lemonada', cursive;"><strong>الهاتف
                                </strong>:{{ $store->user->phone }}</li>
                        </ul>
                        <div class="store-description">
                            <h2 style="text-align: right; font-family: 'Lemonada', cursive;">وصف المتجر</h2>
                            <p class="des" class=" right my-font">
                                {{ $store->description }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End store Details Section -->

    {{-- store products section --}}



    <div style="padding-right:0; padding-left:30px;" class="row  g-4 col-md-12 d-flex justify-content-evenly">

        @if ($store->products)
            @foreach ($store->products as $product)
                <div class="col-sm-4 col-md-4 col-lg-3">
                    <div class="card">
                        <img width="300px;" height="200px;" src="../images/{{ $product->image }}" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5 style="font-family: 'Lemonada', cursive; font-weight:bolder" class="card-title right">
                                {{ $product->name }}
                            </h5><br>
                            <div class="text-center d-flex justify-content-end flex-wrap">
                                {{-- <p style="text-align:right; "><strong style="color:#1e4356; font-family:'Lemonada', cursive;">JOD
                                    /{{ $product->price }}السعر :<span></span></strong></p> --}}
                                <p style="text-align:right; "><strong
                                        style="color:#1e4356; font-family:'Lemonada', cursive">الكمية :
                                        {{ $product->quantity }}</strong></p>
                                <p style="text-align:right; "><strong
                                        style="color:#1e4356; font-family:'Lemonada', cursive;">السعر دأ :
                                        {{ $product->quantity }}</strong></p>
                            </div>

                            <!-- Button trigger modal -->
                            <div class="d-flex justify-content-center">
                                <button id="modal-button" data-id="{{$product->id}}" onclick="(() => { console.log({{ $product->id }}) })()"
                                        style="background-color: #1e4356;" type="button" class="btn my-font"
                                        data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                        <span class="my-font text-light my-color">التفاصيل</span>
                                    </button>
                                    <button class="btn btn-success">التفاصيل</button>
                                    <button class="btn btn-primary">إضافة إلى السلة</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <h1>nothig to show </h1>
        @endif
    </div>



    <!-- Modal -->
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <img height="400px;" width="200px;" src='../images/' class="card-img-top" alt="...">
                    <div class="modal-header d-flex justify-content-end">
                        <h5 style="font-family:'Lemonada', cursive; font-weight:bolder;" class="right"
                            id="staticBackdropLabel">uuuuu</h5>
                    </div>
                    <div class="modal-body">
                        <p class="right"><strong>:الوصف</strong></p>
                        <p class="card-text right">9ikkkk
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">إغلاق</button>
                        <button style="background-color: #1e4356; color:white" type="button" class="btn">أضف إلى السلة<i
                                style="margin-left:3px;" class="fas fa-shopping-cart"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
