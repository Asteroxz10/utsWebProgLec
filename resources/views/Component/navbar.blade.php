<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('document_title')</title>
    <!-- CSS only -->
<!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="bg-warning text-white text-center p-5 mb-0">
        <h1>Giant Book Supplier</h1>
    </div>
    <nav class="navbar navbar-expand-lg bg-light p-2">
    <div class="container-fluid">
        <div class="collapse navbar-collapse nav justify-content-center" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link  text-primary" href="/">Home</a>
                <div class="dropdown mr-1">
                    
                    <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                        <ul class="navbar-nav">
                          <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-primary" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Category
                            </a>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="/category/1">Adventure Stories</a></li>
                              <li><a class="dropdown-item" href="/category/2">Fantasy</a></li>
                              <li><a class="dropdown-item" href="/category/3">Horror</a></li>
                              <li><a class="dropdown-item" href="/category/4">Crime</a></li>
                            </ul>
                          </li>
                        </ul>
                      </div>
                </div>
                <a class="nav-link  text-primary" href="/publishers/1">Publisher</a>
                <a class="nav-link  text-primary" href="/contact">Contact</a>
            </div>
        </div>
    </div>
    </nav>

    @yield('body')
</body>
</html>
