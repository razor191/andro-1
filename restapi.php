<?php

	$host="localhost";
	$username="root";
	$password="";
	$dbname="kritic";
	
	$conn=mysqli_connect($host,$username,$password,$dbname);
	
	if(!$conn)
	{
		die("connection failed".mysqli_connect_error());
	}
	
	$sql="select * from kritic";
	$result = mysqli_query($conn,$sql);
	
	while($res=mysqli_fetch_assoc($result))
	{
		$output[]=$res;
	}
	
	print(json_encode($output));
		
	mysqli_close($conn);
	
	?>
	