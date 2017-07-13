<?php

// Clickable Link
function clickable_link($text = '') {
	$text = preg_replace('#(script|about|applet|activex|chrome):#is', "\\1:", $text);
	$ret = ' ' . $text;
	$ret = preg_replace("#(^|[\n ])([\w]+?://[\w\#$%&~/.\-;:=,?@\[\]+]*)#is", "\\1<a class=\"blue\" href=\"\\2\" target=\"_blank\">\\2</a>", $ret);
		
	$ret = preg_replace("#(^|[\n ])((www|ftp)\.[\w\#$%&~/.\-;:=,?@\[\]+]*)#is", "\\1<a class=\"blue\" href=\"http://\\2\" target=\"_blank\">\\2</a>", $ret);
	$ret = preg_replace("#(^|[\n ])([a-z0-9&\-_.]+?)@([\w\-]+\.([\w\-\.]+\.)*[\w]+)#i", "\\1<a class=\"blue\" href=\"mailto:\\2@\\3\">\\2@\\3</a>", $ret);
	$ret = substr($ret, 1);
	return $ret;
}

// Check Values
function check_values($value) {
	//Remove white spaces
	$value = preg_replace('#[\r\n]+#', "\n", $value);
	
	//Trim the comment
	$value = trim($value);
 
	// Stripslashes
	if (get_magic_quotes_gpc()) {
		$value = stripslashes($value);
	}
 
	 // Convert all &lt;, &gt; etc. to normal html and then strip these
	 $value = strtr($value,array_flip(get_html_translation_table(HTML_ENTITIES)));
 
	 // Strip HTML Tags
	 $value = strip_tags($value);
 
	// Quote the comment
	//$value = mysql_real_escape_string($value);
	$value = htmlspecialchars ($value);	
	
	return $value;
}

// Time
function time_posted($before) {
	$time = array (
			array(60 * 60 * 24 * 365, 'year'),
			array(60 * 60 * 24 * 30, 'month'),
			array(60 * 60 * 24 * 7, 'week'),
			array(60 * 60 * 24, 'day'),
			array(60 * 60, 'hour'),
			array(60, 'minute'),
			array(1, 'second'),
		);
				
	$now = time();
	
	$ago = $now - $before;
	
	for ($i = 0, $j = count($time); $i < $j; $i++) {
		
		$seconds = $time[$i][0];
		$type = $time[$i][1];
		
		if (($count = floor($ago / $seconds)) != 0) {
			break;
		}
	}
	
	$posted = ($count == 1) ? '1 '.$type.' ago' : "$count {$type}s ago";
	
	if ($posted == '0 seconds ago') {
		$posted = 'a few moments ago';	
	}
	
	return $posted;
}

?>