<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulação de Imagens com PHP</title>
    <link rel="stylesheet" href="styles/style.css">
</head>

<body>
    <nav>
        <img src="assets/logo.png" alt="Imagem de login" class="capa" style="width: 60px;">
    </nav>
    <main>
        <h1>Interaja com as imagens!</h1>
        <!-- Botões para acionar as funções -->
        <form method="POST">
            <button type="submit" name="acao" value="exibir">Exibir Imagens</button>
            <button type="submit" name="acao" value="remover">Remover Última Imagem</button>
            <button type="submit" name="acao" value="contar">Contar Imagens</button>
            <button type="submit" name="acao" value="ordenar">Ordenar Imagens</button>
            <button type="submit" name="acao" value="adicionar">Adicionar Nova Imagem</button>
        </form>

        <?php
        // Definindo o array com 5 imagens (nomes de arquivos de imagem como exemplo)
        $imagens = [
            "assets/imagem2.jpg",
            "assets/imagem1.jpg",
            "assets/imagem3.jpg",
            "assets/imagem5.jpg",
            "assets/imagem4.jpg"
        ];

        // Verifica qual botão foi clicado e realiza a ação correspondente
        if (isset($_POST['acao'])) {
            switch ($_POST['acao']) {
                case 'exibir':
                    // Exibindo as imagens com foreach
                    echo "<h2>Imagens no array:</h2>";
                    echo "<div class='imagem-container'>";
                    foreach ($imagens as $imagem) {
                        echo "<img src='$imagem' alt='Imagem'>";
                    }
                    echo "</div>";
                    break;

                case 'remover':
                    // Removendo a última imagem com array_pop
                    $ultimaImagem = array_pop($imagens);
                    // Exibindo o array de imagens restante
                    echo "<h2>Imagens restantes:</h2>";
                    echo "<div class='imagem-container'>";
                    foreach ($imagens as $imagem) {
                        echo "<img src='$imagem' alt='Imagem'><br>";
                    }
                    echo "</div>";

                    break;

                case 'contar':
                    // Contando as imagens restantes com count
                    $qtdImagens = count($imagens);
                    echo "<h2>Total de imagens restantes:</h2>"; // Correção aqui
                    echo "<div class='imagem-container'>";
                    echo "<p>$qtdImagens</p>";
                    echo "</div>";
                    break;


                case 'ordenar':
                    // Ordenando as imagens com sort
                    sort($imagens);
                    echo "<h2>Imagens após ordenação:</h2>";
                    echo "<div class='imagem-container'>";
                    foreach ($imagens as $imagem) {
                        echo "<img src='$imagem' alt='Imagem'><br>";
                    }
                    echo "</div>";
                    break;

                case 'adicionar':
                    // Adicionando uma nova imagem ao array com array_push
                    array_push($imagens, "assets/imagem6.jpg");

                    echo "<h2>Nova imagem foi adicionada ao array:</h2>";

                    // Exibindo todas as imagens no array, incluindo a nova
                    echo "<div class='imagem-container'>";
                    foreach ($imagens as $imagem) {
                        echo "<img src='$imagem' alt='Imagem'><br>";
                    }
                    echo "</div>";
                    break;

            }
        }
        ?>

    </main>
    <footer>
        <p>&copy; 2024 - Todos os direitos reservados.</p>
    </footer>

</body>

</html>