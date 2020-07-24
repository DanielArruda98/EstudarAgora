<?php

require_once "database/Conexao.class.php";

class Disciplina
{

    public function listar()
    {

        $conexao = new Conexao();
        $connection = $conexao->conectar();

        try {
            $sql = "SELECT * FROM disciplina ORDER BY nome ASC;";

            $consulta = $connection->prepare($sql);

            $consulta->execute();

            $vl = $consulta->rowCount();

            if ($vl > 0) {
                $dados = $consulta->fetchAll();
                return json_encode($dados);
            }
        } catch (PDOException $e) {
            echo "Erro de listar disciplina: " . $e->getMessage();
        } catch (Exception $e) {
            echo "Erro: " . $e->getMessage();
        }
    }
}