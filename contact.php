<?php
$page_title       = 'お問い合わせ｜歯科クリニック';
$page_description = '歯科クリニックへのお問い合わせフォームです。ご予約・ご相談はこちらのフォームからお気軽にどうぞ。';

// confirm.php から「戻る」で戻ってきたときに、入力値を復元するための値。
// h() は HTML 出力用のエスケープを短く書くためのヘルパー。
function h($value) {
  return htmlspecialchars($value ?? '', ENT_QUOTES, 'UTF-8');
}
$name    = $_POST['name']    ?? '';
$email   = $_POST['email']   ?? '';
$message = $_POST['message'] ?? '';

include 'includes/header.php';
?>

    <section class="hero">
      <div class="hero__inner">
        <h1 class="hero__title">お問い合わせ</h1>
        <p class="hero__lead">下記フォームよりお気軽にご連絡ください</p>
      </div>
    </section>

    <section class="contact" id="contact">
      <div class="contact__inner">
        <h2 class="contact__title">お問い合わせフォーム</h2>
        <p class="contact__text">必須項目をご入力のうえ、「確認画面へ」をお進みください。</p>

        <!-- 送信先を confirm.php に。novalidate はJS側でバリデーションするため -->
        <form class="contact__form" id="contact-form" action="confirm.php" method="post" novalidate>
          <div class="form-group">
            <label for="name">お名前 <span class="required">必須</span></label>
            <input type="text" id="name" name="name" value="<?php echo h($name); ?>">
            <p class="error-message" id="name-error"></p>
          </div>

          <div class="form-group">
            <label for="email">メールアドレス <span class="required">必須</span></label>
            <input type="email" id="email" name="email" value="<?php echo h($email); ?>">
            <p class="error-message" id="email-error"></p>
          </div>

          <div class="form-group">
            <label for="message">お問い合わせ内容 <span class="required">必須</span></label>
            <textarea id="message" name="message" rows="5"><?php echo h($message); ?></textarea>
            <p class="error-message" id="message-error"></p>
          </div>

          <button type="submit" class="submit-btn">確認画面へ</button>
        </form>

        <p id="form-result"></p>
      </div>
    </section>

<?php include 'includes/footer.php'; ?>
