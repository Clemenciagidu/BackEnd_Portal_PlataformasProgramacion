<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
    <title>Portafolio</title>
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
					    <!--<span class="fa fa-phone"></span>+(57) 301 361 2345</li>-->
				
			        </ul>
		        </div>
	        </div>
	        <div class="container">
		        <!-- nav -->
		            <nav class="py-3 d-lg-flex">
			            <div id="logo">
				            <h1> <a href="/formulario4"><span class="fa fa-plane"></span> Viajando por el Mundo </a></h1>
			            </div>
			            <label for="drop" class="toggle"><span class="fa fa-bars"></span></label>
			            <input type="checkbox" id="drop" />
			            <ul class="menu ml-auto mt-1">

<!--
                            <li class="active"><a id="/" href="/">Inicio</a></li>
                            <li class=""><a id="/acercade" href="/acercade">Acerca de</a></li>
                            <li class=""><a id="/servicios" href="/servicios">Servicios</a></li>
                            <li class=""><a id="/stats" href="/stats">Cifras</a></li>
                            <li class=""><a id="/portafolio" href="/portafolio">Portafolio</a></li>
                            <li class=""><a id="/contacto" href="/contacto">Contacto</a></li>
                        </ul> -->
		            </nav>
		        <!-- //nav -->
	        </div>
        </header>
    <!-- //header -->


   <!-- <img src="images/santorini-4996846_1280.jpg" class="img-fluid" alt="">-->
    <!-- Contact -->
        <section class="contact py-5" id="/contact">
            <div class="container py-md-5">
              <h3 class="heading text-center mb-3 mb-sm-5"> <br> BIENVENIDO <br> Para continuar <br> Inicia Sesi??n o Reg??strate</h3>
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
											        alert("Usuario se ha registrado correctamente");
											        formulario.reset();
											        localStorage.setItem("token",data.data.token);
                                                }).catch(function(error){
                                                    alert("Error en los datos. Por favor verifique");
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
												        alert("Ingreso Exitoso. Bienvenido a Viajando Por El Mundo");
												        location.href="/";
											        }).catch(function(error){
												        alert("Error en los datos. Por favor verifique");
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
                                                <input type="password" class="form-control" placeholder="Contrase??a" required="" id="password" name="password"> <br>
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
                                                <input type="password" class="form-control" placeholder="Contrase??a" required="" id="passwordL" name="password"> <br>
                                            </div>
                                            <button class="btn btn-block sent-butnn" type="button" id="boton_logueo">Ingresar</button>
                                            <img src="images/c1.jpg" class="img-fluid" alt="user-image">
                                        </form>
                                    </div>
						        </div>
				            </div>
			            </div>
		            <!--services--> 
                </div>
                


            </div>
            <div class="col-lg-6 col-md-6 contact-right pl-lg-5">
                         <!--<img src="images/c1.jpg" class="img-fluid" alt="user-image">
                         <br><br><br>-->
                         <img src="images/santorini-4996846_1280.jpg" class="img-fluid" alt="">
                         <br><br><br>
                         <img src="images/groningen-5372387_1280.jpg" class="img-fluid" alt="">
                         <br><br><br>
                         <img src="images/caravansary-4519435_1280.jpg" class="img-fluid" alt="">
                         
                        
                    </div>
        </div>
    </div>
</section>

<!--<img src="images/santorini-4996846_1280.jpg" class="img-fluid" alt="">-->








			   <!-- copyright -->
<div class="copy-right-top">
	<p class="copy-right text-center py-4">&copy; Cr??ditos: 2021 Viajando por el Mundo. All Rights Reserved | Realizado por Clemencia Giraldo Duque | Contacto: clemencia.giraldo@upb.edu.co | Universidad Pontificia Bolivariana | Plataformas de Programaci??n Empresarial | Dise??ado con 
        <a href="http://w3layouts.com/"> W3layouts </a>
    </p>
</div>
<!-- //copyright -->



<a href="https://wa.me/573013611234?text=Me%20gustar??a%20saber%20el%20precio%20del%20coche" class="whatsapp" target="_blank"> <i class="fa fa-whatsapp whatsapp-icon"></i></a>


</body>
</html>