<?php

$counter_ns = get_ns_counter($artcl_id);

foreach ($counter_ns as $counter_n) {
	
	if ($counter_n['count'] == 1) {
		echo '<p class="summary summary7" ><span class="e_green">', $counter_n['count'],' member view</span></p>';	
	} else {
		echo '<p class="summary summary7" ><span class="e_green">', $counter_n['count'],' member views</span></p>';	
	}
}

?>
