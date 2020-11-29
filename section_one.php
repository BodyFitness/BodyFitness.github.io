<head>
    <style>
        #one{
            background-color: #1C1C1C;
            justify-content: center;
        }

        #one h4, #two h4,  #banner-2 h4{
            text-align: center;
            color: #DAA520;
            padding: 30px;
            text-transform: uppercase;
        }



        .info img
        {
            width: 100px;
            position: relative;
            left: 30%;
        }

        .info h4
        {
            text-align: left;
        }

        .secao1 h1
        {
            color: white;
        }

        .secao1 p
        {
            font-size: 14px;
            font-family: "Muli", sans-serif;
            color: #a9a9a9;
            font-weight: 400;
            line-height: 24px;
            margin: 0 0 15px 0;
        }

        .icons{
            display: flex;
            margin: auto;
            justify-content: center;
            flex-wrap: wrap;
            padding: 70px;
            text-align: center;
        }

        .icons .img img{
            height: 120px;
            margin: 40px;
        }
    </style>
</head>
<body>

    <section class="secao1" id="one">
        <div id="Servicos" class="container">
            <div class="row">
                <h4>Porquê escolher a BodyFitness?</h4>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <div class="info">
                        <img id="barra" onmouseover="HoverImg(id)" onmouseout="LeaveImg(id)" src="img/icon-barra.png" alt="Barra">
                        <h4>Personal Trainer</h4>
                        <p>Desfrute de nosso acompanhamento pessoal para que
                            não se sinta sozinho ou em duvida em como realizar
                            determina atividade. Conte com nosso sistema de 
                            personal trainer.
                        </p>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="info">
                        <img id="copo" onmouseover="HoverImg(id)" onmouseout="LeaveImg(id)" src="img/icon-copo.png" alt="Copo">
                        <h4>Plano Nutricional</h4>
                        <p>Com nosso plano nutricional você tem um desenvolvimento
                            maior com uma dieta focada de acordo com as suas necessidades
                            possuimos planos nutricionais para todos, incluindo plano para
                            Vegetarianos, veganos e crudi.
                
                        </p>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="info">
                        <img id="heart" onmouseover="HoverImg(id)" onmouseout="LeaveImg(id)" src="img/icon-heart.png" alt="Coração">
                        <h4>Consulta Médica</h4>
                        <p>Com nosso plano medico você terá um acompanhamento
                            especializado, focado no seu desenvolvimento corporal
                            de forma saúdavel para que mantenha sempre um corpo e
                            estilo de vida saúdavel.
                        </p>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="info">
                        <img id="esteira" onmouseover="HoverImg(id)" onmouseout="LeaveImg(id)" src="img/icon-esteira.png" alt="esteira">
                        <h4>Equipamentos Modernos</h4>
                        <p>Na BodyFitness possuímos os melhores e mais modernos
                            equipamentos, para que você possa obter o melhor
                            desempenho possível.
                        </p>
                    </div>
                </div>

            </div>
        </div>
            

            

    </section>
    <script src="hoverScript.js"></script>
