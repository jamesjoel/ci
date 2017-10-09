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
		#content{
			width: 970px;
			margin: 0 auto;
			background-color: #FFF;
			box-shadow: 0 0 10px #000;
			min-height: 600px;
			height: auto;
			padding: 10px;

		}
		#tab{
			border-collapse: collapse;
		}
		#tab td, th{
			width: 200px;
			padding: 5px 10px;
			border:1px solid #CCC;
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
<hr />
<div id='content'>
	<table id="tab" align="center">
		<tr>
			<th>S.No.</th>
			<th>Full Name</th>
			<th>Email</th>
			<th>Contact</th>
			<th>Status</th>
			<th>Change</th>
		</tr>
		<?php
		// $user->row_array();
		$n=1;
		foreach($user->result_array() as $data)
		{
			if($data['status']==1)
			{
				$x="Enable";
			}
			else
			{
				$x="Disable";
			}
			$url=site_url('admin/change/'.$data['id']."/".$data['status']);
			?>
				<tr>
					<td><?php echo $n++;?></td>
					<td><?php echo $data['full_name'];?></td>
					<td><?php echo $data['username'];?></td>
					<td><?php echo $data['contact'];?></td>
					<td><?php echo $x;?></td>
					<td><a href="<?php echo $url; ?>">Change</a></td>
				</tr>
		<?php
		}
		?>
	</table>
</div>
</body>
</html>