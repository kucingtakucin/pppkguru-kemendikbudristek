@extends('layouts.template-front')

@section('content')
   
   
   <!-- Hero Start -->
    <section class="bg-auth d-table w-100" id="auth">
        <img src="assets/img/bg-top-right.png" class="olay-top-right">
        <!-- <img src="assets/img/bg-left-lg.png" class="olay-top-left"> -->
        <img src="assets/img/bg-left-sm.png" class="bg-left-bottom">
        <div class="container">
            <div class="row align-items-center mt-5">
                <div class="col-lg-7 col-md-6">
                    <div class="title-auth mt-4">
                        <h1 class="heading cust"><span class="text-primary-darker">Student Voice</span><br>Kemdikbud GTK Dikmen</h1>
                        <p class="para-desc text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, natus perferendis deleniti dolorum et impedit facere praesentium fuga asperiores nisi nemo dolorem. Eaque in nam provident saepe officiis, dignissimos esse.</p>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 mt-4 pt-2 mt-sm-0 pt-sm-0">
                    <div class="card shadow rounded border-0 ms-lg-4">
                        <div class="card-body">
                            <h5 class="card-title text-center">Halaman Login</h5>
                            <form class="login-form mt-4">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">                                               
                                            <label class="form-label">Nama Depan <span class="text-danger">*</span></label>
                                            <div class="form-icon position-relative">
                                                <i data-feather="user" class="fea icon-sm icons"></i>
                                                <input type="text" class="form-control ps-5" placeholder="Nama Depan" name="s" required="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label">Alamat Email <span class="text-danger">*</span></label>
                                            <div class="form-icon position-relative">
                                                <i data-feather="mail" class="fea icon-sm icons"></i>
                                                <input type="email" class="form-control ps-5" placeholder="Email" name="email" required="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label">Kata Sandi <span class="text-danger">*</span></label>
                                            <div class="form-icon position-relative">
                                                <i data-feather="key" class="fea icon-sm icons"></i>
                                                <input type="password" class="form-control ps-5" placeholder="Kata Sandi" required="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Saya menyetujui <a href="#" class="text-primary">Syarat dan Ketentuan</a> yang berlaku
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="d-grid">
                                            <button class="btn btn-primary">Masuk</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero End -->

@endsection