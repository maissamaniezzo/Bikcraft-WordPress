<?php
// Template Name: Contato
    get_header();
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <?php include(TEMPLATEPATH . "/inc/introducao.php") ?>
        
        <section  data-anime="1200" class="fadeInDown contato container">
            <form id="form_orcamento" method="POST" action="./enviar.php" class="contato_form grid-8 formphp">
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
                <button id="enviar" name="enviar" type="submit" class="btn btn-preto">Enviar</button>
            </form>
            <div class="contato_dados grid-8">
                <h3>Dados</h3>
                <span>+55 21 93223 3232</span>
                <span>orcamento@bikcraft.com</span>
                <span>Rua Ali Perto - Botafogo</span>
                <span>Rio de Janeiro - RJ - Brasil</span>
                <h3>Redes Sociais</h3>
                <ul>
                    <li><a href="http://facebook.com" target="blanck">
                        <img src="img/redes-sociais/facebook.svg" alt="Facebook">
                    </a></li>
                    <li><a href="http://instagram.com" target="blanck">
                        <img src="img/redes-sociais/instagram.svg" alt="Instagram">
                    </a></li>
                    <li><a href="http://twitter.com" target="blanck">
                        <img src="img/redes-sociais/twitter.svg" alt="Twitter">
                    </a></li>
                </ul>
            </div>
        </section>
        <!-- Fecha contato -->

        <section class="container contato_mapa">
            <a href="https://google.com" target="_blank" class="grid-16"><img src="img/endereco-bikcraft.jpg" alt="Endereço da Bikcraft"></a>
        </section>
        <!-- Fecha mapa -->
<?php endwhile; else: endif; ?>

<?php get_footer(); ?>

