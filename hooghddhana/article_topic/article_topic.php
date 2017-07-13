<?php

$page_title = $topic.' &bull; Literkunde';

include '../hooghddhana/template/header2.php';

$artcl_ns = get_n_artcls_topic($topic);

foreach ($artcl_ns as $artcl_n) {
	echo '<h4 class="pg_heading" >', $topic,' (', $artcl_n['count'],')</h4>';	
}

include '../hooghddhana/pgs/pg_no2.php';

include '../hooghddhana/article_topic/body/article_topic_body.php';
  
include '../hooghddhana/pgs/pg_nav2.php'; 

include '../hooghddhana/template/footer2.php';

?>