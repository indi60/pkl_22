<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="clear">
                            <span class="block m-t-xs">
                                <strong class="font-bold">Example user</strong>
                            </span> <span class="text-muted text-xs block">Example menu <b class="caret"></b></span>
                        </span>
                    </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a href="#">Logout</a></li>
                    </ul>
                </div>
                <div class="logo-element">
                    IN+
                </div>
            </li>
<!--             <li class="active"> -->
            <li class="{{ isActiveRoute('dashboard') }}">
                <a href="{{ url('/dashboard') }}"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboard</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li class="active"><a href="{{ url('/dashboard') }}">Home</a></li>
                            <li><a href="{{ url('/reolisasi') }}">Reolisasi Anggaran</a></li>
                            <li><a href="{{ url('/ptk') }}">Pendidik & Tenaga Kependidikan</a></li>
                            <li><a href="{{ url('/bantuan') }}">Program Bantuan</a></li>
                            <li><a href="{{ url('/absensi') }}">Absensi Pendis</a></li>
                            <li><a href="{{ url('/agenda') }}">Agenda Pendis</a></li>
                        </ul>
            </li>
            <li class="{{ isActiveRoute('main') }}">
                <a href="{{ url('/') }}"><i class="fa fa-th-large"></i> <span class="nav-label">Main view</span></a>
            </li>
            <li class="{{ isActiveRoute('minor') }}">
                <a href="{{ url('/minor') }}"><i class="fa fa-th-large"></i> <span class="nav-label">Minor view</span> </a>
            </li>
<!--             <li class="{{ isActiveRoute('home') }}">
                <a href="{{ url('/home') }}"><i class="fa fa-th-large"></i> <span class="nav-label">Home</span> </a>                
            </li> -->
        </ul>

    </div>
</nav>
