@extends('layouts.template-front')

@push('styles')
    <style>
        textarea {
            width: 830px;
            height: 120px;
            border: 3px solid #cccccc;
            padding: 5px;
            font-family: Tahoma, sans-serif;
            background-image: url(bg.gif);
            background-position: bottom right;
            background-repeat: no-repeat;
        }

        input {
            width: 700px;
            height: 50px;
            border: 3px solid #cccccc;
            padding: 5px;
            font-family: Tahoma, sans-serif;
            background-image: url(bg.gif);
            background-position: bottom right;
            background-repeat: no-repeat;
        }

        .para-desc {
            max-width: 830px !important ;
        }
    </style>

    <style>
        .loader {
          border: 16px solid #f3f3f3;
          border-radius: 50%;
          border-top: 16px solid #3498db;
          width: 220px;
          height: 220px;
          -webkit-animation: spin 2s linear infinite; /* Safari */
          animation: spin 2s linear infinite;
        }

        /* Safari */
        @-webkit-keyframes spin {
          0% { -webkit-transform: rotate(0deg); }
          100% { -webkit-transform: rotate(360deg); }
        }

        @keyframes spin {
          0% { transform: rotate(0deg); }
          100% { transform: rotate(360deg); }
        }
    </style>
@endpush

@section('content')
    
    <!-- Hero Start -->
    <section class="bg-half-170 d-table w-100" id="home">
        <img src="{{ asset('assets-front/img/bg-top-right.png') }}" class="olay-top-right">
        <img src="{{ asset('assets-front/img/bg-left-lg.png') }}" class="olay-top-left">
        <div class="container bg-right-sm bg-left-sm">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="title-heading mt-4">
                        <h1 class="text-secondary medium-heading">Bukti Praktik Baik</h1>
                        <p class="para-desc">Jawablah pertanyaan berikut ini serinci mungkin!</p>
                        <div style="margin-top: 40px; margin-bottom: 40px">
                            <p class="para-desc">NUPTK</p>
                            <input type="form-control" placeholder="Masukkan NUPTK">
                            <button class="btn btn-primary" onclick="get_question()">Cari NUPTK</button>
                        </div>
                        <div class="loader" style="display:none"></div>
                        <div class="feedback-note" style="display:none">
                            <div style="margin-top: 20px">
                                <!-- <i class="fa fa-envelope-open-text text-secondary"></i> -->
                                <p class="para-desc">1. Ceritakan pengalaman Anda yang terkait praktik baik memotivasi semua murid. Apa tantangan yang Anda hadapi? Bagaimana strategi yang Anda lakukan? Apa hasil dari strategi yang sudah Anda lakukan?</p>
                            </div>
                            <div class="email">
                                <textarea type="form-control" placeholder="Berikan Jawaban" rows="7"></textarea>
                            </div>
                            <div style="margin-top: 20px">
                                <!-- <i class="fa fa-envelope-open-text text-secondary"></i> -->
                                <p class="para-desc">2. Ceritakan pengalaman Anda yang terkait praktik baik mengajar dengan cara yang menyenangkan. Apa tantangan yang Anda hadapi? Bagaimana strategi yang Anda lakukan? Apa hasil dari strategi yang sudah Anda lakukan?</p>
                            </div>
                            <div class="email">
                                <textarea type="form-control" placeholder="Berikan Jawaban" rows="7"></textarea>
                            </div>
                            <div style="margin-top: 20px">
                                <p class="para-desc">3. Ceritakan pengalaman Anda yang terkait praktik baik memberi catatan umpan balik pada tugas yang dikerjakan murid. Apa tantangan yang Anda hadapi? Bagaimana strategi yang Anda lakukan? Apa hasil dari strategi yang sudah Anda lakukan?</p>
                            </div>
                            <div class="email">
                                <textarea type="form-control" placeholder="Berikan Jawaban" rows="7"></textarea>
                            </div>
                            <div style="margin-top: 20px">
                                <p class="para-desc">4. Ceritakan pengalaman Anda yang terkait praktik baik meminta dan menerima usulan murid. Apa tantangan yang Anda hadapi? Bagaimana strategi yang Anda lakukan? Apa hasil dari strategi yang sudah Anda lakukan?</p>
                            </div>
                            <div class="email">
                                <textarea type="form-control" placeholder="Berikan Jawaban" rows="7"></textarea>
                            </div>
                            <div style="margin-top: 20px">
                                <p class="para-desc">5. Ceritakan pengalaman Anda yang terkait praktik baik bersikap adil terhadap semua dan setiap murid. Apa tantangan yang Anda hadapi? Bagaimana strategi yang Anda lakukan? Apa hasil dari strategi yang sudah Anda lakukan?</p>
                            </div>
                            <div class="email">
                                <textarea type="form-control" placeholder="Berikan Jawaban" rows="7"></textarea>
                            </div>
                            <div style="margin-top: 20px">
                                <p class="para-desc">6. Ceritakan pengalaman Anda yang terkait praktik baik memberi perhatian dan bantuan terhadap murid yang terlihat mengalami kesulitan. Apa tantangan yang Anda hadapi? Bagaimana strategi yang Anda lakukan? Apa hasil dari strategi yang sudah Anda lakukan?</p>
                            </div>
                            <div class="email">
                                <textarea type="form-control" placeholder="Berikan Jawaban" rows="7"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9 feedback-note" style="display:none">
                    <div class="d-grid" style="margin-top: 40px">
                        <button class="btn btn-primary btn-lg">Kirim Feedback</button>
                    </div>
                </div>

                <!-- <div class="col-lg-5 d-none d-lg-block mt-4 pt-2 mt-sm-0 pt-sm-0">
                    <img src="{{ asset('assets-front/img/custom/Ilustrasi-Guru-Inspiratif-Kontak.png') }}" class="w-100" alt="">
                </div> -->
            </div>
        </div>
    </section>
    <!-- Hero End -->

@endsection

@push('scripts')
    <script type="text/javascript">
        function get_question() {
            $('.loader').show();
            setTimeout(function() {
                $('.loader').hide();
                $('.feedback-note').show();
            }, 3000);
        }
    </script>
        
@endpush