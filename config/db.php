
<!-- database connection -->
<?php
$server= "localhost";
$username= "root";
$password="";
$dbname= "tms";

$conn=mysqli_connect($server,$username,$password,$dbname);
if($conn){
    echo"Database is connected Sucessfully";
}
else{
    echo"Database is not connected,Failed";
}

?>