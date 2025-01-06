<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>Gentelella Alela!</title>

    <!-- Bootstrap -->
    <link href="<?= base_url('vendors/bootstrap/dist/css/bootstrap.min.css') ?>" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?= base_url('vendors/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?= base_url('vendors/nprogress/nprogress.css') ?>" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?= base_url('vendors/iCheck/skins/flat/green.css') ?>" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="<?= base_url('vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') ?>"
        rel="stylesheet">
    <!-- JQVMap -->
    <link href="<?= base_url('vendors/jqvmap/dist/jqvmap.min.css') ?>" rel="stylesheet" />
    <!-- bootstrap-daterangepicker -->
    <link href="<?= base_url('vendors/bootstrap-daterangepicker/daterangepicker.css') ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <script language="JavaScript" src="https://code.jquery.com/jquery-1.11.1.min.js" type="text/javascript"></script>
    <script src="script.js"></script>
    <script language="JavaScript" src="https://cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"
        type="text/javascript"></script>
    <script language="JavaScript"
        src="https://cdn.datatables.net/plug-ins/3cfcc339e89/integration/bootstrap/3/dataTables.bootstrap.js"
        type="text/javascript"></script>


    <link rel="stylesheet" type="text/css"
        href="http://cdn.datatables.net/plug-ins/3cfcc339e89/integration/bootstrap/3/dataTables.bootstrap.css">
    <!-- ff -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">



    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!-- Morris Chart Styles-->

    <script>
    $(document).ready(function() {
        $('#datatable').dataTable();

        $("[data-toggle=tooltip]").tooltip();

    });
    </script>


    <!-- Custom Theme Style -->
    <link href="<?= base_url('build/css/custom.min.css') ?>" rel="stylesheet">
    <style>
    a {
        text-decoration: none;
        color: #ffffff;
    }
    </style>

</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella
                                Alela!</span></a>
                    </div>

                    <div class="clearfix"></div>

                    <!-- menu profile quick info -->
                    <div class="profile clearfix">
                        <div class="profile_pic">
                            <img src="<?= base_url('images/img.jpg') ?>" alt="..." class="img-circle profile_img">
                        </div>
                        <div class="profile_info">
                            <span>Welcome,</span>
                            <h2>John Doe</h2>
                        </div>
                    </div>
                    <!-- /menu profile quick info -->

                    <br />

                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section">
                            <h3>General</h3>
                            <ul class="nav side-menu">
                                <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="<?= base_url('dashboard') ?>">Dashboard</a></li>
                                        <li><a href="dashboard/">Dashboard2</a></li>
                                        <li><a href="index3.html">Dashboard3</a></li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-edit"></i> Content <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">

                                        <li><a href="#">Slider</a></li>
                                        <li><a href="<?= base_url('fund_raise') ?>">Our Causes</a></li>
                                        <li><a href="<?= base_url('project/') ?>">Project</a></li>
                                        <li><a href="<?= base_url('volunteer/') ?>">Volunteer</a></li>
                                        <li><a href="<?= base_url('donor') ?>">Donor Say</a></li>

                                        <li><a href="#">About us</a></li>


                                    </ul>
                                </li>

                                <li><a><i class="fa fa-edit"></i> Forms <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="<?= base_url('general/') ?>">General Form</a></li>
                                        <li><a href="<?= base_url('') ?>">Advanced Components</a></li>
                                        <li><a href="<?= base_url('') ?>">Form Validation</a></li>
                                        <li><a href="<?= base_url('') ?>">Form Wizard</a></li>
                                        <li><a href="<?= base_url('') ?>">Form Upload</a></li>
                                        <li><a href="">Form Buttons</a></li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-desktop"></i> UI Elements <span
                                            class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="<?= base_url('gallery/') ?>">Gallery</a></li>
                                        <li><a href="media_gallery.html">Media Gallery</a></li>
                                        <li><a href="typography.html">Typography</a></li>
                                        <li><a href="icons.html">Icons</a></li>
                                        <li><a href="glyphicons.html">Glyphicons</a></li>
                                        <li><a href="widgets.html">Widgets</a></li>
                                        <li><a href="invoice.html">Invoice</a></li>
                                        <li><a href="inbox.html">Inbox</a></li>
                                        <li><a href="calendar.html">Calendar</a></li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-table"></i> Tables <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="tables.html">Tables</a></li>
                                        <li><a href="tables_dynamic.html">Table Dynamic</a></li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-bar-chart-o"></i> Data Presentation <span
                                            class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="chartjs.html">Chart JS</a></li>
                                        <li><a href="chartjs2.html">Chart JS2</a></li>
                                        <li><a href="morisjs.html">Moris JS</a></li>
                                        <li><a href="echarts.html">ECharts</a></li>
                                        <li><a href="other_charts.html">Other Charts</a></li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-clone"></i>Layouts <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="fixed_sidebar.html">Fixed Sidebar</a></li>
                                        <li><a href="fixed_footer.html">Fixed Footer</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>


                    </div>
                    <!-- /sidebar menu -->


                </div>
            </div>




            <!-- page content -->
            <div class="right_col" role="main">
                <!-- top tiles -->

                <?= $this->renderSection('content') ?>







            </div>
            <!-- /page content -->

            <!-- footer content -->
            <footer>
                <div class="pull-right">
                    Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
                </div>
                <div class="clearfix"></div>
            </footer>
            <!-- /footer content -->
        </div>
    </div>

    <!-- jQuery -->
    <script src="<?= base_url('vendors/jquery/dist/jquery.min.js') ?>"></script>
    <!-- Bootstrap -->
    <script src="<?= base_url('vendors/bootstrap/dist/js/bootstrap.bundle.min.js') ?>"></script>
    <!-- FastClick -->
    <script src="<?= base_url('vendors/fastclick/lib/fastclick.js') ?>"></script>
    <!-- NProgress -->
    <script src="<?= base_url('vendors/nprogress/nprogress.js') ?>"></script>
    <!-- Chart.js -->
    <script src="<?= base_url('vendors/Chart.js/dist/Chart.min.js') ?>"></script>
    <!-- gauge.js -->
    <script src="<?= base_url('vendors/gauge.js/dist/gauge.min.js') ?>"></script>
    <!-- bootstrap-progressbar -->
    <script src="<?= base_url('vendors/bootstrap-progressbar/bootstrap-progressbar.min.js') ?>"></script>
    <!-- iCheck -->
    <script src="<?= base_url('vendors/iCheck/icheck.min.js') ?>"></script>
    <!-- Skycons -->
    <script src="<?= base_url('vendors/skycons/skycons.js') ?>"></script>
    <!-- Flot -->
    <script src="<?= base_url('vendors/Flot/jquery.flot.js') ?>"></script>
    <script src="<?= base_url('vendors/Flot/jquery.flot.pie.js') ?>"></script>
    <script src="<?= base_url('vendors/Flot/jquery.flot.time.js') ?>"></script>
    <script src="<?= base_url('vendors/Flot/jquery.flot.stack.js') ?>"></script>
    <script src="<?= base_url('vendors/Flot/jquery.flot.resize.js') ?>"></script>
    <!-- Flot plugins -->
    <script src="<?= base_url('vendors/flot.orderbars/js/jquery.flot.orderBars.js') ?>"></script>
    <script src="<?= base_url('vendors/flot-spline/js/jquery.flot.spline.min.js') ?>"></script>
    <script src="<?= base_url('vendors/flot.curvedlines/curvedLines.js') ?>"></script>
    <!-- DateJS -->
    <script src="<?= base_url('vendors/DateJS/build/date.js') ?>"></script>
    <!-- JQVMap -->
    <script src="<?= base_url('vendors/jqvmap/dist/jquery.vmap.js') ?>"></script>
    <script src="<?= base_url('vendors/jqvmap/dist/maps/jquery.vmap.world.js') ?>"></script>
    <script src="<?= base_url('vendors/jqvmap/examples/js/jquery.vmap.sampledata.js') ?>"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="<?= base_url('vendors/moment/min/moment.min.js') ?>"></script>
    <script src="<?= base_url('vendors/bootstrap-daterangepicker/daterangepicker.js') ?>"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?= base_url('build/js/custom.min.js') ?>"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.bootstrap5.js"></script>

    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>

</body>

</html>