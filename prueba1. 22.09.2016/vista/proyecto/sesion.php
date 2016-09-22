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
            <li class="active"><a href="?controlador=proyecto&accion=sesion">Iniciar Sesion </a></li>
        </ul>
</nav>
    <div id="wrapper">

     
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                
                <li>
                    <a href="#"></a>
                </li>
                 <li>
                    <a href="?controlador=stock&accion=index"><span class="glyphicon glyphicon-home"></span>     Inicio</a>
                </li>
                <li>
                    <a href="?controlador=proyecto&accion=mision"><span class="glyphicon glyphicon-folder-close"></span>  Mision</a>
                </li>
                <li>
                    <a href="?controlador=proyecto&accion=vision"><span class="glyphicon glyphicon-eye-open"></span>  Vision</a>
                </li>
                <li>
                    <a href="?controlador=proyecto&accion=objetivos"><span class="glyphicon glyphicon-certificate"></span>  Objetivos</a>
                </li>
               
                <li>
                    <a href="?controlador=proyecto&accion=conocenos"><span class="glyphicon glyphicon-comment"></span>    Conocenos </a>
                </li>
               
            </ul>
        </div>

        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1></h1>
                        <p></p>
                        <p> <code></code>.</p>
                   
                    </div>
                </div>
            </div>
        </div>
      

    </div>
	<br>
	<br>
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<div class="panel panel-info">
				<div class="panel-heading">
					<center>Iniciar Sesion</center>
				</div>
				<div class="panel-body">
				<form method="post" action="?controlador=proyecto&accion=logeo">
					<div class="input-group">
						<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
						<input type="text" name="usuario" class="form-control" placeholder="Ingrese su usuario">
					</div>
					<br>
					<div class="input-group">
						<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
						<input type="password" name="password" class="form-control" placeholder="Ingrese su contraseña">
					</div>
					<hr>
					<button class="btn btn-info btn-block"> Iniciar Sesion</button>
					</form>
				</div>
			</div>
		</div>
	</div>