
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Profile</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

</head>
<body>
	<?php 
		$a = array(
				"id"=>1,
				"ten"=>"Hoàng Anh Tùng",
				"ngaySinh" =>"26/11/1994",
				"queQuan" => "Hà Nội",
				"soThich"=>"Chơi game"
			);
	 ?>
	 <div class="container">
	 	<table class="table table-hover">
			<tr>
				<td>#</td>
				<td>Họ và Tên:</td>
				<td>Ngày sinh:</td>
				<td>Quê quán:</td>
				<td>Sở thích:</td>
			</tr>
			<tr>
				<td><?php echo $a['id']; ?></td>
				<td><?php echo $a['ten']; ?> </td>
				<td><?php echo $a['ngaySinh']; ?></td> 
				<td><?php echo $a['queQuan']; ?></td> 
				<td><?php echo $a['soThich']; ?></td> 
			</tr>
		</table>
	 </div>
	
</body>
</html>