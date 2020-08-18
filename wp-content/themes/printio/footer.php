<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.2
 */

?>
<?php wp_footer(); ?>
<footer class="l-footer">
   <div class="l-container01 l-footer__container">
     <div class="l-footer__logo"><a href="/" class="is-hover"><img class="header__logo" src="/wp-content/themes/printio/assets/images/logo-logo1.svg" alt="Printioロゴ"></a></div>
     <ul class="l-footer__nav">
       <li><a href="/news">お知らせ</a></li>
       <li><a href="/profile">会社概要</a></li><br class="u-spOnly">
       <li><a href="/specific-trade-law">特定商取引法に基づく表示</a></li>
       <li><a href="/privacy-policy">プライバシーポリシー</a></li>
     </ul>

     <ul class="l-footer__sns">
       <li><a href="https://www.facebook.com/Printio-104052731366204" class="is-hover" target="_blank"><img src="/wp-content/themes/printio/assets/images/btn_fb.png" alt="Facebook"></a></li>
       <li><a href="https://www.instagram.com/printio.me/" class="is-hover" target="_blank"><img src="/wp-content/themes/printio/assets/images/btn_ig.png" alt="instagram"></a></li>
       <li><a href="https://twitter.com/Printiome" class="is-hover" target="_blank"><img src="/wp-content/themes/printio/assets/images/btn_tw.png" alt="twitter"></a></li>
     </ul>
   </div>

   <div class="l-footer__copyright"><small>Copyright &copy; 2020 Printio Co. Ltd. All rights reserved.</small></div>
 </footer>
 <script>
  var path_template_directory_uri = "<?php echo get_template_directory_uri();?>";
 </script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>
<?php wp_footer(); ?>
</body>
</html>