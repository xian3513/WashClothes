<!DOCTYPE html>
<html>
	<head>

	</head>
	<body>
<?PHP
    echo 'di jun ------>  sb';

    $conn = mysql_connect("SAE_MYSQL_HOST_M:SAE_MYSQL_PORT","SAE_MYSQL_USER","SAE_MYSQL_PASS");
    if($conn){
    	echo "ok";
    }else {
    	echo "fail";
    }
?>
	</body>

</html>