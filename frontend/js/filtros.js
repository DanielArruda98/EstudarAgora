// VALORES DO SELECT DISCIPLINA
var dados = { listar: true }

$.post('../../backend/controllers/ControllerDisciplina.php', dados, function (retorna) {
    var show = select(["id_disciplina", "nome"], retorna); 
    $('#id_disciplina').html(show);   
});

// VALORES DO SELECT CONTEUDO
$('#id_disciplina').change( function() {
    var id_disciplina = $(this).val()

    var dados = { listar: id_disciplina }

    $.post('../../backend/controllers/ControllerConteudo.php', dados, function (retorna) {
        var show = select(["id_conteudo", "nome"], retorna);
        $('#id_conteudo').html(show);  
    });
});

// QUESTÕES
$('#id_conteudo').change( function() {
    var id_conteudo = $(this).val()

    var dados = { listar: id_conteudo }

    $.post('../../backend/controllers/ControllerQuestao.php', dados, function (retorna) {
        var show = "";
        
        $.each(JSON.parse(retorna), (idx, questao) => {
            var cabecalho = "";
            var exb_instituicao = "";
            var instituicao = "";

            if(questao['cabecalho'] != "vazio")
                var cabecalho = questao['cabecalho'];

            if(questao['nome'] != "Nenhuma")
                instituicao += questao['nome']+" ";

            if(questao['ano'] != 0)
                instituicao += questao['ano']+" ";

            if(questao['nome'] != "Nenhuma" || questao['ano'] != 0)
                exb_instituicao += "( "+instituicao+")";

            show += question(exb_instituicao, cabecalho, questao['pergunta'], questao['itens'], questao['item_correto'], questao['textos']);
        })

        $('#show-questions').html(show);
    });
});