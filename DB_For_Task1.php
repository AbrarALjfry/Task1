<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="task1";
       $Motor1=$_POST["Motor1"];
	   $Motor2=$_POST["Motor2"];
	   $Motor3=$_POST["Motor3"];
	   $Motor4=$_POST["Motor4"];
	   $Motor5=$_POST["Motor5"];
	   $Motor6=$_POST["Motor6"];

 $conn=@mysqli_connect($server_name,$username,$password,$database_name);
  if (!$conn) {
 
   die("Connection failed: " . mysqli_connect_error());
 }
  if(isset($_POST['SAVE'])){ 
 $sql = "INSERT INTO table1(Motor1,Motor2,Motor3,Motor4,Motor5,Motor6,RUN)VALUES ('$Motor1','$Motor2','$Motor3','$Motor4','$Motor5','$Motor6','0')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
 } else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
 }


}else if(isset($_POST['RUN'])){
 $sql = "INSERT INTO table1(Motor1,Motor2,Motor3,Motor4,Motor5,Motor6,RUN)VALUES ('$Motor1','$Motor2','$Motor3','$Motor4','$Motor5','$Motor6','1')";

if (mysqli_query($conn, $sql)) {
  echo $_POST['RUN']." / ".$_POST['Motor1']." , ".$_POST['Motor2']." , ".$_POST['Motor3']." , ".$_POST['Motor4']." , ".$_POST['Motor5']." , ".$_POST['Motor6'];
 } else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
 }
}
 mysqli_close($conn);	

?>