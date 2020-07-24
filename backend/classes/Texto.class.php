<?php

require_once "database/Conexao.class.php";

class Texto
{

    public function listarQuestao($id_questao)
    {

        $conexao = new Conexao();
        $connection = $conexao->conectar();

        try {
            $sql = "SELECT * FROM texto WHERE id_questao = :id_questao";

            $consulta = $connection->prepare($sql);

            $consulta->bindValue(':id_questao', $id_questao);

            $consulta->execute();

            $vl = $consulta->rowCount();

            if ($vl > 0) {
                return $consulta->fetchAll();
            }
        } catch (PDOException $e) {
            echo "Erro de listar disciplina: " . $e->getMessage();
        } catch (Exception $e) {
            echo "Erro: " . $e->getMessage();
        }
    }
}