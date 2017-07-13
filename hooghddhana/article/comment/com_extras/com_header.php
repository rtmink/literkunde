<?php
$comments = get_comments($artcl_id);

echo '<h5 id="comment_box"><img class="comment_icon" src="resources/images/chat.gif" />';

if (empty($comments)) {
	echo '0 Comments';	
} else {
	$comment_ns = get_n_comments($artcl_id);
		
	foreach ($comment_ns as $comment_n) {
			
	if ($comment_n['count'] == 1) {
		echo $comment_n['count'],' Comment';
	} else {
		echo $comment_n['count'],' Comments';	
	}	
			
	}
}

echo '</h5>';
?>
