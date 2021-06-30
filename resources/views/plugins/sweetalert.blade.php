@push('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/libs/sweetalert2/sweetalert2.min.css') }}">
@endpush

@push('scripts')
    <script src="{{ asset('assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>
    <script>
        function show_swal(tipe, title, message) {
            Swal.fire(
                title, message, tipe
            )
        }
    </script>
@endpush

@if (Session::has('success'))
    @push('scripts')
        <script>
            $(function () {
                Swal.fire({
                    title: 'Berhasil !',
                    text: "{{ Session::get('success') }}",
                    timer: 2000,
                    icon: 'success',
                    showCancelButton: false,
                    showConfirmButton: false
                });
            });
        </script>
    @endpush
@endif

@if (Session::has('error'))
    @push('scripts')
        <script>
            $(function () {
                Swal.fire(
                    'Error!',
                    "{{ Session::get('error') }}",
                    'error'
                );
            });
        </script>
    @endpush
@endif