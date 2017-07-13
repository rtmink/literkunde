<?php

$per_page = 11;

$pages = sort_artcl_type_by_pg($per_page, $type);

if (isset($_GET['page']) && !empty($_GET['page'])) {
	$what_page = (int)mysql_real_escape_string($_GET['page']);	
}

$page = (isset($what_page) && !empty($what_page)) ? (int)$what_page : 1;
$start = ($page - 1) * $per_page;

$artcls = get_artcls_type($type, $start, $per_page);


?>