<?php get_header();?>

      
<main class="main">
    <div class="container">
       
       
    
        <div class="category-box">
            <div class="category-box__text">Категория:</div>    
            <?php if(is_category()){ ?>
                <h1 class="category-box__title"><?php echo  get_queried_object()->name?></h1>
           <?php }
                ?>
            
        </div>
   
    </div>
     

      <div class="debts" id="debts">
        <div class="container">
          <div class="debts-box">
            <div class="debts-box__wrapper">
                <?php if(is_category()){ ?>
                    <h1 class="debts-box__title"><?php echo  get_queried_object()->name?></h1>
                <?php }
                    ?>
              <div class="debts-box__text">
                <?php echo category_description()?>
               
            </div>
            </div>
          </div>

          <div class="debts-menu">
            <ul class="debts-menu__list">
              <li class="debts-menu__list-item">
                <a href="#debts" class="debts-menu__list-link debts-menu__list-link--active">Долги</a>
              </li>
              <li class="debts-menu__list-item">
                <a href="#" class="debts-menu__list-link">Взыскать</a>
              </li>
              <li class="debts-menu__list-item">
                <a href="#protection" class="debts-menu__list-link">Защититься</a>
              </li>
              <li class="debts-menu__list-item">
                <a href="#repay" class="debts-menu__list-link">Погасить</a>
              </li>
              <li class="debts-menu__list-item">
                <a href="#sell" class="debts-menu__list-link">Продать</a>
              </li>
            </ul>
          </div>

          <a href="tel:88129870897" class="debts__mobile-btn btn">
            8 (812) 987-08-97
          </a>
        </div>
      </div>


      <div class="tabs">
        <div class="container">
          <div class="tabs-box">
            <div class="tabs-box__title title">Взыскать Долг</div>
            <div class="tabs__inner">
              <div class="tabs__item">
                <button class="tabs__item-btn active">/01</button>
                <button class="tabs__item-btn">/02</button>
                <button class="tabs__item-btn">/03</button>
                <button class="tabs__item-btn">/04</button>
                <button class="tabs__item-btn">/05</button>
                <button class="tabs__item-btn">/06</button>
              </div>
            </div>
           
          </div>
        
          <div class="tabs__content">
            <div class="tabs__content-box">
              <div class="tabs__content__wrapper">
                <div class="tabs__content-number">/01</div>
                <div class="tabs__content-title">Законы, регулирующие взыскание</div>
              </div>
            </div>
              <div class="tabs__content-text">
                <p>[Процедура взыскания урегулирована следующими законами:]</p>
                <p>Гражданский кодекс Российской Федерации</p>
                <p>Гражданский процессуальный кодекс Российской Федерации</p>
                <p>Арбитражный процессуальный кодекс Российской Федерации</p>
                <p>Федеральный закон «Об исполнительном производстве»</p>
                <p>Федеральный закон «О несостоятельности (банкротстве)» и другими.</p>
              </div>
          </div>

          <div class="tabs__content">
            <div class="tabs__content-box">
              <div class="tabs__content__wrapper">
                <div class="tabs__content-number">/02</div>
                <div class="tabs__content-title">Законы, регулирующие взыскание</div>
              </div>
            </div>
              <div class="tabs__content-text">
                <p>[Процедура взыскания урегулирована следующими законами:]</p>
                <p>Гражданский кодекс Российской Федерации</p>
                <p>Гражданский процессуальный кодекс Российской Федерации</p>
                <p>Арбитражный процессуальный кодекс Российской Федерации</p>
                <p>Федеральный закон «Об исполнительном производстве»</p>
                <p>Федеральный закон «О несостоятельности (банкротстве)» и другими.</p>
              </div>
          </div>

          <div class="tabs__content">
            <div class="tabs__content-box">
              <div class="tabs__content__wrapper">
                <div class="tabs__content-number">/03</div>
                <div class="tabs__content-title">Законы, регулирующие взыскание</div>
              </div>
            </div>
              <div class="tabs__content-text">
                <p>[Процедура взыскания урегулирована следующими законами:]</p>
                <p>Гражданский кодекс Российской Федерации</p>
                <p>Гражданский процессуальный кодекс Российской Федерации</p>
                <p>Арбитражный процессуальный кодекс Российской Федерации</p>
                <p>Федеральный закон «Об исполнительном производстве»</p>
                <p>Федеральный закон «О несостоятельности (банкротстве)» и другими.</p>
              </div>
          </div>

          <div class="tabs__content">
            <div class="tabs__content-box">
              <div class="tabs__content__wrapper">
                <div class="tabs__content-number">/04</div>
                <div class="tabs__content-title">Законы, регулирующие взыскание</div>
              </div>
            </div>
              <div class="tabs__content-text">
                <p>[Процедура взыскания урегулирована следующими законами:]</p>
                <p>Гражданский кодекс Российской Федерации</p>
                <p>Гражданский процессуальный кодекс Российской Федерации</p>
                <p>Арбитражный процессуальный кодекс Российской Федерации</p>
                <p>Федеральный закон «Об исполнительном производстве»</p>
                <p>Федеральный закон «О несостоятельности (банкротстве)» и другими.</p>
              </div>
          </div>

          <div class="tabs__content">
            <div class="tabs__content-box">
              <div class="tabs__content__wrapper">
                <div class="tabs__content-number">/05</div>
                <div class="tabs__content-title">Законы, регулирующие взыскание</div>
              </div>
            </div>
              <div class="tabs__content-text">
                <p>[Процедура взыскания урегулирована следующими законами:]</p>
                <p>Гражданский кодекс Российской Федерации</p>
                <p>Гражданский процессуальный кодекс Российской Федерации</p>
                <p>Арбитражный процессуальный кодекс Российской Федерации</p>
                <p>Федеральный закон «Об исполнительном производстве»</p>
                <p>Федеральный закон «О несостоятельности (банкротстве)» и другими.</p>
              </div>
          </div>

          <div class="tabs__content">
            <div class="tabs__content-box">
              <div class="tabs__content__wrapper">
                <div class="tabs__content-number">/06</div>
                <div class="tabs__content-title">Законы, регулирующие взыскание</div>
              </div>
            </div>
              <div class="tabs__content-text">
                <p>[Процедура взыскания урегулирована следующими законами:]</p>
                <p>Гражданский кодекс Российской Федерации</p>
                <p>Гражданский процессуальный кодекс Российской Федерации</p>
                <p>Арбитражный процессуальный кодекс Российской Федерации</p>
                <p>Федеральный закон «Об исполнительном производстве»</p>
                <p>Федеральный закон «О несостоятельности (банкротстве)» и другими.</p>
              </div>
          </div>
        </div>
      
     
      </div>

      <div class="block-img">
        <div class="container">
          <div class="molotok">
            <img src="./images/molotok.png" alt="img">
          </div>
        </div>
      </div>

      <div class="questions" id="questions">
        <div class="container">
          <div class="questions__title title">
            Порядок работы. Сроки
          </div>

          <div class="questions-accardion">

            <div class="questions__wrapper">
              <div class="questions-accardion__btn">
                <span class="questions-accardion__title">
                  Консультация
                </span>
                <div class="questions-accardion__img"></div>
              </div>
              <div class="questions-accardion__content">
                <div class="questions-accardion__text">
                  <p>
                   Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, quisquam perspiciatis temporibus ratione rem qui eveniet similique eligendi distinctio consequuntur voluptatem excepturi saepe dolorem quod harum, quibusdam, ut nobis. Vero?
                  </p>
                </div>
              </div>
            </div>

            <div class="questions__wrapper">
              <div class="questions-accardion__btn">
                <span class="questions-accardion__title">
                  Подготовка претензии
                </span>
                <div class="questions-accardion__img"></div>
              </div>
              <div class="questions-accardion__content">
                <div class="questions-accardion__text">
                  <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, quisquam perspiciatis temporibus ratione rem qui eveniet similique eligendi distinctio consequuntur voluptatem excepturi saepe dolorem quod harum, quibusdam, ut nobis. Vero?
                  </p>
                </div>
              </div>
            </div>

            <div class="questions__wrapper">
              <div class="questions-accardion__btn">
                <span class="questions-accardion__title">
                  Подготовка искового заявления
                </span>
                <div class="questions-accardion__img"></div>
              </div>
              <div class="questions-accardion__content">
                <div class="questions-accardion__text">
                  <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, quisquam perspiciatis temporibus ratione rem qui eveniet similique eligendi distinctio consequuntur voluptatem excepturi saepe dolorem quod harum, quibusdam, ut nobis. Vero?
                  </p>
                </div>
              </div>
            </div>

            <div class="questions__wrapper">
              <div class="questions-accardion__btn">
                <span class="questions-accardion__title">
                  Судебное представительство
                </span>
                <div class="questions-accardion__img"></div>
              </div>
              <div class="questions-accardion__content">
                <div class="questions-accardion__text">
                  <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, quisquam perspiciatis temporibus ratione rem qui eveniet similique eligendi distinctio consequuntur voluptatem excepturi saepe dolorem quod harum, quibusdam, ut nobis. Vero?
                  </p>
                </div>
              </div>
            </div>

            <div class="questions__wrapper">
              <div class="questions-accardion__btn">
                <span class="questions-accardion__title">
                  Апелляционное обжалование решения
                </span>
                <div class="questions-accardion__img"></div>
              </div>
              <div class="questions-accardion__content">
                <div class="questions-accardion__text">
                  <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, quisquam perspiciatis temporibus ratione rem qui eveniet similique eligendi distinctio consequuntur voluptatem excepturi saepe dolorem quod harum, quibusdam, ut nobis. Vero?
                  </p>
                </div>
              </div>
            </div>

            <div class="questions__wrapper">
              <div class="questions-accardion__btn">
                <span class="questions-accardion__title">
                  Дальнейшее обжалование
                </span>
                <div class="questions-accardion__img"></div>
              </div>
              <div class="questions-accardion__content">
                <div class="questions-accardion__text">
                  <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, quisquam perspiciatis temporibus ratione rem qui eveniet similique eligendi distinctio consequuntur voluptatem excepturi saepe dolorem quod harum, quibusdam, ut nobis. Vero?
                  </p>
                </div>
              </div>
            </div>

            <div class="questions__wrapper">
              <div class="questions-accardion__btn">
                <span class="questions-accardion__title">
                  Исполнительное производство
                </span>
                <div class="questions-accardion__img"></div>
              </div>
              <div class="questions-accardion__content">
                <div class="questions-accardion__text">
                  <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, quisquam perspiciatis temporibus ratione rem qui eveniet similique eligendi distinctio consequuntur voluptatem excepturi saepe dolorem quod harum, quibusdam, ut nobis. Vero?
                  </p>
                </div>
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

      <section class="protection" id="protection">
        <div class="container">
          <h3 class="protection__title title">Защититься от взыскания Долга</h3>
          <div class="protection__text">
            <p class="repay-box__text--otstup">
              В процессе осуществления хозяйственной деятельности юридические лица, а также индивидуальные предприниматели, сталкиваются с денежными требованиями со стороны контрагентов. Причины образования долга могут быть различными. Если стороны спора в процессе проведения переговоров и на стадии претензионного порядка не пришли к соглашению относительно имеющейся задолженности, то велика вероятность обращения контрагента в суд с аналогичными требованиями о взыскании денежных средств.
            </p>
            <p>
              Обращение контрагента с претензией и или исковым заявлением в суд далеко не всегда может быть обоснованным и справедливым. Имеющуюся задолженность можно оспорить. Либо посредством снижения суммы долга (в случае неправомерного начисления пени) либо полным «списанием» истребуемых сумм. 
            </p>
          </div>

          <div class="protection-box">
            <div class="protection-box__img">
              <img src="./images/Image.png" alt="img">
            </div>

            <div class="protection-box__content">
              <div class="protection-box__content-title">
                [Задолженность может образовываться из исполнения различных договоров. Чаще всего между организациями возникают споры относительно исполнения по таким договорам, как:]
              </div>
                <div class="protection-box__content-item">
                  <p> Поставка</p>
                  <p> Купля-продажа</p>
                </div>
                <div class="protection-box__content-item">
                  <p> Перевозка</p>
                  <p> Аренда</p>
                </div>
                <div class="protection-box__content-item">
                  <p>Подряд</p>
                  <p> Возмездное оказание услуг</p>
                </div>
            </div>
          </div>

          <div class="protection-block">
            <div class="protection-block__left">
              <div class="protection-block__left__wrapper">
                <div class="protection-block__left-number"> /01</div>
                <p class="protection-block__left-text">
                 Признание требования о взыскании денежных сумм необоснованными
                </p>
              </div>
            </div>

            <div class="protection-block__right">
              <div class="protection-block__right-title">
                [Оспорить сумму долга полностью возможно в следующих ситуациях:]
              </div>
              <div class="protection-block__right-text">
                <p>Должник исполнил обязательство, но кредитор не зачел его
                 
                 </p>
              </div>
              <div class="protection-block__right-text">
                <p>
                  Между сторонами был произведен взаимозачет встречных требований, однако кредитор его не учел
                </p>
                <p>
                  Кредитор обратился в суд по истечении срока исковой давности (пропуск срока исковой давности не лишает кредитора права на обращения в суд)
                </p>
              </div>
              <div class="protection-block__right-text protection-block__right-text--flex">
                <p>
                  Чтобы последствия пропуска сроков исковой давности были применены судом, стороне должника необходимо самостоятельно заявить соответствующее ходатайство.
                </p>
                <p>
                  По собственной инициативе суд не прекращает производство по делу в связи с пропуском стороной истца срока исковой давности.
                </p>
              </div>
            </div>
          </div>

          <div class="protection-block">
            <div class="protection-block__left">
              <div class="protection-block__left__wrapper">
                <div class="protection-block__left-number"> /02</div>
                <p class="protection-block__left-text">
                 Снижение размера задолженности
                </p>
              </div>
            </div>

            <div class="protection-block__right">
              <div class="protection-block__right-title protection-block__right-title--grey repay-box__text--otstup">
                Данный вариант возможен, когда задолженность перед контрагентом действительно имеется, однако она рассчитана неверно. Также суммы могут быть завышенными в результате применения контрагентом штрафных санкций в виде пени, неустойки и т.д.
              </div>
              <div class="protection-block__right-text protection-block__right-text--flex">
                <p class="protection-block__right-text--white">
                  В обстоятельствах, когда сумма штрафных санкций существенно завышена либо рассчитана неверно, то в случае судебного разбирательства необходимо применять статью 333 Гражданского кодекса Российской Федерации, которая позволяет стороне должника заявить ходатайство о снижении суммы неустойки.
                </p>
                <p>
                  Правомерность начисления размеров штрафных санкций в заявленных размерах необходимо проверять посредством внимательного изучения заключенного договора, а также характера обязательства. Случается, что сумма штрафных санкций превышает сумму основного долга, что является недопустимым.
                </p>
              </div>
              <div class="protection-block__right-text">
                <p>
                  Отметим, что в ряде случае суд по собственной инициативе может применить данную норму права, если убедится, что размер штрафных санкций явно не соразмерен наступившим негативным последствиям нарушенного обязательства должником.
                </p>
              </div>
              <div class="protection-block__right-text protection-block__right-text--flex">
                <p>
                  Также может случиться, что должник погасил частично задолженность либо же стороны договорились о взаимозачете встречных требований. При этом контрагент не засчитал исполнение в счет имеющегося долга.
                </p>
                <p class="protection-block__right-text--white">
                  В случаях, когда должник полностью оплатил долг, но впоследствии выяснилось, что сумма долга завышена и рассчитана неверно, то с кредитора можно взыскать убытки и упущенную выгоду.
                </p>
              </div>
            </div>
          </div>

          <div class="protection-block">
            <div class="protection-block__left">
              <div class="protection-block__left__wrapper">
                <div class="protection-block__left-number">/03</div>
                <p class="protection-block__left-text">
                  Злоупотребления при расчете неустойки 
                </p>
              </div>
            </div>

            <div class="protection-block__right">
              <div class="protection-block__right-text">
                <p>
                  Следует обратить внимание, что в ряде случаев стороной кредитора может допускаться злоупотребление принадлежащим ему правом при расчете неустойки. Недопустимость подобного поведения установлена статьей 10 Гражданского кодекса Российской Федерации.
                </p>
              </div>
              <div class="protection-block__right-title">
                [Так, в исковых заявлениях о взыскании неустойки должник может защитить свою позицию доводом о злоупотреблении правом стороной кредитора. Для этого необходимо доказать, что:]
              </div>
              <div class="protection-block__right-text">
                <p> истец потерял интерес к обязательству</p>
              </div>
              <div class="protection-block__right-text">
                <p>истец не понес убытков</p>
              </div>
              <div class="protection-block__right-text">
                <p>
                  взыскиваемые суммы существенно завышены стороной кредитора
                </p>
              </div>

              <div class="protection-block__right-text">
                <p class="protection-block__right-text--white">
                  Часто стороны договора недобросовестно используют условие о неустойке: они пытаются обогатиться за счет стороны, которая формально нарушила свои обязательства. В таких ситуациях крайне важно установить и доказать, сам факт злоупотребления правом стороной кредитора.
                </p>
              </div>
              <div class="protection-block__right-text">
                <p>
                  Поэтому при оказании правовой помощи стороне должника крайне важно тщательно изучить все имеющиеся документы и собрать доказательную базу для того, чтобы в судебном порядке снизить либо полностью отменить начисленные суммы неустойки.
                </p>
              </div>
            </div>
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

      <section class="repay" id="repay">
        <div class="container">
          <h3 class="repay__title title">Погасить Долг</h3>
          <div class="repay-box">
            <div class="repay-box__text">
              <p class="repay-box__text--otstup">
                Самый распространенный способ погашения задолженности – оплата деньгами. Однако действующее законодательство предусматривает и иные способы, посредством которых имеющийся долг организации или индивидуального предпринимателя может быть погашен. На практике нередко возникает вопрос: может ли третье лицо (в том числе, физическое лицо) оплатить задолженность юридического лица? И если да, то как это правильно оформить?
              </p>
            </div>
            <div class="repay-box__img">
              <img src="./images/repay-1.png" alt="img">
            </div>
          </div>

          <div class="repay-block">
            <div class="repay-block__top">
              <div class="repay-block__top-number">/01</div>
              <p class="repay-block__top-text">
                Способы погашения задолженности юридическим лицом или <br>индивидуальным предпринимателем
              </p>
            </div>

            <div class="repay-block__wrapper">
              <div class="repay-block__left">
                <div class="repay-block__left-title">[Сумма долга формируется из:]</div>
                <p class="repay-block__left-text">суммы основного долга</p>
                <p class="repay-block__left-text">штрафных санкций (пени, штрафы, неустойка)</p>
                <p class="repay-block__left-text">причиненного ущерба</p>
                <div class="repay-block__left-subtitle">
                  [При этом следует иметь в виду, что в ряде договоров неустойка может насчитываться независимо от согласования данного условия в самом договоре. Равно как стороны могут предусмотреть неустойку и в тех договорах, для которых законом прямо она не предусмотрена]
                </div>
              </div>
  
              <div class="repay-block__right">
                <div class="repay-block__right-title">
                  [Документально оформление задолженности требует:]
                </div>
                <p class="repay-block__right-text">
                  составленной со стороны кредитора претензии с приведением подробного расчета суммы долга и всех его составляющих
                </p>
                <p class="repay-block__right-text">
                  составление и подписание акта взаимных расчетов за спорный период, в котором образовался долг
                </p>
                <div class="repay-block__right-subtitle">
                  [Далее стороны могут прийти к соглашению относительно периодов и сроков оплаты имеющейся задолженности]
                </div>
              </div>
            </div>

            <div class="repay-block__line"></div>

            <div class="repay-block__left">
              <div class="repay-block__left-title">
                [Фиксация соглашения об оплате может быть произведена:]
              </div>
              <p class="repay-block__left-text">
                ответом должника на претензию, в которой он соглашается с задолженностью и обязуется оплатить к установленному сторонами сроку
              </p>
              <p class="repay-block__left-text">гарантийным письмом</p>
              <p class="repay-block__left-text">непосредственной оплатой</p>
              <div class="repay-block__left-subtitle">
                [По общему правилу оплата должна производиться посредством платёжных поручений]
              </div>
            </div>
        

          </div>

          <div class="repay-box">
            <div class="repay-box__text">
              <p>
                Правила заполнения платежного поручения установлены Положением Банка России от 19.06.2012 N 383-П (ред. от 11.10.2018) «О правилах осуществления перевода денежных средств». В данном случае крайне важно указать назначение платежа со ссылкой на номер договора и соглашения (гарантийного письма, ответа на претензию и т.п.). Указанное необходимо для того, чтобы документально подтвердить, что денежные средства ушли именно на оплату спорного долга.
              </p>
              <div class="repay-box__title repay-box__text--otstup">
                Правильно заполненное платежное поручение исключит вероятные судебные разбирательства и новые претензии со стороны кредитора.
              </div>
              <p>
                Если же стороны не смогли прийти к соглашению касательно суммы и порядка уплаты задолженности на стадии переговоров (претензии), то дальнейшее решение спора возможно в судебном порядке
              </p>
            </div>
            <div class="repay-box__img">
              <img src="./images/repay-1.png" alt="img">
            </div>
          </div>

          <div class="repay-block">
            <div class="repay-block__top">
              <div class="repay-block__top-number">/02</div>
              <p class="repay-block__top-text">
                  Другие способы оплаты
              </p>
            </div>

            <div class="repay-block__wrapper">
              <div class="repay-block__left">
                <div class="repay-block__left-title">
                  [Задолженность перед кредитором можно оплатить:]
                </div>
                <p class="repay-block__left-text">
                  имуществом
                </p>
                <p class="repay-block__left-text">
                  оказанием услуги и или выполнением работы (т.е., прекращение обязательства новацией по правилам, установленным статьей 414 Гражданского кодекса РФ)
                </p>
                <p class="repay-block__left-text">
                  взаимозачетом встречных однородных требований
                </p>
                <div class="repay-block__left-subtitle">
                  [Однако указанные выше способы требуют обязательного согласия кредитора. В отсутствие согласия и или соглашения со стороны кредитора о готовности принять исполнение денежного обязательства имуществом, оказанием слуги или выполнением работы, а также зачетом встречных требований, исполнение обязательства не будет иметь законной силы. А долг будет продолжать расти]
                </div>
                <div class="repay-block__left-subtitle">
                  [При оплате долга имуществом необходимо направить кредитору соответствующее предложение с указанием имущества, которое должник готов отдать в счет исполнения обязательства, а также его стоимость. В спорной ситуации относительно стоимости имущества нужно проводить его оценку независимым экспертом]
                </div>
              </div>
  
              <div class="repay-block__right">
                <div class="repay-block__right-title">
                  [При согласии кредитора на исполнение обязательства имуществом необходимо:]
                </div>
                <p class="repay-block__right-text">
                  составить соответствующее соглашение (отдельно либо дополнительное соглашение к действующему договору)
                </p>
                <p class="repay-block__right-text">
                  составить акт приема-передачи имущества, из которого однозначно следует, что кредитор принял имущество в счет погашения задолженности
                </p>
                <div class="repay-block__right-subtitle">
                  [Оплата долга оказанием услуги или выполнением работ оформляется аналогично расчету имуществом. Однако в данном случае необходимо заключить отдельный договор на оказание подобных услуг или выполнения работ, в котором следует указать, что исполнитель оказывает услуги (выполняет работы) по договору в счет исполнения обязательств по спорному долгу]
                </div>
                <div class="repay-block__right-subtitle">
                  [Взаимозачет встречных однородных требований может иметь место в обстоятельствах, когда у обеих сторон сделки имеются требования (претензии по исполнению обязательств) друг к другу. При этом требования должны быть однородными]
                </div>
              </div>
            </div>

            <div class="repay-block__line"></div>

            <div class="repay-block__left">
              <div class="repay-block__left-title--big  repay-box__text--otstup">
                Для реализации взаимозачета сторонам необходимо составить соответствующий акт о взаимозачете встречных однородных требований. С момента подписания данного акта все встречные обязательства сторонами по спорным договорам считаются исполненными (полностью либо в части)
              </div>
              <p class="repay-block__left-text">
                Следует обратить внимание, что на практике допустимо совмещать, комбинировать, приведенные выше способы оплаты задолженности. Так, при наличии согласия кредитора правомерно часть долга оплатить деньгами, другую часть – имуществом или оказанием услуги (выполнением работ), взаимозачетом встречных однородных требований.
              </p>
              <div class="repay-block__left-title">
                [Таким образом, при оплате задолженности важно:]
              </div>
              <p class="repay-block__left-text">
                правильно установить и зафиксировать сумму долга
              </p>
              <p class="repay-block__left-text">
                выбрать оптимальный способ исполнения обязательства. При этом, в случае исполнения обязательства в неденежной форме обязательно должно быть письменное согласие кредитора
              </p>
              <p class="repay-block__left-text">
                правильно оформить необходимые документы, в том числе и платежные
              </p>
            </div>
        

          </div>

          <div class="repay-box">
              <div class="repay-box__title-grey repay-box__text--otstup">
                Задолженность юридического лица также может быть оплачена третьим лицом, в том числе физическим лицом. Во втором случае в качестве такого лица чаще всего выступает руководитель организации. Однако данное поручение можно оформить и на другое лицо
              </div>
            <div class="repay-box__img">
              <img src="./images/repay-1.png" alt="img">
            </div>
          </div>

          <div class="repay-block">
            <div class="repay-block__top">
              <div class="repay-block__top-number">/03</div>
              <p class="repay-block__top-text">Оплата долга юридического лица третьим лицом</p>
            </div>

            <div class="repay-block__wrapper">
              <div class="repay-block__left">
                <div class="repay-block__left-title">
                  [При таком способе исполнения обязательства крайне важно правильно оформить документы, которые:]
                </div>
                <p class="repay-block__left-text">
                  дают право третьему лицу на оплат долга юридического лица
                </p>
                <p class="repay-block__left-text">
                  документы должны быть оформлены таким образом, чтобы из них следовало, что оплата проводится именно за имеющийся долг, и чтобы такая оплата была официально зачтена
                </p>
              </div>
  
              <div class="repay-block__right">
                <div class="repay-block__right-title">
                  [Документально оплата долга организации физическим лицом может быть оформлена:]
                </div>
                <p class="repay-block__right-text">договором поручения</p>
                <p class="repay-block__right-text">
                  письмом (из которого следует, что на конкретное физическое лицо возлагается соответствующее полномочие по исполнению обязательства)
                </p>
                <p class="repay-block__right-text">
                  трехсторонним соглашением между должником, кредитором и третьим лицом
                </p>
                <div class="repay-block__right-subtitle">
                  [Каждый из указанных выше способов с точки зрения «юридической силы» является равнозначным]
                </div>
              </div>
            </div>

            <div class="repay-block__line"></div>

            <div class="repay-block__left">
              <div class="repay-block__left-title--big repay-box__text--otstup">
                При этом также следует помнить о правильно заполненном платежном поручении, в котором обязательно должно быть указано конкретное физическое лицо, исполняющее обязательство. А также реквизиты документа, на основании которого оно наделено соответствующими полномочиями
              </div>
            </div>
            <div class="protection-block__right-text protection-block__right-text--flex">
              <p>
                Также стоит обратить внимание, что исполнение денежного обязательства может происходить уже на стадии возбужденного исполнительного производства. В таких обстоятельствах, если стороны хотят добровольно урегулировать вопросы по задолженности, самым оптимальным вариантом будет заключение мирового соглашения. При этом, копию мирового соглашения необходимо направить в ФССП с соответствующим заявлением на прекращение исполнительного производства
              </p>
              <p>
                Если же должник добровольно исполнил обязательство либо же его часть при открытом исполнительном производстве, также следует направить судебному приставу документы, подтверждающие факт оплаты. Указанное позволит исключить списание излишних сумм с расчетного счета должника
              </p>
            </div>

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

      <section class="sell" id="sell">
        <div class="container">
          <h3 class="sell__title title">Продать долг</h3>
          <div class="sell-box">
            <div class="sell-box__text repay-box__text--otstup">
              <p>
                Продажа долга представляет собой один из способов перемены лиц в обязательстве. Для кредитора – это прекрасная возможность получить денежные средства, не прибегая непосредственно к процедуре взыскания. Суть данного инструмента заключается в том, что кредитор переуступает права требования задолженности новому кредитору, третьему лицу
              </p>
            </div>
            <div class="sell-box__img">
              <img src="./images/repay-1.png" alt="img">
            </div>
          </div>

          <div class="sell-block">
            <div class="sell-block__wrapper">
              <div class="sell-block__left">
                <div class="sell-block__left-title">
                  [В результате продажи долга первоначальный кредитор:]
                </div>
              <div class="sell-block__left-text">
                <p>
                  получает сразу денежные средства от нового кредитора в счет оплаты долга должника (при этом, на сумму выкупа долга могут влиять многие факторы)
                </p>
                <p>
                  первоначальный кредитор экономит свое время и ресурсы, т.к. взыскивать задолженность с должника в претензионном либо судебном порядке ему уже не требуется. Процедурой взыскания будет заниматься новый кредитор
                </p>
              </div>

                <div class="sell-block__left-title">
                  [На законодательном уровне правоотношения, касающиеся уступки права требования, урегулированы:]
                </div>

              <div class="sell-block__left-text">
                <p>
                  Главой 24 Гражданского кодекса Российской Федерации (статьи 382 – 392.3)
                </p>
                <p>
                  Постановлением Пленума Верховного Суда РФ от 21 декабря 2017 г. N 54 «О некоторых вопросах применения положений главы 24 Гражданского кодекса Российской Федерации о перемене лиц в обязательстве на основании сделки»
                </p>
              </div>

            </div>

            <div class="sell-block__right">
                <div class="sell-block__right-title">
                  [При этом следует иметь ввиду, что переход права требования по обязательствам к новом кредитору возможен:]
                </div>
              <div class="sell-block__right-text">
                <p>
                  в силу закона
                </p>
                <p>
                  в силу договора (уступка права требования по договору цессии)
                </p>
              </div>

                <div class="sell-block__right-title">
                  [В силу закона переход права требования по обязательствам происходит в следующих обстоятельствах:]
                </div>

              <div class="sell-block__right-text">
                <p>
                  в результате универсального правопреемства в правах кредитора
                </p>
                <p>
                  по решению суда о переводе прав кредитора на другое лицо, если возможность такого перевода предусмотрена законом
                </p>
                <p>
                  вследствие исполнения обязательства поручителем должника или не являющимся должником по этому обязательству залогодателем
                </p>
                <p>
                  при суброгации страховщику прав кредитора к должнику, ответственному за наступление страхового случая
                </p>
              </div>

              <div class="sell-block__right-subtitle">
                [КВ иных случаях переуступка права требования может быть произведена на основании договора цессии (соглашения)]
              </div>
            </div>
            </div>
           
          </div>

          <div class="sell-box">
            <div class="sell-box__text">
              <p>
                Однако законодатель предусмотрел ряд ограничений на переуступку права требования. Так, не могут быть переуступлены права требования без согласия должника, вытекающие обязательств, в которых личность кредитора имеет существенное значение для должника
              </p>
            </div>
            <div class="sell-box__title repay-box__text--otstup">
              При этом крайне важно отметить, что если стороны установили в договоре, что личность кредитора имеет существенное значение для должника, однако это не вытекает из существа возникшего на основании этого договора обязательства, то подобные условия следует квалифицировать как прямой запрет на уступку прав по договору без согласия должника
            </div>
            <div class="sell-box__img">
              <img src="./images/repay-1.png" alt="img">
            </div>
          </div>

          <div class="sell-block">
            <div class="sell-block__wrapper">
              <div class="sell-block__left">
                <div class="sell-block__left-title">
                  [Вместе с тем, законом установлен прямой запрет на переуступку права требования по следующим обязательствам:]
                </div>
              <div class="sell-block__left-text">
                <p>
                  алименты
                </p>
                <p>
                  возмещение вреда, причиненного жизни и здоровью
                </p>
                <p>
                  моральный вред
                </p>
              </div>

              <div class="sell-block__left-subtitle">
                [Во всех остальных случаях долг может быть переуступлен третьему лицу при условии, если первоначальным договором между должником и кредитором, по которому возник долг, не предусмотрен прямой запрет на переуступку права требования]
              </div>
                <div class="sell-block__left-title">
                  [Продать в порядке цессии можно:]
                </div>

              <div class="sell-block__left-text">
                <p>
                  права требования к должнику в полном объеме
                </p>
                <p>
                  права требования к должнику в части
                </p>
              </div>

              <div class="sell-block__left-subtitle">
                [Также допускается уступка права требования и недежной форме. Однако для данного способа установлены некоторые ограничения]
              </div>
            </div>

            <div class="sell-block__right">
                <div class="sell-block__right-title">
                  [Однако согласование условия о запрете на переуступку не распространяется:]
                </div>
              <div class="sell-block__right-text">
                <p>
                  на правоотношения, возникающие в связи с принудительным исполнением решения суда (в соответствии с законодательством об исполнительном производстве)
                </p>
                <p>
                  на правоотношения, возникающие в связи с банкротством
                </p>
              </div>

              <div class="sell-block__right-subtitle">
                [Несмотря на то, что действующим законодательством предусмотрен широкий круг правоотношений, по которым возможна переуступка права требования, важно соблюсти процедуру переуступки. В противном случае факт переуступки не будет иметь юридической силы]
              </div>
                <div class="sell-block__right-title">
                  [Для того, чтобы оформить переуступку права требования, необходимо:]
                </div>

              <div class="sell-block__right-text">
                <p>
                  удостовериться, что по текущему обязательству законом не установлен прямой запрет на переуступку права требования
                </p>
                <p>
                  удостовериться, что в договоре между первоначальном кредитором и должником отсутствует условие о запрете переуступки права требования
                </p>
                <p>
                  удостовериться, что в договоре между первоначальном кредитором и должником отсутствует оговорка о том, что личность кредитора имеет существенное значение для должника
                </p>
                <p>
                  заключить с новым кредитором договор цессии
                </p>
                <p>
                  направить соответствующее уведомление должнику
                </p>
              </div>
              <div class="sell-block__right-subtitle">
                [При этом, если уведомление о переуступке права требования направляет первоначальный кредитор, то прилагать к уведомлению заверенные копии заключенного договора с новым кредитором необязательно. Такая обязанность лежит только на новом кредиторе при условии, если уведомление о переуступке направляется им]
              </div>


            </div>
            </div>
          
            <div class="repay-block__left">
              <div class="repay-block__left-title--big repay-box__text--otstup">
                Следует обратить внимание, что несмотря на то, что практически любой долг можно продать, новому кредитору важно, чтобы у продаваемого долга были перспективы на последующее взыскание. В ином случае новый кредитор понесет убытки. Поэтому, «безнадежные» долги продавать смысла нет. Их никто не купит
              </div>
            </div>
            <div class="protection-block__right-text protection-block__right-text--flex">
              <p>
                Перед продажей необходимо оценить потенциальную платежеспособность должника, учитывать его имущественное положение и т.п. На стоимость, за которую просроченный долг может быть выкуплен новым кредитором, влияют многие факторы. В частности, возможность реального возврата долга новому кредитору, условия заключенного договора переуступки права требования
              </p>
              <p>
                При осуществлении хозяйственной деятельности обществами и индивидуальными предпринимателями долг может быть выкуплен и за полную его стоимость. Однако для этого новому кредитору нужны гарантии возвратности вложенных им денежных средств
              </p>
            </div>
          </div>  
        </div>
      </section>

      <div class="pravilo">
        <div class="container">
          <div class="sell-box">
            
            <div class="sell-box__title repay-box__text--otstup">
              Как правило, выкуп долга происходит в процентном соотношении от общей суммы задолженности. Чем выше шанс взыскать с должника деньги – тем выше процент, вплоть до полного размера задолженности
            </div>
            <div class="sell-box__text">
              <p>
                Однако вопрос о цене законом не урегулирован. Данное условие согласовывается исключительно сторонами сделки на свое усмотрение 
              </p>
            </div>
            <div class="sell-box__img">
              <img src="./images/repay-1.png" alt="img">
            </div>
          </div>

          <div class="block-bottom">
            <div class="block-bottom__title repay-box__text--otstup">
              Примечательно, что в банковской сфере продажа долгов коллекторским агентствам по сложившейся практике производится примерно в размере 1-3 % от суммы просроченной задолженности. Однако такие суммы установлены для безнадежных должников. И то, выкуп таких долгов производится «оптом»
            </div>
            <p class="block-bottom__text">
              Разумеется, что при осуществлении предпринимательской деятельности продавать долги контрагента за 1-3 % от суммы задолженности практически не имеет смысла
            </p>
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


    </div>
</main>
<?php get_footer();?>