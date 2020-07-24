<?php

require_once "../classes/Conteudo.class.php";

$conteudo = new Conteudo();

if (isset($_POST['listar'])) {
    $id_disciplina = isset($_POST['listar']) ? $_POST['listar'] : 0; 

    echo $conteudo->consultarDisciplinas($id_disciplina);
}