
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
                    <a href=""><span class="glyphicon glyphicon-home"></span>     Inicio</a>
                </li>
                <li><a href="?controlador=empresario&accion=BaseDatos"><span class="glyphicon glyphicon-ok"></span> Bases de Datos</a></li>
                <li><a href="?controlador=empresario&accion=reportes"><span class="glyphicon glyphicon-eye-open"></span> Reportes</a></li>
                           
            </ul>
        </div>
      </div>
  <br>

  <br>
<!--   <section class="medio">
  <article>
   <center><H1> <P>BASES DE DATOS </P></H1></center>
   </article> -->
    <center>

        <section class="article">
            <article>
                <h1>BASES DE DATOS</h1>
                
            </article>


<div u>
<ul class="menu" >

    <li><a href="#"><span class="glyphicon glyphicon-home"> Contratos </span>  </a>
      <ul> 
         <li><a href="?controlador=Empresario&accion=insertar">Insertar </a></li>
        <li><a href="?controlador=Empresario&accion=mostrar">Mostrar Tabla </a></li>
        <li><a href="?controlador=Empresario&accion=actualizar">Modificar Datos</a></li>
        <li><a href="?controlador=Empresario&accion=delete">Eliminar</a></li>
      </ul>
    </li> 
 
    <li><a href="#"><span class="glyphicon glyphicon-modal-window"> Arriendos</span>  </a>
      <ul>
        <li><a href="?controlador=Empresariodos&accion=insertar">Insertar </a></li>
        <li><a href="?controlador=Empresariodos&accion=mostrar">Mostrar  Tabla </a></li>
        <li><a href="?controlador=Empresariodos&accion=delete">Eliminar</a></li>
      </ul>
    </li> 
 
     <li><a href="#"><span class="glyphicon glyphicon-calendar"> Inmuebles</span></a>
       <ul>
          <li><a href="?controlador=Empresariotres&accion=insertar">Insertar </a></li>
        <li><a href="?controlador=Empresariotres&accion=mostrar">Mostrar Tabla </a></li>
        <li><a href="?controlador=Empresariotres&accion=delete">Eliminar</a></li>
      </ul>
   </li> 

   <li><a href="#"><span class="glyphicon glyphicon-pencil"> Manejo de Contratos</span>  </a>
   <ul>
          <li><a href="?controlador=Empresariocuatro&accion=insertar">Insertar </a></li>
        <li><a href="?controlador=Empresariocuatro&accion=mostrar">Mostrar Tabla </a></li>
        <li><a href="?controlador=Empresariocuatro&accion=actualizar">Modificar Datos</a></li>
        <li><a href="?controlador=Empresariocuatro&accion=delete">Eliminar</a></li>
      </ul>
   </li> 
    
        </li>
        </ul>
        
 </ul>

    </center>
    </div>