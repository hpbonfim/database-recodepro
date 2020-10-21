<!DOCTYPE html>
<html lang="pt-BR">
<?php
    $titulo_pagina = "Exemplo";
    $botao_navegacao = "<button><a href='index.php'>Voltar para o início</a></button>"
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titulo_pagina; ?></title>
</head>

<body>
    <?php 
        echo "<h1>Esta página é : $titulo_pagina</h1>"; 
        echo $botao_navegacao;
    ?>
</body>

</html>