<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>FORMULARIO</title>

<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

</head>
<body>
				<!--header-->
                <div class="header">
                    <div class="container">
                        <div class="header-top">
                            <nav class="navbar navbar-default">
                                <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
                                    <div class="navbar-header">
                                          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                                <span class="sr-only">Toggle navigation</span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                          </button>
                                        <div class="navbar-brand">
                                            <h1><a href="/">UNIVERSART</a></h1>
                                        </div>
                                    </div>
    
        <!-- Collect the nav links, forms, and other content for toggling -->
								<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
									<ul class="nav navbar-nav">
										<li><a id="/" href="/">Inicio <span class="sr-only">(current)</span></a></li>
										<li><a id="/about" href="/about">Acerca de</a></li>
										<li><a id="/services" href="/services">Artistas</a></li>
										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Galería <span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li><a id="/gallery" href="/gallery">Arquitectura</a></li>
										<li><a id="/gallery2" href="/gallery2">Pintura</a></li>
										<li><a id="/gallery3" href="/gallery3">Escultura</a></li>
									</ul>
										</li>
										<li class="active"><a id="/login" href="/login">Registro</a></li>
										<li><a id="/contact" href="/login">API</a></li>
									</ul>
									
								</div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
                            </nav>
    
                        </div>
                    </div>
                </div>	
		<div class="banner-header">
			<div class="container">
				<h2>Iniciar sesión o registrarse</h2>
			</div>
			</div>
	<div class="content">
	<!--services-->
		<div class="services-section">
			<div class="container">
				<div class="services-grids">
					<div>
                        <h2>Registro</h2> <br>
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
                                <label> Nombre </label>
                                <input type="text" id="nombre" name="nombre"> <br>
                                <label> Email </label>
                                <input type="email" id="usuario" name="usuario"> <br>
                                <label> Contraseña </label>
                                <input type="password" id="password" name="password"> <br>
                                <button type="button" id="boton_registro" value="Enviar">Registrarse</button> 
                            </form>
                            <br> <br>
                            <h3>¿Ya te encuentras registrado?</h3>
                    </div>
                    
                    <div>
                        <h2>Login</h2> <br>
                            <form id="formularioL">
                                <label> Email </label>
                                <input type="text" id="usuarioL" name="usuario"> <br>
                                <label> Contraseña </label>
                                <input type="password" id="passwordL" name="password"> <br>
                                <button type="button" id="boton_logueo">Ingresar</button>
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
			<!--footer-->
			<div class="footer-section">
				<div class="container">
					<div class="footer-top">
						<p>&copy; 2021 UNIVERSART . All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
					</div>
				</div>
			</div>
</body>
</html>