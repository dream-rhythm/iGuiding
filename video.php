<!DOCTYPE html>
<html>
	<head>
		<title>目錄</title>
		<link rel="stylesheet" href="webix/codebase/webix.css" type="text/css" charset="utf-8">
		<script src="webix/codebase/webix.js" type="text/javascript" charset="utf-8"></script>
		<script src="websocket.js" type="text/javascript" charset="utf-8"></script>

		<script src="webix/samples/common/treedata.js" type="text/javascript" charset="utf-8"></script>
		<link rel="stylesheet" type="text/css" href="webix/samples/common/samples.css">
	</head>
	<?php session_start(); 
		$id = $_SESSION['username'];
		$UserPicUrl = 'UserPic/'.$id.'.jpg';
		$alias =  $_SESSION['alias'];
		include("mysql_connect.inc.php");
		$sql = "SELECT * FROM teachertostudenr where TeacherName='".$id."'";
        $result = mysqli_query($link, $sql);
        $row = mysqli_fetch_assoc($result);
		
	?>
	
	
	<body onload="init()">
	
	
		<div class='header_comment'>
			<a href="member.php"><img src='back.ico' width='30px' height='30px'><strong>返回功能選單</strong></a>
		</div>
		<div  style='float:left'>
			<div style='float:left;'>
				User:<br>
				<?php echo $alias;?>(<?php echo $id;?>)<br>
				<img src=<?php echo $UserPicUrl?> width='148px' height='188px'>
			</div>
			<div>
				Student:<br>
				<label id='student_name'></label><br>
				<img id='student_pic' src='img/unknowPerson.png' width='148px' height='188px'>
			</div><br>
			<div>檔案列表
			<input type="button" value="重新整理" onclick="reload()">
			</div>
			<div id="testA" style='width:300px; height:250px;'></div>
		</div>
		
		<div id="testB" style='width:640px; height:480px; float:left'>
			<video controls>
				<source src="" id="videoView" type="video/mp4" />
			</video>
		</div>

		<script type="text/javascript" charset="utf-8">

			tree = webix.ui({
				container:"testA",
				view:"tree",
				select:true,
				template:"{common.icon()} {common.folder()} <span>#value#</span>", 
				data: webix.copy(smalltreedata),
				on: {
					onSelectChange:function () {
						var itemID = tree.getSelectedId(true)+"-"
						var item = tree.getSelectedItem(false)
						var videoURL ="http://127.0.0.1/iGuiding/"+ item.value
						var videoStr = "<video controls><source src="+videoURL+"  type='video/mp4' /></video>"
						
						if(itemID.indexOf('.')!=-1){
							itemID=itemID.split('.')[0]
							document.getElementById('testB').innerHTML=videoStr
						}
						else{
							itemID=itemID.split('-')[0]
						}
						document.getElementById('student_pic').src='UserPic/'+itemID+'.jpg'
						document.getElementById('student_name').innerHTML="("+itemID+")"
						
						
					}
				}
			});
			function reload(){
				testWebSocket(); 
			}
			
		</script>
	</body>
</html>