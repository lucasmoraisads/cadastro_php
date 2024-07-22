<!DOCTYPE html>!
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Novo Usuario</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" >
  </head>

    <form action="?page_salva.php" method="POST" class="container">
        <h1>Novo Usuario</h1>
            <div class="mb-3">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" placeholder="Nome Completo" class="form-control">
            </div>
            <div class="mb-3">
                <label for="email">Email:</label>
                <input type="email" name="email" placeholder="Email" class="form-control">
            </div>
            <div class="mb-3">
                <label for="senha">Senha:</label>
                <input type="password" name="senha" placeholder="Senha" class="form-control">
            </div>

            <div class="mb-3">
                <label for="senha">Data Nacismento:</label>
                <input type="date" name="data_nasc" class="form-control">
            </div>
            <div class="mb-3">
            <button type="submit" class="btn btn-primary">CADASTRAR</button>
            </div>
    </form>

</html>