<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operações matemáticas</title>
</head>
<body>
    <?php

    const ALIQUOTA = 0.05;
    $baseCalculo = 100;

    $imposto = $baseCalculo * ALIQUOTA;
    $precoTotal = $baseCalculo + $imposto;

    ?>
    <span style="font-weight: 600"> Total do produto: </span> R$ <?php echo $precoTotal; ?>
</body>
</html>