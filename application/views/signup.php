
			<div id="right_contant">
					<h2 align="center">Login</h2>
				<hr>
		<div id="tbl">
			<form action="" method="post">
				<?php
				//echo validation_errors();
				?>
				<table align="center" cellspacing="8" cellpadding="5">
						<tr>
							<td>Full Name</td>
							<td><input type="text" placeholder="Full Name" value="<?php echo set_value('fullname') ?>" name="fullname"></td>
						</tr>
						<tr class="error">
							<td></td>
							<td><?php echo form_error('fullname'); ?></td>
						</tr>
						<tr>
							<td>Username</td>
							<td><input  placeholder="E-mail" value="<?php echo set_value('email') ?>" type="text" name="email" ></td>
						</tr>
						<tr class="error">
							<td></td>
							<td><?php echo form_error('email'); ?></td>
						</tr>
						<tr>
							<td>Password</td>
							<td><input  placeholder="Password" type="password" name="pass" ></td>
						</tr>
						<tr class="error">
							<td></td>
							<td><?php echo form_error('pass'); ?></td>
						</tr>
						<tr>
							<td>Re-password</td>
							<td><input  placeholder="Re-Password" type="password" name="re_pass" ></td>
						</tr>
						<tr class="error">
							<td></td>
							<td><?php echo form_error('re_pass'); ?></td>
						</tr>
						<tr>
							<td>City</td>
							<td>
								<select name="city">
									<option value="">select</option>
									<option value="indore" <?php echo set_select('city', 'indore'); ?>>Indore</option>
									<option value="bhopal" <?php echo set_select('city', 'bhopal'); ?>>Bhopal</option>
									<option value="ujjain" <?php echo set_select('city', 'ujjain'); ?>>Ujjain</option>
									<option value="mhow" <?php echo set_select('city', 'mhow'); ?>>Mhow</option>
									<option value="dhar" <?php echo set_select('city', 'dhar'); ?>>Dhar</option>

								</select>
							</td>
						</tr>
						<tr class="error">
							<td></td>
							<td><?php echo form_error('city'); ?></td>
						</tr>
						<tr>
							<td>Address</td>
							<td><textarea  placeholder="Address" name="address"><?php echo set_value('address') ?></textarea></td>
						</tr>
						<tr class="error">
							<td></td>
							<td><?php echo form_error('address'); ?></td>
						</tr>
						<tr>
							<td>Gender</td>
							<td>M<input type="radio" name="gender" <?php echo set_radio("gender", "male") ?> value="male" />F<input type="radio" name="gender" <?php echo set_radio("gender", "female") ?> value="female" /></td>
						</tr>
						<tr class="error">
							<td></td>
							<td><?php echo form_error('gender'); ?></td>
						</tr>
						<tr>
							<td>pincode</td>
							<td><input  placeholder="pincode" type="text" value="<?php echo set_value('pincode') ?>" name="pincode" ></td>
						</tr>
						<tr class="error">
							<td></td>
							<td><?php echo form_error('pincode'); ?></td>
						</tr>
						<tr>
							<td >Contact</td>
							<td><input  placeholder="Contact" value="<?php echo set_value('contact') ?>" type="text" name="contact"></td>
						</tr>
						<tr class="error">
							<td></td>
							<td><?php echo form_error('contact'); ?></td>
						</tr>
						<tr>
							<td colspan="2" align="center"><input class="btn" type="submit" value="Signup"></td>
						</tr>
					</table>
				</form>
			</div>
		</div>
			<div id="left_contant">
				<h2>SEO FEATURES</h2>
				<ul>
					<li><a href="">Link Bulioding</a></li>
					<li><a href="">Reeporting</a></li>
					<li><a href="">Blog</a></li>
					<li><a href="">Meta Tag</a></li>
					<li><a href="">Internet Marketing</a></li>
					<li><a href="">Sample Press Releaso</a></li>
				</ul>
			</div>
			<div id="bottom_contant">
				<ul>
					<li><a href="">Solution</a></li>
					<li><a href="">Building</a></li>
					<li><a href="">Management</a></li>
					<li><a href="">Maintance</a></li>
					<li><a href="">Maintance</a></li>
				</ul>
			</div>
		</div>
	</div>

	