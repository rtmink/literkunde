<?php
// WW - average3, AE - average3a

$get_all_n_ratings = get_all_n_ratings($artcl_id, $type);
$get_ratings = get_ratings($artcl_id, $type);

foreach ($get_all_n_ratings as $get_all_n_rating) {

	if ($get_all_n_rating['count'] == 0) {
		
		echo '<input ';
		
		if ($type == 'well_written') {
			echo 'id="average3"';
			
		} else if ($type = 'accurate') {
			echo 'id="average3a"';
			
		}
		
		echo ' type="hidden" value=0 ></input>';
			
		echo '<div class="rating_border"><div ';
		
		if ($type == 'well_written') {
			echo 'id="rating_bar"';
			
		} else if ($type = 'accurate') {
			echo 'id="rating_bar2"';
			
		}
		
		echo '></div></div>';
		
		echo '<p class="summary summary7" >0 / 5';
		
		echo '<span class="right" >';
		
		echo '0 ratings</p>';
		
		echo '</span>';
		
	} else {
		
			foreach ($get_ratings as $get_rating) {
					
			$average = ($get_rating['sum'] / $get_all_n_rating['count']);
			$average2 = round($average, 3);
			
			$average3 = $average2 * 20;
			
			echo '<input ';
			
			if ($type == 'well_written') {
				echo 'id="average3"';
				
			} else if ($type = 'accurate') {
				echo 'id="average3a"';
				
			}
			
			echo ' type="hidden" value=' , $average3, '></input>';
			
			echo '<div class="rating_border"><div ';
			
			if ($type == 'well_written') {
				echo 'id="rating_bar"';
				
			} else if ($type = 'accurate') {
				echo 'id="rating_bar2"';
				
			}
			
			echo '></div></div>';
			
			echo '<p class="summary summary7" >', $average2,' / 5';
			
			echo '<span class="right" >';
			
			if ($get_all_n_rating['count'] == 1) {
				echo $get_all_n_rating['count'],' rating</p>';	
			} else {
				echo $get_all_n_rating['count'],' ratings</p>';	
			}
			
			echo '</span>';
			
			}
		
	}

}

?>