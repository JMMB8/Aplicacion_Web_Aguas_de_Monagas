<?php
include("conexion_datos.php");


?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" http-equiv="X-UA-Compatible" content="IE=edge,Chrome=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<link rel="icon" type="image/ico" href="images/ico/ico.jpg">

<meta
	content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"
	name="viewport">
	
<link href="css/estilosFormularioTablas.css" rel="stylesheet" type="text/css">
<!-- Bootstrap 3.3.6 -->
<link rel="stylesheet" href="css/bootstrap.min.css">

<!-- Theme style -->
<link rel="stylesheet" href="css/AdminLTE.min.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
<link rel="stylesheet" href="css/_all-skins.min.css">
<link rel="stylesheet" href="css/blue.css">
	
<link rel="stylesheet" href="css/mdb.min.css">
<link rel="stylesheet" href="css/pager.css">
<link rel="stylesheet" href="css/zben.css">


<script src="jquery/jquery-2.2.3.min.js"></script>

<script src="jquery/jquery.shCircleLoader.js"></script>
<script src="jquery/bootstrap.min.js"></script>
<script src="jquery/angular.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/zzsc.css" />
<script src="jquery/angular-cookies.min.js"></script>
<script src="jquery/angular-translate.min.js"></script>
<script
	src="jquery/angular-translate-storage-cookie.min.js"></script>
<script
	src="jquery/angular-translate-loader-static-files.min.js"></script>
<script
	src="jquery/angular-translate-loader-url.min.js"></script>
<script src="jquery/angular-sanitize.min.js"></script>
<script src="jquery/bootstrap-dialog.min.js"></script>
<script src="jquery/angular-local-storage.min.js"></script>
<script src="jquery/qrcode.js"></script>
<script src="jquery/angular-qrcode.js"></script>
<script src="jquery/tripledes.js"></script>
<script src="jquery/mode-ecb.js"></script>
<script src="jquery/tripledes.js"></script>
<script src="jquery/mode-ecb.js"></script>
<script src="jquery//pager.js"></script>
<script src="js/zben.js"></script>
<script src="js/login_controller.js"></script>
<script src="js/login_service.js"></script>

<script language="javascript">
 var scrollFunc=function(e){ 
  e=e || window.event; 
  if(e.wheelDelta && event.ctrlKey){//IE/Opera/Chrome 
   event.returnValue=false;
  }else if(e.detail){//Firefox 
   event.returnValue=false; 
  } 
 }  
 
  
 if(document.addEventListener){ 
 document.addEventListener('DOMMouseScroll',scrollFunc,false); 
 } 
 window.onmousewheel=document.onmousewheel=scrollFunc;//IE/Opera/Chrome/Safari 
  
</script>

	<style type="text/css">
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	font-family: Arial, Helvetica, sans-serif;
	overflow-x: hidden;
	overflow-y: hidden;
	padding-bottom: 100px;
}

.all {
	height: 768px;
	background-color: #FFF;
}

.left {
	
}

.right {
	
}

.top-2 {
	
}

top-2-1 {
	
}

.top-font {
	
}

.top-font-1 {
	
}

.banner {
	
}

.foot-1 {
	
}

.foot {
	
}
.foot-font {
	text-align: center;
}
 .back {
            bottom: 0px;
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            overflow: hidden;
        }
 .wrap {
            position: absolute;
            left: 0;
            top: 20%;
            width: 100%;
            text-align: center;
            
        }
.card {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid rgba(0,0,0,.125);
    border-radius: .25rem;
}

.pt-3, .py-3 {
    padding-top: 1rem!important;
}
.mb-3, .my-3 {
    margin-bottom: 1rem!important;
}
.mt-2, .my-2 {
    margin-top: .5rem!important;
}
.mb-3, .my-3 {
    margin-bottom: 1rem!important;
}

.mt-3, .my-3 {
    margin-top: 1rem!important;
}
.ml-4, .mx-4 {
    margin-left: 1.5rem!important;
}
.mr-4, .mx-4 {
    margin-right: 1.5rem!important;
}
.mt-1, .my-1 {
    margin-top: .25rem!important;
}
.card-body {
    -webkit-box-flex: 1;
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    padding: 1.25rem;
}
#loginBth {
    border: 0.05rem solid black;
    width: 65%;
    height: 65%;
    border-radius: 6px;
    /* padding-bottom: 1rem; */
    padding-bottom: 10px;
}
@media only screen and (max-width: 600px) {



    #loginBth{
        font-size: .6rem;
        width: 90%;

        /*border:  dashed black;*/
    }
    .md-form{
        margin-top: .5rem;
    }
    #fa-user, #fa-lock {
        font-size: 1.5rem;
    }


    #box-btn_session{
        padding-left: 5rem;
        padding-right: 0;
    }


}


/* Medium devices (landscape tablets, 768px and up) */
@media only screen and (min-width: 768px) and (max-width: 1024px) {

    .fa-user{
        font-size: .6rem;
    }
    #loginBth{
        font-size: .6rem;
        width: 90%;
        /*border:  dashed black; navbar navbar-static-to*/
    }
    .md-form{
        margin-top: .5rem;
    }
    #fa-user, #fa-lock {
        font-size: 1.2rem;
    }

}
</style>
</head>
<body ng-app="loginModule" ng-controller="loginCtrl as ctrl" ng-cloak class="ng-cloak" style="overflow:auto;">
	    
	  <header>
			<div style="margin: auto; max-height: 200px; overflow: hidden;" ng-include="html/maintop.html"></div>
			
	
		<nav class="navbar navbar-default navbar-static-top sys-color">
      <div class="container-fluid sys-color ">
       
 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
         <a href="#" class="navbar-brand" style="color: white;"><span style="" translate="AGUAS DE MONAGAS
"></span></a>
        
        <div id="navbar" class="navbar-collapse collapse" style="font-size: 18px">
          
          <ul class="nav navbar-nav navbar-right" style="text-align: center;">
            <li class="nav-item active"><a  class="nav-link" href="index.html"><span style="color:#fff;" translate="Inicio"></span></a></li>
            <li class="nav-item "><a class="nav-link"  href="quienesomos.html"><span style="color:#fff;" translate="Quienes somos"></span></a></li>
			<li class="nav-item "> <a class="nav-link" href="contactenos.html"><span style="color:#fff;" translate="Contactenos"></span></a></li>
			<li class="nav-item "><a class="nav-link" href="ubicanos.html"><span style="color:#fff;" translate="Ubiquenos"></span></a></li>
			<li class="nav-item "> <a class="nav-link" href="servicios.html"><span style="color:#fff;" translate="Nuestros servicios"></span></a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>	
		</header>
		
<!-- 		  <div id="logDiv" class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 loginDiv "  ng-include="'html/loginDiv.html'"></div> -->
	<section>  
	<div class="container-fluid">
				<div class="row mt-2">  
				<div class=" col-md-7 col-7 col-sm-7 col-lg-7 col-xl-7 margin-container animated bounceInUp">
                    <!--Carousel Wrapper-->
                    
			
<div id="myCarousel" class="carousel slide" data-ride="carousel">
	<!-- 轮播（Carousel）指标 -->
	<ol class="carousel-indicators" >
		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		<li data-target="#myCarousel" data-slide-to="1"></li>
		<li data-target="#myCarousel" data-slide-to="2"></li>
	</ol>   
	<!-- 轮播（Carousel）项目 -->
	<div class="carousel-inner" role="listbox" style="width: 95%;">
		<div class="item active">
			<img src="images/im3.jpg" height="400" width="790" alt="First slide">
		</div>
		<div class="item">
			<img src="images/im1.jpg" height="350" width="790" alt="Second slide">
		</div>
		<div class="item">
			<img src="images/im2.jpg" height="350" width="790" alt="Second slide">
		</div>
		<div class="item">
			<img src="images/im4.jpg" height="350" width="790" alt="Third slide">
		</div>
	</div>
	<!-- 轮播（Carousel）导航 -->
	<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left" style="color:#696969 " aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right" style="color:#696969 " aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
</div> 
			
			
		</div> 
		
		
		<div class="col-5 col-sm-5 col-md-5 col-lg-5 col-xl-5">
					
					<div class="col-sm-offset-1 col-sm-10 col-xs-offset-0 col-xs-12 form-gradient">

					    <!--Form with header-->
					    <div class="card animated bounceInDown">

					        <!--Header-->
					        <div class="header pt-1 sys-color ">
                                    <div class="row d-flex justify-content-center m-0">
                                        <h5 class="white-text mb-3 pt-3 font-weight-bold">INICIO  DE SESI&Oacute;N</h5>
                                    </div>
                                </div>
					        <!--Header-->
					        
					        <FORM name="formi" action="validando_datos.php" method="POST">
                          <p style="color:red;"><span ng-bind="ctrl.loginmessage"></span></p>
					        <div class="card-body mx-4 mt-1" >

					            <!--Body-->
					             <!-- Material input text -->
							 
			  <table border="0" align="center" width="100%">
			  <tr>
			  <td>
		       Cedula: 
			   </td>
			   </tr>
			   <tr>
			   <td> <input type='text' name='cedula' id='cedula' class='contact_form' required placeholder='Cedula'>
		       </td>
			   </tr>
		      <tr>
			  <td>
			  Fecha de Naci.:
			  </td>
			  </tr>
			  <tr>
			  <td>
		        <?php
				$dday="";
				$sdday="D&iacute;a";
				$dms="";
				$sdms="Mes";
				$dys="";
				$sdys="A&ntilde;o";
				include("modelo/fecha_usu.php");
				 ?>
		       </td>
			   </tr>
			   <tr>
			  <td>
			 Cargo:
			  </td>
			  </tr>
			  <tr>
			  <td>
		        <?php
				$IDENT_CARGO="";
				$DESC_CARGO="Seleccione";
				include("modelo/comboCargos.php");
				 ?>
		       </td>
			   </tr>
			   </table>
		    

					            <!--Grid row-->
					           
					            <div class="row">
					            	<div class="col-md-5 mt-3 text-center">
<a style="margin-top:7px" class="btn-floating btn-sm sys-color float-right waves-effect waves-light" title="
Para registrase:

  Debe tomar en cuenta ser personal de la empresa, una vez registrado,
  debera espera un lapso de 24 horas para que el administrador de sistema 
  evalue su solicitud y haga su posterior activaci&oacute;n.

"><i class="fa fa-question" ></i></a>
					            	</div>
					            	
					            	<div class="col-md-7 mt-3 text-center"   id="box-btn_session">
	<button type="submit" class="btn sys-color   btn-sm" id="loginBth" name="accesosKey" value="envios"><b>Consultar</b></button>
					            	</div>
					            </div>
					            <!--Grid row-->
					        </div>
 <div  id="shclDefault" style="display: none;width:40px; height:40px; margin:5px auto;"></div>
										    <!--/Form with header-->
</FORM>
					</div>
					            
		                      
					</div>
				</div>
		
		
		</div>
			
		</div> 

</section>
	

		
		
		
<footer class="fixed-bottom bg-dark">
				<div style="width: 100%; height: 46px;" class="sys-color">
					<div class="footerli col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex justify-content-center" style="line-height: 46px; overflow: hidden; margin: auto;">
					<p class="col-offset-4 col-offset-sm-4 col-offset-md-4 col-offset-lg-4 col-offset-xl-4 d-flex justify-content-center"></p>
					 <p style="font-size:20px; color:#fff; float:left; margin-right:5%; "><a style=" text-decoration:none;color:#FFFFFF"><span translate=""></span></a></p>
					 <p style="font-size:20px; color:#fff; float:left; margin-right:5%; "><a style=" text-decoration:none;color:#FFFFFF"><img src="images/point.png"  /></a></p>
		             <p style="font-size:20px; color:#fff; text-align:center; float:left; margin-right:5%; "><a style=" text-decoration:none;color:#FFFFFF"><span translate="Aguas de Monagas, C.A &copy; Derechos reservados"></span></a></p>
		             <p style="font-size:20px; color:#fff; text-align:center; float:left; margin-right:5%; "><a style=" text-decoration:none;color:#FFFFFF"><img src="images/point.png"/></a></p>
		             <p style="font-size:20px; color:#fff; text-align:center; float:left;"><a style=" text-decoration:none;color:#FFFFFF"><span translate=""></span></a></p>
					<p></p>
					</div>
				</div>
		    <div class="row bg-white">
		        <p class="text-center text-white blockquote-footer" style="padding: 5px"><!--<span translate="home.note"></span>--></p>
		    </div>
</footer>
	

		
		
	<script defer src="lib/slider.js"></script>
	<script type="text/javascript">
	
	$("#logDiv").css("display","block");
	
	function closediv(){
		 $('#maindiv').modal('hide');
		if(!isShowenterBt){
			$("#logDiv").css("display","block");
		}
	    
	}
	 $(function () {
	        $('#maindiv').modal('show');
	    });
	
	
		 $(function() {
			$('.flexslider').flexslider({
				animation : "slide",
				start : function(slider) {
					$('body').removeClass('loading');
				}
			});
		}); 
		
		function login()
		{
			$(".loginDiv").toggle();
		}
	</script>
</body>
</html>

