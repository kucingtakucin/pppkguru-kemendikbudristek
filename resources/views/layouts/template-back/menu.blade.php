<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                @if (Auth::user()->role_id == '0')
                    <li class="menu-title" key="t-menu">Menu</li>
                    <li>
                        <a href="{{ route('admin.dashboard') }}" class="waves-effect">
                            <i class="bx bx-home-circle"></i>
                            {{-- <span class="badge badge-pill badge-info float-right">04</span> --}}
                            <span key="t-dashboards">Dashboard</span>
                        </a>
                    </li>

                    <li class="menu-title" key="t-informasi">Informasi</li>
                    {{-- <li>
                    <a href="{{ route('admin.ref-kategori-pengaduan.index') }}" class="waves-effect">
                        <i class="bx bx-chat"></i>
                        <span key="t-chat">Kategori Pengaduan</span>
                    </a>
                </li> --}}
                    <li>
                        <a href="{{ route('admin.plotting.index') }}" class="waves-effect">
                            <i class="bx bx-stats"></i>
                            <span key="t-chat">Plotting</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('admin.pengaduan.index') }}" class="waves-effect">
                            <i class="bx bx-chat"></i>
                            <span key="t-chat">Pengaduan</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.faq.index') }}" class="waves-effect">
                            <i class="bx bx-message"></i>
                            <span key="t-chat">FAQ</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('admin.operator.index') }}" class="waves-effect">
                            <i class="bx bx-user"></i>
                            <span key="t-chat">Operator</span>
                        </a>
                    </li>
                @else
                    <li class="menu-title" key="t-menu">Menu</li>
                    <li>
                        <a href="{{ route('operator.dashboard') }}" class="waves-effect">
                            <i class="bx bx-home-circle"></i>
                            {{-- <span class="badge badge-pill badge-info float-right">04</span> --}}
                            <span key="t-dashboards">Dashboard</span>
                        </a>
                    </li>

                    <li class="menu-title" key="t-informasi">Informasi</li>
                    {{-- <li>
                <a href="{{ route('admin.ref-kategori-pengaduan.index') }}" class="waves-effect">
                    <i class="bx bx-chat"></i>
                    <span key="t-chat">Kategori Pengaduan</span>
                </a>
            </li> --}}
                    <li>
                        <a href="{{ route('operator.pengaduan.index') }}" class="waves-effect">
                            <i class="bx bx-chat"></i>
                            <span key="t-chat">Pengaduan</span>
                        </a>
                    </li>
                    {{-- <li>
                <a href="{{ route('admin.plotting.index') }}" class="waves-effect">
                    <i class="bx bx-chat"></i>
                    <span key="t-chat">Plotting</span>
                </a>
            </li> --}}
                @endif

                {{-- <li>
                    <a href="{{ route('admin.deskripsi') }}" class="waves-effect">
                        <i class="bx bx-calendar"></i>
                        <span key="t-calendar">Deskripsi Website</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('admin.alasan_program') }}" class="waves-effect">
                        <i class="bx bx-calendar"></i>
                        <span key="t-calendar">Alasan Program</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('admin.infografis') }}" class="waves-effect">
                        <i class="bx bx-calendar"></i>
                        <span key="t-calendar">Infografis</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('admin.dokumen') }}" class="waves-effect">
                        <i class="bx bx-calendar"></i>
                        <span key="t-calendar">Dokumen</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('admin.kontak') }}" class="waves-effect">
                        <i class="bx bx-chat"></i>
                        <span key="t-chat">Kontak</span>
                    </a>
                </li> --}}




            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End
