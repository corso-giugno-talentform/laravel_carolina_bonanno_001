<nav class="container-fluid bg-body-tertiary shadow d-flex flex-wrap justify-content-center py-3">
    <a href="{{ route('homepage') }}"
        class="d-flex align-items-center mb-3 mb-md-0 me-md-auto mx-4 link-body-emphasis text-decoration-none">
        <img src="/images/logo.svg" alt="logo" width="80px">
    </a>
    <ul class="nav nav-pills mx-4">
        <li class="nav-item"><a href="{{ route('homepage') }}" class="nav-link">Home</a></li>
        <li class="nav-item"><a href="{{ route('about') }}" class="nav-link">Chi sono</a></li>
        <li class="nav-item"><a href="{{ route('services') }}" class="nav-link">Servizi</a></li>
        <li class="nav-item"><a href="{{ route('contacts') }}" class="nav-link">Contattami</a></li>
    </ul>
</nav>

<!-- Da risolvere lo status active: class="nav-link active" aria-current="page" -->
