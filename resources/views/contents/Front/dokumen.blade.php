@extends('layouts.template-front')

@push('styles')

    <!-- dataTables Css -->
    <link rel="stylesheet" href="{{ asset('assets-front/css/jquery.dataTables.min.css') }}">

    <style>
        #mapdiv {
            height: 500px;
            min-width: 310px;
            max-width: 100%;
            margin: 0 auto;
        }

        #chartdiv {
          width: 100%;
          height: 350px;
        }

        #chartdiv2 {
          width: 100%;
          height: 350px;
        }
    </style>
@endpush

@section('content')

    <!-- Hero Start -->
    <section class="bg-half w-100 cust" id="data-counter">
        <img src="{{ asset('assets-front/img/bg-top-right.png') }}" class="olay-top-right">
        <img src="{{ asset('assets-front/img/bg-left-lg.png') }}" class="olay-top-left">
        <div class="container bg-left-sm bg-right-sm">
            <div class="row">
                <h1 class="text-secondary medium-heading">Dokumen Pendukung</h1>
                <p class="para-desc">Dokumen Informasi Pendukung Seputar Pendidikan dan Kebudayaan:</p>
                <div class="col-12 mt-md-5 mt-5" id="ringkasan-data">
                    <div class="ringkasan-table table-res-2">
                        <table id="tabel-ringkasan" class="dataTable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Judul</th>
                                    <th>File</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($dokumen as $item)
                                <tr>
                                    <td>{{ $no }}</td>
                                    <td>{{ $item->judul }}</td>
                                    <td><a href="{{ asset('uploads/dokumen/'.$item->name_file) }}" class="btn btn-primary btn-sm"><i class="fa fa-download text-white"> Unduh</button></td>
                                </tr>
                                @php
                                    $no++;
                                @endphp
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero End -->

@endsection


@push('scripts')

    <!-- dataTable Js -->
    <script src="{{ asset('assets-front/js/jquery.dataTables.min.js') }}"></script>
    <!-- Main Js -->
    <script src="{{ asset('assets-front/js/plugins.init.js') }}"></script>

    <script>
        $(document).ready(function() {
            $('#tabel-ringkasan').DataTable();
        } );


    </script>
@endpush

