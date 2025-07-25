<x-main>
    <div class="container m-5">
        <h1 class="text-center pb-5">{{ $project['name'] }}</h1>
        <img src="{{ $project['image'] }}" alt="" class="img-fluid">
        <p class="py-5">{{ $project['description'] }}</p>
    </div>
</x-main>
