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
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d51798.62044172689!2d139.6948194967401!3d35.765210949646765!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601892f5059402eb%3A0x1ae9c9853eb9ce72!2z5p2x5Lqs6YO95YyX5Yy6!5e0!3m2!1sja!2sjp!4v1597820084080!5m2!1sja!2sjp" width="100%" height="140px" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
  <div class="l-container01 l-footer__container company-info-area">
    <div class="container">
      <div class="row">
        <div class="col-4 text-center pl-0 pr-0">
          <a href="tel:000-1234-5678">
           <img class="icon" src="/wp-content/themes/printio/assets/images/icon-tell.svg" alt="line">
           <div class="company-info-text">TEL: 03-1234-5678</div>
          </a>
        </div>

        <div class="col-4 text-center pl-0 pr-0">
          <a href="/">
            <img class="icon" src="/wp-content/themes/printio/assets/images/icon-address.svg" alt="line">
            <div class="company-info-text">住所住所住所住所住所</div>
          </a>
        </div>

        <div class="col-4 text-center pl-0 pr-0">
          <a href="tel:000-1234-5678">
            <img class="icon" src="/wp-content/themes/printio/assets/images/icom-inquiry-about-moving.svg" alt="line">
            <div class="company-info-text">引越しのお問い合わせ</div>
          </a>
        </div>
      </div>
    </div>
  </div>
   <div class="l-container01 l-footer__container sns-area">
     <div class="container">
       <div class="row">
         <div class="col-4 text-center sns-wrap">
           <a href="https://twitter.com/" class="is-hover" target="_blank">
             <img src="/wp-content/themes/printio/assets/images/line.svg" alt="line">
             <div class="sns-text">LINE</div>
           </a>
         </div>

         <div class="col-4 text-center sns-wrap">
           <a href="https://www.instagram.com/" class="is-hover" target="_blank">
             <i class="fab fa-instagram icon"></i>
             <div class="sns-text">Instagram</div>
           </a>
         </div>

         <div class="col-4 text-center sns-wrap">
           <a href="https://www.facebook.com/" class="is-hover" target="_blank">
             <i class="fab fa-facebook-f icon"></i>
             <div class="sns-text">Facebook</div>
           </a>
         </div>

       </div>
     </div>
   </div>

   <div class="l-footer__copyright"><small>&copy; 幸運引越センター. All rights reserved.</small></div>
 </footer>
 <script>
  var path_template_directory_uri = "<?php echo get_template_directory_uri();?>";
 </script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>
<?php wp_footer(); ?>
</body>
</html>