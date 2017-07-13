<?php
if (logged_in()) {
?>

<div class="src_div4" id="rt_online" name="source5" >

    <div class="reset_rt">
    
        <p>Site / Program title:<br>
        <input type="text" name="rt_ol_title" class="input1" id="rt_ol_title" maxlength="" size="107" /></p>
        
        <p>Publisher / sponsor:<br>
        <input type="text" name="rt_ol_pub" class="input1" id="rt_ol_pub" maxlength="" size="107" /></p>
        
        <p>URL:<br>
        <input type="text" name="rt_ol_url" class="input1" id="rt_ol_url" maxlength="" size="107" /></p>
        
        <p>
        <div class="div_left2">
        Electronically published:<br>
        <input type="text" name="rt_ol_epub_day" class="input_d" id="rt_ol_epub_day" maxlength="2" size="4" />
        <select name="rt_ol_epub_mo" id="rt_ol_epub_mo" >
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
        <input type="text" name="rt_ol_epub_yr" class="input_yr" id="rt_ol_epub_yr" maxlength="4" size="10" />
        </div>
        
        <div>
        Date accessed:<br>
        <input type="text" name="rt_ol_date_day" class="input_d" id="rt_ol_date_day" maxlength="2" size="4" />
        <select name="rt_ol_date_mo" id="rt_ol_date_mo" >
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
        <input type="text" name="rt_ol_date_yr" class="input_yr" id="rt_ol_date_yr" maxlength="4" size="10" />
        </div>
        </p>
        
        <div class="source_added" id="rt_web_added" ><img class="added" src="resources/images/yes.png" alt=""/><span class="green">Source added.</span></div>
        <p><input type="button" name="" class="button2" id="rt_submit2" value="Add to the bibliography" />
        <input type="button" class="button3" value="Reset" onclick="clear_form_elements('.reset_rt')" /></p>
    
    </div>

</div>

<?php
}
?>