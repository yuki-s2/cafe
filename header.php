<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Coffee Shop</title>
    <meta name="description" content="">

    <meta property="og:title" content="Coffee Shop">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://example.com/">
    <meta property="og:site_name" content="Coffee Shop">
    <meta property="og:description" content="">
    <meta name="twitter:card" content="summary_large_image">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&family=Damion&family=Patua+One&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&family=Damion&display=swap"
        rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&display=swap" rel="stylesheet">

<?php wp_head() ?>
</head>
<body>





<main id="top" class="main">
        <div class="main__container">
        <div class="main__nav is-pc">
        <div class="main__logo">
            <img src="<?php echo get_template_directory_uri() ?>/img/logo_dark@2x-min.png" alt="">
        </div>
        <ul class="main__nav-list">
            <li><a class="main__nav-item" href="#top">TOP<br><span class="main__nav-span">トップ</span></a></li>
            <li><a class="main__nav-item" href="#concept">CONCEPT<br><span class="main__nav-span">コンセプト</span></a></li>
            <li><a class="main__nav-item" href="#concept">CONCEPT<br><span class="main__nav-span">コンセプト</span></a></li>
            <li><a class="main__nav-item" href="#menu">MENU<br><span class="main__nav-span">メニュー</span></a></li>
            <li><a class="main__nav-item" href="#news">NEWS<br><span class="main__nav-span">お知らせ</span></a></li>
            <li><a class="main__nav-item" href="#shop">SHOP<br><span class="main__nav-span">店舗情報</span></a></li>
            <li><a class="main__nav-item" href="#gift">GIFT<br><span class="main__nav-span">ギフト・贈り物</span></a></li>
            <li><a class="main__nav-item" href="#contact">CONTACT<br><span class="main__nav-span">お問い合わせ</span></a></li>
        </ul>
        <ul class="main__sns-icon">
            <li class="main__icon"><a href="/"><img src="<?php echo get_template_directory_uri() ?>/img/icon_twitter-dark@2x-min.png" alt="twitter"></a></li>
            <li class="main__icon"><a href="/"><img src="<?php echo get_template_directory_uri() ?>/img/icon_instagram-dark@2x-min.png" alt="instagram"></a></li>
            <li class="main__icon"><a href="/"><img src="<?php echo get_template_directory_uri() ?>/img/icon_youtube-dark@2x-min.png" alt="youtube"></a></li>
        </ul>
        </div>





        <!-- Slider main container -->
        <div class="swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide main__img">
                          <div class="main__sp-container sp-inner">

                              <div class="main__logo-sp is-sp"><img src="<?php echo get_template_directory_uri() ?>/img/logo_light@2x-min.png" alt=""></div>
                              <p class="main__img-text">パスタとコーヒーが<br class="is-sp">とってもおいしい、<br>ほっと落ち着くのんびり空間。</p>

                              <div class="main__img-pic-balloon"><img src="<?php echo get_template_directory_uri() ?>/img/img_balloon-pickup@2x-min.png" alt="">
                              </div>
                              <div class="main__picup">
                                  <a class="main__picup-news" href="＃">
                                      <div class="main__picup-img">
                                          <img src="<?php echo get_template_directory_uri() ?>//img/img_mainvisual1-min.png" alt="">
                                      </div>
                                      <div class="main__picup-title">
                                          <div class="main__picup-time">2021.01.01</div>
                                          <div class="main__picup-text">ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、あらゆる空間が誕生。</div>
                                      </div>
                                  </a>
                              </div>
                              <div class="main__ribbon-wrapper">
                                  <div class="main__ribbon">
                                      <p class="main__ribbon-p">カテゴリ</p>
                                  </div>
                              </div>
                          </div> <!-- main__sp-container sp-inner -->


                          <div class="drawer__icon">
                              <div class="drawer__icon-maru">
                                  <div class="drawer__icon-bars">
                                      <div class="drawer__icon-bar1"></div>
                                      <div class="drawer__icon-bar2"></div>
                                      <div class="drawer__icon-bar3"></div>
                                  </div>
                              </div>
                          </div>


                          <div class="drawer__content">

                              <div class="drawer__logo">
                                  <img src="<?php echo get_template_directory_uri() ?>/img/logo_light@2x-min.png" alt="">
                              </div>

                              <div class="drawer__content-items">
                                  <div class="drawer__content-item">
                                      <a class="drawer__content-item-a" href="">
                                          TOP<span class="drawer__content-item-span">／&emsp;トップ</span></a></div>
                                  <div class="drawer__content-item"><a class="drawer__content-item-a" href="">
                                          CONCEPT<span class="drawer__content-item-span">／&emsp;コンセプト</span></a></div>
                                  <div class="drawer__content-item"><a class="drawer__content-item-a" href="">
                                          MENU<span class="drawer__content-item-span">／&emsp;メニュー</span></a></div>
                                  <div class="drawer__content-item"><a class="drawer__content-item-a" href="">
                                          NEWS<span class="drawer__content-item-span">／&emsp;お知らせ</span></a></div>
                                  <div class="drawer__content-item"><a class="drawer__content-item-a" href="">
                                          SHOP<span class="drawer__content-item-span">／&emsp;店舗情報</span></a></div>
                                  <div class="drawer__content-item"><a class="drawer__content-item-a" href="">
                                          GIFT<span class="drawer__content-item-span">／&emsp;ギフト・贈り物</span></a></div>
                                  <div class="drawer__content-item"><a class="drawer__content-item-a" href="">
                                          CONTACT<span class="drawer__content-item-span">／&emsp;お問い合わせ</span></a></div>

                                  <ul class="drawer__sns-icons">
                                      <li class="drawer__sns-icon"><a href="/"><img
                                                  src="<?php echo get_template_directory_uri() ?>/img/icon_twitter-light@2x-min.png" alt="twitter"></a></li>
                                      <li class="drawer__sns-icon"><a href="/"><img
                                                  src="<?php echo get_template_directory_uri() ?>/img/icon_instagram-light@2x-min.png" alt="instagram"></a></li>
                                      <li class="drawer__sns-icon"><a href="/"><img
                                                  src="<?php echo get_template_directory_uri() ?>/img/icon_youtube-light@2x-min.png" alt="youtube"></a></li>
                                  </ul>
                              </div>

                          </div>



                          <div class="drawer__background"></div>



                </div>
                <div class="swiper-slide main__img2">
    <div class="main__sp-container sp-inner">



        <div class="main__logo-sp is-sp"><img src="<?php echo get_template_directory_uri() ?>/img/logo_light@2x-min.png" alt=""></div>
        <p class="main__img-text">パスタとコーヒーが<br class="is-sp">とってもおいしい、<br>ほっと落ち着くのんびり空間。</p>

        <div class="main__img-pic-balloon"><img src="<?php echo get_template_directory_uri() ?>/img/img_balloon-pickup@2x-min.png" alt="">
        </div>
        <div class="main__picup">
            <a class="main__picup-news" href="＃">
                <div class="main__picup-img">
                    <img src="<?php echo get_template_directory_uri() ?>//img/img_mainvisual1-min.png" alt="">
                </div>
                <div class="main__picup-title">
                    <div class="main__picup-time">2021.01.01</div>
                    <div class="main__picup-text">ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、あらゆる空間が誕生。</div>
                </div>
            </a>
        </div>
        <div class="main__ribbon-wrapper">
            <div class="main__ribbon">
                <p class="main__ribbon-p">カテゴリ</p>
            </div>
        </div>
    </div> <!-- main__sp-container sp-inner -->


    <div class="drawer__icon">
        <div class="drawer__icon-maru">
            <div class="drawer__icon-bars">
                <div class="drawer__icon-bar1"></div>
                <div class="drawer__icon-bar2"></div>
                <div class="drawer__icon-bar3"></div>
            </div>
        </div>
    </div>


    <div class="drawer__content">

        <div class="drawer__logo">
            <img src="<?php echo get_template_directory_uri() ?>/img/logo_light@2x-min.png" alt="">
        </div>

        <div class="drawer__content-items">
            <div class="drawer__content-item">
                <a class="drawer__content-item-a" href="">
                    TOP<span class="drawer__content-item-span">／&emsp;トップ</span></a></div>
            <div class="drawer__content-item"><a class="drawer__content-item-a" href="">
                    CONCEPT<span class="drawer__content-item-span">／&emsp;コンセプト</span></a></div>
            <div class="drawer__content-item"><a class="drawer__content-item-a" href="">
                    MENU<span class="drawer__content-item-span">／&emsp;メニュー</span></a></div>
            <div class="drawer__content-item"><a class="drawer__content-item-a" href="">
                    NEWS<span class="drawer__content-item-span">／&emsp;お知らせ</span></a></div>
            <div class="drawer__content-item"><a class="drawer__content-item-a" href="">
                    SHOP<span class="drawer__content-item-span">／&emsp;店舗情報</span></a></div>
            <div class="drawer__content-item"><a class="drawer__content-item-a" href="">
                    GIFT<span class="drawer__content-item-span">／&emsp;ギフト・贈り物</span></a></div>
            <div class="drawer__content-item"><a class="drawer__content-item-a" href="">
                    CONTACT<span class="drawer__content-item-span">／&emsp;お問い合わせ</span></a></div>

            <ul class="drawer__sns-icons">
                <li class="drawer__sns-icon"><a href="/"><img src="<?php echo get_template_directory_uri() ?>/img/icon_twitter-light@2x-min.png" alt="twitter"></a>
                </li>
                <li class="drawer__sns-icon"><a href="/"><img src="<?php echo get_template_directory_uri() ?>/img/icon_instagram-light@2x-min.png"
                            alt="instagram"></a></li>
                <li class="drawer__sns-icon"><a href="/"><img src="<?php echo get_template_directory_uri() ?>/img/icon_youtube-light@2x-min.png" alt="youtube"></a>
                </li>
            </ul>
        </div>

    </div>



    <div class="drawer__background"></div>



                </div>
                <div class="swiper-slide main__img3">
                          <div class="main__sp-container sp-inner">



                              <div class="main__logo-sp is-sp"><img src="<?php echo get_template_directory_uri() ?>/img/logo_light@2x-min.png" alt=""></div>
                              <p class="main__img-text">パスタとコーヒーが<br class="is-sp">とってもおいしい、<br>ほっと落ち着くのんびり空間。</p>

                              <div class="main__img-pic-balloon"><img src="<?php echo get_template_directory_uri() ?>/img/img_balloon-pickup@2x-min.png" alt="">
                              </div>
                              <div class="main__picup">
                                  <a class="main__picup-news" href="<?php the_permalink(); ?>">
                                      <div class="main__picup-img">
                        <?php if(has_post_thumbnail()):?>
                        <?php the_post_thumbnail(); ?>
                        <?php else: ?>
                            <img src="<?php echo get_template_directory_uri() ?>/img/noimg.png" alt="">
                        <?php endif; ?>
                                      </div>
                                      <div class="main__picup-title">
                                          <time class="main__picup-time" datetime="<?php the_time('c'); ?>"><?php the_time('Y.n.j'); ?></time>
                                          <div class="main__picup-text"><?php the_title(); ?></div>
                                      </div>
                                  </a>
                              </div>
                              <div class="main__ribbon-wrapper">
                                  <div class="main__ribbon">
                                      <p class="main__ribbon-p">カテゴリ</p>
                                  </div>
                              </div>
                          </div> <!-- main__sp-container sp-inner -->


                          <div class="drawer__icon">
                              <div class="drawer__icon-maru">
                                  <div class="drawer__icon-bars">
                                      <div class="drawer__icon-bar1"></div>
                                      <div class="drawer__icon-bar2"></div>
                                      <div class="drawer__icon-bar3"></div>
                                  </div>
                              </div>
                          </div>


                          <div class="drawer__content">

                              <div class="drawer__logo">
                                  <img src="<?php echo get_template_directory_uri() ?>/img/logo_light@2x-min.png" alt="">
                              </div>

                              <div class="drawer__content-items">
                                  <div class="drawer__content-item">
                                      <a class="drawer__content-item-a" href="">
                                          TOP<span class="drawer__content-item-span">／&emsp;トップ</span></a></div>
                                  <div class="drawer__content-item"><a class="drawer__content-item-a" href="">
                                          CONCEPT<span class="drawer__content-item-span">／&emsp;コンセプト</span></a></div>
                                  <div class="drawer__content-item"><a class="drawer__content-item-a" href="">
                                          MENU<span class="drawer__content-item-span">／&emsp;メニュー</span></a></div>
                                  <div class="drawer__content-item"><a class="drawer__content-item-a" href="">
                                          NEWS<span class="drawer__content-item-span">／&emsp;お知らせ</span></a></div>
                                  <div class="drawer__content-item"><a class="drawer__content-item-a" href="">
                                          SHOP<span class="drawer__content-item-span">／&emsp;店舗情報</span></a></div>
                                  <div class="drawer__content-item"><a class="drawer__content-item-a" href="">
                                          GIFT<span class="drawer__content-item-span">／&emsp;ギフト・贈り物</span></a></div>
                                  <div class="drawer__content-item"><a class="drawer__content-item-a" href="">
                                          CONTACT<span class="drawer__content-item-span">／&emsp;お問い合わせ</span></a></div>

                                  <ul class="drawer__sns-icons">
                                      <li class="drawer__sns-icon"><a href="/"><img
                                                  src="<?php echo get_template_directory_uri() ?>/img/icon_twitter-light@2x-min.png" alt="twitter"></a></li>
                                      <li class="drawer__sns-icon"><a href="/"><img
                                                  src="<?php echo get_template_directory_uri() ?>/img/icon_instagram-light@2x-min.png" alt="instagram"></a></li>
                                      <li class="drawer__sns-icon"><a href="/"><img
                                                  src="<?php echo get_template_directory_uri() ?>/img/icon_youtube-light@2x-min.png" alt="youtube"></a></li>
                                  </ul>
                              </div>

                          </div>



                          <div class="drawer__background"></div>



                </div>
                ...

            <div class="swiper-pagination"></div>

            <div class="swiper-scrollbar"></div>
        </div>
