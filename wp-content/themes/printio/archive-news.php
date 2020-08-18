<?php
/**
 * Template Name: news
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

<main class="l-body news-index">
	<section class="c-sub__contents">
		<div class="l-container01">
			<h1 class="c-title01">お知らせ</h1>

			<?php
				$paged = get_query_var('paged')? get_query_var('paged') : 1;
				$args = array(
					'post_type' => 'news',
					'paged' => $paged,
					'post_status' => 'publish',
					'orderby' => 'meta_value',
					'meta_key' => 'date',
					'order' => 'DESC',
					'posts_per_page' => 2,
				);

				$postslist = get_posts($args);
				$information= new WP_Query($args);
			?>

			<?php if (count($postslist) > 0) : ?>
				<ul class="c-news__list">
					<?php
						foreach ( $postslist as $post ): // ループの開始
						setup_postdata( $post ); // 記事データの取得
					?>

						<li>
							<p class="c-news__date"><?php the_field('date') ?></p>
							<p class="c-news__label c-news__label-01"><?php the_field('tag') ?></p>
							<p class="c-news__desc"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
						</li>

					<?php
						endforeach; // ループの終了
					?>
				</ul>

				<?php
					wp_reset_postdata(); // 直前のクエリを復元する
					wp_pagenavi(array('query' => $information));
				?>
			<?php else : ?>
				<ul class="c-news__list">
					<li class="text-center">現在お知らせはありません。</li>
				</ul>
			<?php endif; ?>
		</div>

	</section>
</main>
<?php
get_footer('top');
