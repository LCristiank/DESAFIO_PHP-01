<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 01</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
        
    <h1> Resultado da Pesquisa</h1>
        <?php 
        
            if($_GET["number"] == null || $_GET["number"] == "")
            {
                echo <<< PESQUISA
                
                <div class="cont-result">
                    <p> Por favor volte e coloque um número existente</p>

                   <a href="javascript:history.go(-1)"> Volte Agora!</a>
                </div>

                PESQUISA;
            }
            else
            {
                $pesquisa = $_GET["number"];
                $sucessor = $pesquisa + 1;
                $antecessor = $pesquisa - 1;

                echo <<< PESQUISA
                
                <div class="cont-result">
                    <ul>
                        <li> O número pesquisado foi <strong>$pesquisa</strong> </li>
                        <li> E o número sucessor dele é <strong>$sucessor</strong> </li>
                        <li> Por final o antecessor da pesquisa é <strong>$antecessor</strong> </li>
                    </ul>

                <a href="javascript:history.go(-1)"> Volte aqui!</a>
                </div>

            PESQUISA;

            }
            
        ?>

</body>
</html>