<?php

require_once "database/Conexao.class.php";

class Conteudo
{

    public function consultarDisciplinas($id_disciplina, $where = "")
    {

        $conexao = new Conexao();
        $connection = $conexao->conectar();

        try {
            if($id_disciplina > 0)
                $where = "AND conteudo.id_disciplina = :id_disciplina";

            $sql = "SELECT DISTINCT conteudo.id_conteudo, conteudo.nome FROM conteudo
                    INNER JOIN questao ON questao.id_conteudo = conteudo.id_conteudo 
                    WHERE questao.resposta != 'Questao incompleta' $where ORDER By conteudo.nome ASC;";

            $consulta = $connection->prepare($sql);

            if($id_disciplina > 0)
                $consulta->bindValue(':id_disciplina', $id_disciplina);

            $consulta->execute();

            $vl = $consulta->rowCount();

            if ($vl > 0) {
                $dados = $consulta->fetchAll();
                return json_encode($dados);
            }
        } catch (PDOException $e) {
            echo "Erro de listar conteúdo: " . $e->getMessage();
        } catch (Exception $e) {
            echo "Erro: " . $e->getMessage();
        }
    }
}
