<html>
	<head>
		<title>留言墙</title>
		<meta charset="utf-8" >
	</head>
	<body>
		<center>
			<?php include"nav.php" ?>
			<?php

				$title = $_POST["title"];
				$author = $_POST["author"];
				$content = $_POST["content"];
				
				$ip = $_SERVER["REMOTE_ADDR"];
				$time = time();

				$liuyan = "{$title}##{$author}##{$content}##{$ip}##{$time}@@@";
				//echo $liuyan;

				$info = file_get_contents("liuyan.txt");
				file_put_contents("liuyan.txt", $info.$liuyan);

				echo "添加留言成功！谢谢！！";
			?>
		</center>
	</body>
</html>