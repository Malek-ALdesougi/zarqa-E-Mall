@extends('admin.layout.dashboard')



@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <div class="d-flex justify-content-between">
            <h5 class="card-header">All Users</h5>
            <button type="button" class="btn btn-success m-2 h-25" data-bs-toggle="modal" data-bs-target="#exampleModal"data-bs-whatever="@mdo">Add new user</button>
            </div>
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Image</th>
                            <th>Phone</th>
                            <th>Roll</th>
                            <th>Address</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        <tr>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>مالك الدسوقي</strong></td>
                            <td>Malek-saleh@gmail.com</td>
                            <td>malek malek malek12323</td>
                            <td>
                                {{-- <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center"> --}}
                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                    class="avatar avatar-xs pull-up" title="" data-bs-original-title="Lilian Fuller">
                                    <img src="public-admin/assets/img/avatars/5.png" alt="Avatar" class="rounded-circle">
                                </li>
                            </td>
                            <td>0772345425</td>
                            <td><span class="badge bg-label-primary me-1">Admin</span></td>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>الزرقاء الجديد</strong></td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                    <div class="dropdown-menu">
                                        {{-- DO YOU REALLY WNAT TO DELETE THIS USER !!!!!!!!!!1 --}}
                                        <a class="dropdown-item text-success" href="javascript:void(0);"><i
                                                class="bx bx-edit-alt me-1"></i> Edit</a>
                                        <a class="dropdown-item text-danger" href="javascript:void(0);"><i
                                                class="bx bx-trash me-1 text-red"></i>Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong> عيسى البحتري</strong></td>
                            <td>essa-bahtari@gmail.com</td>
                            <td>issa9884552323</td>
                            <td>
                                {{-- <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center"> --}}
                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                    class="avatar avatar-xs pull-up" title="" data-bs-original-title="Lilian Fuller">
                                    <img src="https://cdn4.iconfinder.com/data/icons/avatars-21/512/avatar-circle-human-male-black-8-512.png"
                                        alt="Avatar" class="rounded-circle">
                                </li>
                            </td>
                            <td>0772345425</td>
                            <td><span class="badge bg-label-success me-1">User</span></td>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong> دوار معصوم جنب
                                    الدوار</strong></td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                    <div class="dropdown-menu">
                                        {{-- DO YOU REALLY WNAT TO DELETE THIS USER !!!!!!!!!!1 --}}
                                        <a class="dropdown-item text-success" href="javascript:void(0);"><i
                                                class="bx bx-edit-alt me-1"></i> Edit</a>
                                        <a class="dropdown-item text-danger" href="javascript:void(0);"><i
                                                class="bx bx-trash me-1 text-red"></i>Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong> عبدالله ابو حلاوة</strong>
                            </td>
                            <td>abood@gmail.com</td>
                            <td> oii94m7f3i4nf</td>
                            <td>
                                {{-- <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center"> --}}
                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                    class="avatar avatar-xs pull-up" title="" data-bs-original-title="Lilian Fuller">
                                    <img src="https://thumbs.dreamstime.com/z/businessman-avatar-image-beard-hairstyle-male-profile-vector-illustration-178545831.jpg"
                                        alt="Avatar" class="rounded-circle">
                                </li>
                            </td>
                            <td>0772345425</td>
                            <td><span class="badge bg-label-danger me-1">Owner</span></td>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>الزرقاء الجديد</strong></td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                    <div class="dropdown-menu">
                                        {{-- DO YOU REALLY WNAT TO DELETE THIS USER !!!!!!!!!!1 --}}
                                        <a class="dropdown-item text-success" href="javascript:void(0);"><i
                                                class="bx bx-edit-alt me-1"></i> Edit</a>
                                        <a class="dropdown-item text-danger" href="javascript:void(0);"><i
                                                class="bx bx-trash me-1 text-red"></i>Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
    
                
                </table>
            </div>
        </div>
    </div>



    {{-- -------------------------------- add new user admin modal ----------------------------- --}}

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              {{-- <h5 class="modal-title" id="exampleModalLabel">New message</h5> --}}
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                {{------------------- add new user form  -------------------}}
                    <h4 class="fw-bold py-3 mb-4 text-center"><span class="text-muted fw-light">Forms/</span>Add new user</h4>
                    <!-- Basic Layout -->
                    <div class="row d-felx justify-content-center">
                        <div class="col-md-12">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <form>
                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-name">Name</label>
                                            <input type="text" class="form-control" id="basic-default-name"placeholder="malek Doe">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-mail">Email</label>
                                            <input type="text" class="form-control" id="basic-default-mail"placeholder="name@gmail.com">
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-address">Address</label>
                                            <input type="text" class="form-control" id="basic-default-address">
                                        </div>
                                        
                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-phone">Phone No</label>
                                            <input type="text" id="basic-default-phone" class="form-control phone-mask"placeholder="658 799 8941">
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-pass">Password</label>
                                            <input type="text" id="basic-default-pass" class="form-control phone-mask">
                                        </div>
                                        <div class="d-flex justify-content-between">
                                        <button type="submit" class="btn btn-primary">Add</button>
                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                {{-- end of add new user form  --}}
            </div>
          </div>
        </div>
      </div>
@endsection
