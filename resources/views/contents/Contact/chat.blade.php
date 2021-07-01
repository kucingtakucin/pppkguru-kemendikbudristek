@extends('layouts.frontend.appsub')

@section('content')
    <!-- Page Title Start -->
    <section class="bg-extra-dark-gray padding-25px-tb page-title-small">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-12 col-xl-8 col-lg-6">
                    <h1 class="alt-font text-white font-weight-500 no-margin-bottom text-center text-lg-left"></h1>
                </div>
                <div
                    class="col-12 col-xl-4 col-lg-6 breadcrumb justify-content-center justify-content-lg-end text-small alt-font md-margin-10px-top">
                    <ul class="xs-text-center">
                        <li><a href="{{ route('home') }}" class="text-white-hover">Beranda</a></li>
                        <li>Kontak</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-chat">
        <div class="container">
            <div class="card">
                <div class="user p-4">
                    <div class="user-title">
                        <h5 class="mb-4">{{ $pengaduan_id->judul }}</h5>
                        <!-- <p class="text-muted mb-0"><i class="mdi mdi-circle text-success align-middle mr-1"></i> Active now</p> -->
                        {{-- <p class="text-muted mb-0">
                            <i class="fas fa-circle text-success align-middle mr-1"></i> Active now
                        </p> --}}
                        <div class="print-sec d-flex">
                            @if ($pengaduan_id->status == '1')
                                <form class="form-inline" action="{{ route('contact.close_chat', $pengaduan_id->tiket) }}"
                                    method="post">
                                    @csrf @method('post')
                                    <button class="print-btn btn-sm mr-3" type="submit" id="selesai_pengaduan">
                                        <i class="fas fa-ban"></i>
                                        <span>Selesai Pengaduan</span>
                                    </button>
                                </form>
                            @endif
                            <!-- <button class="print-btn" onclick="printJS('chat_section', 'html')">
                                                                                                                                                                                                <i class="fas fa-print"></i>
                                                                                                                                                                                                <span>Print</span>
                                                                                                                                                                                            </button> -->
                        </div>
                    </div>
                </div>
                <div>
                    <div class="chat-conversation p-4">
                        <ul id="chat_section" class="list-unstyled mb-0 overflow-auto" style="max-height: 486px;">
                            {{-- <li>
                                <div class="chat-day-title">
                                    <span class="title">Today</span>
                                </div>
                            </li> --}}
                            @php
                                $no = 1;
                            @endphp

                            @foreach ($pengaduan as $adu)

                                @if ($adu->who == 1)
                                    <li class="right">
                                        <div class="conversation-list">
                                            <div class="ctext-wrap">
                                                <div class="conversation-name">Admin SIM PPPK KEMDIKBUDRISTEK</div>
                                                <p>
                                                    {{ $adu->isi }}
                                                </p>
                                                <p class="chat-time mb-0"><i class="far fa-clock align-middle mr-1"></i>
                                                    {{ $adu->created_at }}</p>
                                            </div>

                                        </div>
                                    </li>
                                @else
                                    <li>
                                        <div class="conversation-list">
                                            <div class="ctext-wrap">
                                                <div class="conversation-name">{{ $adu->nama }}</div>
                                                <p>
                                                    {{ $adu->isi }}
                                                </p>

                                                <p class="chat-time mb-0"><i class="far fa-clock align-middle mr-1"></i>
                                                    {{ $adu->created_at }}</p>
                                            </div>
                                        </div>
                                    </li>
                                    @php
                                        $no++;
                                    @endphp

                                @endif
                            @endforeach
                        </ul>
                    </div>
                    <hr>
                    <div class="p-3 chat-input-section">
                        <div class="row col-12">
                            <form id="form_send" action="{{ route('contact.send', $pengaduan_id) }}"
                                class="form-inline col" method="post">
                                @csrf @method('post')
                                <div class="row col-12">
                                    <div class="col">
                                        <div class="position-relative">
                                            <input type="text" autocomplete="off" style="width:100%" name="isi"
                                                class="form-control chat-input" @if ($pengaduan_id->status == '0') disabled @else required @endif
                                                placeholder="   @if ($pengaduan_id->status ==
                                        '0') Pengaduan telah ditutup @else Tuliskan Pesan Anda...@endif">
                                        </div>
                                    </div>
                                    @if ($pengaduan_id->status == '1')
                                        <div class="col-auto">
                                            <button type="submit" id="kirim_pesan"
                                                class="btn btn-primary btn-rounded chat-send w-md waves-effect waves-light"><span
                                                    class="d-none d-sm-inline-block mr-2">
                                                    Kirim
                                                </span> <i class="far fa-paper-plane"></i>
                                            </button>
                                            <button id="loader"
                                                class="btn btn-primary btn-rounded chat-send w-md waves-effect waves-light"
                                                type="button" disabled>
                                                <span class="spinner-border spinner-border-sm" role="status"
                                                    aria-hidden="true"></span>
                                                Loading...
                                            </button>
                                        </div>
                                    @endif
                                </div>
                            </form>
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
            $('#loader').hide()

            var chat = document.getElementById("chat_section");
            $("#chat_section").animate({
                scrollTop: chat.scrollHeight - chat.clientHeight
            }, 1500)

            $('#form_send').submit(function(event) {
                event.preventDefault()
                let formData = new FormData(this);
                formData.append('_token', '{{ csrf_token() }}')
                $.ajax({
                    url: $(this).attr('action'),
                    type: 'post',
                    data: formData,
                    processData: false,
                    contentType: false,
                    beforeSend: function() {
                        $('#loader').show()
                        $('#kirim_pesan').hide()
                    },
                    success: function(data) {
                        Swal.fire({
                            title: 'Berhasil!',
                            text: `${data.message}`,
                            icon: 'success',
                            showConfirmButton: false,
                            timer: 1000
                        })
                        setTimeout(() => {
                            location.reload()
                        }, 1000);

                    },
                    error: function(error) {
                        console.log(error);
                    }
                })
            })

            $('#selesai_pengaduan').click(function(event) {
                event.preventDefault()
                Swal.fire({
                    title: 'Apakah anda yakin?',
                    text: "Anda tidak bisa mengembalikannya!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ya, tutup pengaduan!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        Swal.fire({
                            title: 'Berhasil!',
                            text: 'Pengaduan berhasil ditutup',
                            icon: 'success',
                            showConfirmButton: false,
                            timer: 1000
                        })
                        setTimeout(() => {
                            $(this).parent().submit()
                        }, 1000);
                    }
                })
            })
        })
    </script>
@endpush
