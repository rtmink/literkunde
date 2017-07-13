<?php
if (logged_in()) {
?>

<div class="src_div">

    <form>
    
        <div id="reset_mag">
        
            <div class="error_msg2" id="mag_error_msg"></div>
            
            <p>Article Title:<br>
            <input type="text" name="mag_atitle" class="input1" id="mag_atitle" maxlength="" size="107" /></p>
            
            <p>Magazine Title:<br>
            <input type="text" name="mag_title" class="input1" id="mag_title" maxlength="" size="107" /></p>
            
            <p>
              <div class="div_left">
              Contributor(s)<br>
              <select name="mag_con" id="mag_con" >
                  <option value="Author">Author</option>
                  <option value="Editor">Editor</option>
                  <option value="Compiler">Compiler</option>
                  <option value="Translator">Translator</option>
              </select>
              </div>
            
              <div class="div_left">
              First name:<br />
              <input type="text" name="mag_fname" class="input_fn" id="mag_fname" maxlength="" size="31" />
              </div>
            
              <div>
              Last name:<br />
              <input type="text" name="mag_lname" class="input_ln" id="mag_lname" maxlength="" size="47" />
              </div>
            </p>
            
            <p>
            <div class="div_left2">
            Date published:<br>
            <input type="text" name="mag_dpub_day"  class="input_d"id="mag_dpub_day" maxlength="2" size="4" />
            <select name="mag_dpub_mo" id="mag_dpub_mo" >
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
            <input type="text" name="mag_dpub_yr" class="input_yr" id="mag_dpub_yr" maxlength="4" size="10" />
            </div>
            
            <div>
            Date accessed:<br>
            <input type="text" name="mag_date_day" class="input_d" id="mag_date_day" maxlength="2" size="4" />
            <select name="mag_date_mo" id="mag_date_mo" >
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
            <input type="text" name="mag_date_yr" class="input_yr" id="mag_date_yr" maxlength="4" size="10" />
            </div>
            </p>
            
            <p>Page(s):<br>
            <input type="text" name="mag_pgs" class="input_yr" id="mag_pgs" maxlength="" size="10" /></p>
            
            <p>URL:<br>
            <input type="text" name="mag_url" class="input1" id="mag_url" maxlength="" size="107" /></p>
            
            <div class="source_added" id="mag_added" ><img class="added" src="resources/images/yes.png" alt=""/><span class=green>Source added.</span></div>
            <p><input type="button" name="" class="button2" id="mag_submit" value="Add to the bibliography" />
            <input type="button" class="button3" value="Reset" onclick="clear_form_elements('#reset_mag')" /></p>
        
        </div>
    
    </form>

</div>

<?php
}
?>