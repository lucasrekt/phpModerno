<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings</title>
</head>
<body>
    <h1>Manipulação de Strings</h1>

    <?php 
        $doublequoted = "PHP \u{1F418}";  // Exemplo de String Double Quoted = Interpreta
        $singlequoted = 'PHP \u{1F418}';  // Exemplo de String Single Quoted = Não interpreta
        echo "$doublequoted";
        echo "$singlequoted";

        const CANAL = "Curso em Vídeo \u{1F499}";
        echo "Eu adoro o " .CANAL;
        echo "Estamos no ano de " . date('Y');
    ?>
    
</body>
</html>