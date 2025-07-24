<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portfolio | Carolina Bonanno</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>

<body>
    <header>
        <nav class="container-fluid bg-body-tertiary shadow d-flex flex-wrap justify-content-center py-3"> <a
                href="/"
                class="d-flex align-items-center mb-3 mb-md-0 me-md-auto mx-4 link-body-emphasis text-decoration-none">
                <img src="/images/logo.svg" alt="logo" width="80px"></a>
            <ul class="nav nav-pills mx-4">
                <li class="nav-item"><a href="/" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="/about" class="nav-link">Chi sono</a></li>
                <li class="nav-item"><a href="/servizi" class="nav-link active" aria-current="page">Servizi</a></li>
                <li class="nav-item"><a href="/contatti" class="nav-link">Contattami</a></li>
            </ul>
        </nav>
    </header>
    <div class="d-flex flex-column align-content-center justify-content-center gap-5 m-5">
        <h1 class="text-center">I miei servizi</h1>
        <div class="d-flex justify-content-center gap-5">
            @foreach ($services as $service)
                <div class="card" style="width: 18rem;">
                    <img src="https://picsum.photos/300/150" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $service }}</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.</p>
                        <a href="/servizi/{{ $service }}" class="btn btn-primary">Dettagli</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <footer class="py-3 my-4">
        <ul class="nav justify-content-center border-bottom pb-3 mb-3">
            <li class="nav-item"><a href="/about" class="nav-link px-2 text-body-secondary">Chi sono</a></li>
            <li class="nav-item"><a href="/servizi" class="nav-link px-2 text-body-secondary">Servizi</a></li>
            <li class="nav-item"><a href="/contatti" class="nav-link px-2 text-body-secondary">Contattami</a></li>
        </ul>
        <p class="text-center text-body-secondary">© 2025 Carolina Bonanno</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous">
    </script>
</body>

</html>
