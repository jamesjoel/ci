
			<div id="right_contant">
				<h2>Welcome : <?php echo $this->session->userdata("name");?></h2>
				<h3>Your Profile Pic</h3>
				<?php
				$data=$user->row_array();
				if($data['image']=="")
				{
					$path=base_url("image/avatar.png");
				}
				else
				{
					
					$path=base_url("user_image/".$data['image']);
				}
				?>
				<form action="" method="post" enctype="multipart/form-data">
					
				<table align="center" width="300">
					<tr>
						<td>Current Image</td>
						<td><img src="<?php echo $path;?>" height="100" width="80" /></td>
					</tr>
					<tr>
						<td>Select File</td>
						<td><input type="file" name="userfile"/></td>
					</tr>
					<tr>
						<td colspan="2" align="center"><input type="submit" value="Upload" name="submit" /></td>
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

	