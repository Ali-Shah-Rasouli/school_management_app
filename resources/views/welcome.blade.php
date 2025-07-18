<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Repsonsive Navbar</title>
     
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <!-- Navbar starts here-->
<nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">
        <a class="navbar-brand me-auto" href="#"><img src="images/logo.png" alt=""></a> &numsp;
        <a class="navbar-brand me-auto" href="#"><h2> N L C</h2> </a>

     <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Logo</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
            <li class="nav-item">
                <a class="nav-link mx-lg-2 active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link mx-lg-2" href="#">Courses</a>
            </li>
            <li class="nav-item">
                <a class="nav-link mx-lg-2" href="#">Services</a>
            </li>
            <li class="nav-item">
                <a class="nav-link mx-lg-2" href="#">Contact Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link mx-lg-2" href="#">Teachers</a>
            </li>
            <li class="nav-item">
                <a class="nav-link mx-lg-2" href="#">About Us</a>
            </li>
            </ul>
        </div>
        </div>
        <a href="{{ route('login') }}" class="login-button">Login</a>
        
            <button class="navbar-toggler pe-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>
<!-- Navbar ended here --> 

<!-- main section starts here -->
<section class="hero-section">
    <!-- <div><img src="images/bg.jpg" alt=""> -->
   <div class=" container d-flex align-items-center justify-content-center fs-1 text-black flex-column">
    <h1>Welcome to NukhBagan Learning Center</h1>
   </div>
</section>

<!-- main section ended here -->






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>