<?php

//Create Connection
function connect(){
	$con = mysqli_connect("localhost","root","","motors");
		mysqli_set_charset($con,"utf8");
	// Check connection
	if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
	} 
	else return $con;
}

$con =connect();

$Motor1=$_POST["Motor1"];
$Motor2=$_POST["Motor2"];
$Motor3=$_POST["Motor3"];
$Motor4=$_POST["Motor4"];
$Motor5=$_POST["Motor5"];
$Motor6=$_POST["Motor6"];

$sql="SELECT * from Motors ORDER BY id DESC LIMIT 1 ";
$result = mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result)){
    echo " Motor 1: ".$row[0]."  <br/> ". " Motor 2: ".$row[1]."   <br/>". "Motor 3: ".$row[2]."  <br/> " ." Motor 4: ".$row[3]."  <br/> " ." Motor 5: ".$row[4]. "  <br/> " ." Motor 6: ".$row[5]." <br/>";
}
//Connection Close
mysqli_close(&con);
?>