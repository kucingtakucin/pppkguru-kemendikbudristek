@extends('layouts.template-back')

@section('content')
    <main id="main-container" class="position-relative">
        <div class="overlay-text-back">PKK</div>
        <!-- Page Content -->
        <div class="container-fluid wrapper-konten">
        <div class="bg-image bg-image-bottom rad-15 o-hidden" style="background-image: url('{{ asset('assets-back/img/photos/photo13@2x.jpg') }}');">
            <div class="bg-primary-dark-op py-30">
                <div class="content content-full text-center py-0">
                    <!-- Avatar -->
                    <div class="mb-15">
                        <a class="img-link" href="be_pages_generic_profile.html">
                            <img class="img-avatar img-avatar96" src="{{ asset('images/logo-kemenpar.png') }}" alt="">
                        </a>
                    </div>
                    <!-- END Avatar -->

                    <!-- Personal -->
                    <h1 class="h3 text-white font-w700 mb-10">Badan Usaha Test</h1>
                    <h2 class="h3 text-white-op mb-20">
                        <i class="fa fa-star text-warning"></i>
                        <i class="fa fa-star text-warning"></i>
                        <i class="fa fa-star text-warning"></i>
                        <i class="fa fa-star text-warning"></i>
                    </h2>
                    <!-- END Personal -->

                    <!-- Actions -->
                    <button type="button" class="btn btn-rounded btn-hero btn-sm btn-alt-success mb-2 py-2 px-3 mr-1" data-toggle="modal" data-target="#modal-unggah">
                        <i class="fa fa-edit mr-1"></i> Ubah Foto
                    </button>
                    <!-- <button type="button" class="btn btn-alt-warning" data-toggle="modal" data-target="#modal-unggah">Launch Modal</button> -->
                    <button type="button" class="btn btn-rounded btn-hero btn-sm btn-alt-warning mb-2 py-2 px-3" data-toggle="modal" data-target="#modal-password">
                        <i class="fa fa-key mr-1"></i> Ubah Password
                    </button>
                    <!-- END Actions -->
                </div>
            </div>
        </div>
        <!-- END User Info -->

        <!-- Main Content -->
        <div class="container-fluid px-0">
            <!-- Projects -->
            <h2 class="content-heading mb-2">
                <i class="si si-list mr-1"></i> Detail
            </h2>
            <div class="row">
                <div class="col-xl-4">
                    <!-- Bootstrap Contact -->
                    <div class="block block-themed rad-15 o-hidden">
                        <div class="block-header bg-gd-sun">
                            <h3 class="block-title">Profil</h3>
                        </div>
                        <div class="block-content">
                            <form action="be_forms_premade.html" method="post" onsubmit="return false;">
                                <div class="form-group row">
                                    <label class="col-12" for="contact1-email">Nama Lembaga</label>
                                    <div class="col-12">
                                        <div class="input-group">
                                            <input type="email" class="form-control" id="contact1-email" name="contact1-email" placeholder="Masukkan Nama Lembaga..">
                                            <div class="input-group-append">
                                                <span class="input-group-text">
                                                    <i class="fa fa-industry"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-12" for="contact1-msg">Deskripsi</label>
                                    <div class="col-12">
                                        <textarea class="form-control" id="contact1-msg" name="contact1-msg" rows="4" placeholder="Masukkan Deskripsi Lembaga.."></textarea>
                                    </div>
                                </div>
                                <div class="form-group row mb-md-3 mb-0">
                                    <div class="col-md-6 pr-md-2 pr-3 mb-md-0 mb-3">
                                        <label for="contact1-firstname">NPSN</label>
                                        <input type="text" class="form-control" id="contact1-firstname" name="contact1-firstname" placeholder="Masukkan NPSN..">
                                    </div>
                                    <div class="col-md-6 pl-md-2 pl-3 mb-md-0 mb-3">
                                        <label for="contact1-lastname">Website</label>
                                        <input type="text" class="form-control" id="contact1-lastname" name="contact1-lastname" placeholder="Masukkan alamat situs web..">
                                    </div>
                                </div>
                                <div class="form-group row mb-md-3 mb-0">
                                    <div class="col-md-6 pr-md-2 pr-3 mb-md-0 mb-3">
                                        <label for="contact1-firstname">No Telepon</label>
                                        <input type="text" class="form-control" id="contact1-firstname" name="contact1-firstname" placeholder="Masukkan Nomor Telepon..">
                                    </div>
                                    <div class="col-md-6 pl-md-2 pl-3 mb-md-0 mb-3">
                                        <label for="contact1-lastname">Email</label>
                                        <input type="text" class="form-control" id="contact1-lastname" name="contact1-lastname" placeholder="Masukkan Email..">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-12" for="contact1-msg">Alamat</label>
                                    <div class="col-12">
                                        <textarea class="form-control" id="contact1-msg" name="contact1-msg" rows="4" placeholder="Masukkan Alamat Lembaga.."></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-12 d-flex">
                                        <button type="submit" class="btn btn-warning btn-rounded ml-auto px-md-4 px-3">
                                            <i class="fa fa-send mr-1"></i> Simpan
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- END Bootstrap Contact -->
                </div>
                <div class="col-xl-4">
                    <!-- Material Contact -->
                    <div class="block block-themed rad-15 o-hidden">
                        <div class="block-header bg-gd-sun">
                            <h3 class="block-title">Best Practice</h3>
                        </div>
                        <div class="block-content">

                            <div class="alert alert-warning alert-dismissable" role="alert">                                            
                                <div class="font-size-h6 font-w600">Catatan</div>
                                <ol style="margin-left: -24px;">
                                    <li>Silahkan mengupload <font color="red"><b>Video Best Practice</b></font> ke Youtube.</li>
                                    <li>Kemudian isikan <font color="red"><b>Link Youtube</b></font> didalam form dibawah ini.</li>
                                </ol>
                            </div>

                            <form action="be_forms_premade.html" method="post" onsubmit="return false;">
                                <div class="form-group row">
                                    <label class="col-12" for="contact1-email">Link Youtube</label>
                                    <div class="col-12">
                                        <div class="input-group">
                                            <input type="email" class="form-control" id="contact1-email" name="contact1-email" placeholder="Masukkan Link Youtube..">
                                            <div class="input-group-append">
                                                <span class="input-group-text">
                                                    <i class="fa fa-link"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 mt-2">
                                        <iframe class="w-100 h-100" src='https://www.youtube.com/embed/SomdZWpVLNE' frameborder='0' allow='accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-12 d-flex">
                                        <button type="submit" class="btn btn-warning btn-rounded ml-auto px-md-4 px-3">
                                            <i class="fa fa-send mr-1"></i> Simpan
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- END Material Contact -->
                </div>
                <div class="col-xl-4">
                    <!-- Material (floating) Contact -->
                    <div class="block block-themed rad-15 o-hidden">
                        <div class="block-header bg-gd-sun">
                            <h3 class="block-title">Bahan Ajar</h3>
                        </div>
                        <div class="block-content">
                            
                            <div class="alert alert-warning alert-dismissable" role="alert">                                            
                                <div class="font-size-h6 font-w600">Catatan</div>
                                <ol style="margin-left: -24px;">
                                    <li>Silahkan mengupload <font color="red"><b>Video Bahan Ajar </b></font> ke Youtube.</li>
                                    <li>Kemudian isikan <font color="red"><b>Link Youtube</b></font> didalam form dibawah ini.</li>
                                </ol>
                            </div>

                            <form action="be_forms_premade.html" method="post" onsubmit="return false;">
                                <div class="form-group row">
                                    <label class="col-12" for="contact1-email">Link Youtube</label>
                                    <div class="col-12">
                                        <div class="input-group">
                                            <input type="email" class="form-control" id="contact1-email" name="contact1-email" placeholder="Masukkan Link Youtube..">
                                            <div class="input-group-append">
                                                <span class="input-group-text">
                                                    <i class="fa fa-link"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 mt-2">
                                        <iframe class="w-100 h-100" src='https://www.youtube.com/embed/SomdZWpVLNE' frameborder='0' allow='accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-12 d-flex">
                                        <button type="submit" class="btn btn-warning btn-rounded ml-auto px-md-4 px-3">
                                            <i class="fa fa-send mr-1"></i> Simpan
                                        </button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                    <!-- END Material (floating) Contact -->
                </div>
            </div>
        </div>
    </main>
@endsection
