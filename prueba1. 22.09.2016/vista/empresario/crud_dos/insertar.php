
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


<?php
session_start();

if ($_SESSION['doc_empresario']=="" || $_SESSION['doc_empresario']==null) {
  header("location:index.php");
}

?>

  
  <nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
             <a href="#menu-toggle" class="navbar-brand" id="menu-toggle"><span class="glyphicon glyphicon-globe"></span>  Data-Mundo</a>
    </div>
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav navbar-right">
            <li><a href=""></a></li>
            <li><a href=""></a></li>
            <li><a href=""></a></li>
           <li><a href="?controlador=proyecto&accion=salir" class="btn btn-transparent btn btn-toggle"><span class="glyphicon glyphicon-log-out"></span> Cerrar Sesion</a></li>
        </ul>
</nav>
    <div id="wrapper">

     
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                
                <li>
                    <a href="#"></a>
                </li>
                 <li>
                    <a href="?controlador=proyecto&accion=index"><span class="glyphicon glyphicon-home"></span>     Inicio</a>
                </li>
                <li><a href="?controlador=empresario&accion=BaseDatos"><span class="glyphicon glyphicon-ok"></span> Bases de Datos</a></li>
                <li><a href="?controlador=empresario&accion=reportes"><span class="glyphicon glyphicon-eye-open"></span> Reportes</a></li>
                           
            </ul>
        </div>
  <br>
  <br>
  <div class="col-md-4 col-md-offset-4">
    <div clas="container-fluid">
      <div class="panel panel-info">
        <div class="panel-heading"> <center> Registro </center> </div>
        <div class="panel-body">
        <form method="post" action="?controlador=empresariodos&accion=crud">
            <div class="input-group">
              <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
              <input type="number" name="numeropuesto" class="form-control" placeholder="Ingrese aqui el Numero de Puesto">
            </div>
            <br>
            <label>Fecha de inicio del Contrato:</label>
            <div class="input-group">
             <span class="input-group-addon"><span class="glyphicon glyphicon-"></span></span>
              <input type="date" name="fechainicio" class="form-control" placeholder="Ingrese aqui sus Apellidos">
            </div>
            <br>
            <label>Fecha de fin del Contrato:</label>
            <div class="input-group">
              <span class="input-group-addon"><span class="glyphicon glyphicon-"></span></span>
              <input type="date" name="fechafin" class="form-control" placeholder="Ingrese aqui su Numero de Identificación">
            </div>
            <br>
            <div class="input-group">
              <span class="input-group-addon"><span class="glyphicon glyphicon-usd"></span></span>
              <input type="text" name="costoarriendo" class="form-control" placeholder="Ingrese aqui el Costo el Arriendo">
            </div>
            <hr>
            <button class="btn btn-info btn-block">Registrar</button>
          </form>
          <hr>
         <center> <form method="post" action="?controlador=empresario&accion=BaseDatos">
        <button class="btn btn-info btn-block">Regresar</button></center>
        </form>
        </div>
      </div>
      </div>
  </div>