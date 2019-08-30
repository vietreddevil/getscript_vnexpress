<?php
require "simple_html_dom.php";
function debug_to_console( $data ) {
    $output = $data;
    if ( is_array( $output ) )
        $output = implode( ',', $output);

    echo "<script>console.log( '" . $output . "' );</script>";
}


// $link_temp = "https://truyenfull.vn/mat-ma-da-vinci/";
// $text = '';
// $count = 0;
// $name_count = 1;
// $stop = 0;
// for($page = 1; $page <= 4; $page ++) {
	
// 	$html = file_get_html($link_temp."trang-".$page."/#list-chapter");
	

// 	$list_chapter = $html->find("div[id='list-chapter']", 0);
// 	$ul = $list_chapter->find("ul.list-chapter");
// 	foreach ($ul as $u) {
// 		$li = $u->find("a");
// 		foreach ($li as $l) {
// 			$count ++;
// 			$stop++;
			
// 			$chapHtml = file_get_html($l->href);
// 			$content = $chapHtml->find("div.'chapter-c'",0)->innertext;
// 			echo $content;
// 			$title = $chapHtml->find("a.'chapter-title'", 0)->title;
// 			debug_to_console($title);
// 		}
// 	}
	
// }


/*webtruyen.com: get text and split*/

$exx3 = 'A PHP Error was encounteredSeverity: NoticeMessage: Undefined index: HTTP_USER_AGENTFilename: libraries/AdsManager.phpLine Number: 379Backtrace:File: /home/doctruyen/domains/doctruyen.info/v2.5/application/libraries/AdsManager.phpLine: 379Function: _error_handlerFile: /home/doctruyen/domains/doctruyen.info/v2.5/application/views/frontend/content.phpLine: 153Function: insertAdFile: /home/doctruyen/domains/doctruyen.info/v2.5/application/libraries/My_layout.phpLine: 24Function: viewFile: /home/doctruyen/domains/doctruyen.info/v2.5/application/controllers/Story.phpLine: 573Function: viewFile: /home/doctruyen/domains/doctruyen.info/public_html/index.phpLine: 315Function: require_onceA PHP Error was encounteredSeverity: NoticeMessage: Undefined index: HTTP_USER_AGENTFilename: libraries/AdsManager.phpLine Number: 379Backtrace:File: /home/doctruyen/domains/doctruyen.info/v2.5/application/libraries/AdsManager.phpLine: 379Function: _error_handlerFile: /home/doctruyen/domains/doctruyen.info/v2.5/application/views/frontend/content.phpLine: 154Function: insertAdFile: /home/doctruyen/domains/doctruyen.info/v2.5/application/libraries/My_layout.phpLine: 24Function: viewFile: /home/doctruyen/domains/doctruyen.info/v2.5/application/controllers/Story.phpLine: 573Function: viewFile: /home/doctruyen/domains/doctruyen.info/public_html/index.phpLine: 315Function: require_onceA PHP Error was encounteredSeverity: NoticeMessage: Undefined index: HTTP_USER_AGENTFilename: libraries/AdsManager.phpLine Number: 379Backtrace:File: /home/doctruyen/domains/doctruyen.info/v2.5/application/libraries/AdsManager.phpLine: 379Function: _error_handlerFile: /home/doctruyen/domains/doctruyen.info/v2.5/application/views/frontend/content.phpLine: 155Function: insertAdFile: /home/doctruyen/domains/doctruyen.info/v2.5/application/libraries/My_layout.phpLine: 24Function: viewFile: /home/doctruyen/domains/doctruyen.info/v2.5/application/controllers/Story.phpLine: 573Function: viewFile: /home/doctruyen/domains/doctruyen.info/public_html/index.phpLine: 315Function: require_once';
$exx2 = 'Đăng bởi: Sói GiàA PHP Error was encounteredSeverity: NoticeMessage: Undefined index: HTTP_USER_AGENTFilename: libraries/AdsManager.phpLine Number: 379Backtrace:File: /home/doctruyen/domains/doctruyen.info/v2.5/application/libraries/AdsManager.phpLine: 379Function: _error_handlerFile: /home/doctruyen/domains/doctruyen.info/v2.5/application/views/frontend/content.phpLine: 153Function: insertAdFile: /home/doctruyen/domains/doctruyen.info/v2.5/application/libraries/My_layout.phpLine: 24Function: viewFile: /home/doctruyen/domains/doctruyen.info/v2.5/application/controllers/Story.phpLine: 573Function: viewFile: /home/doctruyen/domains/doctruyen.info/public_html/index.phpLine: 315Function: require_onceA PHP Error was encounteredSeverity: NoticeMessage: Undefined index: HTTP_USER_AGENTFilename: libraries/AdsManager.phpLine Number: 379Backtrace:File: /home/doctruyen/domains/doctruyen.info/v2.5/application/libraries/AdsManager.phpLine: 379Function: _error_handlerFile: /home/doctruyen/domains/doctruyen.info/v2.5/application/views/frontend/content.phpLine: 154Function: insertAdFile: /home/doctruyen/domains/doctruyen.info/v2.5/application/libraries/My_layout.phpLine: 24Function: viewFile: /home/doctruyen/domains/doctruyen.info/v2.5/application/controllers/Story.phpLine: 573Function: viewFile: /home/doctruyen/domains/doctruyen.info/public_html/index.phpLine: 315Function: require_onceA PHP Error was encounteredSeverity: NoticeMessage: Undefined index: HTTP_USER_AGENTFilename: libraries/AdsManager.phpLine Number: 379Backtrace:File: /home/doctruyen/domains/doctruyen.info/v2.5/application/libraries/AdsManager.phpLine: 379Function: _error_handlerFile: /home/doctruyen/domains/doctruyen.info/v2.5/application/views/frontend/content.phpLine: 155Function: insertAdFile: /home/doctruyen/domains/doctruyen.info/v2.5/application/libraries/My_layout.phpLine: 24Function: viewFile: /home/doctruyen/domains/doctruyen.info/v2.5/application/controllers/Story.phpLine: 573Function: viewFile: /home/doctruyen/domains/doctruyen.info/public_html/index.phpLine: 315Function: require_once';
$exx1 = "A PHP Error was encounteredSeverity: NoticeMessage: Undefined index: HTTP_USER_AGENTFilename: libraries/AdsManager.phpLine Number: 379Backtrace:File: /home/doctruyen/domains/doctruyen.info/v2.5/application/libraries/AdsManager.phpLine: 379Function: _error_handlerFile: /home/doctruyen/domains/doctruyen.info/v2.5/application/views/frontend/content.phpLine: 153Function: insertAdFile: /home/doctruyen/domains/doctruyen.info/v2.5/application/libraries/My_layout.phpLine: 24Function: viewFile: /home/doctruyen/domains/doctruyen.info/v2.5/application/controllers/Story.phpLine: 573Function: viewFile: /home/doctruyen/domains/doctruyen.info/public_html/index.phpLine: 315Function: require_onceA PHP Error was encounteredSeverity: NoticeMessage: Undefined index: HTTP_USER_AGENTFilename: libraries/AdsManager.phpLine Number: 379Backtrace:File: /home/doctruyen/domains/doctruyen.info/v2.5/application/libraries/AdsManager.phpLine: 379Function: _error_handlerFile: /home/doctruyen/domains/doctruyen.info/v2.5/application/views/frontend/content.phpLine: 154Function: insertAdFile: /home/doctruyen/domains/doctruyen.info/v2.5/application/libraries/My_layout.phpLine: 24Function: viewFile: /home/doctruyen/domains/doctruyen.info/v2.5/application/controllers/Story.phpLine: 573Function: viewFile: /home/doctruyen/domains/doctruyen.info/public_html/index.phpLine: 315Function: require_onceA PHP Error was encounteredSeverity: NoticeMessage: Undefined index: HTTP_USER_AGENTFilename: libraries/AdsManager.phpLine Number: 379Backtrace:File: /home/doctruyen/domains/doctruyen.info/v2.5/application/libraries/AdsManager.phpLine: 379Function: _error_handlerFile: /home/doctruyen/domains/doctruyen.info/v2.5/application/views/frontend/content.phpLine: 155Function: insertAdFile: /home/doctruyen/domains/doctruyen.info/v2.5/application/libraries/My_layout.phpLine: 24Function: viewFile: /home/doctruyen/domains/doctruyen.info/v2.5/application/controllers/Story.phpLine: 573Function: viewFile: /home/doctruyen/domains/doctruyen.info/public_html/index.phpLine: 315Function: require_once ";



//cho doc nhieu chap khong deu nhau
// function wrtofile(&$txt, $e1, $e2, $e3, $stop, $nam, $start, $finish, $tap) {
// 			$txt = str_replace($e1, '', $txt);
// 			$txt = str_replace($e2, '', $txt);
// 			$txt = str_replace($e3, '', $txt);
// 			$myfile = fopen($nam.$tap."(".$start."-".$finish.").txt", "w");
// 			fwrite($myfile, $txt);
// 			fclose($myfile);
// 			$txt = '';
// }
// $name = "Thatkiemhathiensontap";
// $link_temp = "http://webtruyen.com/that-kiem-ha-thien-son/";
// $text1 = $text2 = $text3 = $text4 = $text5 = $text6 = $text7 = $text8 = $text9 = $text10 = $text11 = $text12 = $text13 = $text14 = $text15 = $text16 = $text17 = $text18 = '';
// $count = 0;
// $stop = 0;
// for($page = 1; $page <= 5; $page ++) {
// 	if($page == 1) {
// 		$html = file_get_html($link_temp);
// 	}else {
// 		$html = file_get_html($link_temp.$page."/");
// 	}

// 	$list_chapter = $html->find("div[id=divtab]", 0);
// 	$ul = $list_chapter->find("ul", 0);
// 	$li = $ul->find("a");
// 	foreach ($li as $l) {
// 		// $count ++;
// 		$stop++;
// 		if($stop > 4340) {
// 			break;
// 		}
// 		$count ++;
		
		
// 		debug_to_console($l->innertext);
// 		if($stop >= 1 && $stop <= 3) {
// 			$chapHtml = file_get_html($l->href);
// 			$content = $chapHtml->find("div[id=content]",0)->find("text");
// 			foreach ($content as $con) {
// 				$text1 = $text1.$con;
// 			}
// 		}

// 		if($stop >= 4 && $stop <= 7) {
// 			$chapHtml = file_get_html($l->href);
// 			$content = $chapHtml->find("div[id=content]",0)->find("text");
// 			foreach ($content as $con) {
// 				$text2 = $text2.$con;
// 			}
			
// 		}

// 		if($stop >= 8 && $stop <= 11) {
// 			$chapHtml = file_get_html($l->href);
// 			$content = $chapHtml->find("div[id=content]",0)->find("text");
// 			foreach ($content as $con) {
// 				$text3 = $text3.$con;
// 			}
			
// 		}

// 		if($stop >= 12 && $stop <= 15) {
// 			$chapHtml = file_get_html($l->href);
// 			$content = $chapHtml->find("div[id=content]",0)->find("text");
// 			foreach ($content as $con) {
// 				$text4 = $text4.$con;
// 			}
			
// 		}

// 		if($stop >= 16 && $stop <= 19) {
// 			$chapHtml = file_get_html($l->href);
// 			$content = $chapHtml->find("div[id=content]",0)->find("text");
// 			foreach ($content as $con) {
// 				$text5 = $text5.$con;
// 			}
			
// 		}

// 		if($stop >= 20 && $stop <= 23) {
// 			$chapHtml = file_get_html($l->href);
// 			$content = $chapHtml->find("div[id=content]",0)->find("text");
// 			foreach ($content as $con) {
// 				$text6 = $text6.$con;
// 			}
			
// 		}

// 		if($stop >= 24 && $stop <= 26) {
// 			$chapHtml = file_get_html($l->href);
// 			$content = $chapHtml->find("div[id=content]",0)->find("text");
// 			foreach ($content as $con) {
// 				$text7 = $text7.$con;
// 			}
			
// 		}

// 		if($stop >= 27 && $stop <= 30) {
// 			$chapHtml = file_get_html($l->href);
// 			$content = $chapHtml->find("div[id=content]",0)->find("text");
// 			foreach ($content as $con) {
// 				$text8 = $text8.$con;
// 			}
			
// 		}

// 		if($stop >= 65 && $stop <= 69) {
// 			$chapHtml = file_get_html($l->href);
// 			$content = $chapHtml->find("div[id=content]",0)->find("text");
// 			foreach ($content as $con) {
// 				$text9 = $text9.$con;
// 			}
			
// 		}

// 		if($stop >= 70 && $stop <= 73) {
// 			$chapHtml = file_get_html($l->href);
// 			$content = $chapHtml->find("div[id=content]",0)->find("text");
// 			foreach ($content as $con) {
// 				$text10 = $text10.$con;
// 			}
			
// 		}

// 		if($stop >= 74 && $stop <= 78) {
// 			$chapHtml = file_get_html($l->href);
// 			$content = $chapHtml->find("div[id=content]",0)->find("text");
// 			foreach ($content as $con) {
// 				$text11 = $text11.$con;
// 			}
			
// 		}

// 		if($stop >= 79 && $stop <= 82) {
// 			$chapHtml = file_get_html($l->href);
// 			$content = $chapHtml->find("div[id=content]",0)->find("text");
// 			foreach ($content as $con) {
// 				$text12 = $text12.$con;
// 			}
			
// 		}

// 		if($stop >= 83 && $stop <= 85) {
// 			$chapHtml = file_get_html($l->href);
// 			$content = $chapHtml->find("div[id=content]",0)->find("text");
// 			foreach ($content as $con) {
// 				$text13 = $text13.$con;
// 			}
			
// 		}

// 		if($stop >= 86 && $stop <= 92) {
// 			$chapHtml = file_get_html($l->href);
// 			$content = $chapHtml->find("div[id=content]",0)->find("text");
// 			foreach ($content as $con) {
// 				$text14 = $text14.$con;
// 			}
			
// 		}
// 		if($stop >= 93 && $stop <= 101) {
// 			$chapHtml = file_get_html($l->href);
// 			$content = $chapHtml->find("div[id=content]",0)->find("text");
// 			foreach ($content as $con) {
// 				$text15 = $text15.$con;
// 			}	
// 		}
// 		if($stop >= 93 && $stop <= 101) {
// 			$chapHtml = file_get_html($l->href);
// 			$content = $chapHtml->find("div[id=content]",0)->find("text");
// 			foreach ($content as $con) {
// 				$text16 = $text16.$con;
// 			}
			
// 		}
// 		if($stop >= 93 && $stop <= 101) {
// 			$chapHtml = file_get_html($l->href);
// 			$content = $chapHtml->find("div[id=content]",0)->find("text");
// 			foreach ($content as $con) {
// 				$text17 = $text17.$con;
// 			}
			
// 		}
// 		if($stop >= 93 && $stop <= 101) {
// 			$chapHtml = file_get_html($l->href);
// 			$content = $chapHtml->find("div[id=content]",0)->find("text");
// 			foreach ($content as $con) {
// 				$text18 = $text18.$con;
// 			}
			
// 		}
// 	}
// }
// wrtofile($text1, $exx1, $exx2, $exx3, $stop, $name, 1, 5);
// wrtofile($text2, $exx1, $exx2, $exx3, $stop, $name, 6, 10);
// wrtofile($text3, $exx1, $exx2, $exx3, $stop, $name, 11,15);
// wrtofile($text4, $exx1, $exx2, $exx3, $stop, $name, 16,20);
// wrtofile($text5, $exx1, $exx2, $exx3, $stop, $name, 21,25);
// wrtofile($text6, $exx1, $exx2, $exx3, $stop, $name, 26,30);
// wrtofile($text7, $exx1, $exx2, $exx3, $stop, $name, 31,35);
// wrtofile($text8, $exx1, $exx2, $exx3, $stop, $name, 36,40);
// wrtofile($text9, $exx1, $exx2, $exx3, $stop, $name, 65,69);
// wrtofile($text10, $exx1, $exx2, $exx3, $stop, $name, 70,73);
// wrtofile($text11, $exx1, $exx2, $exx3, $stop, $name, 74,78);
// wrtofile($text12, $exx1, $exx2, $exx3, $stop, $name, 79,82);
// wrtofile($text13, $exx1, $exx2, $exx3, $stop, $name, 83,85);
// wrtofile($text14, $exx1, $exx2, $exx3, $stop, $name, 85,92);
// wrtofile($text15, $exx1, $exx2, $exx3, $stop, $name, 93,101);
// wrtofile($text16, $exx1, $exx2, $exx3, $stop, $name, 93,101);
// wrtofile($text17, $exx1, $exx2, $exx3, $stop, $name, 93,101);
// wrtofile($text18, $exx1, $exx2, $exx3, $stop, $name, 93,101);
// debug_to_console("end");


//cho doc nhieu chap deu nhau
// $name = "Volamtuyetdia";
// $link_temp = "http://webtruyen.com/vo-lam-tuyet-dia/";
// $text = '';
// $count = 0;
// $name_count = 1;
// $stop = 0;
// for($page = 1; $page <= 3; $page ++) {
// 	if($page == 1) {
// 		$html = file_get_html($link_temp);
// 	}else {
// 		$html = file_get_html($link_temp.$page."/");
// 	}

// 	$list_chapter = $html->find("div[id=divtab]", 0);
// 	$ul = $list_chapter->find("ul", 0);
// 	$li = $ul->find("a");
// 	foreach ($li as $l) {
// 		$count ++;
// 		$stop++;
// 		if($stop > 4340) {
// 			break;
// 		}
		
// 		$chapHtml = file_get_html($l->href);
// 		$content = $chapHtml->find("div[id=content]",0)->find("text");
// 		foreach ($content as $con) {
// 		$text = $text.$con;
// 		}
		
// 		debug_to_console($l->innertext);
// 		if($count >= 5) {
// 			$text = str_replace($exx1, '', $text);
// 			$text = str_replace($exx2, '', $text);
// 			$text = str_replace($exx3, '', $text);
// 			$count = 0;
// 			$myfile = fopen($name."tap".$name_count."(".($stop - 4)."-".($stop).").txt", "w");
// 			$name_count++;
// 			fwrite($myfile, $text);
// 			fclose($myfile);
// 			$text = '';
// 		}
// 	}
// 	if($stop > 4340) {
// 		break;
// 	}
// }
			
// debug_to_console("end");
//------------------------------------------------------//

// $link_temp = "http://webtruyen.com/vo-tong-tai-ba-dao/";
// $TopBound = 92;
// $BotBound = 85;
// $count = 0;
// for($page = 1; $page <= 4; $page ++) {
// 	if($page == 1) {
// 		$html = file_get_html($link_temp);
// 	}else {
// 		$html = file_get_html($link_temp.$page."/");
// 	}

// 	$list_chapter = $html->find("div[id=divtab]", 0);
// 	$ul = $list_chapter->find("ul", 0);
// 	$li = $ul->find("a");
// 	foreach ($li as $l) {
// 		$count ++;
// 		if($count <= $TopBound && $count >= $BotBound) {
// 			$chapHtml = file_get_html($l->href);
// 			$content = $chapHtml->find("div[id=content]",0);
// 			if($content->find("div")) {
// 				$exclude = $content->find("div");
// 				foreach ($exclude as $ex) {
// 					$content = str_replace($ex, "", $content);
// 				}
// 			}
// 			echo $content."<br>";
// 			debug_to_console($l->innertext);
// 		}
// 	}
// }
// debug_to_console("end");


/*gasach.com*/
$html = file_get_html("https://gacsach.com/doc-online/nhung-tam-long-cao-ca-edmondo-de-amicis.html");
$div = $html->find("div[id=book-navigation-183922] ul", 0);
$aa = $div->find("a");
foreach ($aa as $a) {
	$chapHtml = file_get_html("https://gacsach.com".$a->href);
	$content = $chapHtml->find("div.field-items", 0);
	$title = $chapHtml->find("h1.page-title", 0);
	debug_to_console("chap : ".$title);
	echo $content."<br>";
}






/*sachhayonline*/
// $html = file_get_html("https://www.sachhayonline.com/tua-sach/giong-to");
// $ul = $html->find("ul.default", 0);
// $li = $ul->find("a");
// foreach ($li as $l) {
// 	$chapHtml = file_get_html($l->href);
// 	$content = $chapHtml->find("article", 0);
// 	$h = $content->find("option[selected=selected]", 0);
// 	debug_to_console("chap: ".$h->innertext);
// 	$cc = $content->find("p");
// 	foreach ($cc as $c) {
// 		echo $c;
// 	}
// }




/*sachvui.com*/
// $html = file_get_html("http://sachvui.com/ebook/chuyen-con-meo-day-hai-au-bay-luis-sepulveda.897.html");
// $chaps = $html->find("div[id=list-chapter]", 0);
// $chapLinks = $chaps->find("a");
// foreach ($chapLinks as $c) {
// 	$chapHtml = file_get_html($c->href);
// 	$temp = $chapHtml->find("p");
// 	foreach ($temp as $t) {
// 		echo $t;
// 	}
// 	debug_to_console("current: ".$c->innertext);
// }




/*webtruyenonline*/
// for($chap_num = 1; $chap_num <= 1689; $chap_num++) {
	
// 	$html = file_get_html("http://webtruyenonline.com/truyen/duoc-than.483/chuong-".$chap_num);
// 	$div = $html->find("div[id=contents]", 0);
// 	$content_div = $div->find("div", 1);
// 	echo $content_div."<br>";
	
// 	debug_to_console($chap_num);
// }







/*----------------------------------*/
//isach.info
// $html = file_get_html('https://isach.info/story.php?story=mat_ma_da_vinci__dan_brown&chapter=0000');



// $chaps = $html->find("div.right_menu_item");

// foreach ($chaps as $c) {
// 	if (substr($c->id, 0, 3) == 'c00' || substr($c->id, 0, 3) == 'c01'|| substr($c->id, 0, 3) == 'c02' || substr($c->id, 0, 3) == 'c03' || substr($c->id, 0, 3) == 'c04' || substr($c->id, 0, 3) == 'c05') {
// 			$text = '';
// 			$chap_num = $c->id;
// 			$link = "https://isach.info/".$c->find("a", 0)->href;
// 			$chapHtml = file_get_html($link);
// 			$contents = $chapHtml->find('div.ms_text');
// 			foreach($contents as $content) {
// 				$text = $text.$content;
// 			}
// 			$is_big_first = $chapHtml->find('div.ms_text', 0);
// 			if($is_big_first->find("div[id=dropcap]")) {
// 				$temp = $is_big_first->find("div[id=dropcap]", 0)->innertext;
// 				$exclude = $is_big_first->find("div[id=dropcap]", 0);
// 				$text = str_replace($exclude, $temp, $text);
// 			}
// 			debug_to_console($chap_num);
// 			echo $text;
// 	}
// }





// for($chap_num = 248; $chap_num <= 904; $chap_num++) {
// 	$text = '';
// 	$link = 'https://isach.info/story.php?story=hao_mon_thinh_sung_co_vo_ngang_nguoc_cua_tong_giam_doc_than_bi__diep_phi_da&chapter=';
// 	if($chap_num < 10) {
// 		$html = file_get_html($link."000".$chap_num);
// 	}else if($chap_num < 100){
// 		$html = file_get_html($link."00".$chap_num);
// 	}else if($chap_num < 1000){
// 		$html = file_get_html($link."0".$chap_num);
// 	}else {
// 		$html = file_get_html($link.$chap_num);
// 	}
	
// 	if($html->find('div.ms_text')) {
// 		$contents = $html->find('div.ms_text');
// 		foreach($contents as $content) {
// 			$text = $text.$content;
// 		}
// 		$is_big_first = $html->find('div.ms_text', 0);
// 		if($is_big_first->find("div[id=dropcap]")) {
// 			$temp = $is_big_first->find("div[id=dropcap]", 0)->innertext;
// 			$exclude = $is_big_first->find("div[id=dropcap]", 0);
// 			$text = str_replace($exclude, $temp, $text);
// 		}
// 		debug_to_console('%c current: '.$chap_num, "color:green");
// 		echo $text;
// 	}else {
// 		debug_to_console("%c CANNOT READ OR BLANK CHAPTER: ".$chap_num, "color:red");
// 	}
// }

/*doctruyen.tv*/
// $html = file_get_html("https://doctruyen.tv/anh-dep-trai-cho-em-yeu-anh-mot-chut-nhe");
// $sec = $html->find("section[id=primary]", 0);
// $list = $sec->find("li a");
// foreach ($list as $li) {
// 	$chapHtml = file_get_html($li->href);
// 	$content = $chapHtml->find("div.entry-content", 0);
// 	echo $content."<br>";
	
// }

/*thichtruyen.vn*/
// $html = file_get_html("http://thichtruyen.vn/doc-truyen/tra-thu-gau-cho-chuong-01");
// $select = $html->find("select", 0);
// $list = $select->find("option");
// foreach ($list as $li) {
// 	$chapHtml = file_get_html("http://thichtruyen.vn".$li->value);
// 	$content = $chapHtml->find("div.story-detail-content", 0);
// 	echo $content."<br>";
// }

/*santruyen.com*/
// $html = file_get_html("http://santruyen.com/ba-chi-ket-hon-voi-toi-nhe.html");
// $text = '';
// $chaplist = $html->find("ul.chapterList", 0);
// $list = $chaplist->find("a");
// foreach ($list as $li) {
// 	$chapHtml = file_get_html($li->href);
// 	$content = $chapHtml->find("div.chapterContent", 0);
// 	$text = $content.$text;
// }
// echo $text;
?>