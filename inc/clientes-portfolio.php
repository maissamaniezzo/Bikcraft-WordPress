<?php $portfolio = get_page_by_title('portfolio'); ?>

<div class="container" data-slide='portfolio'>
    <?php if(have_rows('item_portfolio', $portfolio)): while(have_rows('item_portfolio', $portfolio)) : the_row(); ?>
        <ul class="portfolio_lista">
            <li class="grid-8"><img src="<?php the_sub_field('portifolio_imagem1', $portfolio); ?>" alt="<?php the_sub_field('portifolio_imagem_descricao1', $portfolio); ?>"></li>
            <li class="grid-8"><img src="<?php the_sub_field('portifolio_imagem2', $portfolio); ?>" alt="<?php the_sub_field('portifolio_imagem_descricao2', $portfolio); ?>"></li>
            <li class="grid-16"><img src="<?php the_sub_field('portifolio_imagem3', $portfolio); ?>" alt="<?php the_sub_field('portifolio_imagem_descricao3', $portfolio); ?>"></li>
        </ul>
    <?php endwhile; else : endif; ?>
</div>

<?php if (!is_page('portfolio')) { ?>
    <div class="call">
        <p><?php the_field('chamada_portfolio', $portfolio); ?></p>
        <a href="<?php bloginfo('url'); ?>/portfolio/" class="btn">Portfólio</a>
    </div>
<?php } ?>