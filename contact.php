<?php /* contact.php */
$page_title = "Contact Us";
$page_canonical = "contact";
$extra_meta = "<meta name='robots' content='index,nofollow' />
";
include('header.php'); ?>
	<section>
		<fieldset class="item-box">
			<legend class="item-title">Contact</legend>
				<form action="contact-process.php" method="post" name="contact">
					<div class="row">
						<h3 class="hightlight">Contact the Sisters of Mary Immaculate</h3>
						Please use this form to contact the Sisters of Mary Immaculate with order requests or questions.
						<span class="required">*All fields are required*</span>
					</div>
					<div class="row">
						<label for="first_name">First Name:</label>
						<input name="first_name" type="text" id="first_name" maxlength="20" size="53" />
					</div>
					<div class="row">
						<label for="last_name">Last Name:</label>
						<input name="last_name" type="text" id="last_name" maxlength="20" size="53" />
					</div>
					<div class="row">
						<label for="email">Email:</label>
						<input name="email" type="text" id="email" maxlength="50" size="53" />
					</div>
					<div class="row">
						<label for="phone">Phone:</label>
						<input name="phone" type="text" id="phone" maxlength="12" size="53" />
					</div>
					<div class="row">
						<label for="address">Address:</label>
						<input name="address" type="text" id="address" maxlength="50" size="53" />
					</div>
					<div class="row">
						<label for="city">City:</label>
						<input name="city" type="text" id="city" maxlength="20" size="53" />
					</div>
					<div class="row">
						<label for="state">State:</label>
						<input name="state" type="text" id="state" maxlength="2" size="18" />
					</div>
					<div class="row">
						<label for="zip">Zip Code:</label>
						<input name="zip" type="text" id="zip" maxlength="5" size="18" />
					</div>
					<div class="row">
						<label for="comment">Order(s) or Question(s):</label>
						<textarea name="comment" cols="40" rows="5" id="comment"></textarea>
					</div>
					<div class="row-button">
						<input type="submit" class="button" name="submit" value="Submit" /> 
						<input type="reset" class="button" name="reset" value="Reset" />
					</div>
				</form>
		</fieldset>
	</section>
<?php include('footer.php'); ?>