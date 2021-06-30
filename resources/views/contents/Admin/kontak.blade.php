@extends('layouts.template-back')

@section('content')
   
            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0 font-size-18">Kontak</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Informasi</a></li>
                                            <li class="breadcrumb-item active">Kontak</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-lg-3">
                                <div class="card bg-soft-primary">
                                    <div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="text-primary p-3">
                                                    <h5 class="text-primary">HUBUNGI KAMI !</h5>
                                                    <p>Saluran Informasi dan Pengaduan seputar Pendidikan dan Kebudayaan</p>
                                                </div>
                                            </div>
                                            <div class="col-12 align-self-end">
                                                <img src="{{ asset('assets/images/profile-img.png') }}" alt="" class="img-fluid">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-9">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Form Pengisian</h4>

                                        <form method="POST" action="{{route('submit.informasi', ['tbl'=>'kontak', 'jns'=>'kontak'])}}">
                                            @csrf
                                            <div class="form-group row mb-4">
                                                <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Nomor Hp/Telepon</label>
                                                <div class="col-sm-9">
                                                  <input type="text" name="no_telepon" class="form-control" id="horizontal-firstname-input" value="{{ @$data->no_telepon }}">
                                                </div>
                                            </div>
                                            <div class="form-group row mb-4">
                                                <label for="horizontal-email-input" class="col-sm-3 col-form-label">Alamat Email</label>
                                                <div class="col-sm-9">
                                                    <input type="email" name="email" class="form-control" id="horizontal-email-input" value="{{ @$data->email }}">
                                                </div>
                                            </div>
                                            <div class="form-group row mb-4">
                                                <label for="horizontal-email-input" class="col-sm-3 col-form-label">Alamat Kantor</label>
                                                <div class="col-sm-9">
                                                    <textarea name="alamat" class="form-control" id="horizontal-email-input" rows="5">{{ @$data->alamat }}</textarea>
                                                </div>
                                            </div>

                                            <div class="form-group row justify-content-end">
                                                <div class="col-sm-9">
                                                    <div>
                                                        <button type="submit" class="btn btn-primary w-md">Submit</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                        
                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

@endsection