@extends('layouts.frontend.appsub')

@section('content')

    <section class="bg-extra-dark-gray padding-25px-tb page-title-small">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-12 col-xl-8 col-lg-6">
                    <h1 class="alt-font text-white font-weight-500 no-margin-bottom text-center text-lg-left"></h1>
                </div>
                <div
                    class="col-12 col-xl-4 col-lg-6 breadcrumb justify-content-center justify-content-lg-end text-small alt-font md-margin-10px-top">
                    <ul class="xs-text-center">
                        <li><a href="" class="text-white-hover">Beranda</a></li>
                        <li>Kontak</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- end page title -->

    @php
    $show = 0;
    @endphp
    @if ($show === 1)
        <section class="bg-light-gray" id="kontak">
            <div class="container">
                <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 justify-content-center">
                    <!-- start fancy text box item -->
                    <div class="col col-sm-8 md-margin-30px-bottom xs-margin-15px-bottom">
                        <div
                            class="feature-box feature-box-hide-show-hover bg-white border-radius-6px overflow-hidden box-shadow-large box-shadow-extra-large-hover">
                            <div
                                class="feature-box-move-bottom-top padding-5-rem-lr padding-15px-tb lg-padding-2-half-rem-lr md-padding-4-half-rem-lr">
                                <div class="feature-box-icon">
                                    <i
                                        class="line-icon-Mail-Read d-block icon-medium text-fast-blue margin-25px-bottom"></i>
                                </div>
                                <div class="feature-box-content last-paragraph-no-margin">
                                    <span
                                        class="text-extra-dark-gray text-extra-medium d-block alt-font font-weight-500">How
                                        can we help you?</span>
                                    <a href="mailto:info@yourdomain.com" class="alt-font text-decoration-underline">Send us
                                        an
                                        email</a>
                                </div>
                                <div class="move-bottom-top margin-10px-top last-paragraph-no-margin">
                                    <p>Lorem ipsum is simply dummy text of the printing industry</p>
                                </div>
                            </div>
                            <div class="feature-box-overlay"></div>
                        </div>
                    </div>
                    <!-- end fancy text box item -->
                    <!-- start fancy text box item -->
                    <div class="col col-sm-8 md-margin-30px-bottom xs-margin-15px-bottom">
                        <div
                            class="feature-box feature-box-hide-show-hover bg-white border-radius-6px overflow-hidden box-shadow-large box-shadow-extra-large-hover">
                            <div
                                class="feature-box-move-bottom-top padding-5-rem-lr padding-15px-tb lg-padding-2-half-rem-lr md-padding-4-half-rem-lr">
                                <div class="feature-box-icon">
                                    <i class="line-icon-Phone-2 d-block icon-medium text-fast-blue margin-25px-bottom"></i>
                                </div>
                                <div class="feature-box-content last-paragraph-no-margin">
                                    <span
                                        class="text-extra-dark-gray text-extra-medium d-block alt-font font-weight-500">Feel
                                        free to get in touch?</span>
                                    <a href="#" class="alt-font text-decoration-underline">Give us a call toady</a>
                                </div>
                                <div class="move-bottom-top margin-10px-top last-paragraph-no-margin">
                                    <p>Lorem ipsum is simply dummy text of the printing industry</p>
                                </div>
                            </div>
                            <div class="feature-box-overlay"></div>
                        </div>
                    </div>
                    <!-- end fancy text box item -->
                    <!-- start fancy text box item -->
                    <div class="col col-sm-8">
                        <div
                            class="feature-box feature-box-hide-show-hover bg-white border-radius-6px overflow-hidden box-shadow-large box-shadow-extra-large-hover">
                            <div
                                class="feature-box-move-bottom-top padding-5-rem-lr padding-15px-tb lg-padding-2-half-rem-lr md-padding-4-half-rem-lr">
                                <div class="feature-box-icon">
                                    <i
                                        class="line-icon-Approved-Window d-block icon-medium text-fast-blue margin-25px-bottom"></i>
                                </div>
                                <div class="feature-box-content last-paragraph-no-margin">
                                    <span
                                        class="text-extra-dark-gray text-extra-medium d-block alt-font font-weight-500">Ready
                                        to request a quote?</span>
                                    <a href="#project" class="alt-font text-decoration-underline section-link">Describe your
                                        project</a>
                                </div>
                                <div class="move-bottom-top margin-10px-top last-paragraph-no-margin">
                                    <p>Lorem ipsum is simply dummy text of the printing industry</p>
                                </div>
                            </div>
                            <div class="feature-box-overlay"></div>
                        </div>
                    </div>
                    <!-- end fancy text box item -->
                </div>
            </div>
        </section>
        <!-- end section -->
    @endif
    <!-- start section -->
    <section class="wow animate__fadeIn">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10">
                    <div class="row justify-content-center">
                        <div class="col-12 col-xl-6 col-lg-7 text-center margin-4-half-rem-bottom md-margin-3-rem-bottom">
                            <h4 class="alt-font font-weight-600 text-extra-dark-gray">Helpdesk PPPK</h4>
                            <span
                                class="alt-font letter-spacing-minus-1-half text-extra-medium d-block margin-5px-bottom">Lengkapi
                                formulir dibawah ini untuk mengajukan Pertanyaan seputar PPPK Guru Tahun 2021</span>
                        </div>
                        <div class="col-12">
                            <!-- start contact form -->
                            <form id="formpengaduan" action="{{ route('contact.store') }}" method="post">
                                @csrf @method('post')
                                <div class="row row-cols-1 row-cols-md-2">
                                    <div class="col margin-4-rem-bottom sm-margin-25px-bottom">
                                        <input class="medium-input bg-white margin-25px-bottom required" type="text"
                                            name="nama" placeholder="Nama Lengkap" value="{{ old('nama') }}"
                                            autocomplete="off">
                                        @error('nama')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror

                                        <input class="medium-input bg-white margin-25px-bottom required" type="email"
                                            name="email" placeholder="Email" value="{{ old('email') }}"
                                            autocomplete="off">
                                        @error('email')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror

                                        <input class="medium-input bg-white margin-25px-bottom required" type="number"
                                            name="no_hp" placeholder="No HP" value="{{ old('no_hp') }}"
                                            autocomplete="off">
                                        @error('no_hp')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror

                                        <select name="asal_provinsi" id="asal_provinsi"
                                            class="medium-select medium-input select bg-white margin-25px-bottom required"
                                            placeholder="Asal Provinsi">
                                            <option disabled selected>Asal Provinsi</option>
                                            @foreach ($provinsi as $item)
                                                <option value="{{ $item->kode_wilayah }}">{{ $item->nama }}</option>
                                            @endforeach
                                        </select>
                                        @error('asal_provinsi')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror

                                        {{-- <input class="medium-input bg-white margin-25px-bottom required" type="text"
                                            name="asal_kabupaten_kota" placeholder="Asal Kabupaten / Kota"> --}}
                                        <select name="asal_kabupaten_kota" id="asal_kabupaten_kota"
                                            class="medium-select select bg-white margin-25px-bottom required"
                                            placeholder="Asal Kabupaten / Kota">
                                            <option disabled selected>Asal Kabupaten / Kota</option>
                                        </select>
                                        @error('asal_kabupaten_kota')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                        {{-- <input type="checkbox" name="terms_condition" id="terms_condition" value="1"
                                            class="terms-condition d-inline-block align-top w-auto mb-0 margin-5px-top margin-10px-right">
                                        <label for="terms_condition" class="text-small d-inline-block align-top w-85">I
                                            accept the terms & conditions and I understand that my data will be hold
                                            securely in accordance with the <a href="privacy.html" target="_blank"
                                                class="text-decoration-underline text-extra-dark-gray">privacy
                                                policy</a>.</label> --}}

                                    </div>
                                    <div class="col margin-4-rem-bottom sm-margin-10px-bottom">
                                        <input class="medium-input bg-white margin-25px-bottom required" type="text"
                                            name="judul" placeholder="Judul Pengaduan" autocomplete="off">
                                        @error('judul')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                        {{-- <input class="medium-select select bg-white margin-25px-bottom required" type="text"
                                            name="kategori_id" placeholder="Kategori" autocomplete="off"> --}}
                                        {{-- <select name="kategori_id" id="kategori_id"
                                            class="medium-select select bg-white margin-25px-bottom required">
                                            <option disabled selected>Kategori Pengaduan</option>
                                            @foreach ($kategori as $item)
                                                <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                            @endforeach
                                        </select> --}}
                                        @error('kategori_id')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                        <textarea class="medium-textarea h-200px bg-white required" name="isi"
                                            placeholder="Isi pengaduan" autocomplete="off"></textarea>
                                        @error('isi')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                        {!! NoCaptcha::display() !!}
                                        @error('g-recaptcha-response')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror

                                    </div>
                                    <div class="col text-left sm-margin-30px-bottom">
                                        {{-- <input type="checkbox" name="terms_condition" id="terms_condition" value="1"
                                            class="terms-condition d-inline-block align-top w-auto mb-0 margin-5px-top margin-10px-right">
                                        <label for="terms_condition" class="text-small d-inline-block align-top w-85">I
                                            accept the terms & conditions and I understand that my data will be hold
                                            securely in accordance with the <a href="privacy.html" target="_blank"
                                                class="text-decoration-underline text-extra-dark-gray">privacy
                                                policy</a>.</label> --}}
                                    </div>
                                    <div class="col text-center text-md-right">
                                        <input type="hidden" name="redirect" value="">
                                        <button class="btn btn-medium btn-gradient-light-purple-light-orange mb-0 submit"
                                            type="submit">Kirim Pengaduan</button>
                                    </div>
                                </div>
                                <div class="form-results d-none"></div>
                            </form>
                            <!-- end contact form -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $('#asal_provinsi').change(function(event) {
                console.log(`{{ url()->current() }}/kotaByProvinsi/${pad($('#asal_provinsi').val())}`)
                // let formData = new FormData();
                $.ajax({
                    url: `{{ url()->current() }}/kotaByProvinsi/${pad($('#asal_provinsi').val())}`,
                    type: 'get',
                    // data: formData,
                    contentType: false,
                    processData: false,
                    success: function(data) {
                        console.log(data);
                        let html = ''
                        data.data.map((element) => {
                            html +=
                                `<option value="${element.kode_wilayah}">${element.nama}</option>`
                        })
                        $('#asal_kabupaten_kota').html(html)
                    },
                    error: function(error) {
                        console.error(error)
                    }
                })
            })

            function pad(n) {
                return (n < 100000) ? ("0" + n) : n;
            }
        })
    </script>
@endpush
