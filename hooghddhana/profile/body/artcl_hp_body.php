<?php

echo '<div id="list_of_artcl" class="container">';

	echo '<ul class="content">';

	foreach ($artcls as $artcl) {
		$topic_link = str_replace(" ","_",$artcl['topic']);
	
		$artcl_id = $artcl['id'];

    echo '<li><h5><a href="article.php?id=', $artcl['id'], '">', $artcl['title'], '</a></h5>';
	
    if ($artcl['ts_updated'] == $artcl['ts_created']) {
		echo '<p class="summary summary3" >Published ', date('d F Y', $artcl['ts_created']), '</p>';
	} else {
		echo '<p class="summary summary3" >Published ', date('d F Y', $artcl['ts_created']), ' | Updated ', date('d F Y', $artcl['ts_updated']), '</p>';	
	}
    echo '<p class="summary summary3" >Type: <a href="', strtolower($artcl['type']), '">', $artcl['type'], '</a> | Topic: <a href="topic/', strtolower($topic_link), '">', $artcl['topic'], '</a></p>';
	
	include 'hooghddhana/article/review_info/review_info.php';
	
	echo '<br /></li>';
    
  	}
  
	echo '</ul>';
  
  	echo '<div class="pg_navigation"></div>';
  	echo '<div class="info_text"></div>';
  
echo '</div>';

?>