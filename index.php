<?php
include 'hooghddhana/has_ie_ratu/hasieratu.php';

$page_title = 'Literkunde &bull; The Free Web-Based Library';

include 'hooghddhana/template/header.php';
?>

<h4 class="pg_heading2">The <span class="red">Free</span> web-based library.</h4>

<h4 class="pg_heading2">Publishing articles has never been easier!</h4>
<span class="left"><img src="resources/images/IMG_6625a.jpg" /></span>
<!-------
<?php
if (!logged_in()) {
?>
<div class="hp_suli">
<a href="login"><input type="button" class="button button4" value="Log In" /></a>
<a href="register"><input type="button" class="button button4" value="Sign Up for Free" /></a>
</div>
<?php
} else {
?>
<div class="hp_suli">
<a href="publish_article"><input type="button" class="button" value="Start Publishing" /></a>
</div>
<?php
}
?>
-->
<div class="clear"></div>
</div>

<div class="main2">

<h4 class="pg_heading" >Latest Articles</h4>

<?php

$per_page = 5;

$pages = sort_artcl_by_pg($per_page);

if (isset($_GET['page']) && !empty($_GET['page'])) {
	$what_page = (int)mysql_real_escape_string($_GET['page']);	
}

$page = (isset($what_page) && !empty($what_page)) ? (int)$what_page : 1;
$start = ($page - 1) * $per_page;

$artcls = get_artcls($start, $per_page);

if (empty($artcls)) {

echo '<p class="summary summary3" >There are no articles</p>';
  
} else {

	foreach ($artcls as $artcl) {
		$topic_link = str_replace(" ","_",$artcl['topic']);
		
		$user_id = $artcl['user_id'];
		$artcl_id = $artcl['id'];
	
		$users = get_users($user_id);
	
		echo '<h5><a href="article.php?id=', $artcl['id'], '">', $artcl['title'], '</a></h5>';
		
		foreach ($users as $user) {
		echo '<p class="summary summary3" >by <a href="profile.php?id=', $user_id, '">', $user['first_name'], ' ', $user['last_name'], '</a></p>';
	
		}
	 
	   if ($artcl['ts_updated'] == $artcl['ts_created']) {
			echo '<p class="summary summary3" >Published ', date('d F Y', $artcl['ts_created']), '</p>';
		} else {
			echo '<p class="summary summary3" >Published ', date('d F Y', $artcl['ts_created']), ' | Updated ', date('d F Y', $artcl['ts_updated']), '</p>';	
		}
		echo '<p class="summary summary3" >Type: <a href="', strtolower($artcl['type']), '">', $artcl['type'], '</a> | Topic: <a href="topic/', strtolower($topic_link), '">', $artcl['topic'], '</a></p>';
		
		include 'hooghddhana/article/review_info/review_info.php';
		
		echo '<br />';
		
	}
}

include 'hooghddhana/pgs/pg_nav_all.php';

echo '<br />';
?>

</div>

<div class="main2">

<h4 class="pg_heading">Browse Topics</h4>

<div class="topic_box">
<p><a href="topic/autos_&_vehicles">Autos & Vehicles</a></p>
<p><a href="topic/beauty_&_fashion">Beauty & Fashion</a></p>
<p><a href="topic/business_&_finance">Business & Finance</a></p>
<p><a href="topic/comedy">Comedy</a></p>
<p><a href="topic/culture_&_the_arts">Culture & the Arts</a></p>
<p><a href="topic/environment">Environment</a></p>
<p><a href="topic/food_&_drink">Food & Drink</a></p>
</div>

<div class="topic_box">
<p><a href="topic/gaming">Gaming</a></p>
<p><a href="topic/geography_&_places">Geography & Places</a></p>
<p><a href="topic/health_&_fitness">Health & Fitness</a></p>
<p><a href="topic/history_&_events">History & Events</a></p>
<p><a href="topic/hobbies">Hobbies</a></p>
<p><a href="topic/home_&_garden">Home & Garden</a></p>
<p><a href="topic/jobs_&_careers">Jobs & Careers</a></p>
</div>

<div class="topic_box">
<p><a href="topic/language_&_literature">Language & Literature</a></p>
<p><a href="topic/legal_&_government">Legal & Government</a></p>
<p><a href="topic/mathematics_&_logic">Mathematics & Logic</a></p>
<p><a href="topic/movies_&_entertainment">Movies & Entertainment</a></p>
<p><a href="topic/music">Music</a></p>
<p><a href="topic/natural_&_physical_sciences">Natural & Physical Sciences</a></p>
</div>

<div class="topic_box">
<p><a href="topic/nonprofits_&_activism">Nonprofits & Activism</a></p>
<p><a href="topic/people_&_self">People & Self</a></p>
<p><a href="topic/pets_&_animals">Pets & Animals</a></p>
<p><a href="topic/philosophy_&_thinking">Philosophy & Thinking</a></p>
<p><a href="topic/politics">Politics</a></p>
<p><a href="topic/psychology">Psychology</a></p>
</div>

<div class="topic_box topic_box_last">
<p><a href="topic/relationships_&_family">Relationships & Family</a></p>
<p><a href="topic/religion_&_belief_systems">Religion & Belief Systems</a></p>
<p><a href="topic/society_&_social_sciences">Society & Social Sciences</a></p>
<p><a href="topic/sports_&_outdoors">Sports & Outdoors</a></p>
<p><a href="topic/technology_&_applied_sciences">Technology & Applied Sciences</a></p>
<p><a href="topic/travel_&_lifestyle">Travel & Lifestyle</a></p>
</div>

<div class="clear_comment"></div>

<?php
include 'hooghddhana/template/footer.php';
?>

