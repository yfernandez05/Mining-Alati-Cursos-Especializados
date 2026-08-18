@php
    $porqueelegirnosIcon = $porqueelegirnosIcon ?? 'images/icons-generals/icon-accesocontinuo.png';
    $porqueelegirnosTitle = $porqueelegirnosTitle ?? 'Titulo';
    $porqueelegirnosDescripcion = $porqueelegirnosDescripcion ?? 'Descripción';
@endphp
<div class="col-12 col-lg-3 border-primary py-5 px-4 info-footer-porquelegirnos">
    <div class="col-4 col-lg-6 m-auto">
        <img src="{{ asset($porqueelegirnosIcon) }}" alt="Gestión" class="img-fluid">
    </div>
    <h4 class="text-primary my-3 text-center text-long" style="word-wrap: break-word;">
        {!! html_entity_decode($porqueelegirnosTitle) !!}
    </h4>
    <p class="m-0 text-secondary text-center">
        {{ $porqueelegirnosDescripcion }}
    </p>
</div>