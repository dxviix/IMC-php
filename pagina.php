<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Aprendendo PHP</title>
</head>
<body>
    <?php
        function calcularIMC($peso, $altura) {
            $imc = $peso/($altura*$altura);
            return $imc;
        }
    ?>

    <p>IMC: <?php echo calcularIMC(100,1.95); ?></p>
</body>
</html>