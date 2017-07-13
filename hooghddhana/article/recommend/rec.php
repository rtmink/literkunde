<?php 
include 'body/rec_body.php';

if ($user_id != $_SESSION['user_id']) {
?>

<div class="recBox" id="recButtonBox">

<div id="show_thanks2">
	<p class="summary"><img class="added" src="resources/images/yes.png" alt=""/><span class="green">Thank you for your review!</span></p>
</div>

<div id="hide_rec">

<?php
	// if true, don't do anything
	if (rec_check($artcl_id) === true) {
			
		$get_allrecs = get_allrecs_id($artcl_id);	

		if (!empty($get_allrecs)) {
			
			foreach ($get_allrecs as $get_allrec) {
				echo '<p class="summary summary7">';
				
				if ($get_allrec['type'] == 'rec') {
					echo 'You recommend this article';	
					
				} else if ($get_allrec['type'] == 'nrec') {
					echo 'You don\'t recommend this article';	
					
				}
				
				echo '</p>';
			}	
		}		
	}
?>	
	<form>     
    <div>
        <button class="rec_button" id="rec_submit" type="button" >Recommended</button>
        <button class="rec_button" id="nrec_submit" type="button">Not recommended</button>
    </div>
    
    <input name="rec" id="rec" type="hidden" value="rec" />
    <input name="nrec" id="nrec" type="hidden" value="nrec" />
    <input name="artcl_id" id="artcl_id" type="hidden" value="<?php echo $artcl['id']; ?>" />
    </form>

</div>

</div>

<?php		
}
?>

<div class="clear"></div>
