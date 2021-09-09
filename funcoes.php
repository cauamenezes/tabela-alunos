<?php

//função que determina se o aluno foi aprovado ou reprovado
function situacaoDoAluno(array &$turma)
{
    foreach ($turma as $chave => $aluno) {
        if ($aluno["nota"] >= 50) {
            $turma[$chave]["situacao"] = "Aprovado(a)";
        } else {
            $turma[$chave]["situacao"] = "Reprovado(a)";
        }
    }
    return;
}

// função que calcula a média das notas da turma
function calcularMedia(array $turma)
{
    $soma = 0;
    foreach ($turma as $aluno) {
        $soma = $soma + $aluno["nota"];
    }

    $media = $soma / count($turma);

    return $media;
}

// função que retorna o nome do aluno com a maior nota
function alunoComMaiorNota(array $turma)
{
    $melhorAluno = null;
    foreach ($turma as $aluno) {
        if ($melhorAluno == null) {
            $melhorAluno = $aluno;
        } else if ($aluno["nota"] > $melhorAluno["nota"]) {
            $melhorAluno = $aluno;
        }
    }

    return $melhorAluno;
}

// função que altera a nota de um aluno específico
//&, passagem de parâmetro por referência
function alterarNotaAluno(array &$turma, $nome, $novaNota)
{
    foreach ($turma as $chave => $aluno) {
        if ($aluno["nome"] == $nome) {
            $turma[$chave]["nota"] = $novaNota;
        }
    }
    return;
}
