<?php 

include("conexao.php");

$consulta = "SELECT * FROM dados_user";
$con = $conexao->query($consulta) or die($conexao->error);

$consulta2 = "SELECT * FROM dados_player";
$con2 = $conexao->query($consulta2) or die($conexao->error);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DADOS</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>

    <h1 class="tit">DADOS REGISTRADOS NO BANCO</h1>
        <table class="tabela">

            <tr class="tit">
                <td>ID DO USUÁRIO</td>
                <td>NOME DE USUÁRIO</td>
                <td>NICKNAME</td>
                <td>IDADE</td>
                <td>REGIÃO</td>
            </tr>

            <?php while($dado = $con->fetch_array()) {?>
            <tr>
                <td>  <?php echo $dado["id_user"] ?>  </td>
                <td>  <?php echo $dado["username"]?>  </td>
                <td>  <?php echo $dado["nickname"]?>  </td>
                <td>  <?php echo $dado["idade"]?>  </td>
                <td>  <?php echo $dado["regiao"]?>  </td>
            </tr>
            <?php }?>
        </table>

        <table class="tabela">

            <tr class="tit">
                <td>ID DO USUÁRIO</td>
                <td>TEMPO TREINANDO</td>
                <td>TEMPO JOGANDO</td>
                <td>ESTILO DE JOGO</td>
                <td>RANKING</td>
            </tr>

            <?php while($dado2 = $con2->fetch_array()) {?>
            <tr>
                <td>  <?php echo $dado2["id_player"] ?>  </td>
                <td>  <?php echo $dado2["tempo_treinando"]?>  </td>
                <td>  <?php echo $dado2["tempo_jogando"]?>  </td>
                <td>  <?php echo $dado2["estilo"]?>  </td>
                <td>  <?php echo $dado2["rank"]?>  </td>
            </tr>
            <?php }?>

        </table>
</body>
</html>