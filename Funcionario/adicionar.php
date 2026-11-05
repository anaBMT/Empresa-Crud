<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Funcionario</title>
</head>
<body>
    <?php
        include_once("../menu.php");
    ?>
    <h1>Cadastro de Funcionario</h1>
    <div class="container">
    <form action = "inserir.php" method = "post">
        <p>
        <label for="nome">Nome: </label>
        <input type="text" name="name" required>
        </p>

        <p>
        <label for="nome">Email: </label>
        <input type="email" name="email" required>
        </p>
        
        <p>
        <label for="cargo">Cargo: </label>
        <input type="text" name="cargo" required>
        </p>

        <p>
        <label for="salario">Salario: R$ </label>
        <input type="number" name="salario" step="0.01" required>
        </p>
        
        <p>
        <label for="data">Data de Admissão: </label>
        <input type="date" name="admissao" required>
        </p>

        <input type="submir" value="Cadastrar">
        <input type="reset" value="Limpar">
        </div>
    </body>
</html>