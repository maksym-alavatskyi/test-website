<h1>Registration Form</h1>
<p>
  This form provides on-the-fly validation right from the start.
  It also provides positive feedback on fields that are correctly entered.
</p>

<form action="" id="customer" class="validate" method="post">
<input type="hidden" name="lang" value="en">
<input type="hidden" name="isNew" value="true">
  <fieldset>
    <div class="field">
      <span >Email</span>
      <input type="text" name="email" id="email" class="required email">
    </div>
    <div class="field">
      <span>First name</span>
      <input type="text" name="first_name" id="first_name" class="required" title="First Name is required" >
    </div>
    <div class="field">
      <span>Last name</span>
      <input type="text" name="last_name" id="last_name" class="required" title="Last Name is required">
    </div>
	<div class="field">
      <span>Plan</span>
      <input type="text" name="plan" id="plan" value="Free" readonly>
    </div>
	
    <div class="password">
      <p class="help">
        Password should be atleast 6 characters and contain both lowercase and
        uppcase letters as well as numbers.
      </p>
      <div class="field">
        <span>Password</span>
        <input type="password" name="password" id="password" class="required password min-length_6">
      </div>
      <div class="field">
        <span>Confirm</span>
        <input type="password" name="password_confirmation" id="password_confirmation" class="confirmation-of_password" title="Please enter the exact same password">
      </div>
    </div>
  </fieldset>
  <fieldset>
    <div class="field">
      <span>Country</span>
      <select name="country" id="country" class="required">
        <option value="">- Select -</option>
        <option value="se">Iran</option>
		<option value="no">Israel</option>
		<option value="se">Micronesia</option>
        <option value="se">Narnia</option>	
		
      </select>
    </div>
    <div class="field">
      <span>Street address</span>
      <input type="text" name="street" id="street" class="required">
    </div>
    <div class="validate_any required" title="Please enter one or more phone numbers">
      <div class="field">
        <span>Home phone</span>
        <input type="text" name="home" id="home">
      </div>
      <div class="field">
        <span>Office phone</span>
        <input type="text" name="office" id="office">
      </div>
      <div class="field">
        <span>Cell phone</span>
        <input type="text" name="cell" id="cell">
      </div>
	  
	  
    </div>
	<div class="field">
        <span>Upload resume</span>
        <input type="file" name="cvfile" id="cvfile">
      </div>
  </fieldset>
  <fieldset>
  <div class="field radio">
        <p>Smoking?</p>
		<ul class="inputs">
       <li>
			<input type="radio" name="smoking" value="Regularly" class="required" title="Please choose an option">
			<span>Regularly </span>
		</li>
		<li>
			<input type="radio" name="smoking" value="Sometimes">
			<span>Sometimes </span>
		</li>
		<li>
			<input type="radio" name="smoking" value="No">
			<span>No </span>
		</li>
		</ul>
      </div>
	  
  <div class="field radio">
        <p>Drinking Alcohol? (not required)</p>
		<ul class="inputs">
       <li>
			<input type="radio" name="smoking" value="Regularly" >
			<span>Regularly </span>
		</li>
		<li>
			<input type="radio" name="smoking" value="Sometimes">
			<span>Sometimes </span>
		</li>
		<li>
			<input type="radio" name="smoking" value="No">
			<span>No </span>
		</li>
		</ul>
      </div>
	  </fieldset>
  <fieldset>
    <div class="field checkbox">
      <p>Interests<br>(select three or more)</p>
      <ul class="inputs">
        <li>
          <input type="checkbox" class="g_interests min-length_3" name="int1" id="int1" title="Please pick atleast 3 interests">
          <span>Music</span>
        </li>
        <li>
          <input type="checkbox" class="g_interests" name="int2" id="int2">
          <span>Movies</span>
        </li>
        <li>
          <input type="checkbox" class="g_interests" name="int3" id="int3">
          <span>Sports</span>
        </li>
        <li>
          <input type="checkbox" class="g_interests" name="int4" id="int4">
          <span>Shopping</span>
        </li>
        <li>
          <input type="checkbox" class="g_interests" name="int5" id="int5">
          <span>Hunting</span>
        </li>
        <li>
          <input type="checkbox" class="g_interests" name="int6" id="int6">
          <span>Books</span>
        </li>
        <li>
          <input type="checkbox" class="g_interests" name="int7" id="int7">
          <span>Physics</span>
        </li>
        <li>
          <input type="checkbox" class="g_interests" name="int8" id="int8">
          <span>Comics</span>
        </li>
      </ul>
    </div>
  </fieldset>
  <fieldset>
    <div class="field" id="send_updates">
      <input type="checkbox" name="updates" id="updates" checked="checked">
      <span title="Updates">Please send me updates</span>
    </div>
	<div class="field checkbox" id="update_opt">
	<p>Choose frequency</p>
	<ul class="inputs">
        <li>
          <input type="checkbox" class="g_period min-length_1" name="per1" id="per1" title="Please pick atleast 1 frequency">
          <span>Daily</span>
        </li>
        <li>
          <input type="checkbox" class="g_period" name="per2" id="per2">
          <span>Weekly</span>
        </li>
        <li>
          <input type="checkbox" class="g_period" name="per3" id="per3">
          <span>Monthly</span>
        </li>
        
	</ul>
	</div>
  </fieldset>
  <fieldset>
    <div class="field" id="terms_block">
      <input type="checkbox" name="terms" id="terms" class="required">
      <span title="Terms">I accept the terms</span>
    </div>
  </fieldset>
  <fieldset>
    <div class="button" id="next"><input type="submit" value="Submit" class="action"></div>
    <div class="button" id="reset"><input type="reset" value="Reset all"></div>
  </fieldset>
</form>

<script src="style/js/validatious.0.9.1.min.js" type="text/javascript"></script>

<script type="text/javascript">
  v2.Field.prototype.successClass = 'success';
  v2.Field.prototype.instant = true;
  v2.Field.prototype.displayErrors = 1;
  v2.Field.prototype.positionErrorsAbove = false;
  v2.Fieldset.prototype.positionErrorsAbove = false;

  // Password validator
  v2.Validator.add({
    name: 'password',
    message: 'Please use numbers and lower and uppercase letters',
    fn: function(field, value, params) {
      return /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$/.test(value);
    }
  });
  
  document.getElementById("email").focus();
  
  $("#updates").click(function(){
	 $("#update_opt").toggle(); 
  });
</script>
