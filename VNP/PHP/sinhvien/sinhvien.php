<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sinh viên</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

</head>
<body>
	<?php 
		$a = array(
				"id"=>array(1,2,3,4,5,6,7,8,9,10),
				"ten"=>array(1,2,3,4,5,6,7,8,9,10),
				"ngaySinh" =>array(1,2,3,4,5,6,7,8,9,10),
				"queQuan" => array(1,2,3,4,5,6,7,8,9,10),
				"soThich"=>array(1,2,3,4,5,6,7,8,9,10)
			);
	 ?>
	 <div class="container">
	 	<table class="table table-hover">
			<tr>
				<td>#</td>
				<td>Tên </td>
				<td>Ngày sinh</td>
				<td>Quê quán</td>
				<td>Sở thích</td>
			</tr>
			 <?php $count=0; ?>
			 <?php foreach ($a as $key => $a) {  ?>

			<tr>
				<td><?php echo $a['id'][$count]; ?></td>
				<td><?php echo $a['ten'][$count]; ?> </td>
				<td><?php echo $a['ngaySinh'][$count]; ?></td> 
				<td><?php echo $a['queQuan'][$count]; ?></td> 
				<td><?php echo $a['soThich'][$count]; ?></td> 
			</tr> 
			<?php  $count++; }?>
		</table>
	 </div>
	
</body>
</html>