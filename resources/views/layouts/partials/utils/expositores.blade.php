

@php
    $expositorImg = isset($expositorImg) ? $expositorImg : 'images/expositores/exponente_default.png';
    $expositorName = isset($expositorName) ? $expositorName : 'Nombre del expositor';
    $expositorDescription = isset($expositorDescription) ? $expositorDescription : 'Descripción';

@endphp


<div class="col-12 col-md-11 col-lg-12 p-3 bg-white rounded altu-hegih">
    <div class="d-flex flex-wrap flex-lg-nowrap justify-content-center">
        <div class="col-4 col-md-6 col-lg-2 d-flex  justify-content-center align-items-center">
            <img src="{{ asset($expositorImg) }}" alt="Expositor - {{$expositorName }}" class="img rounded-circle">
        </div>
        <div class="col-12 col-lg-10 mt-4 mt-md-auto text-left">
            <div class="col-12 name-profile">
                <h4>
                    {{ $expositorName }}
                </h4>                           
            </div>
            <div class="col-12 mt-2">
                <p>
                    {{ $expositorDescription }}                
                </p>
            </div> 
        </div>
    </div>
</div>