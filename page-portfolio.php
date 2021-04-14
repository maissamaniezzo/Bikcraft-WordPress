<?php
// Template Name: Portfolio
    get_header();
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        
        <?php include(TEMPLATEPATH . "/inc/introducao.php") ?>

        <!-- <section class="container fadeInDown" data-slide="quote" data-anime="1200"> -->
        <section class="container fadeInDown" data-slide="quote">
            <blockquote class="quote_cliente">
                <p>"Pedalar sempre foi minha paixão, o que o pessoal da Bikcraft fez foi intensificar o meu amor por esta atividade. Recomendo à todos que amo."</p>
                <cite>Barbara Moss</cite>
            </blockquote>
            <blockquote class="quote_cliente">
                <p>"Nada melhor do que dar um rolê com a minha Bikcraft na orla. Essa é a minha companheira mais fiel, nunca me traiu e está sempre a minha disposição."</p>
                <cite>Jhony Rato</cite>
            </blockquote>
            <blockquote class="quote_cliente">
                <p>"Aqueles que ainda não possuem uma Bikcraft, não sabem o que estão perdendo. A precisão é absurda e a velocidade transcedental. Nunca vi nada igual."</p>
                <cite>Bernardo </cite>
            </blockquote>
        </section>

        <section class="portfolio" >
            <div class="container" data-slide="portfolio">
                <ul class="portfolio_lista">
                    <li class="grid-8"><img src="img/portfolio/retro.jpg" alt="Bicicleta Retro"></li>
                    <li class="grid-8"><img src="img/portfolio/passeio.jpg" alt="Bicicleta Passeio"></li>
                    <li class="grid-16"><img src="img/portfolio/esporte.jpg" alt="Bicicleta Esporte"></li>
                </ul>
                <ul class="portfolio_lista">
                    <li class="grid-8"><img src="img/portfolio/passeio.jpg" alt="Bicicleta Passeio"></li>
                    <li class="grid-8"><img src="img/portfolio/retro.jpg" alt="Bicicleta Retro"></li>
                    <li class="grid-16"><img src="img/portfolio/esporte.jpg" alt="Bicicleta Esporte"></li>
                </ul>
            </div>
        </section>
<?php endwhile; else: endif; ?>

<?php get_footer(); ?>