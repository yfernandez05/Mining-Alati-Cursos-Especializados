@section('title', 'Certifícate con líderes Internacionales en capacitación minera.')

@extends('layouts.landing')

@section('css')
<style>
    body{
        background-color: #ecf5f8 !important;
    }
    .slider_home{
        background-image: url(../images/metalurgica.jpg);
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
                    <div data-aos="fade-up" class="cont-white d-none d-md-block text-uppercase"><h3 class="text-primary" style="text-shadow: none;">METALURGIA</h3></div>
                    <h5 class="font-secondary d-none d-md-block" data-aos="zoom-out-right" data-aos-duration="800">
                        Innova con las nuevas tendencias en la Industria Minera
                    </h5>  
                    <h3 data-aos="fade-up" id="" class="d-block d-md-none text-uppercase">
                        CURSOS ESPECIALIZADOS EN METALURGIA
                    </h3>
                </div>
                
                <div class="col-12 col-md-6 col-lg-5 col-xl-4 justify-content-center cont-form" data-aos="fade-left"  data-aos-duration="800">
                    <div class="col-12 col-md-12 col-lg-12 align-self-center p-0">
                        <?php 
                            $cursos = [
                                [
                                    'nombre' => 'Optimización y Técnicas Modernas en la Reducción de Tamaños y Clasificación',
                                    'codigoProducto' => 73,
                                ],
                                [
                                    'nombre' => 'Procesos Hidrometalúrgicos para Minerales de Cobre',
                                    'codigoProducto' => 74,
                                ],
                                [
                                    'nombre' => 'Biotecnología Minera, Biolixiviación y Bioxidación de Minerales',
                                    'codigoProducto' => 75,
                                ],
                                [
                                    'nombre' => 'Electroobtención de Oro y Plata',
                                    'codigoProducto' => 76,
                                ],
                                [
                                    'nombre' => 'Electroobtención de Cobre',
                                    'codigoProducto' => 77,
                                ],
                                [
                                    'nombre' => 'Diseño de Plantas Metalúrgicas Aplicado a Procesos Hidrometalúrgicos',
                                    'codigoProducto' => 78,
                                ],
                                [
                                    'nombre' => 'Flotación de Minerales, Separación Sólido-Líquido',
                                    'codigoProducto' => 79,
                                ],
                                [
                                    'nombre' => 'Pruebas Metalúrgicas y Análisis de Minerales',
                                    'codigoProducto' => 185,
                                ],
                                [
                                    'nombre' => 'Balances de Agua en la Minería, Tratamiento de Relaves y Aguas Ácidas de Mina',
                                    'codigoProducto' => 81,
                                ],
                                [
                                    'nombre' => 'Modelamiento y Simulación de Procesos Metalúrgicos',
                                    'codigoProducto' => 82,
                                ],
                                [
                                    'nombre' => 'Diseño de Plantas Metalúrgicas Aplicados a Plantas de Procesamiento de Minerales',
                                    'codigoProducto' => 83,
                                ],
                                [
                                    'nombre' => 'Pruebas Metalúrgicas y Recuperación Metalúrgica',
                                    'codigoProducto' => 80,
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

    {{-- modalidades start --}}
    {{--
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
                                        Al finalizar, el participante contará con herramientas para visualizar el panorama 
                                        integral de la optimización de costos dentro de la industria minera. Asimismo, 
                                        potenciará su criterio sobre los costos de producción en cada etapa del ciclo de 
                                        vida del proyecto, desde la exploración, desarrollo, operación, hasta el cierre y 
                                        post cierre. Desarrollará habilidades para identificar procesos improductivos y 
                                        corregirlos y podrá tomar decisiones que generen valor a la empresa, haciéndolo 
                                        competitiva y productiva.
                                    </p>

                                    <h4 class="text-primary">Dirigido a:</h4>
                                    <p class="">
                                        Profesionales del sector minero que laboran en áreas de producción, planeamiento 
                                        de minado, procesos, geología, entre otros, además a consultores y especialistas 
                                        en minería. Así también, a aquellos profesionales interesados en profundizar sus 
                                        conocimientos en este aspecto crítico de la industria minera.
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
                                        <span class="text-primary font-primary">Módulo I</span> - Gestión Estratégica de Costos y Presupuestos en Minería
                                    </p>
                                    <p class="">
                                        <span class="text-primary font-primary">Módulo II</span> - Costos y Presupuestos de Operaciones en Minería Superficial
                                    </p>
                                    <p class="">
                                        <span class="text-primary font-primary">Módulo III</span> - Costos y Presupuestos de Preparación y Desarrollo en Minería Subterránea
                                    </p>
                                    <p class="">
                                        <span class="text-primary font-primary">Módulo IV</span> - Costos y Presupuestos de Operaciones en Minería Subterránea
                                    </p>
                                    <p class="">
                                        <span class="text-primary font-primary">Módulo V</span> - Cálculo de Costos de Inversión, Minado, Planta y Ventas
                                    </p>
                                    <p class="">
                                        <span class="text-primary font-primary">Módulo VI</span> - Integración de Operaciones para Optimización de Costos de Procesos en Minería
                                    </p>
                                    <p class="">
                                        <span class="text-primary font-primary">Software: </span>CONSTRUCT SOFT
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
                                        <li>
                                            Staff de consultores de amplia trayectoria académica y empresarial en el sector minero.
                                        </li>
                                        <li>Enfoque práctico basado en experiencias reales de aplicación en el sector minero.</li>
                                        <li>Intercambio de conocimientos con profesionales vinculados al rubro minero.</li>
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
    --}}
    {{-- metodologias end --}}


    {{-- Metodologia start --}}
    <section id="metodologia" class="section_metodologi bg-celeste mb-5 pt-3 pb-5">
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
                            'courseDescription' => 'Optimización y Técnicas Modernas en la Reducción de Tamaños y Clasificación',
                            'courseUrl' => 'files/metalurgia/optimizacion-y-tecnicas-modernas-en-la-reduccion-de-tamanos-y-clasificacion.pdf',
                            ],
                            [
                            'courseDescription' => 'Procesos Hidrometalúrgicos para Minerales de Cobre',
                            'courseUrl' => 'files/metalurgia/procesos-hidrometalurgicos-para-minerales-de-cobre.pdf',
                            ],
                            [
                            'courseDescription' => 'Biotecnología Minera, Biolixiviación y Bioxidación de Minerales',
                            'courseUrl' => 'files/metalurgia/biotecnologia-minera-biolixiviacion-y-bioxidacion-de-minerales.pdf',
                            ],
                            [
                            'courseDescription' => 'Electroobtención de Oro y Plata',
                            'courseUrl' => 'files/metalurgia/electroobtencion-de-oro-y-plata.pdf',
                            ],
                            [
                            'courseDescription' => 'Electroobtención de Cobre',
                            'courseUrl' => 'files/metalurgia/electroobtencion-de-cobre.pdf',
                            ],
                            [
                            'courseDescription' => 'Diseño de Plantas Metalúrgicas Aplicado a Procesos Hidrometalúrgicos',
                            'courseUrl' => 'files/metalurgia/diseno-de-plantas-metalurgicas-aplicado-a-procesos-hidrometalurgicos.pdf',
                            ],
                            [
                            'courseDescription' => 'Flotación de Minerales, Separación Sólido-Líquido',
                            'courseUrl' => 'files/metalurgia/flotacion-de-minerales-separacion-solido-liquido.pdf',
                            ],
                            [
                            'courseDescription' => 'Pruebas Metalúrgicas y Análisis de Minerales',
                            'courseUrl' => 'files/metalurgia/pruebas-metalurgicas-y-analisis-de-minerales.pdf',
                            ],
                            [
                            'courseDescription' => 'Balances de Agua en la Minería, Tratamiento de Relaves y Aguas Ácidas de Mina',
                            'courseUrl' => 'files/metalurgia/balances-de-agua-en-la-mineria-tratamiento-de-relaves-y-aguas-acidas-de-mina.pdf',
                            ],
                            [
                            'courseDescription' => 'Modelamiento y Simulación de Procesos Metalúrgicos',
                            'courseUrl' => 'files/metalurgia/modelamiento-y-simulacion-de-procesos-metalurgicos.pdf',
                            ],
                            [
                            'courseDescription' => 'Diseño de Plantas Metalúrgicas Aplicados a Plantas de Procesamiento de Minerales',
                            'courseUrl' => 'files/metalurgia/diseno-de-plantas-metalurgicas-aplicados-a-plantas-de-procesamiento-de-minerales.pdf',
                            ],
                            [
                            'courseDescription' => 'Pruebas Metalúrgicas y Recuperación Metalúrgica',
                            'courseUrl' => 'files/metalurgia/pruebas-metalurgicas-y-recuperacion-metalurgica.pdf',
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


    {{-- Expositores start --}}
    {{-- 
    <section id="expositores" class="section_expositores mb-3 pt-0 pb-4">
        <div class="container text-center pt-0 pb-4">
            <h2 class="text-primary">Expositores</h2>
        </div>

        <div class="container" data-aos="fade-up" data-aos-duration="600">
            <div class="col slider-expositores text-center">
                <?php
                    $expositores = [
                        [   
                            'expositorImg' => 'images/expositores/patricio-oportus.png',
                            'expositorName' => 'Mg. Patricio Oportus',
                            'expositorDescription' => 'Magister en Marketing y Gestión Comercial por la Escuela Superior de Estudios de 
                            Marketing en Madrid - España. Ingeniero Civil de Minas por la Universidad de Santiago 
                            de Chile, con amplia experiencia en la ejecución de proyectos mineros. Consultor 
                            Senior de Organismos Internacionales, empresas privadas y del sector público. 
                            Investigador y Conferencista en: Bolivia, Chile, España, Estados Unidos, México, Perú y Suecia. ',                            
                        ],
                        [   
                            'expositorImg' => 'images/expositores/carlos-reategui.png',
                            'expositorName' => 'Msc Carlos Reátegui',
                            'expositorDescription' => 'Magíster en Ciencias Económicas con mención en Gestión Empresarial. 
                            Ingeniero de Minas por la Universidad Nacional Del Altiplano Puno - Perú, Asesor en la elaboración 
                            planes estratégicos, presupuestos de inversión, planeamiento de inversiones (Capex) y operacionales 
                            (Opex), con más de 20 años de experiencia en Perforación y Voladura, Planeamiento Mina, Análisis Económico, 
                            Operaciones Mina, Supervisión de carga-transporte, Elaboración de proyectos e inversiones.',                            
                        ],
                        [   
                            'expositorImg' => 'images/expositores/alfonso-jaime.png',
                            'expositorName' => 'Mg. Alfonso Jaime',
                            'expositorDescription' => 'Magister, ingeniero industrial por la pontifica universidad católica - Perú, 
                            MBA por la universidad del pacífico. Con 20 años de experiencia en el sector minero, especialista en 
                            Reducción y optimización de costos operativos y de inversiones, Mejora de procesos y manejo de riesgos 
                            operativos, Gestión financiera, Gestión de inversiones, Planeamiento estratégico, Presupuestos, 
                            Implementación y manejo de SAP/Mincom. Consultor de Southern Perú Copper Corporation, Minsur entre otras, 
                            actualmente es conferencista en Perú.',                            
                        ],
                        [   
                            'expositorImg' => 'images/expositores/edgar-garcia-flores.png',
                            'expositorName' => 'MBA. Carlos Edgar García Flores',
                            'expositorDescription' => 'MBA - Master en Dirección y Administración de Empresas MBA - DAE impartido 
                            por la Escuela Europea de Negocios ENN - Madrid - España, Ingeniero de Minas por la Universidad Nacional de 
                            Piura Lima - Perú. Especialista en Minería Subterránea, construcción de túneles Civiles Mineros, Obras de Ingeniería 
                            subterránea y Seguridad Industrial. Actualmente se desempeña como Ingeniero Coordinador de proyectos de la empresa IESA 
                            SRL Bolivia - Obras Subterráneas, Mina Colquiri - La Paz - Bolivia. Expositor y Capacitador en centros de formación 
                            profesional en PERÚ Y BOLIVIA.',                            
                        ],
                        [ 
                            'expositorImg' => 'images/expositores/alvaro-rodriguez-munizaga.png',  
                            'expositorName' => 'Ing. Alvaro Rodríguez',
                            'expositorDescription' => 'Ingeniero Civil de Minas por la Universidad de Chile en 1978. Ha desarrollado su carrera principalmente 
                            en el área de planificación minera de rajo abierto. con mas de 30 años de experiencia habiendo trabajado en la División Chuquicamata, 
                            Minera Escondida, Minera Michilla y El Tesoro. En su desempeño como consultor ha estado involucrado en el proyecto Rajo Norte de 
                            El Teniente, en Mantos Blancos, Cerro Blanco(Polpaico), la mina Tenardita en el Salar Grande y Radomiro Tomic. Actualmente consultor 
                            asociado a Core Mining Studies.',                            
                        ],
                    ];
                ?>

                @foreach($expositores as $expoItems)
                        @include('layouts.partials.utils.expositores', $expoItems)
                @endforeach                           
            </div>
        </div>
    </section>
    --}}
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