<?php
include '../hooghddhana/has_ie_ratu/hasieratu2.php';

if (logged_in()) {
	if (isset ($_POST['artcl_id'], $_POST['artcl_title'], $_POST['artcl_type'], $_POST['artcl_topic'], $_POST['artcl_body'], $_POST['artcl_source'])) {
		$artcl_id = $_POST['artcl_id'];
	  	$artcl_title = $_POST['artcl_title'];
	  	$artcl_type = $_POST['artcl_type'];
	  	$artcl_topic = $_POST['artcl_topic'];
	  	$artcl_body = $_POST['artcl_body'];
	  	$artcl_source = $_POST['artcl_source'];
	  
	  	edit_artcl($artcl_id, $artcl_title, $artcl_type, $artcl_topic, $artcl_body, $artcl_source);
	}
}
?>