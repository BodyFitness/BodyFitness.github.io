<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>

	<div class="navbar navbar-expand-lg bg-dark"> 
        <a class="navbar-brand">
            <img src="img/logo.png" alt="BODYFITNESS">
        </a>
        <ul class="navbar-nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link text-white" href="index.php">Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="#one">Serviços</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="time.php">Planos</a>
            </li>
    	    <li class="nav-item">
                <a class="nav-link text-white" href="serviços.php">GitHub</a>
            </li>
	    	
        </ul>
</div>

    <div class="mobile">
					<i id="Open" class="fa fa-bars"></i>
					<i id="Close" style="display: none;" class="fa fa-times" aria-hidden="true"></i>
					<ul>
						<li><a href="">Home</a></li>
						<li><a href="#Cursos">Cursos</a></li>
						<li><a href="#Sobre">Sobre</a></li>
						<li><a href="#Contato">Contato</a></li>
					</ul>	
    </div>
				

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