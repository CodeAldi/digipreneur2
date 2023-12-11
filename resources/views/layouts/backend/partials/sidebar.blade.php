<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="index.html" class="app-brand-link">
            {{-- <span class="app-brand-logo demo">
            </span> --}}
            <span class="app-brand-text demo menu-text fw-bolder ms-2">{{ config('app.name') }}</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboard -->
        <li class="menu-item @if(Request::RouteIs('dashboard')) active @endif">
            <a href="{{ route('dashboard') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div>Dashboard</div>
            </a>
        </li>
        @if (Auth::user()->hasRole('admin'))
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">User</span>
        </li>
        <li class="menu-item @if(Request::RouteIs('admin.instruktur.*')) active @endif">
            <a href="{{ route('admin.instruktur.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-user-circle"></i>
                <div >Instruktur</div>
            </a>
        </li>
        <li class="menu-item @if(Request::RouteIs('admin.peserta.*')) active @endif">
            <a href="{{ route('admin.peserta.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-group"></i>
                <div >Peserta</div>
            </a>
        </li>
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Materi</span>
        </li>
        <li class="menu-item @if(Request::RouteIs('admin.materi.*')) active @endif">
            <a href="{{ route('admin.materi.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-library"></i>
                <div >Materi</div>
            </a>
        </li>
        <li class="menu-item @if(Request::RouteIs('admin.enroll.instruktur.*')) active @endif">
            <a href="{{ route('admin.enroll.instruktur.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-user-check"></i>
                <div >Enrollment Instruktur</div>
            </a>
        </li>
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Pre & Post Test</span>
        </li>
        <li class="menu-item @if(Request::RouteIs('admin.enroll.pratest')) active @endif">
            <a href="{{ route('admin.enroll.instruktur.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-hourglass-top"></i>
                <div>Pre Test</div>
            </a>
        </li>
        <li class="menu-item @if(Request::RouteIs('admin.posttest')) active @endif">
            <a href="{{ route('admin.enroll.instruktur.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-hourglass-bottom"></i>
                <div>Post Test</div>
            </a>
        </li>
        @elseif (Auth::user()->hasRole('instruktur'))
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Materi Dan Penugasan</span>
        </li>
        <li class="menu-item @if(Request::RouteIs('admin.materi.*')) active @endif">
            <a href="{{ route('admin.materi.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-library"></i>
                <div>Materi</div>
            </a>
        </li>
        <li class="menu-item @if(Request::RouteIs('admin.enroll.instruktur.*')) active @endif">
            <a href="{{ route('admin.enroll.instruktur.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-task"></i>
                <div>Penugasan</div>
            </a>
        </li>
        <li class="menu-item @if(Request::RouteIs('admin.enroll.instruktur.*')) active @endif">
            <a href="{{ route('admin.enroll.instruktur.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-check"></i>
                <div>Penilaian</div>
            </a>
        </li>
        @elseif (Auth::user()->hasRole('peserta'))
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">learning</span>
        </li>
        <li class="menu-item @if(Request::RouteIs('admin.materi.*')) active @endif">
            <a href="{{ route('admin.materi.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-library"></i>
                <div>Materi</div>
            </a>
        </li>
        <li class="menu-item @if(Request::RouteIs('admin.enroll.instruktur.*')) active @endif">
            <a href="{{ route('admin.enroll.instruktur.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-task"></i>
                <div>Tugas</div>
            </a>
        </li>
        <li class="menu-item @if(Request::RouteIs('admin.enroll.instruktur.*')) active @endif">
            <a href="{{ route('admin.enroll.instruktur.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-hourglass-top"></i>
                <div>Pre Test</div>
            </a>
        </li>
        <li class="menu-item @if(Request::RouteIs('admin.enroll.instruktur.*')) active @endif">
            <a href="{{ route('admin.enroll.instruktur.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-hourglass-bottom"></i>
                <div>Post Test</div>
            </a>
        </li>
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Entepreneur</span>
        </li>
        <li class="menu-item @if(Request::RouteIs('admin.enroll.instruktur.*')) active @endif">
            <a href="{{ route('admin.enroll.instruktur.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-store"></i>
                <div>Katalog Produk ku</div>
            </a>
        </li>
        <!-- Layouts -->
        {{-- <li class="menu-item active open">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-layout"></i>
                <div>Layouts</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item active">
                    <a href="#" class="menu-link">
                        <div>Fluid</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="#" class="menu-link">
                        <div>Blank</div>
                    </a>
                </li>
            </ul>
        </li> --}}
        @endif
    </ul>
</aside>