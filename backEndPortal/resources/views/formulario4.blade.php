<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>FORMULARIOoooooooooooooooooooo</title>
<link href="/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="/css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Zoo Planet Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="/js/jquery-1.11.1.min.js"></script>
<script src="/js/bootstrap.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>


	
		
		<!-- css files -->
	    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' /><!-- bootstrap css -->
	    <link href="css/style.css" rel='stylesheet' type='text/css' /><!-- custom css -->
		<link href="css/css_slider.css" type="text/css" rel="stylesheet" media="all">
	    <link href="css/font-awesome.min.css" rel="stylesheet"><!-- fontawesome css -->
		<!-- //css files -->
		
		<!-- google fonts -->
		<link href="//fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
		<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
		<!-- //google fonts -->




</head>
<body>
				

 <!-- Ir arriba -->
 <div id="flecha" class="ocultar_flecha">
        <a href="/contacto">
        <img src="images/FlechaIrArriba.png" alt="">
    </div>
    <!-- //Ir arriba -->

	<!-- header -->
<header>
	<div class="top-head container">
		<div class="ml-auto text-right right-p">
			<ul>
				<li class="mr-3">
					<span class="fa fa-phone"></span>+(57) 301 361 2345</li>
				
			</ul>
		</div>
	</div>
	<div class="container">
		<!-- nav -->
		<nav class="py-3 d-lg-flex">
			<div id="logo">
				<h1> <a href="/"><span class="fa fa-plane"></span> Viajando por el Mundo </a></h1>
			</div>
			<label for="drop" class="toggle"><span class="fa fa-bars"></span></label>
			<input type="checkbox" id="drop" />
			<ul class="menu ml-auto mt-1">


            <li class="active"><a id="/" href="javascript:void(0);">Inicio</a></li>
				<li class=""><a id="/acercade" href="javascript:void(0);">Acerca de</a></li>
				<li class=""><a id="/servicios" href="javascript:void(0);">Servicios</a></li>
				<li class=""><a id="/stats" href="javascript:void(0);">Cifras</a></li>
				<li class=""><a id="/portafolio" href="javascript:void(0);">Portafolio</a></li>
				<li class=""><a id="/contacto" href="javascript:void(0);">Contacto</a></li>



			</ul>
		</nav>
		<!-- //nav -->
	</div>
</header>
<!-- //header -->








<!-- Contact -->
<section class="contact py-5" id="/contact">
    <div class="container py-md-5">
              <h3 class="heading text-center mb-3 mb-sm-5"> <br> <br> <br> Comunícate con nosotros</h3>



              <div class="contact-grids mt-5">
                <div class="row">
                    <div class="col-lg-6 col-md-6 contact-left-form">



	<div class="content">
	<!--services-->
		<div class="services-section">
			<div class="container">
				<div class="services-grids">
					<div>
                    <!--  <h2>Registro</h2> <br> -->

                        <li class="col-md-4 col-sm-6 adress-w3pvt-info mb-4">
                            <div class=" adress-icon">
                                <span class="fa fa-pencil-square-o"></span>
                            </div>
                            <h6>Registro</h6>
                            </li>

						<script>
								let boton;
								let name,email,password, formulario;
								window.onload = ()=>{
									boton = document.getElementById("boton_registro");
									name = document.getElementById("nombre");
									email = document.getElementById("usuario");
									password = document.getElementById("password");
									formulario = document.getElementById("formularioR");
									boton.addEventListener("click",()=>{
										enviarDatos({
											name:name.value,
											email:email.value,
											password:password.value
										});
									});
									function enviarDatos(datos){
										axios({
											method: 'post',
											url: 'api/auth/registro',
											data: {
												name: datos.name,
												email: datos.email,
												password: datos.password
											}
										}).then((data)=>{
											console.log(data);
											alert("Usuario se ha registrado");
											formulario.reset();
											localStorage.setItem("token",data.data.token);
										}).catch(function(error){
											alert("Error en los datos");
										});
									}
								
								//login
								let botonL;
									let emailL,passwordL;
										botonL = document.getElementById("boton_logueo");
										emailL = document.getElementById("usuarioL");
										passwordL = document.getElementById("passwordL");
										botonL.addEventListener("click",()=>{
											enviarDatosL({
												email:emailL.value,
												password:passwordL.value
											});
										});
										function enviarDatosL(datos){
											axios({
												method: 'post',
												url: 'api/auth/login',
												data: {
													email: datos.email,
													password: datos.password
												}
											}).then((data)=>{
												alert("Ingreso Exitoso");
												location.href="/contact";
											}).catch(function(error){
												alert("Error en los datos");
											});
										}
								}
							</script>






							<form id="formularioR">
                            <div class=" form-group contact-forms">
                                <input type="text" class="form-control" placeholder="Nombre" required="" id="nombre" name="nombre"> <br>
                                </div>

                                <div class=" form-group contact-forms">
                                <input type="email" class="form-control" placeholder="Email" required="" id="usuario" name="usuario"> <br>
                                </div>

                                <div class=" form-group contact-forms">
                                <input type="password" class="form-control" placeholder="Contraseña" required="" id="password" name="password"> <br>
                                </div>

                                <button class="btn btn-block sent-butnn" type="button" id="boton_registro" value="Enviar">Registrarme</button> 
                            </form>
                            <br> <br>
                            
                    </div>
                    
                    <div>
                        <!--  <h2>Registro</h2> <br> -->
                        

                        <li class="col-md-4 col-sm-6 adress-w3pvt-info mb-4">
                            <div class=" adress-icon">
                                <span class="fa fa-user"></span>
                            </div>
                            <h6>Login</h6>
                            </li>


                            <form id="formularioL">

                            <div class=" form-group contact-forms">
                                <input type="text" class="form-control" placeholder="Email" required="" id="usuarioL" name="usuario"> <br>
                            </div>

                            <div class=" form-group contact-forms">
                                <input type="password" class="form-control" placeholder="Contraseña" required="" id="passwordL" name="password"> <br>
                            </div>


                                <button class="btn btn-block sent-butnn" type="button" id="boton_logueo">Ingresar</button>
                            </form>
                    </div>
						</div>
					<div class="clearfix"></div>
					</div>
				</div>
			</div>
		<!--services-->
	<!--feature-->
				
				<!--feature-->
<!--specials-->
				<div class="specials-section">
					<div class="container">
						<div class="specials-grids">
					</div>
				</div>
			</div>



            </div>
            </div>
            </div>
    </div>
</section>















			   <!-- copyright -->
<div class="copy-right-top">
	<p class="copy-right text-center py-4">&copy; Créditos: 2021 Viajando por el Mundo. All Rights Reserved | Realizado por Clemencia Giraldo Duque | Contacto: clemencia.giraldo@upb.edu.co | Universidad Pontificia Bolivariana | Plataformas de Programación Empresarial | Diseñado con 
        <a href="http://w3layouts.com/"> W3layouts </a>
    </p>
</div>
<!-- //copyright -->



<a href="https://wa.me/573013611234?text=Me%20gustaría%20saber%20el%20precio%20del%20coche" class="whatsapp" target="_blank"> <i class="fa fa-whatsapp whatsapp-icon"></i></a>


</body>
</html>