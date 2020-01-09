<!DOCTYPE HTML>
<html>
    <head>
		<title>Alta de jugador</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
    <body class="landing is-preload">
        <div id="page-wrapper">
        
        <!-- Header -->
            <header id="header" class="alt">
                <nav id="nav">
                    <ul>
                        <li><a href="inicio.php">Home</a></li>
                        <li>
                            <a href="#"> Juego</a>
                        
                        </li>
                        <li><a href="#" class="button">Dar de alta</a></li>
                    </ul>
                </nav>
            </header>

        <!-- Banner -->
            <section id="banner">
                
            </section>

        <!-- Main -->
            <section id="main" class="container">

                <section class="box special">
                    <header class="major">
                        <form action="alta.php" method="post" class="form-register" >
                            <fieldset id="bloqueDatos">
                                <table>
                                    <tr>
                                        <td> Nombre</td>
                                        <td> Email</td>
                                        <td> Fecha</td>
                                    </tr>
                                </table>
                            </fieldset>
                    </header>
                    <?php
                        """
                        Cuando se conecta hay que pasar los parametros de direccion del pc( no vale con localhost), usuario, contraseña y nombre de la base de datos 
                        Se hace un print_r a lo que devuelve para ver la informacion que nos da aunque solo es a nivel formativo
                        Se hace el echo <pre> para provocar un reseteo y se vea correctamente
                        """
                        $conn = mysqli_connect('192.168.137.132','usuario','1234','db');
                        echo "<pre>";
                        print_r($conn);
                    ?>
                </section>

                <section class="box special features">
                    <div class="features-row">
                        
                        
                    </div>
                    <div class="features-row">
                        
                        
                    </div>
                </section>

                <div class="row">
                    <div class="col-6 col-12-narrower">

                    </div>
                    <div class="col-6 col-12-narrower">

                    

                    </div>
                </div>

            </section>

        <!-- CTA -->
            <section id="cta">


                <form>
                    <div class="row gtr-50 gtr-uniform">
                        <div class="col-8 col-12-mobilep">
                            
                        </div>
                        <div class="col-4 col-12-mobilep">
                            
                        </div>
                    </div>
                </form>

            </section>

        <!-- Footer -->
            <footer id="footer">
                <ul class="icons">
                    <li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
                    <li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
                    <li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
                    <li><a href="#" class="icon brands fa-github"><span class="label">Github</span></a></li>
                    <li><a href="#" class="icon brands fa-dribbble"><span class="label">Dribbble</span></a></li>
                    <li><a href="#" class="icon brands fa-google-plus"><span class="label">Google+</span></a></li>
                </ul>
                <ul class="copyright">
                    <li>Design: Jorge Herrera, Sergio Ruiz</li>
                </ul>
            </footer>

        </div>
    
        <!-- Scripts -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/jquery.dropotron.min.js"></script>
        <script src="assets/js/jquery.scrollex.min.js"></script>
        <script src="assets/js/browser.min.js"></script>
        <script src="assets/js/breakpoints.min.js"></script>
        <script src="assets/js/util.js"></script>
        <script src="assets/js/main.js"></script>
    </body>
</html>