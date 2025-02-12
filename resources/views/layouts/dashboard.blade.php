<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>GastroCare</title>
  <link rel="shortcut icon" type="image/png" href="{{ asset('img/logoSP.png') }}" />
  <link rel="stylesheet" href="{{ asset('css/styles.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/custom.css') }}" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/themify-icons/0.1.2/css/themify-icons.min.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div class="scroll-sidebar" data-simplebar>
        <div class="d-flex mb-4 align-items-center justify-content-center">
          <div class="d-flex align-items-center">
              <a href="index.html" class="text-nowrap logo-img ms-0 ms-md-1">
                  <img src="{{ asset('img/logoSP.png') }}" width="100" alt="Logo Sistem Pakar">
              </a>
              <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer ms-3" id="sidebarCollapse" style="position: absolute; top: 10px; right: 10px;">
                  <i class="ti ti-x fs-8"></i>
              </div>
          </div>
      </div>
      <div class="text-center mt-2">
          <span class="brand-text font-weight-bold" style="font-size: 2rem; font-weight: bold; display: block;">
              <span style="color: #AE445A;">Gastro</span><span style="color: #740938;">Care</span>
          </span>
      </div>      
        <!-- Sidebar navigation-->
        @include('layouts.sidebar')
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
   
   </nav>
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      <header class="app-header">
        <nav class="navbar navbar-expand-lg navbar-light">         
          <ul class="navbar-nav">
            <li class="nav-item d-block d-xl-none">
              <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                <i class="ti ti-menu-2"></i>
              </a>
            </li>
          </ul>
          <div class="navbar-collapse justify-content-end px-5" id="navbarNav">
            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
              <li class="nav-item dropdown">
                <div class="MyProfileAva nav-link nav-icon-hover d-flex align-items-center" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown" aria-expanded="false">
                  <div 
                    class="user-avatar d-flex justify-content-center align-items-center rounded-circle">
                    {{
                      collect(explode(' ', Auth::user()->name))
                        ->take(2)
                        ->map(function ($word) { return strtoupper(substr($word, 0, 1)); })
                        ->implode('')
                    }}
                  </div>
                  <span class="ms-2 text-dark user-name">
                    {{ Auth::user()->name }}
                  </span>
                </div>            
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                  <div class="message-body">
                    <a href="{{ route('logout') }}" class="btn btn-outline-primary mx-3 mt-2 d-block shadow-none"><i class="fa-solid fa-arrow-right-from-bracket"></i> Logout</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      
      <!--  Header End -->
      <div class="container-fluid">
        <!--  Row 1 -->
        @yield('content')
      </div>
      @include('layouts.footer')
    </div>
  </div>

  <script src="{{ asset('libs/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('js/sidebarmenu.js') }}"></script>
  <script src="{{ asset('libs/apexcharts/dist/apexcharts.min.js') }}"></script>
  <script src="{{ asset('libs/simplebar/dist/simplebar.js') }}"></script>
  <script src="{{ asset('js/dashboard.js') }}"></script>
  <script src="{{ asset('js/adminlte.min.js') }}"></script>
  <script src="{{ asset('js/app.min.js') }}"></script>
</body>

</html>