<section id="hero" class="hero">
    <img class="degrade" src="<?= get_template_directory_uri() . '/images/degrade 1.png' ?>" alt="">
    <div class="container">
        <div class="content">
            <img class="" src="<?= get_field("logo_hero")['url'] ?>" alt="<?= get_field("logo_hero")['url'] ?>">
            <h2><?= get_field("titulo_hero") ?></h2>

            <p><?= get_field("subtitulo_hero")?></p>

            <a href="<?= get_field("link_botao_fale_conosco") ?>" class="placa-cargo">
                <img src="<?= get_template_directory_uri() . '/images/phone.svg' ?>" alt="">
                <?= get_field('texto_botao_header') ?>
            </a>
            <div class="selos">
                <img src="<?= get_template_directory_uri() . '/images/Security.png' ?>" alt="Icone de seguranca">
            </div>
        </div>
        <div class="image">
            <img class="hero-image person desktop" src="<?= get_template_directory_uri() . '/images/hero-desk.png' ?>"
                alt="">
        </div>

    </div>
    <img class="hero-image person mobile" src="<?= get_template_directory_uri() . '/images/Group 1707478706 (1).png' ?>"
        alt="">
    <img class="hero-image mobile" src="<?= get_template_directory_uri() . '/images/faixa-mobile.png' ?>" alt="">

    <img class="hero-image desktop" src="<?= get_template_directory_uri() . '/images/faixa-desk.png' ?>" alt="">
</section>