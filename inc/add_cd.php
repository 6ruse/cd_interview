<?php
/**
 * Created by PhpStorm.
 * User: novikov_BK
 * Date: 22.06.2019
 * Time: 15:35
 */
    require_once('config.php');
    $connect = mysqli_connect($host, $user, $password, $database)
    or die("Ошибка " . mysqli_error($link));

    if(!empty($_POST))
    {
        $output = '';
        $Album_cover = mysqli_real_escape_string($connect, $_POST["Album_cover"]);
        $Album_name = mysqli_real_escape_string($connect, $_POST["Album_name"]);
        $Artist_name = mysqli_real_escape_string($connect, $_POST["Artist_name"]);
        $Year_issue = mysqli_real_escape_string($connect, $_POST["Year_issue"]);
        $Album_Duration = mysqli_real_escape_string($connect, $_POST["Album_Duration"]);
        $Purchase_date = mysqli_real_escape_string($connect, $_POST["Purchase_date"]);
        $Purchase_price = mysqli_real_escape_string($connect, $_POST["Purchase_price"]);
        $AStorage_code = mysqli_real_escape_string($connect, $_POST["Storage_code"]);
        $query = "INSERT INTO tbl_cd (Album_cover,Album_name,Artist_name,Year_issue,Album_Duration,Purchase_date,Purchase_price,Storage_code)
          VALUES($Album_cover','$Album_name','$Artist_name','$Year_issue','$Album_Duration','$Purchase_date','$Purchase_price','$AStorage_code');";
        if(mysqli_query($connect, $query))
        {
            header(" Location: http://localhost/cd/index.php ");
        } else {printf("Сообщение ошибки: %s\n", mysqli_error($connect));}
    }
    mysqli_close($connect);