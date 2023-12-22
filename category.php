<?php get_header();?>
<main class="main">
    <div class="container">
        <?php
        if(is_category()){
            echo '<h1>' . __('Category', 'band_digital') . '</h1><br>' . get_queried_object()->name;
        }
        ?>
      <?php if(is_category()){
            echo '<h1>' . get_queried_object()->name; '</h1>';
        }  ?>


<?php 
$arg_category = array(
'orderby'      => 'name',
'order'        => 'ASC',
'hide_empty'   => 1,
'exclude'      => '',
'include'      => '',
'taxonomy'     => 'category',
);
$categories = get_categories( $arg_category );
?>
<div id="primary" class="content-area">
<main id="main" class="site-main">
<?php
// Start the Loop.
while ( have_posts() ) :
the_post();

endwhile; // End the loop.
?>
            <?php 
                if( $categories ){
                    foreach( $categories as $cat ){
                        
                    $arg_posts =  array(
                        'orderby'      => 'name',
                        'order'        => 'ASC',
                        'posts_per_page' => 3,
                        'post_type' => 'post',
                        'post_status' => 'publish',
                        'cat' => $cat->cat_ID,
                       
                    );
                    $query = new WP_Query($arg_posts);
            
                    ?>
                    <?php if ($query->have_posts() ) ?>
                        <h2><?php echo $cat->name; ?> </h2>
                    <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                                    <div class="post-list">
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </div>
                    <?php endwhile; wp_reset_postdata()?>
                    <?php 
                        }
                    }
?>


    </div>
</main>
<?php get_footer();?>