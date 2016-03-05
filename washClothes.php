<!DOCTYPE html>
<html>
	<head>

	</head>
	<body>
<?PHP
    echo 'di jun ------>  sb';

    $conn = mysql_connect("http://xian.applinzi.com:3307","SAE_MYSQL_USER","SAE_MYSQL_PASS");
    if($conn){
    	echo "ok";
    }else {
    	echo "fail";
    }
?>
	</body>

</html>