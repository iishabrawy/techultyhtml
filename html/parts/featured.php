<?php
  $array_taxo = array (
      4 => 'design',
      6 => 'frontend',
      7 => 'backend',
      8 => 'content',
    );
?>
<section class="section section--featured">
    <!--
    <?php foreach (array(4,6,7,8) as $i) :
      $class_first = ($i==4)?'postcard--primary featured--first':'';
      $class_taxo = 'postcard--'.$array_taxo[$i];
      $image = 'assets/images/uploads/image'.$i.'.jpg';
    ?>
    --><article class="postcard featured post <?=$class_first;?> <?=$class_taxo;?>">
      <div class="postcard__inner">
        <div class="postcard__cover">
          <a class="postcard__media" href="#">
            <img class="" src="<?=$image;?>" alt="">
          </a>
        </div>

        <div class="postcard__main">
          <header class="postcard__head">
            <ul class="postcard__meta navline nav--muted nav--smaller">
              <li ><a href="#"><i class="fa fa-calendar-o"></i> <time datetime="<?php // echo esc_attr( get_the_date( 'c' ) ); ?>"><?php // echo esc_html( get_the_date() ); ?>30-12-2014</time></a></li>
              <li ><a href="#"><i class="fa fa-user"></i> عمران عماري</a></li>
            </ul>
            <h1 class="postcard__title">
              <a href="#">Ubuntu 14.04 مستعد للعمل على أجهزة اللمس عالية الدقة</a>
            </h1>
          </header>
          <div class="postcard__content">
              <p>الأكسجين هو أحد أهم العناصر الكيميائية الموجودة في الجدول الدوري وله الرمز O والعدد الذري 8. هذا العنصر شائع للغاية، ولا يوجد فقط على الأرض ولكن في كل الكون، ويكون غالبًا مرتبطًا مع عناصر أخرى.</p>
            <?php if ($i==4) : ?>
            <div class="postcard__more">
              <a href="#" class="button button--primary">إقرأ الموضوع الآن</a>
            </div>
            <?php endif; ?>
          </div>

          <div class="postcard__taxo">
            <a class="postcard__taxo-link" href="#"><span class="postcard__taxo-label"><?=$array_taxo[$i];?></span></a>
          </div>

        </div>
      </div>
    </article><!--
    <?php endforeach; ?>
    -->

</section>