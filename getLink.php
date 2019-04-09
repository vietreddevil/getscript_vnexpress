<?php
require "simple_html_dom.php";
$root_url = "https://vnexpress.net";
$arrayName = array("/thoi-su",
  "/the-gioi",
  "/kinh-doanh",
  "/giai-tri",
  "/the-thao",
  "/phap-luat",
  "/giao-duc",
  "/suc-khoe",
  "/doi-song",
  "/du-lich",
  "/khoa-hoc",
  "/so-hoa",
  "/oto-xe-may",
  "/y-kien",
  "/tam-su",
  "/cuoi");
$count = 0;
foreach ($arrayName as $arrayitem) {
	$count++;
	$category_root_url = $root_url.$arrayitem;
	for($i = 0; $i < 35; $i ++) {

		$file_content = '';
		for($index = 1; $index < 100; $index++) {
			if($count != 3 && $count != 4 && $count != 5 && $count != 8 && $count != 9  && $count != 10 && $count != 12) {
				$link = $category_root_url."-p".($i * 100 + $index);
			}else {
				$link = $category_root_url."/p".($i * 100 + $index);
			}
			if(file_get_html($link)) {
				$html = file_get_html($link);
				$contain_content = $html->find('section.sidebar_1', 0);
				$h4s = $contain_content->find('h4.title_news');
				foreach ($h4s as $h4) {
					$url = $h4->find('a', 0)->href;
					$file_content = $file_content.$url.'<br>';
				}
				echo ($i * 100 + $index).'<br>';
			}
		}
		echo 'crawl success '.$arrayitem.$i.'<hr>';
		$myfile = fopen("data/".substr($arrayitem,1)."-".$i.".txt", "w");
		fwrite($myfile, $file_content);
		fclose($myfile);
	}
}

			
?>
