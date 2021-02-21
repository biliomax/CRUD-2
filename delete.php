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
        <h1>Excluir Tarefa</h1>
        <hr>

        <?php
            // recebe valor da url
            $id_url = $_GET['id'];

            include_once 'conn.php';

            $sql = "SELECT * FROM tasks WHERE id = $id_url";
            #$sql = "SELECT * FROM tasks WHERE id = 1";

            $result = mysqli_query($conn, $sql);
        ?>

        <form method="POST" action="excluir.php"

        <?php

            while($row = mysqli_fetch_assoc($result)) { ?>
            
            <div class="row">
                <div class="form-group col-md-3">
                    <label for="exampleFormControlInput1">Título</label>
                    <input type="hidden" class="form-control" name="id" value=<?php echo $id_url ?> >
                    <input type="text" class="form-control" disabled name="titulo" value=<?php echo $row['title'] ?>>
                </div>

                <div class="form-group col-md-3">
                    <label for="exampleFormControlSelect1">Usuário</label>
                    <select class="form-control" disabled name="usuario" value=<?php echo $row['usuario'] ?>>
                        <option>1</option>
                        <option>2</option>
                    </select>
                </div>

                <div class="form-group col-md-3">
                    <label for="exampleFormControlInput1">Status</label>
                    <input type="text" class="form-control" disabled name="status" value=<?php echo $row['status'] ?>>
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-6">
                    <label for="exampleFormControlTextarea1">Descrição</label>
                    <textarea class="form-control" disabled name="descricao" rows="3"> <?php echo $row['description'] ?> </textarea>
                </div>
                <div class="form-group col-md-6">
                    <button class="btn btn-danger" type="submit">Excluir</button>
                </div>
            </div>

        <?php } ?>
            
        </form>
    </container>  

</body>
</html>