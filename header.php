<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no">
  <title>月額定額制（サブスク）ホームページ制作 | One Stop Riv</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Kiwi+Maru:wght@300;400;500&display=swap" rel="stylesheet">
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
  <?php wp_head(); ?> 
</head>
<body>
  <header id="header">
    <div id="head_container" class="p-md-3 p-2">
      <a href="/">
        <img class="" src="<?php echo get_template_directory_uri(); ?>/images/onestopriv.png" alt="" width="220">
      </a>
      <?php if( !wp_is_mobile() ): ?> 
        <button type="button" class="btn btn-main" data-bs-toggle="modal" data-bs-target="#contact">まずはお問い合わせ<i class="fas fa-chevron-right ms-3"></i></button>
      <?php endif; ?> 
    </div>
  </header>