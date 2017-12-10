<?php
//connect to MySQL
$con = mysqli_connect("localhost","root","root","shoutit");

//Test Connection
if(mysqli_connect_errno()){

	echo "Failed to connect".mysqli_connect_error();
	//die 'exit';
}

;?>
