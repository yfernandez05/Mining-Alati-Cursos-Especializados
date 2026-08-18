@section('head')
<!-- Google Tag Manager -->
<!-- End Google Tag Manager -->

@endsection
<style>
@media (max-width: 576px){
    #itemsSecondary ul li:nth-child(1) a{
        padding: 5px 9px!important;
    }
    #itemsSecondary ul li:nth-child(2) a{
        padding: 5px 7px!important;
    }
    #itemsSecondary ul li:nth-child(3) a{
        padding: 5px 6px!important;
    }
}    


</style>
<nav class="navbar-expand-lg navbar-light bg-blue nav-home" id="secondarymenu">
  <!-- Container wrapper -->
    <div class="container d-flex justify-content-lg-between justify-content-around align-items-center">
        <!-- Navbar brand -->
        <h5 class="text-white font-secondary m-0">Síguenos en nuestras redes:</h5>
    
        <!-- Collapsible wrapper -->
        <div class=" my-1" id="itemsSecondary">
            <ul class="navbar-nav me-auto flex-wrap flex-row my-2">
                    <li class="mx-1 mx-lg-2">
                        <a href="https://www.facebook.com/MiningAlatisac/" target="_blank" class="bg-white border-radius-circle" style="padding: 5px 10px;">
                            <i class="fab fa-facebook-f fa-sm text-primary"></i>
                        </a>
                    </li>
                    <li class="mx-1 mx-lg-2">
                        <a href="https://www.instagram.com/mining_alati_/" class="bg-white border-radius-circle" style="padding: 5px 8px;">
                            <i class="fab fa-instagram fa-sm text-primary"></i>
                        </a>
                    </li>
                    <li class="mx-1 mx-lg-2">
                        <a href="https://www.youtube.com/c/MiningAlati-Miner%C3%ADa" class="bg-white border-radius-circle" style="padding: 5px 6px;">
                            <i class="fab fa-youtube fa-sm text-primary"></i>
                        </a>
                    </li>
   
            </ul>
        </div>
    </div>
  <!-- Container wrapper -->
</nav>
