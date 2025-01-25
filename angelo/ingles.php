<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Simples</title>
    <link rel="StyleSheet" type="Text/css" href="estiloeng.css?nocache=<?= rand(10, 100000) ?>">
</head>

<body>
    <div class="menu">
        <ul>
        <li><a href="index.php">Home</a></li>
            <li><a href="ingles.php">Profile</a></li>
            <li><a href="ou.php">Open Universe</a></li>
            <li><a href="blender.php">Blender</a></li>
        </ul>
    </div>

    <div class="slider">
        <div class="slides">
            <!-- Botões do slide -->
            <input type="radio" name="radiohanzo" id="radio1">
            <input type="radio" name="radiohanzo" id="radio2">
            <input type="radio" name="radiohanzo" id="radio3">
            <!-- Fim dos botões do slide -->

            <!-- Imagens -->
            <div class="slide first">
                <img src="ing1.png" alt="Imagem 1">
            </div>
            <div class="slide">
                <img src="ing2.png" alt="Imagem 2">
            </div>
            <div class="slide">
                <img src="ing3.png" alt="Imagem 3">
            </div>
            <!-- Fim das imagens -->
        </div>

        <!-- Bolinhas de navegação -->
        <div class="navegacao">
            <label for="radio1" class="botao"></label>
            <label for="radio2" class="botao"></label>
            <label for="radio3" class="botao"></label>
        </div>
    </div>
    <!-- Fim dos slides -->

    <div class="personagem">
        <div class="content">
            <img src="heng.png" alt="Hanzo" class="direita-imagem">
            <h1>Hanzo Shimada</h1>
            <h2>General Information</h2>
            <ul>
                <li><strong>Full Name:</strong> Hanzo Shimada</li>
                <li><strong>Age:</strong> 38 years old</li>
                <li><strong>Height:</strong> 1.73 m</li>
                <li><strong>Weight:</strong> 72 kg</li>
                <li><strong>Origin:</strong> Hanamura, Japan</li>
                <li><strong>Fighting Style:</strong> Traditional Bow and Arrow, Kyūdō</li>
            </ul>

            <h2>Backstory</h2>
            <p>
                Hanzo Shimada was born into one of Japan's most powerful families, known for leading the Shimada Clan's criminal empire.
                From a young age, he was trained to take control of the family's operations. However, conflict arose between him and his
                younger brother, Genji, who refused to follow the clan's ideals. After a tragic confrontation, Hanzo believed he had killed
                his brother, which led him to abandon his position and seek a path of redemption. Now, he lives as a lone warrior, trying to
                restore his honor.
            </p>

            <h2>Skills and Style</h2>
            <ul>
                <li><strong>Main Weapon:</strong> Storm Bow</li>
                <li><strong>Special Ability:</strong> Sonic Arrows to detect enemies</li>
                <li><strong>Ultimate Ability:</strong> Dragonstrike, summoning spiritual dragons for massive damage</li>
                <li><strong>Combat Style:</strong> Precise, calculated, and highly technical</li>
            </ul>
        </div>
    </div>
    
</body>

</html>
