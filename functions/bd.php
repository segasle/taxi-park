<?php
/**
 * Created by PhpStorm.
 * User: sergejslepenkov
 * Date: 2019-09-05
 * Time: 13:00
 */

global $mysqli;
$bd = 'ca57629_taxipark';
$password = 'qLX1xXnw';
if (empty($mysqli)){
    $mysqli = mysqli_connect('localhost', $bd, $password, $bd);
    mysqli_set_charset($mysqli, 'UTF8');
}
if (mysqli_connect_errno()){
    echo 'ошибка в подключении к БД ('.mysqli_connect_errno().')'.mysqli_connect_error();
}


