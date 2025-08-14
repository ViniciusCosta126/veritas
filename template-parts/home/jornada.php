<section id="jornada">

    <div class="container">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/pdFLuRQd0wQ?si=wTEkHSwNjX6TXQUN"
            title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

        <h3 class="img-container">
            <img src="<?= get_field("imagem_logo_jornada")['url'] ?>" alt="<?= get_field("imagem_logo_jornada")['alt'] ?>">
        </h3>

        <h3 class="texto-1">
            <?= get_field("texto_1_jornada") ?>
        </h3>

        <p class="texto-2">
            <strong><?= get_field("texto_2_jornada") ?></strong>
        </p>


        <div class="card">
            <img src="<?= get_field("imagem_card_1_jornada")['url'] ?>" alt="<?= get_field("imagem_card_1_jornada")['alt'] ?>">
            <div>
                <p class="card-texto-1"><?= get_field("texto_1_card_jornada_1") ?></p>
                <p class="card-texto-2"><?= get_field("texto_2_card_jornada_1") ?></p>
            </div>
        </div>
        <div class="card card-2">
            <img src="<?= get_field("imagem_card_2_jornada")['url'] ?>" alt="<?= get_field("imagem_card_2_jornada")['alt'] ?>">
            <div>
                <p class="card-texto-1"><?= get_field("texto_1_card_jornada_2") ?> <span><?= get_field("texto_2_card_jornada_2") ?></span></p>
            </div>
        </div>


        <a href="<?= get_field("link_botao_fale_conosco")?>" class="placa-cargo">
            <img src="<?= get_template_directory_uri() . '/images/phone.svg' ?>" alt=""> <?= get_field('texto_botao_header')?>
        </a>
        <div class="selos">
            <img src="<?= get_template_directory_uri() . '/images/Security.png' ?>" alt="Icone de seguranca">
        </div>
    </div>
</section>