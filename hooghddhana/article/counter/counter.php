<?php

include 'counter_n/counter_n.php';

if (!logged_in() || $user_id == $_SESSION['user_id']) {
		
} 

if ($user_id != $_SESSION['user_id']) {
	// if true, don't do anything
	if (counter_check($artcl_id) === false) {
		post_counter($artcl_id);	
	} else {
		
	}	
}

?>