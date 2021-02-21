<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criação de tarefa</title>
    <?php
        include_once 'head.php';
    ?>

</head>
<body>
    <container class="container">
        <h1>Criar tarefa</h1>
        <hr>

        <form method="POST" action="criar.php">

        <div class="row">
            <div class="form-group col-md-3">
                <label for="exampleFormControlInput1">Título</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="titulo">
            </div>

            <div class="form-group col-md-3">
                <label for="exampleFormControlSelect1">Usuário</label>
                <select class="form-control" id="exampleFormControlSelect1" name="usuario">
                    <option>0</option>
                    <option>1</option>
                </select>
            </div>

            <div class="form-group col-md-3">
                <label for="exampleFormControlInput1">Status</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="status">
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-6">
                <label for="exampleFormControlTextarea1">Descrição</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" name="descricao" rows="3"></textarea>
            </div>
        </div>

        <button class="btn btn-primary" type="submit">Enviar</button>

    
        </form>
    </container>  

</body>
</html>