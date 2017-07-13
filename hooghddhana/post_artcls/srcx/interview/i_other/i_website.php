<?php
if (logged_in()) {
?>

<div class="src_div3" id="i_website" name="source3" >

    <div class="reset_i_view">
    
        <p>Website Title:<br>
        <input type="text" name="iview_web_title" class="input1" id="iview_web_title" maxlength="" size="107" /></p>
        
        <p>Publisher / sponsor:<br>
        <input type="text" name="iview_web_pub" class="input1" id="iview_web_pub" maxlength="" size="107" /></p>
        
        <p>URL:<br>
        <input type="text" name="iview_web_url" class="input1" id="iview_web_url" maxlength="" size="107" /></p>
        
        <p>
        <div class="div_left2">
        Electronically published:<br>
        <input type="text" name="iview_web_epub_day" class="input_d" id="iview_web_epub_day" maxlength="2" size="4" />
        <select name="iview_web_epub_mo" id="iview_web_epub_mo">
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
        <input type="text" name="iview_web_epub_yr" class="input_yr" id="iview_web_epub_yr" maxlength="4" size="10" />
        </div>
        
        <div>
        Date accessed:<br>
        <input type="text" name="iview_web_date_day" class="input_d" id="iview_web_date_day" maxlength="2" size="4" />
        <select name="iview_web_date_mo" id="iview_web_date_mo" >
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
        <input type="text" name="iview_web_date_yr" class="input_yr" id="iview_web_date_yr" maxlength="4" size="10" />
        </div>
        </p>
        
        <div class="source_added" id="iview_web_added" ><img class="added" src="resources/images/yes.png" alt=""/><span class="green">Source added.</span></div>
        <p><input type="button" name="" class="button2" id="iview_submit2" value="Add to the bibliography" />
        <input type="button" class="button3" value="Reset" onclick="clear_form_elements('.reset_i_view')" /></p>
    
    </div>

</div>

<?php
}
?>