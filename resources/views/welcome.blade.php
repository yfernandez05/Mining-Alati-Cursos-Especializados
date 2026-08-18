@section('title', 'Certifícate con líderes Internacionales en capacitación minera.')

@extends('layouts.landing')

@section('css')

@endsection

@section('content')

{{-- Title curso start--}}
@php
    $textTitulo = "LANDING GENERAL PEM";
@endphp
<script>
    localStorage.setItem("textTituloSend", "{{ $textTitulo }}");
</script>
{{-- Title curso end--}}


{{-- Menu Principal startd --}}
<?php
    $itemsSubmenu = [
        [
            'submenuLabel' => 'PROGRAMA DE ESPECIALIZACIÓN MINERA - PEM',
            'submenuUrl' => 'https://diplomados.miningalati.com/',  
        ],
        [
            'submenuLabel' => 'PROGRAMAS A MEDIDA - PMED',
        ],
    ];
?>
@include('layouts.partials.header', ['itemsSubmenu' => $itemsSubmenu])
{{-- Menu Principal end --}}

<div class="container-main container-fluid p-0 m-0">
    {{-- baner header start --}}
    <section id="home" class="bg-blue slider_home flex-column flex-lg-row">
        <div class="container-fluid col-11 content_banner__home m-auto">
            <div class="row justify-content-center">
               <!--  <div class="col-12 col-lg-4 cont-img-poople d-none d-xl-block" data-aos="fade-right">
                    <img src="{{asset('images/banner-general-people.png')}}" alt="Personal educativo">
                </div> -->
                <div class="col-12 col-md-6 col-lg-7 col-xl-7 text-white text-info_banner">
                    <h5 class="font-secondary d-none d-md-block text-uppercase" data-aos="zoom-out-right" data-aos-duration="800">
                        Fortalece tus habilidades y consigue potenciar tu Liderazgo
                    </h5> 
                    <div data-aos="fade-up" class="cont-white d-none d-md-block"><h3 class="text-primary" style="text-shadow: none;">CURSOS ESPECIALIZADOS EN MINERÍA</h3></div>
                    <h5 class="font-secondary d-none d-md-block" data-aos="zoom-out-right" data-aos-duration="800">
                        Especialízate administrando tus propios tiempos, de manera virtual asíncrona o 100% Online, con expertos en la Industria Minera. 
                    </h5>
                    <h3 data-aos="fade-up" id="" class="d-block d-md-none text-uppercase">
                        CURSOS ESPECIALIZADOS EN MINERÍA
                    </h3>            
                </div>

                <div class="col-12 col-md-6 col-lg-5 col-xl-4 justify-content-center cont-form" data-aos="fade-left"  data-aos-duration="800">
                    <div class="col-12 col-md-12 col-lg-12 align-self-center p-0">
                        <?php
                            $codigoProducto = 139;
                            $cursoEstado = false;
                        ?>
                        @include('layouts.partials.utils.formulario', compact('cursoEstado','codigoProducto'))                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- baner header end --}}

    {{-- Porque elegirnos start --}}
    <section id="porqueelegirnos" class="section_porqueelegirnos bg-white mb-3 py-4 position-relative">
        <div class="points_profesionals-header d-none d-md-block" data-aos="fade-down" data-aos-duration="1500">
            <img src="{{asset('images/points-bg.png')}}" alt="icono circle">
        </div>
        <div class="container shadow cont-float bg-white col-11 col-md-10 col-lg-10 col-xl-9" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
            <div class="row px-3 px-lg-0">
                <div class="col-12 border-bottom border-primary p-4">
                    <div class="row flex-column flex-lg-row p-4">
                        <div class="col-12 text-center" data-aos="fade-up" data-aos-duration="500">
                            <h2 class="text-primary text-uppercase m-0">¿Por qué elegirnos?</h2>
                        </div>
                        <!-- <div class="col-12 col-lg-8 text-center text-lg-left mt-3 mt-lg-0 align-self-center" data-aos="fade-up" data-aos-duration="800">
                            <p class="text-secondary m-0">
                                Nuestros programas están diseñados para potenciar tus habilidades y 
                                cumplir con las exigencias del mercado minero.
                            </p>
                        </div> -->
                    </div>
                </div>
                <div class="d-none d-lg-flex cont-info" data-aos="fade-up">  
                    <?php
                        $porqueelerginosItems = [
                            [
                                'porqueelegirnosIcon' => 'images/icons-generals/icon-accesocontinuo.png',
                                'porqueelegirnosTitle' => 'EXPOSITORES<BR>CON TRAYECTORIA',
                                'porqueelegirnosDescripcion' => 'Plana docente de prestigio nacional e internacional.',
                            ],
                            [
                                'porqueelegirnosIcon' => 'images/icons-generals/icon-Internacionalizacion.png',
                                'porqueelegirnosTitle' => 'ASESORÍA<BR>PERMANENTE',
                                'porqueelegirnosDescripcion' => 'Contarás con el acompañamiento de un tutor asignado al curso.',                                
                            ],
                            [
                                'porqueelegirnosIcon' => 'images/icons-generals/icon-asesoriaacademica.png',
                                'porqueelegirnosTitle' => 'EXPERIENCIA<BR>CALIDAD',
                                'porqueelegirnosDescripcion' => 'Más de 9 años en el sector de capacitación Minera.',                                
                            ],
                            [
                                'porqueelegirnosIcon' => 'images/icons-generals/icon-enfoqueintegral.png',
                                'porqueelegirnosTitle' => 'TEMARIO<BR>INNOVADOR',
                                'porqueelegirnosDescripcion' => 'Con las últimas tendencias y experiencias del sector minero.',                                
                            ],
                        ];
                    ?>

                    @foreach($porqueelerginosItems as $item)
                        @include('layouts.partials.utils.porqueelegirnos', $item)
                    @endforeach
                </div>
                <div class="porqueleegrinos-movil d-lg-none col-12">
                    @foreach($porqueelerginosItems as $item)
                        @include('layouts.partials.utils.porqueelegirnos', $item)
                    @endforeach
                </div>           
            </div>
        </div>
        <div class="points_profesionals-footer d-none d-md-block" data-aos="fade-up" data-aos-duration="1500">
            <img src="{{asset('images/points-bg.png')}}" alt="icono circle">
        </div>
    </section>
    {{-- Porque elegirnos end --}}

    {{-- Profesionales de exito start --}}
    <section id="especialidades" class="section_profesionales bg-white mb-3 py-4 position-relative">
        <div class="circle_profesionals-header d-block d-lg-block" data-aos="fade-down-right" data-aos-duration="1500">
            <img src="{{asset('images/circle.png')}}" alt="icono circle">
        </div>
        <div class="container bg-info cont-info py-5 shadow position-relative" data-aos="fade-up">        
            <div class="co-12 p-4 mt-5">
                <h2 class="text-primary text-center text-uppercase p-2 bg-white m-auto">
                    ¿Por qué un Curso Especializado en Minería?
                </h2>            
            </div>
            <div class="col-12 col-lg-8 m-auto mb-5">
                <p class="mt-2 text-center text-white ">
                    Desarrolla las competencias que necesitas para diferenciarte y destacar en un entorno competitivo y cambiante.
                </p>
                <p class=" text-center text-white ">
                    Además, alineados a las últimas tendencias del mercado presentamos un programa de certificación 
                    progresiva que te brinda la flexibilidad de <strong>elegir 5 cursos del área de tu interés + 
                    Soft Skills para obtener el Diploma de Especialización en Minería.</strong>
                </p>
            </div>
        </div>
        <div class="circle_profesionals-footer d-none d-xl-block " data-aos="fade-down-left" data-aos-duration="1500">
            <img src="{{asset('images/circle.png')}}" alt="icono circle">
        </div>
        
    </section>
    {{-- Profesionales de exito end --}}

    {{-- Areas start--}}
    <section id="areas" class="section_areas bg-white mb-4 py-4">
        <div class="container text-center py-4 text-primary">
            <h2 data-aos="fade-up">NUESTRAS ÁREAS</h2>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <?php
                        $areasItem = [
                            [   
                                'areaUrl' => route('gestion'),
                                'areaImg' => 'images/areas/gestion.jpg',
                                'areaName' => 'Gestión',
                            ],
                            [
                                'areaUrl' => route('geologia'),
                                'areaImg' => 'images/areas/geologia.jpg',
                                'areaName' => 'Geología',  
                            ],
                            [
                                'areaUrl' => route('metalurgia'),
                                'areaImg' => 'images/areas/metalurgia.jpg',
                                'areaName' => 'Metalurgia',  
                            ],
                            [
                                'areaUrl' => route('mineria'),
                                'areaImg' => 'images/areas/mineria.jpg',
                                'areaName' => 'Minería',  
                            ],
                            [
                                'areaUrl' => route('medioambiente'),
                                'areaImg' => 'images/areas/medio-ambiente.jpg',
                                'areaName' => 'Medio Ambiente',  
                            ],
                            [
                                'areaUrl' => route('seguridadminera'),
                                'areaImg' => 'images/areas/seg-minera.jpg',
                                'areaName' => 'Seguridad Minera',  
                            ],
                            [
                                'areaUrl' => route('derechominero'),
                                'areaImg' => 'images/areas/derecho-minero.jpg',
                                'areaName' => 'Derecho Minero',  
                            ],
                        ];
                    ?>

                    @foreach($areasItem as $items)
                        @include('layouts.partials.utils.areas', $items)
                    @endforeach

            </div>
        </div>
    </section>
    {{-- Areas end--}}

    {{-- Metodologia start --}}
    <section id="metodologia" class="section_metodologi bg-white mb-5 py-4">
        <div class="container">
            <div class="container text-center py-4 text-primary">
                <h2 data-aos="fade-up" id="title-curso">CONOCE NUESTRAS METODOLOGÍAS</h2>
            </div>
            <div class="row justify-content-center mt-3">

                <div class="col-12 col-md-6 col-lg-5 mb-2 mb-md-auto">
                    <div class="card border rounded text-center shadow-sm px-3">
                        <div class="card-header pt-4 pb-0 text-blue">
                            <h4 class="font-weight-bold pt-1">CURSOS VIRTUAL <br>ASINCRÓNICO</h4>
                        </div> 
                        <hr class="border-primary border-top my-1" style="border: 2px solid;">               
                        <div class="card-body">
                            <p class="blockquote card-text">
                                <span class="fas fa-quote-left text-primary"></span>
                                    <strong>Metodología basada en casos reles,</strong> modelo que permite aplicarlos en campo.
                                    <span class="fas fa-quote-right text-primary"></span>
                            </p>
                            <hr class="border-primary my-1" style="border-style: dashed;"> 
                            <p class="blockquote card-text">
                                <span class="fas fa-quote-left text-primary"></span>
                                    <strong>Foro Virtual interactivo,</strong> Permite al alumno interactuar con sus compañeros y resolver interrogantes.
                                <span class="fas fa-quote-right text-primary"></span>
                            </p>
                            <hr class="border-primary my-1" style="border-style: dashed;"> 
                            <p class="blockquote card-text">
                                <span class="fas fa-quote-left text-primary"></span>
                                    <strong>Acceso ilimitado las 24</strong> horas del día al campus virtual, desde cualquier dispositivo con conexión a internet.<br>
                                    El alumno administra su tiempo de estudios segun sus requerimientos y exigencias laborales.
                                <span class="fas fa-quote-right text-primary"></span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-5">
                    <div class="card border rounded text-center shadow-sm px-3">
                        <div class="card-header pt-4 pb-0 text-purple">
                            <h4 class="font-weight-bold pt-1">CURSOS <br>ONLINE</h4>
                        </div> 
                        <hr class="border-primary border-top my-1" style="border: 2px solid;">               
                        <div class="card-body">
                            <p class="blockquote card-text">
                                <span class="fas fa-quote-left text-primary"></span>
                                    <strong>Desarrolla las clases en vivo en el horario elegido,</strong> desde donde estes.
                                <span class="fas fa-quote-right text-primary"></span>
                            </p>
                            <hr class="border-primary my-1" style="border-style: dashed;"> 
                            <p class="blockquote card-text">
                                <span class="fas fa-quote-left text-primary"></span>
                                    <strong>Interactúa con el ponente y compañeros</strong> resolviendo inquietudes y compartiendo experiencias.
                                <span class="fas fa-quote-right text-primary"></span>
                            </p>
                            <hr class="border-primary my-1" style="border-style: dashed;"> 
                            <p class="blockquote card-text">
                                <span class="fas fa-quote-left text-primary"></span>
                                    <strong>Talleres prácticos,</strong> dirigidos.
                                <span class="fas fa-quote-right text-primary"></span>
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    {{-- Metodologia end --}}


    {{-- Clientes start --}}
    <section id="clientes" class="section_clientes mb-0 pt-4 pb-5 position-relative" style="background-color: #ecf5f8;">
        <div class="circle_profesionals-header d-block d-lg-none d-xl-block" data-aos="fade-down-right" data-aos-duration="1500">
            <img src="{{asset('images/circle.png')}}" alt="icono circle">
        </div>
        <div class="container text-center py-4">
            <h2 class="text-primary text-uppercase">Nuestros Aliados</h2>
        </div>

        @include('layouts.partials.utils.clientes')

        <div class="circle_profesionals-footer d-none d-lg-block" data-aos="fade-down-left" data-aos-duration="1000">
            <img src="{{asset('images/circle.png')}}" alt="icono circle">
        </div>

    </section>
    {{-- Clientes end --}}
</div>

@endsection