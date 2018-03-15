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
        echo "NID：<input type=\"text\" name=\"id\" value=\"".$row["Name"]."\" />(You can not change it) <br>";
		echo "Old Password：<input type=\"password\" name=\"pw\" value=\"\" /> <br>";
        echo "New Password：<input type=\"password\" name=\"npw\" value=\"\" /> <br>";
        echo "Repeat Password：<input type=\"password\" name=\"npw2\" value=\"\" /> <br>";
        echo "<input type=\"submit\" name=\"button\" value=\"Submit\" />";
        echo "</form>";
}
else
{
        echo 'Sorry! You do not have authority to use it!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
}
?>