<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
//資料庫設定
//資料庫位置
$db_server = "localhost:3306";
//資料庫名稱
$db_name = "guidingall";
//資料庫管理者帳號
$db_user = "root";
//資料庫管理者密碼
$db_passwd = "nabSoLRKdThhqXwa";

//對資料庫連線

$link = mysqli_connect($db_server, $db_user, $db_passwd , $db_name);

//資料庫連線採UTF8
mysqli_query($link, 'SET CHARACTER SET UTF8');


?>  