@extends('layout.master')
@section('new-class', 'second-nav')


@section('content')



    <section style="background-color: #eee;">
        <div class="container py-5">
            {{-- user information card --}}
            <div class="row">
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
                                    <p class="text-muted mb-0">الزبون الأول</p>
                                </div>
                                <div class="col-sm-3 text-end">
                                    <p class="mb-0">الإسم</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row d-flex justify-content-center">
                                <div class="col-sm-6 text-end">
                                    <p class="text-muted mb-0">malek@yahoo.com</p>
                                </div>
                                <div class="col-sm-3 text-end">
                                    <p class="mb-0">البريد الإلكتروني</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row d-flex justify-content-center">
                                <div class="col-sm-6 text-end">
                                    <p class="text-muted mb-0">078-9876554</p>
                                </div>
                                <div class="col-sm-3 text-end">
                                    <p class="mb-0">الهاتف</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row d-flex justify-content-center">
                                <div class="col-sm-6 text-end">
                                    <p class="text-muted mb-0">078-9876554</p>
                                </div>
                                <div class="col-sm-3 text-end">
                                    <p class="mb-0">2 الهاتف</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row d-flex justify-content-center">
                                <div class="col-sm-6 text-end">
                                    <p class="text-muted mb-0">الزرقاء-الزرقاء الجديدة-البتراوي-شارع 12</p>
                                </div>
                                <div class="col-sm-3 text-end">
                                    <p class="mb-0">العنوان</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="col-md-12 d-flex justify-content-center mb-3 fs-4 fw-bolder">سجل المشتريات</div>
            <div class="row">
                <div class="col-md-12">
                    <table class="table bg-light table-striped" style="text-align: center">
                        <tbody>
                            <thead>
                                <th>حذف</th>
                                <th></th>
                                <th>تاريخ الشراء</th>
                                <th>السعر</th>
                                <th>المنتج</th>
                                <th>إسم المنتج</th>
                                <th>رقم الطلب</th>
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
