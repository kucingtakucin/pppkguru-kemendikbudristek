@extends('layouts.template-back')
@include('plugins.sweetalert')

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
                                    <h4 class="mb-0 font-size-18">Deskripsi Sistem</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Informasi</a></li>
                                            <li class="breadcrumb-item active">Sistem</li>
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
                                                    <h5 class="text-primary">Deskripsi Sistem!</h5>
                                                    <p>Penjelasan dan Informasi Terkait Sistem Informasi Guru Inspiratif</p>
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

                                        <form method="POST" action="{{route('submit.informasi', ['tbl'=>'deskripsi_sistem', 'jns'=>'deskripsi'])}}">
                                            @csrf
                                            <div class="form-group row mb-4">
                                                <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Nama Program</label>
                                                <div class="col-sm-9">
                                                  <input type="text" name="program" class="form-control" id="horizontal-firstname-input" value="{{ @$data->program }}">
                                                </div>
                                            </div>
                                            <div class="form-group row mb-4">
                                                <label for="horizontal-email-input" class="col-sm-3 col-form-label">Nama Instansi</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="nama_instansi" class="form-control" id="horizontal-email-input" value="{{ @$data->nama_instansi }}">
                                                </div>
                                            </div>
                                            <div class="form-group row mb-4">
                                                <label for="horizontal-email-input" class="col-sm-3 col-form-label">Informasi Singkat Program</label>
                                                <div class="col-sm-9">
                                                    <textarea type="text" name="informasi_singkat" class="form-control" id="horizontal-email-input" rows="10">{{ @$data->informasi_singkat }}</textarea>
                                                </div>
                                            </div>
                                            <div class="form-group row mb-4">
                                                <label for="horizontal-email-input" class="col-sm-3 col-form-label">Informasi Live Data</label>
                                                <div class="col-sm-9">
                                                    <textarea type="text" name="informasi_live_data" class="form-control" id="horizontal-email-input" rows="5">{{ @$data->informasi_live_data }}</textarea>
                                                </div>
                                            </div>
                                            <!-- <div class="form-group row mb-4">
                                                <label for="horizontal-email-input" class="col-sm-3 col-form-label">Alasan Program</label>
                                                <div class="col-sm-9">
                                                    <textarea type="text" name="alasan_program" class="form-control" id="horizontal-email-input">{{ @$data->alasan_program }}</textarea>
                                                </div>
                                            </div> -->

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