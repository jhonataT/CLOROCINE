<?php include_once "cabecalho.php"?>

<body>
    <nav class="nav-extended purple lighten-3">
        <div class="nav-wrapper">
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="Galeria.php">Galeria</a></li>
                <li class="active"><a href="Cadastro.php">Cadastrar</a></li>
            </ul>
        </div>
        <div class="nav-header center">
            <h1 class="">CLOROCINE</h1>
        </div>
    </nav>

    <div class="row">
        <div class="col s6 offset-s3">
            <div class="card">
                <div class="card-content">
                    <span class="card-title">Cadastrar filme</span>

                    <!-- Title input -->
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="title" type="text" class="validate">
                            <label for="title">Título do filme</label>
                        </div>
                    </div>

                    <!-- synopsis input -->
                    <div class="row">
                        <form class="col s12">
                            <div class="row">
                                <div class="input-field col s12">
                                    <textarea id="synopsis" class="materialize-textarea" data-length="120"></textarea>
                                    <label for="synopsis">Sinopse</label>
                                </div>
                            </div>
                        </form>
                    </div>

                    <!-- Note input -->
                    <div class="row">
                        <div class="input-field col s4">
                            <input id="note" type="number" step="0.1" min="0" max="10" class="validate">
                            <label for="note">Nota</label>
                        </div>
                    </div>

                    <!-- File input  -->
                    <div class="file-field input-field">
                        <div class="btn purple lighten-2 ">
                            <span>Capa</span>
                            <input type="file">
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text">
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