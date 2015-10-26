<html>
	<head>
		<title>留言墙</title>
		<meta charset="utf-8" >
	</head>
	<body>
		<center>
			<?php include"nav.php" ?>
			<?php

				$id = $_GET["id"];

				$info = file_get_contents("liuyan.txt");

				$lylist = explode("@@@", $info);

				unset($lylist[$id]);

				$nliuyan = implode("@@@", $lylist);

				file_put_contents("liuyan.txt", $nliuyan);

				echo "删除留言成功！";
			?>
		</center>
	</body>
</html>