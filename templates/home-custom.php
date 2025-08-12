<?php
/*
Template Name: Página Home
*/
    get_header();
?>
    <?php
        get_template_part('template-parts/home/onde-atuamos', 'onde-atuamos');
        get_template_part('template-parts/home/quem-somos', 'quem-somos');
        get_template_part('template-parts/home/faq', 'faq');
    ?>
<?php
    get_footer();
?>  