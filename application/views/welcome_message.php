<!DOCTYPE html>
<html lang="es" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>carucel</title>
		<script
		src="https://code.jquery.com/jquery-3.6.1.js"
		integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
		crossorigin="anonymous"></script>


		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	</head>
	<body>
		<div class="well text-center">
			<br>
			<h1>
				<b> ESCUELA 7MO UTC</b>

			</h1>

		</div>
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators ">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
		<li data-target="#carousel-example-generic" data-slide-to="3"></li>
  </ol>
<!-- carrucel -->
  <!-- Wrapper for slides -->
  <div class="carousel-inner " role="listbox">
    <div class="item active">
      <center><img class="" src="<?php echo base_url(); ?>/assets/images/utc.jpg" width="70%" alt="imagen1"></center>
      <div class="carousel-caption">
        <center><b style="color:#C0C0C0"><h1> UNIVERCIDAD TECNICA DE COTOPAXI</h1></b></center>
      </div>
    </div>
    <div class="item">
    <center>  <img src="<?php echo base_url(); ?>/assets/images/escuela2.jpg" width="60%" alt="imagen2"></center>
      <div class="carousel-caption">
				<center><b style="color:#C0C0C0"><h1> UNIVERCIDAD TECNICA DE COTOPAXI</h1></b></center>

      </div>
    </div>

		<div class="item">
			<center><img src="<?php echo base_url(); ?>/assets/images/utc2.jpg" width="600px%" alt="imagen3"></center>
			<div class="carousel-caption">
				<center><b style="color:#C0C0C0"><h1> UNIVERCIDAD TECNICA DE COTOPAXI</h1></b></center>
			</div>
		</div>

		<div class="item">
			<center><img src="<?php echo base_url(); ?>/assets/images/escuela4.jpg"width="58%" alt="imagen4"></center>
			<div class="carousel-caption">
				<center><b style="color:#FFFFFF "><h1> <big> UNIVERCIDAD TECNICA DE COTOPAXI </big> </h1></b></center>
			</div>
		</div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
 </body>
</html>
