<footer>
  <div class="cta">

    <div class="bg-main p-5">
    </div>  

    <div class="row justify-content-end">
      <div class="col-lg-5 position-relative py-md-5 cta-image text-center">
        <img class="img-fluid my-md-3 rounded-1 shadow" src="<?php echo get_template_directory_uri(); ?>/images/cta.jpg" alt="">
      </div>
      <div class="col-lg-7 py-md-5 py-2 text-center">
        <p class="mb-md-5 my-4">まずは無料でご相談ください。</p>
        <a class="p-3" data-bs-toggle="modal" data-bs-target="#contact">お問い合わせ・お申し込みはこちらから<i class="fas fa-chevron-right ms-4"></i></a>
        <p class="my-md-5 my-4"><i class="fa fa-phone mx-2"></i>092-686-7954<span class="ms-2 small">(受付時間9:00〜18:00)</span></p>
      </div>
    </div>
  </div>


  <div class="bg-main p-md-4 pt-4 p-2">
    <a href="/">
      <img class="footer-logo" src="<?php echo get_template_directory_uri(); ?>/images/onestopriv.png" alt="">
    </a>
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

<?php if( wp_is_mobile() ): ?> 
<div id="mobile-menu" class="for-sp">
  <ul>
    <li class="bg-m-color"><a href="tel:092-686-7954">
      <i class="fas fa-phone"></i>
      電話でお問い合わせ</a>
    </li>
    <li><a data-bs-toggle="modal" data-bs-target="#contact">
      <i class="fas fa-envelope"></i>
      メールでお問い合わせ</a>
    </li>
  </ul>
</div>
<?php endif; ?>

<?php get_template_part('parts/modal'); ?>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="https://unpkg.com/scrollreveal"></script>
<?php wp_footer(); ?>
</body>
</html>