<?php

$comTime = time_posted($comment['timestamp']);

if (!logged_in()) {
	echo $comTime;
} else {
	if ($user_id == $_SESSION['user_id']) {
		echo $comTime, '<span class="right"><img class="dlt_com" id="dlt_com_', $comment['id'],'" src="resources/images/trash.gif" /></span>';
	} else {
		echo $comTime;
	}
} 
?>

<script type="text/javascript" src="resources/js/rev/dlt_com.js"></script>