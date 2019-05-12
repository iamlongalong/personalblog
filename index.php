<!DOCTYPE html>
<html lang="en">
	<head>
		<title>test for php</title>
		<meta charset="UTF-8">
	</head>
	<body>
		<div>
			<?php
				$ispostuid =0;
				$ispostpwd =0;
				if(isset($_POST['uid'])){
					$GLOBALS['username']=$_POST['uid'];
					$ispostuid=1;
				}
				if(isset($_POST['pwd'])){
					$ispostpwd=1;
					$GLOBALS['password']=$_POST['pwd'];
				}
				if($ispostuid==1 && $ispostpwd==1){
					echo "<p>提交成功</p><br/>";
					echo "提交的username= ".$_POST['uid']."<br/>";
					echo "username= ".$username."<br/>";
					echo "password= ".$password."<br/>";
				}
			?>
			<p>welcome<br/></p>
		<?php
			$servernamesql="localhost";
			$usernamesql="longalong";
			$passwordsql="longalong";
			//$username=null;
			//$password=null;
			$dbname="longbao";
			$aa=null;
			//创建连接
			$conn= new mysqli($servernamesql,$usernamesql,$passwordsql,$dbname);
			
			//检测连接
			if ($conn->connect_error){
				die("connection failed:n".$conn->connect_error);
			}
			echo "connect succeed <br/>";
			
			//{echo "fail to connect: ".mysql_connect_error();}
			$result = mysqli_query($conn,"select password from longbao.user where username = 'longalong' order by id;");
			while($row = mysqli_fetch_array($result)){
			echo "this is password0: ".$row['password']."<br/>";
			//验证密码
				if ($row[0] == $password){
				echo "密码验证成功<br />";
				} else{
				echo "密码错误<br/>";
				echo "<script> window.location='login.html'; alert('密码错误！');</script>";
					}
			}

			//用完关闭连接
			mysqli_close($conn);
			?></p>

		</div>
	</body>
</html>