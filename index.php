<html>
	<head>
		<title>留言墙</title>
		<meta charset="utf-8" >
	</head>
	<body>
		<center>
			<?php include"nav.php" ?>
			<form action="add.php" method="post">
				<table boder="1" width="400px">
					<tr>
						<td>标题：</td>
						<td><input type="text" name="title"></td>
					</tr>
					<tr>
						<td>标题：</td>
						<td><input type="text" name="author"></td>
					</tr>
					<tr>
						<td>标题：</td>
						<td><textarea type="text" name="content"></textarea></td>
					</tr>
					<tr colspan="2">
						<input type="submit" value="提交">
						<input type="reset" value="重置">
					</tr>
				</table>
			</form>
		</center>
	</body>
</html>