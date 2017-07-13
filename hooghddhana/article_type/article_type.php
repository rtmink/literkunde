<?php

$page_title = $type.' &bull; Literkunde';

include 'hooghddhana/template/header.php';

$artcl_ns = get_n_artcls_type($type);

foreach ($artcl_ns as $artcl_n) {
	echo '<h4 class="pg_heading" >', $type,' (', $artcl_n['count'],')</h4>';	
}

include 'hooghddhana/pgs/pg_no.php';

include 'hooghddhana/article_type/body/article_type_body.php';
  
include 'hooghddhana/pgs/pg_nav.php'; 

include 'hooghddhana/template/footer.php';

?>