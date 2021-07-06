<?php
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






////////////////////////////////
if(isset($_POST['save'])){
  $Motor1=$_POST["Motor1"];
  $Motor2=$_POST["Motor2"];
  $Motor3=$_POST["Motor3"];
  $Motor4=$_POST["Motor4"];
  $Motor5=$_POST["Motor5"];
  $Motor6=$_POST["Motor6"];
    // insert into table with name of column
    //$sql="Insert Into motors values ('$Motor1','$Motor2','$Motor3','$Motor4','$Motor5','$Motor6',null,'0')";
$sql=("UPDATE `motors` SET `Motor1`='$Motor1', `Motor2`='$Motor2', `Motor3`='$Motor3', `Motor4`='$Motor4', `Motor5`='$Motor5', `Motor6`='$Motor6',`Running`='0' where `id` = '1'");
    $res=$con->query($sql);
    if($res){
      echo 'Good! New Motor Was Added';
    }
    else{
      echo 'Sorry Something Went Wrong';
    }
///////////////////////////////
}
else if(isset($_POST['Running'])){
  $Motor1=$_POST["Motor1"];
  $Motor2=$_POST["Motor2"];
  $Motor3=$_POST["Motor3"];
  $Motor4=$_POST["Motor4"];
  $Motor5=$_POST["Motor5"];
  $Motor6=$_POST["Motor6"];
    $sql ="UPDATE motors SET Running='1' where Motor1='$Motor1' and Motor2='$Motor2' and Motor3='$Motor3' and Motor4='$Motor4' and Motor5='$Motor5' and Motor6='$Motor6'";

    $res=$con->query($sql);
    if($res){
      echo 'Good! Motor Is Running';
    }
    else{
      echo 'Sorry No Such Motor';
    }
}

?>