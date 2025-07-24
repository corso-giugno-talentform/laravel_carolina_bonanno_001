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
        <nav class="container-fluid bg-body-tertiary shadow d-flex flex-wrap justify-content-center py-3"> <a
                href="{{ route('homepage') }}"
                class="d-flex align-items-center mb-3 mb-md-0 me-md-auto mx-4 link-body-emphasis text-decoration-none">
                <img src="/images/logo.svg" alt="logo" width="80px">
            </a>
            <ul class="nav nav-pills mx-4">
                <li class="nav-item"><a href="{{ route('homepage') }}" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="{{ route('about') }}" class="nav-link">Chi sono</a></li>
                <li class="nav-item"><a href="{{ route('services') }}" class="nav-link">Servizi</a></li>
                <li class="nav-item"><a href="{{ route('contacts') }}" class="nav-link active"
                        aria-current="page">Contattami</a></li>
            </ul>
        </nav>
    </header>

    <div class="container m-5">
        <h1 class="text-center">Hai un'idea? Contattami</h1>
        <form>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Il tuo nome</label>
                <input type="name" class="form-control" id="exampleFormControlInput1" placeholder="Il tuo nome...">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">La tua email</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Dimmi tutto</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <button type="Submit" class="btn btn-primary">Invia</button>
        </form>
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
