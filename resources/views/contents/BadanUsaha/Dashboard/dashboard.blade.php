@extends('layouts.template-back')

@section('content')
<main id="main-container" class="position-relative">
    <div class="overlay-text-back">BIP</div><div class="container-fluid wrapper-konten">
        <nav class="bg-white border-dark push shad-cust text-primary h2 font-w600 text-center py-3 rad-15" style="text-transform: uppercase;">
            Selamat Anda dapat mengajukan usulan proposal BIP tahun 2021  <!-- apabila mengusulkan PKK catat nomor urut saudara! -->
        </nav>
        <div class="row mt-3">
            <div class="col-xl-4">
                <div class="bg-white border-dark push shad-cust text-danger h4 font-w600 text-center py-4 rad-15 mb-10" style="text-transform: uppercase;">
                    Penerima <BR> bantuan insentif pemerintah<br>tahun 2021  <!-- apabila mengusulkan PKK catat nomor urut saudara! -->
                </div>
                <a class="mb-3 btn btn-block rad-15 btn-hero btn-noborder btn-blink mb-10 font-w600" href="{{route('badan_usaha.pengajuan')}}">
                    <i class="fa fa-arrow-down fa-4x mb-2 mover"></i>
                    <div class="h4">
                    KLIK DISINI <br>UNTUK MENGAJUKAN <br>BANTUAN
                    </div>
                </a>
                <a href="{{route('badan_usaha.profil')}}">
                    <div class="bg-image rad-15 overflow-hidden" style="background-image: url('https://appt.demoo.id/banper_pkk//assets/img/photos/photo26@2x.jpg');">
                    <div class="bg-black-op-75">
                        <div class="content content-top content-full text-center py-4">
                            <div class="content content-full text-center py-0">
                                <!-- <div class="mb-15">
                                <a class="img-link" href="{{route('badan_usaha.profil')}}">
                                    <img class="img-avatar img-avatar96" src="https://appt.demoo.id/banper_pkk/assets/img/custom/logo-sq.png" alt="">
                                </a>
                                </div> -->
                                <div class="h3 text-white font-w700 mb-1">Badan Usaha Test</div>
                                <hr class="my-2 border-custnyaa">
                                <!-- <div class="h5 font-w400 text-white mb-1 font-italic">Penerima Banper PKK 2020</div> -->
                                <!--                         <div class="h4 text-white mb-1">
                                <i class="fa fa-users mr-2"></i> 25 Peserta Didik
                                </div>
                                <div class="h4 text-white mb-2">
                                <i class="fa fa-money mr-2"></i> 112.500.000                        </div>
                                -->
                                <a href="{{route('badan_usaha.profil')}}">
                                <button type="button" class="btn btn-rounded btn-lg btn-danger mb-2 py-1 px-3 mr-1" data-toggle="modal" data-target="#modal-unggah">
                                    <i class="fa fa-eye mr-1"></i> Lihat Profil
                                </button>
                                </a>
                            </div>
                        </div>
                    </div>
                    </div>
                </a>
            </div>
            <div class="col-xl-8">
            <div class="block block-rounded rad-15">
                <div class="block-content">
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-borderless table-vcenter mb-30 table-res-cust table-responsive">
                            <tbody>
                            <tr class="table-active bg-primary">
                                <th style="width: 50px;"></th>
                                <th class="h3 text-white">1. PENGAJUAN</th>
                                <th class="font-size-sm text-right va-middle">
                                </th>
                            </tr>
                            <tr>
                                <td class="table-primary text-center va-middle">
                                    <i class="fa fa-fw fa-2x fa-unlock text-primary"></i>
                                </td>
                                <td class="va-middle">
                                    <a class="text-primary font-size-h3" href="{{route('badan_usaha.pengajuan') }}">Ajukan Bantuan Sekarang</a>
                                </td>
                                <td class="text-right va-middle">
                                    <a href="{{route('badan_usaha.pengajuan') }}">
                                        <button type="button" class="btn btn-lg btn-primary rad-25 px-3">
                                        Klik disini untuk mengajukan
                                        <i class="fa fa-arrow-right ml-2"></i>
                                        </button>
                                    </a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-12">
                        <table class="table table-borderless table-vcenter mb-30 table-res-cust table-responsive">
                            <tbody>
                            <tr class="table-active bg-danger">
                                <th style="width: 50px;"></th>
                                <th class="h3 text-white">2. HASIL PENGAJUAN PROPOSAL</th>
                                <th class="font-size-sm text-right va-middle">
                                </th>
                            </tr>
                            <tr>
                                <td class="table-danger text-center va-middle">
                                    <i class="fa fa-fw fa-2x fa-lock text-danger"></i>
                                </td>
                                <td class="va-middle">
                                    <a class="text-danger font-size-h3 belum-boleh" disabled="">Belum Mengajukan Proposal</a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-12">
                        <table class="table table-borderless table-vcenter mb-30 table-res-cust table-responsive">
                            <tbody>
                            <tr class="table-active bg-danger">
                                <th style="width: 50px;"></th>
                                <th class="h3 text-white">3. LAPORAN AWAL</th>
                                <th class="font-size-sm text-right va-middle">
                                </th>
                            </tr>
                            <tr>
                                <td class="table-danger text-center va-middle">
                                    <i class="fa fa-fw fa-2x fa-lock text-danger"></i>
                                </td>
                                <td class="va-middle">
                                    <a class="text-danger font-size-h3 belum-boleh" disabled="">Isi Laporan Awal</a>
                                </td>
                                <td class="text-right va-middle" style="display:none;">
                                    <a href="https://appt.demoo.id/banper_pkk/lembaga/pelaporan/laporan_awal">
                                        <button type="button" class="btn btn-lg btn-danger rad-25 px-3 belum-boleh" disabled="">
                                        Klik disini untuk Isi Laporan Awal
                                        <i class="fa fa-ban ml-2"></i>
                                        </button>
                                    </a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-12">
                        <table class="table table-borderless table-vcenter mb-30 table-res-cust table-responsive">
                            <tbody>
                            <tr class="table-active bg-danger">
                                <th style="width: 50px;"></th>
                                <th class="h3 text-white">4. PELAKSANAAN</th>
                                <th class="font-size-sm text-right va-middle">
                                    <!-- <span class="text-primary font-italic h4">Tahap 3</span> -->
                                </th>
                            </tr>
                            <tr>
                                <td class="table-danger text-center va-middle">
                                    <i class="fa fa-fw fa-2x fa-lock text-danger"></i>
                                </td>
                                <td class="va-middle">
                                    <a class="text-danger font-size-h3 belum-boleh" disabled="">Isi Pelaksanaan</a>
                                </td>
                                <td class="text-right va-middle" style="display:none;">
                                    <a href="https://appt.demoo.id/banper_pkk/lembaga/pelaksanaan">
                                        <button type="button" class="btn btn-lg btn-danger rad-25 px-3 belum-boleh" disabled="">
                                        Klik disini untuk Isi Pelaksanaan
                                        <i class="fa fa-ban ml-2"></i>
                                        </button>
                                    </a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-12">
                        <table class="table table-borderless table-vcenter mb-30 table-res-cust table-responsive">
                            <tbody>
                            <tr class="table-active bg-danger">
                                <th style="width: 50px;"></th>
                                <th class="h3 text-white">5. LAPORAN AKHIR</th>
                                <th class="font-size-sm text-right va-middle">
                                    <!-- <span class="text-primary font-italic h4">Tahap 4</span> -->
                                </th>
                            </tr>
                            <tr>
                                <td class="table-danger text-center va-middle">
                                    <i class="fa fa-fw fa-2x fa-lock text-danger"></i>
                                </td>
                                <td class="va-middle">
                                    <a class="text-danger font-size-h3 belum-boleh" disabled="">Isi Laporan Akhir</a>
                                </td>
                                <td class="text-right va-middle" style="display:none;">
                                    <a href="https://appt.demoo.id/banper_pkk/lembaga/pelaporan/laporan_akhir">
                                        <button type="button" class="btn btn-lg btn-danger rad-25 px-3 belum-boleh" disabled="">
                                        Klik disini untuk Isi Laporan Akhir
                                        <i class="fa fa-ban ml-2"></i>
                                        </button>
                                    </a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
</main>
    <!-- END Main Container -->
@endsection