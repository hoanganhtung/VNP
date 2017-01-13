<?php 
	$a=23;
	function kiemtra($k)
	{
		if ($k<2) return false;
		for ($i=2; $i<=sqrt($k); $i++){
			if($k%$i==0) 
				return false;
		}
		return true;
	}
	if( kt($a) ){
		echo $a."là số nt";
	}else{
		echo $a." : không phải là số nguyên tố";
	}
 ?>