<?php

$server="localhost";
$username="root";
$password="";
$db = "shop";

$con = mysqli_connect($server,$username,$password,$db);

if(!$con ){
    die("Connection is fail".mysqli_connect_error());
}
// echo "Success Full conection"
$id = $_POST['itemID'];
$name=$_POST['itemName'];
$weight=$_POST['itemQuantity'];
$sql = "INSERT INTO `data` (`itemID`, `itemName`, `itemQuantity`) VALUES ('$id', '$name', '$weight')";

if($con->query($sql)==TRUE){
    echo"successfully insert";
}
else{
    echo"Error";
}

?>



