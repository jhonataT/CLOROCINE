<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <title>Clorocine</title>
</head>

<body>
    <nav class="nav-extended purple lighten-3">
        <div class="nav-wrapper">
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="Galeria.php">Galeria</a></li>
                <li><a href="Cadastro.php">Cadastrar</a></li>
            </ul>
        </div>
        <div class="nav-header center">
            <h1 class="">CLOROCINE</h1>
        </div>
        <div class="nav-content">
            <ul class="tabs tabs-transparent purple darken-1">
                <li class="tab"><a class="active" href="#test1">Todos</a></li>
                <li class="tab"><a href="#test2">Assistidos</a></li>
                <li class="tab"><a href="#test3">Favoritos</a></li>
            </ul>
        </div>
    </nav>

    <div class="row">
        <div class="col s6 offset-s3">
            <div class="card">
                <div class="card-content">
                    <span class="card-title">Cadastrar filme</span>

                    <div class="row">
                        <div class="input-field col s12">
                            <input id="title" type="text" class="validate">
                            <label for="title">Título do filme</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <textarea id="textarea2" class="materialize-textarea" data-length="120"></textarea>
                            <label for="textarea2">Textarea</label>
                        </div>
                    </div>

                </div>
                <div class="card-action">
                    <a class="btn waves-effect waves-light grey" href="galeria.php">CANCELAR</a>
                    <a href="#" class="waves-effect waves-light btn purple">CONFIRMAR</a>
                </div>
            </div>
        </div>
    </div>

</body>

</html>