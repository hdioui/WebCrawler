<?php
	/*
	A program that can climb the message in the www.qq.com;
	*/
	include 'news_class.php';
	$news = new News();
	if(isset($_GET['ac']) && $_GET['ac'] == 'update') {
		$dom = new DOMDocument();
		@$dom->loadHTMLFile('http://www.qq.com');
		$dom->saveHTML();
		$dom_list = $dom->getElementById('today');
		$dom_todaytop = $dom->getElementById('todaytop');
		$dom_title = $dom_list->getElementsByTagName('div');
		$dom_title_lv1 = trim($dom_title->item(0)->textContent);
		$dom_title_lv1_href = $dom_list->getElementsByTagName('a')->item(0)->getAttribute('href');
		$news->update_todayNews($dom_title_lv1, $dom_title_lv1_href, 1);

		$dom_title_lv2_href = $dom_list->getElementsByTagName('a')->item(1)->getAttribute('href');
		$news->update_todayNews(trim($dom_todaytop->textContent), $dom_title_lv2_href, 2);

		$dom_title_lv3 = $dom_title->item(1)->getElementsByTagName('li');
		for($i = 0; $i < $dom_title_lv3->length; $i++) {
			$k = $i*2;
			$dom_title_lv3_href[$i] = $dom_list->getElementsByTagName('a')->item($k+2)->getAttribute('href');
			$j = $k + 1;
			$dom_title_lv3_href[$j] = $dom_list->getElementsByTagName('a')->item($j+2)->getAttribute('href');
			$titles = explode('|', trim($dom_title_lv3->item($i)->textContent));
			$news->update_todayNews(trim($titles[0]), $dom_title_lv3_href[$i], 3);
			$news->update_todayNews(trim($titles[1]), $dom_title_lv3_href[$j], 0);
		}
		header("Location: /WebCrawler/");
	}

	$header = $news->get_news(1);
	$todaytop = $news->get_news(2);
	$more = $news->get_news(3);
	$todayNews = $news->get_news(0);
	include 'view.php';

/*	
	End of this php file;
*/