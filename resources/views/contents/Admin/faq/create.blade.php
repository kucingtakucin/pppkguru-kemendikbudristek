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
                            <h4 class="mb-0 font-size-18">FAQ</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Informasi</a></li>
                                    <li class="breadcrumb-item active">FAQ</li>
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
                                            <h5 class="text-primary">FAQ !</h5>
                                            <p>Data Terkait FAQ</p>
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
                                <h4 class="card-title mb-4">Form Tambah FAQ</h4>

                                <form action="{{ route('admin.faq.store') }}" method="post" enctype="multipart/form-data">
                                    @csrf @method('POST')
                                    <div class="form-group row mb-4">
                                        <label for="tanya" class="col-sm-3 col-form-label">Pertanyaan</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="tanya" id="tanya"
                                                class="form-control @error('tanya') is-invalid @enderror"
                                                value="{{ old('tanya') }}" autocomplete="off">
                                            @error('tanya')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row mb-4">
                                        <label for="jawab" class="col-sm-3 col-form-label">Jawaban</label>
                                        <div class="col-sm-9">
                                            <textarea name="jawab" id="jawab"
                                                class="form-control summernote @error('jawab') is-invalid @enderror">{{ old('jawab') }}</textarea>
                                            @error('jawab')
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
