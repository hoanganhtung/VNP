<?php
	setcookie("cookie[name]", "tung",time()+10);
	setcookie("cookie[queQuan]", "hn",time()+10);
	setcookie("cookie[sdt]", "01642813189",time()+10); 
	if (isset($_COOKIE['cookie'])) {
	    foreach ($_COOKIE['cookie'] as $key=> $value) {
	        $key = htmlspecialchars($key);
	        $value = htmlspecialchars($value);
	        echo "$key : $value <br />\n";
	    }
	}
?>