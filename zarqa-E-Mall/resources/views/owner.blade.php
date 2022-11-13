@extends('layout.master')
@section('new-class', 'second-nav')



@section('content')

    <section style="background-color: #eee;">
        <div class="container py-5">
            {{-- user information card --}}
            <div class="row">
                <div class="col-lg-4">
                    <div class="card mb-5">
                        <div style="background-color:#1e4356;" class="card-body text-center">
                            <div>
                                <img width="300px" height="500px"
                                    src="https://media.istockphoto.com/id/1157106624/photo/all-your-necessities-stored-in-one-place.jpg?s=612x612&w=0&k=20&c=fANV-CP9N_Dt5lVoKWiZdAch60-2IOeHEm_pnvgk348="
                                    alt="avatar" class="img-fluid">
                            </div>
                            <div>
                                <h4 style="color:white; display:inline-block; font-weight:900" class="my-3 my-font"> الدكان
                                    للاغراضkhhjhj اللذيذة</h4>
                            </div>
                            {{-- <h6 style="color:white;">الدكان للاغراض اللذيذة</h6><br> --}}
                            <span style="font-size:15px; margin-right:7px;" class="text-light">مواد تموينية</span>
                            <p class="mb-2 d-inline-block text-light">: الفئة</p><br>
                            <span style="font-size:15px; margin-right:7px;" class="text-light"> 98775786567</span>
                            <p class="mb-2 d-inline-block text-light">: الهاتف</p><br>
                            <p class="mb-1 d-inline-block text-light">: الموقع</p>
                            <div style="font-size:15px; margin-right:7px; margin-bottom:50px;" class="text-light">شارع
                                السعادة-المربع الثاني-عند الرصيف </div>
                            <button style="border-radius:10px; background-color:rgb(84, 209, 84); margin-bottom:60px;">Edit
                                Information</button>
                        </div>
                    </div>
                    {{-- <div class="col-mb-6 d-flex justify-content-center align-items-center" style="height:165px;color:#1e4356; font-weight:900; font-size:50px;">أهلا وسهلا</div> --}}
                </div>

                <div style="margin-bottom:100px;" class="col-lg-8">
                    <div class="card mb-4">
                        <div class="card-body right">
                            <div class="row p-1">
                                <section class="get-in-touch mb-5 right">
                                    <h1 class="title">إضافة منتج جديد</h1>
                                    <form class="contact-form row" style="text-align: right " enctype="multipart/form-data">
                                        <div class="form-field col-lg-6 ">
                                            <input id="company" class="input-text js-input fs-6 right" type="number"
                                                required>
                                            <label class="label mb-4" for="company">سعر المنتج</label>
                                        </div>
                                        <div class="form-field col-lg-6 ">
                                            <input id="email" class="input-text js-input fs-6 right" type="text"
                                                required>
                                            <label class="label mb-4" for="email">إسم المنتج</label>
                                        </div>

                                        

                                        <div class="form-field col-lg-6 right">
                                            <input id="category" class="input-text js-input right" type="text" required>
                                            <label class="label mb-4 right" for="category">الفئة</label>
                                        </div>

                                        <div class="form-field col-lg-6 right">
                                            <input id="quantity" class="input-text js-input right" type="number" required>
                                            <label class="label mb-4 right" for="quantity">الكمية</label>
                                        </div>

                                        <div class="form-field col-lg-12">
                                            <input id="message" class="input-text js-input fs-6 right" type="text-area" required>
                                            <label class="label  mb-4" for="message">وصف المنتج</label>
                                        </div>

                                        <div class="form-field col-lg-12 right ">
                                            <input id="phone" class="input-file js-input fs-6 right" type="file"required>
                                            <label class="label  mb-4" for="phone">صورة المنتج</label>
                                        </div>
                                        <div class="form-field col-lg-12">
                                            <input class="submit-btn" type="submit" value="إضافة">
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
            <div class="col-md-12 d-flex justify-content-center mb-3 fs-4 fw-bolder"> كل المنتجات</div>
            <div class="row">
                <div class="col-lg-12">
                    <table class="table bg-light table-striped col-lg-12" style="text-align: center">
                        <tbody>
                            <thead>
                                <th></th>
                                <th>الوصف</th>
                                <th>صورة المنتج</th>
                                <th>الكمية</th>
                                <th>سعر المنتج</th>
                                <th> إسم المنتج</th>
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
