<?php 
$Username=$_POST['name1'];
$Email=$_POST['email'];
$Password=$_POST['pass'];
$Age=$_POST['age'];
$host="localhost";
$dbusername="root";
$dbpassword="";
$dbname="db1";

$conn=mysqli_connect("localhost","root","","db1");

if($conn->connect_error){
    die("Connection Failed".$conn->connct_error);
}
echo "<br><h3>Connected Siccessfully</h3>";
$sql="INSERT INTO form VALUES ('$Username','$Email','$Password',$Age)";

if($conn->query($sql)===TRUE){
    echo "<h3>New Record Created Successfully</h3>";
    }
    else{
        echo "Error".$sql."<br>".$conn->error;
    }
$conn->close();
?>
