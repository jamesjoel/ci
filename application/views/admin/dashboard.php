<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/admin.css">
	<style type="text/css">
		body{
			margin:0;
			padding: 0;
			background-color: #c1c1c1;
		}
		#header{
			width: 970px;
			height: 80px;
			margin: 0 auto;
			background-color: #C0124A;
		}
		ul{
			list-style-type: none;
			margin: 0;
			padding: 0;

		}
		ul li{
			float: left;
			color: #FFF;
		}
		ul li a{
			color: #FFF;
			padding: 10px 15px;
			text-decoration: none;
			display: inline-block;
			margin-top: 30px;
		}
		ul li a:hover{
			background-color: #FFF;
			color: #C0124A;
		}
	</style>
</head>
<body>
<div id="header">
	<ul>
		<li><a href="<?php echo site_url('admin'); ?>">Dashboard</a></li>
		<li><a href="<?php echo site_url('admin/view_user'); ?>">View All User</a></li>
		<li><a href="<?php echo site_url('admin/logout'); ?>">Logout</a></li>
	</ul>
</div>
</body>
</html>