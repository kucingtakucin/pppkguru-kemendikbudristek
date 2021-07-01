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
                            <h4 class="mb-0 font-size-18">Operator</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Informasi</a></li>
                                    <li class="breadcrumb-item active">Operator</li>
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
                                            <h5 class="text-primary">Operator !</h5>
                                            <p>Data Terkait Operator</p>
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
                                <h4 class="card-title mb-4">Form Ubah Operator</h4>

                                <form action="{{ route('admin.operator.update', $operator->id) }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf @method('PUT')
                                    <div class="form-group row mb-4">
                                        <label for="name" class="col-sm-3 col-form-label">Username</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="name" id="name"
                                                class="form-control @error('name') is-invalid @enderror"
                                                value="{{ $operator->name }}" autocomplete="off">
                                            @error('name')
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
                                                value="{{ $operator->email }}" autocomplete="off">
                                            @error('email')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label for="no_hp" class="col-sm-3 col-form-label">No HP</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="no_hp" id="no_hp"
                                                class="form-control @error('no_hp') is-invalid @enderror"
                                                value="{{ $operator->no_hp }}" autocomplete="off">
                                            @error('no_hp')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label for="fullname" class="col-sm-3 col-form-label">Nama Lengkap</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="fullname" id="fullname"
                                                class="form-control @error('fullname') is-invalid @enderror"
                                                value="{{ $operator->fullname }}" autocomplete="off">
                                            @error('fullname')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label for="password" class="col-sm-3 col-form-label">Password Baru</label>
                                        <div class="col-sm-9">
                                            <input type="password" name="password_baru" id="password_baru"
                                                class="form-control @error('password_baru') is-invalid @enderror"
                                                value="{{ old('password_baru') }}" autocomplete="off">
                                            @error('password_baru')
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
