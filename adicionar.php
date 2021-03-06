<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
    <style>
        
        .formulario {
            margin-top: 80px;
            margin-left: 60px;
            margin-right: 60px;
        }

        #button {
            margin-top : 20px;
            margin-left: 60px;
        }

    </style>

    <title>Add Livros</title>
</head>
<body>
    <div id="navbar">
            <nav class="navbar navbar-expand-lg navbar-light bg-secondary">
        <a class="navbar-brand" href="#">Biblioteca</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Adicionar Livros</a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" href="#">Remover Livros</a>
            </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
        </nav>
    </div>

    <div class="formulario">
        <form action="cadastro.php" method="post" id="form1">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputTitle">Titulo</label>
                    <input type="text" class="form-control" id="inputTitle" name="titulo" placeholder="Titulo">
                </div>

                <div class="form-group col-md-6">
                    <label for="inputGender">Genero</label>
                    <input type="text" class="form-control" id="inputGender" name="genero" placeholder="Genero">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-8">
                    <label for="inputAuthor">Autor</label>
                    <input type="text" class="form-control" id="inputAuthor" name="autor" placeholder="autor">
                </div>

                <div class="form-group col-md-4">
                    <label for="inputAge">Ano</label>
                    <input type="text" class="form-control" id="inputAge" name="ano" placeholder="age">
                </div>
            </div>
        </form>
    </div>

    <div id="button">
        <button type="submit" form="form1" class="btn btn-secondary">Cadastrar</button>
    </div>
    
</body>
</html>