// --- ハンバーガーメニュー ---
const hamburger = document.querySelector(".header__hamburger");
const nav = document.querySelector(".header__nav");

if (hamburger && nav) {
  hamburger.addEventListener("click", () => {
    nav.classList.toggle("is-open");
  });

  document.querySelectorAll(".header__nav a").forEach((link) => {
    link.addEventListener("click", () => {
      nav.classList.remove("is-open");
    });
  });
}

// --- アコーディオンFAQ ---
document.querySelectorAll(".faq__question").forEach((q) => {
  q.addEventListener("click", () => {
    q.parentElement.classList.toggle("is-open");
  });
});


// --- トップへ戻るボタン ---
const toTop = document.querySelector("#to-top");

if (toTop) {
  // スクロール量に応じて表示/非表示
  window.addEventListener("scroll", () => {
    if (window.scrollY > 10) {
      toTop.classList.add("is-visible");
    } else {
      toTop.classList.remove("is-visible");
    }
  });

  // クリックで最上部へ戻る
  toTop.addEventListener("click", () => {
    window.scrollTo({ top: 0, behavior: "smooth" });
  });
}


// --- フォームバリデーション ---
const form = document.querySelector("#contact-form");
const result = document.querySelector("#form-result");
const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

// エラー表示のヘルパー
function showError(id, message) {
  document.querySelector(`#${id}`).classList.add("is-error");
  document.querySelector(`#${id}-error`).textContent = message;
}

// エラー解除のヘルパー
function clearError(id) {
  document.querySelector(`#${id}`).classList.remove("is-error");
  document.querySelector(`#${id}-error`).textContent = "";
}

if (form) {
form.addEventListener("submit", (event) => {
  let isValid = true;

 // --- お名前 ---
 const name = document.querySelector("#name").value.trim();
 if (name === "") {
   showError("name", "お名前を入力してください");
   isValid = false;                          // ← ①
 } else {
   clearError("name");
 }

  // --- メール ---
  const email = document.querySelector("#email").value.trim();
  if (email === "") {
    showError("email", "メールアドレスを入力してください");
    isValid = false;
  } else if (!emailPattern.test(email)) {     // ← ②
    showError("email", "メールアドレスの形式が正しくありません");
    isValid = false;
  } else {
    clearError("email");
  }

  // --- お問い合わせ内容 ---
  const message = document.querySelector("#message").value.trim();
  if (message === "") {
    showError("message", "お問い合わせ内容を入力してください");
    isValid = false;
  } else {
    clearError("message");
  }

  // --- 入力に問題があれば送信を止める。OKならそのまま confirm.php へ送信 ---
  if (!isValid) {
    event.preventDefault();
    result.textContent = "";
  }
});
}
