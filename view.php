<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
	<link rel="stylesheet" type="text/css" href="qqnews.css">
	<body>
		<title>腾讯今日要闻</title>
		
		<a href="index.php?ac=update"><div class="update-news">更新新闻</div></a><br>
		<a href='<?=$header[0][2]?>'><div class="today-topic"><?=$header[0][1]?></div></a><br>
		<a href='<?=$todaytop[0][2]?>'><div class="today-top"><?=$todaytop[0][1]?></div></a><br>
		<?php
			for($i = 0; $i < sizeof($more); $i++) {
		?>
				<a href='<?=$more[$i][2]?>'><span class="smalltitle"><?=$more[$i][1]?></span></a>
				<a href='<?=$todayNews[$i][2]?>'><span class="title"><?=$todayNews[$i][1]?></span></a><br>
		<?php
			}
		?>
	</body>
</html>