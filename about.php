<?php
$page_title       = '会社概要｜歯科クリニック';
$page_description = '歯科クリニックの会社概要ページです。クリニック名・院長・所在地・診療時間・アクセスなどの基本情報をご案内します。';
include 'includes/header.php';
?>

    <!-- ページ見出し（ヒーローを流用したシンプルな帯） -->
    <section class="hero">
      <div class="hero__inner">
        <h1 class="hero__title">会社概要</h1>
        <p class="hero__lead">わたしたちについてご紹介します</p>
      </div>
    </section>

    <section class="about" id="about">
      <div class="about__inner">
        <h2 class="about__title">クリニック概要</h2>
        <dl class="about__list">
          <dt>クリニック名</dt><dd>ダミー歯科クリニック</dd>
          <dt>院長</dt><dd>歯科 太郎</dd>
          <dt>所在地</dt><dd>東京都〇〇区△△1-2-3</dd>
          <dt>最寄り駅</dt><dd>△△線 △△駅 徒歩5分</dd>
          <dt>診療時間</dt><dd>平日 9:00〜18:00 / 土 9:00〜13:00</dd>
          <dt>休診日</dt><dd>日曜・祝日</dd>
          <dt>電話番号</dt><dd>03-1234-5678</dd>
          <dt>診療科目</dt><dd>一般歯科・小児歯科・予防歯科</dd>
        </dl>

        <p style="text-align:center; margin-top: var(--space-lg);">
          <a href="contact.php" class="contact__cta">お問い合わせはこちら</a>
        </p>
      </div>
    </section>

<?php include 'includes/footer.php'; ?>
