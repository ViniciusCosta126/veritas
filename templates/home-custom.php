<?php
/*
Template Name: Página Home
*/
get_header();
?>
    <?php
        get_template_part('template-parts/home/hero-home', 'hero-home');
        get_template_part('template-parts/home/jornada', 'jornada');
        get_template_part('template-parts/home/onde-atuamos', 'onde-atuamos');
        get_template_part('template-parts/home/quem-somos', 'quem-somos');
        get_template_part('template-parts/home/secao-blog', 'secao-blog');
        get_template_part('template-parts/home/faq', 'faq');
        get_template_part('template-parts/home/veritas-midias', 'veritas-midias');
        
    ?>
<?php
get_footer();
?>