<?php

// Create connection
function connect(){
	$con = mysqli_connect("localhost","root","","robotmove");
		mysqli_set_charset($con,"utf8");
	// Check connection
	if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
	} 
	else return $con;
}

$con =connect();
///////////////////////////

// ForWard Button 
if(isset($_POST['Forward'])){
    // (id,ForWard,BackWard,Right,Left,Stop)
$sql =("UPDATE `robotmove` SET `ForWard`='Forward',`BackWard`='0',`Right`='0',`Left`='0',`Stop`='0' WHERE `id`='1'");
//Check
 $res=$con->query($sql);
    if($res){
      echo 'Forward move has been added successfully';
    }
    else{
      echo "Error: " . $sql . "<br>" . $con->error;
    }
}

// BackWard Button 
if(isset($_POST['Backward'])){
$sql =("UPDATE `robotmove` SET `ForWard`='0',`BackWard`='Backward',`Right`='0',`Left`='0',`Stop`='0' WHERE `id`='1'");
//Check
 $res=$con->query($sql);
    if($res){
      echo 'Backward move has been added successfully';
    }
    else{
      echo "Error: " . $sql . "<br>" . $con->error;
    }
}

// Right Button 
if(isset($_POST['Right'])){
$sql =("UPDATE `robotmove` SET `ForWard`='0',`BackWard`='0',`Right`='Right',`Left`='0',`Stop`='0' WHERE `id`='1'");
//Check
 $res=$con->query($sql);
    if($res){
      echo 'Right move has been added successfully';
    }
    else{
      echo "Error: " . $sql . "<br>" . $con->error;
    }
}

// Left Button 
if(isset($_POST['Left'])){
$sql =("UPDATE `robotmove` SET `ForWard`='0',`BackWard`='0',`Right`='0',`Left`='Left',`Stop`='0' WHERE `id`='1'");
//Check
 $res=$con->query($sql);
    if($res){
      echo 'Left move has been added successfully';
    }
    else{
      echo "Error: " . $sql . "<br>" . $con->error;
    }
}

// Stop Button 
if(isset($_POST['Stop'])){
    // insert value into table
$sql =("UPDATE `robotmove` SET `ForWard`='0',`BackWard`='0',`Right`='0',`Left`='0',`Stop`='Stop' WHERE `id`='1'");
//Check
 $res=$con->query($sql);
    if($res){
      echo 'Stop move has been added successfully';
    }
    else{
      echo "Error: " . $sql . "<br>" . $con->error;
    }
}
?>
