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
			.walltext
			{
				left: 15%;
				margin-top: -50%;
				
			}

			.logo{
				margin-top: 20px;
				float: left;
				color: white;
				font-size: 23px;
				font-weight: bold;
				display: inline-block !important;
			}

			nav.mobile{
				display: block !important;
				float: right !important;
			}
			
			.desktop{
				display: none !important;
			}
			.w50{
				width: 100%;
			}
			
		}
		.logo
		{
			display: none;
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

		nav.mobile ul{
			display: none;
			z-index: 2;
			position: absolute;
			left: 0;
			width: 100%;
			top: 94px;
			background: white;
			list-style-type: none;
		
		}

		nav.mobile{
			display: none;
			float: right;
		}

		nav.mobile > i{
			position: relative;
			top: 23px;
			cursor: pointer;
			font-size: 25px;
			color: white;
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
		<a class="btn w-100 btn-outline-warning" href="">Matricular</a>
	</div>
	<img id="wallImg" src="img/wall4.jpg" alt="Wallpaper">

</section>

<?php include("section_one.php");
	include("section_two.php");
	include("prices.php");
	include("footer.php");
?>
	
</section>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script>
		$(function(){
			$('nav.mobile i').click(function(){
				var el = $(this).parent().find('ul');
				if(el.is(':visible') == false){
				 el.fadeIn();
				 document.getElementById('Open').style = "display: none;"
				 document.getElementById('Close').style = "display: solid;"
				}else{
					el.fadeOut();
					document.getElementById('Close').style = "display: none;"
					document.getElementById('Open').style = "display: solid;"
				}
			})
		})
	</script>

</body>
</html>