<?php 
	echo "tạo mảng sắp xếp: <br>";
	$a = array(2,4,6,8,12,34,55,1,3);
	foreach ($a as $value) {
		echo $value." ";
	}
	 sort($a);
	 echo "<br>Đã sắp xếp:<br> ";
	 foreach ($a as  $va) {
	 	echo $va." ";
	 }
 ?>