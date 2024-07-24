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
                print "<th>Açôes</th>";
                print "</tr>";
            while($row = $res->fetch_object()){
                print "<tr>";
                print "<td>".$row->id."</td>";
                print "<td>".$row->nome."</td>";
                print "<td>".$row->email."</td>";
                print "<td>".$row->data_nasc."</td>";
                print "<td>
                        <button onclick=\" if(confirm('Tem certeza que deseja excluir')){location.href='?page=salvar&acao=excluir&id=".$row->id."';}else(false;)
    \" class='btn btn-succes'>Editar</button>
                        <button class='btn btn-danger'>Excluir</button>
                        </td>";
                print "</tr>";
            }
            print"</table>";
        }else{
            print "<p class='alert alert-danger'>Não encontrou resuldatos</p>";
        }
        
        ?>
  </body>
</html>