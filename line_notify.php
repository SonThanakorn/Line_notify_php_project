<?php
	//รับข้อมูลจาก Form
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	//เริ่ม Line Notify
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	date_default_timezone_set("Asia/Bangkok");

	$sToken = ""; //<--ใส่ Line Token
	$sMessage = "\n". "ชื่อจริง: " . $firstname .
              "\n". "นามสกุล: " . $lastname;
	
	$chOne = curl_init(); 
	curl_setopt( $chOne, CURLOPT_URL, "https://notify-api.line.me/api/notify"); //อันนี้ห้ามลบและห้ามเปลี่ยน
	curl_setopt( $chOne, CURLOPT_SSL_VERIFYHOST, 0); 
	curl_setopt( $chOne, CURLOPT_SSL_VERIFYPEER, 0); 
	curl_setopt( $chOne, CURLOPT_POST, 1); 
	curl_setopt( $chOne, CURLOPT_POSTFIELDS, "message=".$sMessage); 
	$headers = array( 'Content-type: application/x-www-form-urlencoded', 'Authorization: Bearer '.$sToken.'', );
	curl_setopt($chOne, CURLOPT_HTTPHEADER, $headers); 
	curl_setopt( $chOne, CURLOPT_RETURNTRANSFER, 1); 
	$result1 = curl_exec( $chOne );
	//การแจ้ง error 
	if(curl_error($chOne)) 
	{ 
		echo 'error:' . curl_error($chOne); 
	}else { 
		//ถ้าหาก Line Notify ส่งข้อมูลให้แล้ว แล้วจะให้ทำอะไรต่อให้ใส่ในนี้
	} 
	curl_close( $chOne );   
?>
