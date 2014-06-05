<!DOCTYPE html>
<html lang="en" dir="rtl" class="no-js" itemscope itemtype="http://schema.org/WebPage">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, width=device-width, initial-scale=1">

  <title>[PageTitle]</title>

  <!-- SEO Meta -->
  <link rel="canonical" href="[PageUrl]" />
  <meta name="author" content="[PageAuthor]" />
  <meta name="description" content="[pageDescription]">
  <!-- end SEO Meta -->

  <!-- facebook open graph -->
  <meta property="og:type" content="website" />
  <meta property="og:locale" content="ar_AR" />
  <meta property="og:site_name" content="[PageTitle]"/>
  <meta property="og:url" content="[PageUrl]"/>
  <meta property="og:title" content="[PageTitle]" />
  <meta property="og:image" content="[PageImage]"/>
  <meta property="og:description" content="[pageDescription]" />
  <!-- end facebook open graph -->

  <!-- twitter cards -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:site" content="@[PageAuthorTwitter]">
  <meta name="twitter:creator" content="@[PageAuthorTwitter]">
  <meta name="twitter:title" content="[PageTitle]">
  <meta name="twitter:image:src" content="[PageImage]">
  <meta name="twitter:description" content="[pageDescription]">
  <!-- end twitter cards -->

  <!-- Schema MicroData (Google+,Google, Yahoo, Bing,) -->
  <meta itemprop="name" content="[PageTitle]" />
  <meta itemprop="url" content="[PageUrl]" />
  <meta itemprop="author" content="[PageAuthor]"/>
  <meta itemprop="image" content="[PageImage]" />
  <meta itemprop="description" content="[pageDescription]" />
  <!-- End Schema MicroData -->

  <script src="assets/js/vendor/modernizr-2.8.0.min.js"></script>


  <!-- Begin Styles-->
  <link rel="stylesheet" href="//fonts.googleapis.com/earlyaccess/droidarabickufi.css" />
  <link rel="stylesheet" href="//fonts.googleapis.com/earlyaccess/droidarabicnaskh.css" />
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <!-- End Styles -->

</head>
<body>
  <div class="wrapper">
    <header class="header">
      <div class="container header__head">
        <div class="column column--siteinfo column--gutter">
          <nav class="navbar">
            <ul class="nav nav--siteinfo nav--small nav--muted">
              <li class="nav__item"><a href="#">عن الكلية</a></li>
              <li class="nav__item"><a href="#">تواصل معنا</a></li>
              <li class="nav__item"><a href="#">كيف تدعمنا؟</a></li>
              <li class="nav__item"><a href="#">إنضم ككاتب</a></li>
              <li class="nav__item"><a href="#">الخصوصية</a></li>
            </ul>
          </nav>
        </div>
      </div>
      <!-- End header__head -->

      <div class="container zone header__main">
        <div class="column column--brand column--gutter">
          <h1 class="brand"><a class="brand__logo" href="/">كلية التقنية</a></h1>
        </div>
      </div>
      <!-- End header__main -->


      <div class="header__foot">
        <div class="container zone">
          <div class="column column--nav-main column--gutter">
            <nav class="navbar navbar--main">
              <ul class="nav navly nav--main nav--medium">
                <li class="nav__item"><a href="#">التصميم</a></li>
                <li class="nav__item"><a href="#">التكويد</a></li>
                <li class="nav__item nav__item--active"><a href="#">التطوير</a></li>
                <li class="nav__item"><a href="#">الكتابة</a></li>
                <li class="nav__item"><a href="#">أدوات ومكتبات</a></li>
                <li class="nav__item"><a href="#">الريادة والتسويق</a></li>
                <li class="nav__item nav__item--oppos"><a href="#"><i class="fa fa-search"></i> بحث</a>
                  <div class="nav__sub nav__sub--oppos search">
                    <form class="search__form zone" method="get" action="">
                      <label for="search__input" class="search__label">بحث</label>
                      <input type="text" name="s" id="search__input" class="search__input column"  placeholder="أدخل كلمات البحث هنا..">
                      <button type="submit" class="search__button column"><i class="fa fa-search"></i> <span class="search__label">بحث</span></button>
                    </form>
                  </div>
                </li>
              </ul>
            </nav>
          </div>
          <div class="column column--search column--gutter">

          </div>
        </div>
      </div>
      <!-- End header__foot -->

    </header>

    <div class="main">
      <div class="container zone">
        <div class="column column--featured">
          <?php include "parts/featured.php"; ?>
        </div>

        <div class="column column--widgets">
          <div class="widgets">
            <?php include "parts/widget_social.php"; ?>
          </div>
          <div class="widgets">
            <?php include "parts/widget_taxos.php"; ?>
          </div>
          <div class="widgets">
            <?php include "parts/widget_levels.php"; ?>
            <?php include "parts/widget_join.php"; ?>
          </div>
        </div>

      </div>
    </div>

    <footer>

    </footer>


  </div>
  <!-- End wrapper -->


  <script>

  </script>
</body>
</html>