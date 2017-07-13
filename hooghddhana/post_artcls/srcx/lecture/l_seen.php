<?php
if (logged_in()) {
?>

<div class="src_div3" id="l_seen" name="source4" >

    <div class="source_added" id="lec_seen_added" ><img class="added" src="resources/images/yes.png" alt=""/><span class="green">Source added.</span></div>
    <p><input type="button" name="" class="button2" id="lec_submit" value="Add to the bibliography" />
    <input type="button" class="button3" value="Reset" onclick="clear_form_elements('.reset_lec')" /></p>

</div>

<?php
}
?>