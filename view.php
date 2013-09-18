<html>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
	<body>
		<a href="index.php?ac=update">更新新闻</a><br>
			<a href='<?=$header[0][2]?>'><?=$header[0][1]?></a><br>
			<a href='<?=$todaytop[0][2]?>'><?=$todaytop[0][1]?></a><br>
		<?php
			for($i = 0; $i < sizeof($more); $i++) {
		?>
				<a href='<?=$more[$i][2]?>'><?=$more[$i][1]?></a>
				<a href='<?=$todayNews[$i][2]?>'><?=$todayNews[$i][1]?></a><br>
		<?php
			}
		?>
	</body>
</html>