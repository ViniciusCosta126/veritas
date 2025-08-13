<div class="container">
    <img class="logo-mobile" src="<?= get_template_directory_uri() . '/images/logo.png' ?>" alt="">
    <div class="nav-mobile">
        <img src="<?= get_template_directory_uri() . '/images/logo.png' ?>" alt="">
        <?php
        wp_nav_menu(['theme_location' => 'nav-header']);
        ?>

        <a href="<?= get_field("link_botao_fale_conosco")?>" class="placa-cargo">
            <img src="<?= get_template_directory_uri() . '/images/phone.svg' ?>" alt=""> <?= get_field('texto_botao_header')?>
        </a>
        <div class="btn-close">X</div>
    </div>
    <div class="btn-hamburguer">
        <span></span>
        <span></span>
        <span></span>
    </div>


    <div class="nav-desktop">
        <?php
        wp_nav_menu(['theme_location' => 'nav-header']);
        ?>

        <a href="<?= get_field("link_botao_fale_conosco")?>" class="placa-cargo">
            <img src="<?= get_template_directory_uri() . '/images/phone.svg' ?>" alt=""> <?= get_field('texto_botao_header')?>
        </a>
    </div>
</div>