@extends('layouts.template-back')
@include('plugins.sweetalert')

@push('styles')
<link href="{{ asset('assets/libs/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />

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
                                    <h4 class="mb-0 font-size-18">Tahapan Survey</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Informasi</a></li>
                                            <li class="breadcrumb-item active">Tahapan Survey</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-lg-3">
                                <div class="my-1 text-center">
                                    <button type="button" class="btn btn-primary waves-effect waves-light btn-block" data-toggle="modal" data-target=".modal_tahapan">Tambah Tahapan</button>
                                    <button type="button" class="btn btn-primary waves-effect waves-light btn-block" data-toggle="modal" data-target=".modal_detail">Tambah Rincian Tahapan</button>
                                </div>
                                <div class="card bg-soft-primary">
                                    <div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="text-primary p-3">
                                                    <h5 class="text-primary">Tahapan Survey !</h5>
                                                    <p>Penjelasan dan Informasi Terkait Tahapan Survey Suara dan penilaian</p>
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
                                <div class="card my-1">
                                    <div class="card-body">
                                        <h4 class="card-title mb-5">Daftar Tahapan</h4>
                                        <ul class="verti-timeline list-unstyled">
                                            @foreach($judul as $val) 
                                            <li class="event-list">
                                                <div class="event-timeline-dot">
                                                    <a onclick="remove('{{ Crypt::encryptString($val->id) }}')"><i class="bx bxs-trash font-size-20 text-danger text-center"></i></a>
                                                </div>
                                                <div class="media">
                                                    <!-- <div class="mr-3">
                                                        <h5 class="font-size-14">Hapus <i class="bx bx-right-arrow-alt font-size-16 text-primary align-middle ml-2"></i></h5>
                                                    </div> -->
                                                    <div class="media-body">
                                                        <div>
                                                            {{ $val->nama_tahapan }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                        
                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->


                <div class="modal fade modal_detail" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title mt-0">Tahapan Survey</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">

                                <form method="POST" action="{{ route('submit.tahapan.isi') }}">
                                @csrf
                                    <div class="form-group row mb-4">
                                        <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Pilih Tahapan</label>
                                        <div class="col-sm-9">
                                            <div class="form-group">
                                                <select class="form-control select2" name="id_tahapan">
                                                    @foreach($judul as $val) 
                                                    <option value="{{ $val->id }}">{{ $val->nama_tahapan }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Pilih Kategori</label>
                                        <div class="col-sm-9">
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="customRadioInline1" name="kategori" class="custom-control-input" value="tujuan">
                                                <label class="custom-control-label" for="customRadioInline1">Tujuan</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="customRadioInline2" name="kategori" class="custom-control-input" value="ketentuan">
                                                <label class="custom-control-label" for="customRadioInline2">Ketentuan</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Masukkan Isi Tahapan</label>
                                        <div class="col-sm-9">
                                          <textarea name="isi" class="form-control" id="horizontal-firstname-input" rows="5"></textarea>
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
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->

                <div class="modal fade modal_tahapan" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title mt-0">Tahapan Survey</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">

                                <form method="POST" action="{{route('submit.tahapan')}}">
                                @csrf
                                    <div class="form-group row mb-4">
                                        <label for="horizontal-firstname-input" class="col-sm-12 col-form-label">Masukkan Judul Tahapan</label>
                                        <div class="col-sm-12">
                                          <input type="text" name="nama_tahapan" class="form-control" id="horizontal-firstname-input">
                                        </div>
                                    </div>

                                    <div class="form-group row justify-content-end">
                                        <div class="col-sm-12">
                                            <div>
                                                <button type="submit" class="btn btn-primary w-md">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->


@endsection

@push('scripts')
<script src="{{ asset('assets/libs/select2/js/select2.min.js') }}"></script>
<script>
    function remove(id) {
        Swal.fire({
            title : "Anda yakin ingin menghapus alasan?",
            icon  : "warning",
            showCancelButton   : true,
            confirmButtonColor : "#b50002",
            confirmButtonText  : "Ya, hapus",
            cancelButtonText   : "Tidak",
            closeOnConfirm     : false,
            closeOnCancel      : true
        }).then((result) => {
            if (result.value) {
                $.ajax({
                    type: 'PUT',
                    url:"{{ route('delete.alasan') }}",
                    data: { _token:'{{ csrf_token() }}', id: id},
                    success: function(data){
                        get = JSON.parse(data);
                        if (get.status == 'success') {
                            Swal.fire({
                                title : 'Berhasil menghapus data!',
                                allowOutsideClick: false,
                                icon  : "success",
                            }).then(function() {
                                window.location.href = "{{ route('admin.alasan_program') }}";
                            });
                        } else {
                            Swal.fire({
                                title : 'Gagal menghapus data!',
                                allowOutsideClick: false,
                                icon  : "error",
                            });
                        }
                    },
                    error: function() {
                        Swal.fire({
                            title : 'Gagal menghapus data!',
                            allowOutsideClick: false,
                            icon  : "error",
                        });
                    }
                });
            }
        });
    }
</script>
@endpush