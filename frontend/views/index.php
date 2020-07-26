<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- LOCAL CSS -->
    <link rel="stylesheet" href="../css/questao.css">

    <!-- EXTERNAL IMPORTS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/d8e7de4cf3.js" crossorigin="anonymous"></script>

    <title>Estudar Agora</title>
</head>

<body>
    <div class="container">
        <!-- Título da Página -->
        <div class="row mt-4">
            <div class="col-sm-10 float-left">
                <h2>Banco de Questões</h2>
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