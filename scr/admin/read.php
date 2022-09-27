<?php

    //Chamando todos os arquivos necessários 
    include_once("connect.php");
    $results = mysqli_query($conn, "SELECT * FROM usuarios");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/pi353socialdigital/scr/admin/css/style.css">
    <title>Social Digital - ADMIN</title>
</head>
<body>
    

<header>
    <div class="logo">
        <h1>Social Digital - ADMIN</h1>
       
    </div><!--logo-->
</header>

<section>

    <div class="container">
        <div class="card">
            <fieldset>
                <div class="top">
                    <h2>Usuários</h3>
                    <a href="/pi353socialdigital/scr/admin/screen.php">New</a>
                </div>
                <hr>
                 
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>CPF</th>
                            <th>RG</th>
                            <th>E-mail</th>
                            <th>Celular</th>
                            <th>Nascimento</th>
                            <th>Cadastro</th>
                            <th>Ações</th>
                        </tr>
                    </thead>

                    <?php while ($row = mysqli_fetch_array($results)) { ?>
                        <tr>
                            <td><?php echo $row['id_usuario']; ?></td>
                            <td><?php echo $row['nome_usuario']; ?></td>
                            <td><?php echo $row['cpf_usuario']; ?></td>
                            <td><?php echo $row['rg_usuario']; ?></td>
                            <td><?php echo $row['email_usuario']; ?></td>
                            <td><?php echo $row['celular_usuario']; ?></td>
                            <td><?php echo $row['dtNasc_usuario']; ?></td>
                            <td><?php echo $row['dtCad_usuario']; ?></td>
        
                            <div class="btn" > 
                                <td><a href="/pi353socialdigital/scr/admin/edit.php?id=$res[id]">Edit</a> 
                                <td><a href="/pi353socialdigital/scr/admin/delete.php?id=$res[id]">Delete</a></td>                      
                            </div><!--btn-->
                        </tr>
                    <?php } ?>
                </table>

            </fieldset>
        </div><!--card-->
    </div><!--container-->

</section>
<form>




</body>
</html>