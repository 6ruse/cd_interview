<?php
/**
 * Created by PhpStorm.
 * User: novikov_BK
 * Date: 22.06.2019
 * Time: 13:47
 */
require_once('config.php');

    // подключаемся к серверу
    $link = mysqli_connect($host, $user, $password, $database)
    or die("Ошибка " . mysqli_error($link));

    //проверим есть ли нужные объекты в БД
    $result = mysqli_query($link, $sql_create_table) or die("Ошибка " . mysqli_error($link));
    if($result)
    {
        include 'template/head.php';
        echo '<body id="page-top">';
        echo '<div id="wrapper">';
            include 'template/header.php';
            include 'template/form_add_edit_cd.php';
            include 'template/table_cd.php';
            include 'template/footer.php';
        echo '</div>';
        echo '<div id="result_form"></div> ';
        echo '</body>';

    }  //if($result)
    else
    {
        echo 'Not DB table';
    }

    // закрываем подключение
    mysqli_close($link);