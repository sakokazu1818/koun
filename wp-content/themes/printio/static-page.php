<?php
/**
 * Template Name: static page
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

get_header(); ?>

<?php if (have_posts()) : the_post(); ?>
  <main class="<?php echo $post->post_name. ' l-body'; ?>">
    <section class="c-sub__contents">
      <div class="l-container01">
        <h1 class="c-title01"><?php the_title(); ?></h1>
        <?php the_content(); ?>
      </div>
    </section>
  </main>
<?php endif; ?>

<?php
get_footer();
