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
        <h1>Listagem de Tarefas</h1>

        <?php
            include_once 'conn.php';

            $sql = "SELECT * FROM tasks";
            $result = mysqli_query($conn, $sql);

            if($result){
                // pecorre resultados da pesquisa
                ?>
                <div class="col-md-6">
                <table class="table table-bordered table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">ID:</th>
                            <th scope="col">Título:</th>
                            <th scope="col">Descrição:</th>
                            <th scope="col">Status:</th>
                            <th scope="col">Ação:</th>
                            <th scope="col">Ação:</th>
                        </tr>
                    </thead>
                    <tbody>
                                        
                <?php
                while($row = mysqli_fetch_assoc($result)){ ?>

                    <tr>
                        <td><?php echo $row['id'] ?></td>
                        <td><?php echo $row['title'] ?></td>
                        <td><?php echo $row['description'] ?></td>
                        <td><?php echo $row['status'] ?></td>
                        <td> <a class="btn btn-primary mb-2" href="edite.php?id=<?php echo $row['id'] ?>">Editar</a></td>
                        <td> <a class="btn btn-danger mb-2" href="delete.php?id=<?php echo $row['id'] ?>">Excluir</a> <?php ?> </td>
                    </tr>
                        
                <?php } ?>
                <tbody>
            </table>
            </div>
            <?php }
        ?>
    </container>  

</body>
</html>