<?php
include 'hooghddhana/has_ie_ratu/hasieratu.php';

$page_title = 'Search &bull; Literkunde';

include 'hooghddhana/template/header3.php';
?>

<script type="text/javascript" src="resources/js/pg/js_pg.js"></script>

<script type="text/javascript">
$(document).ready(function(){
				$('#pg_search').pajinate({
					items_per_page : 11,
					num_page_links_to_display : 11,
					nav_label_info : 'Showing {0}-{1} of {2} results'
				});
		}); 
</script>

<?php
if (isset($_POST['any'], $_POST['all'], $_POST['none'], $_POST['search_type'], $_POST['search_topic'])) {
	
	$any = $_POST['any'];
	$all = $_POST['all'];
	$none = $_POST['none'];
	$type = $_POST['search_type'];
	$topic = $_POST['search_topic'];

	if((!$all) || ($all == "")) { 
	
		$all = ""; 
		
	} else { 
	
		$all = "+(".$all.")"; 
			
	}

   	if((!$any) || ($any == "")) { 
	
		$any = ""; 
		
	} 

   	if((!$none) || ($none == "")) { 
	
		$none = ""; 
		
	} else { 
	
	$none = "-(".$none.")"; 
	
	}
	
	if((!$type) || ($type == "")) { 
	
		$type = ""; 
		
	}
	
	if((!$topic) || ($topic == "")) { 
	
		$topic = ""; 
		
	}
	
	// get searches
	$artcls = search_for($any, $all, $none, $type, $topic);
		
	if(!empty($artcls)) {
		
		$artcl_ns = get_n_searches($any, $all, $none, $type, $topic);
		
		foreach ($artcl_ns as $artcl_n) {
			
			if ($artcl_n['count'] == 1) {
				echo '<p class="summary summary3">', $artcl_n['count'],' result</p><br />';
			} else {
				echo '<p class="summary summary3">', $artcl_n['count'],' results</p><br />';		
			} 
		  
		}
		
		echo '<div id="pg_search" class="container">';
        
        echo '<ul class="content">';
        
		foreach ($artcls as $artcl) {

            //$val = round($artcl['score'], 3);
			
			//$val = $artcl['score'];

            //$val = $val*100;
			
			$topic_link = str_replace(" ","_",$artcl['topic']);

			$user_id = $artcl['user_id'];
			$artcl_id = $artcl['id'];
	
			$users = get_users($user_id);
		
			echo '<li><h5><a href="article.php?id=', $artcl['id'], '">', $artcl['title'], '</a></h5>';
			
			//echo '<p>Score: ', $val, '</p>';
			
			foreach ($users as $user) {
			echo '<p class="summary summary3" >by <a href="profile.php?id=', $user_id, '">', $user['first_name'], ' ', $user['last_name'], '</a></p>';
		
			}
		 
		   	if ($artcl['ts_updated'] == $artcl['ts_created']) {
				echo '<p class="summary summary3" >Published ', date('d F Y', $artcl['ts_created']), '</p>';
			} else {
				echo '<p class="summary summary3" >Published ', date('d F Y', $artcl['ts_created']), ' | Updated ', date('d F Y', $artcl['ts_updated']), '</p>';	
			}
			echo '<p class="summary summary3" >Type: <a href="', strtolower($artcl['type']), '.php">', $artcl['type'], '</a> | Topic: <a href="topic/', strtolower($topic_link), '">', $artcl['topic'], '</a></p>';
			
			include 'hooghddhana/article/review_info/review_info.php';
		
			echo '<br /></li>';
	
			}
        
		echo '</ul>';
            
        echo '<div class="pg_navigation"></div>';
		echo '<div class="info_text"></div>';
            
        echo '</div>';
		
	} else { 

		echo '<p class="summary summary3" >No results were found.</p><br />'; 

	}
   
   echo '<p class="summary summary3"><a href="search">Go to advanced search!</a></p>';
   
   } else {
	
?>

<form action="" method="post">

<h4 class="pg_heading" >Advanced Search</h4>

<p class="grey">Find Results with...</p>

<p><div class="equal2">Any of these words:</div><div class="equal5"><input type="text" length=40 size="79" name="any" id="any" ></div><div class="equal3"><span class="grey">At least one of the words will be present in the result(s).</span></div></p>

<div class="clear_comment"></div>

<p><div class="equal2">All of these words:</div><div class="equal5"><input type="text" length=40 size="79" name="all" id="all" ></div><div class="equal3"><span class="grey">These words will be present in the result(s).</span></div></p>

<div class="clear_comment"></div>

<p><div class="equal2">None of these words:</div><div class="equal5"><input type="text" length=40 size="79" name="none" id="none" ></div><div class="equal3"><span class="grey">These words will <span class="red">not</span> be present in the result(s).</span></div></p>

<div class="clear_comment"></div>

<br /><br />

<p class="grey">Narrow Results by...</p>

<p><div class="equal2">Type of article:</div><div class="equal5">
	<select name="search_type" id="search_type" class="search_typ" >
    	<option value="">Select Type of Article</option>
		<option value="Encyclopedia">Encyclopedia</option>
    	<option value="News">News</option>
		<option value="Tutorial">Tutorial</option>
    	<option value="How-to">How-to</option>
     	<option value="Journal">Journal</option>
      	<option value="Essay">Essay</option>
      	<option value="Paper">Paper</option>
        <option value="Other">Other</option>
	</select></div><div class="equal3"><span class="grey">Find articles with the selected type.</span></div>
</p>

<div class="clear_comment"></div>

<p><div class="equal2">Topic:</div><div class="equal5">
	<select name="search_topic" id="search_topic" class="search_top" >
    	<option value="">Select Topic</option>
      	<option value="Autos & Vehicles">Autos & Vehicles</option>
      	<option value="Beauty & Fashion">Beauty & Fashion</option>
      	<option value="Business & Finance">Business & Finance</option>
      	<option value="Comedy">Comedy</option>
	  	<option value="Culture & the Arts">Culture & the Arts</option>
      	<option value="Environment">Environment</option>
      	<option value="Food & Drink">Food & Drink</option>
      	<option value="Gaming">Gaming</option>
	  	<option value="Geography & Places">Geography & Places</option>
	  	<option value="Health & Fitness">Health & Fitness</option>
	  	<option value="History & Events">History & Events</option>
      	<option value="Hobbies">Hobbies</option>
      	<option value="Home & Garden">Home & Garden</option>
      	<option value="Jobs & Careers">Jobs & Careers</option>
      	<option value="Language & Literature">Language & Literature</option>
      	<option value="Legal & Government">Legal & Government</option>
	  	<option value="Mathematics & Logic">Mathematics & Logic</option>
      	<option value="Movies & Entertainment">Movies & Entertainment</option>
      	<option value="Music">Music</option>
	  	<option value="Natural & Physical Sciences">Natural & Physical Sciences</option>
      	<option value="Nonprofits & Activism">Nonprofits & Activism</option>
      	<option value="People & Self">People & Self</option>
      	<option value="Pets & Animals">Pets & Animals</option>
	  	<option value="Philosophy & Thinking">Philosophy & Thinking</option>
      	<option value="Politics">Politics</option>
      	<option value="Psychology">Psychology</option>
      	<option value="Relationships & Family">Relationships & Family</option>
	  	<option value="Religion & Belief Systems">Religion & Belief Systems</option>
	  	<option value="Society & Social Sciences">Society & Social Sciences</option>
      	<option value="Sports & Outdoors">Sports & Outdoors</option>
	  	<option value="Technology & Applied Sciences">Technology & Applied Sciences</option>
      	<option value="Travel & Lifestyle">Travel & Lifestyle</option>
	</select></div><div class="equal3"><span class="grey">Find articles with the selected topic.</span></div>
</p>

<div class="clear_comment"></div>

<br />

<input class="button" type="submit" value="Advanced Search">

</form> 

<?php

		
}


include 'hooghddhana/template/footer.php';

?>