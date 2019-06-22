<?php
/**
 * Created by PhpStorm.
 * User: novikov_BK
 * Date: 22.06.2019
 * Time: 13:48
 */

    $host = 'localhost'; // адрес сервера
    $database = 'db_cd_disk'; // имя базы данных
    $user = 'root'; // имя пользователя
    $password = 'root'; // пароль

    $sql_create_table = 'CREATE TABLE IF NOT EXISTS TBL_CD (
                            `id` INT NOT NULL AUTO_INCREMENT,
                            `Album_cover` varchar(250)  NOT NULL default "",
                            `Album_name` varchar(250)  NOT NULL default "",
                            `Artist_name` varchar(250)  NOT NULL default "",
                            `Year_issue` varchar(4)  NOT NULL default "",
                            `Album_Duration` int(11) NOT NULL default "0",
                            `Purchase_date` DATE NULL,
                            `Purchase_price` FLOAT NULL,  
                            `Storage_code` varchar(100)  NOT NULL default "",
                            PRIMARY KEY (`id`)
                          );';

    $sql_select_sd = 'select * from tbl_cd ;';
