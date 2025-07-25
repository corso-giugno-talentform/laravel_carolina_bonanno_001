<x-main>
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
                        <a href="{{ route('service', ['service' => $service]) }}" class="btn btn-primary">Dettagli</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="d-flex flex-column align-content-center justify-content-center gap-5 m-5">
        <h1 class="text-center">I miei progetti</h1>
        <div class="d-flex justify-content-center gap-5">
            @foreach ($projects as $project)
                <div class="card" style="width: 18rem;">
                    <img src="{{ $project['image'] }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $project['name'] }}</h5>
                        <p class="card-text">{{ $project['description'] }}</p>
                        <a href="{{ route('project', ['project' => $project['slug']]) }}"
                            class="btn btn-primary">Dettagli</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</x-main>
