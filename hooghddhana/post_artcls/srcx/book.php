<?php
if (logged_in()) {
?>

<div class="src_div">

    <form>
    
        <div id="reset_book">
        
            <div class="error_msg2" id="book_error_msg"></div>
            
            <p>Book Title:<br>
            <input type="text" name="book_title" class="input1" id="book_title" maxlength="" size="107" /></p>
            
            <p>
              <div class="div_left">
              Contributor(s)<br>
              <select name="book_con" id="book_con" >
                  <option value="Author">Author</option>
                  <option value="Editor">Editor</option>
                  <option value="Translator">Translator</option>
              </select>
              </div>
            
              <div class="div_left">
              First name:<br />
              <input type="text" name="book_fname" class="input_fn" id="book_fname" maxlength="" size="31" />
              </div>
            
              <div>
              Last name:<br />
              <input type="text" name="book_lname" class="input_ln" id="book_lname" maxlength="" size="47" />
              </div>
            </p>
            
            <p>
            <div class="div_left">
            Publisher:<br>
            <input type="text" name="book_pub" class="input_fn" id="book_pub" maxlength="" size="43" />
            </div>
            
            <div class="div_left">
            City:<br>
            <input type="text" name="book_city" class="input_fn" id="book_city" maxlength="" size="25" />
            </div>
            
            <div>
            Year:<br />
            <input type="text" name="book_yr" class="input_yr" id="book_yr" maxlength="4" size="10" />
            </div>
            </p>
            
            <p>
            <div class="div_left">
            Edition:<br>
            <input type="text" name="book_ed" class="input_yr" id="book_ed" maxlength="" size="10" />
            </div>
            
            <div class="div_left">
            Vol.:<br>
            <input type="text" name="book_vol" class="input_yr" id="book_vol" maxlength="" size="10" />
            </div>
            
            <div>
            Series:<br>
            <input type="text" name="book_se" class="input_yr" id="book_se" maxlength="" size="10" />
            </div>
            </p>
            
            <p>URL:<br>
            <input type="text" name="book_url" class="input1" id="book_url" maxlength="" size="107" /></p>
            
            <div class="source_added" id="book_added"><img class="added" src="resources/images/yes.png" alt=""/><span class=green>Source added.</span></div>
            <p><input type="button" name="" class="button2" id="book_submit" value="Add to the bibliography" />
            <input type="button" class="button3" value="Reset" onclick="clear_form_elements('#reset_book')" /></p>
        
        </div>
    
    </form>

</div>

<?php
}
?>