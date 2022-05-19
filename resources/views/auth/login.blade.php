
<!DOCTYPE html>

<html>

<head>

    <!--=====================================
    =            Sección Inicial            =
    ======================================-->

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'POA') }}</title>

    <!-- para el ico de inicio -->
    <link rel="shortcut icon" type="image/png" href="{{ asset('images/FaviCon1.png') }}" />

    <!-- para dispositvos móviles -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">


    <!--====  End of Sección Inicial  ====-->

    <!--====================================
    =            Sección de CSS            =
    =====================================-->

    <!-- estilo plantilla secretaría del deporte	 -->
    <link href="{{ asset('layout/styles/layout.css') }}" rel="stylesheet" type="text/css" media="all">

    <!-- estilos datatablets -->
    <link href="{{ asset('layout/datatablets/datatables.min.css') }}" rel="stylesheet" type="text/css">

    <!-- estilos jquery ui -->
    <link href="{{ asset('layout/jquery/jquery-ui.min.css') }}" rel="stylesheet" type="text/css">

    <!-- datapickers -->
    <link rel="stylesheet" href="{{ asset('layout/styles/datepicker.min.css') }}">

    <!-- Alertify CSS -->
    <link rel="stylesheet" href="{{ asset('layout/alertifyjs/css/alertify.min.css') }}">

    <!-- Alertify theme default -->
    <link rel="stylesheet" href="{{ asset('layout/alertifyjs/css/themes/default.min.css') }}"/>

    <!-- font-awesome -->
    <link rel="stylesheet" href="{{ asset('layout/fontawesome/css/all.css') }}">

    <!--================================
    =            CDN De CSS            =
    =================================-->

    <!-- estilos boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <!-- font-awesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>


    <!-- datatablets -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/r/dt/jq-2.1.4,jszip-2.5.0,pdfmake-0.1.18,dt-1.10.9,af-2.0.0,b-1.0.3,b-colvis-1.0.3,b-html5-1.0.3,b-print-1.0.3,se-1.0.1/datatables.min.css"/>

    <!-- datablets responsive -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/1.0.7/css/responsive.bootstrap.min.css">


    <!-- datatablets -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.css"/>

    <!-- font -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/multi-select/0.9.12/css/multi-select.min.css" integrity="sha512-3lMc9rpZbcRPiC3OeFM3Xey51i0p5ty5V8jkdlNGZLttjj6tleviLJfHli6p8EpXZkCklkqNt8ddSroB3bvhrQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!--====  End of CDN De CSS  ====-->

    <!--=====================================
    =            Estilos propios            =
    ======================================-->

    <!-- estilos principales	 -->
    <link href='{{ asset('layout/styles/css/style.css?v=1.0.1') }}' rel='stylesheet' type='text/css'>

    <!-- estilos documentos -->
    <link href='{{ asset('layout/styles/css/styleDocumentos.css?v=1.0.2') }}' rel='stylesheet' type='text/css'>

    <!--====  End of Estilos propios  ====-->


    <!--====  End of Sección de CSS  ====-->


    <!--============================================
    =            Sección de Java Script            =
    =============================================-->


    <!-- Jquery -->
    <script src="{{ asset('layout/jquery/jquery.min.js') }}"></script>

    <!-- Jquery ui -->
    <script src="{{ asset('layout/jquery/jquery-ui.min.js') }}"></script>

    <!-- Plugins Alertify -->
    <script src="{{ asset('layout/alertifyjs/js/alertify.min.js') }}"></script>

    <!-- cloudflare -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.min.js"></script>

    <!-- Sweet alert -->
    <script src="{{ asset('layout/scripts/sweetalert2.all.js') }}"></script>

    <!-- datapickers -->
    <script rel="stylesheet" href="{{ asset('layout/scripts/datepicker.min.js') }}"></script>

    <!-- lenguaje del datapicker -->
    <script rel="stylesheet" href="{{ asset('layout/scripts/datepicker.en.js') }}"></script>

    <!-- datatablets -->
    <script type="text/javascript" src="{{ asset('layout/datatablets/datatables.min.js') }}"></script>

    <!--=========================
    =            CDN            =
    ==========================-->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>


    <!--==============================================================
    =            Botones exportadores para el DATATABLETS            =
    ===============================================================-->

    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.3.1/js/dataTables.buttons.min.js"></script>

    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>

    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.3.1/js/buttons.html5.min.js"></script>

    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.3.1/js/buttons.print.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/node-uuid/1.4.7/uuid.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/multi-select/0.9.12/js/jquery.multi-select.min.js"></script>

    <!--====  End of Botones exportadores para el DATATABLETS  ====-->


    <!--====  End of CDN  ====-->


    <!--============================================
    =            Scripts personalizados            =
    =============================================-->

    <!-- estilo principal -->
    <script type="text/javascript" src="{{ asset('layout/scripts/js/validacion.js?v=1.0.7') }}"></script>

    <!-- validación aspectos básicos teléfonos, números, etc -->
    <script type="text/javascript" src="{{ asset('layout/scripts/js/validacionBasica.js?v=1.0.6') }}"></script>

    <!-- selector validaciones -->
    <script type="text/javascript" src="{{ asset('layout/scripts/js/validacionSelector.js?v=1.0.6') }}"></script>

    <!-- inserción javascript -->
    <script type="text/javascript" src="{{ asset('layout/scripts/js/ajax/inserta.js?v=1.0.7') }}"></script>

    <!-- acciones datatablets -->
    <script type="text/javascript" src="{{ asset('layout/scripts/js/ajax/acciones.js?v=1.0.6') }}"></script>

    <!-- datablets -->
    <script type="text/javascript" src="{{ asset('layout/scripts/js/ajax/datatablet.js?v=1.0.40') }}"></script>

    <!-- validacion global del proyecto -->
    <script type="text/javascript" src="{{ asset('layout/scripts/js/validaGlobal.js?v=1.1.30') }}"></script>

    <!-- matriz construccion -->
    <script type="text/javascript" src="{{ asset('layout/scripts/js/segmentos.js?v=1.1.18') }}"></script>

    <!-- segmentos js -->
    <script type="text/javascript" src="{{ asset('layout/scripts/js/poaConstruccion/matrizConstruccion.js?v=1.1.29') }}"></script>

    <!-- elementos ocultos -->
    <script type="text/javascript" src="{{ asset('layout/scripts/js/elementosOcultos.js?v=1.0.6') }}"></script>

    <!--====  End of Scripts personalizados  ====-->

</head>

<!--=======================================
=            Sección principal            =
========================================-->

<body id="top">

<!--=======================================
=            Menús Utilitarios            =
========================================-->
<div class="wrapper">

    <nav id="mainav" class="clear">

        <ul class="clear" style="display: block!important;">

            <!--========================================
            =            Maquetando el menú            =
            =========================================-->

            <li class="elementos__li__flex">


            </li>

            <!--====  End of Maquetando el menú  ====-->


        </ul>

    </nav>

</div>

<!--====  End of Menús Utilitarios  ====-->

<!--=======================================
=            Sección principal            =
========================================-->



<div class="wrapper">


    <div class="d d-md-flex">

        <div class="d d-md-flex align-items-center">

            <img src="{{ asset('images/logoMinisterio.png') }}" />

        </div>

        <figure class="d d-flex flex-column  align-items-center justify-content-center">

            <img src="{{ asset('images/fondoLogin.jpeg') }}" class="ancho__imagen" />

            <figcaption class="redes__socialesLogin row">

                <div class="col col-12 text-center mt-2 color__loginTitulo titulo__principalLogin">

                    POA

                </div>

                <div class="col col-12 text-center mt-2 color__loginTitulo">

                    SIGUENOS EN

                </div>

                <a class="col col-4 text-center mt-2" href="https://www.facebook.com/MinisterioDeporteEcuador" target="_blank">

                    <i class="fab fa-facebook iconos__blancos iconos__inicio"></i>

                </a>

                <a class="col col-4 text-center mt-2" href="https://twitter.com/DeporteEc" target="_blank">

                    <i class="fab fa-twitter iconos__blancos iconos__inicio"></i>

                </a>

                <a class="col col-4 text-center mt-2" href="https://www.youtube.com/user/DeporteEc" target="_blank">

                    <i class="fab fa-youtube iconos__blancos iconos__inicio"></i>

                </a>

                <a class="col col-12 text-center mt-2 color__loginTitulo">

                    SE RECOMIENDA EL USO DEL NAVEGADOR GOOGLE CHROME PARA MEJOR EXPERIENCIA <i class="fab fa-chrome"></i>

                </a>



            </figcaption>

        </figure>

    </div>


    <form class="row contenedor__negro d d-flex flex-column align-items-center"  method="post" action="{{ route('login') }}" >
        @csrf
        <div class="row contenedor__formulario__dos">


            <div class="col col-12 usuario__indicada letras__blancas">


            </div>

            <div class="col col-12 d d-flex align-items-center justify-content-center mt-4">

                <i class="far fa-user iconos__blancos"></i>

                &nbsp;&nbsp;

                <input type="text" id="cedula" name="cedula"  class="estilos__inputsRadios letras__blancas" placeholder="Ingrese usuario" />

            </div>

            <div class="col col-12 contrasena__indicada letras__blancas mt-4">


            </div>

            <div class="col col-12 d d-flex align-items-center justify-content-center mt-4">

                <i class="far fa-unlock-alt iconos__blancos"></i>

                &nbsp;&nbsp;

                <input type="password" id="password" name="password"  class="estilos__inputsRadios letras__blancas" placeholder="Ingrese contraseña" />

            </div>

            <div class="col col-6 mt-4 d d-flex justify-content-start">

                <a class="botones__iniciales registro__clases registrar__funciones" data-bs-toggle="modal" data-bs-target="#modalRegistros">REGISTRARSE</a>

            </div>


            <div class="col col-6 mt-4 d d-flex justify-content-end">

                <button type="submit" class="botones__iniciales ingresar__clases active__form" name="ingresarUsuario" id="ingresarUsuario">INGRESAR</button>

            </div>

            <div class="col col-12 text-center letras__blancas mt-4 olvido__funciones pointer__botones" data-bs-toggle="modal" data-bs-target="#modalRegistros">

                <a>¿Olvido su contraseña?</a>

            </div>

        </div>

        ERROR: SQLSTATE[HY000] [2054] Server sent charset unknown to the client. Please, report to the developers
    </form>

</div>

<!--====  End of Sección principal  ====-->

<!--=============================
=            Modales            =
==============================-->

<!--====================================
=            Modal registro            =
=====================================-->

<div class="modal fade" id="modalRegistros" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">

        <form id="formularioRegistro" class="modal-content">

            <div class="modal-header row">

                <div class="col col-11 text-center">

                    <h5 class="modal-title" id="exampleModalLabel">REGISTRO DE ORGANISMO DEPORTIVO</h5>

                </div>

                <div class="col col-1">

                    <button type="button" class="btn-close cerrar__modalRegistros cerrar__reload__inicio" data-bs-dismiss="modal" aria-label="Close"></button>

                </div>

            </div>

            <div class="modal-body d d-md-flex">

                <!--===============================================
                =            Sumando archivo de envíos            =
                ================================================-->

                <div class="col col-12 row documentos__confidenciales contenedor__documentosConfidenciales">

                    <div class="col col-12 text-center">

                        <a id="acuerdoConfidencialidadEnlace" target="_blank">REGISTRO DE CREDENCIALES</a>

                    </div>

                    <div class="col col-4 col-md-4 d d-flex mt-4">

                        Ingresar usuario (El usuario es el ruc del organismo deportivo)

                    </div>


                    <div class="container-input d d-flex align-items-center col col-8 col-md-8">

                        <input type="text" id="usuarioOrganismos" name="usuarioOrganismos" class="input__registros campos__obligatorios__dos"/>

                    </div>



                    <div class="col col-4 col-md-4 d d-flex mt-4">

                        Generar código de verificación (Ingresar previamente el usuario)

                    </div>


                    <div class="container-input d d-flex align-items-center col col-8 col-md-8">

                        <a id="generarCodigoVerficacion" class="btn btn-primary pointer__botones"><i class="fas fa-share-square"></i></a>

                    </div>


                    <div class="col col-4 col-md-4 d d-flex mt-4">

                        Ingresar código de verificación

                    </div>


                    <div class="container-input d d-flex align-items-center col col-8 col-md-8">

                        <input type="text" id="codigoVerificacion" name="codigoVerificacion" class="input__registros campos__obligatorios__dos"/>

                    </div>



                    <div class="col col-4 col-md-4 d d-flex mt-4">

                        Ingresar contraseña

                    </div>


                    <div class="container-input d d-flex align-items-center col col-8 col-md-8">

                        <input type="password" id="passwordOrganismoReset" name="passwordOrganismoReset" class="input__registros campos__obligatorios__dos"/>&nbsp;&nbsp;<i class="fas fa-eye" id="ojo_icono" style="padding: .5em; cursor: pointer;"></i>

                    </div>

                    <div class="visualizar__error__password col col-12 text-center"></div>


                </div>

                <!--====  End of Sumando archivo de envíos  ====-->

                <div class="row bloques__registros d d-flex flex-column justify-content-start bloques__eliminados">

                    <div class="col col-12 text-center titulos__ModalSeccion">

                        <i class="fas fa-futbol"></i>&nbsp;&nbsp;ORGANISMO DEPORTIVO

                    </div>

                    <div class="rucRotulo negrilla__titulosEnlazados campos__obligatoriosRotulos col col-12 mt-2"></div>

                    <div class="col col-12 mt-2 d d-flex align-items-center">

                        <input type="text" id="rucOrganismo" name="rucOrganismo" class="input__registros campos__obligatorios solo__numero" placeholder="Ruc organismo deportivo">

                        &nbsp;&nbsp;&nbsp;&nbsp;

                        <i class="fas fa-search"></i>

                    </div>

                    <div class="col col-12 counter__Ruc text-center mt-2"></div>

                    <div class="col col-12 counter__rucOrganismoMensajes text-center mt-2 valida__erroresEscritura"></div>


                    <div class="nombreOrganismoRotulo negrilla__titulosEnlazados campos__obligatoriosRotulos col col-12 mt-2"></div>

                    <div class="col col-12 mt-2 d d-flex align-items-center">

                        <i class="fas fa-volleyball-ball"></i>

                        &nbsp;&nbsp;&nbsp;&nbsp;

                        <input type="text" id="nombreOrganismo" name="nombreOrganismo" class="input__registros campos__obligatorios" placeholder="Nombre organismo deportivo">

                    </div>



                    <div class="col col-12 mt-2 negrilla__titulosEnlazados campos__obligatoriosRotulos">Tipo organismo deportivo</div>

                    <div class="row">

                        <div class="col col-11 mt-2 d d-flex align-items-center">

                            <i class="fas fa-globe-europe"></i>

                            &nbsp;&nbsp;&nbsp;&nbsp;

                            <select type="text" id="tiposOrganimosDeportivos" name="tiposOrganimosDeportivos" class="input__registros campos__obligatorios"></select>

                        </div>

                        <div class="ver__enlacesTipos pointer__botones btn btn-info col col-1 mt-2"><i class="fas fa-eye icono__ojoTipo"></i></div>

                    </div>


                    <div class="row enlazados__tipoOrganismos">

                        <div class="col col-6 negrilla__titulosEnlazados text-justify mt-2 justificado__textos">

                            Área de acción

                        </div>


                        <div class="col col-12 mt-2 d d-flex align-items-center">

                            <input type="hidden" id="areaDeAccion" name="areaDeAccion">

                            <div class="area__accionRotulo text-justify mt-2 justificado__textos uppercase__texto"></div>

                        </div>

                        <div class="col col-12 mt-2 d d-flex align-items-center">

                            <input type="hidden" id="lineaPolitica" name="lineaPolitica">

                            <div class="linea__politicaRotulo text-justify mt-2 justificado__textos"></div>

                        </div>

                        <div class="col col-12 mt-2 d d-flex align-items-center negrilla__titulosEnlazados text-justify mt-2 justificado__textos">

                            Área encargada de analizar Actividades de fomento deportivo, de la educación física y de la recreación

                        </div>

                        <input type="hidden" id="objetivoEstategico" name="objetivoEstategico">

                        <div class="col col-12 mt-2 d d-flex align-items-center">

                            <input type="hidden" id="areaEncargada" name="areaEncargada">

                            <div class="area__encargadaRotulo text-justify mt-2 justificado__textos uppercase__texto"></div>

                        </div>

                    </div>

                    <input type="hidden" id="passwordOrganismo" name="passwordOrganismo" class="input__registros campos__obligatorios col col-12" value="Becquer098" />

                    <div class="col col-12 counterPasswordValido__organismo mt-2 valida__erroresEscritura"></div>


                    <div class="col col-12 mt-2 negrilla__titulosEnlazados campos__obligatoriosRotulos">Provincia</div>

                    <div class="col col-12 mt-2 d d-flex align-items-center">

                        <i class="fas fa-globe-europe"></i>

                        &nbsp;&nbsp;&nbsp;&nbsp;

                        <select type="text" id="provinciaOrganismo" name="provinciaOrganismo" class="input__registros campos__obligatorios"></select>

                    </div>

                    <div class="col col-12 mt-2 negrilla__titulosEnlazados campos__obligatoriosRotulos">Cantón</div>

                    <div class="col col-12 mt-2 d d-flex align-items-center">

                        <i class="fas fa-globe-europe"></i>

                        &nbsp;&nbsp;&nbsp;&nbsp;

                        <select type="text" id="cantonOrganismo" name="cantonOrganismo" class="input__registros campos__obligatorios"></select>

                    </div>

                    <div class="col col-12 mt-2 negrilla__titulosEnlazados campos__obligatoriosRotulos">Parroquia</div>

                    <div class="col col-12 mt-2 d d-flex align-items-center">

                        <i class="fas fa-globe-europe"></i>

                        &nbsp;&nbsp;&nbsp;&nbsp;

                        <select type="text" id="parroquiaOrganismo" name="parroquiaOrganismo" class="input__registros campos__obligatorios"></select>

                    </div>

                    <div class="direccionOrgadireccionRotulo negrilla__titulosEnlazados campos__obligatoriosRotulos col col-12 mt-2"></div>

                    <div class="col col-12 mt-2 d d-flex align-items-center">

                        <i class="fas fa-address-card"></i>

                        &nbsp;&nbsp;&nbsp;&nbsp;

                        <input type="text" id="direccionOrganismo" name="direccionOrganismo" class="input__registros campos__obligatorios" placeholder="Dirección organismo deportivo">

                    </div>

                    <input type="hidden" id="referenciaOrganismo" name="referenciaOrganismo" class="input__registros campos__obligatorios sin__visualizar" placeholder="Referencia dirección organismo deportivo">


                    <input type="text" id="barrioOrganismo" name="barrioOrganismo" class="input__registros campos__obligatorios sin__visualizar" placeholder="Barrio organismo deportivo">

                    <div class="col col-12 text-center titulos__ModalSeccion mt-4">

                        <i class="fas fa-file"></i>&nbsp;&nbsp;DOCUMENTACIÓN

                    </div>

                    <!-- <div class="col col-12 documento__embebido"></div> -->

                    <div class="numeroAcuerdoRotulo negrilla__titulosEnlazados campos__obligatoriosRotulos col col-12 mt-2 justificado__textos"></div>

                    <div class="col col-12 mt-2 d d-flex align-items-center">

                        <i class="fas fa-address-card"></i>

                        &nbsp;&nbsp;&nbsp;&nbsp;

                        <input type="text" id="numeroAcuerdoOrganismo" name="numeroAcuerdoOrganismo" class="input__registros campos__obligatorios" placeholder="Número de acuerdo ministerial organismo deportivo">

                    </div>

                    <div class="nombreOrganismoSegunAcuerdoRotulo negrilla__titulosEnlazados campos__obligatoriosRotulos col col-12 mt-2"></div>

                    <div class="col col-12 mt-2 d d-flex align-items-center">

                        <i class="fas fa-address-card"></i>

                        &nbsp;&nbsp;&nbsp;&nbsp;

                        <input type="text" id="nombreOrganismoSegunAcuerdoOrganismo" name="nombreOrganismoSegunAcuerdoOrganismo" class="input__registros campos__obligatorios" placeholder="Nombre del organismo deportivo según acuerdo ministerial">

                    </div>

                    <div class="fechaAcuerdoRotulo negrilla__titulosEnlazados campos__obligatoriosRotulos col col-12 mt-2 justificado__textos"></div>

                    <div class="col col-12 mt-2 d d-flex align-items-center">

                        <i class="fas fa-address-card"></i>

                        &nbsp;&nbsp;&nbsp;&nbsp;

                        <input type="date" id="fechaAcuerdoOrganismo" name="fechaAcuerdoOrganismo" class="input__registros campos__obligatorios" placeholder="Fecha de acuerdo ministerial organismo deportivo" />

                    </div>


                    <div class="col col-12 mt-2 d d-flex align-items-center row">

                        <div class="col col-6 col-md-5 d d-flex">

                            <span class="negrilla__titulosEnlazados campos__obligatoriosRotulos">Acuerdo ministerial</span>

                        </div>

                        <div class="container-input d d-flex align-items-center col col-6 col-md-7 row">

                            <input type="file" class="inputfile inputfile-5" id="acuerdoMinisterial" name="acuerdoMinisterial" accept="application/pdf"/>

                            <label for="acuerdoMinisterial" class="col col-6 col-md-4">

                                <figure>

                                    <svg xmlns="http://www.w3.org/2000/svg" class="iborrainputfile" width="20" height="17" viewBox="0 0 20 17">

                                        <path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"></path>

                                    </svg>

                                </figure>

                            </label>

                            <span class="iborrainputfile nombre__direccionAcuerdo col col-6 col-md-8">Ningún acuerdo seleccionado</span>

                        </div>

                    </div>

                    <!--=========================================
                    =            Registro directorio            =
                    ==========================================-->

                    <div class="col col-12 mt-2 d d-flex align-items-center row">

                        <div class="col col-6 col-md-5 d d-flex">

                            <span class="negrilla__titulosEnlazados campos__obligatoriosRotulos">Registro de directorio</span>

                        </div>

                        <div class="container-input d d-flex align-items-center col col-6 col-md-7 row">

                            <input type="file" class="inputfile inputfile-5" id="registroDirectorio" name="registroDirectorio" accept="application/pdf"/>

                            <label for="registroDirectorio" class="col col-6 col-md-4">

                                <figure>

                                    <svg xmlns="http://www.w3.org/2000/svg" class="iborrainputfile" width="20" height="17" viewBox="0 0 20 17">

                                        <path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"></path>

                                    </svg>

                                </figure>

                            </label>

                            <span class="iborrainputfile nombre__direccionRegistroDirectorio col col-6 col-md-8">Ningún registro de directorio seleccionado</span>

                        </div>

                    </div>

                    <!--====  End of Registro directorio  ====-->

                    <!--===========================================
                    =            Registro nombramiento            =
                    ============================================-->

                    <div class="col col-12 mt-2 d d-flex align-items-center row">

                        <div class="col col-6 col-md-5 d d-flex">

                            <span class="negrilla__titulosEnlazados campos__obligatoriosRotulos">Registro de nombramiento del adminsitrador financiero<br><div class="enfacis__pequenio">(Siempre y cuando el presupuesto recibido por la organización deportiva supere el monto establecido en el artículo 20 de la Ley del Deporte)</div></span>

                        </div>

                        <div class="container-input d d-flex align-items-center col col-6 col-md-7 row">

                            <input type="file" class="inputfile inputfile-5" id="registroNombramiento" name="registroNombramiento" accept="application/pdf"/>

                            <label for="registroNombramiento" class="col col-6 col-md-4">

                                <figure>

                                    <svg xmlns="http://www.w3.org/2000/svg" class="iborrainputfile" width="20" height="17" viewBox="0 0 20 17">

                                        <path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"></path>

                                    </svg>

                                </figure>

                            </label>

                            <span class="iborrainputfile nombre__registroNombramiento col col-6 col-md-8">Ningún registro nombramiento seleccionado</span>

                        </div>

                    </div>

                    <!--====  End of Registro nombramiento  ====-->


                    <!--=================================================================
                    =            Registro nombramiento administrador general            =
                    ==================================================================-->

                    <div class="col col-12 mt-2 d d-flex align-items-center row">

                        <div class="col col-6 col-md-5 d d-flex">

                            <span class="negrilla__titulosEnlazados campos__obligatoriosRotulos registro__vigente__provincial">Registro vigente del Nombramiento del Administrador General</span>

                        </div>

                        <div class="container-input d d-flex align-items-center col col-6 col-md-7 row">

                            <input type="file" class="inputfile inputfile-5" id="registroVigenteN" name="registroVigenteN" accept="application/pdf"/>

                            <label for="registroVigenteN" class="col col-6 col-md-4 registro__vigente__provincial">

                                <figure>

                                    <svg xmlns="http://www.w3.org/2000/svg" class="iborrainputfile" width="20" height="17" viewBox="0 0 20 17">

                                        <path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"></path>

                                    </svg>

                                </figure>

                            </label>

                            <span class="iborrainputfile nombre__registroNombramientoGeneral col col-6 col-md-8 registro__vigente__provincial">Ningún registro nombramiento seleccionado</span>

                        </div>

                    </div>

                    <!--====  End of Registro nombramiento administrador general  ====-->

                    <!--=================================================================
                    =            Registro Resoluciones de intervenciones a organizaciones deportivas            =
                    ==================================================================-->

                    <div class="col col-12 mt-2 d d-flex align-items-center row">

                        <div class="col col-6 col-md-5 d d-flex">

                            <span class="negrilla__titulosEnlazados campos__obligatoriosRotulos">Resoluciones de intervenciones a organizaciones deportivas (de ser el caso)</span>

                        </div>

                        <div class="container-input d d-flex align-items-center col col-6 col-md-7 row">

                            <input type="file" class="inputfile inputfile-5" id="resolucionInterveciones" name="resolucionInterveciones" accept="application/pdf"/>

                            <label for="resolucionInterveciones" class="col col-6 col-md-4">

                                <figure>

                                    <svg xmlns="http://www.w3.org/2000/svg" class="iborrainputfile" width="20" height="17" viewBox="0 0 20 17">

                                        <path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"></path>

                                    </svg>

                                </figure>

                            </label>

                            <span class="iborrainputfile nombre__IntervencionesOr col col-6 col-md-8">Ningún registro nombramiento seleccionado</span>

                        </div>

                    </div>

                    <!--====  End of Registro Resoluciones de intervenciones a organizaciones deportivas  ====-->

                </div>


                <div class="row bloques__registros margen__registros d d-flex flex-column justify-content-start bloques__eliminados">


                    <input type="hidden" id="cedulaCiudadano" name="cedulaCiudadano" class="input__registros campos__obligatorios solo__numero" placeholder="Cédula presidente del ORGANISMO">


                    <input type="text" id="nombreCiudadano" name="nombreCiudadano" class="input__registros campos__obligatorios col col-12 mt-2 sin__bordes__cs" readonly="" placeholder="Nombre presidente del ORGANISMO">


                    <input type="text" id="apellidoCiudadano" name="apellidoCiudadano" class="input__registros campos__obligatorios col col-12 mt-2 sin__bordes__cs" readonly="" placeholder="Apellido presidente del ORGANISMO">


                    <input type="text" id="sexoCiudadano" name="sexoCiudadano" class="input__registros campos__obligatorios col col-12 mt-2 sin__bordes__cs" readonly="" placeholder="Género presidente del ORGANISMO">


                    <input type="text" id="fechaDeNacimientoCiudadano" name="fechaDeNacimientoCiudadano" class="input__registros campos__obligatorios col col-12 mt-2 sin__bordes__cs" readonly="" placeholder="Fecha nacimiento presidente del ORGANISMO">


                    <input type="text" id="emailCiudadano" name="emailCiudadano" class="input__registros campos__obligatorios col col-12" placeholder="Correo presidente del ORGANISMO">


                    <div class="col col-12 counterCorreo__ciudadano mt-2 valida__erroresEscritura"></div>


                    <div class="col col-12 text-center titulos__ModalSeccion d d-flex justify-content-center mt-4">

                        PERSONA DE CONTACTO
                        <br>
                        (Persona del Organismo Deportivo con quien el ministerio del deporte deberá contactarse para gestionar el POA)

                    </div>

                    <div class="cedulaRepresentanteRotulo negrilla__titulosEnlazados campos__obligatoriosRotulos col col-12 mt-2"></div>

                    <div class="col col-12 mt-2 d d-flex align-items-center">

                        <input type="text" id="cedulaRepresentante" name="cedulaRepresentante" class="input__registros campos__obligatorios solo__numero" placeholder="Cédula representante del ORGANISMO">

                        &nbsp;&nbsp;&nbsp;&nbsp;

                        <div class="reload__personaContacto"></div>

                        <i class="fas fa-search pointer__botones" id="buscar__CedulaPersonaContacto"></i>

                    </div>

                    <div class="col col-12 counter__CedulaRepresentante text-center mt-2"></div>

                    <div class="col col-12 counter__CedulaRepresentanteMensajes text-center mt-2 valida__erroresEscritura"></div>


                    <input type="text" id="nombreRepresentante" name="nombreRepresentante" class="input__registros campos__obligatorios sin__bordes__cs col col-12" placeholder="Nombre representante legal del ORGANISMO">


                    <div class="emailOrganismoRotulo negrilla__titulosEnlazados campos__obligatoriosRotulos col col-12 mt-2"></div>

                    <div class="col col-12 mt-2 d d-flex align-items-center">

                        <i class="fas fa-envelope-square"></i>

                        &nbsp;&nbsp;&nbsp;&nbsp;

                        <input type="text" id="emailOrganismo" name="emailOrganismo" class="input__registros campos__obligatorios" placeholder="Correo">

                    </div>

                    <div class="col col-12 counterCorreo__organismo mt-2 valida__erroresEscritura"></div>


                    <div class="celularRotulo negrilla__titulosEnlazados campos__obligatoriosRotulos col col-12 mt-2"></div>

                    <div class="col col-12 mt-2 d d-flex align-items-center">

                        <i class="fas fa-phone-volume"></i>

                        &nbsp;&nbsp;&nbsp;&nbsp;

                        <input type="text" id="celularCiudadano" name="celularCiudadano" class="input__registros campos__obligatorios solo__numero" placeholder="Teléfono">

                    </div>

                    <div class="col col-12 counterCelular__ciudadano mt-2"></div>

                    <div class="col col-12 counter__CelularMensajes text-center mt-2 valida__erroresEscritura"></div>



                    <input type="text" id="apellidoRepresentante" name="apellidoRepresentante" class="input__registros campos__obligatorios sin__bordes__cs col col-12" placeholder="Apellido representante legal del ORGANISMO">


                    <div class="emailRepresentanteRotulo negrilla__titulosEnlazados campos__obligatoriosRotulos col col-12 mt-2 oculto__email__representante"></div>

                    <div class="col col-12 mt-2 d d-flex align-items-center oculto__email__representante">

                        <i class="fas fa-envelope-square oculto__email__representante"></i>

                        &nbsp;&nbsp;&nbsp;&nbsp;

                        <input type="text" id="emailRepresentante" name="emailRepresentante" class="input__registros campos__obligatorios oculto__email__representante" placeholder="Correo representante legal del ORGANISMO">

                    </div>

                    <div class="col col-12 counterCorreo__representante mt-2 valida__erroresEscritura"></div>

                    <div class="telefonoOficinasRotulo negrilla__titulosEnlazados campos__obligatoriosRotulos col col-12 mt-2"></div>

                    <div class="col col-12 mt-2 d d-flex align-items-center">

                        <i class="fas fa-phone-volume oculto__email__representante"></i>

                        &nbsp;&nbsp;&nbsp;&nbsp;

                        <input type="text" id="telefonoOficinas" name="telefonoOficinas" class="input__registros campos__obligatorios solo__numero oculto__email__representante" placeholder="Teléfono">

                    </div>


                </div>


            </div>


            <!--====  Terminos y condiciones  ====-->

            <div class="row d d-flex justify-content-center align-items-center bloques__eliminados">

                <div class="col col-6 col-md-4 mt-2">

                    <p>Aceptar los <a href="#" class="color__azul" data-bs-toggle='modal' data-bs-target='#terminosCondicionesModal'>Términos y Condiciones</a></p>

                </div>

                <div class="col col-2 col-md-2">

                    <input type="checkbox" name="terminosCondiciones" id="terminosCondiciones">

                </div>

            </div>

            <!--====  End of terminos y condiciones  ====-->

            <div class="modal-footer d d-flex justify-content-center row">

                <div class="col col-12 d d-flex justify-content-center">
                    <button type="button" class="btn btn-primary" id="guardarRegistroPoa" name="guardarRegistroPoa"><i class="fas fa-save"></i>&nbsp;&nbsp;REGISTRAR</button>
                </div>

                <div class="col col-12 d d-flex justify-content-center documentos__confidenciales">
                    <button type="button" class="btn btn-primary documentos__confidenciales" id="guardarAcuerdoConfidencialidad" name="guardarAcuerdoConfidencialidad"><i class="fas fa-save"></i>&nbsp;&nbsp;ENVIAR</button>
                </div>

                <div class="col col-12 reload__registroOrganismos d d-flex justify-content-center"></div>

            </div>

        </form>

    </div>

</div>

<!--====  End of Modal registro  ====-->

<!--===============================
=            Terminots            =
================================-->

<div class="modal fade" id="terminosCondicionesModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">

        <form id="formularioRegistro" class="modal-content">

            <div class="modal-header row">

                <div class="col col-11 text-center">

                    <h5 class="modal-title" id="exampleModalLabel">REGISTRO DE ORGANISMO DEPORTIVO</h5>

                </div>

                <div class="col col-1">

                    <button type="button" class="btn-close cerrar__modalRegistros" data-bs-dismiss="modal" aria-label="Close"></button>

                </div>

            </div>

            <div class="modal-body">

                <div class="mt-4 titulo__enfasis">TÉRMINOS Y CONDICIONES DE USO</div>


                <div class="mt-4">
                    El presente documento establece los términos y condiciones mediante las cuales regirá
                    el uso de las aplicaciones desarrolladas por el Ministerio del Deporte domiciliada en la
                    ciudad San Francisco de Quito, Distrito Metropolitano.
                </div>

                <div class="oblique__estilo titulo__enfasis">Condiciones generales</div>

                <br>

                <ul>

                    <li>El dominio deporte.gob.ec y sus subdominios son titularidad de la institución.</li>

                    <br>

                    <li>

                        El usuario se compromete a leer los términos y condiciones aquí establecidos,
                        previamente al ingreso de la aplicación, por tanto, en caso de realizar el acceso con sus
                        credenciales se entiende que cuenta con el conocimiento integral de este documento y
                        la consecuente aceptación de la totalidad de sus estipulaciones.

                    </li>

                    <br>

                    <li>

                        El uso de las aplicaciones implica la expresa y plena aceptación de las condiciones aquí
                        expuestas, sin perjuicio de aquellas particulares que pudieran aplicarse a algunos de los
                        servicios concretos ofrecidos a través del mismo.

                    </li>

                    <br>

                    <li>

                        El contenido de los trámites es administrado por el Ministerio del Deporte y de la misma
                        manera se podrá efectuar, en cualquier momento y sin necesidad de previo aviso,
                        modificaciones y actualizaciones sobre la información contenida que les corresponda en
                        los aplicativos, así como suspender temporalmente el acceso al mismo de forma
                        discrecional o temporal.

                    </li>

                </ul>

                <br>

                <div class="oblique__estilo titulo__enfasis">Obligaciones de los usuarios</div>

                <br>

                El Usuario se obliga a usar la aplicación y los contenidos encontrados en ella de una
                manera diligente, correcta, lícita y en especial, se compromete a NO realizar las
                conductas descritas a continuación:

                <br>

                <ul>

                    <li>
                        Utilizar los contenidos de forma, con fines o efectos contrarios a la ley, a la moral
                        y a las buenas costumbres generalmente aceptadas o al orden público.
                    </li>

                    <br>

                    <li>
                        Reproducir, copiar, representar, utilizar, distribuir, transformar o modificar los
                        contenidos de la aplicación, por cualquier procedimiento o sobre cualquier
                        soporte, total o parcial, o permitir el acceso del público a través de cualquier
                        modalidad de comunicación pública.
                    </li>

                    <br>

                    <li>Utilizar los contenidos de cualquier manera que entrañen un riesgo de daño o
                        inutilización de la aplicación o de los contenidos o de terceros.</li>
                    <br>

                    <li>Suprimir, eludir o manipular el derecho de autor y demás datos identificativos
                        de los derechos de autor incorporados a los contenidos, así como los dispositivos
                        técnicos de protección, o cualquier mecanismo de información que pudieren
                        tener los contenidos.</li>
                    <br>

                    <li>Emplear los contenidos y, en particular, la información de cualquier clase
                        obtenida a través de la aplicación para distribuir, transmitir, remitir, modificar,
                        rehusar o reportar la publicidad o los contenidos de esta con fines de venta
                        directa o con cualquier otra clase de finalidad comercial, mensajes no solicitados
                        dirigidos a una pluralidad de personas con independencia de su finalidad, así
                        como comercializar o divulgar de cualquier modo dicha información.</li>
                    <br>

                    <li>No permitir que terceros ajenos a usted usen la aplicación con sus credenciales.</li>
                    <br>

                    <li>Utilizar la aplicación y los contenidos con fines lícitos y/o ilícitos, contrarios a lo
                        establecido en estos términos y condiciones, o al uso mismo de la aplicación, que
                        sean lesivos de los derechos e intereses de terceros, o que de cualquier forma
                        puedan dañar, inutilizar, sobrecargar o deteriorar la aplicación y los contenidos
                        o impedir la normal utilización o disfrute de esta y de los contenidos por parte
                        de los usuarios.</li>

                </ul>

                <br>



                <div class="oblique__estilo titulo__enfasis">Responsabilidad de el Ministerio del Deporte</div>

                <ul>

                    <li>el Ministerio del Deporte será la responsable de garantizar disponibilidad, continuidad
                        y buen funcionamiento de la aplicación.</li>
                    <br>

                    <li>La institución podrá bloquear, interrumpir o restringir el acceso a esta cuando lo
                        considere necesario para el mejoramiento de la aplicación o por dada de baja de la
                        misma.
                    </li>
                    <br>

                    <li>Se recomienda al usuario tomar medidas adecuadas y actuar diligentemente al
                        momento de acceder a la aplicación, como, por ejemplo, contar con programas de
                        protección, antivirus, para manejo de malware, spyware y herramientas similares.</li>

                </ul>

                <br>


                <div class="oblique__estilo titulo__enfasis">El Ministerio del Deporte no será responsable por:</div>

                <ul>

                    <li>Fuerza mayor o caso fortuito.</li>
                    <br>
                    <li>Por la pérdida, extravío o hurto de su dispositivo o equipo que implique el acceso
                        de terceros a la aplicación.</li>
                    <br>
                    <li>Por errores en la digitación o accesos por parte del cliente.</li>
                    <br>
                    <li>Denegación y retirada del acceso a la aplicación
                    <li>En el evento en que un usuario incumpla estos términos y condiciones, o cualquier
                        disposición que resulten de aplicación, el Ministerio del Deporte podrá suspender su
                        acceso a la aplicación.</li>

                </ul>

                <br>

                <div class="oblique__estilo titulo__enfasis">Términos y condiciones</div>

                <ul>

                    <li>El Usuario acepta expresamente los términos y condiciones, siendo requisito esencial
                        para la utilización de la aplicación.</li>
                    <br>
                    <li>En el evento en que se encuentre en desacuerdo con estos términos y condiciones,
                        solicitamos abandonar la aplicación inmediatamente.</li>
                    <br>
                    <li>El Ministerio del Deporte podrá modificar los presentes términos y condiciones,
                        notificando a los usuarios de la aplicación mediante publicación en la página web
                        <a href="https://www.deporte.gob.ec/" target="_blank">www.deporte.gob.ec</a> o mediante la difusión de las modificaciones por algún medio
                        electrónico, y/o correo electrónico, lo cual se entenderá aceptado por el usuario si éste
                        continua con el uso de la aplicación.</li>

                </ul>

            </div>

    </div>

    </form>

</div>

</div>

<!--====  End of Terminots  ====-->



<!--====  End of Modales  ====-->




</body>

</html>
