<!DOCTYPE html>
<!-- Template Name: Clip-Two - Responsive Admin Template build with Twitter Bootstrap 3.x | Author: ClipTheme -->
<!--[if IE 8]><html class="ie8" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- start: HEAD -->
    <head>
        <title>22Congreso Nacional de Danza Jazz</title>
        <!-- start: META -->
        <!--[if IE]><meta http-equiv='X-UA-Compatible' content="IE=edge,IE=9,IE=8,chrome=1" /><![endif]-->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- end: META -->
        <!-- start: GOOGLE FONTS -->
        <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
        <!-- end: GOOGLE FONTS -->

        <link rel="shortcut icon" type="image/x-icon" href="<?= base_url() ?>assets/img/favicon.png" />
        <link rel="apple-touch-icon" href="<?= base_url() ?>assets/img/favicon.png" />


        <!-- start: MAIN CSS -->
        <link rel="stylesheet" href="<?= base_url()?>assets/vendor/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?= base_url()?>assets/vendor/bootstrap/css/bootstrap-rtl.min.css">
        <link rel="stylesheet" href="<?= base_url()?>assets/vendor/fontawesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?= base_url()?>assets/vendor/themify-icons/themify-icons.min.css">
        <link href="<?= base_url()?>assets/vendor/animate.css/animate.min.css" rel="stylesheet" media="screen">
        <link href="<?= base_url()?>assets/vendor/perfect-scrollbar/perfect-scrollbar.min.css" rel="stylesheet" media="screen">
        <link href="<?= base_url()?>assets/vendor/switchery/switchery.min.css" rel="stylesheet" media="screen">
        <!-- end: MAIN CSS -->
        <!-- start: CLIP-TWO CSS -->
        <link rel="stylesheet" href="<?= base_url()?>assets/css/styles.css">
        <link rel="stylesheet" href="<?= base_url()?>assets/css/plugins.css">
        <link rel="stylesheet" href="<?= base_url()?>assets/css/themes/theme-1.css" id="skin_color" />
        <link rel="stylesheet" href="<?= base_url()?>assets/css/rtl.css"/>

        <link href="<?php echo base_url()?>assets/vendor/bootstrap-datepicker/bootstrap-datepicker3.standalone.min.css" rel="stylesheet" media="screen">

        <!-- end: CLIP-TWO CSS -->
        <!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
        <!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->
    </head>
    <!-- end: HEAD -->
    <body>
        <div id="app">
            <div class="app-content">
                <!-- start: TOP NAVBAR -->
                <header class="navbar navbar-default navbar-static-top">
                    <!-- start: NAVBAR HEADER -->
                    <div class="navbar-header">
                        <a href="#" class="sidebar-mobile-toggler pull-right hidden-md hidden-lg" class="btn btn-navbar sidebar-toggle" data-toggle-class="app-slide-off" data-toggle-target="#app" data-toggle-click-outside="#sidebar">
                            <i class="ti-align-justify"></i>
                        </a>
                        <a class="navbar-brand" href="#">
                            
                        </a>
                        <a href="#" class="sidebar-toggler pull-left visible-md visible-lg" data-toggle-class="app-sidebar-closed" data-toggle-target="#app">
                            <i class="ti-align-justify"></i>
                        </a>
                        <a class="pull-left menu-toggler visible-xs-block" id="menu-toggler" data-toggle="collapse" href=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <i class="ti-view-grid"></i>
                        </a>
                    </div>
                    <!-- end: NAVBAR HEADER -->
                    <!-- start: NAVBAR COLLAPSE -->
                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-right">                         
                            <!-- start: USER OPTIONS DROPDOWN -->
                            <li class="dropdown current-user">
                                <a href class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="<?= base_url()?>assets/img/logo.jpg" alt="LOGO"> <span class="username">Admin <i class="ti-angle-down"></i></i></span>
                                </a>
                                <ul class="dropdown-menu dropdown-dark">
                                    <li>
                                        <a href="<?= base_url() ?>JazzAdmin/logoutUser">
                                            Salir
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!-- end: USER OPTIONS DROPDOWN -->
                        </ul>
                        <!-- start: MENU TOGGLER FOR MOBILE DEVICES -->
                        <div class="close-handle visible-xs-block menu-toggler" data-toggle="collapse" href=".navbar-collapse">
                            <div class="arrow-left"></div>
                            <div class="arrow-right"></div>
                        </div>
                        <!-- end: MENU TOGGLER FOR MOBILE DEVICES -->
                    </div>
                    <a class="dropdown-off-sidebar" data-toggle-class="app-offsidebar-open" data-toggle-target="#app" data-toggle-click-outside="#off-sidebar">
                        &nbsp;
                    </a>
                    <!-- end: NAVBAR COLLAPSE -->
                </header>
                <!-- end: TOP NAVBAR -->
                <div class="main-content" >
                    <div class="wrap-content container" id="container">
                        <!-- start: PAGE TITLE -->
                        <section id="page-title">
                            <div class="row">
                                <div class="col-sm-8">
                                    <h1 class="mainTitle"><?= $sede->nombre_sede?></h1>
                                    <span class="mainDescription"><?= $sede->fecha ?></span>
                                </div>
                                <ol class="breadcrumb">
                                    <li>
                                        <span>Inicio</span>
                                    </li>
                                    <li >
                                        <a href="<?= base_url()?>JazzAdmin/tablero"><span>Dashboard</span></a>
                                    </li>
                                    <li >
                                        <a href="<?= base_url()?>JazzAdmin/sede/<?= $sede->id_sede?>"><span><?= $sede->nombre_sede ?></span></a>
                                    </li>   
                                    <li class="active">
                                        <span>Constancias</span>
                                    </li>                                                                        
                                </ol>
                            </div>
                        </section>



                        <div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-white no-radius text-center">
                                    <div class="panel-body">
                                        <table id="data-table" class="table table-striped table-bordered">
                                            <thead>
                                                <tr>                
                                                    <th>#</th>
                                                    <th>Nombre</th>
                                                    <th>Correo</th>
                                                    <th>Lugar</th>                                                    
                                                    <th>Como</th>
                                                    <th>Sede</th>
                                                    <th>del</th>
                                                    <th>al</th>   
                                                    <th>de</th>      
                                                    <th>Maestros</th>
                                                    <th>Organizadores</th>
                                                    <th>Status</th>
                                                    <th>Constancia</th>
                                                    <th>Diploma</th>
                                                    <th>Enviar</th>                                 

                                                </tr>
                                            </thead>
                                            <?
                                            if ($constancias->num_rows()>0){ 
                                                foreach ($constancias->result() as $constancia){ ?>
                                                <tr>
                                                    <td><?= $constancia->id_constancia; ?></td>
                                                    <td><?= $constancia->nombre; ?></td>
                                                    <td><?php if ($constancia->email!="null"){ echo $constancia->email; } ?></td>
                                                    <td><?= $constancia->lugar ?></td>                                                    
                                                    <td><?= $constancia->como ?></td>
                                                    <td><?= $constancia->sede ?></td>
                                                    <td><?= $constancia->del ?></td>
                                                    <td><?= $constancia->al ?></td>
                                                    <td><?= $constancia->de ?></td>               
                                                    <td><?= $constancia->maestros ?></td>                         
                                                    <td><?= $constancia->organizadores ?></td>
                                                    <td>
                                                        <?
                                                        if ($constancia->status==0) { ?>               
                                                            <i class="fa fa-close" style="color:red" ></i>
                                                        <? } 
                                                        else{ ?>
                                                            <i class="fa fa-check" style="color:green"></i>
                                                        <? } ?>
                                                    </td>
                                                    <td>
                                                        <?if ($constancia->tipo==1) { ?>               
                                                            <a href="<?= base_url()?>JazzAdmin/getConstancia/<?= $constancia->id_constancia?>" target="_blank"><i class="fa fa-file-o"></i></a>
                                                        <? }  ?>
                                                    </td>                                                    
                                                    <td>
                                                        <?if ($constancia->tipo==2) { ?>               
                                                            <a href="<?= base_url()?>JazzAdmin/getDiploma/<?= $constancia->id_constancia?>" target="_blank"><i class="fa fa-file-o"></i></a>
                                                        <? }  ?>                                                       
                                                    </td> 
                                                    <td>
                                                        <span data-toggle="modal" data-target=".bs-example-modal-sm" style="cursor: pointer; color:#a82737" id="<?= $constancia->id_constancia?>" name="<?= $constancia->email?>" 
                                                            onclick="sendMail('<?= $constancia->id_constancia?>','<?= $constancia->email?>','<?= $constancia->tipo?>')">
                                                            <i class="fa fa-envelope" ></i>
                                                        </span>                                                            
                                                    </td>                                                                                                        
                                                </tr>
                                            <? }
                                            }
                                            else { ?>
                                            <tr>
                                                    <td colspan="11" align="center"> No hay alumnos registrados en esta sede </td>
                                            </tr>
                                            <? } ?> 
                                            <tfoot>
                                                <tr>                
                                                    <th>#</th>
                                                    <th>Nombre</th>
                                                    <th>Correo</th>
                                                    <th>Lugar</th>
                                                    <th>Como</th>
                                                    <th>Sede</th>
                                                    <th>del</th>
                                                    <th>al</th>   
                                                    <th>de</th>      
                                                    <th>Maestros</th>
                                                    <th>Organizadores</th>
                                                    <th>Status</th>
                                                    <th>Generar</th>
                                                    <th>Enviar</th>                                                    
                                                </tr>                                                    
                                            </tfoot>            
                                            <tbody>        
                                            </tbody>
                                        </table> 

                                    </div>
                                </div>
                            </div>

                        </div>

                        <!-- end: PAGE TITLE -->
                        <!-- start: YOUR CONTENT HERE -->
                        <!-- end: YOUR CONTENT HERE -->
                    </div>
                </div>
            </div>
            <!-- start: FOOTER -->

                <!-- start: Concurso-->
                <div class="row">
                    <!-- Up Aside -->
                    <form id="frm_constancia">
                    <div class="modal fade modal-aside vertical top bs-preview"  tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="overflow: auto;">
                        <div class="modal-dialog modal-dialog modal-sm">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <h4 class="modal-title" id="myModalLabel">ALUMNO :: <?= $sede->nombre_sede?></h4>
                                </div>
                                <div class="modal-body">


                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary btn-o" data-dismiss="modal">
                                        Cerrar
                                    </button> 
                                    <button type="button" class="btn btn-primary" data-dismiss="modal" id="save_observacion">
                                        Guardar Observación
                                    </button>                                                                       
                                </div>
                            </div>
                        </div>
                    </div>
                    </form>
                    <!-- /Up Aside -->
                </div>                      
                <!-- end: Concurso -->

                <!-- Small Modal -->
                <div class="modal fade bs-example-modal-sm"  tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog modal-sm">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <h4 class="modal-title" id="myModalLabel">Enviar constancia a:</h4>
                            </div>
                            <div class="modal-body">

                                <form role="form" class="form-horizontal" action="<?= base_url()?>JazzAdmin/sendConstancia" method="post" target="_blank">
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="inputEmail3">
                                            Correo
                                        </label>
                                        <div class="col-sm-10">
                                            <input type="email" placeholder="Email" class="form-control" name="to" id="to">
                                            <input type="hidden" name="id_constancia" id="form_id_constancia">
                                            <input type="hidden" name="tipo" id="tipo">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                            <div class="checkbox clip-check check-primary">
                                                <input type="checkbox" id="checkbox2" value="1" name="bcc" >
                                                <label for="checkbox2">
                                                    Enviar copia a <br>"barbaraluna@hotmail.com"
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary btn-o" data-dismiss="modal">
                                    Cancelar
                                </button>
                                <button class="btn btn-o btn-primary" type="submit">Enviar</button>                               
                            </div>
                            </form>

                        </div>
                    </div>
                </div>

            <footer>
                <div class="footer-inner">
                    <div class="pull-right">
                        &copy; <span class="current-year"></span><span class="text-bold text-uppercase">Danza Jazz</span>. <span>&copy; 2018</span>
                    </div>
                    <div class="pull-left">
                        <span class="go-top"><i class="ti-angle-up"></i></span>
                    </div>
                </div>
            </footer>
            <!-- end: FOOTER -->            
        </div>
        <!-- start: MAIN JAVASCRIPTS -->
   
        <script src="<?= base_url()?>assets/vendor/jquery/jquery.min.js"></script>
        <script src="<?= base_url()?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?= base_url()?>assets/vendor/modernizr/modernizr.js"></script>
        <script src="<?= base_url()?>assets/vendor/jquery-cookie/jquery.cookie.js"></script>
        <script src="<?= base_url()?>assets/vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
        <script src="<?= base_url()?>assets/vendor/switchery/switchery.min.js"></script>

        <script src="<?php echo base_url()?>assets/vendor/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>


        <script src="<?php echo base_url(); ?>assets/vendor/DataTables/media/js/jquery.dataTables.js"></script>
        <script src="<?php echo base_url(); ?>assets/vendor/DataTables/media/js/dataTables.bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/vendor/DataTables/extensions/Buttons/js/dataTables.buttons.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/vendor/DataTables/extensions/Buttons/js/buttons.bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/vendor/DataTables/extensions/Buttons/js/buttons.flash.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/vendor/DataTables/extensions/Buttons/js/jszip.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/vendor/DataTables/extensions/Buttons/js/pdfmake.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/vendor/DataTables/extensions/Buttons/js/vfs_fonts.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/vendor/DataTables/extensions/Buttons/js/buttons.html5.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/vendor/DataTables/extensions/Buttons/js/buttons.print.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/vendor/DataTables/extensions/Responsive/js/dataTables.responsive.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/vendor/DataTables/extensions/AutoFill/js/dataTables.autoFill.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/vendor/DataTables/extensions/ColReorder/js/dataTables.colReorder.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/vendor/DataTables/extensions/KeyTable/js/dataTables.keyTable.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/vendor/DataTables/extensions/RowReorder/js/dataTables.rowReorder.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/vendor/DataTables/extensions/Select/js/dataTables.select.min.js"></script>


        <!-- end: MAIN JAVASCRIPTS -->
        <!-- start: CLIP-TWO JAVASCRIPTS -->
        <script src="<?= base_url()?>assets/js/main.js"></script>
        <!-- start: JavaScript Event Handlers for this page -->
        <script>
            jQuery(document).ready(function() {
                Main.init();   

            var table = $('#data-table').DataTable({
            dom: 'lBfrtip',
            buttons: [
                { extend: 'copy', className: 'btn-sm' },
                { extend: 'csv', className: 'btn-sm' },
                { extend: 'excel', className: 'btn-sm' },
                { extend: 'pdf', className: 'btn-sm' },
                { extend: 'print', className: 'btn-sm' }
            ],
            "language": {
                "sProcessing": "Procesando..."
            },
            responsive: true,
            autoFill: false,
            colReorder: false,
            keys: false,
            rowReorder: false,
            select: false,
            iDisplayLength: -1
        });                
            });

            function sendMail(id,mail,tipo){
                $("#form_id_constancia").val(id);
                $("#to").val(mail);
                $("#tipo").val(tipo);

            }

            $("#save_observacion").click(function(){
                var obs = $("#obs_alumno").val(); 
                var f_p = $("#fecha_pago").val(); 
                var token = $("#token_alumno").val();
                var midata = 'observaciones='+obs+'&f_p='+f_p+'&token_qr='+token;
                console.log(obs);
                $.ajax({
                    url: '<?=base_url()?>JazzAdmin/saveObservacion',
                    type: 'POST',
                    data: midata,
                    success: function (xhr){
                        // guardado
                    }
                });
            });

            function loadData(tokenAlumno){
                $(".modal-body").load("<?= base_url();?>JazzAdmin/alumno/", {'token':tokenAlumno});
            }
        </script>
        <!-- end: JavaScript Event Handlers for this page -->
        <!-- end: CLIP-TWO JAVASCRIPTS -->
    </body>
</html>
