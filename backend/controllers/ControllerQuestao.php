<?php

require_once "../classes/Questao.class.php";
require_once "../classes/Item.class.php";
require_once "../classes/Texto.class.php";

$questao = new Questao();
$item = new Item();
$texto = new Texto();

if (isset($_POST['listar'])) {
    $id_conteudo = isset($_POST['listar']) ? $_POST['listar'] : 0;

    $consulta = $questao->listarConteudo($id_conteudo);

    foreach($consulta as $key => $dados) {
        $dados_item = $item->listarQuestao($dados['id_questao']);
        $dados_texto = $texto->listarQuestao($dados['id_questao']);
        
        foreach($dados_item as $key_item => $itens) {
            $consulta[$key]['itens'][] = $itens['item'];

            if($itens['certo'] == 'sim')
                $consulta[$key]['item_correto'] = $key_item;
        }

        foreach($dados_texto as $textos) {
            $consulta[$key]['textos'][] = [
                "titulo" => $textos['titulo'] != "vazio" ? $textos['titulo'] : '', 
                "texto" => $textos['texto'] != "vazio" ? $textos['texto'] : '', 
                "referencia" => $textos['referencia'] != "vazio" ? $textos['referencia'] : ''
            ];
        }
    }

    echo json_encode($consulta);
}