<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos - Empresa Exemplo</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.html">Início</a></li>
                <li><a href="sobre.html">Sobre</a></li>
                <li><a href="produtos.php">Produtos</a></li>
                <li><a href="novidades.html">Novidades</a></li>
                <li><a href="contato.html">Contato</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h1>Nossos Produtos</h1>
        <input type="text" id="pesquisa-produto" placeholder="Pesquisar produto..." style="width: 100%; max-width: 350px; padding: 8px; margin: 18px 0 28px 0; border-radius: 6px; border: 1px solid #ccc; font-size: 1em;">
        <?php
        $produtos = [
            [
                "nome" => "Alface Fresca",
                "descricao" => "Alface crocante e fresca, ideal para saladas e sanduíches.",
                "imagem" => "img/produtos/alface.jpg"
            ],
            [
                "nome" => "Baguete Artesanal",
                "descricao" => "Pão baguete feito artesanalmente, perfeito para lanches e acompanhamentos.",
                "imagem" => "img/produtos/baguete.jpg"
            ],
            [
                "nome" => "Cenoura Orgânica",
                "descricao" => "Cenouras orgânicas, ricas em sabor e nutrientes para sua saúde.",
                "imagem" => "img/produtos/cenoura.jpg"
            ],
            [
                "nome" => "Laranja Doce",
                "descricao" => "Laranjas selecionadas, doces e suculentas, ideais para sucos e sobremesas.",
                "imagem" => "img/produtos/laranja.jpg"
            ]
        ];
        echo '<div class="produtos" id="lista-produtos">';
        foreach ($produtos as $produto) {
            echo '<div class="produto">';
            echo '<img src="' . $produto["imagem"] . '" alt="' . $produto["nome"] . '">';
            echo '<h2 class="nome-produto">' . $produto["nome"] . '</h2>';
            echo '<p>' . $produto["descricao"] . '</p>';
            echo '</div>';
        }
        echo '</div>';
        ?>
        <script>
        document.addEventListener('DOMContentLoaded', function() {
            const barraPesquisa = document.getElementById('pesquisa-produto');
            const produtos = document.querySelectorAll('#lista-produtos .produto');
            barraPesquisa.addEventListener('input', function() {
                const termo = barraPesquisa.value.toLowerCase();
                produtos.forEach(function(produto) {
                    const nome = produto.querySelector('.nome-produto').textContent.toLowerCase();
                    if (nome.includes(termo)) {
                        produto.style.display = '';
                    } else {
                        produto.style.display = 'none';
                    }
                });
            });
        });
        </script>
    </main>
    <footer>
        <p>&copy; 2026 Mercado Bom Viver</p>
    </footer>
</body>
</html>