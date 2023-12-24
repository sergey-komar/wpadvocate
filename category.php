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



    </div>
</main>
<?php get_footer();?>