<?php
/**
 * Template Name: Цены
 */
?>
<?php get_header();?>
<main class="main">
    <section class="price">
        <div class="container">
            <h1 class="price__title title-page">Цены</h1>
            <div class="price-block">
                <div class="price-block__img">
                    <img src="<?php the_field('sostavlyayushhie_kartinka');?>" alt="img">
                </div>
                <div class="price-block__content">
                    <div class="price-block__content-text">
                    <?php the_field('sostavlyayushhie_tekst');?>
                    </div>
                    <div class="price-block__content-info">
                    <?php the_field('sostavlyayushhie_podzagolovo');?>
                    </div>
                    <div class="price-block__content-title">
                    <?php the_field('sostavlyayushhie_zagolovok');?>
                    </div>

                    <div class="price-block__inner">
                        <?php if(have_rows('sostavlyayushhie_spisok')) : while(have_rows('sostavlyayushhie_spisok')) : the_row();?>
                        <div class="price-block__inner-item">
                        <?php the_sub_field('sostavlyayushhie_spisok_tekst');?>
                        </div>
                        <?php endwhile; endif;?>
                    </div>
                </div>
            </div>

          <div class="price__subtitle">
          <?php the_field('primernye_zagolovok');?>
          </div>
            <div class="price-box">
                <?php if(have_rows('primernye_spisok')) : while(have_rows('primernye_spisok')) : the_row();?>
                <div class="price-box__item">
                    <div class="price-box__item-text">
                    <?php the_sub_field('primernye_spisok_tekst');?>
                    </div>
                    <div class="price-box__wrapper">
                        <div class="price-box__item-text">
                        <?php the_sub_field('primernye_spisok_czena');?>
                        </div>
                        <div class="price-box__item-text">
                        <?php the_sub_field('primernye_spisok_vremya');?>
                        </div>
                    </div>
                    
                </div>
                <?php endwhile; endif;?>
            </div>
   
            <div class="price__subtitle">
            <?php the_field('unikalnye_zagolovok');?>
            </div>
            <div class="price__services">
                <?php if(have_rows('unikalnye_spisok')) : while(have_rows('unikalnye_spisok')) : the_row();?>
                <div class="price-box__item">
                    <div class="price-box__item-text">
                    <?php the_sub_field('unikalnye_spisok_tekst');?>
                    </div>
                    <div class="price-box__wrapper">
                        <div class="price-box__item-text">
                        <?php the_sub_field('unikalnye_spisok_czena');?>
                        </div>
                        <div class="price-box__item-text">
                        <?php the_sub_field('unikalnye_spisok_vremya');?>
                        </div>
                    </div>
                </div>
                <?php endwhile; endif;?>
            </div>
          
            <div class="price-info">
                <div class="price-info__title">
                <?php the_field('dopolnitelno_zagolovok');?>
                </div>
                <?php if(have_rows('dopolnitelno_spisok')) : while(have_rows('dopolnitelno_spisok')) : the_row();?>
                <div class="price-info__text">
                <?php the_sub_field('dopolnitelno_tekst');?>
                </div>
                <?php endwhile; endif;?>
            </div> 
        </div>
    </section>
  

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
                <a href="tel:<?php the_field('telefon', 'options');?>" class="consultation-block__item-social">
                    <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9.46734 3.28125C8.89483 3.28125 8.33086 3.48633 7.86089 3.8623L7.79253 3.89648L7.75835 3.93066L4.34038 7.45117L4.37456 7.48535C3.31927 8.45947 2.99456 9.91638 3.45171 11.1768C3.45598 11.1853 3.44744 11.2024 3.45171 11.2109C4.37884 13.8641 6.75005 18.9868 11.3814 23.6182C16.0298 28.2666 21.2209 30.5438 23.7886 31.5479H23.8228C25.1515 31.9922 26.5914 31.676 27.6168 30.7959L31.0689 27.3438C31.9747 26.438 31.9747 24.8657 31.0689 23.96L26.6255 19.5166L26.5914 19.4482C25.6856 18.5425 24.0792 18.5425 23.1734 19.4482L20.9859 21.6357C20.1955 21.2555 18.3113 20.2814 16.5084 18.5596C14.7182 16.8506 13.8039 14.8853 13.4664 14.1162L15.6539 11.9287C16.5724 11.0101 16.5895 9.48059 15.6197 8.5791L15.6539 8.54492L15.5513 8.44238L11.1763 3.93066L11.1421 3.89648L11.0738 3.8623C10.6038 3.48633 10.0398 3.28125 9.46734 3.28125ZM9.46734 5.46875C9.54851 5.46875 9.62969 5.5072 9.70659 5.57129L14.0816 10.0488L14.1841 10.1514C14.1756 10.1428 14.2482 10.2582 14.1158 10.3906L11.3814 13.125L10.8687 13.6035L11.108 14.2871C11.108 14.2871 12.3641 17.6495 15.0044 20.166L15.2437 20.3711C17.7858 22.691 20.7808 23.96 20.7808 23.96L21.4644 24.2676L24.7115 21.0205C24.8995 20.8325 24.8653 20.8325 25.0533 21.0205L29.5308 25.498C29.7188 25.686 29.7188 25.6177 29.5308 25.8057L26.1812 29.1553C25.6771 29.5868 25.143 29.6765 24.5064 29.4629C22.0284 28.4888 17.2133 26.3739 12.9195 22.0801C8.59148 17.7521 6.33135 12.843 5.50249 10.459C5.33587 10.0146 5.4555 9.35669 5.84429 9.02344L5.91265 8.95508L9.22808 5.57129C9.30498 5.5072 9.38616 5.46875 9.46734 5.46875Z" fill="#D4B160"/>
                    </svg>                  
                </a>
                <a href="mailto:<?php the_field('pochta', 'options');?>" class="consultation-block__item-social">
                    <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3.28125 8.75V28.4375H31.7188V8.75H3.28125ZM7.99805 10.9375H27.002L17.5 17.2607L7.99805 10.9375ZM5.46875 11.8945L16.8848 19.5166L17.5 19.8926L18.1152 19.5166L29.5312 11.8945V26.25H5.46875V11.8945Z" fill="#D4B160"/>
                    </svg>                  
                </a>
                <a href="<?php the_field('vatczap', 'options');?>" class="consultation-block__item-social">
                    <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M26.8011 8.2074C24.3317 5.73792 21.0504 4.375 17.5555 4.375C10.3522 4.375 4.48608 10.2368 4.48608 17.4402C4.48181 19.743 5.08423 21.9904 6.22925 23.9728L4.375 30.7446L11.3049 28.9246C13.2105 29.967 15.3638 30.5139 17.5513 30.5182H17.5555C24.7589 30.5182 30.6207 24.6564 30.625 17.4487C30.625 13.9581 29.2664 10.6769 26.8011 8.2074ZM17.5555 28.3093H17.5513C15.603 28.3093 13.689 27.7838 12.0227 26.7969L11.6254 26.5619L7.51099 27.6385L8.60901 23.631L8.35266 23.2208C7.26318 21.4905 6.69067 19.491 6.69067 17.4402C6.69067 11.4545 11.5656 6.58386 17.5598 6.58386C20.4608 6.58386 23.1866 7.71607 25.2374 9.76685C27.2882 11.8219 28.4161 14.5477 28.4161 17.4487C28.4161 23.4387 23.5413 28.3093 17.5555 28.3093ZM23.5114 20.1746C23.1866 20.0122 21.5802 19.2218 21.2811 19.115C20.9821 19.0039 20.7642 18.9526 20.5463 19.2773C20.3284 19.6063 19.7046 20.3412 19.5123 20.5591C19.3243 20.7727 19.1321 20.8026 18.8074 20.6403C18.4784 20.4779 17.4274 20.1318 16.1798 19.0167C15.21 18.1537 14.552 17.0813 14.364 16.7566C14.1718 16.4276 14.3427 16.2524 14.505 16.0901C14.6545 15.9448 14.834 15.7098 14.9963 15.5176C15.1587 15.3296 15.2142 15.1929 15.3253 14.975C15.4321 14.7571 15.3766 14.5648 15.2954 14.4025C15.2142 14.2401 14.5605 12.6294 14.2871 11.9757C14.0222 11.3391 13.7531 11.4288 13.5522 11.416C13.3643 11.4075 13.1464 11.4075 12.9285 11.4075C12.7106 11.4075 12.356 11.4886 12.0569 11.8176C11.7578 12.1423 10.9161 12.9327 10.9161 14.5392C10.9161 16.1456 12.0868 17.7008 12.2491 17.9187C12.4115 18.1323 14.552 21.4307 17.829 22.8448C18.6066 23.1824 19.2133 23.3832 19.6875 23.5327C20.4694 23.7805 21.1829 23.7463 21.7468 23.6652C22.3749 23.5712 23.678 22.8748 23.9514 22.11C24.2206 21.3495 24.2206 20.6958 24.1394 20.5591C24.0582 20.4224 23.8403 20.3412 23.5114 20.1746Z" fill="#D4B160"/>
                    </svg>                  
                </a>
                </div>
            </div>
        </div>
    </div>

</main>
<?php get_footer();?>