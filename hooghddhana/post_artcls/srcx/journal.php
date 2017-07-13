<?php
if (logged_in()) {
?>

<div class="src_div">

    <form>
    
        <div id="reset_journal">
        
            <div class="error_msg2" id="journal_error_msg"></div>
            
            <p>Article Title:<br>
            <input type="text" name="journal_atitle" class="input1" id="journal_atitle" maxlength="" size="107" /></p>
            
            <p>Journal Title:<br>
            <input type="text" name="journal_title" class="input1" id="journal_title" maxlength="" size="107" /></p>
            
            <p>
              <div class="div_left">
              Contributor(s)<br>
              <select name="journal_con" id="journal_con" >
                  <option value="Author">Author</option>
                  <option value="Editor">Editor</option>
                  <option value="Translator">Translator</option>
              </select>
              </div>
            
              <div class="div_left">
              First name:<br />
              <input type="text" name="journal_fname" class="input_fn" id="journal_fname" maxlength="" size="31" />
              </div>
            
              <div>
              Last name:<br />
              <input type="text" name="journal_lname" class="input_ln" id="journal_lname" maxlength="" size="47" />
              </div>
            </p>
            
            <p>
            <div class="div_left">
            Volume:<br>
            <input type="text" name="journal_vol" class="input_yr" id="journal_vol" maxlength="" size="10" />
            </div>
            
            <div class="div_left">
            Issue:<br>
            <input type="text" name="journal_iss" class="input_yr" id="journal_iss" maxlength="" size="10" />
            </div>
            
            <div>
            Series:<br>
            <input type="text" name="journal_se" class="input_yr" id="journal_se" maxlength="" size="10" />
            </div>
            </p>
            
            <p>Year published:<br>
            <input type="text" name="journal_yr" class="input_yr" id="journal_yr" maxlength="4" size="18" /></p>
            
            <p>Page(s):<br>
            <input type="text" name="journal_pgs" class="input_yr" id="journal_pgs" maxlength="" size="10" /></p>
            
            <p>URL:<br>
            <input type="text" name="journal_url" class="input1" id="journal_url" maxlength="" size="107" /></p>
            
            <div class="source_added" id="journal_added" ><img class="added" src="resources/images/yes.png" alt=""/><span class=green>Source added.</span></div>
            <p><input type="button" name="" class="button2" id="journal_submit" value="Add to the bibliography" />
            <input type="button" class="button3" value="Reset" onclick="clear_form_elements('#reset_journal')" /></p>
        
        </div>
    
    </form>

</div>

<?php
}
?>
