<?php
/**
 * Template Name: Контакты
 */
?>
<?php get_header();?>
<main class="main">
    <section class="contact">
        <div class="container">
            <div class="contact-block" style="background: url('<?php the_field('stranicza_kontaktov_izobrazhenie');?>') no-repeat;">
                <div class="contact-block__inner">
                    <div class="contact-block__info">
                        <h1 class="contact-block__info-title title-page">
                          <?php the_field('stranicza_kontaktov_zagolovok');?>
                        </h1>
                        <div class="contact-block__info-text">
                            <?php the_field('stranicza_kontaktov_podzagolovok');?>
                        </div>
                    </div>

                    <div class="contact-block__consultation">
                        <div class="contact-block__form">
                           <?php echo do_shortcode('[contact-form-7 id="1aade6c" title="Контакты"]')?>
                        </div>
                    </div>
                </div>
              
            </div>

             <div class="contact__title title-page">Контакты</div>
            <div class="contact-box">
                <div class="contact-box__info">
                    <div class="contact-box__item">
                        <div class="contact-box__item-img">
                            <img src="<?php echo get_template_directory_uri()?>/assets/images/phone-solid.svg" alt="img">
                        </div>
                        <a href="tel: <?php the_field('stranicza_kontaktov_telefon_ssylka');?>" class="contact-box__item-text contact-box__item-text--hover">
                            <?php the_field('stranicza_kontaktov_telefon');?>
                        </a>
                    </div>
                    <div class="contact-box__item">
                        <div class="contact-box__item-img">
                            <img src="<?php echo get_template_directory_uri()?>/assets/images/envelope.svg" alt="img">
                        </div>
                        <a href="mailto:<?php the_field('stranicza_kontaktov_pochta');?>" class="contact-box__item-text contact-box__item-text--hover">
                            <?php the_field('stranicza_kontaktov_pochta');?>
                        </a>
                    </div>
                    <div class="contact-box__item">
                        <div class="contact-box__item-img">
                            <img src="<?php echo get_template_directory_uri()?>/assets/images/address.svg" alt="img">
                        </div>
                        <div class="contact-box__item-text">
                            <?php the_field('stranicza_kontaktov_adres');?>
                        </div>
                    </div>
                    <div class="contact-box__item">
                        <div class="contact-box__item-img">
                            <img src="<?php echo get_template_directory_uri()?>/assets/images/clock.svg" alt="img">
                        </div>
                        <div class="contact-box__item-text">
                        <?php the_field('stranicza_kontaktov_tekst');?>
                        </div>
                    </div>

                    <div class="contact-box__bottom">
                        <?php the_field('stranicza_kontaktov_vremya');?>
                    </div>
                </div>

                <div class="contact-box__map">
                    <iframe class="contact-box__map-iframe" src="https://yandex.ru/map-widget/v1/?um=constructor%3A81d72b124c80047023703f342f1bc2d8e35eebfb4a45f29234d3e8e2bd7aba95&amp;source=constructor"frameborder="0"scroll=false></iframe>
                </div>
            </div> 
        </div>
    </section>
</main>
<?php get_footer();?>