<script type="text/javascript" src="resources/js/rating/js_load_rating.js" ></script>
<script type="text/javascript" src="resources/js/rating/js_show_rating.js" ></script>

<?php
if ($user_id != $_SESSION['user_id']) {	
?>
<div id="hide_rating">
	<div class="ratingBox">
    
    	<?php include 'header/rating_header.php';?>
        <div class="left" id="show_ratings"></div>
        
        <?php	
		$type = 'well_written';
		
		include 'extra/rating_extra.php';
		?>	
        	
			<input type="hidden" name="rating" id="rating" value="" />
            <input type="hidden" name="type" id="type" value="well_written" />
            
		<?php include 'body/ww.php';?>
          
    </div>
    
    <div class="ratingBox" >
    
    	<?php include 'header/rating_header2.php';?>
        <div class="left" id="show_ratings2"></div>
    
        <?php	
		$type = 'accurate';
		
		include 'extra/rating_extra.php';
		?>
			
        	<input type="hidden" name="rating2" id="rating2" value="" />
			<input type="hidden" name="type2" id="type2" value="accurate" />
        
        <?php include 'body/ae.php';?>
        
    </div>
    
    <input type="button" class="rating_s_button left" id="rating_submit" value="Submit Ratings" />
    
</div>
    
<div id="show_thanks3">
	<p class="summary summary7"><img class="added" src="resources/images/yes.png" alt=""/><span class="green">Submitted.</span></p>
</div>
    
<div class="clear"></div>
  
<?php   	
}
?>