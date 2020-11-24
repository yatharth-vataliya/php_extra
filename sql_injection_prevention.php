<?php
	try {
		$pdo= new PDO("mysql:dbname=test;host=127.0.0.1","root","");	
	} catch (Exception $e) {
		echo $e->getMessage();
	}
		if ($_SERVER['REQUEST_METHOD']=='POST') {
			echo "POST METHOD IS WORKING";
			

	$stmt=$pdo->prepare("insert into demo values(:demo,:demo_)");
			/*$stmt->bindParam(':demo',$demo);
			$stmt->bindParam(':demo_',$demo_);*/
			$demo=$_POST['demo'];
			$demo_=$_POST['demo_'];
			$stmt->execute(array(':demo'=>$demo,':demo_'=>$demo_));
//			header('location:sql_injection_prevention.php');*/

/*			$db=mysqli_connect("localhost", "root", "", "test");
			$sql="insert into demo values ('$demo',$demo_)";
			echo $sql;
			mysqli_query($db,$sql);
		
	warning this method is not preferable to work with database :)

			*/

		} else {
			
		}


?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="" method="POST" accept-charset="utf-8">
		
		<input type="text" name="demo">
		<input type="text" name="demo_">
		<input type="submit" name="submit" value="submit">
	
	</form>
</body>
</html>