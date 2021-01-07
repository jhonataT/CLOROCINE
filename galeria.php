<?php include_once "cabecalho.php" ?>

<?php 
    $movie1 = [
        "title"=>'Vingadores: Ultimato',
        "note"=>9.7,
        "synopsis"=>'Após os eventos devastadores de "Vingadores: Guerra Infinita", o universo está em ruínas devido aos esforços do Titã Louco, Thanos...',
        "image"=>"http://image.tmdb.org/t/p/w300/q6725aR8Zs4IwGMXzZT8aC8lh41.jpg"
    ];
    $movie2 = [
        "title"=>'Vingadores',
        "note"=>9.7,
        "synopsis"=>'Após os eventos devastadores de "Vingadores: Guerra Infinita", o universo está em ruínas devido aos esforços do Titã Louco, Thanos...',
        "image"=>"http://image.tmdb.org/t/p/w300/q6725aR8Zs4IwGMXzZT8aC8lh41.jpg"
    ];
    $movie3 = [
        "title"=>'Ultimato',
        "note"=>9.7,
        "synopsis"=>'Após os eventos devastadores de "Vingadores: Guerra Infinita", o universo está em ruínas devido aos esforços do Titã Louco, Thanos...',
        "image"=>"http://image.tmdb.org/t/p/w300/q6725aR8Zs4IwGMXzZT8aC8lh41.jpg"
    ];
    $movies = [
        $movie1,
        $movie2,
        $movie3,
    ];

?>

<body>
    <nav class="nav-extended purple lighten-3">
        <div class="nav-wrapper">
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li class="active"><a href="Galeria.php">Galeria</a></li>
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

    <ul class="sidenav" id="mobile-demo">
        <li><a href="sass.html">Sass</a></li>
        <li><a href="badges.html">Components</a></li>
        <li><a href="collapsible.html">JavaScript</a></li>
    </ul>

    <div class="row">

        <?php for($i = 0; $i < count($movies); $i++){
            $movie = $movies[$i];
        ?>

        <div class="col s3">
            <div class="card hoverable">
                <div class="card-image">
                    <img src="<?=$movie['image']?>">
                    <a class="btn-floating halfway-fab waves-effect waves-light red"><i
                            class="material-icons">favorite_border</i></a>
                </div>
                <div class="card-content">
                    <p class="valign-wrapper"><i class="material-icons amber-text">star</i><?=$movie["note"]?></p>
                    <span class="card-title"><?=$movie["title"]?></span>
                    <p><?=$movie["synopsis"]?></p>
                </div>
            </div>
        </div>

        <?php } ?>

    </div>


</body>

</html>