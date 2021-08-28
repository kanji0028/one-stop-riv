<?php get_header(); ?>
  <main>
  
    <section id="top" class="p-md-4 p-3 pb-5">
      <div class="row align-items-center justify-content-evenly">
        <div class="col-lg-5 mt-5 ms-md-5 top-title">
          <p class="mb-md-5 mb-2 fs-3">制作費・初期費用 <span class="m-color"><span class="price">0</span> 円</span>
            <span class="br">月々<span class="m-color price">5,980<span class="fs-3">円</span></span>で雇える</span>
            <span class="br fs-1">Webの営業マン</span>
          </p>

          <?php if( !wp_is_mobile() ): ?> 
          <p class="fs-5 mb-3">One Stop Riv.は月額制(サブスクリプション型)の
            <span class="br-pc">ホームページ制作サービスです。
          </p>
          <span class="badge rounded-pill bg-m-color fs-6 m-1 p-md-3 p-2">制作費0円</span>
          <span class="badge rounded-pill fs-6 m-1 p-md-3 p-2">オリジナルデザイン</span>
          <span class="badge rounded-pill bg-m-color fs-6 m-1 p-md-3 p-2">スマホ対応</span>
          <span class="badge rounded-pill bg-m-color fs-6 m-1 p-md-3 p-2">投稿機能</span>
          <span class="badge rounded-pill bg-m-color fs-6 m-1 p-md-3 p-2">最短5日納品</span>
          <span class="badge rounded-pill bg-m-color fs-6 m-1 p-md-3 p-2">SSL化対応</span>
          <?php endif; ?>
          


        </div>
        <img id="main-img" class="img-fluid col-lg-5 mt-lg-5 mt-4 vert-move" src="<?php echo get_template_directory_uri(); ?>/images/top.png" alt="">
        <?php if( wp_is_mobile() ): ?> 
          <button type="button" class="btn btn-main my-4 d-block mx-auto" data-bs-toggle="modal" data-bs-target="#contact">今すぐ利用申し込み<i class="fas fa-chevron-right ms-3"></i></button>
        <?php endif; ?> 
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
        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/template/salon-1.jpg" alt="">
        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/template/salon-2.jpg" alt="">
        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/template/food-1.jpg" alt="">
        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/template/food-2.jpg" alt="">
        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/template/dental-1.jpg" alt="">
        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/template/dental-2.jpg" alt="">
        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/template/salon-3.jpg" alt="">
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
      <?php if( !wp_is_mobile() ): ?> 
        <img class="" src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="">
      <?php endif; ?> 
      <div class="text-center py-5 position-relative">
        <p class="sub-title">\安心の料金プラン/</p>
        <h2>利用料は月額の5,980円のみ</h2>
        <span class="position-absolute balloon balloon-right fs-5 fw-bold">解約も自由！</span> 
      </div>
      <div class="row row-cols-lg-2">
        <img class="img-fluid my-3 fadeIn" src="<?php echo get_template_directory_uri(); ?>/images/price.png" alt="">
        <div class="my-3 p-md-5">
          <p class="mb-4">One Stop Rivは、月額定額制(サブスクリプション型)のホームページ制作サービスです。月額制なので製作費は0円、月額5,980円(+税)でご利用頂けます。</p>
          <p>※ご契約期間の縛り、早期解約の違約金は一切ないので、必要性を感じなくなればいつでもご解約頂けます。</p>
        </div>
      </div>

      <div class="row row-cols-md-5 row-cols-4  boul mx-md-4 my-4">
        <div class="rounded-circle position-relative shadow vert-move-1">
          <p class="position-absolute fs-5 lh-sm text-white">制作費<span class="br fs-1">0</span>円</span></p>  
        </div>
        <div class="rounded-circle position-relative shadow bg-main vert-move-2">
          <p class="position-absolute fs-5 lh-sm">入会費<span class="br fs-1">0</span>円</span></p>  
        </div>
        <div class="rounded-circle position-relative shadow vert-move-1">
          <p class="position-absolute fs-5 lh-sm text-white">退会費<span class="br fs-1">0</span>円</span></p>  
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
        <span class="position-absolute balloon balloon-right fs-5 fw-bold">毎月20社限定！</span>
      </div>
      <div class="row row-cols-lg-3 row-cols-md-2 px-md-3">
        <div class="my-4">
          <div class="bg-white box shadow-sm px-3 py-4 text-center position-relative">
            <div class="position-absolute count">
              <p class="text-white fs-3">1</p>
            </div>
            <img class="img-fluid p-4" src="<?php echo get_template_directory_uri(); ?>/images/feature/feature-1.png" alt="">
            <h3>デザイン性の高いホームページ</h3>
            <p class="px-md-5">厳選したデザインをテンプレートとして利用できる</p>
          </div>
        </div>
        <div class="my-4">
          <div class="bg-white box shadow-sm px-3 py-4 text-center position-relative">
            <div class="position-absolute count">
              <p class="text-white fs-3">2</p>
            </div>
            <img class="img-fluid p-4" src="<?php echo get_template_directory_uri(); ?>/images/feature/feature-2-2.png" alt="">
            <h3>モバイル・タブレットも対応</h3>
            <p class="px-md-5">ユーザーが閲覧するデバイスに合わせた最適なデザインを採用</p>
          </div>
        </div>
        <div class="my-4">
        <div class="bg-white box shadow-sm px-3 py-4 text-center position-relative">
            <div class="position-absolute count">
              <p class="text-white fs-3">3</p>
            </div>
            <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/feature/feature-3.png" alt="">
            <h3>お知らせ機能を実装</h3>
            <p class="px-md-5">ユーザーに最新情報を発信するお知らせ機能でカンタン情報発信</p>
          </div>
        </div>
        <div class="my-4">
          <div class="bg-white box shadow-sm px-3 py-4 text-center position-relative">
            <div class="position-absolute count">
              <p class="text-white fs-3">4</p>
            </div>
            <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/feature/feature-4.png" alt="">
            <h3>SEO対策で集客支援</h3>
            <p class="px-md-5">より多くの訪問者数を獲得するためのSEO対策を実施</p>
          </div>
        </div>
        <div class="my-4">
          <div class="bg-white box shadow-sm px-3 py-4 text-center position-relative">
            <div class="position-absolute count">
              <p class="text-white fs-3">5</p>
            </div>
            <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/feature/feature-5.png" alt="">
            <h3>各種解析ツールの設定</h3>
            <p class="px-md-5">Googleアナリティクス・サーチコンソールでユーザー情報を分析</p>
          </div>
        </div>
        <div class="my-4">
          <div class="bg-white box shadow-sm px-3 py-4 text-center position-relative">
            <div class="position-absolute count">
              <p class="text-white fs-3">6</p>
            </div>
            <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/feature/feature-6.png" alt="">
            <h3>日々の更新・リニューアルOK</h3>
            <p class="px-md-5">写真の差替えや文言の変更など掲載内容変更も毎月無料で対応</p>
          </div>
        </div>
        <div class="my-4">
          <div class="bg-white box shadow-sm px-3 py-4 text-center position-relative">
            <div class="position-absolute count">
              <p class="text-white fs-3">7</p>
            </div>
            <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/feature/feature-7.png" alt="">
            <h3>サーバー保守・管理もお任せ</h3>
            <p class="px-md-5">インターネット上に公開するためのサーバー管理・保守運用を代行</p>
          </div>
        </div>
        <div class="my-4">
          <div class="bg-white box shadow-sm px-3 py-4 text-center position-relative">
            <div class="position-absolute count">
              <p class="text-white fs-3">8</p>
            </div>
            <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/feature/feature-8.png" alt="">
            <h3>SSL化でセキュリティ対策</h3>
            <p class="px-md-5">インターネット上での通信暗号化を実施し、セキュリティ対策</p>
          </div>
        </div>
        <div class="my-4">
          <div class="bg-white box shadow-sm px-3 py-4 text-center position-relative">
            <div class="position-absolute count">
              <p class="text-white fs-3">9</p>
            </div>
            <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/feature/feature-9.png" alt="">
            <h3>最短5営業日のスピード公開</h3>
            <p class="px-md-5">お申し込みから最短5日営業日でホームページを公開</p>
          </div>
        </div>
      </div>
      <button type="button" class="btn btn-main d-block mx-auto my-5 py-3" data-bs-toggle="modal" data-bs-target="#contact">まずはお問い合わせ<i class="fas fa-chevron-right ms-3"></i></button>
    </section>

    <!-- こんな業種で -->
    <section id="industry">
      <div class="text-center py-5">
        <p class="sub-title">\業種別に最適なテンプレートを用意/</p>
        <h2>こんな業種でお使い頂けます</h2>
      </div>
      <div class="beauty pb-5">
        <h3 class="fadeIn">Beauty</h3>
        <div class="title p-md-3 p-2 mt-md-5 my-5 shadow-sm scroll-left"><p>美容院</p></div>
        
        <div class="slide-wrap px-md-5 pb-5"> 
          <div class="slide-content"><img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/template/salon-1.jpg" alt=""></div>
          <div class="slide-content"><img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/template/salon-2.jpg" alt=""></div>
          <div class="slide-content"><img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/template/salon-3.jpg" alt=""></div>
          <div class="slide-content"><img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/template/salon-4.jpg" alt=""></div>
          <div class="slide-content"><img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/template/salon-5.jpg" alt=""></div>
          <div class="slide-content"><img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/template/salon-6.jpg" alt=""></div>
        </div>
      </div>

      <div class="food pb-5">
        <h3 class="fadeIn">Food</h3>
        <div class="title p-md-3 p-2 mt-md-5 my-5 shadow-sm scroll-left"><p>飲食店</p></div>
        <div class="slide-wrap px-md-5 pb-5"> 
          <div class="slide-content"><img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/template/food-1.jpg" alt=""></div>
          <div class="slide-content"><img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/template/food-2.jpg" alt=""></div>
          <div class="slide-content"><img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/template/food-3.jpg" alt=""></div>
          <div class="slide-content"><img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/template/food-4.jpg" alt=""></div>
          <div class="slide-content"><img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/template/food-5.jpg" alt=""></div>
        </div>
      </div>
      <div class="dental pb-5">
        <h3 class="fadeIn">Dental</h3>
        <div class="title p-md-3 p-2 mt-md-5 my-5 shadow-sm scroll-left"><p>歯科医院</p></div>
        <div class="slide-wrap px-md-5 pb-5"> 
          <div class="slide-content"><img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/template/dental-1.jpg" alt=""></div>
          <div class="slide-content"><img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/template/dental-2.jpg" alt=""></div>
          <div class="slide-content"><img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/template/dental-3.jpg" alt=""></div>
          <div class="slide-content"><img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/template/dental-4.jpg" alt=""></div>
          <div class="slide-content"><img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/template/dental-5.jpg" alt=""></div>
        </div>
        <button type="button" class="btn btn-main d-block mx-auto my-5 py-3" data-bs-toggle="modal" data-bs-target="#contact">まずはお問い合わせ<i class="fas fa-chevron-right ms-3"></i></button>
      </div>
    </section>

    <!-- 比較 -->
    <section id="charge-table" class="p-lg-5 px-1 py-5">
      <div class="text-center py-5">
        <p class="sub-title">\比べてください/</p>
        <h2>One Stop Riv.<small>はこんなに</small>お得</h2>
      </div>

      <div class="table-responsive px-lg-5">
        <table class="table table-borderless text-center lh-1 align-middle mb-1" id="table">
          <thead>
            <tr class="bg-white">
              <th></th>
              <th class="pb-2">
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
              <th scope="row" class="bg-light">制作費用</th>
              <td class="riv">0<span class="small">円</td>
              <td>50〜200<span class="small">万円</td>
              <td>5〜30<span class="small">万円</td>
              <td>20〜50<span class="small">万円</td>
            </tr>
            <tr class="bg-light">
              <th scope="row" class="bg-light">月額保守運用</th>
              <td class="riv">5,980<span class="small">円</td>
              <td>20,000<span class="small">円〜</td>
              <td>10,000<span class="small">円〜</td>
              <td>10,000<span class="small">円〜</td>
            </tr>
            <tr class="bg-light">
              <th scope="row" class="bg-light">更新作業</th>
              <td class="riv" >更新無料<span class="br small">※1回/月</td>
              <td>更新別途費用</td>
              <td>更新別途費用</td>
              <td>更新無料</td>
            </tr>
            <tr class="bg-light">
              <th scope="row" class="bg-light">リニューアル<span class="br">費用</th>
              <td class="riv">0<span class="small">円</td>
              <td>150<span class="small">万円</td>
              <td>20<span class="small">万円</td>
              <td>30<span class="small">万円</td>
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
              <td class="riv">◎<span class="br small">提供無料</td>
              <td>◎<span class="br small">提供無料</td>
              <td>△<span class="br small">別途費用</td>
              <td>○<span class="br small">別途費用の場合も有</td>
            </tr>
            <tr class="bg-light">
              <th scope="row" class="bg-light">納期</th>
              <td class="riv">最短5日</td>
              <td>30〜60日<span class="small">程度</td>
              <td>30〜45日<span class="small">程度</td>
              <td>14〜30日<span class="small">程度</td>
            </tr>
            <tr class="year-cost">
              <th scope="row" class="bg-light">年間コスト<span class="br small">※リニューアル1回換算</th>
              <td class="riv">71,760<span class="small">円</td>
              <td>3,740,000<span class="small">円</td>
              <td>620,000<span class="small">円</td>
              <td>1,040,000<span class="small">円</td>
            </tr>
          </tbody>
        </table>
      </div>
      <p class="text-end text-muted small pb-5 pe-md-5">※当社調べ</p>

    </section>

    <!-- 流れ -->
    <section id="flow" class="bg-sub p-lg-5 px-3 py-5">
      <div class="text-center py-5">
        <p class="sub-title">\かんたんステップ/</p>
        <h2>サイト制作の流れ</h2>
      </div>

      <div style="max-width: 1100px; margin: 0 auto" class="flow-content position-relative">
        
      <div class="row my-5 step step1 align-items-center justify-content-evenly">
        <div class="col-md-2 col-3 position-relative">
          <div class="m-color bg-white p-2 text-center shadow-sm arrow">STEP<span class="count ms-1 br-sp">1</span> 
          </div>
        </div>
        <div class="col-md-8 col-9 step-content scroll-top">
          <div class="bg-white p-md-4 p-3 shadow-sm text-center">
            <div class="row row-cols-md-2 align-items-center">
              <div class="d-lg-flex align-items-center justify-content-evenly">
              <img width="120" class="mx-4" src="<?php echo get_template_directory_uri(); ?>/images/icon/1.png" alt="">
                <h3 class="fs-5 my-3 text-muted">お問い合わせ</h3>
              </div>
              <div class="">
                <p>まずはお気軽にお問い合わせください。<span class="br">原則営業日1日以内にご連絡いたします。</p>
                <button type="button" class="btn btn-main d-block mx-auto mt-4 w-75" data-bs-toggle="modal" data-bs-target="#contact">お問い合わせ<i class="fas fa-chevron-right ms-2"></i></button>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row my-5 step step2 align-items-center justify-content-evenly">
        <div class="col-md-2 col-3 position-relative">
          <div class="m-color bg-white p-2 text-center shadow-sm arrow">STEP<span class="count ms-1 br-sp">2</span> 
          </div>
        </div>
        <div class="col-md-8 col-9 step-content scroll-top">
          <div class="bg-white p-md-4 p-3 shadow-sm text-center">
            <div class="row row-cols-md-2 align-items-center">
              <div class="d-lg-flex align-items-center justify-content-evenly">
              <img width="120" class="mx-4" src="<?php echo get_template_directory_uri(); ?>/images/icon/2.png" alt="">
                <h3 class="fs-5 my-3 text-muted">テンプレートの選択</h3>
              </div>
              <div class="">
                <p>ホームページの型となるテンプレートの中からお好きな1つをお選び頂きます。</p>
              </div>
            </div>
          </div>
        </div>
      </div>
        
      <div class="row my-5 step step3 align-items-center justify-content-evenly">
        <div class="col-md-2 col-3 position-relative">
          <div class="m-color bg-white p-2 text-center shadow-sm arrow">STEP<span class="count ms-1 br-sp">3</span> 
          </div>
        </div>
        <div class="col-md-8 col-9 step-content scroll-top">
          <div class="bg-white p-md-4 p-3 shadow-sm text-center">
            <div class="row row-cols-md-2 align-items-center">
              <div class="d-lg-flex align-items-center justify-content-evenly">
              <img width="100" class="mx-4" src="<?php echo get_template_directory_uri(); ?>/images/icon/3.png" alt="">
                <h3 class="fs-5 my-3 text-muted">ヒアリングシートの記入</h3>
              </div>
              <div class="">
                <p>ホームページの基となる写真や情報を、専用のヒアリングシートにご記入頂きます。</p>
                <p class="small mt-3">(Web上でご記入頂けますので、最短30分ほどで完了します。)</p>
              </div>
            </div>
          </div>
        </div>
      </div>
        
        <div class="row step step4 align-items-center justify-content-evenly">
          <div class="col-md-2 col-3 position-relative">
            <div class="m-color bg-white p-2 text-center shadow-sm arrow">STEP<span class="count ms-1 br-sp">4</span> 
            </div>
          </div>
          <div class="col-md-8 col-9 step-content">
            <div class="bg-white p-md-4 p-3 shadow-sm text-center">
             <div class="row row-cols-md-2 align-items-center">
                <div class="d-lg-flex align-items-center justify-content-evenly">
                <img width="100" class="mx-4" src="<?php echo get_template_directory_uri(); ?>/images/icon/4.png" alt="">
                  <h3 class="fs-5 my-3 text-muted d-inline-block keiko">サイト公開！</h3>
                </div>
                <div class="">
                  <p>頂いた情報をもとにホームページを制作します。解析ツール・SEO対策などをしっかり作り込んだ後、ホームページを公開します。</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Q&A -->
    <section id="qa" class="bg-main p-lg-5 px-3 py-5">
      <div class="text-center py-5">
        <p class="sub-title">\不安を解消/</p>
        <h2>よくあるご質問</h2>
      </div>
        <div class="row row-cols-md-2 m-lg-5">
          
          <div>
            <div class="bg-white shadow m-3 p-lg-5 p-4">
              <div class="d-flex align-items-center">
                <p class="fs-1 fw-bold m-color">Q</p>
                <h3 class="mx-3">ホームページに関する知識が全くないのですが・・</h3>
              </div>

              <div class="d-flex mt-4">
                <p class="fs-1 fw-bold answer">A</p>
                <p class="mx-3">制作から運用まで、全て当社が運用させて頂きます。Webの知識に全く自信がない方でも安心してお使い頂けます。</p>
              </div>
            </div>
          </div>

          <div>
            <div class="bg-white shadow m-3 p-lg-5 p-4 mt-md-5">
              <div class="d-flex align-items-center">
                <p class="fs-1 fw-bold m-color">Q</p>
                <h3 class="mx-3">準備するものはありますか？</h3>
              </div>

              <div class="d-flex mt-4">
                <p class="fs-1 fw-bold answer">A</p>
                <p class="mx-3">写真や原稿などの素材をご準備頂きます。<span class="br">Web上での設定などお客様側でして頂く事は特にございません。</p>
              </div>
            </div>
          </div>
          <div>
            <div class="bg-white shadow m-3 p-lg-5 p-4">
              <div class="d-flex align-items-center">
                <p class="fs-1 fw-bold m-color">Q</p>
                <h3 class="mx-3">月額5,980円のほかにかかる費用はありますか？</h3>
              </div>

              <div class="d-flex mt-4">
                <p class="fs-1 fw-bold answer">A</p>
                <p class="mx-3">ございません。<span class="br">入会・退会時にかかる費用や契約の縛りも一切ございませんので、お気軽にご利用頂けます。</p>
              </div>
            </div>
          </div>

          <div>
            <div class="bg-white shadow m-3 p-lg-5 p-4 mt-md-5">
              <div class="d-flex align-items-center">
                <p class="fs-1 fw-bold m-color">Q</p>
                <h3 class="mx-3">ホームページ公開後も修正してもらうことは可能ですか？</h3>
              </div>

              <div class="d-flex mt-4">
                <p class="fs-1 fw-bold answer">A</p>
                <p class="mx-3">毎月1回まで修正が可能です。<span class="br">テキストや画像の差し替えなど、修正が必要なタイミングで当社にお申し付けください。</p>
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
            <div class="bg-white shadow m-3 p-lg-5 p-4 mt-md-5">
              <div class="d-flex align-items-center">
                <p class="fs-1 fw-bold m-color">Q</p>
                <h3 class="mx-3">スマートフォンやタブレットに対応していますか？</h3>
              </div>

              <div class="d-flex mt-4">
                <p class="fs-1 fw-bold answer">A</p>
                <p class="mx-3">はい、対応しております。<span class="br">どの端末にも対応したデザインになっております。</p>
              </div>
            </div>
          </div>
        </div>
    </section>
  </main>
<?php get_footer(); ?>