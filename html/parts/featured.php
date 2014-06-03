<section class="section section--featured">
    <!--
    <?php foreach (array(4,5,6,7,8) as $i) :
      $class_first = ($i==4)?'featured--first':'';
      $image = 'assets/images/uploads/image'.$i.'.jpg';
    ?>
    --><article class="featured post <?=$class_first;?>">
      <div class="featured__inner">
        <div class="featured__cover">
            <img class="" src="<?=$image;?>" alt="">
            <a class="featured__overlay" href="#">
          </a>
        </div>

        <div class="featured__main">
          <header class="featured__head">
            <h1 class="featured__title">
              <a href="#">Ubuntu 14.04 مستعد للعمل على أجهزة اللمس عالية الدقة</a>
            </h1>
          </header>
          <div class="featured__content">
            <div class="featured__excerpt">
              <p>الأكسجين هو أحد أهم العناصر الكيميائية الموجودة في الجدول الدوري وله الرمز O والعدد الذري 8. هذا العنصر شائع للغاية، ولا يوجد فقط على الأرض ولكن في كل الكون، ويكون غالبًا مرتبطًا مع عناصر أخرى.</p>
            </div>
            <div class="featured__more">
              <a href="#" class="button button--primary">إقرأ الموضوع الآن</a>
            </div>
          </div>
          <footer class="featured__foot">
            <span class="featured__date"><time datetime="<?php // echo esc_attr( get_the_date( 'c' ) ); ?>"><?php // echo esc_html( get_the_date() ); ?>30-12-2014</time></span>
          </footer>
        </div>
      </div>
    </article><!--
    <?php endforeach; ?>
    -->

</section>