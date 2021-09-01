<?php /* Template Name: お問い合わせ完了ページ*/ ?>

<?php get_header(); ?>  
  <section id="thanks" class="container  d-flex align-items-center justify-content-center">
    <div class="p-2">
      <h1 class="text-center fs-3 my-5">お問い合わせありがとうございます。</h1>
      <p>ご入力いただいた情報は無事に送信されました。</p>
      <p>お客様に受付完了メールを1通送信しましたのでご確認下さい。</p>
      <p class="fw-bold fs-5 mt-5">受付完了メールが届かない場合</p>
      <p>ご利用のメールサービスの設定によっては迷惑フォルダへ送られている場合もございますので、迷惑メールフォルダも合わせてご確認下さい。</p>
      <p>もし、24時間経っても受付完了メールが届かない場合は、お手数ですが再度お問い合わせフォームかお電話にてお問い合わせ下さい</p>
      <div class="text-center my-5">
        <a href="/" class="d-inline-block py-2 px-5 border text-white bg-m-color">トップページへ戻る</a>
      </div>
    </div>

  </section>

  <footer>
    <div class="bg-main p-md-4 pt-4 p-2">
      <p class="logo lh-1 fw-bold text-center d-inline-block">
        <span class="fs-6">ワンストップリブ</span>
        <span class="br fs-3">One Stop Riv.</span>
      </p>
      <p class="f-description mt-3 mb-4">制作費・初期費用 0 円<span class="br">月々5,980円で雇えるWebの営業マン</p>
      <div class="information d-md-flex justify-content-between lh-lg">
        <p>運営会社：RivRound株式会社<span class="br">福岡県福岡市博多区 3-27-25 第二岡部ビル 9F</p>
        <div>
          <p><i class="fas fa-phone me-1"></i>電話番号：092-686-7954</p>
          <p><i class="fas fa-envelope me-1"></i>メールアドレス：info@riv-round.com</p>
        </div>
      </div>
    </div>
    <div class="bg-m-color p-3">
      <p class="text-white text-center small">＠RIVROUND.INC</p>
    </div>
  </footer>

<?php get_template_part('parts/modal'); ?>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="https://unpkg.com/scrollreveal"></script>
<?php wp_footer(); ?>
</body>
</html>