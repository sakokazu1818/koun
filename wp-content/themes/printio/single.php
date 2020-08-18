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

<main class="l-body news">
  <section class="c-sub__contents">
    <div class="l-container01">
      <h1 class="c-title01">お知らせ</h1>
      <?php if (have_posts()) : the_post(); ?>
        <ul class="c-news__detail__list">
          <li><p class="c-news__date"><?php the_field('date') ?></p></li>
          <li><p class="c-news__label c-news__label-01"><?php the_field('tag') ?></p></li>
        </ul>
        <h2 class="c-news__detail__title"><?php the_title(); ?></h2>
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

        <ul class="c-pager">
          <li class="c-pager__prev">
            <?php previous_post_link( '%link', '&lt;' ); ?>
          </li>
          <li class="c-pager__return">
            <a href="/news">一覧へ戻る</a>
          </li>
          <li class="c-pager__next">
            <?php next_post_link( '%link', '&gt;' ); ?>
          </li>
        </ul>
        <?php get_previous_post_link(); ?>
      <?php endif; ?>
    </div>
  </section>
</main>

<?php
get_footer();
