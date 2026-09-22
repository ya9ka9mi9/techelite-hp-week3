<?php
// このページのタイトル・説明を設定してから共通ヘッダーを読み込む
$page_title       = '歯科クリニック｜地域のかかりつけ歯科医院';
$page_description = '歯科クリニックは地域に根ざしたやさしい歯科医院です。一般歯科・小児歯科・予防歯科まで、あなたの笑顔を生涯サポートします。';
include 'includes/header.php';
?>

    <!-- ② ヒーロー（ファーストビュー） -->
    <!-- <section class="hero"> ... </section> -->
    <section class="hero">
      <div class="hero__inner">
        <h1 class="hero__title">あなたの笑顔を、生涯支えます。 </h1>
        <p class="hero__lead">地域に根ざした、やさしい歯科クリニック</p>
        <a href="#contact" class="hero__cta">お問い合わせ</a>
      </div>
    </section>

    <section class="service" id="service">
      <div class="service__inner">
        <h2 class="service__title">診療内容</h2>
        <div class="service__cards">
    
          <div class="card">
            <div class="card__icon">●</div>
            <h3 class="card__title">一般歯科</h3>
            <p class="card__text">虫歯や歯周病の治療から予防まで、痛みに配慮したていねいな診療を行います。</p>
          </div>
    
          <div class="card">
            <div class="card__icon">●</div>
            <h3 class="card__title">小児歯科</h3>
            <p class="card__text">お子さまが歯医者を好きになれるよう、無理のないやさしい治療を心がけています。</p>
          </div>
    
          <div class="card">
            <div class="card__icon">●</div>
            <h3 class="card__title">予防・クリーニング</h3>
            <p class="card__text">定期的な検診とクリーニングで、むし歯や歯周病になりにくいお口を保ちます。</p>
          </div>
    
        </div>
      </div>
    </section>

  <section class="about" id="about">
    <div class="about__inner">
      <h2 class="about__title">クリニック概要</h2>
      <dl class="about__list">
        <dt>クリニック名</dt><dd>ダミー歯科クリニック</dd>
        <dt>院長</dt><dd>歯科 太郎</dd>
        <dt>所在地</dt><dd>東京都〇〇区△△1-2-3</dd>
        <dt>診療時間</dt><dd>平日 9:00〜18:00 / 土 9:00〜13:00</dd>
        <dt>電話番号</dt><dd>03-1234-5678</dd>
      </dl>
    </div>
  </section>

  <section class="faq" id="faq">
    <div class="faq__inner">
      <h2 class="faq__title">よくある質問</h2>
  
      <div class="faq__item">
        <button class="faq__question">初診の予約は必要ですか？</button>
        <div class="faq__answer">
          <p>お電話またはお問い合わせフォームから事前予約をお願いしております。</p>
        </div>
      </div>
  
      <div class="faq__item">
        <button class="faq__question">駐車場はありますか？</button>
        <div class="faq__answer">
          <p>提携駐車場を3台分ご用意しております。</p>
        </div>
      </div>
  
      <div class="faq__item">
        <button class="faq__question">保険は使えますか？</button>
        <div class="faq__answer">
          <p>各種健康保険がご利用いただけます。自由診療も承ります。</p>
        </div>
      </div>
  
    </div>
  </section>

  <section class="contact" id="contact">
    <div class="contact__inner">
      <h2 class="contact__title">お問い合わせ</h2>
      <p class="contact__text">ご予約・ご相談は、お電話またはメールでお気軽にどうぞ。</p>
      <p class="contact__info">
        <a href="tel:0312345678">TEL: 03-1234-5678</a><br>
        <a href="mailto:info@example.com">info@example.com</a>
      </p>
      <a href="#" class="contact__cta">お問い合わせはこちら</a>
    </div>
  </section>

  
  <!-- ============================================
           フォームバリデーション
  ============================================ -->

<form class="contact__form" id="contact-form" novalidate>
  <div class="form-group">
    <label for="name">お名前 <span class="required">必須</span></label>
    <input type="text" id="name" name="name">
    <p class="error-message" id="name-error"></p>
  </div>

  <div class="form-group">
    <label for="email">メールアドレス <span class="required">必須</span></label>
    <input type="email" id="email" name="email">
    <p class="error-message" id="email-error"></p>
  </div>

  <div class="form-group">
    <label for="message">お問い合わせ内容 <span class="required">必須</span></label>
    <textarea id="message" name="message" rows="5"></textarea>
    <p class="error-message" id="message-error"></p>
  </div>

  <button type="submit" class="submit-btn">送信する</button>
</form>

<p id="form-result"></p>


<?php include 'includes/footer.php'; ?>
