<?php
// Template Name: Single Produtos
    get_header();
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <section class="container produto_item">
            <div class="grid-11">
                <img src="<?php the_field('foto_produto1'); ?>" alt="Bikcraft <?php the_title(); ?>">
                <h2><?php the_title(); ?></h2>
            </div>
            <div class="grid-5 produto_icone"><img src="<?php the_field('icone_produto'); ?>" alt="Logo Bikcraft <?php the_title(); ?>"></div>
            <div class="grid-8"><img src="<?php the_field('foto_produto2'); ?>" alt="Bikcraft <?php the_title(); ?>"></div>
            <div class="grid-8 produto_info">
            <?php the_content(); ?>
            </div>
        </section>
        <!-- Fecha produtos -->

        <section class="orcamento">
            <div class="container">
                <h2 class="subtitulo">Orçamento</h2>
                <form id="form_orcamento" method="POST" action="./enviar.php" class="form grid-8 formphp">
                    <label for="nome">Nome</label>
                    <input type="text" id="nome" name="nome" required>
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                    <label for="telefone">Telefone</label>
                    <input type="text" id="telefone" name="telefone">

                    <label class="nao-aparece">Se você não é um robô, deixe em branco.</label>
                    <input type="text" class="nao-aparece" name="leaveblank">
                    <label class="nao-aparece">Se você não é um robô, não mude este campo.</label>
                    <input type="text" class="nao-aparece" name="dontchange" value="http://">

                    <label for="mensagem">Mensagem</label>
                    <textarea id="mensagem" name="mensagem" required></textarea>
                    <button id="enviar" name="enviar" type="submit" class="btn">Enviar</button>
                </form>
                <?php include(TEMPLATEPATH . "/inc/produtos-orcamento.php") ?>
            </div>
        </section>
        <!-- Fecha orçamento -->
<?php endwhile; else: endif; ?>

<?php get_footer(); ?>