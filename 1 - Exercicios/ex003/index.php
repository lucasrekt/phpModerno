<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em PHP</title>
</head>
<body>
    <h1>Teste de tipos primitivos</h1>

    <?php 
        // 0x = hexadecimal 
        // 0b = binário
        // 0 = Octal
        // $num = 010;
        // echo "O valor da variável é $num";

        // $v = 45.2;
        // var_dump($v);

        // $num = 3e2; // 3 x 10(2)
        // $num = (int) 3e2;  (Coerção)
        // echo "O valor é $num";
        // var_dump($num);

        // $casado = false;
        // var_dump($casado);

        // $vet = [6, 2, 9, 3, 5];
        // var_dump($vet);

        class Pessoa{
            private string $nome;
        }

        $p = new Pessoa;
        var_dump($p)
    ?>
    
</body>
</html>