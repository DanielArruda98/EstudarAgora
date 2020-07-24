<?php

require_once "../classes/Disciplina.class.php";

$disciplina = new Disciplina();

if (isset($_POST['listar'])) {
    echo $disciplina->listar();
}