<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <style>
        section.parallax{
            position: relative;
            width: 100%;
            padding:40px 0;
            min-height: 300px;
            background-image: url('img/banner.jpg');
            background-size: cover;
            background-attachment: fixed;
            background-position: center;
        }

        section.parallax > .center{
            position: relative;
            
            z-index: 2;
            max-width: 960px;
            color: white;
        }

        section.parallax h2{
            text-align: center;
        }
        section.parallax p{
            margin-top: 15px;
        }

        .overlay-parallax{
            width: 100%;
            height: 100%;
            position: absolute;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: rgba(20,20,20,0.6);

        }

        .bg-home input[type="text"] {
		    font-family: lato;
		    color: #fff;
		    background: 0 0;
		    border: 0;
		    
        }
        
        @media (min-width: 960px)
        {
            section.parallax > .center
            {
                left: 15%;
            }
        }

    </style>
</head>
<body>

    <section class="parallax">
		<div class="overlay-parallax"></div>
		<div align="center" class="center bg-home">
            <div class="center">
                    <h2>Planeje & Desenvolva</h2>
                    <h2 class="text-white"> <img src="img/logo.png" alt="BodyFitness"></h2>
                    <h4>Uma academia feita para todos; Com Suplementos para Todos.</h4>
                    <p>Vegetarianos, Veganos, Crudi, Flex e Não-Veg</p>
            </div>
                    
            
			
				
		</div>
	</section>
        
    
    

    <div align="center" class="prices">
        <h2>Nossos Planos</h2>
        <div class="container">
            <div class="content">
            <h1>Padrão</h1>
            <div class="price">
                <h2>R$39,99</h2>
            </div>
            <div class="detail">
                <h4>Equipamentos ilimitados</h4>
                <h4>Auxiliadora Tecnica</h4>
                <h4>Aulas de Alimentação</h4>
                <h4>Sache de Suplemento</h4>
                <h4>Sem restrição de tempo</h4>
            </div>
            <a class="btn btn-outline-warning" href="#">Matricular</a>
        </div>
        
        <div class="content">
            <h1>6 meses</h1>
            <div class="price">
                <h2>R$119,99</h2>
            </div>
            <div class="detail">
                <h4>Equipamentos ilimitados</h4>
                <h4>Personal trainer</h4>
                <h4>Aulas de Alimentação</h4>
                <h4>Sache de Suplemento</h4>
                <h4>Sem restrição de tempo</h4>
            </div>
            <a class="btn btn-outline-warning" href="#">Matricular</a>
        </div>

        <div class="content">
            <h1>Anual</h1>
            <div class="price">
                <h2>R$399,99</h2>
            </div>
            <div class="detail">
                <h4>Equipamentos ilimitados</h4>
                <h4>Personal trainer</h4>
                <h4>Aulas de Alimentação</h4>
                <h4>Bonûs de 1 Suplemento Veg</h4>
                <h4>Sem restrição de tempo</h4>
            </div>
            <a class="btn btn-outline-warning" href="#">Matricular</a>
        </div>
    </div>

</div>
</body>
</html>