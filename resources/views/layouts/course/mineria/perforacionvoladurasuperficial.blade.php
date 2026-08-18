@section('title', 'Certifícate con líderes Internacionales en capacitación minera.')

@extends('layouts.landing')

@section('css')
<style>
    body{
        background-color: #ecf5f8 !important;
    }
</style>
@endsection

@section('content')

{{-- Title curso start--}}
@php
    $textTitulo = "Perforación y Voladura en Minera Superficial";
@endphp
<script>
    localStorage.setItem("textTituloSend", "{{ $textTitulo }}");
</script>
{{-- Title curso end--}}


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
                    <img src="{{asset('images/icons-generals/mineria/banner-people-perforacion-voladura.png')}}" alt="Personal educativo">
                </div>

                <div class="col-12 col-md-7 col-lg-4 col-xl-5 text-white text-info_banner">
                    <h5 class="font-secondary d-none d-md-block" data-aos="zoom-out-right" data-aos-duration="800">
                        PROGRAMA DE ESPECIALIZACIÓN MINERA EN
                    </h5>  
                    <h3 data-aos="fade-up" id="title-curso" class="d-none d-md-block text-uppercase">PERFORACIÓN Y VOLADURA</h3>
                    <div data-aos="fade-up" class="cont-white d-none d-md-block text-uppercase"><h3 class="text-primary" style="text-shadow: none;">EN MINERA SUPERFICIAL</h3></div>
                    <h3 data-aos="fade-up" id="" class="d-block d-md-none text-uppercase">
                        Programa de PERFORACIÓN Y VOLADURA EN MINERA SUPERFICIAL
                    </h3>               
                </div>
                
                <div class="col-sm justify-content-center cont-form" data-aos="fade-left"  data-aos-duration="800">
                    <div class="col-12 col-md-12 col-lg-12 align-self-center p-0">
                        <?php 
                            $codigoProducto = 12;
                            $cursoEstado = false;
                        ?>
                        @include('layouts.partials.utils.formulario', compact('cursoEstado', 'codigoProducto'))  
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- baner header end --}}

    {{-- Porque elegirnos start --}}
    <section id="porqueelegirnos" class="section_porqueelegirnos bg-celeste mb-3 py-4 position-relative">
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
                                'porqueelegirnosIcon' => 'images/icons-generals/icon-metodologia.png',
                                'porqueelegirnosTitle' => 'METODOLOGÍA LEARNING BY DOING',
                                'porqueelegirnosDescripcion' => 'Aprende practicando. Potenciamos tus capacidades de investigación, análisis y toma de decisiones, para alcanzar un nivel óptimo de aprendizaje.',
                            ],
                            [
                                'porqueelegirnosIcon' => 'images/icons-generals/icon-flexibilidad.png',
                                'porqueelegirnosTitle' => 'FLEXIBILIDAD HORARÍA',
                                'porqueelegirnosDescripcion' => 'Administra tu tiempo de estudios de acuerdo a tu necesidad y exigencia laboral',                                
                            ],
                            [
                                'porqueelegirnosIcon' => 'images/icons-generals/icon-plataforma.png',
                                'porqueelegirnosTitle' => 'PLATAFORMA VIRTUAL',
                                'porqueelegirnosDescripcion' => 'Accede a nuestra plataforma desde cualquier dispositivo con conexión a internet',                                
                            ],
                            [
                                'porqueelegirnosIcon' => 'images/icons-generals/icon-aforo.png',
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

    {{-- modalidades start --}}
    <section id="especialidades" class="section_profesionales bg-celeste mb-0 mb-lg-3 py-4 position-relative">
        <div class="circle_profesionals-header d-block d-lg-block" data-aos="fade-down-right" data-aos-duration="1500">
            <img src="{{asset('images/circle.png')}}" alt="icono circle">
        </div>
        <div class="container bg-info cont-info py-3 shadow position-relative" data-aos="fade-up">        
            <div class="col-12 p-4 mt-1">
                <h2 class="text-center text-white m-auto text-uppercase">
                    Potencia tus conocimientos y alcanza el éxito en el sector Minero
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
                        <img src="{{asset('images/icons-generals/icon-objetivogeneral.png')}}" alt="gestion" class="img-fluid">
                    </div>
                    <div class="col-12 text-center text-secondary">
                        <p class="m-0">Objetivo General</p>
                    </div>
                </a>
                <a class="waves bg-gray col-6 col-md-4 col-lg py-3 py-lg-5 border-right border-primary collapse-item collapsed col-collapse d-flex align-items-center flex-lg-wrap text-decoration-none" data-toggle="collapse" data-target="#collapse2">
                    <div class="col-6 col-lg-5 m-auto">
                        <img src="{{asset('images/icons-generals/icon-mallacurricular.png')}}" alt="gestion" class="img-fluid">
                    </div>
                    <div class="col-12 text-center text-secondary">
                        <p class="m-0">Malla Curricular</p>
                    </div>
                </a>
                <a class="waves bg-gray col-6 col-md-4 col-lg py-3 py-lg-5 border-right border-primary collapse-item collapsed col-collapse d-flex align-items-center flex-lg-wrap text-decoration-none" data-toggle="collapse" data-target="#collapse3">
                    <div class="col-6 col-lg-5 m-auto">
                        <img src="{{asset('images/icons-generals/icon-beneficios.png')}}" alt="gestion" class="img-fluid">
                    </div>
                    <div class="col-12 text-center text-secondary">
                        <p class="m-0">Beneficios</p>
                    </div>
                </a>
                <a class="waves bg-gray col-6 col-md-4 col-lg py-3 py-lg-5 collapse-item collapsed col-collapse d-flex align-items-center flex-lg-wrap text-decoration-none" data-toggle="collapse" data-target="#collapse4">
                    <div class="col-6 col-lg-5 m-auto">
                        <img src="{{asset('images/icons-generals/icon-cursosonline.png')}}" alt="gestion" class="img-fluid">
                    </div>
                    <div class="col-12 text-center text-secondary">
                        <p class="m-0">Modalidades</p>
                    </div>
                </a>
            </div>
        </div>


         <div class="container my-5 collpase-container-general" data-aos="zoom-in">
        <div class="collapse show" id="collapse1">
            <div class="row course-item">
                <div class="col-12 mb-4">
                    <div class="col">
                        <div class="row">
                            <div class="col-12 shadow-sm bg-white d-flex pb-3 pt-4 px-auto px-sm-5">
                                <div class=" align-self-center">
                                    <h4 class="text-primary">Objetivo General</h4>
                                    <p class="">
                                        Al finalizar el programa de Especialización Internacional en Perforación y Voladura, 
                                        el participante estará en capacidad de ejecutar un óptimo uso de los explosivos en 
                                        conjunto, con un diseño de malla adecuado que permita realizar una voladura con el 
                                        menor costo; considerando la seguridad como medida primordial. Asimismo, hará un 
                                        correcto uso de los softwares e interpretará los resultados de manera óptima para 
                                        tomar decisiones rápidas y eficientes que conlleven a maximizar la productividad de 
                                        explotación de la mina.
                                    </p>

                                    <h4 class="text-primary">Dirigido a:</h4>
                                    <p class="">
                                        Ingenieros de minas, técnicos, consultores y profesionales relacionados. 
                                        En general, profesionales interesados en perfeccionar conocimientos para 
                                        ejecutar, controlar y supervisar procesos de perforación y voladura en la 
                                        actividad minera subterránea y a cielo abierto.
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
                <div class="col-12 mb-4">
                    <div class="col">
                        <div class="row">
                            <div class="col-12 shadow-sm bg-white d-flex pb-3 pt-4 px-auto px-sm-5">
                                <div class="align-self-center">
                                    <p class="">
                                        <span class="text-primary font-primary">Módulo I</span> - Procesos de Perforación y Voladura en Minería a Cielo abierto
                                    </p>
                                    <p class="">
                                        <span class="text-primary font-primary">Módulo II</span> - Modelos Matemáticos para el Cálculo de Factores de perforación y Voladura
                                    </p>
                                    <p class="">
                                        <span class="text-primary font-primary">Módulo III</span> - Equipos de Perforación en Minería Superfcial: Criterios de selección y Optimización Operativa
                                    </p>
                                    <p class="">
                                        <span class="text-primary font-primary">Módulo IV</span> - Planeación, Presupuesto y Costos de Voladuras en Minería Superficial
                                    </p>
                                    <p class="">
                                        <span class="text-primary font-primary">Módulo V</span> - Análisis y control de Vibraciones en voladura Superficial
                                    </p>
                                    <p class="">
                                        <span class="text-primary font-primary">Módulo VI</span> - Modelación y simulación de Perforación y voladura en Minería Superficial
                                    </p>
                                    <p class="">
                                        <span class="text-primary font-primary">Módulo VII</span> - Procesos de Perforación y voladura en Minería Subterránea
                                    </p>
                                    <p class="">
                                        <span class="text-primary font-primary">Módulo VIII</span> - Equipos de perforación en Minería Subterránea: Criterios de Selección y Optimización
                                    </p>
                                    <p class="">
                                        <span class="text-primary font-primary">Módulo IX</span> - Planeación, Presupuesto y Costos de Voladuras en Minería Subterránea
                                    </p>
                                    <p class="">
                                        <span class="text-primary font-primary">Módulo X</span> - Estrategias Operativas para la Reducción de costos Mineria Subterránea
                                    </p>
                                    <p class="">
                                        <span class="text-primary font-primary">Módulo XI</span> - Análisis y control de vibraciones en voladura Subterránea
                                    </p>
                                    <p class="">
                                        <span class="text-primary font-primary">Módulo XII </span> - Modelamiento y Simulación de Perforación y voladura en Minerá Subterránea
                                    </p>
                                    <p class="">
                                        <span class="text-primary font-primary">Módulo XIII</span> - Diseño de Yuneles y Obras Subterráneas
                                    </p>
                                    <p class="">
                                        <span class="text-primary font-primary">Software: </span>JK SIMBLAST (Jk Bench) I BLAST BLAS PLAN, IMAGE J
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
                <div class="col-12 mb-4">
                    <div class="col">
                        <div class="row">
                            <div class="col-12 shadow-sm bg-white d-flex pb-3 pt-4 px-auto px-sm-5">
                                <div class=" align-self-center">
                                    <ul>
                                        <li>Staff de consultores de amplia trayectoria académica y empresarial en el sector minero.</li>
                                        <li>Enfoque práctico basado en experiencias reales de aplicación en el sector minero.</li>
                                        <li>Intercambio de conocimientos con profesionales vinculados al rubro minero.</li>
                                        <li>Acceso desde cualquier dispositivo (Tablet, Smartphone, laptop, etc.) y de cualquier parte del mundo.</li>
                                        <li>Acceso ilimitado las 24 horas del día al Campus Virtual.</li>
                                        <li>Otros beneficios</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="collapse" id="collapse4">
            <div class="row course-item">
                <div class="col-12 mb-4">
                    <div class="col">
                        <div class="row">
                            <div class="col-12 shadow-sm bg-white d-flex pb-3 pt-4 px-auto px-sm-5">
                                <div class=" align-self-center">
                                    <h4 class="text-primary">VIRTUAL ASÍNCRONO</h4>
                                    <p class="">
                                        Clases Autodirigidas que te permiten un aprendizaje asertivo.                                        
                                    </p>
                                    <p class="">
                                        El alumno podrá apoyarse en grabaciones y materiales didácticos dentro del Campus, teniendo el apoyo 
                                        y soporte del docente en las sesiones en vivo.                                        
                                    </p>
                                    <h4 class="text-primary">ONLINE</h4>
                                    <p class="">
                                        Clases 100% en vivo, cuenta con un horario definido y permite al alumno interactuar entre el docente 
                                        y sus compañeros, reforzando la parte cognitiva con su participación e intercambio de conocimientos.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>        
    </section>
    {{-- metodologias end --}}


    {{-- Expositores start --}}
    <section id="expositores" class="section_expositores mb-3 pt-0 pb-4">
        <div class="container text-center pt-0 pb-4">
            <h2 class="text-primary">Expositores</h2>
        </div>

        <div class="container" data-aos="fade-up" data-aos-duration="600">
            <div class="col slider-expositores text-center">
                <?php
                    $expositores = [
                        [   
                            'expositorImg' => 'images/expositores/carlos-reategui.png',
                            'expositorName' => 'Msc. Carlos Reátegui',
                            'expositorDescription' => 'Magíster en Ciencias Económicas con mención en Gestión Empresarial. Ingeniero de Minas por la 
                            Universidad Nacional Del Altiplano Puno - Perú, Asesor en la elaboración planes estratégicos, presupuestos de inversión, 
                            planeamiento de inversiones (Capex) y operacionales (Opex), con más de 20 años de experiencia en Perforación y Voladura, 
                            Planeamiento Mina, Análisis Económico, Operaciones Mina, Supervisión de carga-transporte, Elaboración de proyectos e 
                            inversiones.',                            
                        ],
                        [   
                            'expositorImg' => 'images/expositores/romel-villanueva.png',
                            'expositorName' => 'Ing Romel Villanueva',
                            'expositorDescription' => 'Master en Desarrollo Sustentable en Minería y Recursos Energéticos, por la Universidad San Marcos 
                            Perú, especialista en Voladura de Rocas e Ingeniería de Explosivos, Diseño Técnico Económico en Voladuras de Rocas, 
                            participó en: Desarrollo de la Emulsión Explosiva Gasificada (SAN-G) en Famesa Explosivos en Perú, Introducción del 
                            sistema digital de voladura y el detonador electrónico de Daveytronic, labora en EXSA en la implementación global de 
                            los explosivos basados en Emulsión Gasificada (QUANTEX). Investigador en la Sociedad Internacional de Ingenieros 
                            en Explosivos - ISEE. Ha participado en pasantías técnicas internacionales y como ponente en diversas conferencias 
                            en Perú, Chile, Bolivia y Colombia. Actualmente es asesor de empresas Mineras reconocidas y de explosivos.',                            
                        ],
                    ];
                ?>

                @foreach($expositores as $expoItems)
                        @include('layouts.partials.utils.expositores', $expoItems)
                @endforeach                           
            </div>
        </div>
    </section>
    {{-- Expositores end --}}
    

    {{-- Medios de Pago start --}}
    <section id="mediodepago" class="section_mediopago mb-0 py-4 position-relative bg-white">
        <div class="points_mediopagos d-none d-md-block" data-aos="zoom-in-left" data-aos-duration="1500">
            <img src="{{asset('images/points-bg.png')}}" alt="icono circle">
        </div>
        <div class="container pt-auto mt-4 pt-lg-5 mt-lg-5">
            @include('layouts.partials.utils.mediopago')         
        </div>
    </section>
    {{-- Medios de Pago end --}}


    {{-- Cursos destacados start --}}
    <section id="cursosdestacados" class="section_cursosdestacado bg-white mb-3 pt-4 pb-5 position-relative">
        <div class="container mb-auto mb-lg-5">
            <div class="col-12 p-4 mt-1">
                <h2 class="text-center text-primary m-auto text-uppercase">
                    Cursos Destacados
                </h2>                          
            </div>
            <div class="col-12 m-auto shadow bg-white cont-info px-auto px-lg-0">
                <div class="row justify-content-center slider-cursosdestacados">
                    <?php
                    $cursosDestacados = [
                            /* [                                
                                'destacadosImg' => 'images/destacados-1.jpg',
                                'destacadosDescription' => 'Costos y Presupuestos en Minería Superficial',
                            ],
                            [
                                'destacadosDescription' => 'Costos y Presupuestos en Minería Subterránea',
                            ], */
                            [
                                'destacadosImg' => 'images/icons-generals/mineria/curso-costos-presupuestos.jpg',
                                'destacadosUrl' => route('costosypresupuesto_mineria'),
                                'destacadosDescription' => 'Costos y Presupuestos en Minería Superficial y Subterránea',
                            ],
                            /* [
                                'destacadosDescription' => 'Perforación y Voladura en Minera Subterránea',
                            ], */
                            [
                                'destacadosImg' => 'images/icons-generals/mineria/curso-planeamiento-minado-calculo.jpg',
                                'destacadosUrl' => route('planeamientominadocalculo_mineria'),
                                'destacadosDescription' => 'Planeamiento de Minado y Cálculo de Reservas',
                            ],
                            /* [
                                'destacadosDescription' => 'Digitalización de la Perforación y Voladura Superficial - Minería 4.0',
                            ],
                            [
                                'destacadosDescription' => 'Digitalización de la Perforación y Voladura Subterránea - Minería 4.0',
                            ],
                            [
                                'destacadosDescription' => 'Costos, Finanzas y Comercialización de Minerales',
                            ], */
                        ];
                    ?>

                    @foreach($cursosDestacados as $destacados)
                        @include('layouts.partials.utils.cursosdestacados', $destacados)
                    @endforeach


                                    
                </div>
            </div>          
        </div>
    </section>
    {{-- Cursos destacados end --}}


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