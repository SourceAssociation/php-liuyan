<html>
	<head>
		<title>留言墙</title>
		<meta charset="utf-8" >
		<script type="text/javascript">
		function del(id){
			if (confirm("确定删除这条留言么？")) {
				window.location="del.php?id="+id;
			};
		}
		</script>
	</head>
	<body>
		<center>
			<?php include"nav.php" ?>
			<table border="1">
				<tr>
					<th>标题</th>
					<th>留言者</th>
					<th>留言内容</th>
					<th>ip地址</th>
					<th>留言时间</th>
					<th>删除</th>
				</tr>
				<?php

					$info = file_get_contents("liuyan.txt");
					$new_info = rtrim($info,"@");

					if (strlen($new_info) >= 8) {

						$lylist = explode("@@@", $new_info);
						foreach ($lylist as $key => $value) {
							$ly = explode("##", $value);
							echo "<tr>";
							echo "<td>{$ly[0]}</td>";
							echo "<td>{$ly[1]}</td>";
							echo "<td>{$ly[2]}</td>";
							echo "<td>{$ly[3]}</td>";
							echo "<td>".date("Y-m-d H:m:s",$ly[4]+8*3600)."</td>";
							echo "<td><a href='javascript:del({$key})'>删除</a></td>";
							echo "</tr>";
						}
					}
				?>
			</table>
		</center>
	</body>
</html>