<?php
// Template Name: Home
    get_header();
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <section class="introducao">
            <div class="container">
                <h1 data-anime="400" class="fadeInDown">Bicicletas Feitas a Mão</h1>
                <blockquote data-anime="800" class="fadeInDown quote-externo">
                    <p>"Não tenha nada em sua casa que você não considere útil ou acredita ser bonito"</p>
                    <cite>WILLIAM MORRIS</cite>
                </blockquote>
                <a data-anime="1200" href="produtos.html" class="btn">Orçamento</a>
            </div>
        </section>
        <!-- Fecha introdução -->

        <section data-anime="1600" class="fadeInDown produtos container">
            <h2 class="subtitulo">Produtos</h2>

            <ul class="produtos_lista">
                <li class="grid-1-3">
                    <div class="produtos_icone">
                        <img src="img/produtos/passeio.svg" alt="Bikcraft Passeio">
                    </div>
                    <h3>Passeio</h3>
                    <p>Muito melhor do que passear pela orla a vidros fechados.</p>
                </li>

                <li class="grid-1-3">
                    <div class="produtos_icone">
                        <img src="img/produtos/esporte.svg" alt="Bikcraft Esporte">
                    </div>
                    <h3>Esporte</h3>
                    <p>Mais rápida do que Forrest Gump, ningém vai pegar você.</p>
                </li>

                <li class="grid-1-3">
                    <div class="produtos_icone">
                        <img src="img/produtos/retro.svg" alt="Bikcraft Retro">
                    </div>
                    <h3>Retro</h3>
                    <p>O passado volta para lembrarmos o que devemos fazer no futuro.</p>
                </li>
            </ul>

            <div class="call">
                <p>Clique aqui e veja os detalhes dos produtos</p>
                <a href="produtos.html" class="btn btn-preto">Produtos</a>
            </div>
        </section>
        <!-- Fecha produtos -->

        <section class="portfolio">
            <div class="container">
                <h2 class="subtitulo">Portfólio</h2>

                <ul class="portfolio_lista">
                    <li class="grid-8"><img src="img/portfolio/retro.jpg" alt="Bicicleta Retro"></li>
                    <li class="grid-8"><img src="img/portfolio/passeio.jpg" alt="Bicicleta Passeio"></li>
                    <li class="grid-16"><img src="img/portfolio/esporte.jpg" alt="Bicicleta Esporte"></li>
                </ul>

                <div class="call">
                    <p>Conheça mais o nosso portfólio</p>
                    <a href="portfolio.html" class="btn">Portfólio</a>
                </div>
            </div>
        </section>
        <!-- Fecha portfólio -->

        <section class="qualidade container">
            <h2 class="subtitulo">Qualidade</h2>
            <img src="img/bikcraft-qualidade.svg" alt="Bikcraft">

            <ul class="qualidade_lista">
                <li class="grid-1-3">
                    <h3>Durabilidade</h3>
                    <p>Sólida como pedra, leve como o vento e resistente como o diamante, são nossos diferenciais.</p>
                </li>
                <li class="grid-1-3">
                    <h3>Desing</h3>
                    <p>Feitas sob medida para o melhor conforto e eficiência. Adaptamos a sua Bikcraft para o seu corpo.</p>
                </li>
                <li class="grid-1-3">
                    <h3>Sustentabilidade</h3>
                    <p>Além de ajudar a cuidar do meio ambiente, tirando carros da rua, toda a produção é sustentável.</p>
                </li>
            </ul>

            <div class="call">
                <p>Conheça mais a nossa história</p>
                <a href="sobre.html" class="btn btn-preto">Sobre</a>
            </div>
        </section>
        <!-- Fecha qualidade -->
<?php endwhile; else: endif; ?>

<?php get_footer(); ?>