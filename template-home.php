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
           <h1 class="future-block__title title-page">Будьте спокойны за свое будущее</h1> 
          
           <div class="future-block__text">Добьёмся. Решим. Объясним.</div> 
           <div class="future-block__btn">
            <button class="future-block__btn-link future-block__btn-link--left">Консультация адвоката</button>
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
            <div class="future-block__item">
              <div class="future-block__item-top">
                <div class="future-block__item-img">
                  <img src="./images/home/home-icon-1.svg" alt="img">
                </div>
                <div class="future-block__item-title">Опыт</div>
              </div>
              <div class="future-block__item-text">
                Более 12 лет практики, 29 городов, все инстанции, включая Верховный суд РФ и ЕСПЧ.
              </div>
            </div>
            <div class="future-block__item">
              <div class="future-block__item-top">
                <div class="future-block__item-img">
                  <img src="./images/home/home-icon-2.svg" alt="img">
                </div>
                <div class="future-block__item-title">Честность</div>
              </div>
              <div class="future-block__item-text">
                Перспектива 100% дел неоднозначна. Выбирайте: бороться или сдаться.
              </div>
            </div>
            <div class="future-block__item">
              <div class="future-block__item-top">
                <div class="future-block__item-img">
                  <img src="./images/home/home-icon-3.svg" alt="img">
                </div>
                <div class="future-block__item-title">Безопасность</div>
              </div>
              <div class="future-block__item-text">
                Никакого мелкого шрифта. Оплата частями. Передумаете - вернём деньги.
              </div>
            </div>
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
                'parent' => 0 //id родительской категории
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
                          'posts_per_page' => '5',
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

 
    
    <section class="category category-home">
        <div class="container">
            <h1 class="category__title title-page">Услуги</h1>
           
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
            <div class="category-block">
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
                        $category_image = get_field('izobrazhenie_rubriki', $cat)
                        ?>
                   
                        <?php if ($query->have_posts()) : ?>
                            <div class="category-block__item">
                                <div class="category-block__wrraper">
                                    <div class="category-block__item-icon">
                                    <img src="<?php echo $category_image?>" alt="img">
                                    </div>
                                    <a href="" class="category-block__item-title">
                                    <?php echo $cat->name; ?>
                                    </a>
                                </div>
                            <?php while ($query->have_posts()) : $query->the_post(); ?>
                                <div class="category-block__list">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </div>   
                            <?php endwhile; endif; wp_reset_postdata(); ?>
                            </div>
                            <?php 
                            
                                }
                            }
                            
                        ?>
                    
            </div>
              
            </div>
    </section> 

               
                                 
                  

  
   
    <div class="block">
      <div class="container">
        <div class="footer__top">
          <div class="footer__top-item">
          <a href="#">Консультации</a>
          </div>
          <div class="footer__top-item">
          <a href="#">Договоры</a>
          </div>
          <div class="footer__top-item">
          <a href="#">Суды</a>
          </div>
          <div class="footer__top-item">
          <a href="#">Обслуживание</a>
          </div>
        </div>
      </div>
    </div>
   
    <div class="advocate-home">
      <div class="container">
        <div class="advocate-block">
          <div class="advocate-block__inner">
              <div class="advocate-block__img">
                  <img src="./images/advocate/advocate-img.png" alt="img">
              </div>

              <div class="advocate-block__content">
                  <div class="advocate-block__content-subtitle">[Адвокат]</div>
                  <h1 class="advocate-block__content-title">
                      Дроботов Станислав Александрович
                  </h1>
                  <a href="#" class="advocate-block__content-blog">Блог</a>

                  <div class="advocate-block__social">
                      <a href="tel:+79522870897" class="advocate-block__social-link tel">
                          +7 (952) 287-08 97
                      </a>
                      <a href="mailto:stanislav@drobotov.net" class="advocate-block__social-link email">
                          stanislav@drobotov.net
                      </a>
                  </div>

                  <div class="advocate-block__subtitle">[Юридическая практика с 2010 года]</div>
                  <div class="advocate-block__info">
                     <div class="advocate-block__info-text">
                      Статус адвоката с 2013 года
                     </div>
                     <div class="advocate-block__info-text">
                      Дипломы специалиста и магистра права
                     </div>
                     <div class="advocate-block__info-text">
                      Член ГЭК СПбГЭУ
                     </div>
                     <div class="advocate-block__info-text">
                      Аккредитован Минюстом РФ в качестве эксперта, уполномоченного на проведение независимой антикоррупционной экспертизы нормативных правовых актов
                     </div>
                     <div class="advocate-block__info-text">
                      Гордость юридического факультета СПбГУ 13
                     </div>
                     <div class="advocate-block__info-text">
                      Член Ассоциации выпускников СПбГУ
                     </div>
                  </div>
                  <div class="advocate-block__subtitle">[Представлял интересы:]</div>

                  <div class="advocate-block__interest">
                      <div class="advocate-block__interest-item">
                          <img src="./images/advocate/interests-1.png" alt="img">
                      </div>
                      <div class="advocate-block__interest-item">
                          <img src="./images/advocate/interests-2.png" alt="img">
                      </div>
                      <div class="advocate-block__interest-item">
                          <img src="./images/advocate/interests-3.png" alt="img">
                      </div>
                      <div class="advocate-block__interest-item">
                          <img src="./images/advocate/interests-4.png" alt="img">
                      </div>
                      <div class="advocate-block__interest-item">
                          <img src="./images/advocate/interests-5.png" alt="img">
                      </div>
                  </div>
              </div>
          </div>
      </div>
      </div>
    </div>

    <!-- <div class="card">
      <div class="achievements">
        <div class="container">
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
        </div>
      
          <div class="achievements-block">
            <div class="achievements-block__item">
              <div class="achievements-block__item-text">
                Защитили стратегическое предприятие стоимостью более 
                2 000 000 000 рублей
              </div>
            </div>
            <div class="achievements-block__item">
              <div class="achievements-block__item-text">
                Выиграли дело на сумму более 429 000 000 рублей
              </div>
            </div>
            <div class="achievements-block__item">
              <div class="achievements-block__item-text">
                Защитили директора от субсидиарной ответственности на сумму более 170 000 000 рублей
              </div>
            </div>
            <div class="achievements-block__item">
              <div class="achievements-block__item-text">
                Взыскали более 12 000 000 рублей убытков с арбитражного управляющего
              </div>
            </div>
            <div class="achievements-block__item">
              <div class="achievements-block__item-text">
                Защитили стратегическое предприятие стоимостью более 
                2 000 000 000 рублей
              </div>
            </div>
            <div class="achievements-block__item">
              <div class="achievements-block__item-text">
                Выиграли дело на сумму более 429 000 000 рублей
              </div>
            </div>
          </div>
       
      </div>

      <div class="affairs">
        <div class="container">
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
        </div>
       
        <div class="affairs-block">
          <div class="affairs-block__item">
            <div class="affairs-block__item-title">
              [Дело № А56-16366/2014]
            </div>
            <div class="affairs-block__item-text">
              Взыскано 994 500 руб. 00 коп., из них: 849 600 руб. 00 коп. задолженности и 144 900 руб. 00 коп. неустойки, а также 22 890 руб. 00 коп. расходов по оплате государственной пошлины и 25 000 руб. 00 коп. расходов на оплату услуг представителя.
            </div>
          </div>
          <div class="affairs-block__item">
            <div class="affairs-block__item-title">
              [Дело № А56-22336/2013]
            </div>
            <div class="affairs-block__item-text">
              Взыскано 537 523 руб. 40 коп. долга, 29 446 руб. 01 коп. неустойки, 25 000 руб. судебных издержек, а также 14 339 руб. 38 коп. государственной пошлины по иску.
            </div>
          </div>
          <div class="affairs-block__item">
            <div class="affairs-block__item-title">
              [Дело № А40-165335/2012]
            </div>
            <div class="affairs-block__item-text">
              Взыскано 4 102 546 руб. 81 коп. (Четыре миллиона сто две тысячи пятьсот сорок шесть рублей восемьдесят одна копейка) – задолженности, 901 620 руб. 13 коп. (Девятьсот одна тысяча шестьсот двадцать рублей тринадцать копеек) – процентов за пользование чужими денежными средствами, 13 066 руб. 
            </div>
          </div>
          <div class="affairs-block__item">
            <div class="affairs-block__item-title">
              [Дело № А56-16366/2014]
            </div>
            <div class="affairs-block__item-text">
              Взыскано 994 500 руб. 00 коп., из них: 849 600 руб. 00 коп. задолженности и 144 900 руб. 00 коп. неустойки, а также 22 890 руб. 00 коп. расходов по оплате государственной пошлины и 25 000 руб. 00 коп. расходов на оплату услуг представителя.
            </div>
          </div>
          <div class="affairs-block__item">
            <div class="affairs-block__item-title">
              [Дело № А56-22336/2013]
            </div>
            <div class="affairs-block__item-text">
              Взыскано 537 523 руб. 40 коп. долга, 29 446 руб. 01 коп. неустойки, 25 000 руб. судебных издержек, а также 14 339 руб. 38 коп. государственной пошлины по иску.
            </div>
          </div>
         
        </div>
      </div>

      <div class="container">
        <div class="card-box">
          <div class="card-box__title">
            [На сайте представлены не все успешные дела. Количество успешных дел постоянно пополняется]
          </div>
          <a href="#" class="card-box__btn">Смотреть больше дел</a>
        </div>
      </div>
       
    </div> -->

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
            <div class="achievements-block__item">
              <div class="achievements-block__item-text">
                Защитили стратегическое предприятие стоимостью более 
                2 000 000 000 рублей
              </div>
            </div>
            <div class="achievements-block__item">
              <div class="achievements-block__item-text">
                Выиграли дело на сумму более 429 000 000 рублей
              </div>
            </div>
            <div class="achievements-block__item">
              <div class="achievements-block__item-text">
                Защитили директора от субсидиарной ответственности на сумму более 170 000 000 рублей
              </div>
            </div>
            <div class="achievements-block__item">
              <div class="achievements-block__item-text">
                Взыскали более 12 000 000 рублей убытков с арбитражного управляющего
              </div>
            </div>
            <div class="achievements-block__item">
              <div class="achievements-block__item-text">
                Защитили стратегическое предприятие стоимостью более 
                2 000 000 000 рублей
              </div>
            </div>
    
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
          <div class="affairs-block__item">
            <div class="affairs-block__item-title">
              [Дело № А56-16366/2014]
            </div>
            <div class="affairs-block__item-text">
              Взыскано 994 500 руб. 00 коп., из них: 849 600 руб. 00 коп. задолженности и 144 900 руб. 00 коп. неустойки, а также 22 890 руб. 00 коп. расходов по оплате государственной пошлины и 25 000 руб. 00 коп. расходов на оплату услуг представителя.
            </div>
          </div>
          <div class="affairs-block__item">
            <div class="affairs-block__item-title">
              [Дело № А56-22336/2013]
            </div>
            <div class="affairs-block__item-text">
              Взыскано 537 523 руб. 40 коп. долга, 29 446 руб. 01 коп. неустойки, 25 000 руб. судебных издержек, а также 14 339 руб. 38 коп. государственной пошлины по иску.
            </div>
          </div>
          <div class="affairs-block__item">
            <div class="affairs-block__item-title">
              [Дело № А40-165335/2012]
            </div>
            <div class="affairs-block__item-text">
              Взыскано 4 102 546 руб. 81 коп. (Четыре миллиона сто две тысячи пятьсот сорок шесть рублей восемьдесят одна копейка) – задолженности, 901 620 руб. 13 коп. (Девятьсот одна тысяча шестьсот двадцать рублей тринадцать копеек) – процентов за пользование чужими денежными средствами, 13 066 руб. 
            </div>
          </div>
          <div class="affairs-block__item">
            <div class="affairs-block__item-title">
              [Дело № А56-16366/2014]
            </div>
            <div class="affairs-block__item-text">
              Взыскано 994 500 руб. 00 коп., из них: 849 600 руб. 00 коп. задолженности и 144 900 руб. 00 коп. неустойки, а также 22 890 руб. 00 коп. расходов по оплате государственной пошлины и 25 000 руб. 00 коп. расходов на оплату услуг представителя.
            </div>
          </div>
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
              <a href="#" class="consultation-block__center-link">Записаться на консультацию</a>
            </div>

            <div class="consultation-block__item">
              <a href="#" class="consultation-block__item-social">
                <img src="./images/phone-solid.svg" alt="img">
              </a>
              <a href="#" class="consultation-block__item-social">
                <img src="./images/envelope.svg" alt="img">
              </a>
              <a href="#" class="consultation-block__item-social">
                <img src="./images/whatsapp.svg" alt="img">
              </a>
            </div>
          </div>
        </div>
    </div>

  </main>
  
<?php get_footer();?>