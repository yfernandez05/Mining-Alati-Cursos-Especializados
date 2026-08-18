@section('title', 'Certifícate con líderes Internacionales en capacitación minera.')

@extends('layouts.landing')

@section('css')

@endsection

@section('content')

{{-- Menu Principal startd --}}
<?php
    $itemsSubmenu = [];
?>
@include('layouts.partials.header',['itemsSubmenu' => $itemsSubmenu])
{{-- Menu Principal end --}}

<div class="container-main container-fluid p-0 m-0">
    {{-- baner header start --}}
    <section id="home" class="bg-primary slider_home flex-column flex-lg-row">
        <div class="container-fluid col-11 content_banner__home m-auto ml-lg-0 ">
            <div class="row">
                <div class="col-12 col-lg-4 cont-img-poople d-none d-lg-block" data-aos="fade-right">
                    <img src="{{asset('images/banner-general-people.png')}}" alt="Personal educativo">
                </div>

                <div class="col-12 col-md-7 col-lg-4 col-xl-5 text-white text-info_banner">
                    <h3 data-aos="fade-up" id="title-curso" class="text-uppercase">Planeamiento de minado y</h3>
                    <div data-aos="fade-up" class="cont-white d-none d-lg-block text-uppercase"><h3 class="text-primary" style="text-shadow: none;">Cálculo de reservas</h3></div>
                    <h5 class="font-secondary d-none d-lg-block" data-aos="zoom-out-right" data-aos-duration="800">
                        Costruye tu futuro profesional con los mejores
                    </h5>                
                </div>
                
                <div class="col-sm justify-content-center cont-form" data-aos="fade-left"  data-aos-duration="800">
                    <div class="col-12 col-md-12 col-lg-12 align-self-center p-0">
                        <?php 
                            $cursos = [
                                ['nombre' => 'Diseño de Tuneles y Obras subterráneas'],
                                ['nombre' => 'Diseño de Mallas de Perforación y Voladura en Minería Superficial y Subterránea'],
                                ['nombre' => 'Planificación y Optimización y Diseño de Proyectos'],
                            ];
                        ?>
                        @include('layouts.partials.utils.formulario',compact('cursos'))
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
                        <div class="col-12 col-lg-4 col-12 col-lg-4 text-center text-lg-left" data-aos="fade-up" data-aos-duration="500">
                            <h2 class="text-primary text-uppercase m-0">¿Por qué elegirnos?</h2>
                        </div>
                        <div class="col-12 col-lg-8 text-center text-lg-left mt-3 mt-lg-0 align-self-center" data-aos="fade-up" data-aos-duration="800">
                            <p class="text-secondary m-0">
                                Nuestros programas están diseñados  para potenciar tus
                                habilidades y cumplir con las exigencias del mercado minero.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="d-none d-lg-flex cont-info" data-aos="fade-up">  
                    <?php
                        $porqueelerginosItems = [
                            [
                                'porqueelegirnosIcon' => 'images/icons-generals/icon-accesocontinuo.png',
                                'porqueelegirnosTitle' => 'METODOLOGÍA EDUCATIVA',
                                'porqueelegirnosDescripcion' => 'Nuestro modelo educativo te permite aprender a través de la práctica',
                            ],
                            [
                                'porqueelegirnosIcon' => 'images/icons-generals/icon-Internacionalizacion.png',
                                'porqueelegirnosTitle' => 'FLEXIBILIDAD HORARÍA',
                                'porqueelegirnosDescripcion' => 'Administra tu tiempo de estudios de acuerdo a tu necesidad y exigencia laboral',                                
                            ],
                            [
                                'porqueelegirnosIcon' => 'images/icons-generals/icon-asesoriaacademica.png',
                                'porqueelegirnosTitle' => 'PLATAFORMA VIRTUAL',
                                'porqueelegirnosDescripcion' => 'Accede a nuestra plataforma desde cualquier dispositivo con conexión a internet',                                
                            ],
                            [
                                'porqueelegirnosIcon' => 'images/icons-generals/icon-enfoqueintegral.png',
                                'porqueelegirnosTitle' => 'FORO <br>ALUMNO',
                                'porqueelegirnosDescripcion' => 'Interactúa con los docentes y compañeros, a través de cada sesión en vivo',                                
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
            <div class="col-12 p-4 mt-1">
                <p class=" text-center text-white ">
                    POTENCIA TUS HABILIDADES PARA CUMPLIR
                    CON LAS EXIGENCIAS DEL MERCADO
                </p>                          
            </div>
            <div class="col-12 col-lg-8 m-auto mb-5">
                <h2 class="text-primary text-center text-uppercase p-2 bg-white m-auto mb-5">
                    Planeamiento de minado y cálculo de reservas
                </h2>  
            </div>
        </div>
        <div class="circle_profesionals-footer d-none d-xl-block " data-aos="fade-down-left" data-aos-duration="1500">
            <img src="{{asset('images/circle.png')}}" alt="icono circle">
        </div>

        <div class="container position-relative" data-aos="fade-up" data-aos-duration="1000" >
            <div class="row col-11 m-auto justify-content-center">
                <a class="waves bg-gray col-6 col-md-4 col-lg py-3 py-lg-5 border-right border-primary collapse-item col-collapse d-flex align-items-center flex-lg-wrap text-decoration-none" aria-expanded="true" data-toggle="collapse" data-target="#collapse1">
                    <div class="col-6 col-lg-5 m-auto">
                        <img src="{{asset('images/icons-generals/icon-gestion.png')}}" alt="gestion" class="img-fluid">
                    </div>
                    <div class="col-12 text-center text-secondary">
                        <p class="m-0">Objetivo General</p>
                    </div>
                </a>
                <a class="waves bg-gray col-6 col-md-4 col-lg py-3 py-lg-5 border-right border-primary collapse-item collapsed col-collapse d-flex align-items-center flex-lg-wrap text-decoration-none" data-toggle="collapse" data-target="#collapse2">
                    <div class="col-6 col-lg-5 m-auto">
                        <img src="{{asset('images/icons-generals/icon-geologia.png')}}" alt="gestion" class="img-fluid">
                    </div>
                    <div class="col-12 text-center text-secondary">
                        <p class="m-0">Malla Curricular</p>
                    </div>
                </a>
                <a class="waves bg-gray col-6 col-md-4 col-lg py-3 py-lg-5 border-right border-primary collapse-item collapsed col-collapse d-flex align-items-center flex-lg-wrap text-decoration-none" href="{{route('planeamientominado')}}">
                    <div class="col-6 col-lg-5 m-auto">
                        <img src="{{asset('images/icons-generals/icon-mineria.png')}}" alt="gestion" class="img-fluid">
                    </div>
                    <div class="col-12 text-center text-secondary">
                        <p class="m-0">Beneficios</p>
                    </div>
                </a>
                <a class="waves bg-gray col-6 col-md-4 col-lg py-3 py-lg-5 border-right border-primary collapse-item collapsed col-collapse d-flex align-items-center flex-lg-wrap text-decoration-none" data-toggle="collapse" data-target="#collapse4">
                    <div class="col-6 col-lg-5 m-auto">
                        <img src="{{asset('images/icons-generals/icon-metalurgia.png')}}" alt="gestion" class="img-fluid">
                    </div>
                    <div class="col-12 text-center text-secondary">
                        <p class="m-0">Expositores</p>
                    </div>
                </a>
            </div>
        </div>


         <div class="container my-5 collpase-container-general" data-aos="zoom-in">
        <div class="collapse show" id="collapse1">
            <div class="row course-item">
                <div class="col-12 col-md-6 col-lg-4 mb-4">
                    <div class="col">
                        <div class="row">
                            <div class="px-3 py-1 bg-primary text-white cont-title-course">
                                <h5 class="font-secondary text-uppercase m-0">PEM-ADV</h5>
                            </div>
                            <div class="shadow d-flex py-3 c-pointer waves">
                                <div class="col-3 align-self-center">
                                    <img src="{{asset('images/icons-generals/icon-gestion.png')}}" alt="Gestión">
                                </div>
                                <div class="col-8 align-self-center">
                                    <p class="m-0">
                                        Planeamiento de Minado Superficial y Subterránea
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 mb-4">
                    <div class="col">
                        <div class="row">
                            <div class="px-3 py-1 bg-primary text-white cont-title-course">
                                <h5 class="font-secondary text-uppercase m-0">PEM-ADV</h5>
                            </div>
                            <div class="shadow d-flex py-3 c-pointer waves">
                                <div class="col-3 align-self-center">
                                    <img src="{{asset('images/icons-generals/icon-gestion.png')}}" alt="Gestión">
                                </div>
                                <div class="col-8 align-self-center">
                                    <p class="m-0">
                                        Costos y Presupuestos en Minería Superficial y Subterránea
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 mb-4">
                    <div class="col">
                        <div class="row">
                            <div class="px-3 py-1 bg-primary text-white cont-title-course">
                                <h5 class="font-secondary text-uppercase m-0">PEM-ADV</h5>
                            </div>
                            <div class="shadow d-flex py-3 c-pointer waves">
                                <div class="col-3 align-self-center">
                                    <img src="{{asset('images/icons-generals/icon-gestion.png')}}" alt="Gestión">
                                </div>
                                <div class="col-8 align-self-center">
                                    <p class="m-0">
                                        Perforación y Voladura en Minería Subterránea
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="collapse" id="collapse2">
        <div class="row course-item">
                <div class="col-12 col-md-6 col-lg-4 mb-4">
                    <div class="col">
                        <div class="row">
                            <div class="px-3 py-1 bg-primary text-white cont-title-course">
                                <h5 class="font-secondary text-uppercase m-0">PEM-ADV</h5>
                            </div>
                            <div class="shadow d-flex py-3 c-pointer waves">
                                <div class="col-3 align-self-center">
                                    <img src="{{asset('images/icons-generals/icon-gestion.png')}}" alt="Gestión">
                                </div>
                                <div class="col-8 align-self-center">
                                    <p class="m-0">
                                        Planeamiento de Minado Superficial y Subterránea
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 mb-4">
                    <div class="col">
                        <div class="row">
                            <div class="px-3 py-1 bg-primary text-white cont-title-course">
                                <h5 class="font-secondary text-uppercase m-0">PEM-ADV</h5>
                            </div>
                            <div class="shadow d-flex py-3 c-pointer waves">
                                <div class="col-3 align-self-center">
                                    <img src="{{asset('images/icons-generals/icon-gestion.png')}}" alt="Gestión">
                                </div>
                                <div class="col-8 align-self-center">
                                    <p class="m-0">
                                        Costos y Presupuestos en Minería Superficial y Subterránea
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 mb-4">
                    <div class="col">
                        <div class="row">
                            <div class="px-3 py-1 bg-primary text-white cont-title-course">
                                <h5 class="font-secondary text-uppercase m-0">PEM-ADV</h5>
                            </div>
                            <div class="shadow d-flex py-3 c-pointer waves">
                                <div class="col-3 align-self-center">
                                    <img src="{{asset('images/icons-generals/icon-gestion.png')}}" alt="Gestión">
                                </div>
                                <div class="col-8 align-self-center">
                                    <p class="m-0">
                                        Perforación y Voladura en Minería Subterránea
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="collapse" id="collapse3">
            <div class="row course-item">
                <div class="col-12 col-md-6 col-lg-4 mb-4">
                    <div class="col">
                        <div class="row">
                            <div class="px-3 py-1 bg-primary text-white cont-title-course">
                                <h5 class="font-secondary text-uppercase m-0">PEM-ADV</h5>
                            </div>
                            <div class="shadow d-flex py-3 c-pointer waves">
                                <div class="col-3 align-self-center">
                                    <img src="{{asset('images/icons-generals/icon-gestion.png')}}" alt="Gestión">
                                </div>
                                <div class="col-8 align-self-center">
                                    <p class="m-0">
                                        Planeamiento de Minado Superficial y Subterránea
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 mb-4">
                    <div class="col">
                        <div class="row">
                            <div class="px-3 py-1 bg-primary text-white cont-title-course">
                                <h5 class="font-secondary text-uppercase m-0">PEM-ADV</h5>
                            </div>
                            <div class="shadow d-flex py-3 c-pointer waves">
                                <div class="col-3 align-self-center">
                                    <img src="{{asset('images/icons-generals/icon-gestion.png')}}" alt="Gestión">
                                </div>
                                <div class="col-8 align-self-center">
                                    <p class="m-0">
                                        Costos y Presupuestos en Minería Superficial y Subterránea
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 mb-4">
                    <div class="col">
                        <div class="row">
                            <div class="px-3 py-1 bg-primary text-white cont-title-course">
                                <h5 class="font-secondary text-uppercase m-0">PEM-ADV</h5>
                            </div>
                            <div class="shadow d-flex py-3 c-pointer waves">
                                <div class="col-3 align-self-center">
                                    <img src="{{asset('images/icons-generals/icon-gestion.png')}}" alt="Gestión">
                                </div>
                                <div class="col-8 align-self-center">
                                    <p class="m-0">
                                        Perforación y Voladura en Minería Subterránea
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 mb-4">
                    <div class="col">
                        <div class="row">
                            <div class="px-3 py-1 bg-primary text-white cont-title-course">
                                <h5 class="font-secondary text-uppercase m-0">PEM-ADV</h5>
                            </div>
                            <div class="shadow d-flex py-3 c-pointer waves">
                                <div class="col-3 align-self-center">
                                    <img src="{{asset('images/icons-generals/icon-gestion.png')}}" alt="Gestión">
                                </div>
                                <div class="col-8 align-self-center">
                                    <p class="m-0">
                                        Perforación y Voladura en Minería Superficial
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 mb-4">
                    <div class="col">
                        <div class="row">
                            <div class="px-3 py-1 bg-primary text-white cont-title-course">
                                <h5 class="font-secondary text-uppercase m-0">PEM-ITR</h5>
                            </div>
                            <div class="shadow d-flex py-3 c-pointer waves">
                                <div class="col-3 align-self-center">
                                    <img src="{{asset('images/icons-generals/icon-gestion.png')}}" alt="Gestión">
                                </div>
                                <div class="col-8 align-self-center">
                                    <p class="m-0">
                                        Costos y Presupuestos en Minería Subterránea
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 mb-4">
                    <div class="col">
                        <div class="row">
                            <div class="px-3 py-1 bg-primary text-white cont-title-course">
                                <h5 class="font-secondary text-uppercase m-0">PEM-ITR</h5>
                            </div>
                            <div class="shadow d-flex py-3 c-pointer waves">
                                <div class="col-3 align-self-center">
                                    <img src="{{asset('images/icons-generals/icon-gestion.png')}}" alt="Gestión">
                                </div>
                                <div class="col-8 align-self-center">
                                    <p class="m-0">
                                        Costos y Presupuestos en Minería Superficial
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="collapse" id="collapse4">
            <div class="card card-body">
            Información item 4
            </div>
        </div>
    </div>
        
    </section>
    {{-- Profesionales de exito end --}}


    {{-- Clientes start --}}
    <section id="clientes" class="section_clientes mb-0 pt-4 pb-5 position-relative" style="background-color: #ecf5f8;">
        <div class="circle_profesionals-header d-block d-lg-none d-xl-block" data-aos="fade-down-right" data-aos-duration="1500">
            <img src="{{asset('images/circle.png')}}" alt="icono circle">
        </div>
        <div class="container text-center py-4">
            <h2 class=""><span class="font-secondary">Nuestros</span> Clientes</h2>
        </div>

        @include('layouts.partials.utils.clientes')

        <div class="circle_profesionals-footer d-none d-lg-block" data-aos="fade-down-left" data-aos-duration="1000">
            <img src="{{asset('images/circle.png')}}" alt="icono circle">
        </div>

    </section>
    {{-- Clientes end --}}
</div>

@endsection