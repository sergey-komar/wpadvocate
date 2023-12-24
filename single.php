<?php get_header();?>
<main class="main">
    <div class="container">
        <div class="single-page">
                СТРАНИЦА ЗАПИСИ
            <h1 class="single-page__title"><?php the_title();?></h1>
            <?php the_content();?>
        </div>
    </div>
</main>

<?php get_footer();?>