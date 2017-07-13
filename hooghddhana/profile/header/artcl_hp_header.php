<?php

$user_id = $_GET['id'];

$artcl_ns = get_n_artcls_uid($user_id);

foreach ($artcl_ns as $artcl_n) {
	if ($artcl_n['count'] == 1) {
		echo '<h4 class="pg_heading" >', $artcl_n['count'],' Article</h4>';
	} else {
		echo '<h4 class="pg_heading" >', $artcl_n['count'],' Articles</h4>';	
	}
}

$artcls = get_artcls_uid($user_id);

?>