@extends('layouts.template-back')

@section('content')
<main id="main-container" class="position-relative">
    <div class="overlay-text-back">BIP</div><div class="container-fluid wrapper-konten">
<div class="row invisible" data-toggle="appear">
<div class="col-12 pl-md-3 pr-md-0 px-0">
 <div class="content-heading font-w900 py-md-2 py-3 mb-md-2 mb-3 pl-3 h1">PELAPORAN PENGAJUAN BANTUAN </div>
</div>
<div class="col-md-3 pl-md-3 pr-md-0 px-0">
 <div class="bg-image rad-15 overflow-hidden" style="background-image: url('https://appt.demoo.id/banper_pkk/assets/img/photos/photo26@2x.jpg');">
    <div class="bg-black-op-75">
       <div class="content content-top content-full text-center py-3">
          <div class="py-20">
             <h1 class="h2 font-w700 text-white mb-10">Badan Usaha Test</h1>
             <h2 class="h4 font-w400 text-white-op mb-0">
                <span class="rad-15 badge badge-danger py-2 px-4">Belum Diverifikasi</span>
             </h2>
             <div class="text-white-50 mt-3 mb-0 h6 font-italic">
                Tanggal Pengajuan:
             </div>
             <div class="text-white mt-0 h4">
                18 Oktober 2020 | 08:06:44
             </div>
          </div>
       </div>
    </div>
 </div>
 <div class="container-fluid mt-2 px-0">
    <div class="font-size-lg p-20 bg-primary rad-15 text-white text-center push mb-3">
       <div class="mb-2">
          <i class="fa fa-3x fa-gavel"></i>
       </div>
       <div class="h5 text-white font-italic"> Anggaran : </div>
       <div class="h2 text-white mb-0">Rp. 30.000.000</div>
       {{-- <p class="mb-0 font-italic text-white">
          Peserta Didik : 3
       </p> --}}
    </div>
    <div class="row mt-3">
       <div class="col-xl-12">
          <div class="block rad-25 mb-3 p-4 row mx-0">
             <div class="col-6 my-2 text-center px-1">
                <a class="menu-4-lap" data-toggle="modal" data-target="#modal-edit" href="#">
                   <div class="mb-1"><i class="si si-pencil fa-3x"></i></div>
                   <div class="font-size-lg text-muted lap-btn-4">Petunjuk Pengisian Mou</div>
                </a>
             </div>
             <div class="col-6 my-2 text-center px-1">
                <a class="menu-4-lap" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                   <div class="mb-1"><i class="si si-cloud-download fa-3x"></i></div>
                   <div class="font-size-lg text-muted lap-btn-4">Download MoU</div>
                </a>
             </div>
          </div>
       </div>
    </div>
 </div>
</div>
<div class="col-md-9 pl-md-3 pr-md-0 px-0">
 <div class="block rad-15">
    <div class="block-content p-4">
       <div class="bg-lapor-baru p-3 rad-15 mx-0 mb-3">
          <div class="alert bg-transparent alert-dismissable" role="alert">
             <div class="font-size-h4 font-w600">Laporan </div>
             <div class="font-size-h5">
                <ol style="margin-left: -24px;" class="mb-0">
                   <li>Silahkan mengisi Laporan  melalui Tombol <b style="color: red">Isi Laporan</b> dibawah ini.</li>
                   <li>Apabila Laporan telah diisi klik Tombol <b style="color: red">Kunci Laporan</b> untuk melaporkan Laporan ke Direktorat.</li>
                </ol>
             </div>
          </div>
          <div class="row">
             <div class="col-lg-12 pr-md-2 pr-3">
                <div class="border-black-op px-0 rounded overflow-hidden bg-white">
                   <div class="block-content bg-danger px-3 py-3">
                      <div class="font-w600 text-center h3 text-white">
                         Laporan                               </div>
                   </div>
                   <div class="block-content py-2 px-3">
                      <div class="row text-center align-items-center">
                         <div class="col-3 my-2">
                            <a href="https://appt.demoo.id/banper_pkk/lembaga/pelaporan/laporan_" class="menu-4-lap">
                               <div class="mb-1"><i class="si si-pencil fa-3x"></i></div>
                               <div class="font-size-lg text-muted lap-btn-4" id="input_laporan_">Isi Laporan</div>
                            </a>
                         </div>
                         <div class="col-3 my-2">
                            <a href="#" class="menu-4-lap">
                               <div class="mb-1"><i class="si si-eye fa-3x"></i></div>
                               <div class="font-size-lg text-muted lap-btn-4">Lihat Laporan</div>
                            </a>
                         </div>
                         <div class="col-3 my-2">
                            <a href="#" class="menu-4-lap">
                               <div class="mb-1"><i class="si si-lock-open fa-3x"></i></div>
                               <div class="font-size-lg text-muted lap-btn-4">Kunci Laporan</div>
                            </a>
                         </div>
                         <div class="col-3 my-2">
                            <a href="#" class="menu-4-lap">
                               <div class="mb-1"><i class="si si-check fa-3x"></i></div>
                               <div class="font-size-lg text-muted lap-btn-4">Disetujui</div>
                            </a>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
             <!-- <div class="col-lg-6 pl-md-2 pl-3 mt-md-0 mt-2">
                <div class="border-black-op px-0 rounded overflow-hidden bg-white">
                   <div class="block-content bg-danger px-3 py-3">
                      <div class="font-w600 text-center h3">
                         Laporan Akhir
                      </div>
                   </div>
                   <div class="block-content py-2 px-3">
                      <div class="row text-center align-items-center">
                         <div class="col-4 my-2">
                            <a href="https://appt.demoo.id/banper_pkk/lembaga/pelaporan/laporan_akhir/6" class="menu-4-lap">
                               <div class="mb-1"><i class="si si-pencil fa-3x"></i></div>
                               <div class="font-size-lg text-muted lap-btn-4" id="input_laporan_akhir">Isi Laporan</div>
                            </a>
                         </div>
                         <div class="col-4 my-2">
                            <a href="#" class="menu-4-lap">
                               <div class="mb-1"><i class="si si-eye fa-3x"></i></div>
                               <div class="font-size-lg text-muted lap-btn-4">Lihat Laporan</div>
                            </a>
                         </div>
                         <div class="col-4 my-2">
                            <a href="#" class="menu-4-lap">
                               <div class="mb-1"><i class="si si-lock-open fa-3x"></i></div>
                               <div class="font-size-lg text-muted lap-btn-4">Kunci Laporan</div>
                            </a>
                         </div>
                      </div>
                   </div>
                </div>
             </div> -->
          </div>
       </div>
       <div class="bg-lapor-baru p-3 mb-0 rounded">
          <div class="alert bg-transparent alert-dismissable" role="alert">
             <div class="font-size-h4 font-w600">Catatan</div>
             <div class="font-size-h5">
                Silahkan mendownload <font color="red"><b>Template Dokumen</b></font> dibawah ini untuk dilampirkan bersama berkas yang dikirimkan ke Pusat.
             </div>
          </div>
          <div class="row">
             <div class="col-6 pr-md-2 pr-1">
                <a href="#" class="red-href">
                   <div class="px-3 py-2 clearfix rounded btn-lap">
                      <div class="float-right mt-15 d-none d-sm-block">
                         <i class="fa fa-download fa-3x text-white"></i>
                      </div>
                      <div class="font-size-h4 font-w600 text-white">Pakta Integritas</div>
                      <div class="text-uppercase text-white">Template Dokumen</div>
                   </div>
                </a>
             </div>
             <div class="col-6 pl-md-2 pl-1">
                <a href="#" class="red-href">
                   <div class="px-3 py-2 clearfix rounded btn-lap">
                      <div class="float-right mt-15 d-none d-sm-block">
                         <i class="fa fa-download fa-3x text-white"></i>
                      </div>
                      <div class="font-size-h4 font-w600 text-white">SPTJM</div>
                      <div class="text-uppercase text-white">Template Dokumen</div>
                   </div>
                </a>
             </div>
          </div>
       </div>
    </div>
 </div>
</div>
</div>
</div>

<div class="modal fade text-left" id="modal-edit" role="dialog" aria-labelledby="myModalLabel150" aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">
<div class="modal-content">
 <div class="block block-themed block-transparent mb-0">
    <div class="block-header bg-primary-dark">
        <h3 class="block-title">PETUNJUK PENGISIAN MOU PKK Tahun 2019</h3>
        <div class="block-options">
            <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                <i class="si si-close"></i>
            </button>
        </div>
    </div>
    <div class="block-content">
       <ol class="pl-3 text-muted">
          <li>Print pada kertas ukuran <b>A4</b> dan tanpa merubah format file yang diberikan.</li>
          <li>Harap tempelkan materai pada tempat yang disediakan, ditandatangani oleh penanggung jawab lalu distempel pada setiap kolom nama penanggungjawab lembaga (<b>mohon jangan ada yang terlewat</b>),
             <ul>
                <li>Pada <b>SPK</b> tanda tangan dan stempel sebanyak 3 kali, terdapat <i><b>2 (dua) materai</b></i>, satu pada <b>PIHAK PERTAMA</b> dan satu lagi pada <b>PIHAK KEDUA.</b></li>
                <li>Pada <b>BAP</b> tanda tangan dan stempel sebanyak 3 kali, tanpa materai</li>
                <li>Pada <b>KUITANSI</b> tanda tangan dan stempel sebanyak 3 kali, terdapat <i><b>2 (dua) materai</b></i> pada nama <i><b>penanggungjawab</b></i> lembaga.</li>
             </ul>
          </li>
          <li>Lampirkan <b>Fotokopi Rekening Lembaga</b> berikut <b>fotokopi saldo terakhir sebanyak 3 lembar</b> yang jelas <i><b>TERBACA</b></i> </li>
          <li>Lampirkan <b>Fotokopi NPWP Lembaga sebanyak 3 lembar</b> yang jelas <i><b>TERBACA</b></i> </li>
          <li>Lampirkan <b>PAKTA INTEGRITAS</b> dan <b>SPTJM</b> masing-masing 1 lembar (upload juga di aplikasi pada menu pelaporan).</li>
          <li>
             Kemudian kelengkapan berkas diatas dikirim melalui Pos/JNE/TIKI atau jasa pengiriman lainnya ke alamat di bawah ini:<br>
             <b style="line-height: 25px;">
                UP. Sekretariat PKK<br>
                Bidang Sarana dan Prasarana<br>
                Direktorat Kursus dan Pelatihan<br>
                Komplek Kemendikbud Gd. E Lantai 6<br>
                Jl. Jend. Sudirman Senayan Jakarta 10270<br>
                Telp. 021-57904363<br>
                email: pkkbinsus@gmail.com
             </b>
          </li>
       </ol>
    </div>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-danger rad-25" data-dismiss="modal">
        <i class="fa fa-times"></i> Tutup
    </button>
</div>
</div>
</div>
</main>
@endsection
