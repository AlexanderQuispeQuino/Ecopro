<!-- <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>colores</title>

	<style>
		

		.colores div{
			width: 400px;
			height: 50px;

		}
	</style>
</head>
<body>
	<div class="colores" >
		<div style="background-color: #f5e737;">
			
		</div>
		<div style="background-color: #f7ec60;">
			
		</div>
		<div style="background-color: #f7ee7f;">
			
		</div>
		<div style="background-color: #f9f196;">
			
		</div>
		<div style="background-color: #f5e737;">
			
		</div>
		<div style="background-color: #f5e737;">
			
		</div>
		<div style="background-color: #f5e737;">
			
		</div>
		<div style="background-color: #f5e737;">
			
		</div>
		<div style="background-color: #f5e737;">
			
		</div>
	</div>
	
</body>
</html> -->


<!DOCTYPE html>
<html>
<head>




	<!-- servicios -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link href="/open-iconic/font/css/open-iconic-bootstrap.css" rel="stylesheet">
  <!-- servicios -->

	<title>ECOPRO</title>

	<link rel="stylesheet" type="text/css" href="css/superslides.css" />
	<meta charset="utf-8"/>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Dosis:400,500,600" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/contacto.css">
	<link rel="stylesheet" type="text/css" href="css/mapa.css">
	<style>


body {
    font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
    font-size: 14px;
    line-height: 1.42857143;
    color: #333;
    background-color: #fff;
}
	.modal-header, h4, .close {
			background-color: #5cb85c;
			color:white !important;
			text-align: center;
			font-size: 16px;
	}
	.modal-footer {
			background-color: #f9f9f9;
	}

	div.modal-body{

    display: flex;
    justify-content: space-around;
    padding: 50px 20px 80px;
  }

  .modal-dialog{
    width: 1200px;
    height: 500px;

  }

  .servicio{
    width: 210px;
    height: 400px;

  }
  .servicio h5{
    color: red;
    font-size: 16px;
    line-height: inherit;
  }

  .modal-footer{
    display: flex;
    justify-content:space-between;
    padding: 15px 0px;
    background-color: black;
  }

  .modal-footer h6{
    color: white;
    cursor: pointer;

  }

   div.servicio p{
    text-align:justify;
  }

  div.servicio h5{
    text-align:center;
  }

  p.punto :before {
   content:".";

   color : black;
   }



/*contacto*/
    .modal-header, h4, .close {
      background-color: black;
      color: #fbcb0f !important;
      text-align: center;
      font-size: 25px;
  }
  .modal-footer {
      background-color: black;
  }

  .modal-footer a{
  	color: #5cb85c;
  }


  .modal-dialog{
    width: 1500px;
  }

  div.modal-body-formulario{
    width: 300px;
    height: 500px;
    z-index: 5;
    position: fixed;
    padding-top: 300px;
    padding-left: 100px;
   

  }
  div.body-formulario{
    
    background-color: white;
    width:280px;
    border:5px solid #5cb85c;
    padding: 15px;


  }
  .formulario{
    margin: 5px;
  }



/*  nosotros*/

.modal-body-nosotros{
	display: block;
	    padding: 20px 40px 40px 530px;
	background-color: white;
	width: 1000px;
}




.modal-footer a{
	cursor: pointer;
}




/*nosotros*/

div.nosotros{
	position: absolute;
}

.figure-nosotros,.img-nosotros{
	width: 500px;
    height: 730px;
}








/*estilos-clientes*/

  .modal-header, h4, .close {
      background-color: black;
      color: #fbcb0f !important;
      text-align: center;
      font-size: 30px;
      

  }

   button.close.close-clientes{
  	padding-right: 23px;
    padding-top: 10px;
  }
  .modal-footer {
      background-color: black;
  }

  .modal-dialog{
    width: 1435px;
  }


img{
    width: 300px;
    height: 180px;
   
  }

  .clientes{
    display: flex;
   flex-wrap: wrap;
   align-content: space-between;


  }

  .clientes{
    padding: inherit;

  }

  .modal-body-clientes{
    width: 1435px;
  }


----------------------------------------

 span {
  margin-left: 1em;
  color: #aaa;
  font-size: 85%;
}
.column {
  margin: 15px 15px 0;
  padding: 0;
}
/*.column:last-child {
  padding-bottom: 60px;
}*/
.column::after {
  content: '';
  clear: both;
  display: block;
}
.column figure {
  position: relative;
  float: left;
  
  height: 180px;
  margin: 0 0 0 25px;
  padding: 0;
}
.column div:first-child {
  margin-left: 0;
}
.column div span {
  position: absolute;
  bottom: -20px;
  left: 0;
  z-index: -1;
  display: block;
  width: 200px;
  margin: 0;
  padding: 0;
  color: #444;
  font-size: 18px;
  text-decoration: none;
  text-align: center;
  -webkit-transition: .3s ease-in-out;
  transition: .3s ease-in-out;
  opacity: 0;
}


figure {
/* width: 300px;*/
 height: 180px; 
  margin: 0;
  padding: 0;
  background: #fff;
  overflow: hidden;
}
figure:hover+span {
  bottom: -36px;
  opacity: 1;
  z-index: 5px;
}


/* Circle */
.clientes figure {
  position: relative;
}
.clientes figure ::before {
  position: absolute;
  top: 50%;
  left: 50%;
  z-index: 2;
  display: block;
  content: '';
  width: 0;
  height: 0;
  background: rgba(255,255,255,0.3);
  border-radius: 100%;
  -webkit-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  opacity: 0;
}
.clientes figure :hover::before {
  -webkit-animation: circle .75s;
  animation: circle .75s;
}
@-webkit-keyframes circle {
  0% {
    opacity: 1;
  }
  40% {
    opacity: 1;
  }
  100% {
    width: 200%;
    height: 200%;
    opacity: 0;
  }
}
@keyframes circle {
  0% {
    opacity: 1;
  }
  40% {
    opacity: 1;
  }
  100% {
    width: 200%;
    height: 200%;
    opacity: 0;
  }
}


/* Opacity #2 */
.clientes figure {
  background: #1abc9c;
}
.clientes figure img {
  opacity: 1;
  -webkit-transition: .3s ease-in-out;
  transition: .3s ease-in-out;
}
.clientes figure:hover img {
  opacity: .5;
}


ul li{
	line-height: 2.5;
    font-size: 19px;
  
}

/*servicios*/

.servicio figure, .servicio img{
	width: 210px;
	height: 210px;

}




	</style>



</head>
<body>

	<span class="burguer-button icon-menu" id="burguer-button">
		
	</span>
	<div class="menu" id="menu">


			<div class="menu-logo">

				<figure class="logotipo">
					<img src="img/logo2_Mesa de trabajo 1.png" style="height: 150px;width: 400px;"  alt="logotipo">
				</figure>

			</div>
			<div class="contenedor-menu">
				<nav class="nav-menu">
					<ul>
						<li>
							<a data-toggle="modal" data-target="#empresa" onmouseover="javascript:this.style.color='#24CB31';">Nosotros</a>

						</li>

						<li>
							<a data-toggle="modal" data-target="#servicios" onmouseover="javascript:this.style.color='#24CB31';">Servicios</a>
						</li>

					<!-- 	<li>
							<a data-toggle="modal" data-target="#acreditaciones" onmouseover="javascript:this.style.color='#24CB31';">Acreditaciones</a>
						</li>
 -->
						<li>
							<a data-toggle="modal" data-target="#clientes" onmouseover="javascript:this.style.color='#24CB31';">Clientes</a>

						</li>

						<li>
							<a data-toggle="modal" data-target="#certificados" onmouseover="javascript:this.style.color='#24CB31';">Certificados</a>
						</li>

						<li>
							<a href="aula.html" onmouseover="javascript:this.style.color='#24CB31';">Aula Virtual</a>
						</li>

						<li>
							<a data-toggle="modal" data-target="#contacto" onmouseover="javascript:this.style.color='#24CB31';">Contacto</a>
						</li>

					</ul>
				</nav>

			</div>

	</div>

	<div id="slides" class="">
		<ul class="slides-container">
			<li><img src="img/01_01.jpg" alt=""></li>
			<li><img src="img/02_02.jpg" alt=""></li>
			<li><img src="img/03_03.jpg" alt=""></li>
			<li><img src="img/04_04.jpg" alt=""></li>
			<li><img src="img/05_05.jpg" alt=""></li>
			<!-- <li><img src="img/06.jpg" alt=""></li> -->

		</ul>

		<nav class="slides-navigation">
    		<a href="#" class="next">&#62;</a>
    		<a href="#" class="prev">&#60;</a>

  		</nav>


	</div>
	<script src ="js/jquery.js"></script>
	<script src="js/jquery.superslides.js"></script>


	<div class="connect">
			<div class="contenedor-footer">
				<div class="flex-contacto">
					<div class="contacto">

						<strong>Oficina:</strong><span> Jr. General Varela 1561 - Of. 501 - Breña - Lima &nbsp  |&nbsp<a href="TEL: 7397979"><strong>  Teléfono:</strong> <span>7397979</span></a></span><br>
						<strong>Dirección:</strong><span> Cdra. Elías Aguirre 180-Miraflores &nbsp |&nbsp <a href="mailto:informes@ecopro.com.pe"><strong>  E-mail:</strong> <span>informes@ecopro.com.pe</span></a></span><br>
					</div>


				</div>
				<div class="flex-incons">
					<div class="social-incons">
								<ul >

									<a  href="https://www.facebook.com/ecoproperu/?fref=ts" target="_blank">
									<li class="fa fa-facebook-square incon-li" ></li>

									</a>

									<a  href="https://www.youtube.com/" target="_blank">
									<li class="fa fa-youtube-square incon-li"  ></li>
									</a>

								</ul>

					</div>

				</div>
			</div>

	</div>

	<!--- modal de servicios en general-->

	<div class="container">
		<!-- Modal -->
		<div class="modal fade" id="servicios" role="dialog">
			<div class="modal-dialog">

				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header" style="padding:35px 50px;">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4><span class="glyphicon glyphicon-maletín" aria-hidden="true"></span> SERVICIOS</h4>
					</div>
					<div class="modal-body">
						<div class=" servicio servicio1">
							<figure  >
								<img src="img/servicio01.jpg" style="width: 210px; height: 210px;">
							</figure>
							<h5><strong>IMPLEMENTACION DEL SISTEMA DE GESTIÓN DE SEGURIDAD Y SALUD EN EL TRABAJO</strong></h5>
							<p>Implementamos y desarrollamos programas de Gestión de Seguridad Industrial, Salud en el trabajo de acuerdo a la Normativa Legal Nacional vigente.</p>

						</div>

						<div class=" servicio servicio2">
							<figure>
								<img src="img/servicio02.jpg" style="width: 210px;  height: 210px;">
							</figure>
							<h5><strong>OUTSOURCING EN EL SISTEMA DE GESTION DE SEGURIDAD Y SALUD EN EL TRABAJO</strong></h5>
							<p>Subcontratamos y tercerizamos personal de médico especialista en salud ocupacional e inspectores y supervisores en seguridad y salud en el trabajo.</p>

						</div>

						<div class="servicio servicio3">
							<figure>
								<img src="img/servicio03.jpg" style="width: 210px;  height: 210px;">
							</figure>

							<h5><strong>AUDITORIAS EN SISTEMA DE GESTION DE SEGURIDAD Y SALUD EN EL TRABAJO</strong></h5>
							<p>De acuerdo al D.S. 005-2012-TR: Art. 33: La auditoría del sistema de gestión de seguridad y salud en el trabajo es un registro obligatorio que es acreditado por el Ministerio de Trabajo.</p>

						</div>


						<div class="servicio servicio4">
							<figure>
								<img src="img/servicio04.jpg" style="width: 210px;  height: 210px;">
							</figure>

							<h5><strong>CAPACITACION EN SEGURIDAD Y SALUD EN EL TRABAJO EN MINERIA</strong></h5>
							<p>Brindamos capacitaciones en seguridad y salud en el trabajo para el rubro minero.</p>

						</div>


						<div class="servicio servicio5">
							<figure>
								<img src="img/servicio05.jpg" style="width: 210px;  height: 210px;">
							</figure>
							<h5><strong>CAPACITACION EN SEGURIDAD Y SALUD EN EL TRABAJO</strong></h5>
							<p>El Marco Normativo Legal Nacional, exige que el empleados capacite a sus trabajadores en al menos 4 capacitaciones al año en temas relacionados a la seguridad y los peligros y riesgos a los que estos están expuestos.</p>

						</div>
					</div>
					<div class="modal-footer" style="background-color: black;">
	<!--           <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
						<p>Not a member? <a href="#">Sign Up</a></p>
						<p>Forgot <a href="#">Password?</a></p> -->
					  <h6 data-toggle="modal" data-target="#uno">Más Información:</h6>
						<h6 data-toggle="modal" data-target="#dos">Más Información:</h6>
						<h6 data-toggle="modal" data-target="#tres">Más Información:</h6>
						<h6 data-toggle="modal" data-target="#cuatro">Más Información:</h6>
						<h6 data-toggle="modal" data-target="#cinco">Más Información:</h6>

					</div>
				</div>

			</div>
		</div>
	</div>
	<!--- modal de servicio uno-->
	<div class="container">
	  <!-- Modal -->
	  <div class="modal fade" id="uno" role="dialog">
	    <div class="modal-dialog">

	      <!-- Modal content-->
	      <div class="modal-content">
	        <div class="modal-header" style="padding:35px 50px;">
	          <button type="button" class="close" data-dismiss="modal">&times;</button>
	          <h3><strong>IMPLEMENTACION DEL SISTEMA DE GESTIÓN DE SEGURIDAD Y SALUD EN EL TRABAJO</strong></h3>
	        </div>
	        <div class="modal-body" style="padding:40px 50px; height: 532px;">

	          <div class=" servicio servicio1">
	            <figure>
	              <img src="img/servicio01.jpg">
	            </figure>
	            <h5><strong>IMPLEMENTACION DEL SISTEMA DE GESTIÓN DE SEGURIDAD Y SALUD EN EL TRABAJO</strong></h5>
	            <p>Implementamos y desarrollamos programas de Gestión de Seguridad Industrial, Salud en el trabajo de acuerdo a la Normativa Legal Nacional vigente.</p>

	          </div>

	          <p class="punto"  style="line-height: 2.5 ; font-size: 19px; padding-left: inherit;">
	          	<ul>
		          	<li>Implementación y desarrollo de programas de Gestión de Seguridad Industrial, Salud Ocupacional, Medio   Ambiente y Gestión de Calidad.</li>
					<li>Implementación del Sistema de Gestión de Seguridad y Salud Ocupacional bajo la ISO 45001:2018.</li>
					<li>Auditorías de Seguridad y Salud en el Trabajo, bajo la normativa legal del Ministerio de Trabajo.	</li>
					<li>Asesoría en inspecciones de INDECI, elaboración de planos de orientación en señalización, medidas de evacuación, planes de contingencia.	</li>
					<li>Elaboración de registros y documentos obligatorios de acuerdo a la Normativa Legal Vigente.	</li>
					<li>Elaboración de programa anual de capacitación.	</li>
				</ul>
	            

	          </p>
	        </div>
	       <div class="modal-footer">
						<!-- <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button> -->
						<!-- <p>Not a member? <a href="#">Sign Up</a></p> -->
						<p style="color: white;">Pide mas Información <a data-toggle="modal" data-target="#contacto" onmouseover="javascript:this.style.color='#24CB31';">Aquí</a></p>
					</div>
	      </div>

	    </div>
	  </div>
	</div>

	<!--- modal de servicio uno-->

	<!--- modal de servicio dos-->
	<div class="container">

		<!-- Modal -->
		<div class="modal fade" id="dos" role="dialog">
			<div class="modal-dialog">

				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header" style="padding:35px 50px;">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h3><strong>OUTSOURCING EN EL SISTEMA DE GESTION DE SEGURIDAD Y SALUD EN EL TRABAJO</strong></h3>
					</div>
					<div class="modal-body" style="padding:40px 50px; height: none;">

						<div class=" servicio servicio2">
							<figure>
								<img src="img/servicio02.jpg">
							</figure>
							<h5 ><strong>OUTSOURCING EN EL SISTEMA DE GESTION DE SEGURIDAD Y SALUD EN EL TRABAJO</strong></h5>
							<p >Subcontratamos y tercerizamos personal de médico especialista en salud ocupacional e inspectores y supervisores en seguridad y salud en el trabajo.</p>

						</div>


						<p style="line-height: 2.5 ; font-size: 19px; padding-left: inherit;">

													

								<ul>
									 <strong>OUTSOURCING EN SALUD OCUPACIONAL</strong>
									 <br>
									<li>Brindamos un Médico Especialista En Seguridad y Salud en el Trabajo para las evaluaciones y seguimiento ocupacional médico.</li>
									<li>Asistencia por horas por parte de un Médico Especialista en salud ocupacional.</li>
									<li>Planear, programar y dirigir el desarrollo del Programa de salud ocupacional de la empresa.</li>
									<li>Implementación y Seguimiento de todos los programas de vigilancia médica ocupacional.</li>
									<br>
																
									<strong>OUTSOURCING EN SEGURIDAD EN EL TRABAJO</strong>
									<br>
									<li>Brindamos un supervisor o inspector a su empresa u obra.</li>
									<li>Brindamos servicios de asesores legales para su comité de seguridad y salud en el trabajo.</li>
									<li>Programamos y gestionamos ante las diferentes instancias de la Empresa, la ejecución de las actividades comprendidas en el Programa de Seguridad y Salud en el Trabajo.</li>
								</ul>


						</p>
					</div>
					<div class="modal-footer">
						<!-- <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button> -->
						<!-- <p>Not a member? <a href="#">Sign Up</a></p> -->
						<p style="color: white;">Pide mas Información <a data-toggle="modal" data-target="#contacto" onmouseover="javascript:this.style.color='#24CB31';">Aquí</a></p>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!--- modal de servicio dos-->

	<!--- modal de servicio tres-->

	<div class="container">
	  <!-- Modal -->
	  <div class="modal fade" id="tres" role="dialog">
	    <div class="modal-dialog">

	      <!-- Modal content-->
	      <div class="modal-content">
	        <div class="modal-header" style="padding:35px 50px;">
	          <button type="button" class="close" data-dismiss="modal">&times;</button>
	          <h3><strong>AUDITORIAS EN SISTEMA DE GESTION DE SEGURIDAD Y SALUD EN EL TRABAJO</strong></h3>
	        </div>
	        <div class="modal-body" style="padding:40px 50px; height: 532px;">

	          <div class="servicio servicio3">
	            <figure>
	              <img src="img/servicio03.jpg">
	            </figure>

	            <h5><strong>AUDITORIAS EN SISTEMA DE GESTION DE SEGURIDAD Y SALUD EN EL TRABAJO</strong></h5>
	            <p>De acuerdo al D.S. 005-2012-TR: Art. 33: La auditoría del sistema de gestión de seguridad y salud en el trabajo es un registro obligatorio que es acreditado por el Ministerio de Trabajo.</p>

	          </div>


	          <p style="line-height: 2.5 ; font-size: 19px; padding-left: inherit;">


	          	<ul>
	          		<li>Brindamos auditorías en el sistema de gestión de seguridad y salud en el trabajo de forma periódica.</li>
	          		<li>Contamos con un staff de ingenieros acreditados por el ministerio de trabajo para las auditorías externas determinadas como registro obligatorio de un sistema de gestión de seguridad y salud en el trabajo.</li>
	          	</ul>

	          </p>
	        </div>
	        <div class="modal-footer">
	         <!--  <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal" style="color: black; background-color: black;"><span class="glyphicon glyphicon-remove"></span> Cancel</button> -->
	          <!-- <p>Not a member? <a href="#">Sign Up</a></p> -->
	         <p style="color: white;">Pide mas Información <a data-toggle="modal" data-target="#contacto" onmouseover="javascript:this.style.color='#24CB31';">Aquí</a></p>
	        </div>
	      </div>

	    </div>
	  </div>
	</div>

	<!--- modal de servicio tres-->

		<!--- modal de servicio cuatro-->

		<div class="container">
		  <!-- Modal -->
		  <div class="modal fade" id="cuatro" role="dialog">
		    <div class="modal-dialog">

		      <!-- Modal content-->
		      <div class="modal-content">
		        <div class="modal-header" style="padding:35px 50px;">
		          <button type="button" class="close" data-dismiss="modal">&times;</button>
		          <h3><strong>CAPACITACION EN SEGURIDAD Y SALUD EN EL TRABAJO EN MINERIA</strong></h3>
		        </div>
		        <div class="modal-body" style="padding:40px 50px; /*height: 650px;*/ ">

		          <div class="servicio servicio4">
		            <figure>
		              <img src="img/servicio04.jpg">
		            </figure>

		            <h5><strong>CAPACITACION EN SEGURIDAD Y SALUD EN EL TRABAJO EN MINERIA</strong></h5>
		            <p>Brindamos capacitaciones en seguridad y salud en el trabajo para el rubro minero.
		              <br>
		              Anexo 06 D.S. 023 2017 EM

		            </p>

		          </div>


		          <p style="line-height: 2.5 ; font-size: 19px; padding-left: inherit;">

		             <figure  style="width: 950px; height: 665px;">
		               <img src="img/anexoAnimado.jpg" alt="anexo" style="width: 950px; height: 665px;">
		             </figure>



		          </p>
		        </div>
		        <div class="modal-footer">
		        <!--   <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button> -->
		          <!-- <p>Not a member? <a href="#">Sign Up</a></p> -->
		          <p style="color: white;">Pide mas Información <a data-toggle="modal" data-target="#contacto" onmouseover="javascript:this.style.color='#24CB31';">Aquí</a></p>
		        </div>
		      </div>

		    </div>
		  </div>
		</div>

	 <!--- modal de servicio cuatro-->


   <!--- modal de servicio cinco-->
	 <div class="container">


	   <!-- Modal -->
	   <div class="modal fade" id="cinco" role="dialog">
	     <div class="modal-dialog">

	       <!-- Modal content-->
	       <div class="modal-content">
	         <div class="modal-header" style="padding:35px 50px; ">
	           <button type="button" class="close" data-dismiss="modal">&times;</button>
	           <h3><strong>CAPACITACION EN SEGURIDAD Y SALUD EN EL TRABAJO EN MINERIA</strong></h3>
	         </div>
	         <div class="modal-body" style="padding:40px 50px; height:none;">

	            <div class="servicio servicio5">
	             <figure>
	               <img src="img/servicio05.jpg">
	             </figure>
	             <h5><strong>CAPACITACION EN SEGURIDAD Y SALUD EN EL TRABAJO</strong></h5>
	             <p>El Marco Normativo Legal Nacional, exige que el empleados capacite a sus trabajadores en al menos 4 capacitaciones al año en temas relacionados a la seguridad y los peligros y riesgos a los que estos están expuestos.</p>

	           </div>


	           <p style="line-height: 2.3 ; font-size: 19px; padding-left: inherit; ">

	           	<ul>
	           		<li>Capacitación en trabajos de alto riesgo.</li>
	           		<li>Capacitación en Trabajos en Altura.</li>
	           		<li>Capacitación en Trabajos en Caliente.</li>
	           		<li>Capacitación en Espacios Confinados.</li>
	           		<li>Capacitación en Materiales Peligrosos.</li>
	           		<li>Capacitación en Gestión de indicadores en un Sistema de Gestión.</li>
	           		<li>Capacitación en Sistema de Gestión de Seguridad y Salud en el Trabajo.</li>
	           		<li>Capacitación en Interpretación de  la Ley de Seguridad y Salud en el Trabajo y sus modificatorias.</li>
	           		<li>Capacitación para Comité de Seguridad y Salud en el Trabajo y para Supervisor de Seguridad y salud en el Trabajo.</li>
	           		<li>Capacitaciones especificas en Seguridad Industrial y Salud en el Trabajo.</li>
	           		<li>Capacitación en Respuesta ante Emergencias.</li>
	           		<li>Capacitación de primeros auxilios.</li>
	           		<li>Capacitación de lucha contra incendios.</li>

	           	</ul>

	           


	           </p>
	         </div>
	         <div class="modal-footer">
	          <!--  <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button> -->
	           <!-- <p>Not a member? <a href="#">Sign Up</a></p> -->
	           <p style="color: white;">Pide mas Información <a data-toggle="modal" data-target="#contacto" onmouseover="javascript:this.style.color='#24CB31';">Aquí</a></p>
	         </div>
	       </div>

	     </div>
	   </div>
	 </div>


  <!--- modal de servicio cinco-->




	<!--- modal de servicios en general-->

<!-- modal informacion de la empresa---->
<div class="container">
	<!-- Modal -->
	<div class="modal fade" id="empresa" role="dialog">
		<div class="modal-dialog" style="width: 1000px;">


			<div class="nosotros">	
				<figure class="figure-nosotros">
					<img src="img/nosotros.jpg" alt="nosotros" class="img-nosotros">
				</figure>
			</div>

			<!-- Modal content-->
			<div class="modal-content-nosotros">
				<div class="modal-header" style="padding:35px  50px 35px 519px;">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4><span class="glyphicon glyphicon-lock"></span> QUIENES SOMOS</h4>
					<p style="font-size: 16px; color: white;">
						Somos una empresa fundada por ingenieros peruanos que ofrecen servicios de consultoría, capacitación, auditoría, diagnóstico, monitoreo, implementación y otros relacionados a los Sistemas de Gestión de Seguridad, Salud Ocupacional y Medio Ambiente.
						Buscamos acompañar a su organización en el proceso de implementación y/o mejora de su Sistema de Gestión, en cumplimiento con la legislación nacional, sectorial y requisitos de sus clientes.
						Contamos con un staff de profesionales de primera línea, con sólida formación en constante capacitación y de amplia experiencia, lo cual los convierte en profesionales competentes para generar valor agregado a nuestros clientes
					</p>
				</div>
				<div class="modal-body-nosotros">
					<div class="mision">
						<h3>Misión <span class="glyphicon glyphicon-record" aria-hidden="true"></span></h3>
						<p>Somos Una empresa que contribuye con sus clientes a promover altos estándares en seguridad, salud, protección ambiental y responsabilidad social cumpliendo con la legislación nacional y sectorial.</p>
					</div>

					<div class="vision">
						<h3></span>Visión <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></h3>
						<p>Ser una empresa líder y reconocida en los servicios de consultoría y capacitación en seguridad salud ocupacional y medio ambiente. Además de ser socios estratégicos de nuestros clientes.</p>
					</div>
				</div>
				<div class="modal-footer">
					<!-- <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
					<p>Not a member? <a href="#">Sign Up</a></p>
					<p>Forgot <a href="#">Password?</a></p> -->
				</div>
			</div>

		</div>
	</div>
</div>
<!--termino de modal---->

<!---modal de acreditaciones----------->
<div class="container">
  <!-- Modal -->
  <div class="modal fade" id="acreditaciones" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class=""></span> ACREDITACIONES</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">

          <div class="urls" style="display: flex; justify-content: space-between;">

                <div  style="display: flex; align-items:center; flex-direction: column; ">

                  <p>
                    <img src="img/osha-logo.jpg" alt="" style="height : 100px; width: 100px">
                    <a href="https://www.osha.gov/">• www.osha.gov</a>
                    </p>

                  <p>
                    <img src="img/NFPA-Logo (1).jpg" alt="" style="height : 100px; width: 100px">
                    <a href="https://www.nfpa.org/">• www.nfpa.org</a>
                    </p>

                </div>

                <div  style="display: flex; align-items:center; flex-direction: column; ">

                  <p>
                    <img src="img/uta-logo.jpg" alt="" style="height : 100px ;width: 100px">
                    <a href="https://www.uta.edu/uta/">• www.uta.edu</a>
                </p>

                  <p>
                    <img src="img/ASME-logo.png" alt="" style="height : 100px ;width: 100px">
                    <a href="https://www.asme.org/">• www.asme.org</a>
                  </p>

                </div>
          </div>

        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
        </div>
      </div>

    </div>
  </div>
</div>

<!---termino de modal de acreditaciones------------->


<!---inicio modal de contacto-------------------------->

<div class="container">
 

  <!-- Modal -->
  <div class="modal fade" id="contacto" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">

         
                    <div class="modal-body-formulario" >
                      <div class="body-formulario">
                          <form role="form" class="formulario" >
                            <div class="form-group">
                              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Nombre(s)</label>
                              <input type="text" class="form-control" id="usrname" placeholder="Enter nombre" required="">
                            </div>
                             <div class="form-group">
                              <label for="usrname"><span class="glyphicon glyphicon-envelope"></span> Email</label>
                              <input type="email" class="form-control" id="usrname" placeholder="Enter email" required="">
                            </div>
                             <div class="form-group">
                              <label for="usrname"><span class="glyphicon glyphicon-pencil"></span> Asunto</label>
                              <input type="text" class="form-control" id="usrname" placeholder="Enter asunto" required="">
                            </div>
                            <div class="form-group">
                              <label for="psw"><span class="glyphicon glyphicon-comment"></span> Mensaje</label>
                              <textarea type="text" class="form-control" id="psw" placeholder="Enter mensaje" required=""></textarea> 
                            </div>
                           <!--  <div class="checkbox">
                              <label><input type="checkbox" value="" checked>Remember me</label>
                            </div> -->
                              <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Enviar Mensaje</button>
                          </form>
                      </div>
                    </div>
                    



        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-lock"></span> CONTACTO</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
         
         
         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3900.9113773553454!2d-77.03478203117193!3d-12.11821599641534!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c83d412b09c5%3A0x52992abea20e1699!2sCalle+El%C3%ADas+Aguirre+180%2C+Miraflores+15074!5e0!3m2!1ses!2spe!4v1526418028351" width="1400" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <div class="modal-footer">
         <!--  <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
          <p>Not a member? <a href="#">Sign Up</a></p>
          <p>Forgot <a href="#">Password?</a></p> -->
        </div>
      </div>
      
    </div>
  </div> 
</div>

<!---fin modal de contacto-------------------------->

<div class="container">


  <!-- Modal -->
  <div class="modal fade" id="servicio1" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h5><strong>IMPLEMENTACION DEL SISTEMA DE GESTIÓN DE SEGURIDAD Y SALUD EN EL TRABAJO</strong></h5>
        </div>
        <div class="modal-body" style="padding:40px 50px; height: 532px;">

          <div class=" servicio servicio1">
            <figure>
              <img src="img/imagesservicicos.jpg">
            </figure>
            <h5><strong>IMPLEMENTACION DEL SISTEMA DE GESTIÓN DE SEGURIDAD Y SALUD EN EL TRABAJO</strong></h5>
            <p>Implementamos y desarrollamos programas de Gestión de Seguridad Industrial, Salud en el trabajo de acuerdo a la Normativa Legal Nacional vigente.</p>

          </div>

          <p class="punto"  style="line-height: 2.5 ; font-size: 19px; padding-left: inherit;">
            Implementación y desarrollo de programas de Gestión de Seguridad Industrial, Salud Ocupacional, Medio   Ambiente y Gestión de Calidad.
            <br>
            Implementación del Sistema de Gestión de Seguridad y Salud Ocupacional bajo la ISO 45001:2018.
            <br>
            Auditorías de Seguridad y Salud en el Trabajo, bajo la normativa legal del Ministerio de Trabajo.
            <br>
            Asesoría en inspecciones de INDECI, elaboración de planos de orientación en señalización, medidas de evacuación, planes de contingencia.
            <br>
            Elaboración de registros y documentos obligatorios de acuerdo a la Normativa Legal Vigente.
            <br>
            Elaboración de programa anual de capacitación.

          </p>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
          <!-- <p>Not a member? <a href="#">Sign Up</a></p> -->
          <p style="color: white;">Pide mas Información <a href="#"> Aquí</a></p>
        </div>
      </div>

    </div>
  </div>
</div>







<!-- inicioModalClientes -->
	<div class="container">
 

  <!-- Modal -->
  <div class="modal fade" id="clientes" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header"  >
          <button type="button" class="close close-clientes" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-user"></span> CLIENTES</h4>
        </div>
        <div class="modal-body-clientes" style="padding:40px ;">
         

        <div class="clientes column">
          <div>
          
            <figure>
              <a href="http://cmslsa.com/"><img src="img/logos/1_Mesa de trabajo 1.jpg" alt=""></a>
              
            </figure> 
             <span>Hover</span> 
        </div>
          <figure>
            <a href=""><img src="img/logos/2_Mesa de trabajo 1.jpg" alt=""></a>
          </figure>

          <figure>
           <a href="http://www.tahoeresources.com/spanish/operaciones/mina-shahuindo/"> <img src="img/logos/3_Mesa de trabajo 1.jpg" alt=""></a>
          </figure>

          <figure>
           <a href="http://www.tahoeresources.com/spanish/operaciones/mina-la-arena/"> <img src="img/logos/4_Mesa de trabajo 1.jpg" alt=""></a>
          </figure>
           
          <figure>
           <a href="http://www.soltrak.com.pe/"> <img src="img/logos/6_Mesa de trabajo 1.jpg" alt=""></a>
          </figure>

          <figure>
            <a href="http://stracon.com/inicio"> <img src="img/logos/8_Mesa de trabajo 1.jpg" alt=""></a>
          </figure>

          <figure>
             <a href="http://sanmartin.com/"> <img src="img/logos/5_Mesa de trabajo 1.jpg" alt=""></a>
          </figure>

          <figure>
           <a href="https://imecon.com.pe/"> <img src="img/logos/7_Mesa de trabajo 1.jpg" alt=""></a>
          </figure>  
          
          <figure> 

           <a href="http://www.galvec.com/"> <img src="img/logos/9_Mesa de trabajo 1.jpg" alt=""></a>
          </figure>

          <figure>
           <a href="http://www.unimaq.com.pe/"> <img src="img/logos/14_Mesa de trabajo 1.jpg" alt=""></a>
          </figure> 

          <figure>
           <a href="http://www.shouxin.com.pe/"> <img src="img/logos/11_Mesa de trabajo 1.jpg" alt=""></a>
          </figure>

          <figure>
           <a href="http://www.unicon.com.pe/principal/categoria/mineria/152/c-152"> <img src="img/logos/12.jpg" alt=""></a>
          </figure>

          <figure>
           <a href=""> <img src="img/logos/13_Mesa de trabajo 1.jpg" alt=""></a>
          </figure>

          <figure>
           <a href="https://www.ais.com.pe/"> <img src="img/logos/10_Mesa de trabajo 1.jpg" alt=""></a>
          </figure>

           <figure>
           <a href="http://www.shougang.com.pe/"> <img src="img/logos/15_Mesa de trabajo 1.jpg" alt=""></a>
          </figure>

          <figure>
           <a href="http://www.buenaventura.com/es/"> <img src="img/logos/16_Mesa de trabajo 1.jpg" alt=""></a>
          </figure>



        </div>



        </div>
        <div class="modal-footer" >
         <!--  <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
          <p>Not a member? <a href="#">Sign Up</a></p>
          <p>Forgot <a href="#">Password?</a></p> -->
        </div>
      </div>
      
    </div>
  </div> 
</div>




<!-- finModalClientes -->



<!-- IniciomodalCertificados -->


				 <div class="container">
 

  <!-- Modal -->
  <div class="modal fade" id="Certificados" role="dialog">
    <div class="modal-dialog" style="width: 1100px;">
    
      <!-- Modal content-->
      <div class="modal-content" style="width: 1100px;">
        <div class="modal-header" style="padding:15px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Busqueda de Certificado</h4>
        </div>
        <div class="modal-body" style="padding:5px 50px;">





                
                  <div class="clearfix" id="page">
                      <!-- group -->
                      <div class="clearfix grpelem" id="ppu464">
                    <!-- column -->
                    <!-- <div class="clearfix colelem" id="pu464">
                      
                      <div class="clip_frame grpelem" id="u464">
                       
                        <img class="block" id="u464_img" src="images/ecopro%20con%20slogan-02.png?crc=4291317765" alt="" width="277" height="83" />
                      </div>
                    
                    </div> -->

                    <!-- m_editable region-id="editable-static-tag-U842-BP_infinity" template="novedades.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->

                    <!-- /m_editable -->

                   <!--    <div class="colelem" id="u843">
                   
                  </div> -->

                    </div>

                    <div class="verticalspacer" data-offset-top="579" data-content-above-spacer="579" data-content-below-spacer="113"><br><br>
                          <!-- Nav tabs -->
                          <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item active">
                              <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Búsqueda por DNI</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Búsqueda por Registro</a>
                            </li>

                          </ul>
                          

                    <!-- Tab panes -->
                    <div class="tab-content">
                      <div class="tab-pane active" id="home" role="tabpanel">
                        <div class="panel panel-default">
                          <div class="panel-body">
                            <div class="form-group">
                              <label for="usr">DNI:</label>

                              <form name="form1" action="" method="post">

                                <input type="text" name="txtdni" class="form-control" maxlength="8" required="required" placeholder="Ingrese el N° de DNI " onkeypress="return valida(event)">

                            </div>
                            <div class="form-group">
                              <label class="col-xs-3 control-label">CLIENTE</label>
                              <div class="col-xs-5 selectContainer">

                                <select required="required" class="form-control" name="txtcodemp">
                                    <option value="" selected="selected">(Seleccionar Cliente)</option>
                                  <?php
                                    include_once ("model/ConsultasDAO.php");
                                    $obj= new ConsultasDAO();
                                    $rs=$obj->listado_cliente();
                                    while($datos=$rs->fetch(PDO::FETCH_OBJ)){
                                  ?>
                                    <option value="<?php echo $datos->codigocli;?>">
                                      <?php echo $datos->nombrec;?>
                                    </option>

                                  <?php
                                    }
                                  ?>
                                </select>
                              </div>
                            </div>

                    <button type="submit" class="btn btn-success">Buscar</button>
                    <button type="reset" class="btn btn-success">Limpiar</button>
                    </form>
                    <div>
                    </div>
                    <div>
                    </div>
                  </div>
                </div>

                <div class="completar-datos">
                  <?php
              $contenido='<center><h2><b>CERTIFICADOS</b></h2></center><br>';
              include_once ("model/ConsultasDAO.php");
                $obj= new ConsultasDAO();
                $dnip=$_POST['txtdni'];
                $codigocli=$_POST['txtcodemp'];
                $rs=$obj->datos_personales($dnip,$codigocli);
                while($datos=$rs->fetch(PDO::FETCH_OBJ)){
              ?>
                    <?php echo $contenido;?>
                    <h4 >
                      <b>APELLIDOS Y NOMBRES:
                <font style="text-transform: uppercase; color: green">
                  <?php echo $datos->apellidosp.', '.$datos->nombresp;?>
                </font></b>
                    </h4><br>
                    <h4><b>DNI:
                <font style="color: green">
                  <?php echo $datos->dnip;?>
                </font></b>
                    </h4><br>
                    <?php
                  }
                ?>
                </div>
                <div class="panel panel-default">
                  <div class="panel-body" style="  overflow-y: scroll; height: 250px;">

                    <table class="table table-hover">
                      <tr>
                        <td>
                          <h5><b>N°</b></h5>
                        </td>
                        <td>
                          <h5><b>Curso</b></h5>
                        </td>
                        <td>
                          <h5><b>Empresa</b></h5>
                        </td>
                        <td>
                          <h5><b>Fecha</b></h5>
                        </td>
                        <td>
                          <h5><b>Descargar </b></h5><br></td>
                      </tr>
                      <?php
              include_once ("model/ConsultasDAO.php");
                $obj= new ConsultasDAO();
                $dnip=$_POST['txtdni'];
                $codigocli=$_POST['txtcodemp'];
                $rs=$obj->certificado_busqueda($dnip,$codigocli);
                while($datos=$rs->fetch(PDO::FETCH_OBJ)){
              ?>
                        <tr>
                          <td>
                            <?php echo $datos->cod_certificado;?>
                          </td>
                          <td>
                            <?php echo $datos->nombrecur;?>
                          </td>
                          <td>
                            <?php echo $datos->nombrecon;?>
                          </td>
                          <td>
                            <?php echo $datos->fecha_emisionc;?>
                          </td>

                          <td><button type="submit" class="btn btn-success" onclick="location.href='pdf.php?cod=<?php echo base64_encode($datos->cod_certificado) ?>'">Ver Certificado</button>
                          </td>
                        </tr>
                        <?php
                }
              ?>

                    </table>

                  </div>
                </div>

              </div>
              <div class="tab-pane" id="profile" role="tabpanel">
                <div class="tab-pane active" id="home" role="tabpanel">
                  <div class="panel panel-default">
                    <div class="panel-body">
                      <div class="form-group">
                        <label for="usr"> CODIGO DEL REGISTRO:</label>

                        <form name="form1" action="" method="post">
                        <input type="text" name="txtregistro" class="form-control" maxlength="" required="required" placeholder="Ingrese el Codigo de Registro ">

                      </div>
                      <button type="submit" class="btn btn-success">Buscar</button>
                      <button type="reset" class="btn btn-success">Limpiar</button>
                      </form>
                      <div>
                      </div>
                      <div>
                      </div>
                    </div>
                  </div>

                  <div class="panel panel-default">
                    <div class="panel-body">

                      <table class="table table-hover">
                        <tr>
                          <td>
                            <h5><b>Registro</b></h5>
                          </td>
                          <td>
                            <h5><b>Apellidos y Nombres</b></h5>
                          </td>
                          <td>
                            <h5><b>Curso</b></h5>
                          </td>
                          <td>
                            <h5><b>Fecha</b></h5>
                          </td>
                          <td>
                            <h5><b>Descargar </b></h5><br></td>
                        </tr>
                        <?php
              include_once ("model/ConsultasDAO.php");
                $obj= new ConsultasDAO();
                $codigor=$_POST['txtregistro'];
                $rs=$obj->datos_certificado($codigor);
                while($datos=$rs->fetch(PDO::FETCH_OBJ)){
              ?>
                          <tr>
                            <td>
                              <?php echo $datos->cod_certificado;?>
                            </td>
                            <td>
                              <?php echo $datos->nombresp.' '.$datos->apellidosp;?>
                            </td>
                            <td>
                              <?php echo $datos->nombrecur;?>
                            </td>

                            <td>
                                <?php echo $datos->fecha_emisionc; ?>
                            </td>


                            <td><button type="submit" class="btn btn-success" onclick="location.href='pdf.php?cod=<?php echo base64_encode($datos->cod_certificado) ?>'">Ver Certificado</button>
                            </td>
                          </tr>
                          <?php
                }
              ?>
                      </table>

                    </div>
                  </div>
                </div>
              </div>


              <script rel="text/javascript" src="js/jquery-3.2.1.min.js"></script>
              <script rel="text/javascript" src="js/bootstrap.min.js"></script>
              <script type="text/javascript">
                $('#btningresar').on('click', function() {
                  if ($('#txtdni').val() == 'administrador' && $('#txtusu').val() == 'admin123') {
                    if ($('#txtdni').val() == 'administrador' && $('#txtusu').val() == 'admin123') {
                      $('#exampleModal').modal('show');
                    } else {
                      alert('Datos incorrectos');
                    }
                  } else {
                    alert('Rellenar campos');
                  }

                });

              </script>

              <script type="text/javascript">
              </script>

              <!---------------------------------------------------------->
              <!-- Other scripts -->
              <script type="text/javascript">
                // Decide weather to suppress missing file error or not based on preference setting
                var suppressMissingFileError = false

              </script>
           




                    </div>






         

        </div>          
       
      </div>
      
    </div>
     <div class="modal-footer">
          <!--  <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
          <p>Not a member? <a href="#">Sign Up</a></p>
          <p>Forgot <a href="#">Password?</a></p>  -->
      </div>
  </div> 
</div>

<!-- finmodalCertificados -->












	<script>
      var $burguerButton = document.getElementById('burguer-button');
      var $menu = document.getElementById('menu');

      $burguerButton.addEventListener('touchstart', toggleMenu);

      function toggleMenu(){
        $menu.classList.toggle('active')
      };

    </script>

		<script type="text/javascript">
		   // Decide weather to suppress missing file error or not based on preference setting
		var suppressMissingFileError = false
		</script>
		  <script type="text/javascript">
		   window.Muse.assets.check=function(d){if(!window.Muse.assets.checked){window.Muse.assets.checked=!0;var b={},c=function(a,b){if(window.getComputedStyle){var c=window.getComputedStyle(a,null);return c&&c.getPropertyValue(b)||c&&c[b]||""}if(document.documentElement.currentStyle)return(c=a.currentStyle)&&c[b]||a.style&&a.style[b]||"";return""},a=function(a){if(a.match(/^rgb/))return a=a.replace(/\s+/g,"").match(/([\d\,]+)/gi)[0].split(","),(parseInt(a[0])<<16)+(parseInt(a[1])<<8)+parseInt(a[2]);if(a.match(/^\#/))return parseInt(a.substr(1),
		16);return 0},g=function(g){for(var f=document.getElementsByTagName("link"),h=0;h<f.length;h++)if("text/css"==f[h].type){var i=(f[h].href||"").match(/\/?css\/([\w\-]+\.css)\?crc=(\d+)/);if(!i||!i[1]||!i[2])break;b[i[1]]=i[2]}f=document.createElement("div");f.className="version";f.style.cssText="display:none; width:1px; height:1px;";document.getElementsByTagName("body")[0].appendChild(f);for(h=0;h<Muse.assets.required.length;){var i=Muse.assets.required[h],l=i.match(/([\w\-\.]+)\.(\w+)$/),k=l&&l[1]?
		l[1]:null,l=l&&l[2]?l[2]:null;switch(l.toLowerCase()){case "css":k=k.replace(/\W/gi,"_").replace(/^([^a-z])/gi,"_$1");f.className+=" "+k;k=a(c(f,"color"));l=a(c(f,"backgroundColor"));k!=0||l!=0?(Muse.assets.required.splice(h,1),"undefined"!=typeof b[i]&&(k!=b[i]>>>24||l!=(b[i]&16777215))&&Muse.assets.outOfDate.push(i)):h++;f.className="version";break;case "js":h++;break;default:throw Error("Unsupported file type: "+l);}}d?d().jquery!="1.8.3"&&Muse.assets.outOfDate.push("jquery-1.8.3.min.js"):Muse.assets.required.push("jquery-1.8.3.min.js");
		f.parentNode.removeChild(f);if(Muse.assets.outOfDate.length||Muse.assets.required.length)f="Puede que determinados archivos falten en el servidor o sean incorrectos. Limpie la cache del navegador e inténtelo de nuevo. Si el problema persiste, póngase en contacto con el administrador del sitio web.",g&&Muse.assets.outOfDate.length&&(f+="\nOut of date: "+Muse.assets.outOfDate.join(",")),g&&Muse.assets.required.length&&(f+="\nMissing: "+Muse.assets.required.join(",")),suppressMissingFileError?(f+="\nUse SuppressMissingFileError key in AppPrefs.xml to show missing file error pop up.",console.log(f)):alert(f)};location&&location.search&&location.search.match&&location.search.match(/muse_debug/gi)?
		setTimeout(function(){g(!0)},5E3):g()}};
		var muse_init=function(){require.config({baseUrl:""});require(["jquery","museutils","whatinput","jquery.musemenu","webpro","jquery.watch"],function(d){var $ = d;$(document).ready(function(){try{
		window.Muse.assets.check($);/* body */
		Muse.Utils.transformMarkupToFixBrowserProblemsPreInit();/* body */
		Muse.Utils.prepHyperlinks(true);/* body */
		Muse.Utils.resizeHeight('.browser_width');/* resize height */
		Muse.Utils.requestAnimationFrame(function() { $('body').addClass('initialized'); });/* mark body as initialized */
		Muse.Utils.makeButtonsVisibleAfterSettingMinWidth();/* body */
		Muse.Utils.initWidget('.MenuBar', ['#bp_infinity'], function(elem) { return $(elem).museMenu(); });/* unifiedNavBar */
		Muse.Utils.initWidget('#widgetu160', ['#bp_infinity'], function(elem) { return new WebPro.Widget.Form(elem, {validationEvent:'submit',errorStateSensitivity:'high',fieldWrapperClass:'fld-grp',formSubmittedClass:'frm-sub-st',formErrorClass:'frm-subm-err-st',formDeliveredClass:'frm-subm-ok-st',notEmptyClass:'non-empty-st',focusClass:'focus-st',invalidClass:'fld-err-st',requiredClass:'fld-err-st',ajaxSubmit:true}); });/* #widgetu160 */
		Muse.Utils.fullPage('#page');/* 100% height page */
		Muse.Utils.showWidgetsWhenReady();/* body */
		Muse.Utils.transformMarkupToFixBrowserProblems();/* body */
		}catch(b){if(b&&"function"==typeof b.notify?b.notify():Muse.Assert.fail("Error calling selector function: "+b),false)throw b;}})})};

		</script>
		  <!-- RequireJS script -->
		  <script src="scripts/require.js?crc=3861931657" type="text/javascript" async data-main="scripts/museconfig.js?crc=278381782" onload="if (requirejs) requirejs.onError = function(requireType, requireModule) { if (requireType && requireType.toString && requireType.toString().indexOf && 0 <= requireType.toString().indexOf('#scripterror')) window.Muse.assets.check(); }" onerror="window.Muse.assets.check();"></script>

</body>

<footer class="slides-pagination-footer">

</footer>
</html>
