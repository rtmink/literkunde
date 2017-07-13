<?php

$artcl_ns = get_n_artcls_topic($topic); 

foreach ($artcl_ns as $artcl_n) {
	
	if ($artcl_n['count'] <= 11) {
		
	} else {
	
		include 'pg_nav_no/pg_nav_no.php';  
	}
}

?>