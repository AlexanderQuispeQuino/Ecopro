<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>





  <!-- csscertificados -->
  <link rel="stylesheet" type="text/css" href="css/site_global.css?crc=444006867" />
  <link rel="stylesheet" type="text/css" href="css/master_cabecera.css?crc=4014256043" />
  <link rel="stylesheet" type="text/css" href="css/master_pie.css?crc=3920211054" />
  <link rel="stylesheet" type="text/css" href="css/novedades.css?crc=3893568344" id="pagesheet" />
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="../css/style3.css" />
  <style>
  .modal-header, h4, .close {
      background-color: black;
      color:white !important;
      text-align: center;
      font-size: 30px;
  }
  .modal-footer {
      background-color: #f9f9f9;
  }

  .modal-footer{
    display: flex;
    justify-content:space-between;
    padding: 15px 0px;
    background-color: black;
    height: 40px
  }

.completar-datos h4{
  color: black !important;
  background-color: white;
  font-size: 18px;
  text-align:left;
  
}
div .completar-datos{
  display: flex;
  justify-content: space-between;
}




  </style>
</head>
<body>

<div class="container" >
  <h2>Modal Login Example</h2>
  <!-- Trigger the modal with a button -->
  <button type="submit" class="btn btn-default" id="myBtn">Login</button>

  <!-- Modal -->
  <div class=" modal fade" id="myModal" role="dialog" >
   
        <div class="modal-dialog" style="width: 1100px;">
    
      <!-- Modal content-->
      <div class="modal-content" style="width: 1100px;">
        <div class="modal-header" style="padding:15px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Busqueda de Certificado</h4>
        </div>
        <div class="modal-body" style="padding:5px 50px;">





                
                  <div class="clearfix" id="page">
                     
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
                    <div class="tab-content" id="container">
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






                    <button type="submit" class="btn btn-success"  id="myBtndni" >Buscar</button>
                    <button type="reset" class="btn btn-success">Limpiar</button>
                    </form>
                    <div>



<script>
  $('#myModal').modal('show'); // abrir
</script>

                    </div>
                    <div>
                    </div>
                  </div>
                </div>
                <center><h2><b>CERTIFICADOS</b></h2></center><br>

                <div class="completar-datos">
                  <?php
              $contenido='';
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
                  <div class="panel-body" style="  overflow-y: scroll; height: 338px;">

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

                          <td><!-- <button type="submit" class="btn btn-success" href="pdf.php?cod=<?php /*echo base64_encode*/($datos->cod_certificado) ?>" target="_blank" > Ver Certificado</button> -->
                            <button  type="submit" class="btn btn-success"> <a href="pdf.php?cod=<?php echo base64_encode($datos->cod_certificado) ?>" target="_blank" style="color: white; text-transform: none;"  >Ver Certificado</a> </button>
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


<!--                                              <script>
   function loadDoc() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 8 && this.status == 400) {
            document.getElementById("conteinerbody").innerHTML =
            this.responseText;
       }
    };
    xhttp.open("POST", "txtregistro", true);
    xhttp.send(); 
}

</script>  -->


<script>
$(document).ready(function(){
    $("#myBtn").click(function(){
        $("#myModal").modal();
    });
  
});
</script>

<script>

        $("#myModal").modal('show');
 
</script>














         

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



 


</body>
</html>
