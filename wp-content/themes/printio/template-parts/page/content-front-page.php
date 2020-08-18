<?php
/**
 * Displays content for front page
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

?>
<main class="l-body top">
  <section class="p-mainImage">
    <div class="p-mainImage__txt js-pc-p-mainImage__txt"><h1>全国の工場とデジタルプリントの<br>新しい当たり前をつくる！</h1></div>
    <div class="p-mainImage__txt js-sp-p-mainImage__txt"><h1>全国の工場と<br>デジタルプリントの<br>新しい当たり前をつくる！</h1></div>
    <div class="swiper-container">
      <div class="swiper-wrapper">
        <div class="swiper-slide" style="background-image: url(wp-content/themes/printio/assets/images/parts-photo.png)"></div>
      </div>
    </div>
  </section>
  <?php
    $args = array(
      'post_type' => 'news',
      'posts_per_page' => 1,
      'post_status' => 'publish',
      'orderby' => 'meta_value',
      'meta_key' => 'date',
      'order' => 'DESC'
    );

    $postslist[0] = get_posts($args);
  ?>
  <div class="notice sp-notice">
    <table class="fluid-table">
      <tr>
        <th width="60px">
          <div class="sp-title">お知らせ</div>
        </th>
        <th width="40%">
          <div class="sp-content">
            <a href=<?php echo($postslist[0][0]->guid); ?>><?php echo($postslist[0][0]->post_title); ?></a>
          </div>
        </th>
      </tr>
    </table>
  </div>
	<section class="c-contents">
		<div class="l-container01">
			<div class="notice-area">
        <div class="notice pc-notice">
          <table class="fluid-table">
            <tr>
              <th width="140px">
                <div class="title">お知らせ</div>
              </th>
              <th width="60%">
                <a href=<?php echo($postslist[0][0]->guid); ?>><?php echo($postslist[0][0]->post_title); ?></a>
              </th>
              <th width="100px">
                <div class="more">
                  <a href='/news'>
                    もっと見る…
                  </a>
                </div>
              </th>
            </tr>
          </table>
        </div>
			</div>
		</div>

    <div class="bg-g pt-5 pb-5 mb-5">
      <div class="l-container01">
        <h2 class="c-title02 mb-5">BLOG</h2>
        <?php
          $blog_args = array(
            'post_type' => 'blog',
            'posts_per_page' => 3,
            'post_status' => 'publish',
            'orderby' => 'meta_value',
            'meta_key' => 'date',
            'order' => 'DESC'
          );

          $bloglist = get_posts($blog_args);
        ?>
        <?php if (count($bloglist) > 0) : ?>
          <div class="card-deck blog-card-deck">
  					<?php
  						foreach ( $bloglist as $index => $post ): // ループの開始
    						setup_postdata( $post ); // 記事データの取得

                $category = get_field('category');
  					?>
              <div class="card blog d-none d-md-block">
                <a href="<?php echo get_permalink(); ?>">
                  <img class="blog-card-img" src="<?php the_field('eye_catching_image') ?>"></img>
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

              <div class="card blog d-md-none sp-blog-card <?php echo $index == 1 ? 'sp-blog-center-item' : '';?>">
                <a href="<?php echo get_permalink(); ?>">
                  <img class="blog-card-img" src="<?php the_field('eye_catching_image') ?>"></img>
                </a>
                <div class="card-body sp-card-body">
                  <h3 class="card-text title"><a href="<?php echo get_permalink(); ?>"><?php the_title() ?></a></h3>
                </div>
                <div class="card-footer sp-card-footer">
                  <div class="blod-date"><?php the_field('date') ?></div>
                </div>
              </div>
  					<?php
  						endforeach; // ループの終了
  					?>

            <?php $i = count($bloglist); ?>
            <?php while ($i < 3) : ?>
              <div class="card blog card-hidden"></div>
              <?php $i++; ?>
            <?php endwhile; ?>
          </div>

          <div class='text-center d-none d-md-block'>
            <a class="btn btn-success rounded-pill blog-more-btn" href="/blog" role="button">もっと見る</a>
          </div>
          <div class='text-center d-md-none'>
            <a class="btn btn-success rounded-pill sp-blog-more-btn" href="/blog" role="button">もっと見る</a>
          </div>
        <?php else : ?>
          <div class="text-center">現在投稿はありません</div>
        <?php endif; ?>
      </div>
    </div>

    <div class="l-container01">
      <h2 class="pb-3 c-title02 pt-5">
        オンデマンド
        <br>
        プリントサービス
      </h2>

      <div class="pb-5">
        これまで当たり前だった、大量生産して在庫をもって販売し、余れば廃棄するものづくりを続けてきました。その結果、ユーザーニーズの多様化で、商品の売れ残りなどの在庫に苦しむことが増えてきました。
        <br>
        つくってから販売するのではなく、販売してから作ることで在庫をなくすことで、販売に集中することができ、より積極的に商品を展開することが可能になります。
        <br>
        インターネットとデジタルプリントで、みなさまのビジネスをオンデマンドビジネスに変えていきましょう。
      </div>

      <div class='mt-5 mb-5 text-center'>
        <img src="/wp-content/themes/printio/assets/images/Figure-01.svg" alt="Figure1" class="img-fluid"></img>
      </div>

      <h3 class="c-title03 pt-8rem">システム連携</h3>
      <div>
				御社のWEBサイトや受注システムとPrintioをシステム連携することで、受注が入るごとにPrintioの提携しているデジタルプリント工場に注文が送られます。
				<br>
				受注した商品は、1着から製造工場で製造され、注文いただいた御社のお客さんへ直接お届けいたします。
			</div>

      <div class='mt-5 mb-5 text-center'>
				<img src="/wp-content/themes/printio/assets/images/Figure-02.svg" alt="Figure2" class="img-fluid"></img>
			</div>

      <div class='text-center d-none d-md-block'>
				<a class="btn btn-success rounded-pill aboutus-btn" href="/aboutus" role="button">Printioについて</a>
			</div>
			<div class='text-center d-md-none'>
				<a class="btn btn-success rounded-pill sp-aboutus-btn" href="/aboutus" role="button">Printioについて</a>
			</div>
    </div>

    <div class="bg-g">
      <div class="l-container01">
        <div class="technology-area">
          <h2 class="pb-3 c-title02">Printioテクノロジー</h2>
          <div class='pb-6rem'>
            印刷業界の95％はWEB展開や工場のデジタル化に遅れており、印刷方法もデジタルプリントの普及率は、紙では3％、布では7％程度と言われています。私たちは、単純に受注窓口をWEB化したり、印刷方法を単純にデジタルプリントに切り替えるのではなくWEBとデジタルプリントだからこそできる新しいビジネスを生み出します。
          </div>

          <div class="card-deck">
            <div class="card bg-g l-l">
              <div class="card-body d-flex align-items-center">
                「クラウド製造管理」受注連携しWEBでいつでも製造状況を確認できます
              </div>
            </div>
            <div class="card l-l bg-g">
              <div class="card-body d-flex align-items-center">
                「デザインシュミレーター」WEBで印刷を頼む前に印刷の仕上がりをイメージできます
              </div>
            </div>
          </div>

          <div class="card-deck">
            <div class="card l-l bg-g">
              <div class="card-body d-flex align-items-center">
                「プリント自動化」個別大量生産のための自動面付けや自動印刷が可能です
              </div>
            </div>
            <div class="card l-l bg-g">
              <div class="card-body d-flex align-items-center">
                「品質管理」ものづくりにこだわる専門工場を選抜しPrintioが品質を担保します
              </div>
            </div>
          </div>

          <div class="card-deck">
            <div class="card l-l bg-g">
              <div class="card-body d-flex align-items-center">
                「デジタルプリント」様々の印刷方式の最新デジタルプリントで最高の印刷を提供します
              </div>
            </div>
            <div class="card l-l bg-g">
              <div class="card-body d-flex align-items-center">
                「出荷管理」個別配送を確実に行い、誤配送を防ぎます。
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="products-area">
      <div class="l-container01">
        <h2 class="c-title02 pb-5">取り扱い分野と商品</h2>
        <h4 class="c-title04">アパレル</h4>
        <div class="pb-3">
          Tシャツ、靴下、タオル、バンダナ、ハンカチなど
        </div>
        <h4 class="c-title04">販促ツール</h4>
        <div class="pb-3">
          のぼり、タペストリー、横断幕、懸垂幕、テーブルクロス、バナースタンドなど
        </div>
        <h4 class="c-title04">企業内印刷物</h4>
        <div class="pb-6rem">
          名刺、カタログ、パンフレット、チラシ、社員証など
        </div>

        <h4 class="c-title04">Printio Show Case by Instagram</h4>
        <?php echo do_shortcode('[instagram-feed]'); ?>

        <h3 class="c-title03 d-none d-md-block recommendation-title">こんなみなさんにおすすめです。</h3>
      </div>

      <div class="l-container01 d-none d-md-block">
        <div class="wrap-recommend bg-g">
          <div class="recommend-item">グッズ販売</div>
          <div class="recommend-description">受注生産できるオンデマンドアパレルの導入で利益率UPと在庫の削減を実現</div>
        </div>

        <div class="wrap-recommend">
          <div class="recommend-item">アパレルメーカー</div>
          <div class="recommend-description">システム連携で１個から大量生産で製造を依頼できる工場のアイテムが展開できます</div>
        </div>

        <div class="wrap-recommend bg-g">
          <div class="recommend-item">商品メーカー</div>
          <div class="recommend-description">自社商品をベースにしたカスタムプリントサイトの新規事業展開</div>
        </div>

        <div class="wrap-recommend">
          <div class="recommend-item">広告代理店</div>
          <div class="recommend-description">食品メーカーやチェーン店舗の販促ツールをWEBで一元化し利便性を向上</div>
        </div>

        <div class="wrap-recommend bg-g">
          <div class="recommend-item">大企業の企業内印刷物</div>
          <div class="recommend-description">名刺やチラシ、パンフレットなど受発注にまつわるバックオフィス業務を効率化</div>
        </div>

        <div class="wrap-recommend">
          <div class="recommend-item">中小企業・ベンチャー</div>
          <div class="recommend-description">自社で必要な印刷物はPrintioカタログで簡単に発注</div>
        </div>
      </div>

      <div class="l-container01">
        <div class="d-md-none">
          <h3 class="c-title03 pb-3">こんなみなさんにおすすめです。</h3>
        </div>
        <div class="d-md-none bg-g">
          <div class="sp-recommend-item">
            <div class="recommend-title">グッズ販売</div>
            受注生産できるオンデマンドアパレルの導入で利益率UPと在庫の削減を実現
          </div>
        </div>
        <div class="d-md-none">
          <div class="sp-recommend-item">
            <div class="recommend-title">アパレルメーカー</div>
            システム連携で１個から大量生産で製造を依頼できる工場のアイテムが展開できます
          </div>
        </div>
        <div class="d-md-none bg-g">
          <div class="sp-recommend-item">
            <div class="recommend-title">商品メーカー</div>
            自社商品をベースにしたカスタムプリントサイトの新規事業展開
          </div>
        </div>
        <div class="d-md-none">
          <div class="sp-recommend-item">
            <div class="recommend-title">広告代理店</div>
            食品メーカーやチェーン店舗の販促ツールをWEBで一元化し利便性を向上
          </div>
        </div>
        <div class="d-md-none bg-g">
          <div class="sp-recommend-item">
            <div class="recommend-title">大企業の企業内印刷物</div>
            名刺やチラシ、パンフレットなど受発注にまつわるバックオフィス業務を効率化
          </div>
        </div>
        <div class="d-md-none">
          <div class="sp-recommend-item">
            <div class="recommend-title">中小企業・ベンチャー</div>
            自社で必要な印刷物はPrintioカタログで簡単に発注
          </div>
        </div>
      </div>
    </div>

    <div class='catchphrase-area'>
      <div class='catchphrase__title'>
        ＼印刷をもっと楽しく！／
      </div>

      <div class="catchphrase__logos">
        <figure>
          <img src="wp-content/themes/printio/assets/images/logo-logo1.svg" alt="Printioロゴ"></img>
          <figcaption>デジタル印刷プラットフォーム</figcaption>
        </figure>
        <a href="https://happyfabric.me" target="_blank">
          <figure>
            <img src="wp-content/themes/printio/assets/images/logo-happyfabric.svg"></img>
            <figcaption>デジタルテキスタイルプラットフォーム</figcaption>
          </figure>
        </a>
        <a href="https://happyprinters.jp" target="_blank">
          <figure>
            <img src="wp-content/themes/printio/assets/images/logo-happyprinters.svg"></img>
            <figcaption>世界一ワクワクする印刷工場</figcaption>
          </figure>
        </a>
      </div>

      <div class="catchphrase__image">
        <img src="wp-content/themes/printio/assets/images/parts-photo2.png"></img>
      </div>
    </div>
	</section>
</main>