@extends('layouts.template-back')

@section('content')
<main id="main-container" class="position-relative">
    <div class="overlay-text-back">BIP</div><div class="container-fluid wrapper-konten" style="min-height: 600px;">
<div class="row">
<div class="col-lg-12">
    <div class="block block-rounded h-100 rad-15 o-hidden">
        <div class="block-header bg-pkk-2">
            <div class="h4-cust block-title text-white mt-1 mb-0">
                <i class="fa fa-pencil text-info-light mr-1"></i>
                Isi Proposal - Spesifikasi Teknis
            </div>
            <a href="{{route('badan_usaha.dashboard')}}" class="btn btn-light btn-block btn-lg ml-md-2 mt-md-0 mt-2 rad-25 w-auto py-2 px-3 font-w600">
                <i class="fa fa-arrow-left mr-1"></i> Kembali
            </a>
        </div>
        <div class="block-content tabelnya">
            <div class="row">
                <div class="col-md-6">
                    <div class="alert alert-primary">
                        <span class="font-size-h6 font-w600">Rumpun Keterampilan : <b style="font-size: 23px;"></b></span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="alert alert-primary">
                        <span class="font-size-h6 font-w600">Jenis Keterampilan : <b style="font-size: 23px;"></b></span>
                    </div>
                </div>
            </div>
            <table class="table table-bordered table-responsive table-res-cust font-size-h5 font-w500" style="width:100%">
                <thead>
                    <tr class="text-center">
                        <th></th>
                        <th colspan="2">Spesifikasi Teknis</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="vtop trno1">
                        <td class="text-center">1</td>
                        <td colspan="2">Mengapa lembaga anda memilih program ini, apa alasannya?</td>
                    </tr>
                    <tr class="trno1">
                        <td></td>
                        <td colspan="2">
                            <div class="font-size-h6 mb-1 font-w600">Pilih salah satu:</div>
                            <label class="css-control css-control-lg css-control-primary css-radio">
                                <input type="radio" class="css-control-input" name="radio1" onclick="save_field(1,'jawab_alasan',3)" >
                                <span class="css-control-indicator"></span> Lembaga sudah memiliki kerjasama penyerapan lulusan dengan IDUKA
                            </label><br>
                            <label class="css-control css-control-lg css-control-primary css-radio">
                                <input type="radio" class="css-control-input" name="radio1" onclick="save_field(1,'jawab_alasan',2)" >
                                <span class="css-control-indicator"></span> Jenis keterampilan sesuai dengan peluang kerja / peluang usaha
                            </label><br>
                            <label class="css-control css-control-lg css-control-primary css-radio">
                                <input type="radio" class="css-control-input" name="radio1" onclick="save_field(1,'jawab_alasan',1)" checked>
                                <span class="css-control-indicator"></span> Jenis keterampilan sesuai dengan ijin yang dimiliki oleh Lembaga
                            </label>
                        </td>
                    </tr>
                    <tr class="vtop trno2">
                        <td class="text-center">2</td>
                        <td colspan="2">Apakah lembaga sudah memiliki kerjasama dengan IDUKA dalam merancang kurikulum, sharing SDM, Sarpras, Evaluasi hingga penyerapan lulusan</td>
                    </tr>
                    <tr class="trno2">
                        <td></td>
                        <td colspan="2">
                            <div class="row">
                                <div class="col-12 mb-3">
                                    <div class="font-size-h6 mb-1 font-w600">Pilih salah satu:</div>
                                    <div class="row">
                                        <div class="col col-6">
                                            <button class="btn btn-block btn-lg radio2 font-w600 btn-outline-success active" data-id="1" data-target="dt2" onclick="set_radio(this, 2);save_field(2,'jawab_iduka',2)">SUDAH</button>
                                        </div>
                                        <div class="col col-6">
                                            <button class="btn btn-block btn-outline-danger font-w600 radio2 btn-lg " data-id="2" data-target="dt2" onclick="set_radio(this, 2);save_field(2,'jawab_iduka',1)">BELUM</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12" id="dt2" style="display:block;">
                                    <table class="table table-bordered table-responsive table-res-cust" style="width:100%">
                                        <thead>
                                            <tr class="text-center">
                                                <th class="vmiddle">Nama IDUKA</th>
                                                <th class="vmiddle">Jenis Kerjasama</th>
                                                <th class="vmiddle">Upload<br><small class="text-danger">(Gambar, Max 2MB)</small></th>
                                                <th class="vmiddle">Hapus</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                                                                                    <tr>
                                                    <td><textarea data-id="65b9eea6e1cc6bb9f0cd1052a47751a186f" data-soal="2" data-field="nama" class="form-control" onfocusout="simpan(this)" onkeyup="autoheight(this)" placeholder="Nama IDUKA...">PT BARU</textarea></td>
                                                    <td>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label class="css-control css-control-primary css-checkbox font-size-h5">
                                                                    <input type="checkbox" class="css-control-input" data-id="65b9eea6e1cc6bb9f0cd1052a47751a186f" data-soal="2" data-field="j_kurikulum" value="check" onclick="simpan(this)" checked>
                                                                    <span class="css-control-indicator"></span> Kurikulum
                                                                </label><br>
                                                                <label class="css-control css-control-primary css-checkbox font-size-h5">
                                                                    <input type="checkbox" class="css-control-input" data-id="65b9eea6e1cc6bb9f0cd1052a47751a186f" data-soal="2" data-field="j_instruktur" value="check" onclick="simpan(this)" checked>
                                                                    <span class="css-control-indicator"></span> Instruktur
                                                                </label><br>
                                                                <label class="css-control css-control-primary css-checkbox font-size-h5">
                                                                    <input type="checkbox" class="css-control-input" data-id="65b9eea6e1cc6bb9f0cd1052a47751a186f" data-soal="2" data-field="j_sarpras" value="check" onclick="simpan(this)" >
                                                                    <span class="css-control-indicator"></span> Sarana Prasarana
                                                                </label>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label class="css-control css-control-primary css-checkbox font-size-h5">
                                                                    <input type="checkbox" class="css-control-input" data-id="65b9eea6e1cc6bb9f0cd1052a47751a186f" data-soal="2" data-field="j_pemagangan" value="check" onclick="simpan(this)" checked>
                                                                    <span class="css-control-indicator"></span> Pemagangan/Evaluasi
                                                                </label><br>
                                                                <label class="css-control css-control-primary css-checkbox font-size-h5">
                                                                    <input type="checkbox" class="css-control-input" data-id="65b9eea6e1cc6bb9f0cd1052a47751a186f" data-soal="2" data-field="j_lulusan" value="check" onclick="simpan(this)" >
                                                                    <span class="css-control-indicator"></span> Penyerapan Lulusan
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <span style="display: none;" id="b_mou_65b9eea6e1cc6bb9f0cd1052a47751a186f" class="btn btn-rounded mb-1 font-w600 btn-danger fileinput-button">
                                                 <span id="namafile"> <i class="fa fa-upload"></i> Bukti MOU</span>
                                                 <input multiple type="file" accept="image/*" data-id="65b9eea6e1cc6bb9f0cd1052a47751a186f" data-soal="2" data-field="mou" name="file_upload">
                                                 <div class="progress-bar progress-bar-striped progress-bar-animated bg-white" id="pl_mou_65b9eea6e1cc6bb9f0cd1052a47751a186f" style="display:none;"><span class="progress-bar-label">0%</span></div>
                                              </span>
                                                        <button data-toggle="modal" data-target="#modal-popout" onclick="show_modal(2,'mou','65b9eea6e1cc6bb9f0cd1052a47751a186f')" style="display: ;" id="db_mou_65b9eea6e1cc6bb9f0cd1052a47751a186f" type="button" class="btn btn-rounded mb-1 font-w600 btn-primary">
                                                            <i class="fa fa-upload mr-1"></i> Bukti MOU
                                                        </button>
                                                        <span style="display: none;" id="b_fgedung_65b9eea6e1cc6bb9f0cd1052a47751a186f" class="btn btn-rounded mb-1 font-w600 btn-danger fileinput-button">
                                                 <span id="namafile"> <i class="fa fa-upload"></i> Foto Gedung</span>
                                                 <input multiple type="file" accept="image/*" data-id="65b9eea6e1cc6bb9f0cd1052a47751a186f" data-soal="2" data-field="fgedung" name="file_upload">
                                                 <div class="progress-bar progress-bar-striped progress-bar-animated bg-white" id="pl_fgedung_65b9eea6e1cc6bb9f0cd1052a47751a186f" style="display:none;"><span class="progress-bar-label">0%</span></div>
                                              </span>
                                                        <button data-toggle="modal" data-target="#modal-popout" onclick="show_modal(2,'fgedung','65b9eea6e1cc6bb9f0cd1052a47751a186f')" style="display: ;" id="db_fgedung_65b9eea6e1cc6bb9f0cd1052a47751a186f" type="button" class="btn btn-rounded mb-1 font-w600 btn-primary">
                                                            <i class="fa fa-upload mr-1"></i> Foto Gedung
                                                        </button><br>
                                                        <span style="display: none;" id="b_fpapan_65b9eea6e1cc6bb9f0cd1052a47751a186f" class="btn btn-rounded mb-1 font-w600 btn-danger fileinput-button">
                                                 <span id="namafile"> <i class="fa fa-upload"></i> Foto Papan Nama</span>
                                                 <input multiple type="file" accept="image/*" data-id="65b9eea6e1cc6bb9f0cd1052a47751a186f" data-soal="2" data-field="fpapan" name="file_upload">
                                                 <div class="progress-bar progress-bar-striped progress-bar-animated bg-white" id="pl_fpapan_65b9eea6e1cc6bb9f0cd1052a47751a186f" style="display:none;"><span class="progress-bar-label">0%</span></div>
                                              </span>
                                                        <button data-toggle="modal" data-target="#modal-popout" onclick="show_modal(2,'fpapan','65b9eea6e1cc6bb9f0cd1052a47751a186f')" style="display: ;" id="db_fpapan_65b9eea6e1cc6bb9f0cd1052a47751a186f" type="button" class="btn btn-rounded mb-1 font-w600 btn-primary">
                                                            <i class="fa fa-upload mr-1"></i> Foto Papan Nama
                                                        </button>
                                                    </td>
                                                    <td class="text-center"><button type="button" data-id="65b9eea6e1cc6bb9f0cd1052a47751a186f" data-soal="2" onclick="remove(this)" class="btn btn-icon btn-danger"><i class="fa fa-trash fa-23"></i></button></td>
                                                </tr>
                                                                                                <tr>
                                                <td colspan="4">
                                                                                                                    <button type="button" id="button2" class="btn btn-block btn-md btn-lg btn-primary px-3 font-w600" data-soal="2" onclick="tambah_field(this)">
                                                            <i class="fa fa-plus mr-1"></i> TAMBAH DATA IDUKA
                                                        </button>
                                                                                                            </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr class="vtop trno3">
                        <td class="text-center">3</td>
                        <td colspan="2" class="bg-cust-kuning">Berapa Jam pelajaran untuk melatih peserta didik (1 JPL = 60 Menit)</td>
                    </tr>
                    <tr class="trno3">
                        <td></td>
                        <td colspan="2">
                            <div class="font-size-h6 mb-1 font-w600">Pilih salah satu:</div>
                            <div class="row">
                                <div class="col col-3">
                                    <button class="btn btn-block btn-outline-primary radio3 btn-lg font-w600 active" onclick="set_radio(this, 3);save_field(3,'jawab_jpl',1)">< 100  JPL</button>
                                </div>
                                <div class="col col-3">
                                    <button class="btn btn-block btn-outline-primary radio3 btn-lg font-w600 " onclick="set_radio(this, 3);save_field(3,'jawab_jpl',2)">100 - 150 JPL</button>
                                </div>
                                <div class="col col-3">
                                    <button class="btn btn-block btn-outline-primary radio3 btn-lg font-w600 " onclick="set_radio(this, 3);save_field(3,'jawab_jpl',3)">151 – 200 JPL</button>
                                </div>
                                <div class="col col-3">
                                    <button class="btn btn-block btn-outline-primary radio3 btn-lg font-w600 " onclick="set_radio(this, 3);save_field(3,'jawab_jpl',4)">> 200 JPL</button>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr class="vtop trno4">
                        <td class="text-center">4</td>
                        <td colspan="2">Masukkan data instruktur yang terlibat, dan apakah mereka memiliki sertifikat terutama dari IDUKA</td>
                    </tr>
                    <tr class="trno4">
                        <!-- <td></td> -->
                        <td colspan="3">
                            <table class="table table-bordered table-responsive table-res-cust" style="width:100%">
                                <thead>
                                    <tr class="text-center">
                                        <th class="vmiddle">Nomor Induk Kependudukan</th>
                                        <th class="vmiddle">Nama</th>
                                        <th class="vmiddle">Tanggal lahir</th>
                                        <th class="vmiddle">No HP</th>
                                        <th class="vmiddle">Kompetensi</th>
                                        <th class="vmiddle">Pengalaman</th>
                                        <th class="vmiddle">Upload<br><small class="text-danger">(Gambar, Max 2MB)</small></th>
                                        <th class="vmiddle">Hapus</th>
                                    </tr>
                                </thead>
                                <tbody>
                                                                                    <tr>
                                            <td><input type="text" maxlength="16" class="form-control" data-id="6974ce5ac660610b44d9103b9fed0ff9548" data-soal="4" data-field="nik" id="nik_4_6974ce5ac660610b44d9103b9fed0ff9548" value="3313044404920001" onchange="cek_nik('6974ce5ac660610b44d9103b9fed0ff9548',4)" onkeyup="onkeynik('6974ce5ac660610b44d9103b9fed0ff9548',4)" placeholder="Nomor Induk Kependudukan..."></td>
                                            <td><input type="text" class="form-control" data-id="6974ce5ac660610b44d9103b9fed0ff9548" data-soal="4" data-field="nama" id="nama_4_6974ce5ac660610b44d9103b9fed0ff9548" value="DYAH AYU MENTARI" onchange="simpan(this)" placeholder="Nama..."></td>
                                            <td><input type="text" class="form-control tanggal_lahir" data-id="6974ce5ac660610b44d9103b9fed0ff9548" data-soal="4" data-field="tanggal_lahir" id="tanggal_lahir_4_6974ce5ac660610b44d9103b9fed0ff9548" value="1992-04-04" onchange="simpan(this)" placeholder="Tanggal Lahir..."></td>
                                            <td><input  type="text" maxlength="12" class="form-control" data-id="6974ce5ac660610b44d9103b9fed0ff9548" data-soal="4" data-field="no_hp" id="no_hp_4_6974ce5ac660610b44d9103b9fed0ff9548" value="085642242959" onchange="simpan(this)" placeholder="No HP..."></td>
                                            <td><textarea  class="form-control" rows="2" data-id="6974ce5ac660610b44d9103b9fed0ff9548" data-soal="4" data-field="kompetensi" id="kompetensi_4_6974ce5ac660610b44d9103b9fed0ff9548" onchange="simpan(this)" onkeyup="autoheight(this)" placeholder="Kompetensi...">Manajemen Pemaran</textarea></td>
                                            <td><textarea  class="form-control" rows="2" data-id="6974ce5ac660610b44d9103b9fed0ff9548" data-soal="4" data-field="pengalaman" id="pengalaman_4_6974ce5ac660610b44d9103b9fed0ff9548" onchange="simpan(this)" onkeyup="autoheight(this)" placeholder="Pengalaman...">Mengajar selama 2 tahun</textarea></td>
                                            <td class="text-center">
                                                <span style="display: none;" id="b_surat_kerja_6974ce5ac660610b44d9103b9fed0ff9548" class="btn btn-rounded mb-1 font-w600 btn-danger fileinput-button">
                                                    <span id="namafile"> <i class="fa fa-upload"></i> Surat Pengalaman Kerja</span>
                                                    <input multiple  type="file" accept="image/*" data-id="6974ce5ac660610b44d9103b9fed0ff9548" data-soal="4" data-field="surat_kerja" id="surat_kerja_4_6974ce5ac660610b44d9103b9fed0ff9548" name="file_upload">
                                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-white" id="pl_surat_kerja_6974ce5ac660610b44d9103b9fed0ff9548" style="display:none;"><span class="progress-bar-label">0%</span></div>
                                                </span>
                                                <div data-toggle="modal" data-target="#modal-popout" onclick="show_modal(4,'surat_kerja','6974ce5ac660610b44d9103b9fed0ff9548')" style="display: ;" id="db_surat_kerja_6974ce5ac660610b44d9103b9fed0ff9548" type="button" class="btn mb-1 rad-15 font-w600 btn-primary">
                                                    <i class="fa fa-upload mr-1"></i> Surat Pengalaman Kerja
                                                </div>
                                                <span style="display: none;" id="b_sertifikat_6974ce5ac660610b44d9103b9fed0ff9548" class="btn btn-rounded mb-1 font-w600 btn-danger fileinput-button">
                                                    <span id="namafile"> <i class="fa fa-upload"></i> Sertifikat</span>
                                                    <input multiple  type="file" accept="image/*" data-id="6974ce5ac660610b44d9103b9fed0ff9548" data-soal="4" data-field="sertifikat" id="sertifikat_4_6974ce5ac660610b44d9103b9fed0ff9548" name="file_upload">
                                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-white" id="pl_sertifikat_6974ce5ac660610b44d9103b9fed0ff9548" style="display:none;"><span class="progress-bar-label">0%</span></div>
                                                </span>
                                                <button data-toggle="modal" data-target="#modal-popout" onclick="show_modal(4,'sertifikat','6974ce5ac660610b44d9103b9fed0ff9548')" style="display: ;" id="db_sertifikat_6974ce5ac660610b44d9103b9fed0ff9548" type="button" class="btn btn-rounded mb-1 font-w600 btn-primary">
                                                    <i class="fa fa-upload mr-1"></i> Sertifikat
                                                </button>
                                            </td>
                                            <td class="text-center"><button type="button" data-id="6974ce5ac660610b44d9103b9fed0ff9548" data-soal="4" onclick="remove(this)" class="btn btn-icon btn-danger"><i class="fa fa-trash fa-23"></i></button></td>
                                        </tr>
                                                                                <tr>
                                        <td colspan="8">
                                                                                                    <button type="button" id="button4" class="btn btn-block btn-md btn-lg btn-primary px-3 font-w600" data-soal="4" onclick="tambah_field(this)">
                                                    <i class="fa fa-plus mr-1"></i> TAMBAH DATA INSTRUKTUR
                                                </button>
                                                                                            </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                    <tr class="vtop trno5">
                        <td class="text-center">5</td>
                        <td colspan="2">Apakah Lembaga anda sudah merancang kurikulum dengan IDUKA?</td>
                    </tr>
                    <tr class="trno5">
                        <td></td>
                        <td colspan="2">
                            <div class="row">
                                <div class="col-12 mb-3">
                                    <div class="font-size-h6 mb-1 font-w600">Pilih salah satu:</div>
                                    <div class="row">
                                        <div class="col col-6">
                                            <button class="btn btn-block btn-lg font-w600 radio5 btn-outline-success active" data-id="1" data-target="dt5" onclick="set_radio(this, 5);save_field(5,'jawab_kurikulum',2)">SUDAH</button>
                                        </div>
                                        <div class="col col-6">
                                            <button class="btn btn-block btn-lg font-w600 radio5 btn-outline-danger " data-id="2" data-target="dt5" onclick="set_radio(this, 5);save_field(5,'jawab_kurikulum',1)">BELUM</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12" id="dt5" style="display:block;">
                                    <div class="alert bg-dark alert-dismissable mb-3 text-white h5" role="alert">
                                        <div class="font-size-h6">
                                            <div class="font-w600 mb-2">Catatan</div>
                                            Upload hasil kurikulum lama yang disahkan dan minimal rancangan kurikulum dengan IDUKA
                                        </div>
                                    </div>
                                    <table class="table table-bordered table-responsive table-res-cust" style="width:100%">
                                        <thead>
                                            <tr class="text-center">
                                                <th class="vmiddle">Nama IDUKA</th>
                                                <th class="vmiddle">Hasil Kurikulum<br><small class="text-danger">(PDF, Max 5MB)</small></th>
                                                <th class="vmiddle">Hapus</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                                                                                    <tr>
                                                    <td>
                                                        <select class="js-select2 form-control" data-id="4e732ced3463d06de0ca269a15b6153677" data-soal="5" data-field="id_iduka" onchange="simpan(this)" data-placeholder="Nama IDUKA">
                                                            <option></option>
                                                                                                                                    <option value="105" selected>PT BARU</option>
                                                                                                                            </select>
                                                    </td>
                                                    <td class="text-center">
                                                        <span style="display: none;" id="b_kurikulum_4e732ced3463d06de0ca269a15b6153677" class="btn btn-rounded mb-1 font-w600 btn-danger fileinput-button">
                                                            <span id="namafile"> <i class="fa fa-upload"></i> Kurikulum Lama</span>
                                                            <input multiple type="file" accept="application/pdf" data-id="4e732ced3463d06de0ca269a15b6153677" data-soal="5" data-field="kurikulum" name="file_upload">
                                                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-white" id="pl_kurikulum_4e732ced3463d06de0ca269a15b6153677" style="display:none;"><span class="progress-bar-label">0%</span></div>
                                                        </span>
                                                        <button data-toggle="modal" data-target="#modal-popout" onclick="show_modal(5,'kurikulum','4e732ced3463d06de0ca269a15b6153677')" style="display: ;" id="db_kurikulum_4e732ced3463d06de0ca269a15b6153677" type="button" class="btn btn-rounded mb-1 font-w600 btn-primary">
                                                            <i class="fa fa-upload mr-1"></i> Kurikulum Lama
                                                        </button>
                                                        <span style="display: none;" id="b_rancangan_4e732ced3463d06de0ca269a15b6153677" class="btn btn-rounded mb-1 font-w600 btn-danger fileinput-button">
                                                            <span id="namafile"> <i class="fa fa-upload"></i> Rancangan Kurikulum</span>
                                                            <input multiple type="file" accept="application/pdf" data-id="4e732ced3463d06de0ca269a15b6153677" data-soal="5" data-field="rancangan" name="file_upload">
                                                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-white" id="pl_rancangan_4e732ced3463d06de0ca269a15b6153677" style="display:none;"><span class="progress-bar-label">0%</span></div>
                                                        </span>
                                                        <button data-toggle="modal" data-target="#modal-popout" onclick="show_modal(5,'rancangan','4e732ced3463d06de0ca269a15b6153677')" style="display: ;" id="db_rancangan_4e732ced3463d06de0ca269a15b6153677" type="button" class="btn btn-rounded mb-1 font-w600 btn-primary">
                                                            <i class="fa fa-upload mr-1"></i> Rancangan Kurikulum
                                                        </button>
                                                    </td>
                                                    <td class="text-center"><button type="button" data-id="4e732ced3463d06de0ca269a15b6153677" data-soal="5" onclick="remove(this)" class="btn btn-icon btn-danger"><i class="fa fa-trash fa-23"></i></button></td>

                                                </tr>
                                                                                                <tr>
                                                <td colspan="7">
                                                                                                                    <button type="button" id="button5" class="btn btn-block btn-md btn-lg btn-primary px-3 font-w600" data-soal="5" onclick="tambah_field(this)">
                                                            <i class="fa fa-plus mr-1"></i> TAMBAH DATA KURIKULUM
                                                        </button>
                                                                                                            </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr class="vtop trno6">
                        <td class="text-center">6</td>
                        <td colspan="2">Apakah sarana prasarana yang lembaga miliki mendukung pelaksanaan program tersebut?</td>
                    </tr>
                    <tr class="trno6">
                        <td></td>
                        <td colspan="2">
                            <div class="row">
                                <div class="col-12 mb-3">
                                    <div class="font-size-h6 mb-1 font-w600">Pilih salah satu:</div>
                                    <div class="row">
                                        <div class="col col-6">
                                            <button class="btn btn-block btn-lg radio6 font-w600 btn-outline-success active" data-id="1" data-target="dt6" onclick="set_radio(this, 6);save_field(6,'jawab_sarpras',2)">SUDAH</button>
                                        </div>
                                        <div class="col col-6">
                                            <button class="btn btn-block btn-lg radio6 font-w600 btn-outline-danger " data-id="2" data-target="dt6" onclick="set_radio(this, 6);save_field(6,'jawab_sarpras',1)">BELUM</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12" id="dt6" style="display:block;">
                                    <table class="table table-bordered table-responsive table-res-cust" style="width:100%">
                                        <thead>
                                            <tr class="text-center">
                                                <th class="vmiddle">Nama Sarpras</th>
                                                <th class="vmiddle">Jumlah</th>
                                                <th class="vmiddle">Kondisi</th>
                                                <th class="vmiddle">Upload Foto Terbaru<br><small class="text-danger">(Gambar, Max 2MB)</small></th>
                                                <th class="vmiddle">Hapus</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                                                                                    <tr>
                                                    <td><input type="text" class="form-control" data-id="a1d0c6e83f027327d846421063f4ac58a6" data-soal="6" data-field="nama" value="Komputer" onblur="simpan(this)" placeholder="Nama Sarpras..."></td>
                                                    <td><input type="text" class="form-control rupiah" data-id="a1d0c6e83f027327d846421063f4ac58a6" data-soal="6" data-field="jumlah" value="15" onblur="simpan(this)" placeholder="Jumlah..."></td>
                                                    <td class="text-center radioclass">
                                                        <button class="btn radio66 btn-lg font-w600 btn-outline-primary active" data-id="a1d0c6e83f027327d846421063f4ac58a6" data-soal="6" data-field="kondisi" value="Baik" onclick="set_radio2(this);simpan(this)">Baik</button>
                                                        <button class="btn radio66 btn-lg font-w600 btn-outline-danger " data-id="a1d0c6e83f027327d846421063f4ac58a6" data-soal="6" data-field="kondisi" value="Rusak" onclick="set_radio2(this);simpan(this)">Rusak</button>
                                                    </td>
                                                    <td class="text-center">
                                                        <span style="display: none;" id="b_fsarpras_a1d0c6e83f027327d846421063f4ac58a6" class="btn btn-rounded mb-1 font-w600 btn-danger fileinput-button">
                                                            <span id="namafile"> <i class="fa fa-upload"></i> Foto Sarpras</span>
                                                            <input multiple type="file" accept="image/*" data-id="a1d0c6e83f027327d846421063f4ac58a6" data-soal="6" data-field="fsarpras" name="file_upload">
                                                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-white" id="pl_fsarpras_a1d0c6e83f027327d846421063f4ac58a6" style="display:none;"><span class="progress-bar-label">0%</span></div>
                                                        </span>
                                                        <button data-toggle="modal" data-target="#modal-popout" onclick="show_modal(6,'fsarpras','a1d0c6e83f027327d846421063f4ac58a6')" style="display: ;" id="db_fsarpras_a1d0c6e83f027327d846421063f4ac58a6" type="button" class="btn btn-rounded mb-1 font-w600 btn-primary">
                                                            <i class="fa fa-upload mr-1"></i> Foto Sarpras
                                                        </button>
                                                    </td>
                                                    <td class="text-center"><button type="button" data-id="a1d0c6e83f027327d846421063f4ac58a6" data-soal="6" onclick="remove(this)" class="btn btn-icon btn-danger"><i class="fa fa-trash fa-23"></i></button></td>
                                                </tr>
                                                                                                <tr>
                                                <td colspan="7">
                                                                                                                    <button type="button" id="button6" class="btn btn-block btn-md btn-lg btn-primary px-3 font-w600" data-soal="6" onclick="tambah_field(this)">
                                                            <i class="fa fa-plus mr-1"></i> TAMBAH DATA SARPRAS
                                                        </button>
                                                                                                            </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr class="vtop trno7">
                        <td class="text-center">7</td>
                        <td colspan="2">Berapa usulan biaya yang lembaga anda butuhkan untuk mendidik setiap 1 peserta didik sesuai waktu yang diusulkan (point 3)</td>
                    </tr>
                    <tr class="trno7">
                        <td></td>
                        <td colspan="2">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text font-w600 h5" style="background-color: #2e3192;color: white;">
                                        Rp.
                                    </span>
                                </div>
                                <input type="text" class="form-control rupiah" onfocusout="save_field(7,'jawab_biaya',this.value)" placeholder="Masukkan usulan biaya disini..." value="2.000.000">
                            </div>
                        </td>
                    </tr>
                    <tr class="vtop trno8">
                        <td class="text-center">8</td>
                        <td colspan="2">Apakah lembaga anda sudah merekrut peserta didik usia 17-25 tahun yang tidak sekolah dan menganggur?</td>
                    </tr>
                    <tr class="trno8">
                        <!-- <td></td> -->
                        <td colspan="3">
                            <div class="row">
                                <div class="col-12 mb-3">
                                    <div class="font-size-h6 mb-1 font-w600">Pilih salah satu:</div>
                                    <div class="row">
                                        <div class="col col-6">
                                            <button class="btn btn-block btn-lg radio8 btn-lg font-w600 btn-outline-success active" data-id="1" data-target="dt8" onclick="set_radio(this, 8);save_field(8,'jawab_peserta',2)">SUDAH</button>
                                        </div>
                                        <div class="col col-6">
                                            <button class="btn btn-block radio8 btn-lg font-w600 btn-lg btn-outline-danger " data-id="2" data-target="dt8" onclick="set_radio(this, 8);save_field(8,'jawab_peserta',1)">BELUM</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12" id="dt8" style="display:block;">
                                    <table class="table table-bordered table-responsive table-res-cust" style="width:100%">
                                        <thead>
                                            <tr class="text-center">
                                                <th class="vmiddle">Nomor Induk<br>Kependudukan</th>
                                                <th class="vmiddle">Nama</th>
                                                <th class="vmiddle">Tanggal<br>Lahir</th>
                                                <th class="vmiddle">Jenis<br>Kelamin</th>
                                                <th class="vmiddle">Pendidikan<br>Terakhir</th>
                                                <th class="vmiddle">No HP</th>
                                                <th class="vmiddle">Upload<br>Pas Foto</th>
                                                <th class="vmiddle">Hapus</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                                                                                    <tr>
                                                    <td><input type="text" maxlength="16" class="form-control" data-id="d9d4f495e875a2e075a146a4a6e1b9770f" data-soal="8" data-field="nik" id="nik_8_d9d4f495e875a2e075a146a4a6e1b9770f" value="3309115602010002" onfocusout="simpan(this)" onchange="cek_nik('d9d4f495e875a2e075a146a4a6e1b9770f',8)" onkeyup="onkeynik('d9d4f495e875a2e075a146a4a6e1b9770f',8)" placeholder="Nomor Induk Kependudukan..."></td>
                                                    <td><input  type="text" class="form-control" data-id="d9d4f495e875a2e075a146a4a6e1b9770f" data-soal="8" data-field="nama" id="nama_8_d9d4f495e875a2e075a146a4a6e1b9770f" value="FENI ADI ASTUTI" onfocusout="simpan(this)" placeholder="Nama..."></td>
                                                    <td><input  type="text" class="form-control tanggal_lahir" data-id="d9d4f495e875a2e075a146a4a6e1b9770f" data-soal="8" data-field="tanggal_lahir" id="tanggal_lahir_8_d9d4f495e875a2e075a146a4a6e1b9770f" value="2001-02-16" onchange="simpan(this)" placeholder="Tanggal Lahir..."></td>
                                                    <td>
                                                        <select  class="js-select2 form-control" data-id="d9d4f495e875a2e075a146a4a6e1b9770f" data-soal="8" data-field="jk" id="jk_8_d9d4f495e875a2e075a146a4a6e1b9770f" onchange="simpan(this)" data-placeholder="Jenis Kelamin">
                                                            <option></option>
                                                            <option value="Laki-laki" >Laki-laki</option>
                                                            <option value="Perempuan" selected>Perempuan</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <select  class="js-select2 form-control" data-id="d9d4f495e875a2e075a146a4a6e1b9770f" data-soal="8" data-field="id_pendidikan" id="id_pendidikan_8_d9d4f495e875a2e075a146a4a6e1b9770f" onchange="simpan(this)" data-placeholder="Pendidikan Terakhir">
                                                            <option></option>
                                                                                                                                    <option value="1" >Tidak Sekolah</option>
                                                                                                                                    <option value="2" >SD</option>
                                                                                                                                    <option value="3" >SMP</option>
                                                                                                                                    <option value="4" >SMA</option>
                                                                                                                                    <option value="5" selected>SMK</option>
                                                                                                                                    <option value="6" >Diploma</option>
                                                                                                                                    <option value="7" >Sarjana</option>
                                                                                                                            </select>
                                                    </td>
                                                    <td><input  type="text" maxlength="12" class="form-control" data-id="d9d4f495e875a2e075a146a4a6e1b9770f" data-soal="8" data-field="no_hp" id="no_hp_8_d9d4f495e875a2e075a146a4a6e1b9770f" value="0812345" onchange="simpan(this)" placeholder="No HP..."></td>
                                                    <td class="text-center">
                                                        <span style="display: none;" id="b_pasfoto_8_d9d4f495e875a2e075a146a4a6e1b9770f" class="btn btn-rounded mb-1 font-w600 btn-danger fileinput-button">
                                                            <span id="namafile"> <i class="fa fa-upload"></i> Pas Foto</span>
                                                            <input multiple  type="file" accept="image/*" data-id="d9d4f495e875a2e075a146a4a6e1b9770f" data-soal="8" data-field="pasfoto" id="pasfoto_d9d4f495e875a2e075a146a4a6e1b9770f" name="file_upload">
                                                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-white" id="pl_pasfoto_d9d4f495e875a2e075a146a4a6e1b9770f" style="display:none;"><span class="progress-bar-label">0%</span></div>
                                                        </span>
                                                        <button data-toggle="modal" data-target="#modal-popout" onclick="show_modal(8,'pasfoto','d9d4f495e875a2e075a146a4a6e1b9770f')" style="display: ;" id="db_pasfoto_d9d4f495e875a2e075a146a4a6e1b9770f" type="button" class="btn btn-rounded mb-1 font-w600 btn-primary">
                                                            <i class="fa fa-upload mr-1"></i> Pas Foto
                                                        </button>
                                                    </td>
                                                    <td class="text-center"><button type="button" data-id="d9d4f495e875a2e075a146a4a6e1b9770f" data-soal="8" onclick="remove(this)" class="btn btn-icon btn-danger"><i class="fa fa-trash fa-23"></i></button></td>
                                                </tr>
                                                                                                <tr>
                                                <td colspan="8">
                                                                                                                    <button type="button" id="button8" class="btn btn-block btn-md btn-lg btn-primary px-3 font-w600" data-soal="8" onclick="tambah_field(this)">
                                                            <i class="fa fa-plus mr-1"></i> TAMBAH DATA PESERTA
                                                        </button>
                                                                                                            </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr class="vtop trno9">
                        <td class="text-center">9</td>
                        <td colspan="2">Rencana uji kompetensi bagi peserta didik</td>
                    </tr>
                    <tr class="trno9">
                        <td></td>
                        <td colspan="2">
                            <div class="font-size-h6 mb-1 font-w600">Pilih salah satu:</div>
                            <div class="row">
                                <div class="col col-4">
                                    <button class="btn btn-block btn-outline-primary radio9 btn-lg font-w600 " onclick="set_radio(this, 9);save_field(9,'jawab_ujk',1)">Diuji oleh IDUKA</button>
                                </div>
                                <div class="col col-4">
                                    <button class="btn btn-block btn-outline-primary radio9 btn-lg font-w600 active" onclick="set_radio(this, 9);save_field(9,'jawab_ujk',2)">Diuji oleh LSP</button>
                                </div>
                                <div class="col col-4">
                                    <button class="btn btn-block btn-outline-primary radio9 btn-lg font-w600 " onclick="set_radio(this, 9);save_field(9,'jawab_ujk',3)">Diuji oleh LSK</button>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="">
            <div class="row text-center" id="bottomscroll">
                <div class="col-12">
                    <input type="hidden" id="last_no" value="24">
                                                    <button type="button" id="next" class="btn btn-lg font-w600 btn-success ml-md-2 simp-cust mt-md-0 mt-2" onclick="next_isian()"><i class="fa fa-arrow-right mr-1"></i> Klik disini untuk mengisi Spesifikasi Lembaga</button>
                                            </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<div class="modal fade" id="modal-popout" tabindex="-1" role="dialog" aria-labelledby="modal-popout" aria-hidden="true">
<div class="modal-dialog modal-dialog-popout modal-lg" role="document">
<div class="modal-content">
    <div id="content_modal"></div>
</div>
</div>
</div></main>
@endsection
