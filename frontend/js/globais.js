
// SELECTS DOS FILTROS
function select(input, valores) {
    var exibicao = "<option value='0'>Todas</option>"

    $.each(JSON.parse(valores), (idx, registro) => {
        exibicao += "<option value='" + registro[input[0]] + "'>" + registro[input[1]] + "</option>"
    })

    return exibicao
}

// CARD DE QUESTÃO
function question(instituicao, cabecalho, pergunta, item, item_certo, textos) {
    var letras = ["A", "B", "C", "D", "E", "F", "G", "H"];

    var exibicao = "<div class='questao'>"
            exibicao += "<div class='pergunta'>"
                if(instituicao != "") 
                    exibicao += "<p><span class='numero_questao'>"+instituicao+"</span>";
                
                if(cabecalho != "") 
                    exibicao += "<p>"+cabecalho+"</p>";
                
                exibicao += "<p>"+pergunta+"</p>";

                $.each(textos, (idx, texto) => {
                    exibicao += "<span class='numero_questao'>"+texto['titulo']+"</span>"
                    exibicao += "<p>"+texto['texto']+"</p>";
                    exibicao += "<span class='referencia_questao align-right'>"+texto['referencia']+"</span>";
                })

            exibicao += "</div>"

            exibicao += "<div class='alternativas'>"
                
                // Alternativas
                $.each(item, (idx, alternativa) => {
                    var detalhe_item = ""

                    if(idx == item_certo)
                        detalhe_item = "certa"

                    exibicao += "<div class='item "+detalhe_item+"'>"
                    exibicao += "<span class='numero_questao'>"+letras[idx]+")</span>"+alternativa+"</div>" 
                })

            exibicao += "</div>"
        exibicao += "</div>"
    
    return exibicao
}