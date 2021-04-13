<?php
// Template Name: Produtos
    get_header();
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        
        <?php include(TEMPLATEPATH . "/inc/introducao.php") ?>

        <section data-anime="1200" class="fadeInDown container produto_item">
            <div class="grid-11">
                <img src="img/produtos/bikcraft-passeio-1.jpg" alt="Bikcraft Passeio">
                <h2>Passeio</h2>
            </div>
            <div class="grid-5 produto_icone"><img src="img/produtos/passeio.svg" alt="Logo Bikcraft Passeio"></div>
            <div class="grid-8"><img src="img/produtos/bikcraft-passeio-2.jpg" alt="Bikcraft Passeio"></div>
            <div class="grid-8 produto_info">
                <p>Muito melhor do que passear pela orla a vidros fechados. A Bikcraft Passeio é uma bicicleta que une conforto e praticidade para o seu dia a dia. Você nunca mais vai querer saber de outra.</p>
                <ul>
                    <li>Conforto</li>
                    <li>Velocidade</li>
                    <li>Desing</li>
                    <li>Versatilidade</li>
                </ul>
            </div>
        </section>

        <section class="container produto_item">
            <div class="grid-11">
                <img src="img/produtos/bikcraft-esporte-1.jpg" alt="Bikcraft Esporte">
                <h2>Esporte</h2>
            </div>
            <div class="grid-5 produto_icone"><img src="img/produtos/esporte.svg" alt="Logo Bikcraft Esporte"></div>
            <div class="grid-8"><img src="img/produtos/bikcraft-esporte-2.jpg" alt="Bikcraft Esporte"></div>
            <div class="grid-8 produto_info">
                <p>No mundo atual, a contínua expansão de nossa atividade cumpre um papel essencial na fórmula da gestão inovadora da qual fazemos parte inovadora da qual fazemos parte.</p>
                <ul>
                    <li>Conforto</li>
                    <li>Velocidade</li>
                    <li>Desing</li>
                    <li>Versatilidade</li>
                </ul>
            </div>
        </section>

        <section class="container produto_item">
            <div class="grid-11">
                <img src="img/produtos/bikcraft-retro-1.jpg" alt="Bikcraft Retro">
                <h2>Retro</h2>
            </div>
            <div class="grid-5 produto_icone"><img src="img/produtos/retro.svg" alt="Logo Bikcraft Retro"></div>
            <div class="grid-8"><img src="img/produtos/bikcraft-retro-2.jpg" alt="Bikcraft Retro"></div>
            <div class="grid-8 produto_info">
                <p>No mundo atual, a contínua expansão de nossa atividade cumpre um papel essencial na fórmula da gestão inovadora da qual fazemos parte inovadora da qual fazemos parte.</p>
                <ul>
                    <li>Conforto</li>
                    <li>Velocidade</li>
                    <li>Desing</li>
                    <li>Versatilidade</li>
                </ul>
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
                <div class="orcamento_dados grid-8">
                    <h3>Dados</h3>
                    <span>+55 21 93223 3232</span>
                    <span>orcamento@bikcraft.com</span>
                    <h3>Monte sua bikcraft</h3>
                    <p>Escolha as especificações:</p>
                    <ul>
                        <li>- Cores</li>
                        <li>- Estilo</li>
                        <li>- Medidas</li>
                        <li>- Acessórios</li>
                        <li>- E outros</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- Fecha orçamento -->
<?php endwhile; else: endif; ?>

<?php get_footer(); ?>