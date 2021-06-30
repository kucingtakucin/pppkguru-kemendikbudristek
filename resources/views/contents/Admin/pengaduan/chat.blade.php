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
                                <h4 class="card-title mb-4">Form Balas Pengaduan</h4>
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
                                    <div class="row">
                                        <form action="{{ route('admin.pengaduan.send', $pengaduan->id) }}" id="form_send"
                                            method="post" class="form-inline">
                                            @csrf @method('post')
                                            <div class="col">
                                                <div class="position-relative">
                                                    <input type="text" name="isi" required
                                                        class="form-control chat-input @error('balasan') is-invalid @enderror"
                                                        placeholder="Enter Message...">
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
                                                <button type="submit"
                                                    class="btn btn-primary btn-rounded chat-send w-md waves-effect waves-light"><span
                                                        class="d-none d-sm-inline-block mr-2">Send</span> <i
                                                        class="mdi mdi-send"></i></button>
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
                    $.ajax({
                        url: '{{ route('admin.pengaduan.get_chat', $pengaduan->id) }}',
                        type: 'get',
                        success: function(data) {
                            let html = ''
                            console.log(data.data.pengaduan_riwayat)
                            data.data.pengaduan_riwayat.map(element => {
                                if (element.who != '{{ Auth::id() }}') {
                                    html += `
                            <li>
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
                                        <div class="conversation-name">Admin</div>
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
                        success: function(data) {
                            console.log(data)
                            initChat();
                        },
                        error: function(error) {
                            console.log(error)
                        }
                    })
                    // simpleBar.unMount()
                    // $('.simplebar-c$('#chat_section').ontent').append(`

                })
            })
        </script>
    @endpush
