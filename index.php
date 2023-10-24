<?php get_header() ?>

<div id="kv">
  <div class="in_kv">
    <picture class="kv_bg">
      <source media="(max-width: 767px)" srcset="<?= get_template_directory_uri() ?>/img/sample.jpg"> <img src="<?= get_template_directory_uri() ?>/img/kv_bg.jpg">
    </picture>
  </div>
  
  </div>
  <div class="container_hermes" id="index_hermes"></div>
</div>
<p class="notice"> <span class="highweight">重要</span>&nbsp;&nbsp;<a href="<?= home_url('/ticket_typec/') ?>">チケット券面にＣ制と表示の切符について</a> </p>
<!-- ▼新着情報 -->
<div id="info">
  <div class="in_bdy">
    <h2>■お知らせ</h2>
    <div class="info_list">
      <dl> <a>
          <dt>2022.12.26</dt>
          <dd><strong>年末年始休業期間のお知らせ<br>
              <br>
              平素はえきチケをご利用いただきまして、誠にありがとうございます。　　　　　　　　　　　　　　　　　 下記の期間を休業とさせて頂きます。</strong><br><br>2022年12月29日(木)～2022年1月4日(水)<br>
            ※休業期間中にお問い合わせ頂きましたメールまたはご注文につきましては、<br>
            2022年1月5日(木)より順次ご対応させて頂きます。<br>
            お届けしたチケットに関する質問は【キャンセル】【Q&amp;A】をご確認ください。<br>
            ご不便をおかけいたしますが、何卒ご了承くださいますようお願いいたします。</dd>
        </a> </dl>
      <div class="more">
        <!--a href="/user_data/news_bk.php">一覧を見る ＞</a-->
      </div>
    </div>
  </div>
</div>
<!-- ▲新着情報 -->
<!-- ▼トピックス -->
<div id="topic">
  <div class="in_bdy">
    <h2>■トピックス</h2>
    <ul>
      <li><a href="<?= home_url('/mailing_cost/') ?>"><img src="<?= get_template_directory_uri() ?>/img/bnr_01.png" alt="地域別送料一覧表はこちら"></a></li>
      <li><a href="<?= home_url('/payment/') ?>"><img src="<?= get_template_directory_uri() ?>/img/bnr_02.png" alt="配置チケットサービス"></a></li>
      <li><a href="<?= home_url('/domain/') ?>"><img src="<?= get_template_directory_uri() ?>/img/bnr_03.png" alt="受信拒否設定を解除"></a></li>
    </ul>
  </div>
</div>
<!-- ▲トピックス -->
</div>
<?php get_footer() ?>
