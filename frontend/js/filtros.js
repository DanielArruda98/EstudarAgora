// VALORES DO SELECT DISCIPLINA
var dados = {
    listar: true
}

$.post('../../backend/controllers/ControllerDisciplina.php', dados, function (retorna) {
    var show = select(["id_disciplina", "nome"], retorna)
    $('#id_disciplina').html(show)
})

// VALORES DO SELECT CONTEUDO
$('#id_disciplina').change(function () {
    var id_disciplina = $(this).val()

    var dados = {
        listar: id_disciplina
    }

    $.post('../../backend/controllers/ControllerConteudo.php', dados, function (retorna) {
        var show = select(["id_conteudo", "nome"], retorna)
        $('#id_conteudo').html(show)
    })
})

// QUESTÕES
$('#id_conteudo').change(function () {
    var id_conteudo = $(this).val()

    var dados = {
        listar: id_conteudo
    }

    $.post('../../backend/controllers/ControllerQuestao.php', dados, function (retorna) {
        var show = ""

        $.each(JSON.parse(retorna), (idx, questao) => {
            var cabecalho = ""
            var exb_instituicao = ""
            var instituicao = ""

            if (questao['cabecalho'] != "vazio")
                var cabecalho = questao['cabecalho']

            if (questao['nome'] != "Nenhuma")
                instituicao += questao['nome'] + " "

            if (questao['ano'] != 0)
                instituicao += questao['ano'] + " "

            if (questao['nome'] != "Nenhuma" || questao['ano'] != 0)
                exb_instituicao += "( " + instituicao + ")"

            show += question(exb_instituicao, cabecalho, questao['id_questao'], questao['pergunta'], questao['itens'], questao['item_correto'], questao['textos'])
        })

        $('#show-questions').html(show)
    })
})

// VER RESPOSTA CERTA
function correctAnswer(objeto) {
    id_original = $(objeto).attr('id')

    var id_questao = id_original.replace('view_answer_', '')
    var resposta = $(`#question_answer_${id_questao}`).val()

    if($(`#${id_original}`).val() == 'off') {
        $(`#answer_option_${id_questao}_${resposta}`).addClass('certa');    
        $(`#${id_original}`).html('<i class="fas fa-eye-slash"></i>');
        $(`#${id_original}`).val('on')
    } else {
        $(`#answer_option_${id_questao}_${resposta}`).removeClass('certa');
        $(`#${id_original}`).html('<i class="fas fa-eye"></i>');
        $(`#${id_original}`).val('off')
    }
}