<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("mysql_connect.inc.php");

if($_SESSION['username'] != null)
{
        //將$_SESSION['username']丟給$id
        //這樣在下SQL語法時才可以給搜尋的值
        $id = $_SESSION['username'];
        //若以下$id直接用$_SESSION['username']將無法使用
        $sql = "SELECT * FROM user where Name='".$id."'";
        $result = mysqli_query($link, $sql);
        $row = mysqli_fetch_assoc($result);
    
        echo "<form name=\"form\" method=\"post\" action=\"update_finish.php\">";
        echo "帳號：<input type=\"text\" name=\"id\" value=\"".$row["Name"]."\" />(此項目無法修改) <br>";
		echo "原密碼：<input type=\"password\" name=\"pw\" value=\"\" /> <br>";
        echo "新密碼：<input type=\"password\" name=\"npw\" value=\"\" /> <br>";
        echo "再一次輸入密碼：<input type=\"password\" name=\"npw2\" value=\"\" /> <br>";
        echo "<input type=\"submit\" name=\"button\" value=\"確定\" />";
        echo "</form>";
}
else
{
        echo '您無權限觀看此頁面!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
}
?>