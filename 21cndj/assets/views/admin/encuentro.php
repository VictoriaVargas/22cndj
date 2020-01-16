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
                                        <span>Encuentro</span>
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
                                                    <th></th>
                                                    <th>Sede</th>
                                                    <th>Academia</th>                                                    
                                                    <th>Categoría</th>
                                                    <th>Director</th>
                                                    <th>Telefono</th>
                                                    <th>Mail</th> 
                                                    <th>Nombre de la coreografía</th>
                                                    <th>Coreógrafo</th>
                                                    <th>Música</th>
                                                    <th></th>                                                    
                                                </tr>
                                            </thead>
                                            <?
                                            if ($encuentros->num_rows()>0){ 
                                                foreach ($encuentros->result() as $encuentro){ ?>
                                                <tr>
                                                    <td align="center">
                                                        <i onclick="loadData(<?= $encuentro->id_encuentro?>)" class="fa fa-eye text-primary" data-toggle="modal" data-target=".bs-preview" style="cursor: pointer;"></i>
                                                    </td>
                                                    <td><?= $encuentro->nombre_sede ?></td>
                                                    <td><?= $encuentro->academia ?></td>
                                                    <td><?= $encuentro->categoria ?></td>                        
                                                    <td><?= $encuentro->nombre ?></td>
                                                    <td><?= $encuentro->telefono ?></td>
                                                    <td><?= $encuentro->email ?></td>

                                                    <td><?= $encuentro->nombre_coreografia ?></td>
                                                    <td><?= $encuentro->coreografo ?></td>
                                                    <td><?= $encuentro->musica ?></td>
                                                    <td>
                                                        <?if ($encuentro->status==1) { ?>
                                                        <span style="cursor: pointer;"><i class="fa fa-check" style="color:green" onclick="switchAsistencia(1)"></i></span>
                                                        <? } 
                                                        else{ ?>
                                                        <span style="cursor: pointer;"><i class="fa fa-close" style="color:red" onclick="switchAsistencia(0)"></i></span>
                                                        <? } ?>
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
                                                <th></th>                
                                                <th>Sede</th>
                                                <th>Academia</th>
                                                <th>Categoría</th>                                                
                                                <th>Director</th>
                                                <th>Telefono</th>
                                                <th>Mail</th> 
                                                <th>Nombre de la coreografía</th>
                                                <th>Coreógrafo</th>
                                                <th>Música</th>
                                                <th></th>                                                
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
                    <form id="frm_concurso">
                    <div class="modal fade modal-aside vertical top bs-preview"  tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="overflow-y: auto;">
                        <div class="modal-dialog modal-dialog modal-sm">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <h4 class="modal-title" id="myModalLabel">ENCUENTRO :: <?= $sede->nombre_sede?></h4>
                                </div>
                                <div class="modal-body">


                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary btn-o" data-dismiss="modal">
                                        Cerrar
                                    </button>                                   
                                </div>
                            </div>
                        </div>
                    </div>
                    </form>
                    <!-- /Up Aside -->
                </div>                      
                <!-- end: Concurso -->

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
            select: false
        });                
            });

            function loadData(id_encuentro){
                $(".modal-body").load("<?= base_url();?>JazzAdmin/encuentro_detalle/", {'id_encuentro':id_encuentro});

            }
        </script>
        <!-- end: JavaScript Event Handlers for this page -->
        <!-- end: CLIP-TWO JAVASCRIPTS -->
    </body>
</html>
