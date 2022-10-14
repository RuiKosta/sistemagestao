<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contato</title>
    <style>
        input{display:block}
    </style>
</head>
<body>
    <h1>Contato</h1>
    <form action="cadastro.php" method="POST">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome"/>
      
        <label for="email">Email:</label>
        <input type="text" name="email" id="email"/>
      
        <label for="senha">Senha:</label>
        <input type="password" name="senha" id="senha"/>
        <input type="submit" value="cadastrar"/>
     </form>
</body>
</html>