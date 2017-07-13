<?php

$per_page = 11;

$pages = sort_artcl_topic_by_pg($per_page, $topic);

if (isset($_GET['page']) && !empty($_GET['page'])) {
	$what_page = (int)mysql_real_escape_string($_GET['page']);	
}

$page = (isset($what_page) && !empty($what_page)) ? (int)$what_page : 1;
$start = ($page - 1) * $per_page;

$artcls = get_artcls_topic($topic, $start, $per_page);


?>