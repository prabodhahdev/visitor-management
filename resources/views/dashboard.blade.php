<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visitx</title>
    <link rel="stylesheet" href='{{asset("css/bootstrap.css")}}'>
    <link rel="stylesheet" href='{{asset("css/dataTables.bootstrap5.min.css")}}'>
    
</head>
<body >

@guest

@yield('content')

@else


<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Vistix <span class="text-danger">.</span> </a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-nav">
            <div class="nav-item text-nowrap">
                <a class="nav-link px-3" href="#">Welcome, {{ Auth::user()->name }}</a>
            </div>
        </div>
    </header>

    <div class="container-fluid">
        <div class="row">
           <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse border-end">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column gap-2 px-3">

            @if(Auth::user()->type == 'Admin')
                <li class="nav-item">
                    <a class="nav-link bg-white shadow-sm border rounded px-3 py-2 fw-semibold text-dark" href="/receptionist">
                        <i class="bi bi-person-badge me-2"></i> Receptionists
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link bg-white shadow-sm border rounded px-3 py-2 fw-semibold text-dark" href="/department">
                        <i class="bi bi-diagram-3 me-2"></i> Departments
                    </a>
                </li>
            @endif

            <li class="nav-item">
                <a class="nav-link bg-white shadow-sm border rounded px-3 py-2 fw-semibold text-dark" href="/visitor">
                    <i class="bi bi-people me-2"></i> Visitors
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link bg-white shadow-sm border rounded px-3 py-2 fw-semibold text-dark" href="{{ route('profile') }}">
                    <i class="bi bi-person-circle me-2"></i> Profile
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link bg-white shadow-sm border rounded px-3 py-2 fw-semibold text-danger" href="{{ route('logout') }}">
                    <i class="bi bi-box-arrow-right me-2"></i> Logout
                </a>
            </li>

        </ul>
    </div>
</nav>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <!--<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">!-->
                @yield('content') 
                <!--</div>!-->
            </main>
        </div>
    </div>    






@endguest

<script src='{{asset("js/jquery.js")}}'></script>
<script src='{{asset("js/jquery.dataTables.min.js")}}'></script> 
<script src='{{asset("js/bootstrap.js")}}'></script>
<script src='{{asset("js/dataTables.bootstrap5.min.js")}}'></script>
</body>
</html>