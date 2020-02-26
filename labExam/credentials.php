<?php
	if( isset($_REQUEST['submit'])){
		$id = $_REQUEST['id'];
		$password1 =  $_REQUEST['password1'];
		$password2 =  $_REQUEST['password2'];
		if($password1==$password2){
		
		
$myfile = fopen("userinfo.txt", "w");

fwrite($myfile, $id);

fwrite($myfile, $password1);


		}

		?>