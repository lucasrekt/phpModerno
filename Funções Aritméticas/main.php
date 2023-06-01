<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções Aritméticas</title>
</head>
<body>
    <h1>Funções Aritméticas</h1>

    <?php 
        $r = abs(-2000); // Valor Absoluto
        echo "A resposta é $r<br>";

        $r1 = base_convert(254, 10, 8); // Converter de uma base para outra, no caso da base 10 para a base 8
        echo "A resposta é $r1<br>";

        // ceil() arredonda pra cima
        // floor() arredonda pra baixo
        // round() arredondamento normal
        // hypot() hipotenusa
        // intdiv() divisão inteira
        // sin(), cos(), tan()
        // sqrt() raiz quadrada

        $r2 = 5 % 2; // % Resto
        echo  "A resposta é $r2<br>";

        $r3 = intdiv(5, 2);
        echo "A resposta é $r3<br>";

        $r4 = min(5, 2, 7, 5, 1, 9, 7, 6);
        echo "A resposta é $r4<br>";

        $r5 = max(5, 2, 7, 5, 1, 9, 7, 6);
        echo "A resposta é $r5<br>";

        $r6 = pi(); 
        // $r6 = M_PI;  <---- Constante PI já declarada no PHP
        echo "A resposta é $r6<br>";

        $r7 = pow(5, 2); // Potência
        // Quando utiliza a função pow em vez de **, tu perde a ordem de prescedência.
        echo "A resposta é $r7<br>";

        $r8 = sqrt(81);
        // Para calcular raiz quadrada, pode ser usado também dessa maneira:  $r8 = 81 ** (1/2)
        echo "A resposta é $r8<br>";
    ?>
    
</body>
</html>