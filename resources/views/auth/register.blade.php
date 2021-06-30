<!DOCTYPE html>
<html class="no-js" lang="">
  <!-- Mirrored from affixtheme.com/html/xmee/demo/login-10.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 09 Jan 2021 01:39:00 GMT -->

  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Kemdikbud | Bantuan Pemerintah Direktorat Kursus dan Pelatihan</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Favicon -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets-login/css/bootstrap.min.css') }}" />
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{ asset('assets-login/css/fontawesome-all.min.css') }}" />
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="{{ asset('assets-login/font/flaticon.css') }}" />

    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('assets-login/img/favicon/apple-icon-57x57.png') }}" />
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('assets-login/img/favicon/apple-icon-60x60.png') }}" />
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('assets-login/img/favicon/apple-icon-72x72.png') }}" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets-login/img/favicon/apple-icon-76x76.png') }}" />
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('assets-login/img/favicon/apple-icon-114x114.png') }}" />
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('assets-login/img/favicon/apple-icon-120x120.png') }}" />
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('assets-login/img/favicon/apple-icon-144x144.png') }}" />
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('assets-login/img/favicon/apple-icon-152x152.png') }}" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets-login/img/favicon/apple-icon-180x180.png') }}" />
    <link
      rel="icon"
      type="image/png"
      sizes="192x192"
      href="{{ asset('assets-login/img/favicon/android-icon-192x192.png') }}"
    />
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets-login/img/favicon/favicon-32x32.png') }}" />
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('assets-login/img/favicon/favicon-96x96.png') }}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets-login/img/favicon/favicon-16x16.png') }}" />
    <link rel="manifest" href="{{ asset('assets-login/img/favicon/manifest.json')}}" />
    <meta name="msapplication-TileColor" content="#ffffff" />
    <meta name="msapplication-TileImage" content="{{ asset('assets-login/img/favicon/ms-icon-144x144.png') }}" />
    <meta name="theme-color" content="#ffffff" />
    <!-- Google Web Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;display=swap"
      rel="stylesheet"
    />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets-login/style.css') }}" />
    <style>
      .group-img img {
        width: 160px;
      }
    </style>
  </head>

  <body>
    <!--[if lt IE 8]>
      <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.
      </p>
    <![endif]-->
    <section class="fxt-template-animation fxt-template-layout10">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-7 col-12 fxt-bg-img"  style="background-color: #CC3E40;" data-bg-image="{{ asset('assets-login/img/pkk/bg.png') }}">
            <div class="fxt-header">
              <div class="group-img">
                  <img src="{{ asset('images/logo-kemenpar.png') }}" alt="Kemdikbud" />
              </div>
              <h1 class="text-white font-weight-bold mb-2">Selamat Datang</h1>
              <h3 class="text-white mb-0 font-weight-bold lh-1">
                  Di Laman <br> Program Bantuan Insentif Pemerintah <br> Kementrian Pariwisata dan Ekonomi Kreatif <br> Tahun 2021</h3>
          </div>
          </div>
          <div class="col-md-5 col-12 fxt-bg-color">
            <div class="fxt-content">
              <div class="fxt-form">
                <img src="{{ asset('assets-login/img/pkk/pkk-right-icon.png') }}" alt="PKK" />
                <h2 class="fxt-transformY-50 fxt-transition-delay-3 mt-4">Daftarkan Badan Usaha Anda</h2>
                <div class="fxt-transformY-50 fxt-transition-delay-3 text-muted">
                  Masukkan NIB anda untuk mendapatkan akun baru!
                </div>
                <form method="POST">
                  <div class="form-group">
                    <div class="fxt-transformY-50 fxt-transition-delay-5">
                      <input type="text" class="form-control" name="nib" placeholder="Masukan NIB anda disini.." required="required" />
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="fxt-transformY-50 fxt-transition-delay-5">
                      <input type="text" class="form-control" name="nama_perusahaan" placeholder="Nama Perusahaan" required="required" readonly />
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="fxt-transformY-50 fxt-transition-delay-5">
                      <input type="text" class="form-control" name="alamat_perusahaan" placeholder="Alamat Perusahaan" required="required" readonly />
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="fxt-transformY-50 fxt-transition-delay-5">
                      <input type="text" class="form-control" name="nama_pemilik" placeholder="Nama Pemilik" required="required" readonly />
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="fxt-transformY-50 fxt-transition-delay-5">
                      <input type="text" class="form-control" name="nik_pemilik" placeholder="Nomor KTP" required="required" readonly />
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="fxt-transformY-50 fxt-transition-delay-5">
                      <input type="text" class="form-control" name="npwp" placeholder="NPWP" required="required" readonly />
                    </div>
                  </div>
                  <div class="row mt-2 fxt-transformY-50 fxt-transition-delay-5">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <input type="email" class="form-control" name="email" placeholder="Alamat Email" required="required" readonly />
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <input type="text" class="form-control" name="kontak" placeholder="Nomor HP" required="required" readonly />
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="fxt-transformY-50 fxt-transition-delay-5">
                      <div class="text-center">
                        <button type="submit" class="fxt-btn-fill pkk">Daftar</button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- jquery-->
    <script src="{{ asset('assets-login/js/jquery-3.5.0.min.js') }}"></script>
    <!-- Popper js -->
    <script src="{{ asset('assets-login/js/popper.min.js') }}"></script>
    <!-- Bootstrap js -->
    <script src="{{ asset('assets-login/js/bootstrap.min.js') }}"></script>
    <!-- Imagesloaded js -->
    <script src="{{ asset('assets-login/js/imagesloaded.pkgd.min.js') }}"></script>
    <!-- Validator js -->
    <script src="{{ asset('assets-login/js/validator.min.js') }}"></script>
    <!-- Custom Js -->
    <script src="{{ asset('assets-login/js/main.js') }}"></script>

    <script>
      $('input[name="nib"]').on('keyup', function(){
        let value = $(this).val();
        if(value.length == 12){
          $.ajax({
            url:"{{route('check_nib')}}",
            type: "GET",
            dataType: "JSON",
            data: {
                nib : value,
            },
            success: function(res){
              if(res.status){
                $('input[name="nama_perusahaan"]').val(res.data.nama_perusahaan);
                $('input[name="alamat_perusahaan"]').val(res.data.alamat_perusahaan);
                $('input[name="nama_pemilik"]').val(res.data.nama_pemilik);
                $('input[name="nik_pemilik"]').val(res.data.nik_pemilik);
                $('input[name="npwp"]').val(res.data.npwp);
                $('input[name="email"]').val(res.data.email);
                $('input[name="kontak"]').val(res.data.kontak);
              }
            },
            error: function(){
                alert('Gagal Mendapatkan data Badan Usaha');
            }
          })
        }
      });
    </script>
  </body>

  <!-- Mirrored from affixtheme.com/html/xmee/demo/login-10.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 09 Jan 2021 01:39:07 GMT -->
</html>
