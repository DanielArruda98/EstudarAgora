// SELECTS DOS FILTROS
function select(input, valores) {
    var exibicao = "<option value='0'>Todas</option>"

    $.each(JSON.parse(valores), (idx, registro) => {
        exibicao += "<option value='" + registro[input[0]] + "'>" + registro[input[1]] + "</option>"
    })

    return exibicao
}

// CARD DE QUESTÃO
function question(instituicao, cabecalho, id_questao, pergunta, item, item_certo, textos) {
    var letras = ["A", "B", "C", "D", "E", "F", "G", "H"];

    var exibicao = `<div class='questao'>
                        <div class='pergunta'>
                            <div class='row'>
                                <div class='col-11'>`

                if(instituicao != "") 
                        exibicao += `<p><span class='numero_questao'>${instituicao}</span>`
                        
                    exibicao += `</div>

                                <div class='col-1 text-right view'>    
                                    <input type='hidden' value='${item_certo}' id='question_answer_${id_questao}'>

                                    <button class='btn btn-sm btn-success view_answer' onclick="correctAnswer(this)" id='view_answer_${id_questao}' value='off'>
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </div>
                            </div>`

                if(cabecalho != "") 
                    exibicao += `<p>${cabecalho}</p>`
                
                    exibicao += `<p>${pergunta}</p>`

                $.each(textos, (idx, texto) => {
                    exibicao += `
                        <span class='numero_questao'>${texto['titulo']}</span>
                        <p>${texto['texto']}</p>
                        <span class='referencia_questao align-right'>${texto['referencia']}</span>`
                })

                exibicao += `
                        </div>
                    <div class='alternativas'>`
                
                // Alternativas
                $.each(item, (idx, alternativa) => {
                    exibicao += `
                        <div class='item' id='answer_option_${id_questao}_${idx}'>
                        <span class='numero_questao'>${letras[idx]})</span>${alternativa}</div>` 
                })

            exibicao += `</div>
                    </div>`
    
    return exibicao
}