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

global $page_title;
global $page_description;

if (is_null($page_title)) {
  $page_title = '幸運引越センター.';
}

if (is_null($page_description)) {
  $page_description = '格安で引越すなら幸運引越センター.業界最安値の引越価格で新生活をサポート致します。単身の方でもファミリーの方でも大歓迎。まずは一度お問い合わせください';
}

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,user-scalable=0">
<title><?php echo $page_title ?></title>
<meta name="description" content='<?php echo $page_description ?>'/>
<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.jpg">
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.jpg" />
<link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.jpg" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css" type="text/css" />
<script src="https://kit.fontawesome.com/f07e9cfdc7.js" crossorigin="anonymous"></script>

<?php wp_enqueue_script('jquery'); ?>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-116567101-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-116567101-3');
</script>

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
      <a href="/" class="is-hover"><img src="/wp-content/themes/printio/assets/images/logo.png" alt="幸運引越社センターロゴ"></a>
    </div>
    <div class="tell">
      <a href="tel:0120-559-878">
        <img src="/wp-content/themes/printio/assets/images/tell.svg" alt="tell">
      </a>
    </div>
    <div class="inquiry-about-moving">
      <a href="/moving-contact" class="is-hover">
        <img src="/wp-content/themes/printio/assets/images/inquiry-about-moving.svg" alt="引っ越しについてお問い合わせ">
      </a>
    </div>

    <div class="l-menuToggle-wrap is-hover">
      <div class="l-menuToggle">
      </div>
    </div>

    <div class="l-globalNavi__wrap">
      <ul class="l-globalNavi__links">
        <li>
          <div class="l-globalNavi__category">
            <a href="/philosophy">企業理念</a>
            <img src="/wp-content/themes/printio/assets/images/icons-Next.svg" alt="Next" class="icon-next"></img>
          </div>
        </li>
        <li>
          <div class="l-globalNavi__category">
            <a href="/about-moving">引越しについて</a>
            <img src="/wp-content/themes/printio/assets/images/icons-Next.svg" alt="Next" class="icon-next"></img>
          </div>
        </li>
        <li>
          <div class="l-globalNavi__category">
            <a href="/moving-contact">引越しのお問い合わせ</a>
            <img src="/wp-content/themes/printio/assets/images/icons-Next.svg" alt="Next" class="icon-next"></img>
          </div>
        </li>
        <li>
          <div class="l-globalNavi__category">
            <a href="/recruit">リクルート</a>
            <img src="/wp-content/themes/printio/assets/images/icons-Next.svg" alt="Next" class="icon-next"></img>
          </div>
        </li>
        <li>
          <div class="l-globalNavi__category last-category">
            <a href="/company">会社情報</a>
            <img src="/wp-content/themes/printio/assets/images/icons-Next.svg" alt="Next" class="icon-next"></img>
          </div>
        </li>
      </ul>
    </div>
  </div>
</header>
<body>