@section('title', 'Certifícate con líderes Internacionales en capacitación minera.')

@extends('layouts.landing')

@section('css')
<style>
    body{
        background-color: #ecf5f8 !important;
    }
    .slider_home{
        background-image: url(../images/geologica.jpg);
    }
</style>
@endsection

@section('content')

{{-- Title curso start--}}
{{-- 
    @php
    $textTitulo = "----";
@endphp 

<script>
    localStorage.setItem("textTituloSend", "{{ $textTitulo }}");
</script> 
--}}
{{-- Title curso end--}}


{{-- Menu Principal startd --}}
<?php
    $itemsSubmenu = [];
?>
@include('layouts.partials.header',['itemsSubmenu' => $itemsSubmenu])
{{-- Menu Principal end --}}

<div class="container-main container-fluid p-0 m-0">
    {{-- baner header start --}}
    <section id="home" class="bg-blue slider_home flex-column flex-lg-row">
        <div class="container-fluid col-11 content_banner__home m-auto ">
            <div class="row justify-content-center">

                <div class="col-12 col-md-6 col-lg-7 col-xl-7 text-white text-info_banner">                    
                    <h3 data-aos="fade-up" id="title-curso" class="d-none d-md-block text-uppercase">CURSOS ESPECIALIZADOS EN</h3>
                    <div data-aos="fade-up" class="cont-white d-none d-md-block text-uppercase"><h3 class="text-primary" style="text-shadow: none;">GEOLOGÍA</h3></div>
                    <h5 class="font-secondary d-none d-md-block" data-aos="zoom-out-right" data-aos-duration="800">
                        Innova con las nuevas tendencias en la Industria Minera
                    </h5>  
                    <h3 data-aos="fade-up" id="" class="d-block d-md-none text-uppercase">
                        CURSOS ESPECIALIZADOS EN GEOLOGÍA
                    </h3>
                </div>
                
                <div class="col-12 col-md-6 col-lg-5 col-xl-4 justify-content-center cont-form" data-aos="fade-left"  data-aos-duration="800">
                    <div class="col-12 col-md-12 col-lg-12 align-self-center p-0">
                        <?php 
                            $cursos = [
                                [
                                    'nombre' => 'Hidrogeología y Métodos de Explotación Minera',
                                    'codigoProducto' => 34,
                                ],
                                [
                                    'nombre' => 'Hidrogeoquímica e Isotopías de Aguas',
                                    'codigoProducto' => 35,
                                ],
                                [
                                    'nombre' => 'Calidad de Aguas Subterráneas y Proyectos de Remediación',
                                    'codigoProducto' => 36,
                                ],
                                [
                                    'nombre' => 'Caracterización Hidráulica y Modelamiento Hidrogeológico',
                                    'codigoProducto' => 37,
                                ],
                                [
                                    'nombre' => 'Balance Hídrico de un Acuífero Aplicado a la Minería',
                                    'codigoProducto' => 38,
                                ],
                                [
                                    'nombre' => 'Determinación de Red de Monitoreo de un Proyecto Minero',
                                    'codigoProducto' => 39,
                                ],
                                [
                                    'nombre' => 'Mecánica de Suelos Aplicada a Minería',
                                    'codigoProducto' => 40,
                                ],
                                [
                                    'nombre' => 'Caracterización del Macizo Rocoso',
                                    'codigoProducto' => 193,
                                ],
                                [
                                    'nombre' => 'Uso de Software en Mecánica Rocas',
                                    'codigoProducto' => 45,
                                ],
                                [
                                    'nombre' => 'Mapeo Geomecánico de mina, Tunel y Open Pit',
                                    'codigoProducto' => 46,
                                ],
                                [
                                    'nombre' => 'Estudio del agua y su aplicación en Geotecnia Minera',
                                    'codigoProducto' => 44,
                                ],
                                [
                                    'nombre' => 'Métodos de Explotación y Selección de Método',
                                    'codigoProducto' => 47,
                                ],
                                [
                                    'nombre' => 'Análisis de Estabilidad de Taludes',
                                    'codigoProducto' => 41,
                                ],
                                [
                                    'nombre' => 'Mecánica de Rocas Subterránea',
                                    'codigoProducto' => 49,
                                ],
                                [
                                    'nombre' => 'Daño de labores subterráneas',
                                    'codigoProducto' => 50,
                                ],
                                [
                                    'nombre' => 'Fortificación de Túneles y Excavaciones en Minería Subterránea',
                                    'codigoProducto' => 43,
                                ],
                                [
                                    'nombre' => 'Monitoreo Geotécnico',
                                    'codigoProducto' => 51,
                                ],
                                [
                                    'nombre' => 'Modelamiento Numérico 2D - 3D',
                                    'codigoProducto' => 183,
                                ],
                                [
                                    'nombre' => 'Ensayos en Laboratorio e Instrumentación Geotécnica',
                                    'codigoProducto' => 54,
                                ],
                                [
                                    'nombre' => 'Ingeniería Geotécnica Aplicada al Diseño de Excavaciones en Minería Superficial',
                                    'codigoProducto' => 48,
                                ],
                                [
                                    'nombre' => 'Ingeniería Geotécnica Aplicada al Diseño de Excavaciones en Minería Subterránea',
                                    'codigoProducto' => 55,
                                ],
                                [
                                    'nombre' => 'Modelamiento y Simulación Aplicada a la Ingeniería Geotécnica Minera',
                                    'codigoProducto' => 56,
                                ],
                                [
                                    'nombre' => 'Geoestadística Aplicada a la Estimación de Yacimientos Mineros',
                                    'codigoProducto' => 108,
                                ],
                                [
                                    'nombre' => 'Base de Datos y Modelamiento Geológico 2D y 3D, Secciones y Planos de Curvas Iso-valóricas de Leyes',
                                    'codigoProducto' => 109,
                                ],
                                [
                                    'nombre' => 'Caracterización y correlación estadística de datos Geológicos',
                                    'codigoProducto' => 110,
                                ],
                                [
                                    'nombre' => 'Simulación Geoestadística de Geología y leyes (Aplicación de Software)',
                                    'codigoProducto' => 11,
                                ],
                                [
                                    'nombre' => 'Geoestadística Multivariable',
                                    'codigoProducto' => 112,
                                ],
                                [
                                    'nombre' => 'Muestreo Geológico y Minero - QAQC',
                                    'codigoProducto' => 184,
                                ],
                                [
                                    'nombre' => 'Clasificación de recursos de minerales',
                                    'codigoProducto' => 114,
                                ],
                                [
                                    'nombre' => 'Códigos Internacionales y reporte de recursos',
                                    'codigoProducto' => 115,
                                ],
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
    <section id="porqueelegirnos" class="section_porqueelegirnos bg-celeste mb-0 pt-4 pb-0 position-relative">
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


    {{-- Metodologia start --}}
    <section id="especialidades" class="section_metodologi bg-celeste mb-5 pt-3 pb-5">
        <div class="container">
            <div class="container text-center py-4 text-primary">
                <h2 data-aos="fade-up">NUESTRO FORMATO</h2>
            </div>
            <div class="row justify-content-center mt-3">

                <div class="col-12 col-md-6 col-lg-5 mb-4 mb-md-auto" data-aos="fade-right">
                    <div class="card border rounded text-center shadow-sm px-3">
                        <div class="card-header pt-4 pb-0 text-blue">
                            <h4 class="font-weight-bold pt-1">ONLINE<br>ASINCRÓNICO</h4>
                        </div> 
                        <hr class="border-primary border-top my-1" style="border: 2px solid;">               
                        <div class="card-body">
                            <p class="blockquote card-text">
                                <strong>Duración:</strong><br>6 semanas.
                            </p>
                            <hr class="border-primary my-1" style="border-style: dashed;"> 
                            <p class="blockquote card-text">
                                <strong>Acceso ilimitado</strong>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-5" data-aos="fade-left">
                    <div class="card border rounded text-center shadow-sm px-3">
                        <div class="card-header pt-4 pb-0 text-purple">
                            <h4 class="font-weight-bold pt-1">ONLINE<br>VIRTUAL</h4>
                        </div> 
                        <hr class="border-primary border-top my-1" style="border: 2px solid;">               
                        <div class="card-body">
                            <p class="blockquote card-text">
                                <strong>Duración:</strong> <br>04 semanas 24 horas
                            </p>
                            <hr class="border-primary my-1" style="border-style: dashed;"> 
                            <p class="blockquote card-text">
                                <strong>Horarios:</strong><br>Jueves y viernes: 6:00 p. m. a 9:00 p. m.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    {{-- Metodologia end --}}


    {{-- Cursos start --}}
    <section id="nuestroscursos" class="section_cursos bg-celeste mb-5 pt-0 pb-5">
        <div class="container text-center py-4 mb-3 text-primary">
            <h2 data-aos="fade-up">NUESTROS CURSOS</h2>
        </div>
        <div class="container">
            <div class="col-12 internal-cursos" data-aos="zoom-out">
                    <?php
                        $coursesMetalurgia = [
                            [
                                'courseDescription' => 'Hidrogeología y Métodos de Explotación Minera',
                                'courseUrl' => 'files/geologia/hidrogeologia-y-metodos-de-explotacion-minera.pdf',
                              ],
                              [
                                'courseDescription' => 'Hidrogeoquímica e Isotopías de Aguas',
                                'courseUrl' => 'files/geologia/hidrogeoquimica-e-isotopias-de-aguas.pdf',
                              ],
                              [
                                'courseDescription' => 'Calidad de Aguas Subterráneas y Proyectos de Remediación',
                                'courseUrl' => 'files/geologia/calidad-de-aguas-subterraneas-y-proyectos-de-remediacion.pdf',
                              ],
                              [
                                'courseDescription' => 'Caracterización Hidráulica y Modelamiento Hidrogeológico',
                                'courseUrl' => 'files/geologia/caracterizacion-hidraulica-y-modelamiento-hidrogeologico.pdf',
                              ],
                              [
                                'courseDescription' => 'Balance Hídrico de un Acuífero Aplicado a la Minería',
                                'courseUrl' => 'files/geologia/balance-hidrico-de-un-acuifero-aplicado-a-la-mineria.pdf',
                              ],
                              [
                                'courseDescription' => 'Determinación de Red de Monitoreo de un Proyecto Minero',
                                'courseUrl' => 'files/geologia/determinacion-de-red-de-monitoreo-de-un-proyecto-minero.pdf',
                              ],
                              [
                                'courseDescription' => 'Mecánica de Suelos Aplicada a Minería',
                                'courseUrl' => 'files/geologia/Mecanica de suelos aplicada a minería.pdf',
                              ],
                              [
                                'courseDescription' => 'Caracterización del Macizo Rocoso',
                                'courseUrl' => 'files/geologia/caracterizacion-del-macizo-rocoso.pdf',
                              ],
                              [
                                'courseDescription' => 'Uso de Software en Mecánica Rocas',
                                'courseUrl' => 'files/geologia/uso-de-software-en-mecanica-de-rocas.pdf',
                              ],
                              [
                                'courseDescription' => 'Mapeo Geomecánico de mina, Tunel y Open Pit',
                                'courseUrl' => 'files/geologia/mapeo-geomecanico-de-mina-tunel-y-open-pit.pdf',
                              ],
                              [
                                'courseDescription' => 'Estudio del agua y su aplicación en Geotecnia Minera',
                                'courseUrl' => 'files/geologia/estudio-del-agua-y-su-aplicacion-en-geotecnia-minera.pdf',
                              ],
                              [
                                'courseDescription' => 'Métodos de Explotación y Selección de Método',
                                'courseUrl' => 'files/geologia/metodos-de-explotacion-y-seleccion-de-metodos.pdf',
                              ],
                              [
                                'courseDescription' => 'Análisis de Estabilidad de Taludes',
                                'courseUrl' => 'files/geologia/analisis-de-estabilidad-de-taludes.pdf',
                              ],
                              [
                                'courseDescription' => 'Mecánica de Rocas Subterránea',
                                'courseUrl' => 'files/geologia/mecanica-de-rocas-subterranea.pdf',
                              ],
                              [
                                'courseDescription' => 'Daño de labores subterráneas',
                                'courseUrl' => 'files/geologia/dano-de-labores-subterraneas.pdf',
                              ],
                              [
                                'courseDescription' => 'Fortificación de Túneles y Excavaciones en Minería Subterránea',
                                'courseUrl' => 'files/geologia/fortificaciones-de-tuneles-y-excavaciones-en-mineria-subterranea.pdf',
                              ],
                              [
                                'courseDescription' => 'Monitoreo Geotécnico',
                                'courseUrl' => 'files/geologia/monitoreo-geotecnico.pdf',
                              ],
                              [
                                'courseDescription' => 'Modelamiento Numérico 2D - 3D',
                                'courseUrl' => 'files/geologia/modelamiento-numerico-2d-3d.pdf',
                              ],
                              [
                                'courseDescription' => 'Ensayos en Laboratorio e Instrumentación Geotécnica',
                                'courseUrl' => 'files/geologia/ensayos-en-laboratorio-e-instrumentacion-geotecnica.pdf',
                              ],
                              [
                                'courseDescription' => 'Ingeniería Geotécnica Aplicada al Diseño de Excavaciones en Minería Superficial',
                                'courseUrl' => 'files/geologia/ingenieria-geotecnica-aplicada-al-diseno-de-excavaciones-en-mineria-superficial.pdf',
                              ],
                              [
                                'courseDescription' => 'Ingeniería Geotécnica Aplicada al Diseño de Excavaciones en Minería Subterránea',
                                'courseUrl' => 'files/geologia/ingenieria-geotecnica-aplicada-al-diseno-de-excavaciones-en-mineria-subterranea.pdf',
                              ],
                              [
                                'courseDescription' => 'Modelamiento y Simulación Aplicada a la Ingeniería Geotécnica Minera',
                                'courseUrl' => 'files/geologia/modelamiento-y-simulacion-aplicada-a-la-ingenieria-geotecnica-minera.pdf',
                              ],
                              [
                                'courseDescription' => 'Geoestadística Aplicada a la Estimación de Yacimientos Mineros',
                                'courseUrl' => 'files/geologia/geoestadistica-aplicada-a-la-estimacion-de-yacimientos-mineros.pdf',
                              ],
                              [
                                'courseDescription' => 'Base de Datos y Modelamiento Geológico 2d y 3d, Secciones y Planos de Curvas Iso-valóricas de Leyes',
                                'courseUrl' => 'files/geologia/modelamiento-numerico-2d-3d.pdf',
                              ],
                              [
                                'courseDescription' => 'Caracterización y correlación estadística de datos Geológicos',
                                'courseUrl' => 'files/geologia/caracterizacion-y-correlacion-estadistica-de-datos-geologicos.pdf',
                              ],
                              [
                                'courseDescription' => 'Simulación Geoestadística de Geología y leyes (Aplicación de Software)',
                                'courseUrl' => 'files/geologia/simulacion-geoestadistica-de-geologia-y-leyes-aplicacion-de-software.pdf',
                              ],
                              [
                                'courseDescription' => 'Geoestadística Multivariable',
                                'courseUrl' => 'files/geologia/geoestadistica-multivariable.pdf',
                              ],
                              [
                                'courseDescription' => 'Muestreo Geológico y Minero - QAQC',
                                'courseUrl' => 'files/geologia/muestreo-geologico-y-minero-qa-qc.pdf',
                              ],
                              [
                                'courseDescription' => 'Clasificacion de recursos de minerales',
                                'courseUrl' => 'files/geologia/clasificacion-de-recursos-de-minerales.pdf',
                              ],
                              [
                                'courseDescription' => 'Codigos Internacionales y reporte de recursos',
                                'courseUrl' => 'files/geologia/codigos-internacionales-y-reporte-de-recursos.pdf',
                              ]
                        ];
                    ?>

                    @foreach($coursesMetalurgia as $course)
                        @include('layouts.partials.utils.curse', $course)
                    @endforeach
            </div>
        </div>        
    </section>
    {{-- Cursos end --}}
    

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
                    Áreas Destacados
                </h2>                          
            </div>
            <div class="col-12 m-auto shadow bg-white cont-info px-auto px-lg-0">
                <div class="row justify-content-center slider-cursosdestacados">
                    <?php
                    $cursosDestacados = [
                            [
                                'destacadosUrl' => route('gestion'),
                                'destacadosDescription' => 'Gestión',
                                'destacadosImg' => 'images/cursosrelacionados/gestion.jpg',
                            ],
                            [
                                'destacadosDescription' => 'Metalurgia',
                                'destacadosUrl' => route('metalurgia'),
                                'destacadosImg' => 'images/cursosrelacionados/metalurgia.png',
                            ],

                            [
                                'destacadosDescription' => 'Minería',
                                'destacadosUrl' => route('mineria'),
                                'destacadosImg' => 'images/cursosrelacionados/mineria.png',
                            ],
                            [
                                'destacadosDescription' => 'Medio Ambiente',
                                'destacadosUrl' => route('medioambiente'),
                                'destacadosImg' => 'images/cursosrelacionados/medio-ambiente.png',  
                            ],
                            [
                                'destacadosDescription' => 'Seguridad Minera',
                                'destacadosUrl' => route('seguridadminera'),
                                'destacadosImg' => 'images/cursosrelacionados/seguridad-minera.png',
                            ],
                            [
                                'destacadosDescription' => 'Derecho',
                                'destacadosUrl' => route('derechominero'),
                                'destacadosImg' => 'images/cursosrelacionados/derecho.png',
                            ],
                            
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
            <h2 class="text-primary text-uppercase">Nuestros Clientes</h2>
        </div>

        @include('layouts.partials.utils.clientes')

        <div class="circle_profesionals-footer d-none d-lg-block" data-aos="fade-down-left" data-aos-duration="1000">
            <img src="{{asset('images/circle.png')}}" alt="icono circle">
        </div>

    </section>
    {{-- Clientes end --}}
</div>

@endsection