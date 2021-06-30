@extends('layouts.frontend.app')

@section('content')
    <section class="bg-extra-dark-gray padding-25px-tb page-title-small">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-12 col-xl-8 col-lg-6">
                    <h1 class="alt-font text-white font-weight-500 no-margin-bottom text-center text-lg-left"></h1>
                </div>
                <div
                    class="col-12 col-xl-4 col-lg-6 breadcrumb justify-content-center justify-content-lg-end text-small alt-font md-margin-10px-top">
                    <ul class="xs-text-center">
                        <li><a href="{{ route('home') }}" class="text-white-hover">Beranda</a></li>
                        <li>Login</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Hero Start -->
    <section class="bg-auth d-table w-100" id="auth">
        {{-- <img src="{{ asset('assets-front/img/bg-top-right.png') }}" class="olay-top-right"> --}}
        <!-- <img src="assets/img/bg-left-lg.png" class="olay-top-left"> -->
        {{-- <img src="{{ asset('assets-front/img/bg-left-sm.png') }}" class="bg-left-bottom"> --}}
        <div class="container">
            <div class="row align-items-center mt-5">
                <div class="col-lg-7 col-md-6">
                    <div class="title-auth mt-4">
                        <h1 class="heading cust"><span class="text-primary-darker">PPPK Guru</span><br>Kemdikbudristek</h1>
                        <p class="para-desc text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores,
                            natus perferendis deleniti dolorum et impedit facere praesentium fuga asperiores nisi nemo
                            dolorem. Eaque in nam provident saepe officiis, dignissimos esse.</p>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 mt-4 pt-2 mt-sm-0 pt-sm-0">
                    <div class="card shadow rounded border-0 ms-lg-4">
                        <div class="card-body">
                            <h5 class="card-title text-center">Halaman Login</h5>
                            <form class="login-form mt-4" method="POST" action="{{ route('submit.login') }}">
                                @csrf
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Username <span class="text-danger">*</span></label>
                                        <div class="form-icon position-relative">
                                            <i data-feather="mail" class="fea icon-sm icons"></i>
                                            <input type="text" class="form-control ps-5" placeholder="Email" name="email"
                                                required="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Password <span class="text-danger">*</span></label>
                                        <div class="form-icon position-relative">
                                            <i data-feather="key" class="fea icon-sm icons"></i>
                                            <input type="password" class="form-control ps-5" placeholder="Password"
                                                name="password" required="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-primary">Masuk</button>
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
