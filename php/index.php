<?php include('./banco-de-dados/conexao.php'); ?>

<!DOCTYPE html>
<html lang="pt-BR">
<?php
    $titulo_pagina = "Hello World"
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titulo_pagina; ?></title>
</head>

<body>
    <?php echo "<h1>Olá Mundo, let's code!</h1>"; ?>
    <button><a href="exemplo.php">Ir para a página de exemplo com PHP</a></button>
    <button><a href="teste.html">Ir para a página de exemplo de HTML</a></button>

</body>

</html>