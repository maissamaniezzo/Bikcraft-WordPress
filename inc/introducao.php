<style type="text/css">
    .introducao-interna {
        background: url("<?php the_field('background_interno') ?>") no-repeat center;
        background-size: cover;
    } 

    .introducao-interna h1 {
        margin-top: 30px;
    }
</style>

<section class="introducao-interna">
    <div class="container">
        <!-- <h1 data-anime="400" class="fadeInDown">Contato</h1> -->
        <h1 class="fadeInDown"><?php the_title(); ?></h1>
        <!-- <p data-anime="800" class="fadeInDown">Tire suas dúvidas com a gente</p> -->
        <p class="fadeInDown"><?php the_field('subtitulo'); ?></p>
    </div>
</section>
<!-- Fecha introdução Contato -->