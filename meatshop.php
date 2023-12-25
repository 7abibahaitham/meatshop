<?php
$username=$_REQUEST["user"];
$password=$_REQUEST["password"];


if(isset($_POST['submit'])){
    

    $host="localhost";
    $user="root";
    
    $database="meatshop";

    $conn = mysqli_connect($host,$user,$database);
    
    
    $insert="insert into users values('$username','$password')";
    
    mysqli_query($conn,$insert);

    if($conn){
        echo("<h1 style='color:green;'> done</h1>!");
    }else{
        echo("<h1 style='color:red;'>retry </h1>!");
    };
}
?>