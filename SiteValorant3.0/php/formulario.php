<?php
    if(isset($_POST['submit'])) {
        include("verifica.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link rel="stylesheet" href="./form.css">
</head>
<body>

    <form action="verifica.php" class="form-area" method="POST">

        <h2 class="title">REGISTRE-SE:</h2>

        <div class="area-texto">
            <h2>DADOS DO USUÁRIO</h2>
            <input class="i-text" type="text" name="username" id="" placeholder="NOME DE USUÁRIO">
            <input class="i-text" type="text" name="nickname" id="" placeholder="NICKNAME">
            <input class="i-text" type="text" name="idade" id="" placeholder="IDADE">
            <input class="i-text" type="text" name="regiao" id="" placeholder="REGIÃO">
        </div>
        
        <h2>DADOS DO JOGADOR</h2>

        <div class="area-texto">
            <p>Tempo em horas dedicado a treinar e a jogar diariamente:</p>
            <input class="i-text" type="text" name="treinando" id="" placeholder="TEMPO DE TREINO">
            <input class="i-text" type="text" name="jogando" id="" placeholder="TEMPO DE JOGO">
        </div>

        <div class="area-radio">
            
            <div class="radio-t">
                <h2>Estilo de jogo</h2>
                <span class="i-radio"> 
                    <input class="radio" type="radio" name="r1" value="SENTINELA" id=""> SENTINELA 
                </span>
                
                <span class="i-radio"> 
                    <input class="radio" type="radio" name="r1" value="CONTROLADOR" id=""> CONTROLADOR 
                </span>

                <span class="i-radio"> 
                    <input class="radio" type="radio" name="r1" value="DUELISTA" id=""> DUELISTA 
                </span>
                
                <span class="i-radio"> 
                    <input class="radio" type="radio" name="r1" value="INICIADOR" id=""> INICIADOR 
                </span>
            </div>
            
            <div class="radio-t">
                <h2>Elo Atual</h2>
                <span class="i-radio"> 
                    <input class="radio" type="radio" name="r2" value="FERRO - BRONZE" id=""> FERRO - BRONZE 
                </span>
                
                <span class="i-radio"> 
                    <input class="radio" type="radio" name="r2" value="PRATA - OURO" id=""> PRATA - OURO 
                </span>

                <span class="i-radio"> 
                    <input class="radio" type="radio" name="r2" value="PLATINA - DIAMANTE" id=""> PLATINA - DIAMANTE 
                </span>

                <span class="i-radio"> 
                    <input class="radio" type="radio" name="r2" value="IMORTAL - RADIANTE" id=""> IMORTAL - RADIANTE 
                </span>
            </div>
                 
        </div>

        <div class="b-submit">
            <button type="submit" class="submit">CADASTRAR</button>
        </div>

    </form>
</body>
</html>

