<?php
if (logged_in()) {
?>

<div class="src_div3" id="rt" name="source5" >

    <div class="reset_rt">
    
        <p>Medium:
        <select name="rt_medium" id="rt_medium" >
            <option value="">Select</option>
            <option value="Television">Television</option>
            <option value="Radio">Radio</option>
        </select>
        </p>
        
        <div class="source_added" id="rt_only_added" ><img class="added" src="resources/images/yes.png" alt=""/><span class="green">Source added.</span></div>
        <p><input type="button" name="" class="button2" id="rt_submit" value="Add to the bibliography" />
        <input type="button" class="button3" value="Reset" onclick="clear_form_elements('.reset_rt')" /></p>
    
    </div>

</div>

<?php
}
?>