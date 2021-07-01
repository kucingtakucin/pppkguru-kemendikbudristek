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
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Daftar Operator</h4>
                                <a href="{{ route('admin.operator.create') }}" class="btn btn-sm btn-primary mb-4"><i
                                        class="dripicons-plus"></i>Tambah</a>
                                <table id="datatable" class="table table-bordered dt-responsive nowrap"
                                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr>
                                            <th class="text-center">No</th>
                                            <th class="text-center">Nama Operator</th>
                                            <th class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($operator as $item)
                                            <tr>
                                                <td class="text-center">{{ $loop->iteration }}</td>
                                                <td>{{ $item->fullname }}</td>
                                                <td class="text-center">
                                                    <a href="{{ route('admin.operator.edit', $item->id) }}"
                                                        class="btn btn-sm btn-primary"><i class="dripicons-pencil"></i>
                                                        Edit</a>
                                                    {{-- <button type="button" id="btn-delete" data-id="{{ $item->id }}"
                                                        class="btn btn-sm btn-danger"><i class="dripicons-trash"></i>
                                                        Hapus</button> --}}
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
                    $.post("{{ route('admin.operator.destroy') }}", {
                        _token: "{{ csrf_token() }}",
                        _method: 'DELETE',
                        id: id
                    }).done(function(result) {
                        Swal.fire('Berhasil!', 'Data berhasil dihapus.', 'success')
                        setTimeout(() => {
                            location.reload();
                        }, 500);
                    });
                }
            })
        })
    </script>
@endpush
