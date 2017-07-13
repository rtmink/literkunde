<?php include 'com_extras/com_header.php';?>

<form id="formCom">
	<textarea name="com" id="com" rows="5" cols="110" maxlength="333" ></textarea>

	<button class="com_button" id="pos_com" type="submit" ><img src="resources/images/pos.png" alt=""/> Positive</button>
    <button class="com_button" id="neg_com" type="submit"><img src="resources/images/neg.png" alt=""/> Negative</button>
    
    <div id="disply_count_com"></div>
	
    <input name="pos" id="pos" type="hidden" value="pos" />
    <input name="neg" id="neg" type="hidden" value="neg" />
    <input name="artcl_id" id="artcl_id" type="hidden" value="<?php echo $artcl['id'];?>" />
    
    <div class="clear"></div>
</form>

<div class="clear"></div>

<?php include 'com_extras/com_body.php';?>
