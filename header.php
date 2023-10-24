<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="ja">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="Content-Script-Type" content="text/javascript">
  <meta http-equiv="Content-Style-Type" content="text/css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, user-scalable=1">
  <meta name="format-detection" content="telephone=no">
  <?php if (!is_front_page()): ?>
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/css/style.css">
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/css/default.css">
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/css/common2.css">
  <?php else : ?>
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/css/common.css">
  <?php endif ?>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <?php if (is_home() || is_page('result')) : ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1/i18n/jquery.ui.datepicker-ja.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/themes/base/jquery-ui.min.css">
  <?php endif ?>
  <link rel="stylesheet" href="http://3.115.140.108/css/app.css">
  <script src="http://3.115.140.108/js/rendering.js">
  </script>
  <link rel="stylesheet" media="screen and (min-width: 768px)" href="<?= get_template_directory_uri() ?>/css/style_pc.css">
  <link rel="stylesheet" media="screen and (max-width: 767px)" href="<?= get_template_directory_uri() ?>/css/style_sp.css">
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <title>feelabroad</title>
  <meta name="author" content="株式会社 ドリームエクスチェンジ">
  <meta name="description" content="新幹線・JR特急列車きっぷ予約サイト。みどりの窓口に並はず買ったきっぷはご自宅や職場へお届け。">
  <meta name="keywords" content="新幹線,JR,feelabroad">
</head>
<?php wp_head() ?>
<!-- ▼BODY部 スタート -->

<body>
  <div class="frame_outer"> <a name="top" id="top"></a>
    <div id="headertopcolumn">
      <!-- ▼ヘッダ -->
      <header>
        <div class="in_header">
          <h1 id="logo"><a href="<?= home_url() ?>">
              <!-- <img src="<?= get_template_directory_uri() ?>/img/logo.png" alt=""> -->
              <img src="<?= get_template_directory_uri() ?>/img/logo_aside.png" alt="新幹線・特急列車 チケットのかんたん予約サイト">
            </a></h1>
          <div id="side_button"><span></span><span></span><span></span></div>
          <nav id="slide_menu">
            <a href="<?= home_url('/guide/') ?>">
              <dl>
                <dt><img src="<?= get_template_directory_uri() ?>/img/ico_guide.png" alt="ご利用ガイド"></dt>
                <dd>ご利用ガイド</dd>
              </dl>
            </a>
            <a href="<?= home_url('/payment-info/') ?>">
              <dl>
                <dt><img src="<?= get_template_directory_uri() ?>/img/ico_pay.png" alt="お支払い方法"></dt>
                <dd>お支払い方法</dd>
              </dl>
            </a>
            <a href="<?= home_url('/cancel/') ?>">
              <dl>
                <dt><img src="<?= get_template_directory_uri() ?>/img/ico_cancel.png" alt="キャンセル"></dt>
                <dd>キャンセル</dd>
              </dl>
            </a>
            <a href="<?= home_url('/faq/') ?>">
              <dl>
                <dt><img src="<?= get_template_directory_uri() ?>/img/ico_qa.png" alt="Q&amp;A"></dt>
                <dd>Q&amp;A</dd>
              </dl>
            </a>
            <a href="<?= home_url('/cart/') ?>">
              <dl style="position: relative">
                <dt><img src="<?= get_template_directory_uri() ?>/img/ico_cart.png" alt="お買い物かご"></dt>
                <dd>お買い物かご</dd>
                <span class="cart__count_hermes"></span>
              </dl>
            </a>
            <a type="button" id="login_link">
              <dl>
                <dt><img src="<?= get_template_directory_uri() ?>/img/ico_user.png" alt="ログイン"></dt>
                <dd>ログイン</dd>
              </dl>
            </a>
          </nav>
          <div class=" cart_sp">
            <a href="<?= home_url('/cart/') ?>">
              <dl style="position: relative">
                <dt><img src="<?= get_template_directory_uri() ?>/img/ico_cart.png" alt="お買い物かご"></dt>
                <dd>お買い物かご</dd>
                <span class="cart__count_hermes"></span>
              </dl>
            </a>
          </div>
        </div>
      </header>
      <div class="layer"></div>
      <!-- ▲ヘッダ -->
    </div>
