@extends('layout.master')
@section('new-class', 'second-nav')


@section('content')
@include('sweetalert::alert')



    <section style="background-color: #eee; ">
        <div class="container py-5">
            {{-- user information card --}}
            <div class="row"style=" direction: rtl;" >
                <div class="col-lg-4">
                    <div class="card mb-4">
                        <div style="background-color:#1e4356" class="card-body text-center">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp"
                                alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                            <h5 style="color:white" class="my-3 mb-5">John Smith</h5>

                        </div>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="row d-flex justify-content-center">
                                <div class="col-sm-6 text-end">
                                    <p class="text-muted mb-0 my-font">الزبون الأول</p>
                                </div>
                                <div class="col-sm-3 text-end">
                                    <p class="mb-0 my-font">الإسم</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row d-flex justify-content-center">
                                <div class="col-sm-6 text-end">
                                    <p class="text-muted mb-0 my-font">malek@yahoo.com</p>
                                </div>
                                <div class="col-sm-3 text-end">
                                    <p class="mb-0 my-font">البريد الإلكتروني</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row d-flex justify-content-center">
                                <div class="col-sm-6 text-end">
                                    <p class="text-muted mb-0 my-font">078-9876554</p>
                                </div>
                                <div class="col-sm-3 text-end">
                                    <p class="mb-0 my-font">الهاتف</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row d-flex justify-content-center">
                                <div class="col-sm-6 text-end">
                                    <p class="text-muted mb-0 my-font">078-9876554</p>
                                </div>
                                <div class="col-sm-3 text-end">
                                    <p class="mb-0 my-font">2 الهاتف</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row d-flex justify-content-center">
                                <div class="col-sm-6 text-end">
                                    <p class="text-muted mb-0 my-font">الزرقاء-الزرقاء الجديدة-البتراوي-شارع 12</p>
                                </div>
                                <div class="col-sm-3 text-end">
                                    <p class="mb-0 my-font">العنوان</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="col-md-12 d-flex justify-content-center mb-3 fs-4 fw-bolder my-font">سجل المشتريات</div>
            <div class="row ">
                <div class="col-md-12">
                    <table class="table bg-light table-striped shadow" style="text-align: center">
                        <tbody>
                            <thead>
                                <th class="my-font">حذف</th>
                                <th></th>
                                <th class="my-font">تاريخ الشراء</th>
                                <th class="my-font">السعر</th>
                                <th class="my-font">المنتج</th>
                                <th class="my-font">إسم المنتج</th>
                                <th class="my-font">رقم الطلب</th>
                            </thead>

                            {{-- @foreach ($allBooks as $Book) --}}
                            <tr>
                                <td>
                                    <form action=""
                                        method="post"onsubmit="return confirm('Do you really want to delete this book !?')">
                                        @csrf
                                        @method('delete')
                                        <input type="submit" class="btn btn-danger delete" value="Delete">
                                    </form>
                                </td>
                                <td></td>
                                <td></td>
                                <td><a href="" style="text-decoration:none; color:white"></a></td>
                                <td><img height="60px" width="60px" src="" alt="None">
                                </td>
                                <td></td>
                                <td></td>
                            </tr>

                            <tr>
                                <td>
                                    <form action="" method="post"
                                        onsubmit="return confirm('Do you really want to delete this book !?')">
                                        @csrf
                                        @method('delete')
                                        <input type="submit" class="btn btn-danger delete" value="Delete">
                                    </form>
                                </td>
                                <td></td>
                                <td></td>
                                <td><a href="" style="text-decoration:none; color:white"></a></td>
                                <td><img height="60px" width="60px" src="" alt="None">
                                </td>
                                <td></td>
                                <td>fgfgfgfg</td>
                            </tr>

                            {{-- @endforeach --}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </section>









@endsection
