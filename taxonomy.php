<?php get_header();?>
<main class="main">
    <div class="container">
    <div class="blog-block blog-block__taxonomy">
                <?php if(have_posts()) : while(have_posts()) : the_post()?>
                <div class="blog-block__item">
                    <div class="blog-block__item-info">Мнения</div>
                    <div class="blog-block__item-title">
                       <?php the_title();?>
                    </div>
                    <div class="blog-block__item-date">
                      <?php the_time('j F Y')?>
                    </div>
                    <div class="blog-block__item-text">
                       <?php the_excerpt()?>
                    </div>
                    <a href="<?php the_permalink();?>" class="blog-block__item-btn">УЗнать больше </a>
                </div>
                <?php endwhile; endif;?>
                <?php wp_reset_postdata();?>
            </div>
    </div>
</main>

<?php get_footer();?>