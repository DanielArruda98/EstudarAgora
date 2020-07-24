<?php

require_once "database/Conexao.class.php";

class Item
{

    public function listarQuestao($id_questao)
    {

        $conexao = new Conexao();
        $connection = $conexao->conectar();

        try {
            $sql = "SELECT * FROM item WHERE id_questao = :id_questao ORDER BY RAND()";

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