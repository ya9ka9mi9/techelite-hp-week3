<?php
$page_title       = '入力内容の確認｜歯科クリニック';
$page_description = 'お問い合わせ内容の確認画面です。';

// HTML 出力用のエスケープヘルパー
function h($value) {
  return htmlspecialchars($value ?? '', ENT_QUOTES, 'UTF-8');
}

// POST 以外（直アクセスなど）は入力ページへ戻す
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  header('Location: contact.php');
  exit;
}

$name    = trim($_POST['name']    ?? '');
$email   = trim($_POST['email']   ?? '');
$message = trim($_POST['message'] ?? '');

// 「送信する」が押されたかどうか
$isSend = isset($_POST['action']) && $_POST['action'] === 'send';

// サーバー側でも必須チェック（JSを通っていない場合の保険）
$errors = [];
if ($name === '')    { $errors[] = 'お名前'; }
if ($email === '')   { $errors[] = 'メールアドレス'; }
if ($message === '') { $errors[] = 'お問い合わせ内容'; }

include 'includes/header.php';
?>

    <section class="hero">
      <div class="hero__inner">
        <h1 class="hero__title"><?php echo $isSend ? '送信完了' : '入力内容の確認'; ?></h1>
      </div>
    </section>

    <section class="contact" id="contact">
      <div class="contact__inner">

<?php if (!empty($errors)): ?>
        <!-- 未入力があった場合：入力ページへ戻す案内 -->
        <p class="contact__text">
          <?php echo h(implode('・', $errors)); ?> が未入力です。お手数ですが入力し直してください。
        </p>
        <form action="contact.php" method="post">
          <input type="hidden" name="name"    value="<?php echo h($name); ?>">
          <input type="hidden" name="email"   value="<?php echo h($email); ?>">
          <input type="hidden" name="message" value="<?php echo h($message); ?>">
          <button type="submit" class="submit-btn">入力画面に戻る</button>
        </form>

<?php elseif ($isSend): ?>
        <!-- 送信完了（今回はダミー。実際のメール送信等はここに実装） -->
        <p class="contact__text">お問い合わせありがとうございました。<br>担当者より折り返しご連絡いたします。</p>
        <p style="text-align:center; margin-top: var(--space-lg);">
          <a href="index.php" class="contact__cta">トップへ戻る</a>
        </p>

<?php else: ?>
        <!-- 確認表示 -->
        <p class="contact__text">以下の内容でよろしければ「送信する」を押してください。</p>

        <dl class="about__list" style="max-width:500px; margin:var(--space-lg) auto;">
          <dt>お名前</dt><dd><?php echo h($name); ?></dd>
          <dt>メールアドレス</dt><dd><?php echo h($email); ?></dd>
          <dt>お問い合わせ内容</dt><dd><?php echo nl2br(h($message)); ?></dd>
        </dl>

        <div style="display:flex; gap:var(--space-md); justify-content:center; flex-wrap:wrap;">
          <!-- 戻る：入力値を保持したまま contact.php へ -->
          <form action="contact.php" method="post">
            <input type="hidden" name="name"    value="<?php echo h($name); ?>">
            <input type="hidden" name="email"   value="<?php echo h($email); ?>">
            <input type="hidden" name="message" value="<?php echo h($message); ?>">
            <button type="submit" class="submit-btn" style="background:#888;">戻る</button>
          </form>

          <!-- 送信：action=send を付けて再POST -->
          <form action="confirm.php" method="post">
            <input type="hidden" name="name"    value="<?php echo h($name); ?>">
            <input type="hidden" name="email"   value="<?php echo h($email); ?>">
            <input type="hidden" name="message" value="<?php echo h($message); ?>">
            <input type="hidden" name="action"  value="send">
            <button type="submit" class="submit-btn">送信する</button>
          </form>
        </div>
<?php endif; ?>

      </div>
    </section>

<?php include 'includes/footer.php'; ?>
