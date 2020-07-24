<?php

require_once "database/Conexao.class.php";

class Questao
{

    public function listarConteudo($id_conteudo)
    {

        $conexao = new Conexao();
        $connection = $conexao->conectar();

        try {
            $sql = "SELECT id_questao, cabecalho, instituicao.nome, ano, pergunta, resposta FROM questao
                    INNER JOIN instituicao ON instituicao.id_instituicao = questao.id_instituicao
                    WHERE questao.id_conteudo = :id_conteudo AND resposta != 'Questao incompleta' ORDER BY id_questao";

            $consulta = $connection->prepare($sql);

            $consulta->bindValue(':id_conteudo', $id_conteudo);

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