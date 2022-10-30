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


    <div class="row  g-4 col-md-12 d-flex justify-content-evenly">
        <div class="col-md-3">
            <div class="card">
                <img src="https://media.istockphoto.com/photos/image-of-open-antique-book-on-wooden-table-with-glitter-overlay-picture-id1354441996?b=1&k=20&m=1354441996&s=170667a&w=0&h=O4JDagXhIh1N13PNN6G4_L5KB5QPZryin7FOrZnzYvc="
                    class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 style="font-family: 'Lemonada', cursive; font-weight:bolder" class="card-title right">جلاية سوبر
                    </h5><br>
                    <p style="text-align:right;"><strong>السعر</strong>&nbsp:77دأ</p>
                    <p style="text-align:right;"><strong>الكمية المتوفرة</strong>&nbsp:6</p>

                    <!-- Button trigger modal -->
                    <button style="background-color: #1e4356; color:white" type="button" class="btn"
                        data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                        التفاصيل
                    </button>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <img src="https://thumbs.dreamstime.com/b/beautiful-rain-forest-ang-ka-nature-trail-doi-inthanon-national-park-thailand-36703721.jpg"
                    class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional
                        content. This content is a little bit longer.</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <img src="https://thumbs.dreamstime.com/b/beautiful-rain-forest-ang-ka-nature-trail-doi-inthanon-national-park-thailand-36703721.jpg"
                    class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional
                        content.</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <img src="https://images.pexels.com/photos/268533/pexels-photo-268533.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                    class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional
                        content. This content is a little bit longer.</p>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card">
                <img src="https://images.pexels.com/photos/268533/pexels-photo-268533.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                    class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional
                        content. This content is a little bit longer.</p>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card">
                <img src="https://images.pexels.com/photos/268533/pexels-photo-268533.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                    class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional
                        content. This content is a little bit longer.</p>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card">
                <img src="https://images.pexels.com/photos/268533/pexels-photo-268533.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                    class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">ملابس خريفية </h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional
                        content. This content is a little bit longer.</p>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card">
                <img src="https://images.pexels.com/photos/268533/pexels-photo-268533.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                    class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional
                        content. This content is a little bit longer.</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <img src="https://images.pexels.com/photos/268533/pexels-photo-268533.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                    class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                        additional
                        content. This content is a little bit longer.</p>
                </div>
            </div>
        </div>
    </div>




    <!-- Modal -->
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <img src="https://images.pexels.com/photos/268533/pexels-photo-268533.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                        class="card-img-top" alt="...">
                    <div class="modal-header d-flex justify-content-end">
                        <h5 style="font-family:'Lemonada', cursive; font-weight:bolder;" class="right"
                            id="staticBackdropLabel">جلاية سوبر</h5>
                    </div>
                    <div class="modal-body">
                        <p class="right"><strong>:الوصف</strong></p>
                        <p class="card-text right">وصف المنتج مع القليبل من الكلام ومحدود بعدد حروف معين للحفاظ على التناسق
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                        <button style="background-color: #1e4356; color:white" type="button" class="btn">Add to cart<i style="margin-left:3px;" class="fas fa-shopping-cart"></i></button>
                    </div>
                </div>
            </div>
        </div>
    @endsection
