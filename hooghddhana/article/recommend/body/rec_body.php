<?php

echo '<div class="recBox">';

$get_all_n_recs = get_all_n_recs($artcl_id);
$get_recs = get_recs($artcl_id, 'rec');

foreach ($get_all_n_recs as $get_all_n_rec) {
		
	if (empty($get_recs)) {
		
		echo '<p class="summary summary7">0% recommend this article</p>';
			
		echo '<input type="hidden" name="rec_val" id="rec_val" value=0 />';
		
	} else {
		
		foreach ($get_recs as $get_rec) {
		
		$percentage = ($get_rec['count'] / $get_all_n_rec['count']) * 100;
		$percentage = round($percentage, 3);
			
		echo '<input type="hidden" name="rec_val" id="rec_val" value="', $percentage,'" />';
			
		echo '<p class="summary summary7">', $percentage,'% recommend this article</p>';
		
		}
		
	}

}

// Recommended bar

echo '<div class="rec_border"><div id="rec_bar"></div></div>';

// Pos
$get_recs = get_recs($artcl_id, 'rec');

if (empty($get_recs)) {
	
	echo '<p class="summary summary7" >0';
	
} else {
	
	foreach ($get_recs as $get_rec) {
	
	echo '<p class="summary summary7" >', $get_rec['count'];
	
	}
	
}

// Neg
$get_nrecs = get_recs($artcl_id, 'nrec');

echo '<span class="right">';

if (empty($get_nrecs)) {
	
	echo '0</p>';
	
	echo '<input type="hidden" name="rec_val_neg" id="rec_val_neg" value=0 />';
	
} else {

	foreach ($get_nrecs as $get_nrec) {
		
		echo $get_nrec['count'],'</p>';
		
		// counting neg rec
		
		foreach ($get_all_n_recs as $get_all_n_rec) {
		
			$percentage_neg = ($get_nrec['count'] / $get_all_n_rec['count']) * 100;
			$percentage_neg = round($percentage_neg, 3);
			
			echo '<input type="hidden" name="rec_val_neg" id="rec_val_neg" value="', $percentage_neg,'" />';
		
		}
		// end here/ neg rec
		
	}
	
}

echo '</span>';

echo '</div>';

?>