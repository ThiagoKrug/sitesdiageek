﻿<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Simples</title>
    <link rel="StyleSheet" type="Text/css" href="estilo.css?nocache=<?=  rand(10, 100000) ?>">
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
                <img src="hanzot.png" alt="Imagem 1">
            </div>
            <div class="slide">
                <img src="hanzot2.png" alt="Imagem 2">
            </div>
            <div class="slide">
                <img src="hanzot3.png" alt="Imagem 3">
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
            <img src="ult.png" alt="Nova Imagem" class="h1-imagem">
            <div class="h1p">
                <p> - Personagem jogável</p>        
                <h1>Hanzo<br>Shimada</h1>
            </div>
        </div>

        <div class="lore">
            <p class="historia-personagem">- História do Personagem</p>
            <p><br>Dominando suas habilidades como arqueiro e assassino, Hanzo Shimada se esforça para se provar como um guerreiro sem igual.
                Ele tem uma visão cínica sobre a natureza do mundo e acredita que a compaixão não tem lugar na batalha.
                Além de suas habilidades com o arco, Hanzo também é habilidoso com a espada, mas jurou nunca mais usar tal arma.
                Ele considera bestas "brinquedos para crianças" e se recusa a usar armas de fogo, pois "elas tornam o ato de matar muito simples."
                Como hobby, ele entalha amuletos de madeira e não gosta de cidades, preferindo áreas mais tranquilas, como Kanezaka. Ele também evita pessoas de maneira geral.</p>
        </div> 

        <img src="hanzo1.png" alt="Hanzo" class="direita-imagem">

        <!-- Seção do Card -->
        <div class="card-container">
            <div class="card">
                <input type="checkbox" id="card1" class="card-toggle">
                <label for="card1" class="card-inner">
                    <div class="card-front">
                        <img src="ha1.png" alt="Imagem do Card">
                    </div>
                    <div class="card-back">
                        <img src="Ha21.png" alt="Imagem de trás do Card">
                    </div>
                </label>
            </div>
            <div class="card">
                <input type="checkbox" id="card2" class="card-toggle">
                <label for="card2" class="card-inner">
                    <div class="card-front">
                        <img src="ha2.png" alt="Imagem do Card">
                    </div>
                    <div class="card-back">
                        <img src="Ha22.png" alt="Imagem de trás do Card">
                    </div>
                </label>
            </div>
            <div class="card">
                <input type="checkbox" id="card3" class="card-toggle">
                <label for="card3" class="card-inner">
                    <div class="card-front">
                        <img src="ha3.png" alt="Imagem do Card">
                    </div>
                    <div class="card-back">
                        <img src="Ha23.png" alt="Imagem de trás do Card">
                    </div>
                </label>
            </div>
            <div class="card">
                <input type="checkbox" id="card4" class="card-toggle">
                <label for="card4" class="card-inner">
                    <div class="card-front">
                        <img src="ha4.png" alt="Imagem do Card">
                    </div>
                    <div class="card-back">
                        <img src="Ha24.png" alt="Imagem de trás do Card">
                    </div>
                </label>
            </div>
            <div class="card">
                <input type="checkbox" id="card5" class="card-toggle">
                <label for="card5" class="card-inner">
                    <div class="card-front">
                        <img src="ha5.png" alt="Imagem do Card">
                    </div>
                    <div class="card-back">
                        <img src="Ha25.png" alt="Imagem de trás do Card">
                    </div>
                </label>
            </div>
            <div class="card">
                <input type="checkbox" id="card6" class="card-toggle">
                <label for="card6" class="card-inner">
                    <div class="card-front">
                        <img src="ha6.png" alt="Imagem do Card">
                    </div>
                    <div class="card-back">
                        <img src="Ha26.png" alt="Imagem de trás do Card">
                    </div>
                </label>
            </div>
        </div>
    </div>
    <div class="mudar-cor">
</div>

<div class="texto-final">
    <h2>Kyūdō</h2>
    <p><strong>O que é o Kyūdō?</strong><br>
    Kyūdō (弓道), traduzido como "O Caminho do Arco", é a arte marcial tradicional japonesa de arco e flecha. Embora tenha raízes nas práticas militares, o Kyūdō é considerado uma disciplina espiritual e filosófica, onde o foco não está apenas em acertar o alvo, mas em buscar a perfeição interna e a harmonia entre corpo e mente.</p>
    
    <p><strong>Origem do Kyūdō:</strong><br>
    O Kyūdō tem suas origens no Japão feudal, onde o arco e flecha eram usados tanto em batalhas quanto em caçadas. Com o tempo, essa prática evoluiu de uma técnica militar para uma forma de arte marcial. A tradição do Kyūdō é antiga, com registros que datam do período Heian (794-1185), mas o sistema moderno que conhecemos hoje foi formalizado no início do século XX.</p>
    
    <p><strong>Princípios e Filosofia:</strong><br>
    Kyūdō não se concentra apenas em alcançar o alvo, mas também no processo de execução. Os praticantes buscam atingir um estado de tranquilidade mental e harmonia durante o disparo. O processo de dar o arco, posicionar-se e disparar a flecha é considerado um reflexo da busca pela perfeição pessoal.</p>
    
    <p><strong>Técnica e Equipamento:</strong><br>
    O arco usado no Kyūdō é maior do que o arco ocidental, e o arco tradicional japonês (chamado de yumi) pode ser muito mais alto do que o praticante. As flechas, chamadas de ya, são geralmente mais longas e feitas com materiais como bambu e madeira.</p>
    
    <p><strong>Kyūdō como Caminho:</strong><br>
    Em Kyūdō, o praticante não só busca a perfeição técnica, mas também a clareza mental e a paz interior. A prática do Kyūdō é muitas vezes vista como uma forma de meditação, onde a jornada de aperfeiçoamento pessoal é mais importante do que a vitória.</p>
    <img src="kyu1.png" alt="Hanzo" class="esquerda-imagem">
</div>
<footer>
    <div class="interface">
        
        <section class="line-footer1">
            <h2> Gostou do personagem?</h2>
            <p>Então teste jogar com ele da próxima vez!</p>
        </section>

        <section class="line-footer2">
            <div class="box-line-footer">
                <img src="rodap.png" alt="Icone Rodape">
                <p> Overwatch é um jogo desenvolvido pela Blizzard.</p>
            </div>

            <div class="box-line-footer">
                <img src="ow.png" alt="Icone Rodape2">
                <h3>Fontes e links úteis:</h3>
                <div class="link-footer">
                    <a href="https://overwatch.fandom.com/wiki/Hanzo">Wiki Hanzo</a>
                    <a href="https://overwatch.blizzard.com/en-us/heroes/hanzo/">Site oficial</a>
                </div>
            </div>
        </section>
        <section class="line-footer3">
            <p> Angelo Gurski, Yuri Teixeira.</p>
        </section>
    </div>
</footer>
</body>
</html>
