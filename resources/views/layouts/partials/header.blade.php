@section('head')
<!-- Google Tag Manager -->
    <!-- <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-MGDKT9P');</script> -->
<!-- End Google Tag Manager -->

@endsection

{{--@include('layouts.partials.left_header')--}}

<nav class="navbar navbar-expand-lg navbar-light bg-white nav-home" id="menuscroll">
  <!-- Container wrapper -->
    <div class="container">
        <!-- Navbar brand -->
        <!-- <a class="navbar-brand me-2" href="{{route('welcome')}}"> -->
        <a class="navbar-brand me-2" href="https://miningalati.com/">
            <img src="{{asset('images/logo.png')}}"
            height="50" alt="logo" loading="lazy" style="margin-top: -1px;"/>
        </a>
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="dark-blue-text">
                <i class="fas fa-bars sandwitch_icon"></i>
            </span>
        </button>
    
        <!-- Collapsible wrapper -->
        <div class="navbar-collapse justify-content-end collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <!-- <li class="nav-item active">
                    <a class="nav-link text-primary" href="{{route(Request::route()->getName())}}">Inicio</a>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link text-dark" href="#porqueelegirnos">¿POR QUÉ ELEGIRNOS?</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="#especialidades">ESPECIALIDADES-CE</a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link text-dark" href="#porqueelegirnos">NUESTROS CLIENTES</a>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link text-dark" href="#testimonios">EMPRESAS</a>
                </li>
                <li class="nav-item dropdown">
                    <button class="nav-link dropdown-toggle text-dark bg-white border-0 m-auto" href="#" data-toggle="dropdown">VER MÁS PROGRAMAS</button>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <?php
                            $defaultItems = [
                                [
                                    'submenuLabel' => 'CURSOS ESPECIALIZADOS - CE',
                                    'submenuUrl' => route('welcome'),
                                ],
                                [
                                    'submenuLabel' => 'PROGRAMA DE ESPECIALIZACIÓN MINERA - PEM',
                                    'submenuUrl' => 'https://diplomados.miningalati.com/',
                                ],                                
                                [
                                    'submenuLabel' => 'PROGRAMAS A MEDIDA - PMED',
                                ],
                            ];

                            $itemsSubmenu = empty($itemsSubmenu) ? $defaultItems : $itemsSubmenu;
                        ?>

                        @foreach($itemsSubmenu as $item)
                            @include('layouts.partials.item_sub_header', $item)
                        @endforeach
                    </ul>
                </li>
            </ul>
        </div>
    </div>
  <!-- Container wrapper -->
</nav>
