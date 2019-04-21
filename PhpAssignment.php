<?php

//define('Agee', 20);
//echo agee;

//$test1 = "Hello Bangladesh";
$data = "Hi My name is Mahbobur Jwel";
//echo $test1[4];

//echo strlen($test1);

/*function test($content){
	//echo "Hello My name is Mahbobur Jwel";
	return $content;
}*/
/*function test($content = "Hi Bangladesh"){
	return $content;
}*/

function test($name,$location){
	echo "My name is $name";
	echo "<br>";
	echo "I'm from $location";
}


?>
<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>
<h1>Name : <?php echo test("Mahbobur Jwel", "Dhaka"); ?></h1>
<p><?php echo strlen2();?></p>

</body>
</html>