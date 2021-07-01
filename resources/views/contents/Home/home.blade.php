@extends('layouts.frontend.app')

@section('content')
    <section class="parallax p-0 home-digital-agency" data-parallax-background-ratio="0.5"
        style="background-image: url('frontend/images/custom/bg-1.jpg')">
        <div class="overlay-bg bg-extra-dark-gray" style="opacity: 0.6;"></div>
        <!-- <div class="opacity-light bg-gradient-dark-slate-blue-transparent"></div> -->
        <div class="container">
            <div class="row">
                <div class="col-12 full-screen md-h-600px sm-h-350px d-flex flex-column">
                    <br/>
                    <h1
                        class="alt-font font-weight-600 text-white title-large w-50 mt-auto mb-0 letter-spacing-minus-5px sm-letter-spacing-minus-1-half xs-w-70 tit-utama">
                        PPPK Guru</h1>
                    <div class="tp-caption mt-4 ml-md-1 tp-resizeme alt-font text-extra-large font-weight-500 d-inline-block text-uppercase mt-2"
                        data-x="['left','left','left','center']" data-hoffset="['2','42','35','0']"
                        data-y="['middle','middle','middle','bottom']" data-voffset="['-130','-140','-110','340']"
                        data-width="none" data-height="none" data-whitespace="nowrap" data-fontsize="['15','15','15','15']"
                        data-lineheight="['15','15','15','15']" data-color="#BF8C4C" data-type="text"
                        data-responsive_offset="on" data-responsive="on"
                        data-frames='[{"delay":100,"split":"chars","splitdelay":0.05,"speed":500,"frame":"0","from":"sX:0.8;sY:0.8;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","split":"chars","splitdelay":0.03,"speed":500,"frame":"999","to":"sX:0.9;sY:0.9;opacity:0;","ease":"Power3.easeIn"}]'
                        data-textAlign="['left','left','center','center']" style="color: rgba(255, 255, 255, 0.5);">
                        Rekrutmen Guru PPPK</div>


                    <!-- view collection button layer -->
                    <a class="section-link tp-caption btn btn-extra-large btn-expand-ltr collection-btn btn-rounded text-extra-dark-gray font-weight-600"
                        href="https://sscasn.bkn.go.id" target="_blank" data-x="['left','left','left','center']"
                        data-hoffset="['0','40','34','0']" data-y="['middle','middle','middle','bottom']"
                        data-voffset="['150','95','79','100']" data-whitespace="nowrap"
                        data-fontsize="['15','12','12','12']" data-line-height="['15','12','12','12']" data-type="button"
                        data-responsive="off" data-responsive_offset="on"
                        data-frames='[{"delay":1100,"speed":200,"frame":"0","from":"o:0;","to":"o:1;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['left','left','left','center']" style="width: 325px; color: white;">Daftar Seleksi PPPK Guru
                        <i class="line-icon-Arrow-OutRight right-icon" aria-hidden="true"
                            style="opacity: 1; font-size: 30px; line-height: 30px; margin-left: 17px; transition: 0.3s ease-in-out;"></i>
                        <span
                            style="background: #3d99fd; opacity: 0.3; width: 50px; height: 50px; transform: translateY(-50%); top: 50%;"></span></a>

                    <a class="section-link tp-caption btn btn-extra-large btn-expand-ltr collection-btn btn-rounded text-extra-dark-gray font-weight-600"
                        href="{{ asset('upload/dokumen/210701_Pengumuman_Seleksi_PPPK_Guru.pdf') }}" target="_blank" data-x="['left','left','left','center']"
                        data-hoffset="['0','40','34','0']" data-y="['middle','middle','middle','bottom']"
                        data-voffset="['150','95','79','100']" data-whitespace="nowrap"
                        data-fontsize="['15','12','12','12']" data-line-height="['15','12','12','12']" data-type="button"
                        data-responsive="off" data-responsive_offset="on"
                        data-frames='[{"delay":1100,"speed":200,"frame":"0","from":"o:0;","to":"o:1;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['left','left','left','center']" style="width: 350px; color: white;">Pengumuman Seleksi PPPK Guru
                        <i class="line-icon-Arrow-OutRight right-icon" aria-hidden="true"
                            style="opacity: 1; font-size: 30px; line-height: 30px; margin-left: 17px; transition: 0.3s ease-in-out;"></i>
                        <span
                            style="background: #3d99fd; opacity: 0.3; width: 50px; height: 50px; transform: translateY(-50%); top: 50%;"></span></a>
                    <div class="d-flex flex-row align-items-center mt-auto margin-7-half-rem-bottom">
                        <span
                            class="bg-info w-50 h-1px margin-9-rem-right sm-w-40 sm-margin-5-rem-right xs-w-15 xs-margin-2-rem-right"></span>
                        <span class="alt-font text-large text-info">Portal Informasi Rekrutmen Guru PPPK</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- <section class="overflow-visible cover-background wow animate__fadeIn" style="background-image:url('images/home-decor-bg-img-02.jpg');"> -->
    <section id="tentang" class="overflow-visible wow animate__fadeIn">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-12 col-lg-6 col-md-10 margin-20px-bottom md-margin-8-rem-bottom sm-margin-10-rem-bottom wow animate__fadeIn"
                    data-wow-delay="0.2s">
                    <div class="img-fluid">
                        <img src="{{ asset('frontend/images/custom/guru_pppk.png') }}" alt="" data-no-retina="">
                    </div>
                </div>
                <div class="col-12 col-lg-5 offset-lg-1 col-md-10 wow animate__fadeIn" data-wow-delay="0.5s">
                    <div class="alt-font text-medium font-weight-500 margin-30px-bottom media"><span
                            class="w-40px h-1px bg-tussock opacity-7 align-self-center margin-20px-right"></span>
                        <div class="media-body"><span class="text-tussock text-uppercase">Tentang PPPK Guru</span></div>
                    </div>
                    <h4
                        class="alt-font text-extra-dark-gray font-weight-600 w-85 margin-35px-bottom lg-w-100 sm-margin-25px-bottom">
                        Apa itu PPPK ?</h4>
                    <p class="w-80 lg-w-100">Pegawai Pemerintah dengan Perjanjian Kerja yang selanjutnya disingkat PPPK
                        adalah warga negara Indonesia yang memenuhi syarat tertentu, yang diangkat berdasarkan perjanjian
                        kerja untuk jangka waktu tertentu dalam rangka melaksanakan tugas pemerintahan.</p>
                </div>
            </div>
        </div>
    </section>
    @php
    $show = 2;
    $xx=0;
    @endphp

    @if ($show === 1)
        <section id="formasi" class="bg-penguin-white position-relative padding-thirteen-top lg-padding-nine-top">
            <div class="container">
                <div class="row justify-content-lg-center">
                    <div class="col-12 overflow-hidden alt-font font-weight-600 text-white text-overlap-style-02 d-none d-xl-block wow animate__fadeInDown"
                        data-wow-delay="0.2s">formasi</div>
                    <!-- <div class="col-12 col-lg-6 col-sm-8 text-lg-center margin-6-rem-bottom lg-margin-4-rem-bottom md-margin-3-rem-bottom xs-margin-5-rem-bottom wow animate__fadeIn">
                                        <span class="alt-font font-weight-500 text-yellow-ochre-light text-uppercase d-block margin-20px-bottom">Informasi</span>
                                        <h5 class="alt-font font-weight-700 text-uppercase text-extra-dark-gray letter-spacing-minus-1px m-0">Formasi PPPK P3GTK<br> yang dibuka</h5>
                                    </div> -->
                </div>
                <div class="row align-items-center">
                    <div class="col-12 col-md-6 col-xl-3 col-lg-4 position-relative padding-2-rem-top md-no-padding-top md-margin-5-rem-bottom wow animate__fadeIn"
                        data-wow-delay="0.2s">
                        <span class="alt-font margin-20px-bottom d-block text-uppercase font-weight-500">Informasi</span>
                        <h6
                            class="alt-font text-uppercase text-extra-dark-gray font-weight-700 margin-40px-bottom md-margin-20px-bottom">
                            Formasi PPPK Guru yang dibuka pada periode Juli - Agustus 2021</h6>
                        <div class="swiper-button-next-nav-2 swiper-button-next slider-navigation-style-06"><i
                                class="line-icon-Arrow-OutRight"></i></div>
                        <div class="swiper-button-previous-nav-2 swiper-button-prev slider-navigation-style-06"><i
                                class="line-icon-Arrow-OutLeft"></i></div>
                    </div>
                    <div class="col-12 col-lg-8 offset-xl-1 wow animate__fadeInRight" data-wow-delay="0.4s">
                        <div class="testimonials-carousel-style-02 swiper-simple-arrow-style-2">
                            <div class="swiper-container black-move"
                                data-slider-options='{ "loop": true, "slidesPerView": 1, "spaceBetween": 0, "observer": true, "observeParents": true, "autoplay": { "delay": 3000, "disableOnInteraction": false },  "navigation": { "nextEl": ".swiper-button-next-nav-2", "prevEl": ".swiper-button-previous-nav-2" }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "992": { "slidesPerView": 3 }, "768": { "slidesPerView": 2 } }, "effect": "slide" }'>
                                <div class="swiper-wrapper">
                                    <!-- start fancy text box slider item -->
                                    <div class="swiper-slide text-center padding-15px-all">
                                        <div
                                            class="feature-box text-left feature-box-show-hover box-shadow-small-hover feature-box-bg-white-hover border-all border-color-black-transparent overflow-hidden">
                                            <div
                                                class="feature-box-move-bottom-top padding-3-rem-tb padding-4-rem-lr md-padding-2-rem-tb md-padding-2-half-rem-lr sm-padding-3-rem-tb sm-padding-4-half-rem-lr">
                                                <h4
                                                    class="feature-box-icon alt-font font-weight-500 text-yellow-ochre-light margin-20px-bottom letter-spacing-minus-2px">
                                                    150</h4>
                                                <div class="feature-box-content last-paragraph-no-margin">
                                                    <span
                                                        class="text-extra-dark-gray text-extra-medium font-weight-600 text-uppercase d-block margin-10px-bottom alt-font">Formasi
                                                        Opsi 1</span>
                                                    <p>Lorem ipsum dolor sit consectetur adipiscing elit eiusmod incididunt
                                                    </p>
                                                </div>
                                                <div class="move-bottom-top margin-15px-top">
                                                    <a href="#"
                                                        class="btn btn-link p-0 btn-extra-large text-yellow-ochre-light text-yellow-ochre-light-hover md-margin-auto-lr">Selengkapnya</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end fancy text box slider item -->
                                    <!-- start fancy text box slider item -->
                                    <div class="swiper-slide text-center padding-15px-all">
                                        <div
                                            class="feature-box text-left feature-box-show-hover box-shadow-small-hover feature-box-bg-white-hover border-all border-all border-color-black-transparent overflow-hidden last-paragraph-no-margin">
                                            <div
                                                class="feature-box-move-bottom-top padding-3-rem-tb padding-4-rem-lr md-padding-2-rem-tb md-padding-2-half-rem-lr sm-padding-3-rem-tb sm-padding-4-half-rem-lr">
                                                <h4
                                                    class="feature-box-icon alt-font font-weight-500 text-yellow-ochre-light margin-20px-bottom letter-spacing-minus-2px">
                                                    208</h4>
                                                <div class="feature-box-content last-paragraph-no-margin">
                                                    <span
                                                        class="text-extra-dark-gray text-extra-medium font-weight-600 text-uppercase d-block margin-10px-bottom alt-font">Formasi
                                                        Opsi 2</span>
                                                    <p>Lorem ipsum dolor sit consectetur adipiscing elit eiusmod incididunt
                                                    </p>
                                                </div>
                                                <div class="move-bottom-top margin-15px-top">
                                                    <a href="#"
                                                        class="btn btn-link p-0 btn-extra-large text-yellow-ochre-light text-yellow-ochre-light-hover md-margin-auto-lr">Selengkapnya</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end fancy text box slider item -->
                                    <!-- start fancy text box slider item -->
                                    <div class="swiper-slide text-center padding-15px-all">
                                        <div
                                            class="feature-box text-left feature-box-show-hover box-shadow-small-hover feature-box-bg-white-hover border-all border-all border-color-black-transparent overflow-hidden last-paragraph-no-margin">
                                            <div
                                                class="feature-box-move-bottom-top padding-3-rem-tb padding-4-rem-lr md-padding-2-rem-tb md-padding-2-half-rem-lr sm-padding-3-rem-tb sm-padding-4-half-rem-lr">
                                                <h4
                                                    class="feature-box-icon alt-font font-weight-500 text-yellow-ochre-light margin-20px-bottom letter-spacing-minus-2px">
                                                    1500</h4>
                                                <div class="feature-box-content last-paragraph-no-margin">
                                                    <span
                                                        class="text-extra-dark-gray text-extra-medium font-weight-600 text-uppercase d-block margin-10px-bottom alt-font">Formasi
                                                        Opsi 3</span>
                                                    <p>Lorem ipsum dolor sit consectetur adipiscing elit eiusmod incididunt
                                                    </p>
                                                </div>
                                                <div class="move-bottom-top margin-15px-top">
                                                    <a href="#"
                                                        class="btn btn-link p-0 btn-extra-large text-yellow-ochre-light text-yellow-ochre-light-hover md-margin-auto-lr">Selengkapnya</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end fancy text box slider item -->
                                    <!-- start fancy text box slider item -->
                                    <div class="swiper-slide text-center padding-15px-all">
                                        <div
                                            class="feature-box text-left feature-box-show-hover box-shadow-small-hover feature-box-bg-white-hover border-all border-all border-color-black-transparent overflow-hidden last-paragraph-no-margin">
                                            <div
                                                class="feature-box-move-bottom-top padding-3-rem-tb padding-4-rem-lr md-padding-2-rem-tb md-padding-2-half-rem-lr sm-padding-3-rem-tb sm-padding-4-half-rem-lr">
                                                <h4
                                                    class="feature-box-icon alt-font font-weight-500 text-yellow-ochre-light margin-20px-bottom letter-spacing-minus-2px">
                                                    450</h4>
                                                <div class="feature-box-content last-paragraph-no-margin">
                                                    <span
                                                        class="text-extra-dark-gray text-extra-medium font-weight-600 text-uppercase d-block margin-10px-bottom alt-font">Formasi
                                                        Opsi 4</span>
                                                    <p>Lorem ipsum dolor sit consectetur adipiscing elit eiusmod incididunt
                                                    </p>
                                                </div>
                                                <div class="move-bottom-top margin-15px-top">
                                                    <a href="#"
                                                        class="btn btn-link p-0 btn-extra-large text-yellow-ochre-light text-yellow-ochre-light-hover md-margin-auto-lr">Selengkapnya</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end fancy text box slider item -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
    <section class="big-section bg-light-gray wow animate__fadeIn pb-0" id="syarat">
        <div class="container">
            <div class="row justify-content-center">
                <!-- <div class="col-md-12 text-center margin-seven-bottom">
                                        <h6 class="alt-font text-extra-dark-gray font-weight-500">Pengumuman</h6>
                                    </div> -->
                <div class="col-12 text-center margin-4-rem-bottom">
                    <span class="d-block alt-font margin-5px-bottom text-uppercase">Informasi</span>
                    <h5 class="alt-font text-extra-dark-gray font-weight-600 mb-0">Tahapan Seleksi</h5>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-md-8 mx-au" style="margin-bottom: 50px">
                    <img class="fluid" src="{{ asset('frontend/images/alur_seleksi.png') }}" style="margin-left:-80px">
                </div>
                <div class="hide-mobile">
                    <div class="containers" style="height:190px;width:215px;margin-left:-600px;margin-top:185px;border:{{ $xx }}px solid #000">
                      <div class="imgs">
                        <a onclick="location.href='#verval';return false;" class="preview" href="{{ asset('frontend/images/verval_ijazah.png') }}"><img class="img" src="{{ asset('frontend/images/kemdikbud-xs.png') }}" style="height:100%;opacity: 0"></a>
                      </div>
                    </div>
                    <div class="containers" style="height:60px;width:100px;margin-left:-365px;margin-top:-116px;border:{{ $xx }}px solid #000">
                      <div class="imgs">
                        <a onclick="location.href='#formasi1';return false;" class="preview" href="{{ asset('frontend/images/formasi.png') }}"><img class="img" src="{{ asset('frontend/images/kemdikbud-xs.png') }}" style="height:100%;opacity: 0"></a>
                      </div>
                    </div>
                    <div class="containers" style="height:60px;width:100px;margin-left:-210px;margin-top:-46px;border:{{ $xx }}px solid #000">
                      <div class="imgs">
                        <a onclick="location.href='#formasi3';return false;" class="preview" href="{{ asset('frontend/images/formasi.png') }}"><img class="img" src="{{ asset('frontend/images/kemdikbud-xs.png') }}" style="height:100%;opacity: 0"></a>
                      </div>
                    </div>
                    <div class="containers" style="height:60px;width:100px;margin-left:-210px;margin-top:-240px;border:{{ $xx }}px solid #000">
                      <div class="imgs">
                        <a onclick="location.href='#formasi2';return false;" class="preview" href="{{ asset('frontend/images/formasi.png') }}"><img class="img" src="{{ asset('frontend/images/kemdikbud-xs.png') }}" style="height:100%;opacity: 0"></a>
                      </div>
                    </div>
                    <div class="containers" style="height:65px;width:160px;margin-left:-240px;margin-top:-140px;border:{{ $xx }}px solid #000">
                      <div class="imgs">
                        <a onclick="location.href='#uk1';return false;" class="previewright" href="{{ asset('frontend/images/uk1.png') }}"><img class="img" src="{{ asset('frontend/images/kemdikbud-xs.png') }}" style="height:100%;opacity: 0"></a>
                      </div>
                    </div>
                    <div class="containers" style="height:65px;width:160px;margin-left:-240px;margin-top:100px;border:{{ $xx }}px solid #000">
                      <div class="imgs">
                        <a onclick="location.href='#uk2';return false;" class="previewright" href="{{ asset('frontend/images/uk2.png') }}"><img class="img" src="{{ asset('frontend/images/kemdikbud-xs.png') }}" style="height:100%;opacity: 0"></a>
                      </div>
                    </div>
                    <div class="containers" style="height:65px;width:160px;margin-left:-240px;margin-top:110px;border:{{ $xx }}px solid #000">
                      <div class="imgs">
                        <a onclick="location.href='#uk3';return false;" class="previewright" href="{{ asset('frontend/images/uk3.png') }}"><img class="img" src="{{ asset('frontend/images/kemdikbud-xs.png') }}" style="height:100%;opacity: 0"></a>
                      </div>
                    </div>
                    <div class="containers" style="height:170px;width:155px;margin-left:-770px;margin-top:-210px;border:{{ $xx }}px solid #000">
                      <div class="imgs">
                        <a onclick="location.href='#pendaftaran';return false;"><img class="img" src="{{ asset('frontend/images/pendaftaran.png') }}" style="height:100%;cursor: pointer;"></a>
                      </div>
                    </div>
                </div>
                
                <div class="col-12 col-md-12 mx-au" style="margin-top:10px;padding-top:20px;border-top:1px solid #ccc">
                    <ul class="list-style-06">
                        @foreach ($tahapan as $thp)
                        <li class="border-radius-6px margin-35px-bottom last-paragraph-no-margin wow animate__fadeIn"
                            data-wow-delay="0.2s" id="{{ $thp->idtag }}">
                            <img class="float-left img-fluid margin-20px-right hvr-bounce-in" width="120" src="{{ asset('frontend/images/seleksi/'.$thp->icon) }}">
                            <div><span
                                    class="text-extra-medium text-dark-charcoal font-weight-500 margin-5px-bottom d-block">{{ $thp->nama_tahapan }}<span class="font-weight-600" style="font-size: 12px;color:blue">&nbsp;&nbsp;<b>{{ $thp->tanggal }}</b></span></span>
                                <p class="w-100" style="text-align: justify;">{!! $thp->keterangan !!}</p>
                            </div>
                        </li>
                        <hr>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>
    @if ($show === 1)
    <section class="big-section bg-light-gray wow animate__fadeIn pb-0" id="syarat2">
        <div class="container">
            <div class="row justify-content-center">
                <!-- <div class="col-md-12 text-center margin-seven-bottom">
                                        <h6 class="alt-font text-extra-dark-gray font-weight-500">Pengumuman</h6>
                                    </div> -->
                <div class="col-12 text-center margin-4-rem-bottom">
                    <span class="d-block alt-font margin-5px-bottom text-uppercase">Informasi</span>
                    <h5 class="alt-font text-extra-dark-gray font-weight-600 mb-0">Tahapan Seleksi</h5>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="timeline">
                @php
                $noo=1;
                @endphp

                @foreach ($tahapan as $thp)

                @if ($noo%2==1)
                  <div class="kontener left">
                    <i class="icon fa fa-th"></i>
                    <div class="content">
                      <h2>{{ $thp->nama_tahapan }}</h2>
                      <p>
                        {!! $thp->keterangan !!}
                      </p>
                    </div>
                    <div class="date">30 Juni s.d 14 Juli 2021</div>
                  </div>
                @else
                    <div class="kontener right">
                    <i class="icon fa fa-th"></i>
                    <div class="content">
                      <h2>{{ $thp->nama_tahapan }}</h2>
                      <p>
                        {!! $thp->keterangan !!}
                      </p>
                    </div>
                    <div class="date">30 Juli s.d 18 Agustus 2021</div>
                  </div>
                @endif
                  @php $noo++; @endphp
                @endforeach
                </div>
            </div>
        </div>
    </section>
    @endif
    @if ($show === 1)
        <section
            class="padding-eight-bottom border-bottom border-color-extra-light-gray padding-5-rem-top md-padding-8-rem-bottom sm-padding-50px-top"
            id="alur">
            <div class="container">
                <div class="row justify-content-center">
                    <div
                        class="col-12 col-lg-5 col-sm-7 text-center margin-7-rem-bottom md-margin-6-rem-bottom sm-margin-4-rem-bottom wow animate__fadeIn">
                        <span
                            class="alt-font font-weight-600 text-uppercase text-gradient-magenta-orange-2 d-block letter-spacing-1px margin-20px-bottom sm-margin-10px-bottom">Informasi</span>
                        <h5 class="alt-font font-weight-500 text-medium-slate-blue">Alur Pendaftaran</h5>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-lg-4 row-cols-sm-2 justify-content-center">
                    <!-- start progress step item -->
                    <div class="col-10 text-center process-step-style-03 simple md-margin-5-rem-bottom wow animate__fadeIn"
                        data-wow-delay="0.2s">
                        <div class="process-step-item">
                            <div class="process-step-item-box">
                                <span class="process-step-item-box-bfr bg-medium-gray"></span>
                                <div class="process-step-icon">
                                    <span class="process-step-number text-white font-weight-500">
                                        <span class="process-step-number-bfr bg-light-orange"></span>1<span
                                            class="process-step-number-afr bg-gradient-magenta-orange-2"></span>
                                    </span>
                                </div>
                                <div class="process-content last-paragraph-no-margin">
                                    <span
                                        class="alt-font d-inline-block font-weight-500 text-medium-slate-blue text-uppercase margin-10px-bottom">Research
                                        project</span>
                                    <p>Lorem ipsum dolor consectetur adipiscing eiusmod tempor</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end progress step item -->
                    <!-- start progress step item -->
                    <div class="col-10 text-center process-step-style-03 simple md-margin-5-rem-bottom wow animate__fadeIn"
                        data-wow-delay="0.3s">
                        <div class="process-step-item">
                            <div class="process-step-item-box">
                                <span class="process-step-item-box-bfr bg-medium-gray"></span>
                                <div class="process-step-icon">
                                    <span class="process-step-number text-white font-weight-500">
                                        <span class="process-step-number-bfr bg-light-orange"></span>2<span
                                            class="process-step-number-afr bg-gradient-magenta-orange-2"></span>
                                    </span>
                                </div>
                                <div class="process-content last-paragraph-no-margin">
                                    <span
                                        class="alt-font d-inline-block font-weight-500 text-medium-slate-blue text-uppercase margin-10px-bottom">Find
                                        problem</span>
                                    <p>Lorem ipsum dolor consectetur adipiscing eiusmod tempor</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end progress step item -->
                    <!-- start progress step item -->
                    <div class="col-10 text-center process-step-style-03 simple xs-margin-5-rem-bottom wow animate__fadeIn"
                        data-wow-delay="0.4s">
                        <div class="process-step-item">
                            <div class="process-step-item-box">
                                <span class="process-step-item-box-bfr bg-medium-gray"></span>
                                <div class="process-step-icon">
                                    <span class="process-step-number text-white font-weight-500">
                                        <span class="process-step-number-bfr bg-light-orange"></span>3<span
                                            class="process-step-number-afr bg-gradient-magenta-orange-2"></span>
                                    </span>
                                </div>
                                <div class="process-content last-paragraph-no-margin">
                                    <span
                                        class="alt-font d-inline-block font-weight-500 text-medium-slate-blue text-uppercase margin-10px-bottom">Start
                                        optimize</span>
                                    <p>Lorem ipsum dolor consectetur adipiscing eiusmod tempor</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end progress step item -->
                    <!-- start progress step item -->
                    <div class="col-10 text-center process-step-style-03 simple wow animate__fadeIn" data-wow-delay="0.5s">
                        <div class="process-step-item">
                            <div class="process-step-item-box">
                                <span class="process-step-item-box-bfr bg-medium-gray"></span>
                                <div class="process-step-icon">
                                    <span class="process-step-number text-white font-weight-500">
                                        <span class="process-step-number-bfr bg-light-orange"></span>4<span
                                            class="process-step-number-afr bg-gradient-magenta-orange-2"></span>
                                    </span>
                                </div>
                                <div class="process-content last-paragraph-no-margin">
                                    <span
                                        class="alt-font d-inline-block font-weight-500 text-medium-slate-blue text-uppercase margin-10px-bottom">Reach
                                        target</span>
                                    <p>Lorem ipsum dolor consectetur adipiscing eiusmod tempor</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end progress step item -->
                </div>
            </div>
        </section>
    @endif
    <section
        class="padding-eight-bottom border-bottom border-color-extra-light-gray padding-5-rem-top md-padding-8-rem-bottom sm-padding-50px-top"
        id="unduhan">
        <div class="container">
            <div class="row justify-content-center">
                <div
                    class="col-12 col-lg-5 col-sm-7 text-center margin-3-rem-bottom md-margin-2-rem-bottom sm-margin-2-rem-bottom wow animate__fadeIn">
                    <span
                        class="alt-font font-weight-600 text-uppercase text-gradient-magenta-orange-2 d-block letter-spacing-1px margin-20px-bottom sm-margin-10px-bottom">Download
                        Dokumen</span>
                    <h5 class="alt-font font-weight-500 text-medium-slate-blue">Unduh Dokumen PPPK Guru Tahun 2021</h5>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-12 wow animate__fadeInRight" data-wow-delay="0.4s">
                    <div class="testimonials-carousel-style-02 swiper-simple-arrow-style-2">
                        <div class="swiper-container black-move"
                            data-slider-options='{ "slidesPerView": 1, "spaceBetween": 0, "observer": true, "observeParents": true, "autoplay": { "delay": 3000, "disableOnInteraction": false },  "navigation": { "nextEl": ".swiper-button-next-nav-2", "prevEl": ".swiper-button-previous-nav-2" }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "992": { "slidesPerView": 3 }, "768": { "slidesPerView": 2 } }, "effect": "slide" }'>
                            <div class="swiper-wrapper">
                                @foreach ($dokumen as $dok)
                                    <div class="swiper-slide text-center padding-15px-all">
                                        <div
                                            class="feature-box text-left feature-box-show-hover box-shadow-small-hover feature-box-bg-white-hover border-all border-color-black-transparent overflow-hidden">
                                            <div
                                                class="feature-box-move-bottom-top padding-3-rem-tb padding-4-rem-lr md-padding-2-rem-tb md-padding-2-half-rem-lr sm-padding-3-rem-tb sm-padding-4-half-rem-lr">
                                                <center><img src="{{ asset('frontend/images/icon-pdf.png') }}"
                                                        style="width:30%"></center><br />
                                                <div class="feature-box-content last-paragraph-no-margin">
                                                    <span
                                                        class="text-extra-dark-gray text-extra-medium font-weight-600 text-uppercase d-block margin-10px-bottom alt-font">{{ $dok->nama_dokumen }}</span>
                                                    <p>{{ $dok->keterangan }}</p>
                                                </div>
                                                <div class="move-bottom-top margin-15px-top">
                                                    <a target="_blank"
                                                        href="{{ asset('upload/dokumen/' . $dok->file . '') }}"
                                                        class="btn btn-link p-0 btn-extra-large text-yellow-ochre-light text-yellow-ochre-light-hover md-margin-auto-lr">Selengkapnya</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-light-gray" id="faq">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center margin-7-rem-bottom">
                    <span class="d-block alt-font margin-5px-bottom text-uppercase">Informasi</span>
                    <h5 class="alt-font text-extra-dark-gray font-weight-600 mb-0">Frequently Asked Questions</h5>
                </div>
                <div class="col-12 col-md-12 md-margin-50px-bottom sm-margin-30px-bottom wow animate__fadeIn">
                    <div class="panel-group accordion-event accordion-style-03" id="accordion2"
                        data-active-icon="fa-angle-down" data-inactive-icon="fa-angle-right">
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($faq as $item)
                            @php
                                $no++;
                            @endphp
                            <div class="panel bg-white box-shadow-small border-radius-5px mb-3">
                                <div class="panel-heading">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2"
                                        href="#collapse{{ $no }}" aria-expanded="false">
                                        <div class="panel-title">
                                            <span
                                                class="alt-font text-extra-dark-gray d-inline-block font-weight-500">{{ $item->tanya }}</span>
                                            <i class="indicator fas fa-angle-down text-fast-blue icon-extra-small"></i>
                                        </div>
                                    </a>
                                </div>
                                <div id="collapse{{ $no }}" class="panel-collapse collapse"
                                    data-parent="#accordion2">
                                    <div class="panel-body">{!! $item->jawab !!}</div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-12 text-center mt-md-4">
                    <a href="https://sscasn.bkn.go.id/faq" target="_blank"
                        class="btn btn-fancy btn-medium btn-white btn-round-edge btn-box-shadow">Lihat
                        selengkapnya</a>
                </div>
            </div>
        </div>
    </section>
    <section class="half-section bg-kontak" id="kontak">
        <div class="container">
            <div class="row align-items-center">
                <div
                    class="col-12 col-lg-6 col-md-7 col-sm-6 text-center text-sm-left sm-margin-25px-tb xs-margin-30px-bottom">
                    <h5 style="color: #ffeb3b;text-shadow: 2px 2px 4px #000000;" class="alt-font font-weight-500 margin-10px-bottom">Ada pertanyaan mengenai PPPK?</h5>
                    <a href="{{ route('contact') }}" class="btn btn-fancy btn-medium btn-white font-weight-500 btn-round-edge btn-box-shadow pengaduan">Hubungi Kami</a>
                </div>
                <div
                    class="col-12 col-lg-6 col-md-5 col-sm-6 social-icon-style-02 text-center text-sm-right sm-margin-25px-tb xs-no-margin-top">
                    <span class="alt-font text-medium d-block margin-10px-bottom"></span>
                    
                </div>
            </div>
        </div>
    </section>
    <div class="modal fade" id="modal-3" tabindex="-1" role="modal" aria-labelledby="modal-label-3" aria-hidden="true" style="display: none">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 id="modal-label-3" class="modal-title">Penjelasan Seleksi Administrasi</h6>
                    <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <p style="margin-bottom: 10px"><b>Berkas yang diperlukan untuk seleksi administrasi adalah : </b></p>
                            <ol style="padding-right: 10px">
                                <li>Surat pernyataan yang dapat diunduh pada laman <a target="_blank" href="https://gurupppk.kemdikbud.go.id">https://gurupppk.kemdikbud.go.id</a>;</li>
                                <li>KTP elektronik (e-KTP) asli;</li>
                                <li>Pasfoto;</li>
                                <li>Ijazah;</li>
                                <li>Sertifikat Pendidik bagi yang memiliki;</li>
                                <li>Bagi pendaftar penyandang disabilitas menambahkan;
                                    <ul style="margin-left: 20px;text-align: justify;">
                                        <li>Surat keterangan dari dokter Rumah Sakit Pemerintah/Puskesmas yang menerangkan tentang jenis dan derajat kedisabilitasannya;</li>
                                        <li>Menyampaikan tautan/link video singkat yang menunjukkan kegiatan sehari-hari pelamar dalam menjalankan tugas sebagai pendidik (pelamar mengunggah video singkat tersebut di youtube/googledrive/dropbox/media penyimpanan lainnya).</li>
                                    </ul>
                                </li>
                            </ol>
                        </div>
                    </div>
                    <div class="row mb20">
                        <div class="col-md-12">
                            <p style="text-align: justify;">Verifikasi administrasi dilakukan berdasar pada linieritas Sertifikasi Pendidik dan/atau Kualifikasi Pendidikan. Jika Sertifikasi Pendidik tidak sesuai, dilanjutkan dengan verifikasi berdasar pada linieritas Kualifikasi Pendidikan. Kesesuaian Linieritas dimaksud merujuk pada <a style="color:blue" href="{{ asset('upload/dokumen/SE_Kesesuaian_Kualifikasi_Akademik_dan_Sertifikat_Pendidik.pdf') }}" target="_blank">SE Direktur Jenderal Guru dan Tenaga Kependidikan Kemendikbud No 1460/B.B1/GT.02.01/2021 tanggal 15 Maret 2021.</a></p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button data-dismiss="modal" class="btn btn-b" type="button">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modal-soal" tabindex="-1" role="modal" aria-labelledby="modal-label-soal" aria-hidden="true" style="display: none">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 id="modal-label-3" class="modal-title">Bobot Soal Ujian Seleksi Kompetensi</h6>
                    <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="img-fluid">
                                <img src="{{ asset('images/bobot_soal.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button data-dismiss="modal" class="btn btn-b" type="button">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modal-afirmasi" tabindex="-1" role="modal" aria-labelledby="modal-label-afirmasi" aria-hidden="true" style="display: none">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 id="modal-label-3" class="modal-title">Kebijakan Afirmasi dalam Seleksi Guru PPPK</h6>
                    <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="img-fluid">
                                <img src="{{ asset('images/kebijakan_afirmasi.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button data-dismiss="modal" class="btn btn-b" type="button">Tutup</button>
                </div>
            </div>
        </div>
    </div>
@endsection
