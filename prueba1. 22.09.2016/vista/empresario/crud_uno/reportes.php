
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
  <center><H1> <P>Descargar Reportes </P></H1></center>
    <center>
<center>


  <div class="container">
  <br>
  <a href="#ventana" class="btn btn-primary" data-toggle="modal">Reportes</a>
  <div class="modal fade" id="ventana">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" arial-hide="true">&times;</button>
          <h4 class="modal-tittle"> Reportes</h4>

 <div class="c">
<ul class="menu" >
<center>
      </center>
    <li><a href="#"><span class="glyphicon glyphicon-user"> Usuarios </span>  </a>
      <ul> 
      
        <li><a href="?controlador=empresario&accion=Excel"> Excel</a></li>
        <li><a href="?controlador=empresario&accion=txt">   Txt</a></li>
        <li><a href="?controlador=empresario&accion=Word">  Word</a></li>
      </ul>
    </li> 
 
    <li><a href="#"><span class="glyphicon glyphicon-calendar"> Arriendos</span></a>
      <ul>
        <li><a href="?controlador=empresario&accion=Excel2"> Excel</a></li>
       
        <li><a href="?controlador=empresario&accion=txt2">  Txt</a></li>
        <li><a href="?controlador=empresario&accion=Word2"> Word</a></li>
      </ul>
    </li> 
 
     <li><a href="#"><span class="glyphicon glyphicon-briefcase"> Catalogos</span>  </a>

       <ul>
        <li><a href="?controlador=empresario&accion=Excel3">  Excel</a></li>

        <li><a href="?controlador=empresario&accion=txt3">    Txt</a></li>
        <li><a href="?controlador=empresario&accion=Word3">   Word</a></li>
      </ul>
   </li> 

   <li><a href="#"><span class="glyphicon glyphicon-thumbs-up"> Contratos</span>  </a>
   <ul>
        <li><a href="?controlador=empresario&accion=Excel4">  Excel</a></li>
     
        <li><a href="?controlador=empresario&accion=txt4">   Txt</a></li>
        <li><a href="?controlador=empresario&accion=Word4">  Word</a></li>
      </ul>
   </li> 


<li><a href="#"><span class="glyphicon glyphicon-bed"> Inmuebles</span></a>

 
      <ul>
        <li><a href="?controlador=empresario&accion=Excel5">  Excel</a></li>

        <li><a href="?controlador=empresario&accion=txt5">  Txt</a></li>
        <li><a href="?controlador=empresario&accion=Word5">   Word</a></li>
      </ul>
    </li> 
 
     <li><a href="#"><span class="glyphicon glyphicon-edit"> Manejo De Contratos</span>  </a>

       <ul>
        <li><a href="?controlador=empresario&accion=Excel6"> Excel</a></li>
   
        <li><a href="?controlador=empresario&accion=txt6">   Txt</a></li>
        <li><a href="?controlador=empresario&accion=Word6">    Word</a></li>
      </ul>
   </li> 

   <li><a href="#"><span class="glyphicon glyphicon-modal-window"> Sesion</span>  </a>
   <ul>
      <li><a href="?controlador=empresario&accion=Excel7">  Excel</a></li>
       
        <li><a href="?controlador=empresario&accion=txt7">    Txt</a></li>
        <li><a href="?controlador=empresario&accion=Word7">   Word</a></li>
   </li> 
    
        </li>
        </ul>
        
 </ul>

        </div>
      </div>
    </div>
  </div>
</div>    