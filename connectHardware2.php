
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

$sql="SELECT * from robotmove ORDER BY id DESC LIMIT 1 ";
$result = mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result)){
    echo " ForWard button value : ".$row[1]."  <br/> ". " BackWard button value : ".$row[2]."   <br/>". "Right button value : ".$row[3]."  <br/> " ." Left button value : ".$row[4]."  <br/> " ." Stop button value : ".$row[5]. "  <br/> ";
}
//Connection Close
mysqli_close(&con);
?>