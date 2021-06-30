@extends('layouts.template-back')
@push('styles')
    <!-- Summernote css -->
    <link href="{{ asset('assets/libs/summernote/summernote-bs4.min.css') }}" rel="stylesheet" type="text/css" />
@endpush
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
                    <h4 class="mb-0 font-size-18">Infografis</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Informasi</a></li>
                            <li class="breadcrumb-item active">Infografis</li>
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
                                    <h5 class="text-primary">Potofolio !</h5>
                                    <p>Data Terkait Portofolio dan Penjelasan Sistem Guru Inspiratif</p>
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

                        <form action="{{ route('admin.infografis.store') }}" method="post" enctype="multipart/form-data">
                            @csrf @method('POST')
                            <div class="form-group row mb-4">
                                <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Judul Infografis</label>
                                <div class="col-sm-9">
                                    <input type="text" name="judul" class="form-control" id="horizontal-firstname-input">
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label for="horizontal-email-input" class="col-sm-3 col-form-label">Jenis</label>
                                <div class="col-sm-9">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="category" id="inlineRadio1" value="gambar">
                                        <label class="form-check-label" for="inlineRadio1">Gambar</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="category" id="inlineRadio2" value="file">
                                        <label class="form-check-label" for="inlineRadio2">File</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label for="horizontal-email-input" class="col-sm-3 col-form-label">Deskripsi</label>
                                <div class="col-sm-9">
                                    <textarea type="text" name="deskripsi" class="form-control summernote" id="horizontal-email-input"></textarea>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label for="horizontal-email-input" class="col-sm-3 col-form-label">Upload File/Foto</label>
                                <div class="col-sm-9">
                                    <input type="file" name="name_file" class="form-control" id="">
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

@push('scripts')
<script src="{{ asset('assets/libs/summernote/summernote-bs4.min.js') }}"></script>

<script>
$(".summernote").summernote({height:300,minHeight:null,maxHeight:null,focus:!0});
</script>
@endpush