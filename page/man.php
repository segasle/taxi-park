<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta property="og:locale" content="ru_RU">
  <meta property="og:type" content="article">
  <meta property="og:title" content="Веб студия - webpro">
  <meta property="og:description" content="ru_RU">
  <meta property="og:site_name"
        content="">
  <meta name="robots" content="index, follow">
  <meta name="keywords"
        content="">
  <meta name="description" content="">
  <title></title>
  <link rel="icon" href="/img/logo.png" type="image/png" sizes="<16>X<16>">
  <link rel="stylesheet" href="/icons/css/all.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="/css/style.css?t=<?php echo(microtime(true) . rand()); ?>">
</head>
<body>
<div class="wrapper">
  <header class="header">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-12 col-sm-12 col-md-6 col-lg-4">
          <div class="block-center-xs block-center-sm">
            <div class="logo">
              <a href="/" class="logo-img"></a>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-12 col-md-6 col-lg-8">
          <div class="row align-items-center">
            <div class="col-12 col-md-3">
              <div class="block-center-xs block-center-sm">
                <a href="" class="fab fa-vk fa-3x"></a>
              </div>
            </div>
            <div class="col-12 col-md-9">
              <div class="block block-center-xs block-center-sm">
                <div class="wrap">
                  <div class="float-left padding-right">
                    <i class="fas fa-phone-square-alt fa-3x"></i>
                  </div>
                  <div class="float-left">
                    <a href="" class="h3 padding-top d-inline-block text-white">8-999-999-99-99</a>
                  </div>
                </div>
                <div class="wrap margin-top">
                  <div class="float-left padding-right">
                    <i class="fab fa-whatsapp fa-3x"></i>
                  </div>
                  <div class="float-left">
                    <a href="viber://chat?number=79153301314"
                       class="h3 padding-top d-inline-block text-white">Напишите нам в WhatsApp</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <main class="ndra-container">
    <div class="wrap bg margin-bottom" id="button" style="background-image: url('/img/bg.jpg');">
      <div class="container">
        <div class="row">
          <div class="col-12 col-sm-12 col-md-7 col-lg-6">
            <h1 class="text-center text-white text-uppercase">Подключайтесь к заказам Яндекс такси без
              комиссии!</h1>
          </div>
          <div class="col-12 col-sm-12 col-md-5 col-lg-6">
            <form action="" method="post" class="bg-white">
              <div class="form-group"><input type="text" class="form-control form-control-lg"
                                             placeholder="ФИО" name="fio"></div>
              <div class="form-group"><input type="tel" class="form-control form-control-lg"
                                             placeholder="Ваш телефон" name="phone"></div>
              <div class="form-group"><input type="text" class="form-control form-control-lg"
                                             placeholder="Ваш город" name="city"></div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">
                  Cогласен на обработку моих персональных данных
                </label>
              </div>
              <button type="submit" class="btn bg-warning btn-lg btn-block margin-top">Отправить</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="wrap">
      <div class="container">
        <h2 class="h1 text-center margin-bottom">ПОЧЕМУ СТОИТ РАБОТАТЬ ИМЕННО С НАМИ?</h2>
        <div class="row margin-bottom">
            <?php
            $sql = mysqli('SELECT * FROM `work`');
            foreach ($sql as $item) {
                if ($item['stock'] != null) {
                    $stock = ' - <i class="text-danger">' . $item['stock'] . '</i>';
                } else {
                    $stock = '';
                }
                ?>
              <div class="col-12 col-sm-12 col-md-6">
                <div class="block margin-top">
                  <div class="row">
                    <div class="col-4">
                      <div class="icon">
                        <i class="fas fa-<?php echo $item['icon']; ?> fa-3x"></i>
                      </div>
                    </div>
                    <div class="col-8">
                      <b><?php echo $item['head'] . $stock; ?></b>
                      <p class="padding-top"><?php echo $item['description']; ?></p>
                    </div>
                  </div>
                </div>
              </div>
                <?php
            }
            ?>
        </div>
      </div>
      <div class="bg-black">
        <h3 class="h1 text-center text-white">Сравните сами!</h3>

          <?php
          $sql = mysqli("SELECT * FROM `total`");
          foreach ($sql as $item) {
              ?>
            <div class="total">
              <div class="d-flex justify-content-between align-items-center flex-column flex-sm-row">
                <p class="text-white total-title text-center"> <?php echo $item['text'];?>
</p>
                <p class="text-white total-number"><?php echo $item['number'];?><span class="small">р в день</span></p>
              </div>
            </div>
              <?php

          }
          ?>
        <a href="#button" class="btn bg-warning btn-lg block-center margin-top">Начать зарабатывать</a>

      </div>

    </div>
  </main>
  <footer>
    <div class="container">
      <p class="text-white">Все права защищены &copy; <?php echo date('Y'); ?></p>
    </div>
  </footer>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
<script src="/library/jquery.maskedinput.min.js"></script>
<script src="/js/main.js?t=<?php echo(microtime(true) . rand()); ?>"></script>
</html>
