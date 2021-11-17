<?php get_header(); ?>
  <main>
    <!-- ファーストビュー -->
    <section id="top" class="p-md-4 p-3">
      <div class="top-inner">
        <div class="top-wrap">
          <h1 class="top-title">
            <p>初期費用・制作費 <span class="m-color price">0<span class="fs-3">円</span></span></p>
            <p>月々 <span class="m-color price">4,980<span class="fs-3">円</span></span>で作れる</p>
            <p>
              <span class="txt-md"><span class="dot">効果の出る</span>ホームページ制作</span>
            </p>
          </h1>
          <div class="top-btn">
          <a class="contact-link-pc" href="/contact">
            <button type="button" class="btn btn-main my-4 mx-auto view-pc">まずお問い合わせ<i class="fas fa-chevron-right ms-3"></i></button>
          </a>
          </div>
        </div>
        <div class="top-img">
            <img id="main-img" class="img-fluid mt-lg-5  vert-move" src="<?php echo get_template_directory_uri(); ?>/images/top.png" alt="">
        </div>
        <div class="top-btn">
          <a class="contact-link" href="/contact">
          <button type="button" class="btn btn-main my-4 mx-auto view-sp">まずお問い合わせ<i class="fas fa-chevron-right ms-3"></i></button>
          </a>
        </div>
      </div>
      <div class="scrolldown"> 
        <span>Scroll</span>
      </div>
      <div class="pc-desc">
          <p class="fs-5 mb-3">One Stop Riv.は月額制(サブスクリプション型)の
          <span>ホームページ制作サービスです。
          </p>
          <span class="badge rounded-pill bg-m-color fs-6 m-1 p-md-3 p-2">制作費0円</span>
          <span class="badge rounded-pill fs-6 m-1 p-md-3 p-2">オリジナルデザイン</span>
          <span class="badge rounded-pill bg-m-color fs-6 m-1 p-md-3 p-2">スマホ対応</span>
          <span class="badge rounded-pill bg-m-color fs-6 m-1 p-md-3 p-2">投稿機能</span>
          <span class="badge rounded-pill bg-m-color fs-6 m-1 p-md-3 p-2">最短5日納品</span>
          <span class="badge rounded-pill bg-m-color fs-6 m-1 p-md-3 p-2">SSL化対応</span>
      </div>
    </section>

    <!-- 豊富なテンプレート -->
    <section id="template" class="bg-sub">
      <div class="position-relative text-center py-5">
        <p class="sub-title">\全てオリジナルデザイン/</p>
        <h2>豊富なテンプレート</h2>
        <span class="position-absolute balloon balloon-left fs-5 fw-bold">選べる！</span> 
      </div>

      <div id="js-infiniteslide" class="gallery px-md-5 pb-5">

        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/template/construction-4.jpg" alt="">
        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/template/salon-1.jpg" alt="">
        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/template/gym-moc.jpg" alt="">
        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/template/construction-2.jpg" alt="">
        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/template/food-1.jpg" alt="">
        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/template/este-moc.jpg" alt="">
        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/template/food-2.jpg" alt="">
        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/template/dental-1.jpg" alt="">
        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/template/dental-2.jpg" alt="">
        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/template/salon-4.jpg" alt="">
        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/template/food-3.jpg" alt="">
        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/template/food-4.jpg" alt="">
        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/template/dental-3.jpg" alt="">
        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/template/dental-4.jpg" alt="">
        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/template/salon-5.jpg" alt="">
        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/template/salon-6.jpg" alt="">
        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/template/food-5.jpg" alt="">
        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/template/dental-5.jpg" alt="">
      </div>

    </section>

    <!-- 料金プラン -->
    <section id="price" class="p-lg-5 p-3">
      <div class="text-center py-5 position-relative">
        <p class="sub-title">\安心の料金プラン/</p>
        <h2>利用料は月額の4,980円のみ</h2>
        <span class="position-absolute balloon balloon-right fs-5 fw-bold">解約も自由！</span> 
      </div>
      <div class="row row-cols-lg-2">
        <img class="img-fluid my-3 fadeIn" src="<?php echo get_template_directory_uri(); ?>/images/price4980.png" alt="">
        <div class="my-3 p-md-5">
          <p class="mb-4">One Stop Rivは、月額定額制(サブスクリプション型)のホームページ制作サービスです。月額制なので製作費は0円、月額4,980円(+税)だけでご利用頂けます。</p>
          <p>※ご契約期間の縛り、早期解約の違約金は一切ないので、必要性を感じなくなればいつでもご解約頂けます。</p>
        </div>
      </div>

      <div class="row row-cols-md-5 row-cols-4  boul mx-md-4 my-4">
        <div class="rounded-circle position-relative shadow vert-move-1">
          <p class="position-absolute fs-5 lh-sm text-white">制作費<span class="br fs-1">0</span>円</span></p>  
        </div>
        <div class="rounded-circle position-relative shadow bg-main vert-move-2">
          <p class="position-absolute fs-5 lh-sm">初期費用<span class="br fs-1">0</span>円</span></p>  
        </div>
        <div class="rounded-circle position-relative shadow vert-move-1">
          <p class="position-absolute fs-5 lh-sm text-white">修正費<span class="br fs-1">0</span>円</span></p>  
        </div>
        <div class="rounded-circle position-relative shadow bg-main vert-move-2">
          <p class="position-absolute fs-5 lh-sm">契約縛り<span class="br fs-2">なし</span></p>  
        </div>
      </div>
    </section>

    <!-- 売り上げにつながるサイ ト -->
    <section id="feature" class="bg-main p-lg-5 px-3 py-5">
      <div class="position-relative text-center py-5">
        <p class="sub-title">\当社が全て対応/</p>
        <h2>売上につながるサイト制作</h2>
        <span class="position-absolute balloon balloon-right fs-5 fw-bold">選ばれる理由！</span>
      </div>
      <div class="row row-cols-lg-3 row-cols-md-2 px-md-3">
        <div class="my-4">
          <div class="bg-white box shadow-sm px-3 py-4 text-center position-relative">
            <div class="position-absolute count">
              <p class="text-white fs-3">1</p>
            </div>
            <img class="img-fluid p-4" src="<?php echo get_template_directory_uri(); ?>/images/feature/feature-1.png" alt="">
            <h3>デザイン性の高いホームページ</h3>
            <p class="px-md-4">厳選したデザインをテンプレートとして利用できる</p>
          </div>
        </div>
        <div class="my-4">
          <div class="bg-white box shadow-sm px-3 py-4 text-center position-relative">
            <div class="position-absolute count">
              <p class="text-white fs-3">2</p>
            </div>
            <img class="img-fluid p-4" src="<?php echo get_template_directory_uri(); ?>/images/feature/feature-2-2.png" alt="">
            <h3>モバイル・タブレットも対応</h3>
            <p class="px-md-4">ユーザーが閲覧するデバイスに合わせた最適なデザインを採用</p>
          </div>
        </div>
        <div class="my-4">
          <div class="bg-white box shadow-sm px-3 py-4 text-center position-relative">
            <div class="position-absolute count">
              <p class="text-white fs-3">3</p>
            </div>
            <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/feature/feature-3.png" alt="">
            <h3>お知らせ機能を実装</h3>
            <p class="px-md-4">ユーザーに最新情報を発信するお知らせ機能でカンタン情報発信</p>
          </div>
        </div>
        <div class="my-4">
          <div class="bg-white box shadow-sm px-3 py-4 text-center position-relative">
            <div class="position-absolute count">
              <p class="text-white fs-3">4</p>
            </div>
            <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/feature/feature-4.png" alt="">
            <h3>SEO対策で集客支援</h3>
            <p class="px-md-4">より多くの訪問者数を獲得するためのSEO対策を実施</p>
          </div>
        </div>
        <div class="my-4">
          <div class="bg-white box shadow-sm px-3 py-4 text-center position-relative">
            <div class="position-absolute count">
              <p class="text-white fs-3">5</p>
            </div>
            <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/feature/feature-5.png" alt="">
            <h3>各種解析ツールの設定</h3>
            <p class="px-md-4">Googleアナリティクス・サーチコンソールでユーザー情報を分析</p>
          </div>
        </div>
        <div class="my-4">
          <div class="bg-white box shadow-sm px-3 py-4 text-center position-relative">
            <div class="position-absolute count">
              <p class="text-white fs-3">6</p>
            </div>
            <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/feature/feature-6.png" alt="">
            <h3>日々の更新・リニューアルOK</h3>
            <p class="px-md-4">写真の差替えや文言の変更など掲載内容変更も毎月無料で対応</p>
          </div>
        </div>
        <div class="my-4">
          <div class="bg-white box shadow-sm px-3 py-4 text-center position-relative">
            <div class="position-absolute count">
              <p class="text-white fs-3">7</p>
            </div>
            <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/feature/feature-7.png" alt="">
            <h3>サーバー保守・管理もお任せ</h3>
            <p class="px-md-4">インターネット上に公開するためのサーバー管理・保守運用を代行</p>
          </div>
        </div>
        <div class="my-4">
          <div class="bg-white box shadow-sm px-3 py-4 text-center position-relative">
            <div class="position-absolute count">
              <p class="text-white fs-3">9</p>
            </div>
            <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/feature/feature-9.png" alt="">
            <h3>最短5営業日のスピード公開</h3>
            <p class="px-md-4">お申し込みから最短5日営業日でホームページを公開</p>
          </div>
        </div>
        <div class="my-4">
          <div class="bg-white box shadow-sm px-3 py-4 text-center position-relative">
            <div class="position-absolute count">
              <p class="text-white fs-3">8</p>
            </div>
            <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/feature/feature-10.png" alt="">
            <h3>あると助かる機能も全て無料</h3>
            <p class="px-md-4">SSL化対応・SNS連携・予約リンクアニメーション・お問い合わせフォームも無料
            </p>
          </div>
        </div>
      </div>
      <a class="contact-link" href="/contact">
        <button type="button" class="btn btn-main my-4 mx-auto view-sp">まずお問い合わせ<i class="fas fa-chevron-right ms-3"></i></button>
      </a>
    </section>

    <!-- こんな業種で -->
    <section id="industry">
      <div class="text-center py-5">
        <p class="sub-title">\業種別に最適なテンプレートを用意/</p>
        <h2>様々な業種でお使い頂けます</h2>
        <p class="industry-text">※画像をタップしてサンプルサイトをご覧下さい</p>
      </div>
      <div class="beauty industry-item pb-3">
        <h3 class="fadeIn">Beauty</h3>
        <div class="title p-md-3 p-2 mt-md-5 my-4 shadow-sm scroll-left"><p>サロン</p></div>
        
        <div class="slide-wrap px-md-5 pb-3"> 
          <div class="slide-content">
            <a href="https://hair-salon-1.netlify.app/" target="_blank">
              <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/template/salon-1.jpg" alt="">
            </a>
          </div>
          <div class="slide-content">
            <a href="https://gym-1.netlify.app/" target="_blank">
              <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/template/gym-moc.jpg" alt="">
            </a>
          </div>
          <div class="slide-content">
            <a href="https://este-1.netlify.app/" target="_blank">
              <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/template/este-moc.jpg" alt="">
            </a>
          </div>
          <div class="slide-content">
            <a href="https://hair-salon-2.netlify.app/" target="_blank">
              <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/template/salon-2.jpg" alt="">
            </a>
          </div>
          <div class="slide-content">
            <a href="https://hair-salon-4.netlify.app/" target="_blank">
              <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/template/salon-4.jpg" alt="">
            </a>
          </div>
          <div class="slide-content">
            <a href="https://hair-salon-5.netlify.app/" target="_blank">
              <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/template/salon-5.jpg" alt="">
            </a>
          </div>
          <div class="slide-content">
            <a href="https://hair-salon-6.netlify.app/" target="_blank">
              <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/template/salon-6.jpg" alt="">
            </a>
        </div>
        </div>
      </div>
      <div class="food industry-item pb-3">
        <h3 class="fadeIn">Food</h3>
        <div class="title p-md-3 p-2 mt-md-5 my-4 shadow-sm scroll-left"><p>飲食店</p></div>
        <div class="slide-wrap px-md-5 pb-3"> 
          <div class="slide-content">
            <a href="https://restaurant-riv-1.netlify.app/" target="_blank">
              <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/template/food-1.jpg" alt="">
            </a>
          </div>
          <div class="slide-content">
            <a href="https://restaurant-riv-2.netlify.app/" target="_blank">
              <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/template/food-2.jpg" alt="">
            </a>
          </div>
          <div class="slide-content">
            <a href="https://restaurant-riv-3.netlify.app/" target="_blank">
              <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/template/food-3.jpg" alt="">
            </a>
          </div>
          <div class="slide-content">
            <a href="https://restaurant-riv-4.netlify.app/" target="_blank">
              <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/template/food-4.jpg" alt="">
            </a>
          </div>
          <div class="slide-content">
            <a href="https://restaurant-riv-5.netlify.app/" target="_blank">
              <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/template/food-5.jpg" alt="">
            </a>
          </div>
        </div>
      </div>
      <div class="dental industry-item pb-3">
        <h3 class="fadeIn">Clinic</h3>
        <div class="title p-md-3 p-2 mt-md-5 my-4 shadow-sm scroll-left"><p>クリニック</p></div>
        <div class="slide-wrap px-md-5 pb-3"> 
          <div class="slide-content">
            <a href="https://clinic-2.netlify.app/" target="_blank">
              <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/template/dental-2.jpg" alt="">
            </a>
          </div>
          <div class="slide-content">
            <a href="https://dental-office-1.netlify.app/" target="_blank">
              <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/template/dental-1.jpg" alt="">
            </a>
          </div>
          <div class="slide-content">
            <a href="https://clinic-3.netlify.app/" target="_blank">
              <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/template/dental-3.jpg" alt="">
            </a>
          </div>
          <div class="slide-content">
            <a href="https://dental-office-4.netlify.app/" target="_blank">
              <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/template/dental-4.jpg" alt="">
            </a>
          </div>
          <div class="slide-content">
            <a href="https://dental-office-5.netlify.app/" target="_blank">
              <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/template/dental-5.jpg" alt="">
            </a>
          </div>
        </div>
      </div>
      <div class="professional industry-item pb-3">
        <h3 class="fadeIn">Professional</h3>
        <div class="title p-md-3 p-2 mt-md-5 my-4 shadow-sm scroll-left"><p>士業</p></div>
        <div class="slide-wrap px-md-5 pb-3"> 
          <div class="slide-content">
            <a href="https://professional-1.netlify.app/" target="_blank">
              <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/template/pro-1.jpg" alt="">
            </a>
          </div>
          <div class="slide-content">
            <a href="https://professional-2.netlify.app/" target="_blank">
              <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/template/pro-2.jpg" alt="">
            </a>
          </div>
          <div class="slide-content">
            <a href="https://professional-3.netlify.app/" target="_blank">
              <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/template/pro-3.jpg" alt="">
            </a>
          </div>
          <div class="slide-content">
            <a href="https://professional-4.netlify.app/" target="_blank">
              <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/template/pro-4.jpg" alt="">
            </a>
          </div>
          <div class="slide-content">
            <a href="https://professional-5.netlify.app/" target="_blank">
              <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/template/pro-5.jpg" alt="">
            </a>
          </div>
        </div>
      </div>
      <div class="other industry-item pb-3">
        <h3 class="fadeIn">Company</h3>
        <div class="title p-md-3 p-2 mt-md-5 my-4 shadow-sm scroll-left"><p>中小企業<span class="small">様々な業種にご対応</span></p></div>
        <div class="slide-wrap px-md-5 pb-3"> 
          <div class="slide-content">
            <a href="https://construction-1.netlify.app/" target="_blank">
              <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/template/construction-1.jpg" alt="">
            </a>
          </div>
          <div class="slide-content">
            <a href="https://construction-2.netlify.app/" target="_blank">
              <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/template/construction-2.jpg" alt="">
            </a>
          </div>
          <div class="slide-content">
            <a href="https://construction-3.netlify.app/" target="_blank">
              <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/template/construction-3.jpg" alt="">
            </a>
          </div>
          <div class="slide-content">
            <a href="https://construction-4.netlify.app/" target="_blank">
              <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/template/construction-4.jpg" alt="">
            </a>
          </div>
          <div class="slide-content">
            <a href="https://construction-5.netlify.app/" target="_blank">
              <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/template/construction-5.jpg" alt="">
            </a>
          </div>
        </div>
        <p class="industry-text">※上記以外も様々な業種に対応しております</p>
        <a class="contact-link" href="/contact">
          <button type="button" class="btn btn-main my-4 mx-auto view-sp">まずお問い合わせ<i class="fas fa-chevron-right ms-3"></i></button>
        </a>
      </div>
    </section>

    <!-- 比較 -->
    <section id="charge-table" class="p-lg-5 px-1 py-5">
      <div class="text-center py-4">
        <p class="sub-title">\比べてください/</p>
        <h2>One Stop Riv.<small>はこんなに</small>お得</h2>
      </div>

      <div class="table-responsive px-lg-5">
        <table class="table table-borderless text-center lh-1 align-middle mb-1" id="table">
          <thead id="thead1">
            <tr class="bg-white">
              <th></th>
              <th class="pb-2 riv">
                <img width="40" class="mx-auto" src="<?php echo get_template_directory_uri(); ?>/images/icon/light.png" alt="">
              </th>
              <th></th>
              <th></th>
              <th></th>
            </tr>
          </thead>
          <thead>
            <tr>
              <th scope="col" class="bg-white"></th>
              <th scope="col" class="riv">One Stop Riv</th>
              <th scope="col">大手制作会社</th>
              <th scope="col">格安制作会社</th>
              <th scope="col">フリーランス</th>
            </tr>
          </thead>
          <tbody>
            <tr class="bg-light">
              <th scope="row" class="bg-light">初期・制作費用</th>
              <td class="riv">0<span class="small">円</td>
              <td>50〜200<span class="small">万円</td>
              <td>5〜30<span class="small">万円</td>
              <td>20〜50<span class="small">万円</td>
            </tr>
            <tr class="bg-light">
              <th scope="row" class="bg-light">月額保守運用</th>
              <td class="riv">4,980<span class="small">円</td>
              <td>20,000<span class="small">円〜</td>
              <td>10,000<span class="small">円〜</td>
              <td>10,000<span class="small">円〜</td>
            </tr>
            <tr class="bg-light">
              <th scope="row" class="bg-light">修正・更新作業</th>
              <td class="riv" >全て無料<span class="br small">※1回/月</td>
              <td>更新別途費用</td>
              <td>更新別途費用</td>
              <td>更新無料</td>
            </tr>
            <tr class="bg-light">
              <th scope="row" class="bg-light">サーバー・ドメイン<span class="br">費用</th>
              <td class="riv">0<span class="small">円</td>
              <td>12,000<span class="small">円/年</td>
              <td>12,000<span class="small">円/年</td>
              <td>12,000<span class="small">円/年</td>
            </tr>
            <tr class="bg-light">
              <th scope="row" class="bg-light">デザイン性</th>
              <td class="riv">◎</td>
              <td>◎</td>
              <td>△</td>
              <td>○</td>
            </tr>
            <tr class="bg-light">
              <th scope="row" class="bg-light">画像素材提供</th>
              <td class="riv">◎<br><span class="br small">提供無料</td>
              <td>◎<br><span class="br small">提供無料</td>
              <td>△<br><span class="br small">別途費用</td>
              <td>○<br><span class="br small">別途費用の場合も有</td>
            </tr>
            <tr class="bg-light">
              <th scope="row" class="bg-light">納期</th>
              <td class="riv">最短5日</td>
              <td>30〜60日<span class="small">程度</td>
              <td>30〜45日<span class="small">程度</td>
              <td>14〜30日<span class="small">程度</td>
            </tr>
            <tr class="year-cost">
              <th scope="row" class="bg-light">年間コスト<span class="br small"></th>
              <td class="riv">59,760<span class="small">円</td>
              <td>2,252,000<span class="small">円</td>
              <td>564,000<span class="small">円</td>
              <td>864,000<span class="small">円</td>
            </tr>
          </tbody>
        </table>
      </div>
      <p class="text-end text-muted small pb-5 pe-md-5">※税抜き表示・当社調べ</p>

    </section>

    <!-- 流れ -->
    <section id="flow" class="bg-sub p-lg-5 px-3 py-5">
      <div class="text-center py-4">
        <p class="sub-title">\かんたんステップ/</p>
        <h2>サイト制作の流れ</h2>
      </div>
      <!-- flow画像の場合 -->
      <div class="flow-img">
        <img class="view-sp" src="<?php echo get_template_directory_uri(); ?>/images/flow-LP.png" alt="">
        <img class="view-pc" src="<?php echo get_template_directory_uri(); ?>/images/flow-LP-pc.png" alt="">
      </div>
      <!-- flow画像の場合 -->
      <a class="contact-link" href="/contact">
        <button type="button" class="btn btn-main my-4 mx-auto view-sp">まずお問い合わせ<i class="fas fa-chevron-right ms-3"></i></button>
      </a>
    </section>

    <!-- Q&A -->
    <section id="qa" class="p-lg-5 px-3 py-5">
      <div class="text-center py-5">
        <p class="sub-title">\不安を解消/</p>
        <h2>よくあるご質問</h2>
      </div>
        <div class="row row-cols-md-2 m-lg-5">
          
          <div>
            <div class="bg-white shadow m-3 p-lg-5 p-4">
              <div class="d-flex align-items-center">
                <p class="fs-1 fw-bold m-color">Q</p>
                <h3 class="mx-3">ホームページに関する知識が全くないのですが...</h3>
              </div>

              <div class="d-flex mt-4">
                <p class="fs-1 fw-bold answer">A</p>
                <p class="mx-3">制作から運用まで、全て当社が運用させて頂きます。Webの知識に全く自信がない方でも安心してお使い頂けます。</p>
              </div>
            </div>
          </div>

          <div>
            <div class="bg-white shadow m-3 p-lg-5 p-4 ">
              <div class="d-flex align-items-center">
                <p class="fs-1 fw-bold m-color">Q</p>
                <h3 class="mx-3">ホームページの作成は準備が面倒くさそう...</h3>
              </div>

              <div class="d-flex mt-4">
                <p class="fs-1 fw-bold answer">A</p>
                <p class="mx-3">ヒアリングシートと数点の画像素材(なくても可)のご提出のみで作成出来ます。<span class="br">Web上での設定などお客様側でして頂く事はございません。</p>
              </div>
            </div>
          </div>
          <div>
            <div class="bg-white shadow m-3 p-lg-5 p-4">
              <div class="d-flex align-items-center">
                <p class="fs-1 fw-bold m-color">Q</p>
                <h3 class="mx-3">月額4,980円(税抜)のほかにかかる費用はありますか？</h3>
              </div>

              <div class="d-flex mt-4">
                <p class="fs-1 fw-bold answer">A</p>
                <p class="mx-3">一切ございません。<span class="br">作成時も解約時もオプションも全て無料です。また契約期間の縛りも一切ございませんので、お気軽にご利用頂けます。</p>
              </div>
            </div>
          </div>

          <div>
            <div class="bg-white shadow m-3 p-lg-5 p-4">
              <div class="d-flex align-items-center">
                <p class="fs-1 fw-bold m-color">Q</p>
                <h3 class="mx-3">ホームページ公開後も無料で修正してもらうことは可能ですか？</h3>
              </div>

              <div class="d-flex mt-4">
                <p class="fs-1 fw-bold answer">A</p>
                <p class="mx-3">毎月1回まで修正が無料で可能です。<span class="br">テキストや画像の差し替えなど、修正が必要なタイミングで当社にお申し付けください。</p>
              </div>
            </div>
          </div>
          <div>
            <div class="bg-white shadow m-3 p-lg-5 p-4">
              <div class="d-flex align-items-center">
                <p class="fs-1 fw-bold m-color">Q</p>
                <h3 class="mx-3">制作期間はどのくらいですか？</h3>
              </div>

              <div class="d-flex mt-4">
                <p class="fs-1 fw-bold answer">A</p>
                <p class="mx-3">ご契約から最短5日(営業日換算)で完成します。<span class="br">ただし、契約が混み合っているタイミングだと期間が伸びる場合がございますので、お早めにお申し込み下さい。</p>
              </div>
            </div>
          </div>

          <div>
            <div class="bg-white shadow m-3 p-lg-5 p-4">
              <div class="d-flex align-items-center">
                <p class="fs-1 fw-bold m-color">Q</p>
                <h3 class="mx-3">他社ではサーバーと、ドメイン料金は別でかかると言われたのですが...</h3>
              </div>

              <div class="d-flex mt-4">
                <p class="fs-1 fw-bold answer">A</p>
                <p class="mx-3">OneStopRivではサーバー・ドメイン料金も全て4,980円に含まれておりますので、ご安心下さい。</p>
              </div>
            </div>
          </div>
        </div>
    </section>
  </main>
  <!-- /main -->
  <footer>
    <div class="cta">
      <div class="bg-main p-sm-5">
      </div>  
      <div class="row">
        <div class="col-lg-5 position-relative  cta-image text-center">
          <img class="img-fluid my-md-3 rounded-1 shadow" src="<?php echo get_template_directory_uri(); ?>/images/cta.jpg" alt="">
        </div>
        <div class="col-lg-7 py-2 text-center cta-contact">
          <p class="my-4">ぜひ無料でご相談ください。</p>
          <a class="contact-link" href="/contact">
            <button type="button" class="btn btn-main mx-auto view-sp">まずお問い合わせ<i class="fas fa-chevron-right ms-3"></i></button>
          </a>
          <p class="my-md-5 my-4"><i class="fa fa-phone mx-2"></i><a href="tel:050-3159-9527" class="tel">050-3159-9527</a><span class="ms-2 small open">(受付時間:平日 9:00〜18:00)</span></p>
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
      <div class="p-3 copyright">
      <p class="text-center small">＠RIVROUND.INC</p>
    </div>
    </div>
  </footer>
  <!-- /footer -->
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/infiniteslide.js"></script>
<?php get_footer(); ?>