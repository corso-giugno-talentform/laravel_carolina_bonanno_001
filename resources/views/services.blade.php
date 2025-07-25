<x-main>
    <div class="d-flex flex-column align-content-center justify-content-center gap-5 m-5">
        <h2 class="text-center">I miei servizi</h2>
        <div class="d-flex justify-content-center gap-5">
            @foreach ($services as $service)
                <div class="card" style="width: 18rem;">
                    <img src="https://picsum.photos/300/150" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $service }}</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk
                            of
                            the
                            card's content.</p>
                        <a href="{{ route('service', ['service' => $service]) }}" class="btn btn-primary">Dettagli</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    </div>


    <div class="d-flex flex-column align-content-center justify-content-center gap-5 m-5">
        <h2 class="text-center">I miei progetti</h2>
        <div class="d-flex justify-content-center gap-5">
            @foreach ($projects as $project)
                <x-card :project="$project" :isDetail="false" />
            @endforeach
        </div>
    </div>

</x-main>
