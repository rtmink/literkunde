<script type="text/javascript" src="resources/js/pg/js_pg.js"></script>
<script type="text/javascript">$(document).ready(function(){$('#list_of_artcl').pajinate({num_page_links_to_display : 11, nav_label_info : 'Showing {0}-{1} of {2} articles'});});</script>

<?php

include 'header/artcl_hp_header.php';

if (empty($artcls)) {

echo '<p class="summary summary3" >', $user['first_name'], ' ', $user['last_name'], ' hasn\'t written any articles.</p>';
  
} else {	

	include 'body/artcl_hp_body.php';
 
}

?>