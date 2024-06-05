<?php
	$ung=new mysqli('localhost','root','','book_web') or die('Khong The Ket Noi Voi May Chu');
	$strSQL=mysqli_select_db($ung, 'book_web',);
	$ung->query("SET NAMES 'utf8'");
?> 