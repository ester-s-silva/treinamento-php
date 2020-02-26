<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1</title>
    <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="skeleton.css">

    <style>
        th, td {
            text-align: center;
        }
    </style>
</head>

<body>

    <?php 
    $nota1 = rand(0, 10);
    $nota2 = rand(0, 10); 
    $nota3 = rand(0, 10); 
    $nota4 = rand(0, 10);
    $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4 
    ?>

    <div class="container">
        <h3>Boletim</h3>
        <table class="u-full-width">
            <tr>
                <th>Bimestre</th>
                <th>Nota</th>
            </tr>
            <tr>
                <td>1</td>
                <td>                    
                    <?php $status1 = 'blue';
                        if ($nota1 < 6) {$status1 = 'red'; } 
                    ?>
                    <span style="color: <?php echo $status1; ?>">
                    <?php echo $nota2; ?>
                    </span>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td><?php 
                        if($nota2 >= 6) { $status2 = 'blue'; }
                        else { $status2 = 'blue'; } ?>
                    <span style="color: <?php echo $status2; ?>">
                    <?php echo $nota2; ?>
                    </span>
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td><?php $status3 = $nota3 >= 6 ? 'blue' : 'red'; ?>
                    <span style="color: <?php echo $status3; ?> ">
                    <?= $nota3 ?>
                    </span>
                </td>
            </tr>
            <tr>
                <td>4</td>
                <td><?php if ($nota4 >= 6) {
                        echo '<span style="color:blue">' . $nota4 . '</span>';
                    } else {
                        echo '<span style="color:red">' . $nota4 . '</span>';
                    }; ?>
                </td>
            </tr>
            <tr>
                <td><strong> Média </strong></td>
                <td><strong>
                        <?php if ($media >= 6) {
                            echo '<span style="color:blue">' . $media . '</span>';
                        } else {
                            echo '<span style="color:red">' . $media . '</span>';
                        }; ?>
                    </strong>
                </td>
                <tfoot>
                    <td colspan="2"><b>
                        <?php if ($media >= 6) {
                            echo '<span style="color:blue">' . 'Parabéns, você foi aprovado.' . '</span>';
                        } else {
                            echo '<span style="color:red">' . 'Desculpe, você foi reprovado.' . '</span>';
                        }; ?>
                    </b></td>
                </tfoot>
            </tr>
        </table>
    </div>
</body>

</html>