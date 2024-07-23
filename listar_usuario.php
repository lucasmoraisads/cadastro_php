<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>cadastro</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" >
  </head>
  <body>
<h1>Listar Usuarios</h1>

    <?php
        $sql = "SELECT * FROM usuarios";


        $res = $con->queru($sql);

        $qtd = $res->num_rows;

        if($qtd > 0){
            print"/table class='table table-hover table-striped table-bordered'>";

                print "<tr>";
                print "<th>#</th>";
                print "<th>Nome</th>";
                print "<th>Email</th>";
                print "<th>Data Nascimento</th>";
                print "</tr>";
            while($row = $res->fetch_object()){
                print "<tr>";
                print "<td>".$row->id."</td>";
                print "<td>".$row->nome."</td>";
                print "<td>".$row->email."</td>";
                print "<td>".$row->data_nasc."</td>";
                print "</tr>";
            }
            print"</table>";
        }else{
            print "<p class='alert alert-danger'>Não encontrou resuldatos</p>";
        }
    
    ?>

  </body>
</html>