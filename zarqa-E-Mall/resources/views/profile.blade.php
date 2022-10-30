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
                            <h5 style="color:white" class="my-3">John Smith</h5>
                            <p class="text-muted mb-1">Full Stack Developer</p>
                            <p class="text-muted mb-4">Bay Area, San Francisco, CA</p>
                        </div>
                    </div>

                    <div class="card mb-4 mb-lg-0">
                        <div class="card-body p-0">
                            <ul class="list-group list-group-flush rounded-3">
                                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                    <i class="fas fa-globe fa-lg text-warning"></i>
                                    <p class="mb-0">https://mdbootstrap.com</p>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                    <i class="fab fa-github fa-lg" style="color: #333333;"></i>
                                    <p class="mb-0">mdbootstrap</p>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                    <i class="fab fa-twitter fa-lg" style="color: #55acee;"></i>
                                    <p class="mb-0">@mdbootstrap</p>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                    <i class="fab fa-instagram fa-lg" style="color: #ac2bac;"></i>
                                    <p class="mb-0">mdbootstrap</p>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                    <i class="fab fa-facebook-f fa-lg" style="color: #3b5998;"></i>
                                    <p class="mb-0">mdbootstrap</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3 d-flex justify-content-evenly w-100">
                                    <p style="display: inline-block;" class="text-muted mb-0">مالك الدسوقي</p>
                                    <p style="display: inline-block;font-weight:900"class="mb-0">اسم المستخدم</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3 d-flex justify-content-evenly w-100">
                                    <p style="display: inline-block;" class="text-muted mb-0">malek@yahoo.com </p>
                                    <p style="display: inline-block;font-weight:900"class="mb-0"> البريد الإلكتروني</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3 d-flex justify-content-evenly w-100">
                                    <p style="display: inline-block;" class="text-muted mb-0">54556754544 </p>
                                    <p style="display: inline-block;font-weight:900"class="mb-0"> الهاتف</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3 d-flex justify-content-evenly w-100">
                                    <p style="display: inline-block;" class="text-muted mb-0">123469876 </p>
                                    <p style="display: inline-block;font-weight:900"class="mb-0">الهاتف 2</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3 d-flex justify-content-evenly w-100">
                                    <p style="display: inline-block;" class="text-muted mb-0">مالك
                                        تنتبنتنتنتنتنههههههههةةةةةةةبببببببببببب</p>
                                    <p style="display: inline-block;font-weight:900"class="mb-0">العنوان </p>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-start">
                            <a href=""><button class="btn btn-success m-2">تعديل البيانات</button></a>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-12">
                            <table style="background-color: #1e4356" class="table  border-warning table-striped"
                                style="text-align: center">
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
                                        <td></td>
                                    </tr>






                                    {{-- @endforeach --}}
                                </tbody>
                            </table>

                        </div>
                    </div>
    </section>










@endsection
