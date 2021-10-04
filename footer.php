<footer>
  <div class="cta">

    <div class="bg-main p-sm-5">
    </div>  

    <div class="row justify-content-end">
      <div class="col-lg-5 position-relative py-md-5 cta-image text-center">
        <img class="img-fluid my-md-3 rounded-1 shadow" src="<?php echo get_template_directory_uri(); ?>/images/cta.jpg" alt="">
      </div>
      <div class="col-lg-7 py-md-5 py-2 text-center">
        <p class="mb-md-5 my-4">ぜひ無料でご相談ください。</p>
        <button type="button" class="btn btn-main d-block mx-auto py-3" data-bs-toggle="modal" data-bs-target="#contact">まずはお問い合わせ<i class="fas fa-chevron-right ms-3"></i></button>
        <p class="my-md-5 my-4"><i class="fa fa-phone mx-2"></i>050-3159-9527<span class="ms-2 small">(受付時間9:00〜18:00)</span></p>
      </div>
    </div>
  </div>
  <div class="bg-main p-md-4 pt-4 p-2">
    <a href="/">
      <img class="footer-logo" src="<?php echo get_template_directory_uri(); ?>/images/onestopriv2.png" alt="">
    </a>
    <div class="footer-desc">
      <p class="f-description mt-3 mb-4">制作費・初期費用 0 円<span class="br">月々4,980円で作れる<br>効果の出るホームページ制作</p>
      <div class="information lh-lg">
        <p>運営会社：RivRound株式会社<span class="br">福岡県福岡市博多区 3-27-25 第二岡部ビル 9F</p>
        <div>
          <p><i class="fas fa-phone me-1"></i>050-3159-9527</p>
          <p><i class="fas fa-envelope me-1"></i>info@riv-round.com</p>
        </div>
      </div>
    </div>
  </div>
  <div class="bg-m-color p-3 copyright">
    <p class="text-white text-center small">＠RIVROUND.INC</p>
  </div>
</footer>

<?php if( wp_is_mobile() ): ?> 
<div id="mobile-menu" class="for-sp sp-navbtn">
  <ul>
    <li class="bg-m-color"><a href="tel:050-3159-9527">
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