<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,user-scalable=0">
<!-- <title>Printio - 全国の 工場とデジタルプリントの新 しい当たり前をつくる!</title>
<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/images/apple-touch-icon.png">
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/apple-touch-icon.png" />
<link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri(); ?>/assets/images/apple-touch-icon.png" /> -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css" type="text/css" />
<script src="https://kit.fontawesome.com/f07e9cfdc7.js" crossorigin="anonymous"></script>

<?php wp_enqueue_script('jquery'); ?>
<?php
  wp_head();
?>
<link rel="stylesheet" media="all" href="<?php echo get_template_directory_uri(); ?>/assets/css/foundation.css"/>
<link rel="stylesheet" media="all" href="<?php echo get_template_directory_uri(); ?>/assets/css/swiper.css">
<link rel="stylesheet" media="all" href="<?php echo get_template_directory_uri(); ?>/assets/css/colorbox.css"/>
<link rel="stylesheet" media="all" href="<?php echo get_template_directory_uri(); ?>/assets/css/layout.css"/>
<link rel="stylesheet" media="all" href="<?php echo get_template_directory_uri(); ?>/assets/css/common.css"/>
<link rel="stylesheet" media="all" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css"/>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/content-front-page.css" type="text/css" />
</head>
<header class="l-header">
  <div class="l-header__container">
    <div class="l-header__logo">
      <a href="/" class="is-hover"><img src="/wp-content/themes/printio/assets/images/logo-logo1.svg" alt="幸運引越社センターロゴ"></a>
    </div>
    <div class="tell">
      <a href="/" class="is-hover"><img src="/wp-content/themes/printio/assets/images/tell.svg" alt="tell"></a>
    </div>
    <div class="inquiry-about-moving">
      <a href="/" class="is-hover"><img src="/wp-content/themes/printio/assets/images/inquiry-about-moving.svg" alt="引っ越しについてお問い合わせ"></a>
    </div>
    <ul class="l-header__btns">
      <li><a href="/aboutus" class="l-header__btns__registration is-hover is-inline aboutus-link">Printioについて</a></li>
      <li><a href="/news" class="l-header__btns__registration is-hover is-inline news-link">お知らせ</a></li>
      <li><a href="/blog" class="l-header__btns__registration is-hover is-inline last blog-link">ブログ</a></li>
      <li><a href="/contact" class="l-header__btns__registration is-hover is-inline last contact-link">お問い合わせ</a></li>
    </ul>

    <div class="l-menuToggle-wrap is-hover">
      <div class="l-menuToggle">
      </div>
    </div>

    <div class="l-globalNavi__wrap">
      <ul class="l-globalNavi__links">
        <li>
          <div class="l-globalNavi__category__aboutus">
            <a href="/">ページ1</a>
            <img src="/wp-content/themes/printio/assets/images/icons-Next.svg" alt="Next" class="icon-next"></img>
          </div>
        </li>
        <li>
          <div class="l-globalNavi__category__news">
            <a href="/">ページ2</a>
            <img src="/wp-content/themes/printio/assets/images/icons-Next.svg" alt="Next" class="icon-next"></img>
          </div>
        </li>
        <li>
          <div class="l-globalNavi__category__blog">
            <a href="/">ページ3</a>
            <img src="/wp-content/themes/printio/assets/images/icons-Next.svg" alt="Next" class="icon-next"></img>
          </div>
        </li>
        <li>
          <div class="l-globalNavi__category__profile">
            <a href="/">ページ4</a>
            <img src="/wp-content/themes/printio/assets/images/icons-Next.svg" alt="Next" class="icon-next"></img>
          </div>
        </li>
        <li>
          <div class="l-globalNavi__category__contact">
            <a href="/contact">ページ5</a>
            <img src="/wp-content/themes/printio/assets/images/icons-Next.svg" alt="Next" class="icon-next"></img>
          </div>
        </li>
      </ul>
    </div>
  </div>
</header>
<body>