@extends('layout.master')
@section('new-class', 'second-nav')



@section('content')

    <section style="background-color: #eee;">
        <div class="container py-5">
            {{-- user information card --}}
            <div class="row">
                <div class="col-lg-4">
                    <div class="card mb-5">
                        {{-- {{Auth::user()->stores->name}} --}}
                        <div style="background-color:#1e4356;" class="card-body text-center">
                            <div class="d-flex justify-content-center">
                                <img style="display: block; max-width:400px; max-height:200px; width:auto; height:auto"
                                    src="images/{{ $owner->image }}" alt="avhellllatar" class="img-fluid">
                            </div>
                            <div>
                                <h4 style="color:white; display:inline-block; font-weight:900" class="my-3 my-font">
                                    {{ $store->store_name }}</h4>
                            </div>
                            {{-- <h6 style="color:white;">الدكان للاغراض اللذيذة</h6><br> --}}
                            <span style="font-size:15px; margin-right:7px;"
                                class="text-light my-font">{{ $store->category }}</span>
                            <p class="mb-2 d-inline-block text-light my-font">: الفئة</p><br>
                            <span style="font-size:15px; margin-right:7px;" class="text-light my-font">
                                {{ $owner->phone }}</span>
                            <p class="mb-2 d-inline-block text-light my-font">: الهاتف</p><br>
                            <p class="mb-1 d-inline-block text-light my-font">: الموقع</p>
                            <div style="font-size:15px; margin-right:7px; margin-bottom:50px;" class="text-light my-font">
                                {{ $owner->address }}</div>
                            <button class="my-font p-2"
                                style="border-radius:10px; background-color:rgb(74, 177, 74); margin-bottom:60px;">تعديل
                                البيانات</button><br>

                            <a href="#products">
                                <button class="my-font p-2"
                                    style="border-radius:10px; background-color:#83c4e4; margin-bottom:60px;">عرض كافة
                                    المنتجات</button>
                            </a>
                        </div>
                    </div>
                    {{-- <div class="col-mb-6 d-flex justify-content-center align-items-center" style="height:165px;color:#1e4356; font-weight:900; font-size:50px;">أهلا وسهلا</div> --}}
                </div>

                <div style="margin-bottom:100px;" class="col-lg-8">
                    <div class="card mb-4">
                        <div class="card-body right">
                            <div class="row p-1">
                                <section class="get-in-touch mb-5 right">
                                    <h1 class="title my-font">إضافة منتج جديد</h1>
                                    <form class="contact-form row" style="text-align: right " enctype="multipart/form-data">
                                        <div class="form-field col-lg-6 ">
                                            <input id="company" class="input-text js-input fs-6 right" type="number"
                                                required>
                                            <label class="label mb-4 my-font" for="company">سعر المنتج</label>
                                        </div>
                                        <div class="form-field col-lg-6 ">
                                            <input id="email" class="input-text js-input fs-6 right" type="text"
                                                required>
                                            <label class="label mb-4 my-font" for="email">إسم المنتج</label>
                                        </div>



                                        <div class="form-field col-lg-6 right">
                                            <input id="category" class="input-text js-input right" type="text" required>
                                            <label class="label mb-4 right my-font" for="category">الفئة</label>
                                        </div>

                                        <div class="form-field col-lg-6 right">
                                            <input id="quantity" class="input-text js-input right" type="number" required>
                                            <label class="label mb-4 right my-font" for="quantity">الكمية</label>
                                        </div>

                                        <div class="form-field col-lg-12">
                                            <input id="message" class="input-text js-input fs-6 right" type="text-area"
                                                required>
                                            <label class="label mb-4 my-font" for="message">وصف المنتج</label>
                                        </div>

                                        <div class=" mb-4">
                                            <label style="color:rgb(81, 115, 160)" for="formFileLg"
                                                class="form-label my-font fs-6">صورة المنتج</label>
                                            <input class="form-control right form-control-lg" id="formFileLg"
                                                type="file" />
                                        </div>


                                        {{-- <div class="mb-4">
                                            <label style="color:rgb(81, 115, 160)" for="fileOTHER" class="d-block my-font fs-5 mb-2">صورة المنتج</label>
                                            <input maxsize="255" size="20" onbeforeeditfocus="return false;"
                                            type="file" name="file" id="fileOTHER">
                                        </div> --}}

                                        <div class="form-field col-lg-12">
                                            <input name="file" class="submit-btn my-font" type="submit" value="إضافة">
                                        </div>
                                    </form>
                                </section>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div id='products' class="col-md-12 d-flex justify-content-center mb-3 fs-4 fw-bolder my-font"> كل المنتجات
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <table class="table bg-light table-striped col-lg-12" style="text-align: center">
                        <tbody>
                            <thead>
                                <th></th>
                                <th class="my-font">الوصف</th>
                                <th class="my-font">صورة المنتج</th>
                                <th class="my-font">الكمية</th>
                                <th class="my-font">سعر المنتج</th>
                                <th class="my-font"> إسم المنتج</th>
                            </thead>

                            {{-- @foreach ($allBooks as $Book) --}}
                            <tr>
                                <td>
                                    <form action=""
                                        method="post"onsubmit="return confirm('Do you really want to delete this book !?')">
                                        @csrf
                                        @method('delete')
                                        <input type="submit" class="btn btn-danger delete" value="حذف المنتج">
                                    </form>
                                </td>
                                <td></td>
                                <td><img height="60px" width="60px" src="" alt="None"></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>

                            {{-- @endforeach --}}
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </section>

@endsection
