<?php
/**
 * Template Name: contact
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

get_header('top'); ?>

<main class="l-body contact">
  <section class="c-sub__contents">
    <?php if (have_posts()) : the_post(); ?>
      <div class="l-container01">
        <h1 class="c-title01"><?php the_title(); ?></h1>
        <p class="p-contact__text">
          下記項目にご入力いただき、<a href="/privacy-policy">個人情報の取り扱い</a>に<br>ご同意の上、送信してください。
        </p>

        <?php the_content(); ?>
      </div>

      <div class="p-contact__check">
        <label class="c-check__input is-form__agree">
          <input type="checkbox" name="">
          <span class="c-check__text">個人情報の取り扱いに同意する</span>
        </label>
      </div>
    <?php endif; ?>
  </section>
</main>

<?php
get_footer('top');