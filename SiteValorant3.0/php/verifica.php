<?php

$erro = false;

if(isset($_POST['username']) && strlen($_POST['username']) != 0 ) {
    $username = $_POST['username']; 
    
} else {
    print_r("<br>"."[ ERRO ] - Preencha corretamente o nome de usuário");
    $erro = true;
}

if(isset($_POST['nickname']) && strlen($_POST['nickname']) != 0) {
    $nickname = $_POST['nickname'];
          
} else {
    print_r("<br>"."[ ERRO ] - Preencha corretamente o nickname");
    $erro = true;
}

if(isset($_POST['idade']) && strlen($_POST['idade']) != 0) {
    $idade = $_POST['idade'];
          
} else {
    print_r("<br>"."[ ERRO ] - Preencha corretamente a idade");
    $erro = true;
}

if(isset($_POST['regiao']) && strlen($_POST['regiao']) != 0) {
    $regiao = $_POST['regiao'];
         
} else {
    print_r("<br>"."[ ERRO ] - Preencha corretamente a regiao");
    $erro = true;
}

if(isset($_POST['treinando']) && strlen($_POST['treinando']) != 0) {
    $treinando = $_POST['treinando'];
          
} else {
    print_r("<br>"."[ ERRO ] - Informe corretamente o tempo de trinamento");
    $erro = true;
}

if(isset($_POST['jogando']) && strlen($_POST['jogando']) != 0) {
    $jogando = $_POST['jogando'];
              
} else {
    print_r("<br>"."[ ERRO ] - Informe corretamente o tempo de jogatina");
    $erro = true;
}

if(isset($_POST['r1']) && strlen($_POST['r1']) != 0) {
    $estilo = $_POST['r1'];
            
} else {
    print_r("<br>"."[ ERRO ] - Estilo de jogo do jogador não informado");
    $erro = true;
}

if(isset($_POST['r2']) && strlen($_POST['r2']) != 0) {
    $rank = $_POST['r2'];   
    
} else {
    print_r("<br>"."[ ERRO ] - Estilo de jogo do jogador não informado");
    $erro = true;
}

if($erro) {
    print_r("<br>"."FALHA! TENTE NOVAMENTE");

} else {
    include("conexao.php");

    $sql1 = "INSERT INTO dados_user VALUES";
    $sql1 .= "('','$username', '$nickname', '$idade', '$regiao')";

    if($conexao->query($sql1) === TRUE){
        echo "<br>"."Cadastro de dados de usuário com sucesso";
    }else erro();

    $sql2 = "INSERT INTO dados_player VALUES";
    $sql2 .= "('','$treinando', '$jogando', '$estilo', '$rank')";

    if($conexao->query($sql2) === TRUE){
        echo "<br>"."Cadastro de dados de jogador com sucesso";
    }else erro();

    function erro() {
        echo "<br>"."Houve um erro ao cadastrar as informações";
    } 
}


$conexao->close();

?>