<?php
include '../hooghddhana/has_ie_ratu/hasieratu2.php';

if (logged_in()) {

if (isset ($_POST['artcl_id'], $_POST['type'], $_POST['rating'], $_POST['type2'], $_POST['rating2'])) {
	$artcl_id = $_POST['artcl_id'];
  	$type = $_POST['type'];
  	$rating = $_POST['rating'];
  	$type2 = $_POST['type2'];
  	$rating2 = $_POST['rating2'];
	
	// Well-Written  
	if (!empty($rating)) {
		if (rating_check($artcl_id, $type) === false) {
			post_rating($artcl_id, $type, $rating); 
			 
		} else {
			edit_rating($artcl_id, $type, $rating);
			
		}
	}
  	// Accurate
	if (!empty($rating2)) {
		if (rating_check($artcl_id, $type2) === false) {
			post_rating($artcl_id, $type2, $rating2);
			 
		} else {
			edit_rating($artcl_id, $type2, $rating2); 
			
		}
	}
}
}
?>