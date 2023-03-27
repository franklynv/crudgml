<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="theme-color" content="#25476A">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="#25476A">
    <meta name="msapplication-navbutton-color" content="#25476A">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta property="og:locale" content="es_CO">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Crud GML">
    <meta property="og:description" content="Crud GML">
    <meta property="og:url" content="/">
    <meta property="og:site_name" content="Crud GML">
    <title>Crud GML</title>
    <!--=================================================-->
    <!--Bootstrap Stylesheet [ REQUIRED ] {{asset('../resources/vendor/fontawesome-free/css/all.min.css')}}-->
    <link href="{{asset('../resources/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('../resources/datatables/dataTables.bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('../resources/datatables/extensions/Responsive/css/dataTables.responsive.css')}}">
    <link rel="stylesheet" href="{{asset('../resources/datatables/extensions/TableTools/css/dataTables.tableTools.min.css')}}"> 
    <!--Morris.js [ OPTIONAL ]-->    
    <link href="{{asset('../resources/css/themes/type-d/theme-navy.min.css')}}" rel="stylesheet">
    <!--Nifty Stylesheet [ REQUIRED ]-->
    <link href="{{asset('../resources/css/nifty.min.css')}}" rel="stylesheet">
    <!--Nifty Premium Icon [ DEMONSTRATION ]-->
    <link href="{{asset('../resources/css/demo/nifty-demo-icons.min.css')}}" rel="stylesheet">
</head>
<body>

    <div id="container" class="effect aside-float aside-bright mainnav-lg">
        <!--NAVBAR-->
        <!--===================================================-->
        <header id="navbar">

            <div id="navbar-container" class="boxed">

                <!--Brand logo & name-->
                <!--================================-->
                <div class="navbar-header">
                    <a href="./" class="navbar-brand">
                        <div class="brand-title">
                            <span class="brand-text">Crud GML</span>
                        </div>
                    </a>
                </div>
                <!--================================-->
                <!--End brand logo & name-->
                <!--Navbar Dropdown-->
                <!--================================-->
                <div class="navbar-content">
                    <ul class="nav navbar-top-links">

                        <!--Navigation toogle button-->
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <li class="tgl-menu-btn">
                            <a class="mainnav-toggle" href="#">
                                <i class="demo-pli-list-view"></i>
                            </a>
                        </li>
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    
                    </ul>
                    
                </div>
                <!--================================-->
                <!--End Navbar Dropdown-->
            </div>
        </header>
        <!--===================================================-->
        <!--END NAVBAR-->
        <section class="boxed">
            
            <!--MAIN NAVIGATION-->
            <!--===================================================-->
            <nav id="mainnav-container">
                <div id="mainnav">
                    
                    <!--Menu-->
                    <!--================================-->
                    <div id="mainnav-menu-wrap">
                        <div class="nano">
                            <div class="nano-content">

                                <ul id="mainnav-menu" class="list-group">
	
                                    <li class="list-header">Navegacion</li>
                                        <li>
                                        <a href="{{ url('/') }}">
                                            <i class="demo-pli-home"></i>
                                            <span class="menu-title">
                                                Inicio
                                            </span>
                                        </a>
                                    </li>
                                        <li class="list-divider"></li>	
                                        <li>
                                        <a href="{{ route('admins.index') }}">
                                            <i class="demo-pli-receipt-4"></i>
                                            <span class="menu-title" >
                                            Administrador
                                            </span>
                                        </a>
                                        <a href="{{ route('perfils.index') }}">
                                            <i class="demo-pli-computer-secure"></i>
                                            <span class="menu-title" >
                                            Categoria
                                            </span>
                                        </a>
                                        <a href="{{ route('usuarios.index') }}">
                                            <i class="demo-pli-male icon-lg icon-fw"></i>
                                            <span class="menu-title" >
                                            Usuario
                                            </span>
                                        </a>
                                    </li>                    

								</ul>
                            </div>
                        </div>
                    </div>
                    <!--================================-->
                    <!--End menu-->

                </div>
            </nav>
            <!--===================================================-->
            <!--END MAIN NAVIGATION-->
            <!--CONTENT CONTAINER-->
            <!--===================================================-->
            <div id="content-container">
                <!--Page content-->
                <!--===================================================-->
                <div id="page-content" style="background-color:#ECF0F5!important;">
					<div class="row">
                    <div class="col-md-12">
                        <div class="panel">
                            @yield('content')
                            <!--===================================================-->
                            <!--End Buttons Addon-->
                        </div>
                        </div>
					</div>			
                </div>
                <!--===================================================-->
                <!--End page content-->
            </div>
            <!--===================================================-->
            <!--END CONTENT CONTAINER-->

        </section>
        <!-- FOOTER -->
        <!--===================================================-->
        <footer id="footer">

            <!-- Visible when footer positions are fixed -->
            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
            
            <!-- Visible when footer positions are static -->
            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
            <div class="hide-fixed pull-right pad-rgt">
                GML
            </div>
            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
            <!-- Remove the class "show-fixed" and "hide-fixed" to make the content always appears. -->
            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
            <p class="pad-lft">&#0169; 2023 @GML</p>
        </footer>
        <!--===================================================-->
        <!-- END FOOTER -->
        <!-- SCROLL PAGE BUTTON -->
        <!--===================================================-->
        <button class="scroll-top btn">
            <i class="pci-chevron chevron-up"></i>
        </button>
        <!--===================================================-->
    </div>

    <script src="{{asset('../resources/js/jquery.min.js')}}"></script>
    <script src="{{asset('../resources/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('../resources/js/nifty.min.js')}}"></script>
    <!-- DataTables -->
    <script src="{{asset('../resources/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('../resources/datatables/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{asset('../resources/datatables/extensions/Responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('../resources/datatables/extensions/TableTools/js/dataTables.tableTools.min.js')}}"></script>
    <!-- ======= js donde esta las funciones de validar y de api ===== -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="{{asset('../resources/js/app.js')}}"></script>
    <script>
        $("#table, .table").DataTable({
            "responsive":true,
            "paging": true,
            "ordering": true,
            "order": [[ 0, "desc" ]],
            "info": true,
            "processing": true,
            "autoFill": true,
            "language": {
                "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
            },
            "stateSave": true,
            "stateSaveCallback": function(settings,data) {
                localStorage.setItem( 'DataTables_' + settings.sInstance, JSON.stringify(data) )
            },
            "stateLoadCallback": function(settings) {
                return JSON.parse( localStorage.getItem( 'DataTables_' + settings.sInstance ) )
            }
        });
    </script>
</body>
</html>
