<?php
include '../hooghddhana/has_ie_ratu/hasieratu2.php';

if (logged_in()) {

if (isset ($_POST['artcl_id'], $_POST['type'])) {
	$artcl_id = $_POST['artcl_id'];
  	$type = $_POST['type'];
  
	if (rec_check($artcl_id) === false) {
  		post_rec($artcl_id, $type);
  	} else {
  		edit_rec($artcl_id, $type);
	}
}
}
?>