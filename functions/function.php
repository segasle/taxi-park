<?php
/**
 * Created by PhpStorm.
 * User: sergejslepenkov
 * Date: 2019-09-05
 * Time: 13:01
 */

function mysqli($query)
{
    global $mysqli;
    $result = mysqli_query($mysqli, $query);
    return $result;
}