<?php
if (logged_in()) {
?>

<div class="src_div3" id="i_you" name="source2" >

    <div class="reset_i_view">
    
        <p>Date:<br>
        <input type="text" name="iview_date_day" class="input_d" id="iview_date_day" maxlength="2" size="4" />
        <select name="iview_date_mo" id="iview_date_mo">
            <option value="">Select</option>
            <option value="January">January</option>
            <option value="February">February</option>
            <option value="March">March</option>
            <option value="April">April</option>    
            <option value="May">May</option>
            <option value="June">June</option>
            <option value="July">July</option>
            <option value="August">August</option>
            <option value="September">September</option>
            <option value="October">October</option>    
            <option value="November">November</option>
            <option value="December">December</option>
        </select>
        <input type="text" name="iview_date_yr" class="input_yr" id="iview_date_yr" maxlength="4" size="10" />
        </p>
        
        <p>Medium<br>
        <select name="iview_medium" id="iview_medium">
            <option value="">Select</option>
            <option value="Phone">By phone</option>
            <option value="Email">E-mail</option>
            <option value="Online">Web</option>        
            <option value="Personal">In person</option>
        </select></p>
        
        <div class="source_added" id="iview_added" ><img class="added" src="resources/images/yes.png" alt=""/><span class="green">Source added.</span></div>
        <p><input type="button" name="" class="button2" id="iview_submit1" value="Add to the bibliography" />
        <input type="button" class="button3" value="Reset" onclick="clear_form_elements('.reset_i_view')" /></p>
    
    </div>

</div>

<?php
}
?>