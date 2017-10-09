<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/style.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/font-awesome.css'); ?>">
</head>
<body>
	<div id="header">
		<div id="in_header">
			<div id="right_header">
				<?php
				if($this->session->userdata('is_user_logged_in'))
				{?>
					<ul>
						<li><a href="<?php echo site_url("home/index") ?>">Home</a></li>
						<li><a href="<?php echo site_url("home/about") ?>">About</a></li>
						<li><a href="<?php echo site_url("home/setting") ?>">Setting</a></li>
						<li><a href="<?php echo site_url("user/index") ?>">My Account</a></li>
						<li><a href="<?php echo site_url("user/profile") ?>">Profile</a></li>
						<li><a href="<?php echo site_url("user/logout") ?>">Logout</a></li>
					</ul>
				<?php
				}
				else
				{?>

					<ul>
						<li><a href="<?php echo site_url("home/index") ?>">Home</a></li>
						<li><a href="<?php echo site_url("home/signup") ?>">Signup</a></li>
						<li><a href="<?php echo site_url("home/login") ?>">Login</a></li>
						<li><a href="">Contact</a></li>
						<li><a href="">Star</a></li>
						<li><a href="<?php echo site_url("home/about") ?>">About</a></li>
						<li><a href="<?php echo site_url("home/setting") ?>">Setting</a></li>
					</ul>
				<?php
				}
				?>
			</div>
			<div id="left_header">
				<div id="search">
					<p>Follow us on the social network&nbsp; <i class="icon-twitter-sign" ></i>&nbsp;&nbsp; <i class="icon-facebook" >&nbsp;&nbsp;</i> <i class="icon-google-plus" >&nbsp;&nbsp;</i> <i class="icon-rss" >&nbsp;&nbsp; </i></p>
				</div>
			</div>
		</div>
	</div>

	<div id="contant">
		<div id="in_contant">
			<div id="slider">
				<img src="<?php echo base_url("image/1.jpg") ?>">
			</div>
			<?php
			$this->load->view($pagename);
			?>








<div id="footer">
		<div id="in_footer"></div>
	</div>
</body>
</html>