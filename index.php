<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<?php
	/*
	A program that can climb the message in the www.qq.com;
	*/
	$dom = new DOMDocument();
	@$dom->loadHTMLFile('http://www.qq.com');

	// $xpath = new DomXpath($dom);

	// $dom_list = $xpath->query('//div[@class="leftAreaContent leftView fr"]/div[@class="hd"]/h2');
	// print_r($dom_list->item(0)->nodeValue);
	// echo "<br>";
	// $dom_list = $xpath->query('//div[@class="leftAreaContent leftView fr"]/div[@class="ft"]//h3[@id="todaytop"]');
	// echo $dom_list->item(0)->nodeValue."<br>";

	// $dom_list = $xpath->query('//div[@class="leftAreaContent leftView fr"]/div[@class="ft"]//ul[@class="nostyle"]//li');
	// for($i = 0; $i < $dom_list->length; $i++) {
	// 	echo $dom_list->item($i)->nodeValue."<br>";
	// }

	// $dom_list = $xpath->query('//div[@class="leftAreaContent leftView fr"]/div[@class="ft"]//ul[@class="nostyle"]//li//a/@href');
	// for($i = 0; $i < $dom_list->length; $i++) {
	// 	echo $dom_list->item($i)->nodeValue."<br>";
	// }
	$dom_list = $dom->getElementById('today');
	$dom_todaytop = $dom->getElementById('todaytop');
	$dom_title = $dom_list->getElementsByTagName('div');
	$dom_title_lv1 = $dom_title->item(0)->nodeValue;
	$dom_title_lv1_href = $dom_list->getElementsByTagName('a')->item(0)->getAttribute('href');
	echo "<a href='$dom_title_lv1_href'>$dom_title_lv1</a>"."<br>";
	$dom_title_lv2_href = $dom_list->getElementsByTagName('a')->item(1)->getAttribute('href');
	echo "<a href='$dom_title_lv2_href'>$dom_todaytop->nodeValue</a>"."<br>";

	$dom_title_lv3 = $dom_title->item(1)->getElementsByTagName('li');

	for($i = 0; $i < $dom_title_lv3->length; $i++) {
		$k = $i*2;
		$dom_title_lv3_href[$i] = $dom_list->getElementsByTagName('a')->item($k+2)->getAttribute('href');
		$j = $k + 1;
		$dom_title_lv3_href[$j] = $dom_list->getElementsByTagName('a')->item($j+2)->getAttribute('href');
		$titles = explode('|', $dom_title_lv3->item($i)->nodeValue);
		echo "<a href='$dom_title_lv3_href[$i]'>$titles[0]</a>"." | ";
		echo "<a href='$dom_title_lv3_href[$j]'>$titles[1]</a>"."<br>";
	}



/*	
	End of this php file;
*/