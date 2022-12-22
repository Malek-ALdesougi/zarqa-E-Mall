@extends('layout.master')
@section('new-class', 'second-nav')


@section('content')
    @include('sweetalert::alert')



    <section style="background-color: #eee; ">
        <div class="container py-5">
            {{-- user information card --}}
            <div class="row align-items-center"style=" direction: rtl;">
                <div class="col-lg-4">
                    <div class="card mb-4">
                        <div style="background-color:#1e4356" class="card-body text-center">
                            <img src="images/{{ $currentUser[0]->image }}" alt="avatar" class="rounded-circle img-fluid"
                                style="width: 150px;">
                            <h5 style="color:white" class="my-3 mb-5">{{ $currentUser[0]->name }}</h5>

                        </div>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="row d-flex justify-content-center">
                                <div class="col-sm-3 text-end">
                                    <p class="mb-0 my-font">الإسم</p>
                                </div>
                                <div class="col-sm-6 text-end">
                                    <p class="text-muted mb-0 my-font">{{ $currentUser[0]->name }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row d-flex justify-content-center">
                                <div class="col-sm-3 text-end">
                                    <p class="mb-0 my-font">البريد الإلكتروني</p>
                                </div>
                                <div class="col-sm-6 text-end">
                                    <p class="text-muted mb-0 my-font">{{ $currentUser[0]->email }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row d-flex justify-content-center">
                                <div class="col-sm-3 text-end">
                                    <p class="mb-0 my-font">الهاتف</p>
                                </div>
                                <div class="col-sm-6 text-end">
                                    <p class="text-muted mb-0 my-font">{{ $currentUser[0]->phone }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row d-flex justify-content-center">
                                <div class="col-sm-3 text-end">
                                    <p class="mb-0 my-font">2 الهاتف</p>
                                </div>
                                <div class="col-sm-6 text-end">
                                    <p class="text-muted mb-0 my-font">078-9876554</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row d-flex justify-content-center">
                                <div class="col-sm-3 text-end">
                                    <p class="mb-0 my-font">العنوان</p>
                                </div>
                                <div class="col-sm-6 text-end">
                                    <p class="text-muted mb-0 my-font">{{ $currentUser[0]->address }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @foreach ($orders as $item)
            {{ $test = App\Models\Order::where('id', $item->order_id)->get() }}
            {{$test[0]->total}}
        @endforeach
        <div class="container">
            <div class="col-md-12 d-flex justify-content-center mb-3 fs-4 fw-bolder my-font">سجل المشتريات</div>
            <div class="row ">
                <div class="col-md-12">
                    <table class="table bg-light table-striped shadow" style="text-align: center">
                        <tbody>
                            <thead>
                                <th class="my-font"></th>
                                <th class="my-font"></th>
                                <th class="my-font">تاريخ و وقت الشراء</th>
                                <th class="my-font">المجموع الكلي</th>
                                <th class="my-font">رقم الطلب</th>
                            </thead>

                            @foreach ($orders as $order)
                                <tr>
                                    <td>
                                        <form id="submitBtn" action="/delete-order/{{ $order->id }}" method="GET">
                                            @csrf
                                            <button class="btn btn-danger" type="submit"
                                                onclick="event.preventDefault()
                                            const swalWithBootstrapButtons = Swal.mixin({
                                            customClass: {
                                                title: 'my-font fs-4',
                                                text: 'my-font fs-2',
                                                confirmButton: 'btn btn-success fw-bold fs-6',
                                                cancelButton: 'btn btn-danger fw-bold me-5 fs-6',
                                                confirmButtonText: '',
                                        },
                                        buttonsStyling: false
                                        })

                                        swalWithBootstrapButtons.fire({
                                            title: 'هل تريد حقاََ حذف هذا المنتج',
                                            text:'لن تكون قادراََ على إسترجاع هذا المنتج',
                                            icon: 'warning',
                                            showCancelButton: true,
                                            confirmButtonText: 'نعم, إحذف',
                                            cancelButtonText: 'لا, إالغاء',
                                            reverseButtons: true
                                        }).then((result) => {
                                            if (result.isConfirmed) {

                                            let form = document.getElementById('submitBtn')     
                                            form.submit();

                                            swalWithBootstrapButtons.fire(
                                                ' حذف!',
                                                'تم حذف المنتج بنجاح',
                                                'success'
                                            )
                                        } else if (
                                            /* Read more about handling dismissals below */
                                            result.dismiss === Swal.DismissReason.cancel
                                        ) {
                                            swalWithBootstrapButtons.fire(
                                                'إلغاء',
                                                'منتجك بأمان :)',
                                                'error'
                                            )
                                        }
                                    })
                                    // let form = document.getElementById('submitBtn')
                                    // setTimeout(function() {
                                    //     form.submit()
                                    // },1550) ">
                                                <p class="d-inline my-font">حذف</p>
                                            </button>
                                    </td>
                                    <td>
                                        {{-- {{ dd($orders) }} --}}
                                        {{-- {{dd(App\Models\OrderDetail::where('order_id', $order->id)->get())}}  --}}
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal" data-bs-whatever="@mdo">
                                            <p class="d-inline my-font">التفاصيل</p>
                                        </button>
                                    </td>
                                    <td class="my-font">{{ $order->created_at }}</td>
                                    <td class="my-font">{{ $order->total }}</td>
                                    <td class="my-font">{{ $order->id }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Recipient:</label>
                                <input type="text" class="form-control" id="recipient-name">
                            </div>
                            <div class="mb-3">
                                <label for="message-text" class="col-form-label">Message:</label>
                                <textarea class="form-control" id="message-text"></textarea>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Send message</button>
                    </div>
                </div>
            </div>
        </div>
    </section>









@endsection
