<?php
    session_start();
    if(!isset($_SESSION['NAME']))
    {
        echo"<script>location.href='index.php'</script>";
    }
?>
<html>
	<head>
		<title>
            LEAVE FORM
		</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
		<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
		<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
		<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />	
			<link rel="stylesheet" href="registration.css">	
		<style>
		table {
			border-collapse: collapse;
			border-spacing: 0;
			width: 100%;
			border: 1px solid black ;
			}
			.padding{
			padding-left: 240px;
			}
			th, td {
			text-align: left;
			padding: 8px;
			}
			tr:nth-child(even){background-color: white}
		</style>
	</head>
 <body>

 <?php include('employee.php'); ?>
	<div class="w3-main" style="margin-left:300px;margin-top:20px;">
		<?php include('bar.php'); ?>
	</div>
</body>
</html>
	