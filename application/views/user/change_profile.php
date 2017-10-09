
			<div id="right_contant">
				<h2>Welcome : <?php echo $this->session->userdata("name");?></h2>
				<h3>Change Your Profile</h3>
				<?php
				$data=$user->row_array();
				// print_r($data);
				?>
				<form action="" method="post">
					
				<table align="center" width="300">
					<tr>
						<td>Full Name</td>
						<td><input type="text" name="full_name" value="<?php echo $data['full_name']; ?>" /></td>
					</tr>
					<tr>
						<td>Email</td>
						<td><input type="Text" disabled="disabled" value="<?php echo $data['username']; ?>" /></td>
					</tr>
					<tr>
						<td>Contact</td>
						<td><input type="text" name="contact" value="<?php echo $data['contact']; ?>" /></td>
					</tr>
					<tr>
						<td>Gender</td>
						<td>M<input type="radio" value="male"  name="gender"  <?php if($data['gender']=="male") echo "checked='checked'"; ?>/>F<input  name="gender" type="radio" value="female" <?php if($data['gender']=="female") echo "checked='checked'"; ?> /></td>
					</tr>
					<tr>
						<td>Address</td>
						<td><textarea name="address"><?php echo $data['address']; ?></textarea></td>
					</tr>
					<tr>
						<td>City</td>
					<td><select  name="city">
						<option>Select</option>
						<option <?php if($data['city']=="bhopal") echo "selected='selected'"; ?>>bhopal</option>
						<option <?php if($data['city']=="ujjain") echo "selected='selected'"; ?>>ujjain</option>
						<option <?php if($data['city']=="dhar") echo "selected='selected'"; ?>>dhar</option>
					</select></td>
					</tr>
					</tr>
					<tr>
						<td colspan="2" align="center">
							<input type="submit" name="submit" value="update">
						</td>
					</tr>
				</table>
				</form>
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

	