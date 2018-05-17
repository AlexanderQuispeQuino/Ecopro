<!DOCTYPE html>
<html class="" lang="es-ES">
<head>

	<meta charset="utf-8" />
	<meta name="generator" content="2017.1.0.379" />

	<script>
		function valida(e) {
			tecla = (document.all) ? e.keyCode : e.which;

			//Tecla de retroceso para borrar, siempre la permite
			if (tecla == 8) {
				return true;
			}

			// Patron de entrada, en este caso solo acepta numeros
			patron = /[0-9]/;
			tecla_final = String.fromCharCode(tecla);
			return patron.test(tecla_final);
		}

	</script>

	<script type="text/javascript">
		// Redirect to phone/tablet as necessary
		(function(a, b, c) {
			var d = function() {
					if (navigator.maxTouchPoints > 1) return !0;
					if (window.matchMedia && window.matchMedia("(-moz-touch-enabled)").matches) return !0;
					for (var a = ["Webkit", "Moz", "O", "ms", "Khtml"], b = 0, c = a.length; b < c; b++) {
						var f = a[b] + "MaxTouchPoints";
						if (f in navigator && navigator[f]) return !0
					}
					try {
						return document.createEvent("TouchEvent"), !0
					} catch (d) {}
					return !1
				}(),
				g = function(a) {
					a += "=";
					for (var b = document.cookie.split(";"), c = 0; c < b.length; c++) {
						for (var f = b[c]; f.charAt(0) == " ";) f = f.substring(1, f.length);
						if (f.indexOf(a) ==
							0) return f.substring(a.length, f.length)
					}
					return null
				};
			if (g("inbrowserediting") != "true") {
				var f, g = g("devicelock");
				g == "phone" && c ? f = c : g == "tablet" && b && (f = b);
				if (g != a && !f)
					if (window.matchMedia) window.matchMedia("(max-device-width: 415px)").matches && c ? f = c : window.matchMedia("(max-device-width: 960px)").matches && b && d && (f = b);
					else {
						var a = Math.min(screen.width, screen.height) / (window.devicePixelRatio || 1),
							g = window.screen.systemXDPI || 0,
							i = window.screen.systemYDPI || 0,
							g = g > 0 && i > 0 ? Math.min(screen.width / g, screen.height / i) :
							0;
						(a <= 370 || g != 0 && g <= 3) && c ? f = c : a <= 960 && b && d && (f = b)
					}
				if (f) document.location = f + (document.location.search || "") + (document.location.hash || ""), document.write('<style type="text/css">body {visibility:hidden}</style>')
			}
		})("desktop", "", "");

		// Update the 'nojs'/'js' class on the html node
		document.documentElement.className = document.documentElement.className.replace(/\bnojs\b/g, 'js');

		// Check that all required assets are uploaded and up-to-date
		if (typeof Muse == "undefined") window.Muse = {};
		window.Muse.assets = {
			"required": ["museutils.js", "museconfig.js", "jquery.watch.js", "require.js", "jquery.musemenu.js", "jquery.musepolyfill.bgsize.js", "novedades.css"],
			"outOfDate": []
		};

	</script>


	<link rel="shortcut icon" href="images/pie-favicon.ico?crc=402479878" />
	<title>Certificados</title>
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="csscertificados/site_global.css?crc=444006867" />
	<link rel="stylesheet" type="text/css" href="csscertificados/master_cabecera.css?crc=4014256043" />
	<link rel="stylesheet" type="text/css" href="csscertificados/master_pie.css?crc=3920211054" />
	<link rel="stylesheet" type="text/css" href="csscertificados/novedades.css?crc=3893568344" id="pagesheet" />
	<link rel="stylesheet" type="text/css" href="csscertificados/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="../csscertificados/style3.css" />
	<!-- JS includes -->
	<!--[if lt IE 9]>
  <script src="scripts/html5shiv.js?crc=4241844378" type="text/javascript"></script>
  <![endif]-->
</head>

<body>

	<div class="clearfix" id="page">
		<!-- group -->
		<div class="clearfix grpelem" id="ppu464">
			<!-- column -->
			<div class="clearfix colelem" id="pu464">
				<!-- group -->
				<div class="clip_frame grpelem" id="u464">
					<!-- image -->
					<img class="block" id="u464_img" src="images/ecopro%20con%20slogan-02.png?crc=4291317765" alt="" width="277" height="83" />
				</div>
				<!--  -->
			</div>

			<!-- m_editable region-id="editable-static-tag-U842-BP_infinity" template="novedades.html" data-type="html" data-ice-options="disableImageResize,link,txtStyleTarget" -->

			<!-- /m_editable -->

			<div class="colelem" id="u843">
				<!-- simple frame -->
			</div>

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
		</div>


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

				<div>
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
						<h4>
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
					<div class="panel-body">

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
</body>
</html>
