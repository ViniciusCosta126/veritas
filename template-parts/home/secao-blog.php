<section id="blog-section" class="blog-section">
  <div class="container">
    <h2>Confira <strong>nosso Blog</strong></h2>
    <div class="blog-grid">
      <?php
      $args = array(
        'post_type'      => 'post',
        'posts_per_page' => 4,
        'orderby'        => 'date',
        'order'          => 'DESC'
      );
      $query = new WP_Query($args);

      if ($query->have_posts()) :
        $i = 0;
        while ($query->have_posts()) : $query->the_post();
          if ($i === 0) : ?>
            <div class="blog-featured">
              <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('large'); ?>
              </a>
              <div class="blog-content">
                <h3><?php the_title(); ?></h3>
                <a href="<?php the_permalink(); ?>" class="btn">Ler Artigo »</a>
              </div>
            </div>
            <div class="blog-side">
          <?php else : ?>
            <article class="blog-card">
              <div class="blog-image">
                <a href="<?php the_permalink(); ?>">
                  <?php the_post_thumbnail('thumbnail'); ?>
                </a>
              </div>
              <div class="blog-content">
                <h4><?php the_title(); ?></h4>
                <a href="<?php the_permalink(); ?>" class="btn">Ler Artigo »</a>
              </div>
            </article>
          <?php endif;
          $i++;
        endwhile;
        echo '</div>'; // fecha .blog-side
        wp_reset_postdata();
      endif;
      ?>
    </div>
  </div>
</section>
