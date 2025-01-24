<?php

// Carregar o JSON de um arquivo externo
$jsonFile = __DIR__ . '/data.json';
if (!file_exists($jsonFile)) {
    die("Arquivo JSON não encontrado.");
}

$json = file_get_contents($jsonFile);
$data = json_decode($json, true);

if (!$data || !isset($data['item'])) {
    die("JSON inválido ou formato inesperado.");
}

// Início do HTML
echo "<html>\n<head>\n<title>Dia Geek</title>\n<style>\n  body { font-family: Arial, sans-serif; background-color: #000; color: #fff; margin: 0; padding: 0; }\n  .section { margin: 20px auto; padding: 15px; border: 2px solid #ffa500; background-color: #1a1a1a; max-width: 600px; border-radius: 8px; }\n  .section h2 { margin: 0 0 10px; color: #ffa500; }\n  .section p { margin: 5px 0; }\n  .section a { color: #ffa500; text-decoration: none; font-weight: bold; }\n  .section a:hover { text-decoration: underline; }\n  .thumbnails { display: flex; gap: 10px; margin-top: 10px; }\n  .thumbnails img { width: 100px; height: auto; border-radius: 4px; border: 1px solid #ffa500; }\n</style>\n</head>\n<body>\n";

echo "<h1 style='width:500px; text-align:center; color: #fff; display:block; margin:auto'>Sites dos estudantes da INFO11, INFO12 e INFO13</h1>";

foreach ($data['item'] as $item) {
    $pasta = $item['pasta'];
    $nomes = $item['nomes'];

    // Caminho da pasta
    $dir = __DIR__ . "/$pasta";

    // Verificar se a pasta existe
    if (!is_dir($dir)) {
        continue;
    }

    // Obter arquivos HTML na pasta
    $arquivos = glob("$dir/*.html");

    // Criar seção para o item
    echo "<div class='section'>\n";
    
    // Adicionar nomes dos integrantes
    echo "<h2><strong>Integrantes:</strong> " . implode(", ", $nomes) . "</h2>\n";

  // Definir os possíveis nomes de páginas principais
$paginasPrincipais = ["index.html", "ppi.html", "home.html", "personagem.html", "indexppi.html"];

// Procurar por qualquer uma das páginas principais na pasta
$paginaPrincipalEncontrada = null;
foreach ($paginasPrincipais as $pagina) {
    if (in_array("$dir/$pagina", $arquivos)) {
        $paginaPrincipalEncontrada = $pagina;
        break;
    }
}

if ($paginaPrincipalEncontrada) {
    // Adicionar link para a página principal encontrada
    echo "<p><a href='$pasta/$paginaPrincipalEncontrada' target='_blank'>Acessar</a></p>\n";
    $arquivos = array_diff($arquivos, ["$dir/$paginaPrincipalEncontrada"]); // Remover a página principal da lista
} else {
    // Adicionar links para outros arquivos
    echo "<p>Outras páginas: ";
    foreach ($arquivos as $arquivo) {
        $nomeArquivo = basename($arquivo);
        echo "<a href='$pasta/$nomeArquivo'>$nomeArquivo</a> ";
    }
    echo "</p>\n";
}

    // Adicionar miniaturas de imagens
    $imagens = glob("$dir/*.{jpg,png,gif}", GLOB_BRACE);
    $imagens = array_slice($imagens, 0, 3); // Limitar a 3 imagens
    if (!empty($imagens)) {
        echo "<div class='thumbnails'>\n";
        foreach ($imagens as $imagem) {
            $caminhoImagem = "$pasta/" . basename($imagem);
            echo "<img src='$caminhoImagem' alt='Miniatura'>\n";
        }
        echo "</div>\n";
    }

    echo "</div>\n";
}

// Fechar HTML
echo "</body>\n</html>";
