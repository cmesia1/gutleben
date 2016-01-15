<!DOCTYPE HTML>
<html>
<head>
    <title>GutLeben | Nosotros</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="GutLeben" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    {!!Html::style('css/bootstrap-3.1.1.min.css')!!}
    {!!Html::style('css/style.css')!!}
    {!!Html::style('css/font-awesome.css')!!}
    {!!Html::style('css/jquery.countdown.css')!!}

    <link href='//fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700' rel='stylesheet' type='text/css'>
    {!!Html::script('js/jquery.min.js')!!}
    {!!Html::script('js/bootstrap.min.js')!!}


    <script>
        $(document).ready(function(){
            $(".dropdown").hover(
                    function() {
                        $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
                        $(this).toggleClass('open');
                    },
                    function() {
                        $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
                        $(this).toggleClass('open');
                    }
            );
        });
    </script>
    <!----Calender -------->
    <link rel="stylesheet" href="css/clndr.css" type="text/css" />
    <script src="js/underscore-min.js" type="text/javascript"></script>
    <script src= "js/moment-2.2.1.js" type="text/javascript"></script>
    <script src="js/clndr.js" type="text/javascript"></script>
    <script src="js/site.js" type="text/javascript"></script>
    <!----End Calender -------->
</head>
<body>
<nav class="navbar navbar-default" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Ni idea!</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html">GutLeben</a>
        </div>
        <!--/.navbar-header-->
        <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1" style="height: 1px;">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="../logout.php"><i class="fa fa-user"></i><span>Cerrar Sesión</span></a>
                </li>
            </ul>
            </li>
            </ul>
        </div>
        <div class="clearfix"> </div>
    </div>
    <!--/.navbar-collapse-->
</nav>
<nav class="navbar nav_bottom" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header nav_2">
            <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"></a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
            <ul class="nav navbar-nav nav_1">
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">Nosotros</a></li>
                <li class="dropdown mega-dropdown active">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Galería<span class="caret"></span></a>
                    <div class="dropdown-menu mega-dropdown-menu">
                        <div class="container-fluid">
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="men">
                                    <ul class="nav-list list-inline">
                                        <li><a href="galeria.html"><img src="images/t7.jpg" class="img-responsive" alt=""/></a></li>
                                        <li><a href="galeria.html"><img src="images/t8.jpg" class="img-responsive" alt=""/></a></li>
                                        <li><a href="galeria.html"><img src="images/t9.jpg" class="img-responsive" alt=""/></a></li>
                                        <li><a href="galeria.html"><img src="images/t1.jpg" class="img-responsive" alt=""/></a></li>
                                    </ul>
                                </div>
                                <div class="tab-pane" id="women">
                                    <ul class="nav-list list-inline">
                                        <li><a href="slider.html"><img src="images/t1.jpg" class="img-responsive" alt=""/></a></li>
                                        <li><a href="slider.html"><img src="images/t2.jpg" class="img-responsive" alt=""/></a></li>
                                        <li><a href="slider.html"><img src="images/t3.jpg" class="img-responsive" alt=""/></a></li>
                                        <li><a href="slider.html"><img src="images/t4.jpg" class="img-responsive" alt=""/></a></li>
                                        <li><a href="slider.html"><img src="images/t5.jpg" class="img-responsive" alt=""/></a></li>
                                        <li><a href="slider.html"><img src="images/t6.jpg" class="img-responsive" alt=""/></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="active"><a href="#men" role="tab" data-toggle="tab">Imágenes</a></li>
                            <li><a href="#women" role="tab" data-toggle="tab">Vídeos</a></li>
                        </ul>
                    </div>
                </li>
                <li><a href="faculty.html">Patrocinadores</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Artículos<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="blog.html">Aportes de usuarios</a></li>
                        <li><a href="shortcodes.html">Aportes de empresas</a></li>
                        <li><a href="faq.html">Artículo de la semana</a></li>
                    </ul>
                </li>
                <li><a href="events.html">Agenda</a></li>
                <li><a href="blog.html">Foro</a></li>
                <li class="last"><a href="contact.html">Contacto</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div>
</nav>
<!-- banner -->

<!--- CONTENT -->
@yield('content')
<!-- //FIN CONTENT -->
<div class="clearfix"> </div>
</div>
</div>
<div class="footer">
    <div class="container">
        <div class="col-md-3 grid_4">
            <h3>About Us</h3>
            <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.."</p>
            <ul class="social-nav icons_2 clearfix">
                <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#" class="facebook"> <i class="fa fa-facebook"></i></a></li>
                <li><a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a></li>
            </ul>
        </div>
        <div class="col-md-3 grid_4">
            <h3>Quick Links</h3>
            <ul class="footer_list">
                <li><a href="#">-  PRIOR LEARNING ASSESSMENT </a></li>
                <li><a href="#">-  INTERNATIONAL STUDENTS</a></li>
                <li><a href="#">-  CAREER OPPORTUNITIES</a></li>
                <li><a href="#">-   NEW STUDENT ORIENTATION</a></li>
                <li><a href="#">-   NEW CLASSROOM TECHNOLOGY</a></li>
            </ul>
        </div>
        <div class="col-md-3 grid_4">
            <h3>Contact Us</h3>
            <address>
                <strong>Contrary to popular belief</strong>
                <br>
                <span>4877 It is a long established</span>
                <br><br>
                <span>Contrary to popular , 15089</span>
                <br>
                <abbr>Telephone : </abbr> +1 (734) 123-4567
                <br>
                <abbr>Email : </abbr> <a href="mailto@example.com">info(at)Learn.com</a>
            </address>
        </div>
        <div class="col-md-3 grid_4">
            <h3>Working Hours</h3>
            <table class="table_working_hours">
                <tbody>
                <tr class="opened_1">
                    <td class="day_label">monday</td>
                    <td class="day_value">9:30 am - 6.00 pm</td>
                </tr>
                <tr class="opened">
                    <td class="day_label">tuesday</td>
                    <td class="day_value">9:30 am - 6.00 pm</td>
                </tr>
                <tr class="opened">
                    <td class="day_label">wednesday</td>
                    <td class="day_value">9:30 am - 6.00 pm</td>
                </tr>
                <tr class="opened">
                    <td class="day_label">thursday</td>
                    <td class="day_value">9:30 am - 6.00 pm</td>
                </tr>
                <tr class="opened">
                    <td class="day_label">friday</td>
                    <td class="day_value">9:30 am - 3.00 pm</td>
                </tr>
                <tr class="closed">
                    <td class="day_label">saturday</td>
                    <td class="day_value closed"><span>Closed</span></td>
                </tr>
                <tr class="closed">
                    <td class="day_label">sunday</td>
                    <td class="day_value closed"><span>Closed</span></td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="clearfix"> </div>
        <div class="copy">
            <p>Copyright © 2015 Learn . All Rights Reserved  | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
        </div>
    </div>
</div>
</body>
</html>	