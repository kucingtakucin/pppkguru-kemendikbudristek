@extends('layouts.template-front')

@section('content')
    
    <!-- Hero Start -->
    <section class="bg-half-170 d-table w-100" id="home">
        <img src="{{ asset('assets-front/img/bg-top-right.png') }}" class="olay-top-right">
        <img src="{{ asset('assets-front/img/bg-left-lg.png') }}" class="olay-top-left">
        <div class="container bg-right-sm bg-left-sm">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="title-heading mt-4">
                        <h1 class="text-secondary medium-heading">Hubungi Kami</h1>
                        <p class="para-desc">Saluran Informasi dan Pengaduan seputar Pendidikan dan Kebudayaan:</p>
                        <div class="location">
                            <div class="home">
                                <i class="fa fa-home text-secondary"></i>
                                <p>{{ $kontak->alamat }}</p>
                            </div>
                            <div class="phone">
                                <i class="fa fa-phone text-secondary"></i>
                                <p>{{ $kontak->no_telepon }}</p>
                            </div>
                            <div class="email">
                                <i class="fa fa-envelope-open-text text-secondary"></i>
                                <p>{{ $kontak->email }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 d-none d-lg-block mt-4 pt-2 mt-sm-0 pt-sm-0">
                    <img src="{{ asset('assets-front/img/custom/Ilustrasi-Guru-Inspiratif-Kontak.png') }}" class="w-100" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- Hero End -->

@endsection