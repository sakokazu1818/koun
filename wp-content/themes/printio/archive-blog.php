<?php
/**
 * Template Name: blog
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

<main class="l-body blog-index">
	<section class="c-sub__contents">
		<div class="l-container01">
			<h1 class="c-title01 d-none d-md-block">
				BLOG
				<p>
				<span class="title-ja">ブログ</span>
			</h1>
			<h1 class="c-title01 d-md-none">
				BLOG
			</h1>
			<?php
			$ua = $_SERVER['HTTP_USER_AGENT'];
			if ((strpos($ua, 'Android') !== false) && (strpos($ua, 'Mobile') !== false) || (strpos($ua, 'iPhone') !== false) || (strpos($ua, 'Windows Phone') !== false)) {
				$posts_per_page = 3;
			} else {
				$posts_per_page = 8;
			}
				$paged = get_query_var('paged')? get_query_var('paged') : 1;
				$args = array(
					'post_type' => 'blog',
					'paged' => $paged,
					'post_status' => 'publish',
					'orderby' => 'meta_value',
					'meta_key' => 'date',
					'order' => 'DESC',
					'posts_per_page' => $posts_per_page,
				);

				$postslist = get_posts($args);
				$information= new WP_Query($args);
			?>
			<div class="d-md-none">
				<?php if (count($postslist) > 0) : ?>
					<div class="card-deck">
						<?php
							foreach ( $postslist as $post ): // ループの開始
							setup_postdata( $post ); // 記事データの取得
							$category = get_field('category');
						?>

						<div class="card">
							<a href="<?php echo get_permalink(); ?>">
								<img src="<?php the_field('eye_catching_image') ?>"></img>
							</a>
							<div class="card-body">
								<p class="card-text blod-date"><?php the_field('date') ?></p>
								<div class="card-text">
									<?php foreach((array)$category as $value) { ?>
										<a href="/archives/category/<?php echo $value->slug; ?>" class="category">
											<?php echo $value->name; ?>
										</a>
									<?php } ?>
								</div>
								<h3 class="card-text title"><a href="<?php echo get_permalink(); ?>"><?php the_title() ?></a></h3>
								<div class="card-text blod-text"><?php echo(the_field('description')); ?></div>
							</div>
						</div>

						<?php
							endforeach; // ループの終了
						?>
					</div>
				<?php else : ?>
					<div class="text-center">現在投稿はありません。</div>
				<?php endif; ?>
				<?php
					wp_reset_postdata(); // 直前のクエリを復元する
					wp_pagenavi(array('query' => $information));
				?>

				<?php
					$blogs = new WP_Query(array(
						'post_type' => 'blog',
						'post_status' => 'publish',
						'posts_per_page' => -1,
					));

					$category_ids = array();
					while ( $blogs->have_posts() ) : $blogs->the_post();
						$categories = get_field('category');
						foreach ( $categories as $category ):
							array_push($category_ids, $category->term_id);
						endforeach;
					endwhile;
					wp_reset_postdata();

					$unique_category_ids = array_unique($category_ids);
					$new_category_ids = array_values($unique_category_ids);
				?>

				<div class="sp-category">カテゴリ</div>
				<ul class="links">
					<?php
						foreach ( $new_category_ids as $category_id ):
					?>
						<li>
							<a href="<?php echo(get_category_link($category_id)); ?>">
								<?php echo(get_the_category_by_ID($category_id)); ?>
							</a>
						</li>
					<?php
						endforeach;
					?>
				</ul>
			</div>

			<div class="blog-wrap d-none d-md-flex">
				<div class="blog-list">
					<?php if (count($postslist) > 0) : ?>
						<?php
						  $new_postslist = array_chunk($postslist, 2);
							foreach ( $new_postslist as $category_list ):
						?>
							<div class="card-deck mb-5">
								<?php
									foreach ( $category_list as $post ): // ループの開始
									setup_postdata( $post ); // 記事データの取得
									$category = get_field('category');
								?>

								<div class="card">
									<a href="<?php echo get_permalink(); ?>">
										<img src="<?php the_field('eye_catching_image') ?>"></img>
									</a>
									<div class="card-body">
										<p class="card-text blod-text"><?php the_field('date') ?></p>
										<div class="card-text">
											<?php foreach((array)$category as $value) { ?>
												<a href="/archives/category/<?php echo $value->slug; ?>" class="category">
													<?php echo $value->name; ?>
												</a>
											<?php } ?>
										</div>
										<h3 class="card-text title"><a href="<?php echo get_permalink(); ?>"><?php the_title() ?></a></h3>
										<div class="card-text blod-text"><?php echo(the_field('description')); ?></div>
									</div>
								</div>

								<?php
									endforeach; // ループの終了
								?>

								<?php $i = count($category_list); ?>
								<?php while ($i < 2) : ?>
									<div class="card card-hidden"></div>
									<?php $i++; ?>
								<?php endwhile; ?>
							</div>
						<?php
							endforeach; // ループの終了
						?>
					<?php else : ?>
						<div class="text-center">現在投稿はありません。</div>
					<?php endif; ?>
				</div>

				<div class="blog-categories">
					<div class="title">カテゴリ</div>
					<ul class="links">
						<?php
							foreach ( $new_category_ids as $category_id ):
						?>
						  <li>
								<a href="<?php echo(get_category_link($category_id)); ?>">
									<?php echo(get_the_category_by_ID($category_id)); ?>
								</a>
							</li>
						<?php
							endforeach;
						?>
				  </ul>
				</div>
			</div>

			<div class="d-none d-md-block">
				<?php
					wp_reset_postdata(); // 直前のクエリを復元する
					wp_pagenavi(array('query' => $information));
				?>
			</div>
		</div>

	</section>
</main>
<?php
get_footer('top');
