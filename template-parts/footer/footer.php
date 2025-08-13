<div class="container">
    <div class="container-conteudo">
        <img class="logo-footer" src="<?= get_template_directory_uri() . '/images/LOGO BRANCO 4.png' ?>" alt="">
        <?php
        wp_nav_menu([
            'theme_location' => 'nav-footer'
        ]);
        ?>

        <div class="mapa-container">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.6194801587394!2d-46.577127100000006!3d-23.5461848!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5f4adedb51c7%3A0x16d2793018bb5d08!2sVeritas%20Hub!5e0!3m2!1spt-BR!2sbr!4v1755091696826!5m2!1spt-BR!2sbr"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>

            <div class="redes-sociais">
                <a href="<?= get_field("link_facebook") ?>"><img class=""
                        src="<?= get_template_directory_uri() . '/images/redes-sociais/Facebook.svg' ?>"
                        alt="Logo Facebook"></a>
                <a href="<?= get_field("link_linkedin") ?>"><img class=""
                        src="<?= get_template_directory_uri() . '/images/redes-sociais/Linkedin.svg' ?>"
                        alt="Logo Linkedin"></a>
                <a href="<?= get_field("link_instagram") ?>"><img class=""
                        src="<?= get_template_directory_uri() . '/images/redes-sociais/Instagram.svg' ?>"
                        alt="Logo Instagram"></a>
                <a href="<?= get_field("link_youtube") ?>"><img class=""
                        src="<?= get_template_directory_uri() . '/images/redes-sociais/Youtube.svg' ?>"
                        alt="Logo Youtube"></a>
            </div>
        </div>
    </div>
    <p class="name-rights">© 2025 Veritas Consultoria | Veritas Prev, CNPJ: 27.307.965/0001-88, Rua Bom Sucesso, 745 -
        Cidade Mãe do Céu,
        São Paulo - SP, 03305-000</p>
</div>