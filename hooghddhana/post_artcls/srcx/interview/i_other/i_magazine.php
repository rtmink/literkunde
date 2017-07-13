<?php
if (logged_in()) {
?>

<div class="src_div4" id="i_magazine" name="source3" >

    <div class="reset_i_view">
    
        <p>Magazine Title:<br>
        <input type="text" name="iview_mag_title" class="input1" id="iview_mag_title" maxlength="" size="107" /></p>
        
        <p>Date published:<br>
        <input type="text" name="iview_mag_date_day" class="input_d" id="iview_mag_date_day" maxlength="2" size="4" />
        <select name="iview_mag_date_mo" id="iview_mag_date_mo" >
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
        <input type="text" name="iview_mag_date_yr" class="input_yr" id="iview_mag_date_yr" maxlength="4" size="10" />
        </p>
        
        <p>Page(s):<br>
        <input type="text" name="iview_mag_pgs" class="input_yr" id="iview_mag_pgs" maxlength="" size="10" /></p>
        
        <div class="source_added" id="iview_mag_added" ><img class="added" src="resources/images/yes.png" alt=""/><span class="green">Source added.</span></div>
        <p><input type="button" name="" class="button2" id="iview_submit3" value="Add to the bibliography" />
        <input type="button" class="button3" value="Reset" onclick="clear_form_elements('.reset_i_view')" /></p>
    
    </div>

</div>

<?php
}
?>