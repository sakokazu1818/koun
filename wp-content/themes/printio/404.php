
<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

get_header(); ?>

<main class="l-body error-404">
	<section class="c-sub__contents">
		<div class="l-container01">
			<p class="404-img">
				<img src="/wp-content/themes/printio/assets/images/404.svg" alt="404"></img>
			</p>

			<p class="text-center">
			  このURLに該当するページは存在しません。</br>
				お探しのページは移動もしくは削除された可能性があります。</br>
			</p>

			<p class="text-center"><a href="/">トップページ</a></p>
		</div>
	</section>
</main>

<?php
get_footer();
