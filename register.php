
<?php  

$eid=''; 
$no='';
$un='';
$ps='';

$servername="localhost";
$username="root";
$password="";
$dbname="user";
$connection=mysqli_connect($servername,$username,$password,$dbname);
if($connection)
  {
    echo "connected";
  }
else
{
  echo "not connected";
}

$un=$_POST["username"];
$eid=$_POST["email"];
$no=$_POST["phone"];
$ps=$_POST["password"];

$sql="insert into register values($un','$eid','$no','$ps')";

if($connection->query($sql)===TRUE)
  {
    echo "<br>inserted";
  }

mysqli_close($connection);
?>









