


<?php
session_start();

if ($_SESSION['doc_empresario']=="" || $_SESSION['doc_empresario']==null) {
  header("location:index.php");
}

?>


<div class="carousel slide"  id="mi" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-slide-to="0" data-target="#mi" class="active"></li>
    <li data-slide-to="1" data-target="#mi" ></li>
    <li data-slide-to="2" data-target="#mi" ></li>
  </ol>
  <div class="carousel-inner">
    <div class="item active">
      <img src="img/numero1.jpg">
    </div>
    <div class="item">
      <img src="img/numero2.jpg">
    </div>
    <div class="item">
      <img src="img/numero3.jpg">
    </div>
    
  
  <a href="#mi" class="right carousel-control" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
  <a href="#mi" class="left carousel-control" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
</div>
</div>



  <div class="navbar navbar-inverse">
    <div class="container">
      <div class="navbar-header">
        <a href="" class="navbar-brand"><span class="glyphicon glyphicon-globe"></span> DATA-MUNDO</a>
      </div>
      <div class="nav navbar-nav">
        <li><a href=""><span class="glyphicon glyphicon-home"></span> Inicio</a></li>
        <li><a href="?controlador=empresario&accion=BaseDatos"><span class="glyphicon glyphicon-ok"></span> Bases de Datos</a></li>
        <li><a href=""><span class="glyphicon glyphicon-eye-open"></span> Reportes</a></li>
      </div>
      <div class="nav navbar-nav">
        <li><a href=""><span class="glyphicon glyphicon-asterisk"></span> Acerca de</a></li>
        
      </div>
            
            <div class="nav navbar-nav">
        <li><a href=""><span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['doc_empresario']; ?>
</a></li>
        
      </div>

        <div class="nav navbar-nav navbar-right">
           <li><a href="?controlador=proyecto&accion=salir" class="btn btn-transparent btn btn-toggle"><span class="glyphicon glyphicon-log-out"></span> Cerrar Sesion</a></li>
        </div>
    </div>
  </div>
  <br>
  <br>
  <div class="col-md-4 col-md-offset-4">
    <div clas="container-fluid">
      <div class="panel panel-info">
        <div class="panel-heading"> <center> Registro </center> </div>
        <div class="panel-body">
        <form method="post" action="?controlador=empresariotres&accion=crud">
            <div class="input-group">
              <span class="input-group-addon"><span class="glyphicon glyphicon-ok"></span></span>
              <input type="text" name="costoactual" class="form-control" placeholder="Ingrese aqui el costo actual del arriendo">
            </div>
            <br>
            <div class="input-group">
              <span class="input-group-addon"><span class="glyphicon glyphicon-home"></span></span>
              <input type="text" name="direccion" class="form-control" placeholder="Ingrese aqui su Dirección">
            </div>
            <br>
            <div class="input-group">
              <span class="input-group-addon"><span class="glyphicon glyphicon-phone"></span></span>
              <input type="text" name="pisopuesto" class="form-control" placeholder="Ingrese aqui el piso del puesto">
            </div>
            <hr>
            <button class="btn btn-info btn-block">Registrar</button>
          </form>
          <hr>
          <form method="post" action="?controlador=empresario&accion=BaseDatos">
           <button class="btn btn-info btn-block">Regresar</button>
        </form>
        </div>
      </div>
      </div>
  </div>