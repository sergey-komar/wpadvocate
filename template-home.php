<?php
/**
 * Template Name: Главная
 */
?>
<?php get_header();?>

  <main class="main">
  
    <section class="future">
      <div class="container">
        <div class="future-block">
           <h1 class="future-block__title title-page">
           <?php the_field('glavnaya_stranicza_pervyj_blok_zagolovok');?>
           </h1> 
          
           <div class="future-block__text">
           <?php the_field('glavnaya_stranicza_pervyj_blok_podzagolovok');?>
           </div> 
           <div class="future-block__btn">
            <button class="future-block__btn-link future-block__btn-link--left btn-click">Консультация адвоката</button>
            <button class="future-block__btn-link future-block__btn-link--right">Бесплатные советы</button>
          </div>
        
          <div class="affairs__line">
            <svg xmlns="http://www.w3.org/2000/svg" width="782" height="2" viewBox="0 0 782 2" fill="none">
              <path d="M1 1L781 1.00007" stroke="url(#paint0_linear_304_1474)" stroke-width="1.5" stroke-linecap="round"/>
              <defs>
              <linearGradient id="paint0_linear_304_1474" x1="1" y1="1.9936" x2="781" y2="1.61502" gradientUnits="userSpaceOnUse">
              <stop stop-color="#818181" stop-opacity="0"/>
              <stop offset="0.489583" stop-color="#818181"/>
              <stop offset="1" stop-color="#818181" stop-opacity="0"/>
              </linearGradient>
              </defs>
            </svg>
          </div>
          <div class="future-block__card">
            <?php if(have_rows('glavnaya_stranicza_pervyj_blok_kartochka')) : while(have_rows('glavnaya_stranicza_pervyj_blok_kartochka')) : the_row();?>
            <div class="future-block__item">
              <div class="future-block__item-top">
                <div class="future-block__item-img">
                  <img src="<?php the_sub_field('glavnaya_stranicza_pervyj_blok_kartochka_ikonka');?>" alt="img">
                </div>
                <div class="future-block__item-title">
                <?php the_sub_field('glavnaya_stranicza_pervyj_blok_kartochka_zagolovok');?>
                </div>
              </div>
              <div class="future-block__item-text">
              <?php the_sub_field('glavnaya_stranicza_pervyj_blok_kartochka_tekst');?>
              </div>
            </div>
           <?php endwhile; endif;?>
          </div> 
        </div>

         <a href="tel:88129870897" class="debts__mobile-btn btn">
          8 (812) 987-08-97
        </a> 
      </div>
    </section>
 
    <section class="category category-home">
      <div class="container">
          <h1 class="category__title title-page">Услуги</h1>
          <?php
            $services_terms = get_terms([
                'taxonomy' => 'category',
                'orderby' => 'id',// здесь по какому полю сортировать
                'hide_empty' => false,// скрывать категории без записей или нет
                'parent' => 0, //id родительской категории
                'number' => 8
            ])
          ?>
          <div class="category-block">
        

            <?php foreach( $services_terms as $servis_term) :?>
              <div class="category-block__item">
                <div class="category-block__wrraper">
                    <div class="category-block__item-icon">

                  <!-- ВЫВОДИМ ИЗОБРАЖЕНИЕ КАТЕГОРИИ ЧЕРЕЗ ACF -->
                <?php $category_image = get_field('izobrazhenie_rubriki', $servis_term)?>
                      <img src="<?php echo $category_image?>" alt="img">

                  </div>
                  <a href="<?php echo get_term_link($servis_term);?>" class="category-block__item-title">
                    <?php echo  $servis_term->name;?>
                  </a>
                </div>
              

                  <ul class="category-block__list">
                      <?php
                      global $post;
                      $articles = new WP_Query([
                          'post_type' => 'post',
                          'posts_per_page' => 6,
                          'cat' => $servis_term->term_taxonomy_id
                      ])
                      
                      ?>
                    <?php if($articles->have_posts()) : while($articles->have_posts()) : $articles->the_post();?>
                          <a href="<?php the_permalink();?>" class="category-block__list-item">
                            <?php the_title();?>
                          </a>
                    <?php endwhile; endif;?>
                    <?php wp_reset_postdata();?>
                  </ul>
              </div>
                    <?php endforeach;?>
          </div>
      </div>
    </section>
   
    <div class="block">
      <div class="container">
        <div class="footer__top">
          <?php
            $activity_services = new WP_Query([
              'post_type' => 'activity',
              'posts_per_page' => 6
            ])
          ?>
          <?php if($activity_services->have_posts()) : while($activity_services->have_posts()) : $activity_services->the_post();?>
          <div class="footer__top-item">
            <a href="<?php the_permalink();?>">
             <?php the_title();?>
            </a>
          </div>
         <?php endwhile; endif;?>
         <?php wp_reset_postdata();?>
        </div>
      </div>
    </div>
   
  <div class="advocate-home">
    <div class="container">
      <div class="advocate-block">
          <div class="advocate-block__inner">
              <div class="advocate-block__img">
                  <img src="<?php the_field('glavnaya_advokat_izobrazhenie');?>" alt="img">
              </div>

              <div class="advocate-block__content">
                  <div class="advocate-block__content-subtitle">[Адвокат]</div>
                  <h1 class="advocate-block__content-title">
                      <?php the_field('glavnaya_advokat_zagolovok');?>
                  </h1>
                  <div class="advocate-block__content-text--home">
                  <?php the_field('glavnaya_advokat_tekst');?>
                  </div>
                  <a href=" <?php the_field('advokat_blog');?>" class="advocate-block__content-blog">Блог</a>

                

                  <div class="advocate-block__subtitle">
                      <?php the_field('glavnaya_advokat_podzagolovok');?>
                  </div>
                  <div class="advocate-block__info">
                      <?php if(have_rows('glavnaya_advokat_spisok')) : while(have_rows('glavnaya_advokat_spisok')) : the_row();?>
                      <div class="advocate-block__info-text">
                      <?php the_sub_field('glavnaya_advokat_spisok_tekst');?>
                      </div>
                      <?php endwhile; endif;?>
                  </div>


                  <div class="advocate-block__subtitle">
                  <?php the_field('glavnaya_advokat_interesy');?>
                  </div>

                  <div class="advocate-block__interest">
                      <?php if(have_rows('glavnaya_advokat_interesy_spisok')) : while(have_rows('glavnaya_advokat_interesy_spisok')) : the_row();?>
                      <div class="advocate-block__interest-item">
                          <img src="<?php the_sub_field('glavnaya_advokat_interesy_kartinka');?>" alt="img">
                      </div>
                      <?php endwhile; endif;?>
                  </div>
              </div>
          </div>
      </div>
    </div>
  </div>
   

    <div class="card">

      <div class="container">
        <div class="achievements">
          <div class="achievements__title">Достижения</div>
          <div class="affairs__line">
            <svg xmlns="http://www.w3.org/2000/svg" width="782" height="2" viewBox="0 0 782 2" fill="none">
              <path d="M1 1L781 1.00007" stroke="url(#paint0_linear_304_1474)" stroke-width="1.5" stroke-linecap="round"/>
              <defs>
              <linearGradient id="paint0_linear_304_1474" x1="1" y1="1.9936" x2="781" y2="1.61502" gradientUnits="userSpaceOnUse">
              <stop stop-color="#818181" stop-opacity="0"/>
              <stop offset="0.489583" stop-color="#818181"/>
              <stop offset="1" stop-color="#818181" stop-opacity="0"/>
              </linearGradient>
              </defs>
            </svg>
          </div>
       
      
          <div class="achievements-block">
            <?php if(have_rows('glavnaya_dostizheniya_spisok')) : while(have_rows('glavnaya_dostizheniya_spisok')) : the_row();?>
            <div class="achievements-block__item">
              <div class="achievements-block__item-text">
              <?php the_sub_field('glavnaya_dostizheniya_spisok_tekst');?>
              </div>
            </div>
            <?php endwhile; endif;?>
          </div>
       
      </div>

      <div class="affairs">
       
          <div class="affairs__title">Выигранные дела</div>
          <div class="affairs__line">
            <svg xmlns="http://www.w3.org/2000/svg" width="782" height="2" viewBox="0 0 782 2" fill="none">
              <path d="M1 1L781 1.00007" stroke="url(#paint0_linear_304_1474)" stroke-width="1.5" stroke-linecap="round"/>
              <defs>
              <linearGradient id="paint0_linear_304_1474" x1="1" y1="1.9936" x2="781" y2="1.61502" gradientUnits="userSpaceOnUse">
              <stop stop-color="#818181" stop-opacity="0"/>
              <stop offset="0.489583" stop-color="#818181"/>
              <stop offset="1" stop-color="#818181" stop-opacity="0"/>
              </linearGradient>
              </defs>
            </svg>
          </div>
        
       
        <div class="affairs-block">
          <?php if(have_rows('vyigrannye_dela_spisok')) : while(have_rows('vyigrannye_dela_spisok')) : the_row();?>
          <div class="affairs-block__item">
            <div class="affairs-block__item-title">
            <?php the_sub_field('vyigrannye_dela_spisok_zagolovok');?>
            </div>
            <div class="affairs-block__item-text">
            <?php the_sub_field('vyigrannye_dela_spisok_tekst');?>
            </div>
          </div>
          <?php endwhile; endif;?>
        </div>
      </div>

      
        <div class="card-box">
          <div class="card-box__title">
            [На сайте представлены не все успешные дела. Количество успешных дел постоянно пополняется]
          </div>
          <a href="#" class="card-box__btn">Смотреть больше дел</a>
        </div>
      </div>
    
    </div>
    
    <div class="advocate-thanks-home">
      <div class="container">
        <div class="advocate-thanks">
          <h3 class="advocate-thanks__title">Благодарности</h3>
          <div class="advocate-thanks__tabs">
              <div class="advocate-thanks__inner">
                  
                  <div class="advocate-thanks__item advocate-thanks__item--active">
                      Совет муниципальных образований Санкт-Петербурга
                      <div class="advocate-thanks__wrapper">
                          <div class="advocate-thanks__item-text"> [Грамота]</div>
                          <a href="#" class="advocate-thanks__item-link"></a>
                      </div>
                  </div>
                  <div class="advocate-thanks__item">
                      Вторая Петербургская Конференция “Бизнес-Право 20/19”
                      <div class="advocate-thanks__wrapper">
                          <div class="advocate-thanks__item-text">[Сертификат участника]</div>
                          <a href="#" class="advocate-thanks__item-link"></a>
                      </div>
                  </div>
                  <div class="advocate-thanks__item">
                      КПК “ПрофСвязь”
                      <div class="advocate-thanks__wrapper">
                          <div class="advocate-thanks__item-text">[Благодарность]</div>
                          <a href="#" class="advocate-thanks__item-link"></a>
                      </div>
                  </div>
                  <div class="advocate-thanks__item">
                      “Автодом” Пулково
                      <div class="advocate-thanks__wrapper">
                          <div class="advocate-thanks__item-text">[Благодарность]</div>
                          <a href="#" class="advocate-thanks__item-link"></a>
                      </div>
                  </div>
                  <div class="advocate-thanks__item">
                          МО Лебяженское городское поселение
                      <div class="advocate-thanks__wrapper">
                          <div class="advocate-thanks__item-text">[Благодарность]</div>
                          <a href="#" class="advocate-thanks__item-link"></a>
                      </div>   
                  </div>
                  <div class="advocate-thanks__item">
                          МО Южно-Приморский
                      <div class="advocate-thanks__wrapper">
                          <div class="advocate-thanks__item-text">[Благодарность]</div>
                          <a href="#" class="advocate-thanks__item-link"></a>
                      </div>
                  </div>
                  <div class="advocate-thanks__item">
                          АО “ЛексКледере консалтинг”
                      <div class="advocate-thanks__wrapper">
                          <div class="advocate-thanks__item-text">[Рекомендация]</div>
                          <a href="#" class="advocate-thanks__item-link"></a>
                      </div>
                  </div>
              </div>
             
              <div class="advocate-thanks__content">
                  <div class="advocate-thanks__content-img">
                      <img src="./images/advocate/sertificate.png" alt="">
                  </div>
                  <div class="advocate-thanks__content-img">
                      <img src="./images/advocate/blagodarnosti.png" alt="">
                  </div>
                  <div class="advocate-thanks__content-img">
                      <img src="./images/advocate/sertificate.png" alt="">
                  </div>
                  <div class="advocate-thanks__content-img">
                      <img src="./images/advocate/blagodarnosti.png" alt="">
                  </div>
                  <div class="advocate-thanks__content-img">
                      <img src="./images/advocate/sertificate.png" alt="">
                  </div>
                  <div class="advocate-thanks__content-img">
                      <img src="./images/advocate/blagodarnosti.png" alt="">
                  </div>
                  <div class="advocate-thanks__content-img">
                      <img src="./images/advocate/sertificate.png" alt="">
                  </div>
              </div>
          </div>
      </div>
      </div>
    </div>

    <section class="order">
      <div class="container">
        <h3 class="order__title title">Порядок работы</h3>
        <div class="order__top">
          <a href="#" class="order__top-btn">Сроки</a>
          <a href="#" class="order__top-btn">Цены</a>
        </div>

        <div class="order-block">

          <div class="order-block__item order-block__item-one">
            <div class="order-block__item-number">1</div>
            <div class="order-block__content">
              <div class="order-block__wrapper">
                <div class="order-block__content-img">
                  <img src="./images/home/home-icon-4.svg" alt="img">
                </div>
                <div class="order-block__content-name">Обращение</div>
              </div>
             
              <div class="order-block__content-text">
                Познакомимся, определим задачи, варианты и сроки их решения. Если условия вас устроят - подпишем соглашение, консультация в этом случае бесплатна
              </div>
            </div>
          </div>

          <div class="order-block__item order-block__item-two">
            <div class="order-block__item-number">2</div>
            <div class="order-block__content">
              <div class="order-block__wrapper">
                <div class="order-block__content-img">
                  <img src="./images/home/home-icon-5.svg" alt="img">
                </div>
                <div class="order-block__content-name">Работа</div>
              </div>
            
              <div class="order-block__content-text">
                Пока мы выполянем работу по делу исходя из предоставленных необходимых сведений и документов, ваше участие сводится к минимиму
              </div>
            </div>
          </div>

          <div class="order-block__item order-block__item-three">
            <div class="order-block__item-number">3</div>
            <div class="order-block__content">
              <div class="order-block__wrapper">
                <div class="order-block__content-img">
                  <img src="./images/home/home-icon-6.svg" alt="img">
                </div>
                <div class="order-block__content-name">Результат</div>
              </div>
            
              <div class="order-block__content-text">
                После вынесения решения, мы извещаем вас о нём, разъясняем порядок его исполнения, можем принять участие в исполнительном производстве
              </div>
            </div>
          </div>
          
          <div class="order-block__img">
            <img src="./images/home-order.png" alt="img">
          </div>
        </div>
      </div>
    </section>
   
    <div class="slider">
      <div class="container">
        <div class="slider__title">Нам доверяют</div>
        <div class="affairs__line">
          <svg xmlns="http://www.w3.org/2000/svg" width="782" height="2" viewBox="0 0 782 2" fill="none">
            <path d="M1 1L781 1.00007" stroke="url(#paint0_linear_304_1474)" stroke-width="1.5" stroke-linecap="round"/>
            <defs>
            <linearGradient id="paint0_linear_304_1474" x1="1" y1="1.9936" x2="781" y2="1.61502" gradientUnits="userSpaceOnUse">
            <stop stop-color="#818181" stop-opacity="0"/>
            <stop offset="0.489583" stop-color="#818181"/>
            <stop offset="1" stop-color="#818181" stop-opacity="0"/>
            </linearGradient>
            </defs>
          </svg>
        </div>
      </div>
        <div class="slider-top">
          <div class="slider-top__inner">
            <div class="slider-top__wrapper">
              <div class="slider-top__item">
                <img src="./images/home/slider-1.png" alt="img">
              </div>
            </div>
            <div class="slider-top__wrapper">
              <div class="slider-top__item">
                <img src="./images/home/slider-2.png" alt="img">
              </div>
            </div>
            <div class="slider-top__wrapper">
              <div class="slider-top__item">
                <img src="./images/home/slider-3.png" alt="img">
              </div>
            </div>
            <div class="slider-top__wrapper">
              <div class="slider-top__item">
                <img src="./images/home/slider-4.png" alt="img">
              </div>
            </div>
          </div>
        </div>
     
        <div class="slider-bottom">
          <div class="slider-bottom__inner" dir="rtl">
            <div class="slider-bottom__wrapper">
              <div class="slider-bottom__item">
                <img src="./images/home/slider-4.png" alt="img">
              </div>
            </div>
            <div class="slider-bottom__wrapper">
              <div class="slider-bottom__item">
                <img src="./images/home/slider-3.png" alt="img">
              </div>
            </div>
            <div class="slider-bottom__wrapper">
              <div class="slider-bottom__item">
                <img src="./images/home/slider-2.png" alt="img">
              </div>
            </div>
            <div class="slider-bottom__wrapper">
              <div class="slider-bottom__item">
                <img src="./images/home/slider-1.png" alt="img">
              </div>
            </div>
          </div>
        </div>
    </div>
 
    <div class="consultation">
        <div class="container">
          <div class="consultation-block">
            <div class="consultation-block__item"></div>

            <div class="consultation-block__center">
              <div class="consultation-block__center-title">Консультация адвоката</div>
              <p class="consultation-block__center-text">
                У нас богатый опыт по защите прав и интересов взыскателя (кредитора). Обращайтесь - и мы обязательно Вам поможем взыскать задолженность
              </p>
              <button class="consultation-block__center-link btn-click">Записаться на консультацию</button>
            </div>

            <div class="consultation-block__item">
              <a href="#" class="consultation-block__item-social">
                <img src="<?php echo get_template_directory_uri()?>/assets/images/phone-solid.svg" alt="img">
              </a>
              <a href="#" class="consultation-block__item-social">
                <img src="<?php echo get_template_directory_uri()?>/assets/images/envelope.svg" alt="img">
              </a>
              <a href="#" class="consultation-block__item-social">
                <img src="<?php echo get_template_directory_uri()?>/assets/images/whatsapp.svg" alt="img">
              </a>
            </div>
          </div>
        </div>
    </div>

  </main>
  
<?php get_footer();?>