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
    <main>
        <div class="wrap bg margin-bottom" style="background-image: url('/img/bg.jpg');">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-8 col-lg-6">
                        <h1 class="text-center text-white text-uppercase">Подключайтесь к заказам Яндекс такси без
                            комиссии!</h1>
                    </div>
                    <div class="col-12 col-sm-12 col-md-4 col-lg-6">
                        <form action="" method="post" class="bg-white">
                            <div class="form-group"><input type="text" class="form-control form-control-lg"
                                                           placeholder="ФИО" name="fio"></div>
                            <div class="form-group"><input type="text" class="form-control form-control-lg"
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
                <div class="row">
                    <?php
                    $sql = mysqli('SELECT * FROM `work`');
                    foreach ($sql as $item) {
                        if ($item['stock'] != null){
                            $stock = ' - <i class="text-danger">'.$item['stock'].'</i>';
                        }else{
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
        </div>
    </main>
    <footer></footer>
</div>
</body>
</html>
