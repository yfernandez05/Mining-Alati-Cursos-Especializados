@php 
    $destacadosUrl = isset($destacadosUrl) ? $destacadosUrl : '#';
    $destacadosImg = $destacadosImg ?? 'images/destacados-1.jpg';
    $destacadosDescription = $destacadosDescription ?? 'Descripción';
@endphp


<a class="col-11 col-sm-12 py-0 px-1 text-decoration-none curses-descatacados" href="{{ asset($destacadosUrl) }}">
    <div>
        <img src="{{ asset($destacadosImg) }}" alt="" class="img-fluid">
    </div>
    <div class="p-4 text-center bg-primary text-white">
        <p class="mb-0">
        {{ $destacadosDescription }}
        </p>
    </div>
</a>