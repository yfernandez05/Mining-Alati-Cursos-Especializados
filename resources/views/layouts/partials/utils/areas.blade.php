@php
    $areaUrl = isset($areaUrl) ? $areaUrl : '#';
    $areaImg = isset($areaImg) ? $areaImg : 'images/areas/areas-default.jpg';
    $areaName = isset($areaName) ? $areaName : 'Nombre de Área';
@endphp

<a class="col-md-5 my-3 " href="{{ asset($areaUrl) }}" data-aos="fade-up">
    <div class="box position-relative shadow-sm border">
        <div class="overlay waves"></div>
            <img src="{{ asset($areaImg) }}" alt="fondo Areas" class="img-fluid">
        <div class="content text-primary">
            <h4 class="text-center">{{ $areaName }}</h4>
        </div>
    </div>
</a>