<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

get_header(); ?>
<!-- <div id="fb-root"></div> -->
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v7.0&appId=1643710749242272&autoLogAppEvents=1" nonce="B8u7S3bY"></script>

<main class="l-body single-blog">
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
      <?php if (have_posts()) : the_post(); ?>
        <div class="content-wrap">
          <div class="blog-wrap">
            <p class="c-news__date d-md-none"><?php the_field('date') ?></p>
            <ul class="c-news__detail__list">
              <li><p class="c-news__date d-none d-md-block"><?php the_field('date') ?></p></li>
              <?php
                $category = get_field('category');
                foreach((array)$category as $value) { ?>
                <li>
                  <p class="c-news__label c-news__label-01 category">
                    <a href="/archives/category/<?php echo $value->slug; ?>">
                      <?php echo $value->name; ?>
                    </a>
                  </p>
                </li>
              <?php } ?>
            </ul>
            <h2 class="c-blog__detail__title"><?php the_title(); ?></h2>
            <div class="c-news__detail"><?php the_field('text_body'); ?></div>

            <ul class="c-sns__buttons">
              <li>
                <div class="fb-share-button" data-href=<?php echo(the_permalink()); ?> data-layout="button_count" data-size="small"><a target="_blank" href=href=<?php echo("https://www.facebook.com/sharer/sharer.php?u=" . urlencode(the_permalink()) . "&amp;src=sdkpreparse"); ?> class="fb-xfbml-parse-ignore">シェア</a></div>
              </li>
              <li>
                <!-- <a href="https://twitter.com/share" class="twitter-share-button" data-url="【ページのURL】" data-text="【ツイート本文】" data-via="【ユーザ名】" data-size="【ボタンのサイズ】" data-related="【ユーザ名】" data-count="【カウント表示の種類】" data-hashtags="【ハッシュタグ】">Tweet</a> -->
                <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-via="cure_office" data-lang="ja" data-show-count="false">Tweet</a>
                <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
              </li>
            </ul>

            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
          <?php endif; ?>
        </div>

        <?php
          $paged = get_query_var('paged')? get_query_var('paged') : 1;
          $args = array(
            'post_type' => 'blog',
            'paged' => $paged,
            'post_status' => 'publish',
            'orderby' => 'meta_value',
            'meta_key' => 'date',
            'order' => 'DESC',
            'posts_per_page' => 3,
          );

          $postslist = get_posts($args);
          $information= new WP_Query($args);
        ?>

        <div class="new-post d-md-none">最近の投稿</div>
        <?php if (count($postslist) > 0) : ?>
          <?php
            foreach ( $postslist as $post ): // ループの開始
            setup_postdata( $post ); // 記事データの取得
            $category = get_field('category');
          ?>

          <div class="sp-blog-wrap d-md-none row no-gutters">
            <div class="col-4 d-flex align-items-center">
              <a href="<?php echo get_permalink(); ?>">
                <img class="blog-img" src="<?php the_field('eye_catching_image') ?>"></img>
              </a>
            </div>
            <div class="col-8">
              <div class="card-body">
                <h5 class="title"><a href="<?php echo get_permalink(); ?>"><?php the_title() ?></a></h5>
                <p class="card-text">
                  <div class="blod-date"><?php the_field('date') ?></div>
                  <?php foreach((array)$category as $value) { ?>
                    <a href="/archives/category/<?php echo $value->slug; ?>" class="side-category">
                        <?php echo $value->name; ?>
                    </a>
                  <?php } ?>
                </p>
              </div>
            </div>
          </div>

          <?php
            endforeach; // ループの終了
          ?>
        <?php else : ?>
          <div class="text-center d-md-none">現在投稿はありません。</div>
        <?php
          endif;
          wp_reset_postdata();
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

        <div class="category-list d-md-none">カテゴリ</div>
        <ul class="links d-md-none">
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

        <div class="sidebar d-none d-md-inline-block">
          <div class="new-post">最近の投稿</div>
          <?php if (count($postslist) > 0) : ?>
            <?php
              foreach ( $postslist as $post ): // ループの開始
              setup_postdata( $post ); // 記事データの取得
              $category = get_field('category');
            ?>

            <div class="card-deck">
              <div class="card">
                <a href="<?php echo get_permalink(); ?>">
                  <img class="" src="<?php the_field('eye_catching_image') ?>"></img>
                </a>
                <div class="card-body">
                  <p class="card-text blod-date"><?php the_field('date') ?></p>
                  <div class="card-text">
                    <?php foreach((array)$category as $value) { ?>
                      <a href="/archives/category/<?php echo $value->slug; ?>" class="side-category">
                        <?php echo $value->name; ?>
                      </a>
                    <?php } ?>
                  </div>
                  <h3 class="card-text title"><a href="<?php echo get_permalink(); ?>"><?php the_title() ?></a></h3>
                  <div class="card-text blod-text"><?php echo(the_field('description')); ?></div>
                </div>
              </div>
            </div>

            <?php
              endforeach; // ループの終了
            ?>
          <?php else : ?>
            <div class="text-center">現在投稿はありません。</div>
          <?php endif; ?>
          <div class="category-list">カテゴリ</div>
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

      <ul class="c-pager">
        <li class="c-pager__prev">
          <?php previous_post_link( '%link', '&lt;' ); ?>
        </li>
        <li class="c-pager__return">
          <a href="/blog">一覧へ戻る</a>
        </li>
        <li class="c-pager__next">
          <?php next_post_link( '%link', '&gt;' ); ?>
        </li>
      </ul>
      <?php get_previous_post_link(); ?>
    </div>
  </section>
</main>

<?php
get_footer();
