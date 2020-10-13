<?php
/**
 * Template Name: move contact
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
  <section class="">
    <?php if (have_posts()) : the_post(); ?>
      <div class="bg-img-1">
        <div class="title">
          <h1><?php the_title(); ?></h1>
          Inquiries About Moving
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-6 pr-0">
            <h3 class="is-sp">お問い合わせ<br>【お困りごと・苦情窓口】</h3>
            <h3 class="is-pc">お問い合わせ【お困りごと・苦情窓口】</h3>
            <div class="line-2"></div>
            <div class="text">お問い合せは専用窓口へ電話もしくは下記入力フォームにご記入の上、送信してください。</div>
            <div class="annotation-2">※お引越日や契約内容変更や資材等の手配・回収に関するご要望はお引越担当支社へお問い合せ下さい。</div>
          </div>
          <div class="col-6 d-flex align-items-center">
            <div class="bg-img-2"></div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row mt-3">
          <div class="col-12 text-right">
            <div>
              LINEからお問い合わせる
            </div>
            <span>
              <a href="https://lin.ee/KqeFQ9t">
                <img class="lineat" src="https://scdn.line-apps.com/n/line_add_friends/btn/ja.png" alt="友だち追加" height="8" border="0">
              </a>
            </span>
          </div>
        </div>
      </div>

      <h2>お問い合わせ</h2>

      <div class="line"></div>
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="annotation is-sp">※すべて必須項目となります。</div>
          </div>
        </div>
      </div>

      <div class="form">
        <div class="is-pc annotation-pc">※すべて必須項目となります。</div>
        <?php the_content(); ?>
        <div class="container">
          <div class="row mt-3 mb-3">
            <div class="col-12">
              <div class="annotation-3">幸運引越センターは、個人情報の重要性に鑑み、個人情報の保護に関する法律、その他関連法令等を遵守して、お客様に関する一切の情報を適正に利用・管理するとともに、安全管理について適切な措置を講じ、適宜見直し改善いたします。 また、従業員への教育・指導を徹底し、個人情報の適正な取扱が行われるよう取り組んでまいりますと共に、個人情報の取扱に関する苦情・相談に迅速に対応します。 詳しくは当社のＨＰ個人情報保護方針をご覧下さい。</div>
            </div>
          </div>
        </div>
      </div>
      <div class="line"></div>
    <?php endif; ?>
  </section>
</main>

<?php
get_footer('top');