<?php
//�ѨM�����ýX���D
mysql_query("SET NAMES UTF8");

$error_flag = FALSE;
$notfound_flag = FALSE;

//���Ʈw���A���i��s�u�A�ÿ�ܹ������|����Ʈw
mysql_connect("localhost", "root", "");
mysql_select_db("hahow");

//�p�G���� POST ���e�Ӫ��n�J��ơA���Ʈw��?�O�_���o�ӤH�s�b
//�]�ϥ� mysql_query("SELECT ...... ")�A�M���^�Ǫ��F��z�L mysql_fetch_array(......) ����?�^
$result=mysql_query("SELECT * FROM member");


//�p�G�����A��?�K�X�O�_�۲�
while($row = mysql_fetch_array($result)){

 //����?�ϥΪ̦��S����J���
 if(empty($_POST["email"])==FALSE && empty($_POST["pass"])==FALSE){

 //���d����
 $userEmail=$_POST["email"];
 $userEmail=mysql_real_escape_string($userEmail);
 $userPassword=$_POST["pass"];
 $userPassword=mysql_real_escape_string($userPassword);
 //����J��ƪ��ܡA�A�Ӭݿ�J��email���Ʈw�O�_�@�P
 if($row["email"]==$_POST["email"]){

 if($row["password"]==$_POST["pass"]){
 //�p�G�۲ŦX�A�h�]�w Session�]�O�o�n�� session_start()�I�^�A����}��|�����ߡ]member.php�^
 session_start();
 $_SESSION["email"]=$_POST["email"];
 $_SESSION["password"]=$_POST["pass"];
 $_SESSION["name"]=$row["name"];
 $_SESSION["id"]=$row["id"];

 //��������}�� PHP �g�k�Gheader('Location: member.php');
 header('Location: member.php');

 }else{
 //�p�G���ŦX�A�h�]�w $error_flag �� TRUE�A�~����ܺ���?�e
 $error_flag = TRUE;
 break;
 }

 }else{
 //�p�G�S�����A�h�]�w $notfound_flag �� TRUE�A�~����ܺ���?�e
 $notfound_flag = TRUE;
 }

 }else{
 //�p�G�S����A�~����ܺ���?�e
 }
 
}
?>

<!DOCTYPE html>
<html>
<head>
 <title>�|���n�J</title>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
<br><br><br><br>

<div class="container">
 <div class="row jumbotron">
 <div class="col-md-6 col-md-offset-3">
 <h2 class="text-center">�|���n�J</h2><br/>
 <form action="<?php echo htmlspecialchars($_SERVER[">" method="POST")?>
 <input class="form-control input-lg" id="pass" type="text" name="email" required="TRUE" placeholder="E-Mail"/><br/>
 <input class="form-control input-lg" id="pass" type="password" name="pass" required="TRUE" placeholder="�K�X"/><br/>
 <input class="btn btn-primary btn-lg btn-block" type="submit" value="�n�J"/><a class="btn btn-default btn-lg btn-block" href="register.php">�|�����U</a>
 </form>
 <br/>
 <?php if($error_flag){ ?>
  <div class="alert alert-danger alert-dismissible" role="alert">
  <button class="close" type="button" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">��</span></button> �K�X���~�I
  </div>
 <?php }?>

 <?php if($notfound_flag){ ?>
  <div class="alert alert-danger alert-dismissible" role="alert">
  <button class="close" type="button" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">��</span></button> ����쥻�ϥΪ̡A�Э��s�T�{�I
  </div>
 <?php }?>
 </div>
 </div>
</div>
</body>
</html>