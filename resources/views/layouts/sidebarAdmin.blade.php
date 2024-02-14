<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Dashboard Admin">
  <title>Admin Dashboard</title>

  {{-- trix --}}
  <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.8/dist/trix.css">
  <script type="text/javascript" src="https://unpkg.com/trix@2.0.8/dist/trix.umd.min.js"></script>

      <!-- Scripts -->
  @vite(['resources/sass/app.scss', 'resources/js/app.js'])
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <style>
    * {
  font-family: "Poppins", sans-serif;
  }

    trix-toolbar [data-trix-button-group="file-tools"]{
      display: none;
    }

    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }

    .b-example-divider {
      height: 3rem;
      background-color: #181D31;
      border: solid #181D31;
      border-width: 1px 0;
      box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
    }

    .b-example-vr {
      flex-shrink: 0;
      width: 1.5rem;
      height: 100vh;
    }

    .bi {
      vertical-align: -.125em;
      fill: currentColor;
    }

    .nav-scroller {
      position: relative;
      z-index: 2;
      height: 2.75rem;
      overflow-y: hidden;
    }

    .nav-scroller .nav {
      display: flex;
      flex-wrap: nowrap;
      padding-bottom: 1rem;
      margin-top: -1px;
      overflow-x: auto;
      text-align: center;
      white-space: nowrap;
      -webkit-overflow-scrolling: touch;
    }
  </style>

  <link href="{{asset('css/dashboard.css')}}" rel="stylesheet">
</head>

<body>

  <header class="navbar navbar-dark sticky-top flex-md-nowrap p-0 shadow" style="background-color: #181D31">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6 fw-bold" href="#">Arct.</a>
    <ul class="navbar-nav ms-auto">

    </ul>

    <div class="navbar-nav navbar-expand-md">
      <div class="nav-item text-nowrap">
          <a id="navbarDropdown" class="nav-link px-3" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
              {{ Auth::user()->name }}
          </a>
      </div>
  </div>
  
  </header>

  <div class="container-fluid">
    <div class="row">
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div class="position-sticky pt-3 sidebar-sticky">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link {{Request::is('dashboard/home') ? 'active' : ''}}" aria-current="page" href="/dashboard/home">
                <span data-feather="home" class="align-text-bottom"></span>
                Dashboard
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{Request::is('dashboard/post*') ? 'active' : ''}}" href="/dashboard/post">
                <span data-feather="file" class="align-text-bottom"></span>
                Posts
              </a>
            </li>
              <li class="nav-item mt-auto">
                <a class="nav-link" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                <span data-feather="log-out" class="align-text-bottom"></span>
                    {{ __('Logout') }}
                </a>
      
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
              </li>
          </ul>
        </div>
      </nav>

  <main class="main">
    @yield('content')
  </main>



  <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"
    integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"
    integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha"
    crossorigin="anonymous"></script>
  <script src="{{asset('js/dashboard.js')}}"></script>
</body>

</html>