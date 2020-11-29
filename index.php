<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>BodyFitness</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/font-awesome.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<style>
		@media screen and (max-width: 768px)
		{
			.wallpaper
			{
				background-color: #1c1c1c;
				height: 50vh;
			}
			
		}
		nav.mobile li{
			font-weight: lighter;
			border-bottom: 1px solid #444;
			text-align: center;
			padding:8px 0;
		}

		nav.mobile a{
			display: block;
			text-decoration: none;
			color: #444;
		}

		nav.desktop{
			margin-top: 20px;
			float: right;
		}

		nav.desktop ul{
			list-style-type: none;
		}

		nav.desktop li{
			display: inline-block;
			margin:0 15px;
			font-size: 17px;
			font-weight: lighter;
		}

		nav.desktop a{
			color: white;
			text-decoration: none;
		}

		
	</style>
</head>
<body>


<?php include("navbar.php"); ?>

<section class="wallpaper" >
	<div class="walltext">
		<h3>SEJA <span class="text-warning">FORTE</span></h3>
		<br>
		<h3>TREINE CONOSCO</h3>
		<a class="btn btn-outline-warning" href="">Matricular</a>
	</div>
	<img id="wallImg" src="img/wall4.jpg" alt="Wallpaper">

</section>

<?php include("section_one.php");
	include("section_two.php");
	include("prices.php");
	include("footer.php");
?>
	
</section>


</body>
</html>