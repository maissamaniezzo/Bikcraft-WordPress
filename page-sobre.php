<?php
// Template Name: Sobre
    get_header();
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        
        <?php include(TEMPLATEPATH . "/inc/introducao.php") ?>

        <!-- <section  data-anime="1200" class="fadeInDown missao_sobre container"> -->
        <section  class="fadeInDown missao_sobre container">
            <div class="grid-10">
                <h2 class="subtitulo-interno">História, Missão e Visão</h2>
                <p>No mundo atual, a contínua expansão de nossa atividade cumpre um papel essencial na formulação da gestão inovadora da qual fazemos parte da qual fazemos parte.</p>
                <p>No mundo atual, a contínua expansão de nossa atividade cumpre um papel essencial na formulação da gestão inovadora da qual fazemos parte da qual fazemos parte.</p>
            </div>
            <div class="grid-6">
                <h2 class="subtitulo-interno">Valores</h2>
                <ul>
                    <li>- Qualidade no processo com</li>
                    <li>- Foco no cliente e sem perder a</li>
                    <li>- DIversão, preservando a</li>
                    <li>- Natureza com sustentabilidade</li>
                </ul>
                
            </div>
            <div class="grid-16 foto-equipe">
                <img src="img/equipe-bikcraft.jpg" alt="Equipe Bikcraft">
            </div>
        </section>

        <?php include(TEMPLATEPATH . "/inc/qualidade.php") ?>
        <!-- Fecha qualidade -->
<?php endwhile; else: endif; ?>

<?php get_footer(); ?>

