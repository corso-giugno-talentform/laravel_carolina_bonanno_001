<div class="card" style="width: 18rem;">
    <img src="{{ $project['image'] }}" class="card-img-top" alt="...">
    <div class="card-body">
        @if (!$isDetail)
            <h5 class="card-title">{{ $project['name'] }}</h5>
        @endif
        <p class="card-text">{{ $project['description'] }}</p>
        @if (!$isDetail)
            <a href="{{ route('project', ['project' => $project['slug']]) }}" class="btn btn-primary">Dettagli</a>
        @endif
    </div>
</div>
