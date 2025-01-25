<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Simples</title>
	<link rel="StyleSheet" type="Text/css" href="inicio.css">
    
</head>
<body>

    <div class="menu">
        <a href="inicio.html">Home</a>
        <a href="ingles.html">Versão em inglês</a>
        <a href="media.php">Média de Idade dos fãs </a>
        <a href="luta.html">Artes Marciais</a>
        <a href="fotos.html">Fotos</a>
    </div>
    <div class="telatransparente" >
   <p>A personagem atrai uma ampla gama de fãs devido à sua representação de força feminina e sua jornada de redenção e superação, temas universais que ressoam com diferentes idades.
</p>
</form>
<?php
$soma=0;
$idades = [15, 18, 22, 25, 19, 21, 28, 30, 33, 17, 26, 24, 20, 27, 29];
for($i=0;$i<=14;$i++)
{
    $soma=$soma+$idades[$i];
}
$quantidade = $i; 
$media = $soma / $quantidade; 
echo "Em média, pode-se estimar que a idade dos fãs da Viúva Negra no MCU(Universo Cinematográfico da Marvel) é de: " . round($media, 2) . ", embora haja fãs mais velhos e mais jovens." ;
?>
</body>
</html>