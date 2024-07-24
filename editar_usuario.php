<!DOCTYPE html>!
<?php
    $sql = "SELECT * FROM usuarios WHERE id=".$_REQUEST["id"];

    $res = $conn->query($sql);
    $row = $res->fatch_object();

?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Novo Usuario</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" >
  </head>

    <form action="salvar_usuario.php" method="POST" class="container">
        <input type="hidden" name="editar" value="cadastra ">
        <input type="hidden" name="id" value="<?php print $row->id;  ?> ">
        <h1>Novo Usuario</h1>
            <div class="mb-3">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" value="<?php print $row->nome; ?>"  class="form-control">
            </div>
            <div class="mb-3">
                <label for="email">Email:</label>
                <input type="email" name="email" value="<?php print $row->email; ?>"  class="form-control">
            </div>
            <div class="mb-3">
                <label for="senha">Senha:</label>
                <input type="password" name="senha"  class="form-control" required >
            </div>

            <div class="mb-3">
                <label for="senha">Data Nacismento:</label>
                <input type="date" name="data_nasc" value="<?php print $row->data_nasc; ?>"  class="form-control">
            </div>
            <div class="mb-3">
            <button type="submit" class="btn btn-primary">CADASTRAR</button>
            </div>
    </form>

</html>