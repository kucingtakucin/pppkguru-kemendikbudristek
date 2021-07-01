@extends('layouts.template-back')

@section('content')
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <h4 class="mb-0 font-size-18">Pengaduan</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Informasi</a></li>
                                    <li class="breadcrumb-item active">Pengaduan</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-lg-3">
                        <div class="card bg-soft-primary">
                            <div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="text-primary p-3">
                                            <h5 class="text-primary">Pengaduan !</h5>
                                            <p>Data Terkait Pengaduan</p>
                                        </div>
                                    </div>
                                    <div class="col-12 align-self-end">
                                        <img src="{{ asset('assets/images/profile-img.png') }}" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-9">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Judul: {{ $pengaduan->judul }} </h4>
                                {{-- <button class="btn btn-info">Print</button> --}}
                                @if ($pengaduan->status == '1')
                                    <form action="{{ route('admin.pengaduan.close_chat', $pengaduan->id) }}"
                                        class="form-inline d-inline" method="post">
                                        @csrf @method('post')
                                        <button class="btn btn-danger d-inline" id="selesai_pengaduan">
                                            <i class="fas fa-ban"></i> Selesai pengaduan
                                        </button>
                                    </form>
                                @endif
                                <div class="chat-conversation p-3">
                                    <ul id="chat_section" class="list-unstyled mb-0 overflow-auto"
                                        style="max-height: 486px;">
                                        <li>
                                            <div class="chat-day-title">
                                                <span class="title">Today</span>
                                            </div>
                                        </li>
                                        {{-- @foreach ($pengaduan->pengaduan_riwayat as $riwayat) --}}
                                        {{-- <li>
                                            <div class="conversation-list">
                                                <div class="dropdown">

                                                    <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false">
                                                        <i class="bx bx-dots-vertical-rounded"></i>
                                                    </a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Copy</a>
                                                        <a class="dropdown-item" href="#">Save</a>
                                                        <a class="dropdown-item" href="#">Forward</a>
                                                        <a class="dropdown-item" href="#">Delete</a>
                                                    </div>
                                                </div>
                                                <div class="ctext-wrap">
                                                    <div class="conversation-name">{{ $pengaduan->nama }}</div>
                                                    <p>
                                                        {{ $pengaduan->pengaduan_riwayat[$i]->isi }}
                                                    </p>
                                                    <p class="chat-time mb-0"><i
                                                            class="bx bx-time-five align-middle mr-1"></i>
                                                        {{ $pengaduan->pengaduan_riwayat[$i]->created_at }}</p>
                                                </div>

                                            </div>
                                        </li>
                                        <li class="right">
                                            <div class="conversation-list">
                                                <div class="dropdown">

                                                    <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false">
                                                        <i class="bx bx-dots-vertical-rounded"></i>
                                                    </a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Copy</a>
                                                        <a class="dropdown-item" href="#">Save</a>
                                                        <a class="dropdown-item" href="#">Forward</a>
                                                        <a class="dropdown-item" href="#">Delete</a>
                                                    </div>
                                                </div>
                                                <div class="ctext-wrap">
                                                    <div class="conversation-name">Henry Wells</div>
                                                    <p>
                                                        Hi, How are you? What about our next meeting?
                                                    </p>

                                                    <p class="chat-time mb-0"><i
                                                            class="bx bx-time-five align-middle mr-1"></i> 10:02</p>
                                                </div>
                                            </div>
                                        </li> --}}
                                        {{-- @endforeach --}}

                                    </ul>
                                </div>
                                <div class="p-3 chat-input-section">
                                    <div class="row ">
                                        <form action="{{ route('operator.pengaduan.send', $pengaduan->id) }}"
                                            id="form_send" method="post" class="form-inline">
                                            @csrf @method('post')
                                            <div class="col">
                                                <div class="position-relative">
                                                    <input type="text" style="width: 100%" name="isi" @if ($pengaduan->status == '0') disabled @else required @endif
                                                        class="form-control isi chat-input @error('balasan') is-invalid @enderror"
                                                        placeholder=" @if ($pengaduan->status
                                                == '0') Pengaduan telah ditutup @else Tuliskan Pesan Anda...@endif">
                                                    @error('balasan')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                    {{-- <div class="chat-input-links">
                                                        <ul class="list-inline mb-0">
                                                            <li class="list-inline-item"><a href="#" data-toggle="tooltip"
                                                                    data-placement="top" title="Emoji"><i
                                                                        class="mdi mdi-emoticon-happy-outline"></i></a></li>
                                                            <li class="list-inline-item"><a href="#" data-toggle="tooltip"
                                                                    data-placement="top" title="Images"><i
                                                                        class="mdi mdi-file-image-outline"></i></a></li>
                                                            <li class="list-inline-item"><a href="#" data-toggle="tooltip"
                                                                    data-placement="top" title="Add Files"><i 
                                                                        class="mdi mdi-file-document-outline"></i></a></li>
                                                        </ul>
                                                    </div> --}}
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                @if ($pengaduan->status == '1')
                                                    <button type="submit"
                                                        class="btn btn-primary btn-rounded chat-send w-md waves-effect waves-light"><span
                                                            class="d-none d-sm-inline-block mr-2">Send</span> <i
                                                            class="mdi mdi-send"></i></button>
                                                    <button id="loader"
                                                        class="btn btn-primary btn-rounded chat-send w-md waves-effect waves-light"
                                                        type="button" disabled>
                                                        <span class="spinner-border spinner-border-sm" role="status"
                                                            aria-hidden="true"></span>
                                                        Loading...
                                                    </button>
                                                @endif
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->
    @endsection

    @push('scripts')
        <script>
            $(document).ready(function() {
                function initChat() {
                    $('#loader').hide()
                    $.ajax({
                        url: '{{ route('operator.pengaduan.get_chat', $pengaduan->id) }}',
                        type: 'get',
                        success: function(data) {
                            let html = ''
                            console.log(data.data.pengaduan_riwayat)
                            $('.isi').val('')
                            data.data.pengaduan_riwayat.map(element => {
                                if (element.who != '1') {
                                    html += `
                            <li>
                                <div class="conversation-list">
                                    <div class="ctext-wrap">
                                        <div class="conversation-name">{{ $pengaduan->nama }}</div>
                                        <p>
                                            ${element.isi}
                                        </p>
                                        <p class="chat-time mb-0"><i
                                                class="bx bx-time-five align-middle mr-1"></i>
                                            ${element.created_at}</p>
                                    </div>

                                </div>
                            </li>
                                `
                                } else {
                                    html += `
                            <li class="right">
                                <div class="conversation-list">
                                    <div class="ctext-wrap">
                                        <div class="conversation-name">{{ Auth::user()->name }}</div>
                                        <p>
                                            ${element.isi}
                                        </p>
                                        <p class="chat-time mb-0"><i
                                                class="bx bx-time-five align-middle mr-1"></i>
                                            ${element.created_at}</p>
                                    </div>

                                </div>
                            </li>
                                `
                                }

                            })
                            $('#chat_section').html(html)
                        },
                        error: function(data) {
                            console.log(data)
                        }
                    })
                    setTimeout(() => {
                        var chat = document.getElementById("chat_section");
                        $("#chat_section").animate({
                            scrollTop: chat.scrollHeight - chat.clientHeight
                        }, 1500)

                    }, 1000);

                }
                initChat();

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
                            $('#kirim_pesan').show()
                            Swal.fire({
                                title: 'Berhasil!',
                                text: `${data.message}`,
                                icon: 'success',
                                showConfirmButton: false,
                                timer: 1000
                            })
                            // setTimeout(() => {
                            //     location.reload()
                            // }, 1000);
                            initChat();
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
