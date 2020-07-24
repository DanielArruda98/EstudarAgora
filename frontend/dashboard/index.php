<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS Local -->
    <link rel="stylesheet" href="../css/questao.css">

    <!-- CSS Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Estudando Agora</title>
</head>

<body>
    <div class="container">
        <!-- Título da Página -->
        <div class="row mt-4">
            <div class="col-sm-10 float-left">
                <h2>Banco de Questões</h2>
            </div>

            <div class="col-sm-2 text-right float-right">
                <button class="btn btn-info">
                    +Questões
                </button>
            </div>
        </div>
        <hr>

        <!-- Filtros -->
        <div class="row">
            <div class="col-sm-3 mx-auto mt-4">
                <div class="form-group">
                    <label for="id_disciplina">Disciplina</label>
                    <select name="disciplina" id="id_disciplina" class="form-control"></select>
                </div>

                <div class="form-group">
                    <label for="id_conteudo">Conteúdo</label>
                    <select name="conteudo" id="id_conteudo" class="form-control">
                        <option>Selecione uma disciplina</option>
                    </select>
                </div>
            </div>

            <div class="col-sm-9 mx-auto mt-4" id="show-questions">
            </div>
        </div>
    </div>

    <div id="teste">
    </div>
</body>

<script src="../js/globais.js"></script>
<script src="../js/filtros.js"></script>

</html>