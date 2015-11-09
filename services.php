<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Rocket Bootstarp Website Template | Services :: w3layouts</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900' rel='stylesheet' type='text/css'>
<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
		    <script type="text/javascript">
			    $(document).ready(function () {
			        $('#horizontalTab').easyResponsiveTabs({
			            type: 'default', //Types: default, vertical, accordion           
			            width: 'auto', //auto or any width like 600px
			            fit: true   // 100% fit in a container
			        });
			    });
			   </script>	
</head>
<body>
   <!----- start-header---->
  <div class="wrapper">
   <!----start-header---->
		 <div class="header">
	       <div class="container header_top">
				<div class="logo">
                                    <a href="index.php"><img src="images/logo-test.png" width="80" height="55" alt=""></a>
				</div>
		  		<div class="menu">
					<a class="toggleMenu" href="#"><img src="images/nav_icon.png" alt="" /> </a>
					<ul class="nav" id="nav">
                                            <li><a href="index.php">Inicio</a></li>
                                            <li><a href="about.php">Informacion</a></li>
                                            <li class="current"><a href="services.php">Test</a></li>
                                            <li><a href="portfolio.php">Carreras</a></li>
                                            <li><a href="contact.php">Contact</a></li>								
					  <div class="clearfix"></div>
					</ul>
					<script type="text/javascript" src="js/responsive-nav.js"></script>
				</div>							
	  			<div class="clearfix"> </div>
			    <!----//End-top-nav---->
			 </div>
		</div>
	<!----- //End-header---->
     <div class="container banner">
	 	<section class="title-section">
		   <h1 class="title-header">
		   Test </h1>
                    <ul class="breadcrumb breadcrumb__t"><li><a href="index.php">Inicio</a></li><li class="active">Respuesta</li></ul>  
		</section>
	 </div>
	 <div class="main">
	 	<div class='container content_top'>
	 		<div class="row">
                            <div class="col-sm-12">
                                <center> <h1> TEST DE ORIENTACION VOCACIONAL </h1>  </center>
                            </div>
                          </div>
	 	</div>
	 <div class="container content_bottom"></div>    
         <div class='container content_top'>
	 		<div class="row">
                            <div class="col-sm-12">
                                <center> <h1> CONCEPTO </h1>  </center>
                            </div>
                          </div>
	 	</div>
     </div>
                 <div class='container content_top'>
	 		<div class="row">
                            <div class="col-sm-12">
                                <center>
                                <br>
                                <table border="1">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Preguntas</th>
                                            <th colspan="6">Alternativa</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        include 'modelo/conexion.php';
                                        $sql = mysqli_query($link,"select * from preguntas ");
                                        $count = 1;
                                        while ($pregunta = mysqli_fetch_array($sql)):
                                        ?>
                                        <tr>
                                            <td><?php echo $count ?></td>
                                            <td><?php echo $pregunta['pregunta']; ?></td>
                                            <td><?php echo $pregunta['alternativa1']; ?><br><a href="javascript:;" onclick="elegir('1');"><input type="radio" name="x"/></a></td>
                                            <td><?php echo $pregunta['alternativa2']; ?><br><a href="javascript:;" onclick="elegir('2');"><input type="radio" name="x"/></a></td>
                                            <td><?php echo $pregunta['alternativa3']; ?> <br><a href="javascript:;" onclick="elegir('3');"><input type="radio" name="x"/></a></td>
                                            <td><?php echo $pregunta['alternativa4']; ?> <br><a href="javascript:;" onclick="elegir('4');"><input type="radio" name="x"/></a></td>
                                            <td><?php echo $pregunta['alternativa5']; ?> <br><a href="javascript:;" onclick="elegir('5');"><input type="radio" name="x"/></a></td>
                                            <td><?php echo $pregunta['alternativa6']; ?> <br><a href="javascript:;" onclick="elegir('6');"><input type="radio" name="x"/></a></td>                                           
                                        </tr>
                                        <?php $count++; endwhile;?>
                                        <tr>
                                            <td>Calificación <a href="javascript:;"
    onclick="evaluar($('#preg1').val(),)"></a></td>
                                            <td><?php echo "dato"?></td>
                                        </tr>
                                    </tbody>
                                </table>
                    </center>
                            </div>
                          </div>
	 	</div>
        <div class="container content_bottom"></div> 
    <!-- </div> -->
       
        
        
     <div class="container footer">
      <div class="footer_bottom">
            <marquee> <div class="copy">
		    <p>Derecho Reservado por: <a> Elar , Gesenia, Natalia</a></p>
                </div></marquee>
		  <ul class="social">
			<li><a href=""> <i class="fb"> </i> </a></li>
			<li><a href=""><i class="tw"> </i> </a></li>
		  </ul>
		  <div class="clearfix"> </div>
     	</div>
     </div>
 </div>	
</body>
</html>		