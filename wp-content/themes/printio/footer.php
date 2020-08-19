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