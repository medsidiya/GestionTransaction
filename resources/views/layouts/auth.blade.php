<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Gestion immobilite</title>
  <link rel="shortcut icon" type="image/png" href="../imgs/OFFCIEL-logo-lesty-bleu-copie.png" />
  {{-- <link rel="shortcut icon" type="image/png" href="{{asset('assets/auth/images/logos/favicon.png')}}" /> --}}
  <link rel="stylesheet" href="{{asset('assets/auth/css/styles.min.css')}}" />
  <link rel="stylesheet" href="../css/main.css">
  <link rel="stylesheet" href="../css/all.min.css">    
  <link rel="preconnect" href="{{asset('https://fonts.gstatic.com')}}" >
  <!--  for font awsome -->
  <link rel="stylesheet" href="../css/all.min.css">
  <!-- for font sizing -->
  <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@200;400;500;600;700;800&display=swap" 
  rel="stylesheet">

</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="./index.html" class="text-nowrap logo-img">
            {{-- <img src="{{asset('assets/auth/images/logos/dark-logo.svg')}}" width="180" alt="" /> --}}
            <img src="../imgs/OFFCIEL-logo-lesty-bleu-copie.png" width="180" alt="" />
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Home</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{url('transaction')}}" aria-expanded="false">
                <span>
                  {{-- <i class="ti ti-layout-dashboard"></i> --}}
                  <i class="fa-solid fa-house fa-2x"></i>
                </span>
                <span class="hide-menu">Home page</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">GESTION</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{url('temoin')}}" aria-expanded="false">
                <span>
                  <i class="fa-solid fa-user-tie fa-2x"></i>
                </span>
                <span class="hide-menu">Temoins</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{url('notaire')}}" aria-expanded="false">
                <span>
                  {{-- <i class="ti ti-alert-circle"></i> --}}
                  <i class="fa-solid fa-user-tie fa-2x"></i>
                </span>
                <span class="hide-menu">Notaires</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{url('Vendeur')}}" aria-expanded="false">
                <span>
                  {{-- <i class="ti ti-cards"></i> --}}
                  <i class="fa-solid fa-user-tie fa-2x"></i>
                </span>
                <span class="hide-menu">vendeurs</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{url('acheteur')}}" aria-expanded="false">
                <span>
                  {{-- <i class="ti ti-file-description"></i> --}}
                  <i class="fa-solid fa-user-tie fa-2x"></i>
                </span>
                <span class="hide-menu">Achateurs</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{url('terrain')}}" aria-expanded="false">
                <span>
                  {{-- <i class="ti ti-typography"></i> --}}
                  <i class="fa-solid fa-panorama fa-2x"></i>
                </span>
                <span class="hide-menu">Terrain</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{url('transaction')}}" aria-expanded="false">
                <span>
                  {{-- <i class="ti ti-typography"></i> --}}
                  <i class="fa-solid fa-money-bill-transfer fa-2x"></i>
                  
                </span>
                <span class="hide-menu">transaction</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">AUTH</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./authentication-login.html" aria-expanded="false">
                <span>
                  <i class="ti ti-login"></i>
                </span>
                <span class="hide-menu">Login</span>
              
              <div class="dropdown-menu dropdown-menu-end bg-color-black" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
          </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./authentication-register.html" aria-expanded="false">
                <span>
                  <i class="ti ti-user-plus"></i>
                </span>
                <span class="hide-menu">Register</span>
              </a>
            </li>
            
          </ul>
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      <header class="app-header">
        <nav class="navbar navbar-expand-lg navbar-light chg-bg-clr">
          <ul class="navbar-nav">
            <li class="nav-item d-block d-xl-none">
              <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                <i class="ti ti-menu-2"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-icon-hover" href="javascript:void(0)">
                <i class="ti ti-bell-ringing"></i>
                <div class="notification bg-primary rounded-circle"></div>
              </a>
            </li>
          </ul>
          <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
              <li class="nav-item dropdown">
                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <img src="{{asset('assets/auth/images/profile/user-1.jpg')}}" alt="" width="35" height="35" class="rounded-circle">
                </a>
              </li>
            
              <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>

                <div class="dropdown-menu dropdown-menu-end bg-color-black" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
          </div>
            </ul>
         
        </nav>
      </header>
      <!--  Header End -->
      <div class="container-fluid ">
        @section('content')
            the main content
        @show
      </div>
    </div>
  </div>
  <script src="{{asset('assets/auth/libs/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{asset('assets/auth/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/auth/js/sidebarmenu.js')}}"></script>
  <script src="{{asset('assets/auth/js/app.min.js')}}"></script>
  <script src="{{asset('assets/auth/libs/apexcharts/dist/apexcharts.min.js')}}"></script>
  <script src="{{asset('assets/auth/libs/simplebar/dist/simplebar.js')}}"></script>
  <script src="{{asset('assets/auth/js/dashboard.js')}}"></script>
</body>

</html>