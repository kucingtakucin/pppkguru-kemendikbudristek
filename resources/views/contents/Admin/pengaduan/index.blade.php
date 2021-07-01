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
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Daftar Pengaduan</h4>
                                <hr>
                                <table id="datatable" class="table table-bordered dt-responsive nowrap"
                                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr>
                                            <th class="text-center">No</th>
                                            <th class="text-center">Nama Pengadu</th>
                                            <th class="text-center">Judul</th>
                                            <th class="text-center">Tanggal Pengaduan</th>
                                            <th class="text-center">Status</th>
                                            <th class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($pengaduan as $item)
                                            <tr>
                                                <td class="text-center">{{ $loop->iteration }}</td>
                                                <td>{{ $item->nama }}</td>
                                                {{--
                                                <td>{{ $item->email }}</td>
                                                <td class="text-center">{{ $item->asal_kabupaten_kota }},
                                                    {{ $item->asal_provinsi }}</td>
                                                <td class="text-center">{{ $item->no_hp }}</td>
                                                <td class="text-center">
                                                    {{ Carbon\Carbon::parse($item->created_at)->format('d M Y') }}</td>
                                                --}}
                                                <td>{{ $item->judul }}</td>
                                                <td class="text-center">
                                                    {{ $item->created_at }}</td>
                                                @if ($item->status==1)
                                                <td class="text-center"><button class="btn btn-sm btn-success">Aktif</button></td>
                                                @else
                                                <td class="text-center"><button class="btn btn-sm btn-danger">Selesai</button></td>
                                                @endif

                                                <td class="text-center">
                                                    <a href="{{ route('admin.pengaduan.chat', $item->id) }}"
                                                        class="btn btn-sm btn-primary"><i class="dripicons-message"></i>
                                                        Balas</a>
                                                    {{--
                                                    <button type="button" id="btn-delete" data-id="{{ $item->id }}"
                                                        class="btn btn-sm btn-danger"><i class="dripicons-trash"></i>
                                                        Hapus</button>
                                                    --}}
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
                    $.post("{{ route('admin.infografis.delete') }}", {
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
    </script>
@endpush
