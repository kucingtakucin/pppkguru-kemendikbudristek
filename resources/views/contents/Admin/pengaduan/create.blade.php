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
                            <h4 class="mb-0 font-size-18">Pengaduan</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Informasi</a></li>
                                    <li class="breadcrumb-item active">Pengaduan</li>
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
                                            <h5 class="text-primary">Pengaduan !</h5>
                                            <p>Data Terkait Pengaduan</p>
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
                                <h4 class="card-title mb-4">Form Tambah Pengaduan</h4>

                                <form action="{{ route('admin.pengaduan.store') }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf @method('POST')
                                    <div class="form-group row mb-4">
                                        <label for="judul" class="col-sm-3 col-form-label">Judul Pengaduan</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="judul" id="judul"
                                                class="form-control @error('judul') is-invalid @enderror"
                                                value="{{ old('judul') }}" autocomplete="off">
                                            @error('judul')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label for="kategori_id" class="col-sm-3 col-form-label">Kategori Pengaduan</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="kategori_id" id="kategori_id"
                                                class="form-control @error('kategori_id') is-invalid @enderror"
                                                value="{{ old('kategori_id') }}" autocomplete="off">
                                            @error('kategori_id')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label for="nama" class="col-sm-3 col-form-label">Nama
                                            Pengadu</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="nama" id="nama"
                                                class="form-control @error('nama') is-invalid @enderror"
                                                value="{{ old('nama') }}" autocomplete="off">
                                            @error('nama')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label for="email" class="col-sm-3 col-form-label">Email</label>
                                        <div class="col-sm-9">
                                            <input type="email" name="email" id="email"
                                                class="form-control @error('email') is-invalid @enderror"
                                                value="{{ old('email') }}" autocomplete="off">
                                            @error('email')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label for="no_hp" class="col-sm-3 col-form-label">No
                                            WhatsApp</label>
                                        <div class="col-sm-9">
                                            <input type="tel" name="no_hp" id="no_hp"
                                                class="form-control @error('no_hp') is-invalid @enderror"
                                                value="{{ old('no_hp') }}" autocomplete="off">
                                            @error('no_hp')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label for="asal_provinsi" class="col-sm-3 col-form-label">Asal Provinsi</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="asal_provinsi" id="asal_provinsi"
                                                class="form-control @error('asal_provinsi') is-invalid @enderror"
                                                value="{{ old('asal_provinsi') }}" autocomplete="off">
                                            @error('asal_provinsi')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label for="asal_kabupaten_kota" class="col-sm-3 col-form-label">Asal Kabupaten /
                                            Kota</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="asal_kabupaten_kota" id="asal_kabupaten_kota"
                                                class="form-control @error('asal_kabupaten_kota') is-invalid @enderror"
                                                value="{{ old('asal_kabupaten_kota') }}" autocomplete="off">
                                            @error('asal_kabupaten_kota')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label for="isi" class="col-sm-3 col-form-label">Isi
                                            Aduan</label>
                                        <div class="col-sm-9">
                                            <textarea name="isi" id="isi"
                                                class="form-control summernote @error('isi') is-invalid @enderror">{{ old('isi') }}</textarea>
                                            @error('isi')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
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
            $(".summernote").summernote({
                height: 300,
                minHeight: null,
                maxHeight: null,
                focus: !0
            });
        </script>
    @endpush
