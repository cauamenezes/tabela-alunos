<?php

require("./alunos.php");
require("./funcoes.php");

//precisamos pegar a chave do componenente do vetor 
//para pegarmos um atributo específico
if (isset($_GET["novaNota"])) {
    $nome = $_GET["nomeAluno"];
    $nota = $_GET["novaNota"];

    alterarNotaAluno($alunos, $nome, $nota);
}

situacaoDoAluno($alunos);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="./scripts.js" defer></script>
    <title>Notas dos alunos</title>
</head>
<section>

    <body>
        <h1>Tabela de notas</h1>
        <table>
            <tr>
                <th>Nome</th>
                <th>Idade</th>
                <th>Nota</th>
                <th>Situação</th>
            </tr>

            <?php
            foreach ($alunos as $aluno) {
            ?>
                <tr onclick="showFormNota('<?= $aluno['nome'] ?>')">
                    <td><?php echo $aluno["nome"] ?></td>
                    <td><?php echo $aluno["idade"] ?></td>
                    <td><?php echo $aluno["nota"] ?></td>
                    <?php
                    if ($aluno["situacao"] == "Aprovado(a)") {
                    ?>
                        <td class="aprovado"><?php echo $aluno["situacao"] ?></td>
                    <?php
                    } else {
                    ?>
                        <td class="reprovado"><?php echo $aluno["situacao"] ?></td>
                    <?php
                    }
                    ?>
                </tr>
            <?php
            }
            ?>
        </table>
</section>

<div class="container-form-nota">
    <form>
        <input type="number" name="novaNota" placeholder="Digite a nova nota">
        <input type="hidden" id="nomeAluno" name="nomeAluno">
        <button>Alterar</button>
    </form>
</div>
</body>

</html>

teste