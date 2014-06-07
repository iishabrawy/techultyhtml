<section class="zone featured  card"><!--
  <?php
    $taxos = array (
        array('design','تصميم'),
        array('frontend','تكويد'),
        array('backend','تطوير'),
        array('content','المحتوى'),
      );

    foreach (array(6,7,8) as $i) :
      $image = 'assets/images/uploads/image'.$i.'.jpg';
      $taxo = array_pop($taxos);
  ?>
  --><article class="[ postcard postcard--<?=$taxo[0];?> ]">
    <div class="postcard__inner">
      <div class="postcard__cover">
        <a class="postcard__media respomedia" href="#">
          <img class="respomedia__piece" src="<?=$image;?>" alt="">
        </a>
      </div>

      <div class="postcard__main">

        <header class="postcard__head">
          <ul class="postcard__meta navline nav--muted nav--smaller">
            <li ><a href="#"><i class="fa fa-calendar-o"></i> <time datetime="">30-12-2014</time></a></li>
            <li ><a href="#"><i class="fa fa-user"></i> <bdi>عمران عماري</bdi></a></li>
          </ul>
          <h1 class="postcard__title">
            <a href="#">الدليل الشامل لإتقان SASS و توابعها، خطوة بخطوة</a>
          </h1>
        </header>

        <div class="postcard__content">
            <p>الأكسجين هو أحد أهم العناصر الكيميائية الموجودة في الجدول الدوري وله الرمز O والعدد الذري 8. هذا العنصر شائع للغاية، ولا يوجد فقط على الأرض ولكن في كل الكون، ويكون غالبًا مرتبطًا مع عناصر أخرى.</p>
        </div>

        <div class="postcard__taxo">
          <a class="ribbon" href="#"><span class="ribbon__label"><?=$taxo[1];?></span></a>
        </div>

      </div>
    </div>
  </article><!--
  <?php endforeach; ?>-->
</section>