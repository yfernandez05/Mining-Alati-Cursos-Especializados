require('./bootstrap');
require('jquery.numeric');
import './utils/intTelInput';
//import './utils/socials'; 
import './utils/slick';
import './utils/wavesclick';

$(document).ready(function(){   
    
    //capturar url y mostrarlo en un input UTM start
    function getQueryVariable(variable) {
        var query = window.location.search.substring(1);
        var vars = query.split("&");
        for (var i=0; i < vars.length; i++) {
            var pair = vars[i].split("=");
            if(pair[0] == variable) {
                return pair[1];
            }
        }
        let nulo=""
        return nulo;
    }
    //console.log(window.location)
    //console.log(window.location.href);
    let baseOrigen = window.location.origin+'/';
    let selectCurso = document.getElementById('cursos');
    let valor_origen, carreraname;

    baseOrigen === window.location.href ? valor_origen = 'Página General CE' : valor_origen = window.location.href;
    baseOrigen === window.location.href ? carreraname = 'No definido' : carreraname = document.fomr1.inputCarrera.value;
    
    if(selectCurso){
        selectCurso.addEventListener('change', function() {
            var nombreCurso = this.options[this.selectedIndex].text;
            document.fomr1.inputCarrera.value = nombreCurso;
        });
    }else{
        document.fomr1.inputCarrera.value = carreraname;
    }

    document.fomr1.utm_source.value = getQueryVariable('utm_source');
    document.fomr1.utm_medium.value = getQueryVariable('utm_medium');
    document.fomr1.utm_campaign.value = getQueryVariable('utm_campaign');
    document.fomr1.utm_term.value = getQueryVariable('utm_term');
    document.fomr1.utm_content.value = getQueryVariable('utm_content');
    document.fomr1.origen.value = valor_origen;
    
    
    let source = document.getElementById("utm_source").value,
        medium = document.getElementById("utm_medium").value,
        campaign = document.getElementById("utm_campaign").value,
        term = document.getElementById("utm_term").value,
        content = document.getElementById("utm_content").value,
        procedencia = document.getElementById("procedencia");

    if((source.length == 0) && (medium.length == 0) && (campaign.length == 0) && (term.length == 0) && (content.length == 0)){
        procedencia.value = "Orgánico";
        if(document.fomr1){
            document.getElementById('utm_source').value = 'Web';
        }
    } else{
        procedencia.value = "Pauta";
    }



    //show loader and validation formulario
    let frmCliente = $('#frmCliente'),
        loading = $('#loading'),
        emailError = $('#emailError'),
        celularError = $('#celularError'),
        nombresError = $('#nombresError'),
        cursosError = $('#cursosError'),
        apellidosError = $('#apellidosError'),
        profesionError = $('#profesionError'),
        empresaError = $('#empresaError');
        loading.removeClass('show');

    frmCliente.on('submit', function(){
        loading.addClass('show');
    });

    if(frmCliente){
        $('#celular').numeric(
            {negative: false},
            function () {
                this.value = '';
                this.focus();
            }
        );

        $("#email").blur(function(){
            var regexEmail = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            var currentElement = $(this);
            var valEmail = currentElement.val().trim();
            
            if(!valEmail.length) {
                if(emailError) emailError.text('')
                currentElement.removeClass('is-invalid');
                return;
            }

            if(!regexEmail.test(valEmail)) {
                currentElement.addClass('is-invalid');
                //currentElement.focus();
                if(emailError) emailError.text('El campo email debe ser una dirección de correo válida.')
            }else {
                currentElement.removeClass('is-invalid');
                if(emailError) emailError.text('')
            }

        });
        
        $("#nombres").blur(function(){
            var regexLetters = /^[a-zA-Z-,]+(\s{0,1}[a-zA-Z-, ])*$/;
            var currentElement = $(this);
            var valNombre = currentElement.val().trim();
            
            if(!valNombre.length) {
                if(nombresError) nombresError.text('')
                currentElement.removeClass('is-invalid');
                return;
            }

            if(!regexLetters.test(valNombre)) {
                currentElement.addClass('is-invalid');
                if(nombresError) nombresError.text('El campo nombres solo puede contener letras.')
            }else {
                currentElement.removeClass('is-invalid');
                if(nombresError) nombresError.text('')
            }

        });
        
        $("#profesion").blur(function(){
            var regexLetters = /^[a-zA-Z-,]+(\s{0,1}[a-zA-Z-, ])*$/;
            var currentElement = $(this);
            var valProfesion = currentElement.val().trim();
            
            if(valProfesion.length) {
                if(profesionError) profesionError.text('')
                currentElement.removeClass('is-invalid');
                return;
            }

            /* if(!regexLetters.test(valApellido)) {
                currentElement.addClass('is-invalid');
                if(apellidosError) apellidosError.text('El campo apellidos solo puede contener letras.')
            }else {
                currentElement.removeClass('is-invalid');
                if(apellidosError) apellidosError.text('')
            } */

        });

        $("#empresa").blur(function(){
            var regexLetters = /^[a-zA-Z-,]+(\s{0,1}[a-zA-Z-, ])*$/;
            var currentElement = $(this);
            var valEmpresa = currentElement.val().trim();
            
            if(valEmpresa.length) {
                if(empresaError) empresaError.text('')
                currentElement.removeClass('is-invalid');
                return;
            }
        });

        $("#cursos").change(function() {
            console.log($(this));
            var currentElement = $(this);
            var valCursos = currentElement.val();
          
            if (valCursos === '') {
              $("#cursosError").text('Por favor, seleccione un curso');
              currentElement.addClass('is-invalid');
            } else {
              $("#cursosError").text('');
              currentElement.removeClass('is-invalid');
            }
          });
          
    
    }

    //collapse una a la vez:
    $(document).ready(function() {
        var clicking = false;
      
        $('.col-collapse[data-toggle="collapse"]').click(function() {
          if (!clicking) {
            clicking = true;
      
            var target = $(this).data('target');
            var $target = $(target);
      
            // Deshabilitar clics en los demás elementos
            $('.col-collapse[data-toggle="collapse"]').not(this).prop('disabled', true);
            
            // Cerrar todos los colapsos excepto el colapso objetivo
            $('.collapse').not($target).collapse('hide');
      
            // Habilitar nuevamente los clics después de un breve retraso
            setTimeout(function() {
              $('.col-collapse[data-toggle="collapse"]').prop('disabled', false);
              clicking = false;
            }, 350); // Establece el tiempo de espera deseado en milisegundos (en este caso, 300ms)
          }
        });
      });


    //change icon close menu
    /* $(document).ready(function() {
        $('.navbar-toggler').click(function() {
            var icon = $(this).find('i');
            icon.toggleClass('fa-bars');
            icon.toggleClass('fa-times');
        });
    }); */


    //active menu lateral
    /* const btnMenuLateral = document.getElementById('btn-menu_lateral');
    const menuLateral = document.getElementById('menuLateral');
    const menuIcon = document.getElementById('menu-icon');

    // Evento clic en el botón para agregar/quitar la clase
    btnMenuLateral.addEventListener('click', function() {
        menuLateral.classList.toggle('active-lateral');
    });

    btnMenuLateral.addEventListener('click', function() {
        menuIcon.classList.toggle('fa-mouse-pointer'); // Agregar o quitar clase 'fa-mouse-pointer'
        menuIcon.classList.toggle('fa-times'); // Agregar o quitar clase 'fa-times'
    }); */



    //BACK-TOP start
    $(function(){
        $(document).on('scroll', function() {
            if ($(this).scrollTop() >= 500) {
                $('.back-top').fadeIn('slow');
            } else {
                $('.back-top').fadeOut('slow');
            }
        });

        $('.back-top').click(function() {
            $('html, body').animate({ scrollTop: 0 });
        });
    });


    //CERRAR MENU AL DAR CLICK MOVIL
    var listMenus = $('#navbarSupportedContent'),
    navbarToggler = jQuery('.navbar-toggler');
    $('.navbar').on('click','a.nav-link', function (e) {
        var currentSelect = $(this);
        listMenus.find('li').removeClass('active');

        if(currentSelect.length){
            currentSelect.closest('li').addClass('active');

            if(!navbarToggler.hasClass('collapsed'))
                navbarToggler.trigger('click');
        }
    });
  

    //ACTIVAR MENU FIXED
    var menu = document.getElementById('menuscroll');
    function handleScroll() {
        var scrollPosition = window.scrollY;
        if (scrollPosition > 0) {
            menu.classList.add('menufixed');
        } else {
            menu.classList.remove('menufixed');
        }
    }
    window.addEventListener('scroll', function() {
    requestAnimationFrame(handleScroll);
    });


    /* acordeon body chage icon close*/
    $("#accordion").on("hide.bs.collapse show.bs.collapse", e => {
        $(e.target)
            .prev()
            .find("i:last-child")
            .toggleClass("fa-minus fa-plus");
            //console.log(e.target);
    });


});