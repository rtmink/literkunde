<?php
if (rating_check($artcl_id, $type) === true) {
			
	$get_ratings = get_ratings_byid($artcl_id, $type);
			
	if (!empty($get_ratings)) {
				
		foreach ($get_ratings as $get_rating) {
			echo '<p class="summary summary7 right" >You rated ', $get_rating['rating'],'</p>';						
		}		
	}			
}
?>

<div class="clear"></div>