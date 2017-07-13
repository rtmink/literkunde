<?php
if (logged_in()) {
?>

<div class="src_div"> 

    <form>
    
        <div id="reset_website">
        
            <div class="error_msg2" id="web_error_msg"></div>
            
            <p>Title:<br>
            <input type="text" name="web_title" class="input1" id="web_title" maxlength="" size="107" /></p>
            
            <p>Website Title:<br>
            <input type="text" name="web_wtitle" class="input1" id="web_wtitle" maxlength="" size="107" /></p>
            
            <p>URL:<br>
            <input type="text" name="web_url" class="input1" id="web_url" maxlength="web_url" size="107" /></p>
            
            <p>
              <div class="div_left">
              Contributor(s)<br>
              <select name="web_con" id="web_con" >
                  <option value="Author">Author</option>
                  <option value="Editor">Editor</option>
                  <option value="Translator">Translator</option>
              </select>
              </div>
            
              <div class="div_left">
              First name:<br />
              <input type="text" name="web_fname" class="input_fn" id="web_fname" maxlength="" size="31" />
              </div>
            
              <div>
              Last name:<br />
              <input type="text" name="web_lname" class="input_ln" id="web_lname" maxlength="" size="47" />
              </div>
            </p>
            
            <p>Publisher / Sponsor:<br>
            <input type="text" name="web_pub" class="input1" id="web_pub" maxlength="" size="107" /></p>
            
            <p>
            <div class="div_left2">
            Electronically published:<br>
            <input type="text" name="web_epub_day" class="input_d" id="web_epub_day" maxlength="2" size="4" />
            <select name="web_epub_mo" id="web_epub_mo">
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
            <input type="text" name="web_epub_yr" class="input_yr" id="web_epub_yr" maxlength="4" size="10" />
            </div>
            
            <div>
            Date accessed:<br>
            <input type="text" name="web_date_day" class="input_d" id="web_date_day" maxlength="2" size="4" />
            <select name="web_date_mo" id="web_date_mo" >
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
            <input type="text" name="web_date_yr" class="input_yr" id="web_date_yr" maxlength="4" size="10" />
            </div>
            </p>
            
            <div class="source_added" id="web_added" ><img class="added" src="resources/images/yes.png" alt=""/><span class=green>Source added.</span></div>
            <p><input type="button" name="" class="button2" id="web_submit" value="Add to the bibliography" />
            <input type="button" class="button3" value="Reset" onclick="clear_form_elements('#reset_website')" />
            </p>
        
        </div>
    
    </form>

</div>

<?php
}
?>

