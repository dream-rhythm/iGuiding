<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
a {
    text-decoration:none;
	color:black;
}
</style>
<script>
function opps(){
	alert('Opps!\n這個功能現在只能在APP端執行唷!');
}
</script>
<?php
include("mysql_connect.inc.php");


//此判斷為判定觀看此頁有沒有權限
//說不定是路人或不相關的使用者
//因此要給予排除
if($_SESSION['username'] != null)
{
		echo '<h1 align="center"><strong>Welcome to iGuiding Web Platfrom!</strong></h1><br>';
        echo '<table border="0" align="center">
　				<tr>
　					<td width="225px"><a href="stream.html"><img src="img/stream.jpg" width="225px" height="225px"></a></td>
					<td width="100px"></td>
					<td width="225px"><a href="" onClick="opps()"><img src="img/maps.png" width="225px" height="150px"></a></td>
					<td width="100px"></td>
					<td width="225px"><a href="mailto:mailtonick1997@gmail"><img src="img/email.png" width="225px" height="150px"></a></td>
　				</tr>
				<tr>
　					<td width="225px"><a href="stream.html"><h1 align="center" width="225px">即時畫面</h1></a></td>
					<td width="100px"></td>
					<td width="225px"><a href="" onClick="opps()"><h1 align="center" width="225px">查看地圖</h1></a></td>
					<td width="100px"></td>
					<td width="225px"><a href="mailto:mailtonick1997@gmail.com"><h1 align="center" width="225px">聯絡我們</h1></a></td>
　				</tr>
				
				<tr>
　					<td width="225px"><a href="video.php"><img src="img/video.jpg" width="225px" height="225px"></a></td>
					<td width="100px"></td>
					<td width="225px"><a href="update.php"><img src="img/setting.png" width="225px" height="225px"></a></td>
					<td width="100px"></td>
					<td width="225px"><a href="logout.php"><img src="img/logout.png" width="225px" height="225px"></a></td>
　				</tr>
				<tr>
　					<td width="225px"><a href="video.php"><h1 align="center" width="225px">學生關懷</h1></a></td>
					<td width="100px"></td>
					<td width="225px"><a href="update.php"><h1 align="center" width="225px">個人設定</h1></a></td>
					<td width="100px"></td>
					<td width="225px"><a href="logout.php"><h1 align="center" width="225px">登出系統</h1></a></td>
　				</tr>
				</table>';
    
}
else
{
        echo '您無權限觀看此頁面!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
}
?>