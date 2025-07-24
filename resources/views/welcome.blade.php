<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portfolio | Carolina Bonanno</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
    <header>
        <nav class="container-fluid bg-body-tertiary shadow d-flex flex-wrap justify-content-center py-3">
            <a href="{{ route('homepage') }}"
                class="d-flex align-items-center mb-3 mb-md-0 me-md-auto mx-4 link-body-emphasis text-decoration-none">
                <img src="/images/logo.svg" alt="logo" width="80px">
            </a>
            <ul class="nav nav-pills mx-4">
                <li class="nav-item"><a href="{{ route('homepage') }}" class="nav-link active"
                        aria-current="page">Home</a></li>
                <li class="nav-item"><a href="{{ route('about') }}" class="nav-link">Chi sono</a></li>
                <li class="nav-item"><a href="{{ route('services') }}" class="nav-link">Servizi</a></li>
                <li class="nav-item"><a href="{{ route('contacts') }}" class="nav-link">Contattami</a></li>
            </ul>
        </nav>
    </header>
    <div id="carouselExampleAutoplaying" class="carousel slide w-100" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://picsum.photos/id/1/1920/1080?grayscale" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://picsum.photos/id/2/1920/1080?grayscale" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://picsum.photos/id/3/1920/1080?grayscale" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="container pt-5 pb-1">
        <h1 class="text-center fw-bold pt-4">Ciao, sono Carolina!</h1>
        <h2 class="text-center">Web Designer & Developer</h2>
    </div>
    <div class="container py-5 d-flex flex-column align-items-center">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
            ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
            nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
            anim id est laborum.</p>
        <a href="/about"><button type="button" class="btn btn-primary mt-5">Scopri di
                più</button></a>
    </div>

    <footer class="py-3 my-4">
        <ul class="nav justify-content-center border-bottom pb-3 mb-3">
            <li class="nav-item"><a href="{{ route('about') }}" class="nav-link px-2 text-body-secondary">Chi sono</a>
            </li>
            <li class="nav-item"><a href="{{ route('services') }}" class="nav-link px-2 text-body-secondary">Servizi</a>
            </li>
            <li class="nav-item"><a href="{{ route('contacts') }}"
                    class="nav-link px-2 text-body-secondary">Contattami</a></li>
        </ul>
        <p class="text-center text-body-secondary">© 2025 Carolina Bonanno</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous">
    </script>
</body>

</html>
