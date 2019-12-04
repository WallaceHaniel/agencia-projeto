<?php

$servicos = [
    ["imagem"=>"img/template_site.png", "titulo"=>"Criar um site", "descrição"=>"Descrição do serviço 1"],
    ["imagem"=>"img/loja virtual.png" , "titulo"=>"Criar uma Loja", "descrição"=>"Descrição do serviço 2"],
    ["imagem"=>"img/blog.jpg", "titulo"=>"Criar um Blog", "descrição"=>"Descrição do serviço 3"]

];

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-light bg-light">
            <a class="navbar-brand" href="#">
            <img src="/img/flooop.png" width="30" alt="">
            </a>
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Serviços</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Sobre nós</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Contato</a>
                </li>
            </ul>   
        </nav>
    </header>
    <section id="servico" class="container mt-5">
        <div class="row">

        <?php foreach($servicos as $servico){ ?>

            <div class="col-4">
                <div class="card">
                    <img src="<?php echo $servico['imagem'];?>" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">
                          <?php echo $servico ["titulo"]; ?>
                      </h5>
                      <p class="card-text">
                          <?php echo $servico ["descrição"];?>
                      </p>
                      <a href="#" class="btn btn-primary">Saiba mais ...</a>
                    </div>
                </div>
            </div>
        <?php } ?>
        </div>
    </section>
    <section id="sobre" class="container mt-5">
        <div class="row">
            <div class="col-6">
                <img src="img/sobre-nos.svg" class="img-fluid"/>
            </div>
            <div class="col-6 d-flex justify-content-center flex-column">
                <h1>Sobre nós</h1>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aliquam, culpa?
                    Possimus, sequi atque ut sint magni ex expedita nulla deleniti ipsam iusto
                    facere mollitia, asperiores quos eaque recusandae inventore earum!
                </p>
            </div>
        </div>

    </section>
</body>


</html>