@extends('layout.master')
@section('new-class', 'second-nav')


@section('content')
{{-- <div class="container"> --}}
 <div style="background-color:#223b4b; padding-top:110px">

        <div id="register" style="border-radius:20px;" class="container d-flex justify-content-center bg-light col-md-8">
            <section class="col-md-6">
                <!--------------- Pills navs -------------->
                <ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active my-font" id="tab-login" data-mdb-toggle="pill" href="#pills-login"
                            role="tab" aria-controls="pills-login" aria-selected="true">إنشاء حساب كمستخدم</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link my-font" id="tab-register" data-mdb-toggle="pill" href="#pills-register"
                            role="tab" aria-controls="pills-register" aria-selected="false">إنشاء حساب كمالك محل</a>
                    </li>
                </ul>

                {{-- ----------------------------------- USER REGISTERATION FORM ------------------------------------ --}}
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="tab-login">
                        <form>
                            <p class="my-color text-center my-font fs-7">: تسجيل الدخول من خلال</p>
                            <div class="d-flex justify-content-evenly  mb-3">
                                <button type="button" class="btn btn-link btn-floating mx-1">
                                    <i class="fab fs-2 fa-google"></i>
                                </button>
                                <button type="button" class="btn btn-link btn-floating mx-1">
                                    <i  class="fs-2 fab fa-facebook-f"></i>
                                </button>

                            </div>

                            <p class="text-center my-font my-color">أو </p>

                            <div class="form-outline mb-4">
                                <input type="text" id="registerName" class="form-control right" />
                                <label class="form-label" for="registerName">الإسم</label>
                            </div>

                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <input type="email" id="registerEmail" class="form-control right" />
                                <label class="form-label" for="registerEmail">البريد الإلكتروني</label>
                            </div>

                            <!-- address input -->
                            <div class="form-outline mb-4">
                                <input type="text" id="registerAddress" class="form-control right" />
                                <label class="form-label" for="registerAddress"> العنوان</label>
                            </div>

                            <!-- phone input -->
                            <div class="form-outline mb-4">
                                <input type="number" id="registerNumber" class="form-control right" />
                                <label class="form-label" for="registerNumber">الهاتف</label>
                            </div>

                            <!-- USER IMAGE input -->
                            <div class=" mb-4">
                                <label for="formFileLg" class="form-label">صورة المستخدم</label>
                                <input class="form-control form-control-lg" id="formFileLg" type="file" />
                            </div>

                            <!-- Password input -->
                            <div class="form-outline mb-4">
                                <input type="password" id="registerPassword" class="form-control right" />
                                <label class="form-label" for="registerPassword">كلمة المرور</label>
                            </div>

                            <!-- Repeat Password input -->
                            <div class="form-outline mb-4">
                                <input type="password" id="registerRepeatPassword" class="form-control right" />
                                <label class="form-label" for="registerRepeatPassword">إعادة كلمة المرور</label>
                            </div>

                            <!-- Checkbox -->
                            <div class="form-check d-flex justify-content-center mb-4">
                                <input class="form-check-input me-2" type="checkbox" value="" id="registerCheck"
                                    checked aria-describedby="registerCheckHelpText" />
                                <label class="form-check-label my-font" for="registerCheck">
                                    لقد قرأت ووافقت على الشروط
                                </label>
                            </div>

                            <!-- Submit button -->
                            <button style="background-color:#1e4356; color:white;" type="submit"
                                class="btn btn-block mb-3">
                                <p class="my-font d-inline">تسجيل</p>
                            </button>

                            <p class="mb-5 pb-lg-2 right" style="color: #393f81;">أمتلك حساب مسبقا<a
                                href="login" style="color: #e71811; margin-right:7px;"> تسجيل الدخول</a></p>
                        </form>
                    </div>


                    {{-- ------------------------------------ STORE OWNER REGISTERATION FORM ------------------------------------- --}}

                    <div class="tab-pane fade" id="pills-register" role="tabpanel" aria-labelledby="tab-register">
                        <form>
                            <p class="my-color text-center my-font fs-7">: تسجيل الدخول من خلال</p>
                            <div class="d-flex justify-content-evenly  mb-3">
                                <button type="button" class="btn btn-link btn-floating mx-1">
                                    <i class="fab fs-2 fa-google"></i>
                                </button>
                                <button type="button" class="btn btn-link btn-floating mx-1">
                                    <i  class="fs-2 fab fa-facebook-f"></i>
                                </button>
                            </div>

                            <p class="text-center my-font my-color">أو </p>


                            <!-- Name input -->
                            <div class="form-outline mb-4">
                                <input type="text" id="registerName" class="form-control right" />
                                <label class="form-label" for="registerName">الإسم</label>
                            </div>

                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <input type="email" id="registerEmail" class="form-control right" />
                                <label class="form-label" for="registerEmail">البريد الإلكتروني</label>
                            </div>

                            <!-- STORE NAME input -->
                            <div class="form-outline mb-4">
                                <input type="text" id="registerStoreName" class="form-control right" />
                                <label class="form-label" for="registerStoreName">إسم المتجر</label>
                            </div>

                            <!-- STORE Phone input -->
                            <div class="form-outline mb-4">
                                <input type="text" id="registerPhone" class="form-control right" />
                                <label class="form-label" for="registerPhone">رقم الهاتف</label>
                            </div>

                            <!-- STORE category input -->
                            <select class="form-select mb-4" aria-label="Default select example">
                                <option selected>فئة المتجر</option>
                                <option value="1">ملابس</option>
                                <option value="2">كهربائيات</option>
                                <option value="3">أثاث</option>
                                <option value="4">ألعاب وهدايا</option>
                                <option value="5">ساعات وعطور</option>
                                <option value="6">منظفات</option>
                                <option value="7">مواد تموينية</option>
                                <option value="8">أجهزة ذكية وحواسيب</option>
                                <option value="9">أخرى</option>
                             </select>

                            <!-- STORE description input -->
                            <div class="form-outline mb-4">
                                <input type="text" id="registerStoreDescription" class="form-control right" />
                                <label class="form-label" for="registerStoreDescription">وصف المتجر</label>
                            </div>

                            <!-- STORE address input -->
                            <div class="form-outline mb-4">
                                <input type="text" id="registerStoreAddress" class="form-control right" />
                                <label class="form-label" for="registerStoreAddress">العنوان</label>
                            </div>

                            <!-- STORE IMAGE input -->
                            <div class=" mb-4">
                                <label for="formFileLg" class="form-label">صورة المتجر</label>
                                <input class="form-control form-control-lg" id="formFileLg" type="file" />
                            </div>

                            <!-- Password input -->
                            <div class="form-outline mb-4">
                                <input type="password" id="registerPassword" class="form-control right" />
                                <label class="form-label" for="registerPassword">كلمة المرور</label>
                            </div>

                            <!-- Repeat Password input -->
                            <div class="form-outline mb-4">
                                <input type="password" id="registerRepeatPassword" class="form-control right" />
                                <label class="form-label" for="registerRepeatPassword">إعادة كلمة المرور</label>
                            </div>

                            <!-- Checkbox -->
                            <div class="form-check d-flex justify-content-center mb-4">
                                <input class="form-check-input me-2" type="checkbox" value="" id="registerCheck"
                                    checked aria-describedby="registerCheckHelpText" />
                                <label class="form-check-label my-font" for="registerCheck">
                                    لقد قرأت ووافقت على الشروط
                                </label>
                            </div>

                            <!-- Submit button -->
                            <button style="background-color:#1e4356; color:white;" type="submit"
                                class="btn btn-block mb-3">
                                <p class="my-font d-inline">تسجيل</p>
                            </button>

                            <p class="mb-5 pb-lg-2 right" style="color: #393f81;">أمتلك حساب مسبقا<a
                                href="login" style="color: #e71811; margin-right:7px;"> تسجيل الدخول</a></p>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </div>
{{-- </div> --}}

@endsection