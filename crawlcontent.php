<?php
require "simple_html_dom.php";
$directory = 'data/';
$des = 'F:/aa_data/';
$scanned_directory = array_diff(scandir($directory), array('..', '.'));
$arrayName = array("thoi-su",
  "the-gioi",
  "kinh-doanh",
  "giai-tri",
  "the-thao",
  "phap-luat",
  "giao-duc",
  "suc-khoe",
  "doi-song",
  "du-lich",
  "khoa-hoc",
  "so-hoa",
  "oto-xe-may",
  "y-kien",
  "tam-su",
  "cuoi");

function write_to_file($filename, $count, $content, $arrayName, $des) {
	$las = strrpos($filename, '-');
	$category = substr($filename, 0, $las);
	$random_category = array_rand($arrayName,3);
	$mark = true;
	if(!$content->find('.title_news_detail', 0) || !$content->find('.description', 0) || !$content->find('.content_detail', 0)) {
		$mark = false;
	}
	if($mark == true) {
		$title = $content->find('.title_news_detail', 0);
		$real_content_0 = $content->find('.title_news_detail', 0);
		$real_content_1 = $content->find('.description', 0);
		$real_content_2 = $content->find('.content_detail', 0);
		$real_content = $real_content_0.$real_content_1.$real_content_2;
		$avatar_url = "";
		if($real_content_2->find('img',0)) {
			$avatar_url = $real_content_2->find('img',0)->src;
		}else {
			$avatar_url = "https://upload.wikimedia.org/wikipedia/commons/a/aa/Logo_Google_2013_Official.svg";
		}
	
		$data_file = fopen($des.$filename.'-'.$count.'.json', "wb");
		$whole = "";
		$whole = $whole.$title."lol_PHP_EOL_lol".$avatar_url."lol_PHP_EOL_lol".$category."lol_PHP_EOL_lol";
		foreach ($random_category as $key) {
			$whole = $whole.$arrayName[$key]."lol_PHP_EOL_lol";
		}
		$whole = $whole.$real_content;
		fwrite($data_file, $whole);
		fclose($data_file);
		$flag_file = fopen('flag/flag.txt', "w");
		fwrite($flag_file, $des.$filename.'-'.$count.'<br>');
		fclose($flag_file);
		echo $filename.'-'.$count.'<br>';
	}else {
		echo  'fail:'.$filename.'-'.$count.'<br>'; 
	}
}

foreach ($scanned_directory as $filename) {
	$mark = true;
	if($mark == true) {
		$myfile = fopen($directory.$filename, "r");
		if(filesize($directory.$filename)) {
			$content =  fread($myfile,filesize($directory.$filename));
			$count = 0;
			if(strlen($content) ){
				$list = explode("<br>", $content);
				foreach ($list as $li) {
					$mark = true;
					$count ++;

					if($filename == "phap-luat-10" && $count < 802) {
						$mark = false;
					}
					if(strpos($li, 'video')) {
						$mark = false;
					}
					if($li == "") {
						$mark = false;
					}
					if($mark == true) {
						if(file_get_html($li)) {
							$html = file_get_html($li);
							if($html->find('.sidebar_1',0)) {
								$content = $html->find('.sidebar_1',0);
								write_to_file($filename, $count, $content, $arrayName, $des);
							}else {
								echo  'fail:'.$filename.'-'.$count.'<br>';
							}
						}else {
							echo  'fail:'.$filename.'-'.$count.'<br>';
						}
					}
				}
				
			}else {
			}
		}
		fclose($myfile);
	}
}
?>