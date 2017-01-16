<?php 
	$link = mysqli_connect("localhost","root","","dangky1");
	if (mysqli_connect_errno()) {
		echo "Lỗi kết nối CSDL : " . mysqli_connect_error();
  	}
 ?>