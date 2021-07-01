@extends('layouts.template-back')
@include('plugins.sweetalert')
@include('plugins.datatables')

@section('content')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <h4 class="mb-0 font-size-18">Plotting PIC Pengaduan</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Informasi</a></li>
                                    <li class="breadcrumb-item active">Plotting PIC</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Daftar Wilayah Pengaduan</h4>
                                <br />
                                <table class="table table-bordered dt-responsive nowrap"
                                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr>
                                            <th class="text-center">No</th>
                                            <th class="text-center">Nama Propinsi</th>
                                            <th class="text-center">Nama Operator</th>
                                        </tr>
                                    </thead>
                                    <tbody id="wilayah_pengaduan">
                                        @foreach ($propinsi as $item)
                                            <tr>
                                                <td class="text-center">{{ $loop->iteration }}</td>
                                                <td>{{ $item->nama }}</td>
                                                <td class="text-center">
                                                    <select name="pic" class="form-control pic"
                                                        data-kode_wilayah="{!! $item->kode_wilayah !!}">
                                                        @if (is_null($item->user_id))
                                                            <option disabled selected>---Pilih Operator Pengaduan---
                                                            </option>
                                                        @else
                                                            <option value="{{ $item->user_id }}" selected>
                                                                {{ $item->user->fullname }}</option>
                                                        @endif
                                                        @foreach ($users as $user)
                                                            <option value="{{ $user->id }}">{{ $user->fullname }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $('#datatable').DataTable()

        $('#datatable').on('click', '#btn-delete', function() {
            var id = $(this).data('id')

            Swal.fire({
                title: 'Apakah anda yakin?',
                text: "Menghapus data tersebut",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, hapus!',
                cancelButtonText: 'Tidak'
            }).then((result) => {
                if (result.value) {
                    $.post("{{ route('admin.plotting.destroy') }}", {
                        _token: "{{ csrf_token() }}",
                        _method: 'DELETE',
                        id: id
                    }).done(function(result) {
                        Swal.fire('Berhasil!', 'Data berhasil dihapus.', 'success')
                        setTimeout(() => {
                            location.reload();
                        }, 2000);
                    });
                }
            })
        })

        $('.pic').change(function(event) {
            event.preventDefault()
            // console.log($(this).val())
            let formData = new FormData()
            formData.append('user_id', $(this).val())
            formData.append('kode_wilayah', pad($(this).data('kode_wilayah')))
            formData.append('_token', '{{ csrf_token() }}')
            console.log(pad($(this).data('kode_wilayah')))
            console.log($(this).val())
            $.ajax({
                url: "{{ route('admin.plotting.store') }}",
                type: 'post',
                processData: false,
                contentType: false,
                data: formData,
                success: function(data) {
                    console.log(data)
                    Swal.fire({
                        title: 'Berhasil!',
                        text: `${data.message}`,
                        icon: 'success',
                        showConfirmButton: false,
                        timer: 1000
                    })
                    setTimeout(() => {
                        location.reload()
                    }, 1000);
                },
            })

            function pad(n) {
                return (n < 100000) ? ("0" + n) : n;
            }
        })
    </script>
@endpush
