<!DOCTYPE html>
<html>
	<head>

	</head>
	<body>
<?PHP
    echo 'di jun ------>  sb';

    $conn = mysql_connect("w.rdc.sae.sina.com.cn:3307","SAE_MYSQL_USER","SAE_MYSQL_PASS");
    if($conn){
    	echo "ok";
    }else {
    	echo "fail";
    }
?>
	</body>

</html>