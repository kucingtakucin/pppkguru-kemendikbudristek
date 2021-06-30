@push('styles')
<link href="{{ asset('assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')}}" rel="stylesheet"
    type="text/css" />

<!-- Responsive datatable examples -->
<link href="{{ asset('assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}" rel="stylesheet"
    type="text/css" />
@endpush

@push('scripts')
    <script src="{{ asset('assets/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"></script>
    <script>
        let default_lang = {
            paginate: {
                next: 'Selanjutnya',
                previous: 'Sebelumnya'
            },
            lengthMenu: "Menampilkan _MENU_ baris",
            search: 'Cari:',
            info: 'Menampilkan _START_ ke _END_ dari _TOTAL_ baris',
            infoEmpty: 'Kosong',
            emptyTable: 'Tidak ada data yang dapat ditampilkan',
            infoFiltered: '(tersaring dari _MAX_ baris)'
        };
    </script>
@endpush