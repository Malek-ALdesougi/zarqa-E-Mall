@extends('admin.layout.dashboard')




@section('content')
@include('sweetalert::alert')
<div class="container-xxl flex-grow-1 container-p-y">
<div class="card">
    <h5 class="card-header">All Stores</h5>
    <div class="table-responsive text-nowrap">
      <table class="table">
        <thead style="background-color:#696cff">
          <tr>
            <th style="color:white" >Store Owner</th>
            <th style="color:white" >Name</th>
            <th style="color:white" >Image</th>
            <th style="color:white" >Category</th>
            <th style="color:white" >Phone</th>
            <th style="color:white" >Address</th>
            <th style="color:white" >Description</th>
            <th style="color:white" >ِActions</th>
            
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
          <tr>
            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>أبو محمد اللفتاوي</strong></td>
            <td>ملبوسات أبو محمد الرائعة</td>
            <td>
                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="" data-bs-original-title="Lilian Fuller">
                  <img src="https://cdn1.iconfinder.com/data/icons/ui-roundicons/480/circle_store-512.png" alt="Avatar" class="rounded-circle">
                </li>
            </td>
            <td><span class="badge bg-label-danger me-1">ملابس وإكسسوارات</span></td>
            <td>+98555467666</td>
            <td>شارع السعادة-المربع الثاني -مقهى ابو العز </td>
            <td> محل اواعي مرتب على كيفك </td>

            <td>
              <div class="dropdown">
                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                  <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                </div>
              </div>
            </td>
          </tr>

          <tr>
            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>أبو محمد اللفتاوي</strong></td>
            <td>ملبوسات أبو محمد الرائعة</td>
            <td>
                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="" data-bs-original-title="Lilian Fuller">
                  <img src="https://cdn1.iconfinder.com/data/icons/ui-roundicons/480/circle_store-512.png" alt="Avatar" class="rounded-circle">
                </li>
            </td>
            <td><span class="badge bg-label-success me-1">أدوات كهربائية</span></td>
            <td>+98555467666</td>
            <td>شارع السعادة-المربع الثاني -مقهى ابو العز </td>
            <td> محل اواعي مرتب على كيفك </td>

            <td>
              <div class="dropdown">
                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                  <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                </div>
              </div>
            </td>
          </tr>

          <tr>
            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>أبو محمد اللفتاوي</strong></td>
            <td>ملبوسات أبو محمد الرائعة</td>
            <td>
                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="" data-bs-original-title="Lilian Fuller">
                  <img src="https://cdn1.iconfinder.com/data/icons/ui-roundicons/480/circle_store-512.png" alt="Avatar" class="rounded-circle">
                </li>
            </td>
            <td><span class="badge bg-label-warning me-1">مفروشات</span></td>
            <td>+98555467666</td>
            <td>شارع السعادة-المربع الثاني -مقهى ابو العز </td>
            <td> محل اواعي مرتب على كيفك </td>

            <td>
              <div class="dropdown">
                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                  <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                </div>
              </div>
            </td>
          </tr>
          
        </tbody>
      </table>
    </div>
  </div>
</div>
    
@endsection