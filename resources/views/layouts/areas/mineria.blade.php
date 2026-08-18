@section('title', 'Certifícate con líderes Internacionales en capacitación minera.')

@extends('layouts.landing')

@section('css')
<style>
    body{
        background-color: #ecf5f8 !important;
    }
    /* .slider_home{
        background-image: url(../images/geologica.jpg);
    } */
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
                    <div data-aos="fade-up" class="cont-white d-none d-md-block text-uppercase"><h3 class="text-primary" style="text-shadow: none;">MINERÍA</h3></div>
                    <h5 class="font-secondary d-none d-md-block" data-aos="zoom-out-right" data-aos-duration="800">
                        Innova con las nuevas tendencias en la Industria Minera
                    </h5>  
                    <h3 data-aos="fade-up" id="" class="d-block d-md-none text-uppercase">
                        CURSOS ESPECIALIZADOS EN MINERÍA
                    </h3>
                </div>
                
                <div class="col-12 col-md-6 col-lg-5 col-xl-4 justify-content-center cont-form" data-aos="fade-left"  data-aos-duration="800">
                    <div class="col-12 col-md-12 col-lg-12 align-self-center p-0">
                        <?php 
                            $cursos = [
                                [
                                    'nombre' => 'Procesos de Perforación y Voladura en Minería a Cielo Abierto',
                                    'codigoProducto' => 84,
                                  ],
                                  [
                                    'nombre' => 'Modelos Matemáticos para el Cálculo de Factores de Perforación y Voladura',
                                    'codigoProducto' => 85,
                                  ],
                                  [
                                    'nombre' => 'Equipos de Perforación en Minería Superficial: Criterios de Selección y Optimización Operativa',
                                    'codigoProducto' => 86,
                                  ],
                                  [
                                    'nombre' => 'Planeación, Presupuesto y Costos de Voladuras en Minería Superficial',
                                    'codigoProducto' => 87,
                                  ],
                                  [
                                    'nombre' => 'Análisis y Control de Vibraciones en Voladura Superficial',
                                    'codigoProducto' => 88,
                                  ],
                                  [
                                    'nombre' => 'Modelamiento y Simulación de Perforación y Voladura en Minería Superficial',
                                    'codigoProducto' => 89,
                                  ],
                                  [
                                    'nombre' => 'Procesos de Perforación y Voladura en Minería Subterránea',
                                    'codigoProducto' => 90,
                                  ],
                                  [
                                    'nombre' => 'Equipos de Perforación en Minería Subterránea: Criterios de Selección y Optimización Operativa',
                                    'codigoProducto' => 91,
                                  ],
                                  [
                                    'nombre' => 'Planeación, Presupuesto y Costos de Voladuras en Minería Subterránea',
                                    'codigoProducto' => 92,
                                  ],
                                  [
                                    'nombre' => 'Estrategias Operativas para la Reducción de Costos Minería Subterránea',
                                    'codigoProducto' => 93,
                                  ],
                                  [
                                    'nombre' => 'Análisis y Control de Vibraciones en Voladura Subterránea',
                                    'codigoProducto' => 94,
                                  ],
                                  [
                                    'nombre' => 'Modelamiento y Simulación de Perforación y Voladura en Minería Subterránea',
                                    'codigoProducto' => 95,
                                  ],
                                  [
                                    'nombre' => 'Diseño de Túneles y obras subterráneas',
                                    'codigoProducto' => 96,
                                  ],
                                  [
                                    'nombre' => 'Gestión Estratégica de Costos y Presupuestos en Minería',
                                    'codigoProducto' => 116,
                                  ],
                                  [
                                    'nombre' => 'Costos y Presupuestos de Operaciones en Minería Superficial',
                                    'codigoProducto' => 117,
                                  ],
                                  [
                                    'nombre' => 'Costos y Presupuestos de Preparación y Desarrollo en Minería Subterránea',
                                    'codigoProducto' => 118,
                                  ],
                                  [
                                    'nombre' => 'Costos y Presupuestos de Operaciones en Minería Subterránea',
                                    'codigoProducto' => 119,
                                  ],
                                  [
                                    'nombre' => 'Cálculo de Costos de Inversión, Minado, Planta y Ventas',
                                    'codigoProducto' => 192,
                                  ],
                                  [
                                    'nombre' => 'Integración de Operaciones para Optimización de Costos de Procesos en Minería',
                                    'codigoProducto' => 121,
                                  ],
                                  [
                                    'nombre' => 'Fases del Desarrollo Minero',
                                    'codigoProducto' => 112,
                                  ],
                                  [
                                    'nombre' => 'Cálculo de Costos de Inversión, Minado, Planta y Ventas',
                                    'codigoProducto' => 000,
                                  ],
                                  [
                                    'nombre' => 'Diseño de Mina y Cálculo de Reservas',
                                    'codigoProducto' => 124,
                                  ],
                                  [
                                    'nombre' => 'Planeamiento de Minado, Conciliación y Reconciliación',
                                    'codigoProducto' => 125,
                                  ],
                                  [
                                    'nombre' => 'Canchas de Desmonte, Mineral Marginal y Cierre de Mina',
                                    'codigoProducto' => 126,
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
                                'courseDescription' => 'Procesos de Perforación y Voladura en Minería a Cielo Abierto',
                                'courseUrl' => 'files/mineria/procesos-de-perforacion-y-voladura-en-mineria-a-cielo-abierto.pdf',
                              ],
                              [
                                'courseDescription' => 'Modelos Matemáticos para el Cálculo de Factores de Perforación y Voladura',
                                'courseUrl' => 'files/mineria/modelos-matematicos-para-calculo-de-factores-de-perforacion-y-voladura.pdf',
                              ],
                              [
                                'courseDescription' => 'Equipos de Perforación en Minería Superficial: Criterios de Selección y Optimización Operativa',
                                'courseUrl' => 'files/mineria/equipos-de-perforacion-en-mineria-superficial-criterios-de-seleccion-y-optimizacion-operativa.pdf',
                              ],
                              [
                                'courseDescription' => 'Planeación, Presupuesto y Costos de Voladuras en Minería Superficial',
                                'courseUrl' => 'files/mineria/planeacion-presupuesto-y-costos-de-voladura-en-mineria-superficial.pdf',
                              ],
                              [
                                'courseDescription' => 'Análisis y Control de Vibraciones en Voladura Superficial',
                                'courseUrl' => 'files/mineria/analisis-y-control-de-vibraciones-en-voladura-superficial.pdf',
                              ],
                              [
                                'courseDescription' => 'Modelamiento y Simulación de Perforación y Voladura en Minería Superficial',
                                'courseUrl' => 'files/mineria/modelamiento-y-simulacion-de-perforacion-y-voladura-en-mineria-superficial.pdf',
                              ],
                              [
                                'courseDescription' => 'Procesos de Perforación y Voladura en Minería Subterránea',
                                'courseUrl' => 'files/mineria/procesos-de-perforacion-y-voladura-en-mineria-subterranea.pdf',
                              ],
                              [
                                'courseDescription' => 'Equipos de Perforación en Minería Subterránea: Criterios de Selección y Optimización Operativa',
                                'courseUrl' => 'files/mineria/optimizacion-de-las-operaciones-mineras.pdf',
                              ],
                              [
                                'courseDescription' => 'Planeación, Presupuesto y Costos de Voladuras en Minería Subterránea',
                                'courseUrl' => 'files/mineria/planeacion-presupuesto-y-costos-de-voladura-en-mineria-subterranea.pdf',
                              ],
                              [
                                'courseDescription' => 'Estrategias Operativas para la Reducción de Costos Minería Subterránea',
                                'courseUrl' => 'files/mineria/estrategias-operativas-para-la-reduccion-de-costos-en-mineria-subterranea.pdf',
                              ],
                              [
                                'courseDescription' => 'Análisis y Control de Vibraciones en Voladura Subterránea',
                                'courseUrl' => 'files/mineria/analisis-y-control-de-vibraciones-en-voladura-subterranea.pdf',
                              ],
                              [
                                'courseDescription' => 'Modelamiento y Simulación de Perforación y Voladura en Minería Subterránea',
                                'courseUrl' => 'files/mineria/modalmiento-y-simulacion-de-perforacion-y-voladura-en-mineria-subterranea.pdf',
                              ],
                              [
                                'backgroundLabel' => 'bg-purple',
                                'courseBorder' => 'border-purple',
                                'courseLabel' => 'ONLINE',
                                'courseDescription' => 'Diseño de Túneles y obras subterráneas',
                                'courseUrl' => 'files/mineria/diseno-de-tuneles-y-obras-subterraneas.pdf',
                              ],
                              [
                                'courseDescription' => 'Gestión Estratégica de Costos y Presupuestos en Minería',
                                'courseUrl' => 'files/mineria/gestion-estrategica-de-costos-y-presupuestos-en-mineria.pdf',
                              ],
                              [
                                'courseDescription' => 'Costos y Presupuestos de Operaciones en Minería Superficial',
                                'courseUrl' => 'files/mineria/costos-y-presupuestos-de-operaciones-subterranea.pdf',
                              ],
                              [
                                'courseDescription' => 'Costos y Presupuestos de Preparación y Desarrollo en Minería Subterránea',
                                'courseUrl' => 'files/mineria/costos-y-presupuestos-de-preparacion-y-desarrollo-en-mineria-subterranea.pdf',
                              ],
                              [
                                'courseDescription' => 'Costos y Presupuestos de Operaciones en Minería Subterránea',
                                'courseUrl' => 'files/mineria/costos-y-presupuestos-de-operaciones-en-mineria-subterranea.pdf',
                              ],
                              [
                                'courseDescription' => 'Cálculo de Costos de Inversión, Minado, Planta y Ventas',
                                'courseUrl' => 'files/mineria/calculo-de-costos-de-inversion-minado-planta-y-ventas.pdf',
                              ],
                              [
                                'courseDescription' => 'Integración de Operaciones para Optimización de Costos de Procesos en Minería',
                                'courseUrl' => 'files/mineria/integracion-de-operaciones-para-optimizacion-de-costos-de-procesos-en-mineria.pdf',
                              ],
                              [
                                'courseDescription' => 'Fases del Desarrollo Minero',
                                'courseUrl' => 'files/mineria/fases-del-desarrollo-minero.pdf',
                              ],
                              [
                                'courseDescription' => 'Diseño de Mina y Cálculo de Reservas',
                                'courseUrl' => 'files/mineria/diseno-de-mina-y-calculo-de-reservas.pdf',
                              ],
                              [
                                'courseDescription' => 'Planeamiento de Minado, Conciliación y Reconciliación',
                                'courseUrl' => 'files/mineria/planeamiento-de-minado-conciliacion-y-reconciliacion.pdf',
                              ],
                              [
                                'courseDescription' => 'Canchas de Desmonte, Mineral Marginal y Cierre de Mina',
                                'courseUrl' => 'files/mineria/canchas-de-desmonte-mineral.pdf',
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
                              'destacadosDescription' => 'Geologia',
                              'destacadosUrl' => route('geologia'),                                
                              'destacadosImg' => 'images/cursosrelacionados/geologia.png',                                
                          ],
                          [
                              'destacadosDescription' => 'Metalurgia',
                              'destacadosUrl' => route('metalurgia'),
                              'destacadosImg' => 'images/cursosrelacionados/metalurgia.png',
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