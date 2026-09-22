<?php
// $page_title / $page_description は各ページで include する前に設定する。
// 未設定でも動くようにデフォルト値を用意しておく（安全策）。
$page_title       = isset($page_title) ? $page_title : '歯科クリニック｜地域のかかりつけ歯科医院';
$page_description = isset($page_description) ? $page_description : '歯科クリニックは地域に根ざしたやさしい歯科医院です。一般歯科・小児歯科・予防歯科まで、あなたの笑顔を生涯サポートします。';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo htmlspecialchars($page_title, ENT_QUOTES, 'UTF-8'); ?></title>
  <meta name="description" content="<?php echo htmlspecialchars($page_description, ENT_QUOTES, 'UTF-8'); ?>">

  <!-- favicon（ダミー。あとで自分の画像に差し替えOK） -->
  <link rel="icon" href="favicon.png">
  <link rel="stylesheet" href="css/style_week1-5_kadai.css">
</head>

<body>
  <!-- ===============================================
       ① ヘッダー（固定・ロゴ＋ナビ3項目）
       ナビはこの header.php の1箇所だけに書く
    ============================================ -->
  <header class="header">
    <div class="header__inner">
      <div class="header__logo"><a href="index.php">歯科クリニック</a></div>
      <nav class="header__nav">
        <a href="index.php">トップ</a>
        <a href="about.php">会社概要</a>
        <a href="contact.php">お問い合わせ</a>
      </nav>
      <button class="header__hamburger" aria-label="メニューを開く">≡</button>
    </div>
  </header>

  <!-- ============================================
       main：ページの主要コンテンツ全体を包む
       各ページの本文はこの後に続く
  ============================================ -->
  <main>
