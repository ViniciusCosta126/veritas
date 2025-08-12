<section id="onde-atuamos">
    <div class="elipse"></div>
    <img class="brasil-svg" src="<?= get_template_directory_uri() ?>/images/brasil-home.svg" alt="Brasil">
    <div class="container">
        <picture>
            <source media="(max-width: 767px)" srcset="<?= get_field('imagem_lateral_mobile')['url'] ?>">
            <img class="imagem-lateral" src="<?= get_field('imagem_lateral_desktop')['url'] ?>" alt="<?= get_field('imagem_lateral_desktop')['alt'] ?>">
        </picture>
        <div class="conteudo">
            <img class="imagem-logo" src="<?= get_field("logo_veritas")['url']?>" alt="<?= get_field("logo_veritas")['alt']?>">
            <h4 class="titulo"><?= get_field("texto_principal")?></h4>
            <p class="sub-texto"><?= get_field("sub_texto")?></p>
        </div>
    </div>
</section>