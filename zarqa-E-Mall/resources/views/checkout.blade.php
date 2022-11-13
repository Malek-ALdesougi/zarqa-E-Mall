@extends('layout.master')
@section('new-class', 'second-nav')


@section('content')

    <div style="margin-top:100px; margin-bottom:200px" class="container col-md-12 mb-5 d-flex jutify-content-center flex-wrap">

        {{-- <div class="row d-flex"> --}}
            {{-- this table will be read from cart table --}}
            <div class="col-sm-8" style="background-color:#1e4356">
                <div class="card mt-2">
                    <h4 class="card-header my-font right">قائمة المشتريات</h4>
                    <div class="table-responsive text-nowrap">
                        <table class="table">
                            <thead style="background-color:#1e4356; color:white">
                                <tr>
                                    <th>P-Name</th>
                                    <th>Price</th>
                                    <th>Image</th>
                                    <th>Quantity</th>
                                    <th>Store</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                                <tr>
                                    <td><strong>بلوزة شتوية فخمة</strong></td>
                                    <td>55 JOD</td>
                                    <td>
                                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                            class="avatar avatar-xs pull-up" title=""
                                            data-bs-original-title="Lilian Fuller">
                                            <img width='40px' src="public-admin/assets/img/avatars/5.png" alt="Avatar"
                                                class="">
                                        </li>
                                    </td>
                                    <td><span class="">2</span></td>
                                    <td><span class="">ملابس أبو محمد الفخمة</span></td>
                                    <td>
                                        <div class="">
                                            {{-- <button>Delete</button> --}}
                                            <a class="text-danger" href="javascript:void(0);"><i
                                                    class="bx bx-trash text-danger me-1"></i>Delete</a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>

            <div class="col-md-1"></div>

            <div class="form col-md-3">
                <div class="mb-3 d-flex justify-content-end">
                    <h3 class="my-font mb-2"> معلومات الدفع</h3>
                </div>
                <form>
                    <!-- input -->
                    <div class="form-outline mb-4">
                        <input type="text" id="form4Example1" class="form-control" />
                        <label class="form-label" for="form4Example1">رقم البطاقة</label>
                    </div>

                    <!--  input -->
                    <div class="form-outline mb-4">
                        <input type="date" id="form4Example2" class="form-control" />
                        <label class="form-label" for="form4Example2"> تاريخ إنتهاء البطاقة</label>
                    </div>

                    <!--  input -->
                    <div class="form-outline mb-4">
                        <input type="number" id="form4Example2" class="form-control" />
                        <label class="form-label" for="form4Example2">CVC/CVV</label>
                    </div>

                    <!--  input -->
                    <div class="form-outline mb-4">
                        <input type="text" id="form4Example2" class="form-control" />
                        <label class="form-label" for="form4Example2">الرمز البريدي</label>
                    </div>


                    <!-- Checkbox -->
                    {{-- <div class="form-check d-flex justify-content-center mb-4">
                    <input class="form-check-input me-2" type="checkbox" value="" id="form4Example4" checked />
                    <label class="form-check-label" for="form4Example4">
                        Cach on dilevary
                    </label>
                </div> --}}

                    <!-- Submit button -->
                    <button style="background-color:#1e4356; color:white" type="submit" class="btn btn-block mb-4">
                        <p class="my-font d-inline">إرسال الطلب</p>
                    </button>
                </form>
            </div>
        </div>
    </div>

@endsection
