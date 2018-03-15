<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("mysql_connect.inc.php");

$id = $_POST['id'];
$pw = $_POST['pw'];
$npw = $_POST['npw'];
$npw2 = $_POST['npw2'];


//紅色字體為判斷密碼是否填寫正確
if($_SESSION['username'] != null && $pw != null && $npw != null && $npw == $npw2 )
{
        $id = $_SESSION['username'];
		
		$sql = "select * from user where Name='".$id."'";
		$result = mysqli_query($link, $sql);
		$row = mysqli_fetch_assoc($result);
		
		if($row["Password"] == $pw){
			//更新資料庫資料語法
			$sql = "update user set Password='".$npw."' where Name='".$id."'";
			if(mysqli_query($link, $sql))
			{
				echo 'Change Password Success!';
				echo '<meta http-equiv=REFRESH CONTENT=2;url=member.php>';
			}
			else
			{
				echo 'Change Password Failed!';
				echo '<meta http-equiv=REFRESH CONTENT=2;url=member.php>';
			}
			
		}
		else{
			echo 'Change Password Failed!';
			echo '<meta http-equiv=REFRESH CONTENT=2;url=member.php>';
		}
}
else
{
    echo 'Sorry! You do not have authority to use it';
    echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
}
?>