
			<div id="right_contant">
				<h2>Welcome : <?php echo $this->session->userdata("name");?></h2>
				<h3>Change Your Password</h3>
				<form action="" method="post">
					
				<table align="center" width="500">
					<tr>
						<td>Cureent Password</td>
						<td><input type="password" name="old_pass" /></td>
					</tr>
					<tr>
						<td>New Password</td>
						<td><input type="password" name="new_pass" /></td>
					</tr>
					<tr>
						<td>Conf New Password</td>
						<td><input type="password" name="c_new_pass" /></td>
					</tr>
					<tr>
						<td colspan="2" align="center"><input type="submit" name="submit" value="Update" /></td>
					</tr>

				</table>
				<?php
				echo $this->session->flashdata("msg");
				?>
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

	