<?php
	$connection = mysqli_connect("localhost:3306","root","","payroll_s");

	if (!$connection)
	{
		die("Database Connection Failed");
	}

	
	if (mysqli_connect_errno())
	{
		die("Database Selection Failed" );
	}
?>