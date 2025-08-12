<section id="faq">
    <img class="perguntas-svg" src="<?= get_template_directory_uri() ?>/images/Perguntas frequentes.svg" alt="Brasil">
    <div class="elipse"></div>
    <div class="container">
        <div class="titulos">
            <h2 class="titulo"><?= get_field("titulo_secao_faq") ?></h2>
            <p class="subtitulo"><?= get_field("subtitulo_secao_faq") ?></p>
        </div>
        <div class="container-faq">
            <div class="container-pergunta">
                <h4 class="pergunta"><?= get_field("pergunta_1") ?><span class="btn-abrir"></span></h4>
                <p class="resposta"><?= get_field("resposta_1") ?></p>
            </div>
            <div class="container-pergunta">
                <h4 class="pergunta"><?= get_field("pergunta_2") ?><span class="btn-abrir"></span></h4>
                <p class="resposta"><?= get_field("resposta_2") ?></p>
            </div>
            <div class="container-pergunta">
                <h4 class="pergunta"><?= get_field("pergunta_3") ?><span class="btn-abrir"></span></h4>
                <p class="resposta"><?= get_field("resposta_3") ?></p>
            </div>
            <div class="container-pergunta">
                <h4 class="pergunta"><?= get_field("pergunta_4") ?><span class="btn-abrir"></span></h4>
                <p class="resposta"><?= get_field("resposta_4") ?></p>
            </div>
        </div>
    </div>
</section>