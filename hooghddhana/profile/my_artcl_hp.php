<script type="text/javascript" src="resources/js/pg/js_pg.js"></script>
<script type="text/javascript">$(document).ready(function(){$('#list_of_artcl').pajinate({num_page_links_to_display : 11, nav_label_info : 'Showing {0}-{1} of {2} articles'});});</script>

<?php

include 'header/artcl_hp_header.php';

if (empty($artcls)) {

echo '<p class="summary summary3" >You haven\'t written any articles. <a href="publish_article">Click here</a> or the book icon on the navigation bar above to start right now.</p>';
  
} else {
	
	include 'body/artcl_hp_body.php';
	
}

?>