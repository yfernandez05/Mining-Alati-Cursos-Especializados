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
    $textTitulo = "Planeamiento de Minado y Cálculo de Reservas";
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
                    <img src="{{asset('images/icons-generals/mineria/banner-people-calculo-de-reservas_mineria.png')}}" alt="Personal educativo">
                </div>

                <div class="col-12 col-md-7 col-lg-4 col-xl-5 text-white text-info_banner">
                    <h5 class="font-secondary d-none d-md-block" data-aos="zoom-out-right" data-aos-duration="800">
                        PROGRAMA DE ESPECIALIZACIÓN MINERA EN
                    </h5>  
                    <h3 data-aos="fade-up" id="title-curso" class="d-none d-md-block text-uppercase">PLANEAMIENTO DE MINADO</h3>
                    <div data-aos="fade-up" class="cont-white d-none d-md-block text-uppercase"><h3 class="text-primary" style="text-shadow: none;">Y CÁLCULO DE RESERVAS</h3></div>
                    <h3 data-aos="fade-up" id="" class="d-block d-md-none text-uppercase">
                        Programa de PLANEAMIENTO DE MINADO Y CÁLCULO DE RESERVAS
                    </h3>               
                </div>
                
                <div class="col-sm justify-content-center cont-form" data-aos="fade-left"  data-aos-duration="800">
                    <div class="col-12 col-md-12 col-lg-12 align-self-center p-0">
                        <?php 
                            $codigoProducto = 18;
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
            <!-- <div class="d-none row">
                <div class="col-11 col-lg-5 m-auto mb-5">
                    <h3 class="text-primary text-center text-uppercase p-2 bg-white mx-auto mb-3">
                        VIRTUAL ASÍNCRONO
                    </h3>
                    <div>
                        <p class="text-white">
                            Clases Autodirigidas que te permiten un aprendizaje asertivo.
                        </p>
                        <p class="text-white">
                            El alumno podrá apoyarse en grabaciones y materiales didácticos 
                            dentro del Campus, teniendo el apoyo y soporte del docente en las sesiones en vivo.
                        </p>
                    </div>
                </div>
                <div class="line-center bg-white d-none d-lg-block" style="width: 3px;"></div>
                <div class="col-11 col-lg-5 mx-auto mt-0">
                    <h3 class="text-primary text-center text-uppercase p-2 bg-white mx-auto mb-3">
                        ONLINE
                    </h3>
                    <div>
                        <p class="text-white">
                            Clases 100% en vivo, cuenta con un horario definido y permite al alumno 
                            interactuar entre el docente y sus compañeros, reforzando la parte cognitiva 
                            con su participación e intercambio de conocimientos.
                        </p>
                    </div>
                </div>
            </div> -->
            
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
                                        El objetivo es dar a conocer: La integridad de variables que intervienen para el inicio 
                                        de un proyecto minero. La evaluación técnica y económica de las actividades minero 
                                        metalúrgicos que intervienen para iniciar y mantener una operación minera. 
                                        Las actividades que se deben desarrollar para establecer una planificación de 
                                        la producción a corto, mediano y largo plazo, que asegure la continuidad de la 
                                        operación y garantice una producción constante de mineral de calidad. Se dará énfasis 
                                        en la ubicación y almacenamiento adecuado de los materiales no económicos que forman 
                                        parte de la producción para asegurar su posible utilización en mejores oportunidades o 
                                        evitar que ocasionen perjuicios al medio ambiente. Se dará especial importancia a la 
                                        necesidad de cuantificar y proyectar los costos de remediación del medio ambiente durante 
                                        el cierre de mina.
                                    </p>

                                    <h4 class="text-primary">Dirigido a:</h4>
                                    <p class="">
                                        Ingenieros de Minas, Gerentes, Sub Gerentes, jefes y demás profesionales relacionados 
                                        a la planificación minera, que deseen transformar la industria y emplear nuevas 
                                        tecnologías para la extracción y procesamiento de los recursos.
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
                                        <span class="text-primary font-primary">Módulo I</span> - Fases del desarrollo Minero
                                    </p>
                                    <p class="">
                                        <span class="text-primary font-primary">Módulo II</span> - Cálculo de Costos de Inversión, Minado, Planta y Ventas
                                    </p>
                                    <p class="">
                                        <span class="text-primary font-primary">Módulo III</span> - Pruebas Metalúrgicas y Recuperación de Metalúrgica
                                    </p>
                                    <p class="">
                                        <span class="text-primary font-primary">Módulo IV</span> - Diseño de Mina y Cálculo de Reservas
                                    </p>
                                    <p class="">
                                        <span class="text-primary font-primary">Módulo V</span> - Planeamiento de Minado, conciliación y reconciliación
                                    </p>
                                    <p class="">
                                        <span class="text-primary font-primary">Módulo VI</span> - Canchas de desmonte, Mineral Marginal y Cierre de Mina
                                    </p>
                                    <p class="">
                                        <span class="text-primary font-primary">Software: </span>*GEMS, WHITTLE
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
                            'expositorImg' => 'images/expositores/patricio-navarro-donoso.png',
                            'expositorName' => 'Dr. Patricio Navarro',
                            'expositorDescription' => 'Doctor en Ciencias de la Ingenieria mención Ingenieria Metalúrgica por la Universidad de 
                            Concepción, Ingeniero Civil Metalurgista por la Universidad Técnica del Estado  Chile, Investigador en 
                            Hidrometalurgia, Lixiviación, Extracción por Solvente, Tratamiento de Efluentes. Catedrático de la Universidad 
                            Santiago de Chile  USACH. Actualmente Consultor especializado en Metalurgia del Oro, Plata, Cobre y polimetálicos. 
                            Investigador y conferencista en Chile, Argentina y Perú.',                            
                        ],
                        [   
                            'expositorImg' => 'images/expositores/carlos-neira.png',
                            'expositorName' => 'Mg. Carlos Neira',
                            'expositorDescription' => 'Magister en Ingeniería de Sistemas, Ingeniero de Minas de la Universidad Nacional de Ingeniería, 
                            Estadía de Investigación en el Centro de Geoestadística de Fontainebleau (Francia). Desarrolló Proyectos de Modernización 
                            con Implementación de Sistemas para empresas del Sector Minero a cargo de organismos internacionales como Banco Mundial y 
                            BID Cuenta con más de treinta proyectos mineros evaluados a nivel nacional e internacional. Especialista en evaluación de 
                            Proyectos de Inversión Minera, Ampliación de Minas en Operación y Optimización de Costos, Software para estimación de recursos, 
                            diseño de minas y cálculo de reservas. Actualmente Director de Geoestadistica.com SAC.',                            
                        ],
                        [   
                            'expositorImg' => 'images/expositores/jose-luis-garavito.png',
                            'expositorName' => 'Ing. José Luis Garavito',
                            'expositorDescription' => 'MBA por la Universidad ESAN - Perú, con Mención en Dirección Avanzada de Proyectos. Ingeniero de 
                            Minas por la Universidad Nacional Mayor de San Marcos - Perú, Especialista en Planificación y dirección de operaciones 
                            mineras subterráneas y tajo abierto. Innovador en los sistemas de administración de información Geológica - Minera, 
                            costos y presupuestos; orientados a la elaboración y ejecución de proyectos mineros. Auditor Experto: Sistema de Gestión 
                            de Seguridad, Higiene Minera y Salud Ocupacional. Actualmente Superintendente de Planeamiento de Minera Aurifera Retamas s.a. MARSA.',                            
                        ],
                        [   
                            'expositorImg' => 'images/expositores/edgar-garcia-flores.png',
                            'expositorName' => 'Msc. Edgard García',
                            'expositorDescription' => 'MBA - Master en Dirección y Administración de Empresas MBA - DAE impartido por la Escuela Europea 
                            de Negocios ENN - Madrid - España, Ingeniero de Minas por la Universidad Nacional de Piura Lima - Perú. 
                            Especialista en Minería Subterránea, construcción de túneles Civiles - Mineros, Obras de Ingeniería subterránea y Seguridad 
                            Industrial. Actualmente se desempeña como Ingeniero Coordinador de proyectos de la empresa IESA SRL - Bolivia - Obras Subterráneas, 
                            Mina Colquiri - La Paz - Bolivia. Expositor y Capacitador en centros de formación profesional en PERÚ Y BOLIVIA',                            
                        ],
                        [ 
                            'expositorImg' => 'images/expositores/alvaro-rodriguez-munizaga.png',  
                            'expositorName' => 'Ing. Alvaro Rodríguez',
                            'expositorDescription' => 'Ingeniero Civil de Minas por la Universidad de Chile en 1978. Ha desarrollado su carrera principalmente 
                            en el área de planificación minera de rajo abierto. con más de 30 años de experiencia habiendo trabajado en la División Chuquicamata, 
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
                            [
                                'destacadosImg' => 'images/icons-generals/mineria/curso-perforacion-voladura.jpg',
                                'destacadosUrl' => route('perforacionvoladurasuperficial_mineria'),
                                'destacadosDescription' => 'Perforación y Voladura en Minera Superficial',
                            ],
                            /* [
                                'destacadosDescription' => 'Perforación y Voladura en Minera Subterránea',
                            ],
                            [
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