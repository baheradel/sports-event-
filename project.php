<?php
$adress=$_REQUEST["adress"];
$first_name=$_REQUEST["first name"];
$second_name=$_REQUEST["second name"];
	

if(isset($_POST['submit'])){
    

    $host="localhost";
    $user="root";
    $password="";
    $database="bahersport1";

    $conn = mysqli_connect($host,$second_name,$adress,$first_name,$database);
    
    
    $insert="insert into players values('$adress','$first_name','$second_name')";
    
    mysqli_query($conn,$insert);

    if($conn){
        echo("<h1 style='color:green;'> success</h1>!");
    }else{
        echo("<h1 style='color:red;'>Fail!</h1>!");
    };
}
?>