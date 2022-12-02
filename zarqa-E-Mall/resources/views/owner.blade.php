@extends('layout.master')
@section('new-class', 'second-nav')



@section('content')

    <section style="background-color: #eee;">
        <div class="container py-5">
            {{-- user information card --}}
            <div class="row">
                @if (session('success'))
                    <script type="text/javascript">
                        alert('Product has beed deleted successfully !!');
                    </script>
                @endif
                <div class="col-lg-4">
                    <div class="card mb-5">
                        {{-- {{Auth::user()->stores->name}} --}}
                        <div style="background-color:#1e4356;" class="card-body text-center">
                            {{-- <div class="d-flex justify-content-center"> --}}
                            <img style="display: block; width:100%; height:324px" src="images/{{ $owner->image }}"
                                alt="avhellllatar" class="img-fluid">
                            {{-- </div> --}}
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
                            {{-- <button class="my-font p-2"
                                style="border-radius:10px; background-color:rgb(74, 177, 74); margin-bottom:60px;">تعديل
                                البيانات</button><br> --}}

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
                                    <form action="add-product" method="POST" class="contact-form row"
                                        style="text-align: right " enctype="multipart/form-data">
                                        @csrf

                                        @error('price')
                                            <p style="font-size:medium" class="text-danger d-inline mb-0 right">
                                                {{ $message }}</p>
                                        @enderror
                                        <div class="form-field col-lg-6 ">
                                            <input name="price" id="company" class="input-text js-input fs-6 right"
                                                type="number" required>
                                            <label class="label mb-4 my-font" for="company">سعر المنتج</label>
                                        </div>

                                        @error('name')
                                            <p style="font-size:medium" class="text-danger mb-0 right">{{ $message }}</p>
                                        @enderror
                                        <div class="form-field col-lg-6 ">
                                            <input name="name" id="name" class="input-text js-input fs-6 right"
                                                type="text" required>
                                            <label class="label mb-4 my-font" for="name">إسم المنتج</label>
                                        </div>


                                        @error('tag')
                                            <p style="font-size:medium" class="text-danger mb-0 right">{{ $message }}</p>
                                        @enderror
                                        <div class="form-field col-lg-6 right">
                                            <input name="tag" id="tag" class="input-text js-input right"
                                                type="text" required>
                                            <label class="label mb-4 right my-font" for="tag">الفئة</label>
                                        </div>


                                        @error('quantity')
                                            <p style="font-size:medium" class="text-danger mb-0 right">{{ $message }}</p>
                                        @enderror
                                        <div class="form-field col-lg-6 right">
                                            <input name="quantity" id="quantity" class="input-text js-input right"
                                                type="number" required>
                                            <label class="label mb-4 right my-font" for="quantity">الكمية</label>
                                        </div>

                                        @error('description')
                                            <p style="font-size:medium" class="text-danger mb-0 right">{{ $message }}</p>
                                        @enderror
                                        <div class="form-field col-lg-12">
                                            <input name="description" id="description"
                                                class="input-text js-input fs-6 right" type="text-area" required>
                                            <label class="label mb-4 my-font" for="description">وصف المنتج</label>
                                        </div>

                                        @error('image')
                                            <p style="font-size:medium" class="text-danger mb-0 right">{{ $message }}</p>
                                        @enderror
                                        <div class=" mb-4">
                                            <label style="color:rgb(81, 115, 160)" for="formFileLg"
                                                class="form-label my-font fs-6">صورة المنتج</label>
                                            <input name="image" class="form-control right form-control-lg" id="formFileLg"
                                                type="file" />
                                        </div>


                                        {{-- <div class="mb-4">
                                            <label style="color:rgb(81, 115, 160)" for="fileOTHER" class="d-block my-font fs-5 mb-2">صورة المنتج</label>
                                            <input maxsize="255" size="20" onbeforeeditfocus="return false;"
                                            type="file" name="file" id="fileOTHER">
                                        </div> --}}

                                        <div class="form-field col-lg-12">
                                            {{-- <input class="submit-btn my-font" type="submit" value="إضافة"> --}}
                                            <button class="submit-btn my-font" type="submit">إضافة</button>
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
                <div class="col-lg-12 d-flex justify-content-center">
                    <table class="table bg-light table-striped " style="text-align: center">
                        <tbody>
                            <thead>
                                <th></th>
                                <th class="my-font fw-bolder">الوصف</th>
                                <th class="my-font fw-bolder">صورة المنتج</th>
                                <th class="my-font fw-bolder">الكمية</th>
                                <th class="my-font fw-bolder">سعر المنتج</th>
                                <th class="my-font fw-bolder"> إسم المنتج</th>
                            </thead>

                            @if (isset($products))

                                @foreach ($products as $product)
                                    <tr>
                                        <td>
                                            <form id="submitBtn" action="/delete/{{ $product->id }}" method="POST">
                                                @csrf
                                                @method('delete')
                                                {{-- <input id="productId" type="hidden" value={{$product->id}}> --}}
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

                                            </form>
                                        </td>
                                        <td class="my-font">{{ $product->description }}</td>
                                        <td class="my-font"><img height="50px" width="60px"
                                                src="images/{{ $product->image }}" alt="None"></td>
                                        <td class="my-font">{{ $product->quantity }}</td>
                                        <td class="my-font">{{ $product->price }}/JOD</td>
                                        <td class="my-font">{{ $product->name }}</td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="5">أضف بعض المنتجات إلى متجرك ليتم عرضها</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </section>



@endsection
