<section class="portfolio-cases">

    <div class="wrapper">
      <h2 class="portfolio-cases__title">Лучше всего наши результаты покажут цифры</h2>

      <!-- portfolio-cases__korpus-->
      <div class="portfolio-cases__korpus">
        <input type="radio" name="portfolio-projects" id="portfolio-tab_projects" checked>
        <label class="portfolio-cases__korpus-tab" for="portfolio-tab_projects">Проекты</label>

        <input type="radio" name="portfolio-projects" id="portfolio-tab_presentation">
        <label class="portfolio-cases__korpus-tab" for="portfolio-tab_presentation">Презентация</label>

        <span class="portfolio-cases__helper">
          <span>Переключайтесь между режимами, чтобы увидеть больше подробностей</span>
        </span>



        <!-- portfolio-cases__projects -->
        <ul class="portfolio-cases__tab portfolio-cases__projects">
          <?php if ( is_front_page() ) {
            query_posts('post_type=case&posts_per_page=3');
          } else {
            query_posts('post_type=case');
          }
          ?>
            <?php while ( have_posts() ) : the_post(); ?>

            <li class="case__wrap">
              <div class="case__head">
                <!-- <div class="case__tablet-row"> -->
                  <div class="case__img-wrap"><img src="<?php the_field("case_logo"); ?>" alt=""></div>
                  <div class="case__info"><?php the_field("case_name"); ?></div>

                  <br class="case__line-separator_tablet">
                <!-- </div> -->

                <?php if(get_field('case_numbers')):
                while(has_sub_field('case_numbers')): ?>

                <div class="case__number-info">
                  <div class="case__number"><?php the_sub_field('case_number'); ?></div>
                  <p>
                    <?php the_sub_field("description"); ?>
                  </p>
                </div>

                <?php endwhile; endif; ?> <!--end case_numbers repeater-->

              </div>
              <div class="case__additional-info">
                <div class="case__part--left">
                  <div class="case__history">
                    <h4>История работы</h4>
                    <?php the_field("case_history"); ?>
                  </div>
                  <div class="case__used">
                    <h4>Мы использовали</h4>

                    <?php if(get_field('case_used')):
                    while(has_sub_field('case_used')): ?>

                    <div class="case__used-img">
                      <img src="<?php the_sub_field('img'); ?>" alt="">
                    </div>

                    <?php endwhile; endif; ?> <!--end case_used repeater-->

                  </div>
                </div>
                <div class="case__part--right">
                  <div class="case__respond">
                    <h4>Отзыв</h4>
                    <blockquote>
                      <?php the_field("case_review"); ?>
                    </blockquote>
                    <p class="case__respond-company"><?php the_field("review_person"); ?></p>
                    <? if (get_field('recomendation')): ?>
                    <a href="<?php the_field("recomendation"); ?>" class="btn btn-6"><img src="<?php the_field("recomendation"); ?>" class="case__respond-img" alt="">Показать письмо</a>
                  <? else: ?><? endif; ?>

                  </div>
                </div>
              </div>

            </li>

            <?php endwhile; ?>
          <?php wp_reset_query(); ?>

        </ul>

        <script>
          $(document).ready(function() {
            $('.case__wrap').click(function(e) {
              e.preventDefault();
              $(this).find('.case__additional-info').slideToggle(300);
              $(this).toggleClass('case__wrap_opened');
            });
          });
        </script>
        <!-- END  portfolio-cases__projects -->

        <!-- portfolio-cases__presentation -->
        <div class="portfolio-cases__tab portfolio-cases__presentation">

          <div class="portfolio-cases__presentation-wrap">
            <p>Скачайте нашу презентацию со всеми работами из портфолио,</br>чтобы изучить ее не торопясь и даже без доступа к Интернету</p>
            <a href="http://lid-x.ru/files/lid-x-best.pdf" class="btn btn-3" target="_blank">Скачать презентацию</a>
          </div>

        </div>
        <!-- END portfolio-cases__presentation -->


      </div>
      <!-- END portfolio-cases__korpus-->


      <div class="portfolio-cases__portfolio-link-container">
          <a href="./portfolio" class="portfolio-cases__portfolio-link">Смотреть портфолио</a>
      </div>

    </div>

</section>
