<?php
// Template Name: Home
    get_header();
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php 
    $imagem_id = get_field('background_home');
    $background_large = wp_get_attachment_image_src($imagem_id, 'large'); //gera array
    $background_medium = wp_get_attachment_image_src($imagem_id, 'medium'); //gera array
?>

    <style type="text/css">
        .introducao {
            background: url('<?php echo $background_large[0] ?>') no-repeat center; /* [0] pega url */
            background-size: cover;
        }

        @media only screen and (max-width: 787px) {
            .introducao {
                background: url('<?php echo $background_medium[0] ?>') no-repeat center; /* [0] pega url */
                background-size: cover;
            }
        }
    </style>

        <section class="introducao">
            <div class="container">
                <!-- <h1 data-anime="400" class="fadeInDown">Bicicletas Feitas a Mão</h1> -->
                <h1 class="fadeInDown"><?php the_field('titulo_introducao'); ?></h1>
                <!-- <blockquote data-anime="800" class="fadeInDown quote-externo"> -->
                <blockquote class="fadeInDown quote-externo">
                    <p><?php the_field('quote_introducao'); ?></p>
                    <cite><?php the_field('citacao_introducao'); ?></cite>
                </blockquote>
                <!-- <a data-anime="1200" href="produtos.html" class="btn">Orçamento</a> -->
                <a href="/bikcraft/produtos/" class="btn">Orçamento</a>
            </div>
        </section>
        <!-- Fecha introdução -->

        <!-- <section data-anime="1600" class="fadeInDown produtos container"> -->
        <section class="fadeInDown produtos container">
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
                <p><?php the_field('chamada_produtos'); ?></p>
                <a href="/bikcraft/produtos/" class="btn btn-preto">Produtos</a>
            </div>
        </section>
        <!-- Fecha produtos -->

        <section class="portfolio">
            <div class="container">
                <h2 class="subtitulo">Portfólio</h2>
                <?php include(TEMPLATEPATH . "/inc/clientes-portfolio.php") ?>
            </div>
        </section>
        <!-- Fecha portfólio -->

        <?php include(TEMPLATEPATH . "/inc/qualidade.php") ?>
        <!-- Fecha qualidade -->
<?php endwhile; else: endif; ?>

<?php get_footer(); ?>