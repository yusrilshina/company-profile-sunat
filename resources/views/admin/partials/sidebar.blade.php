<div class="sidebar" data-background-color="dark">
    <div class="sidebar-logo">
        <!-- Logo Header -->
        <div class="logo-header" data-background-color="dark">
            <a href="index.html" class="logo">
                <img src="{{ asset('assets') }}/images/logo.png" alt="navbar brand" class="navbar-brand me-2" height="30" /> 
            </a>
            <h5 class="text-white my-auto"> Sahabat Sunat</h5>
            <div class="nav-toggle">
                <button class="btn btn-toggle toggle-sidebar">
                    <i class="gg-menu-right"></i>
                </button>
                <button class="btn btn-toggle sidenav-toggler">
                    <i class="gg-menu-left"></i>
                </button>
            </div>
            <button class="topbar-toggler more">
                <i class="gg-more-vertical-alt"></i>
            </button>
        </div>
        <!-- End Logo Header -->
    </div>
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <ul class="nav nav-secondary">
                {{-- <li class="nav-item active">
                    <a href="dashboard" data-bs-toggle="collapse" href="#dashboard" class="collapsed" aria-expanded="false">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                    
                </li> --}}
                <li class="nav-item active">
                    <a href="{{ route('dashboard-galery.index') }}"  class="collapsed" aria-expanded="false">
                        <i class="fas fa-file"></i>
                        <p>Galery</p>
                    </a>
                    
                </li>
               
                
            </ul>
        </div>
    </div>
</div>
