<?php
$login= false;
$conn=mysqli_connect("localhost","amit","Amit0000@","data123");


$name=$_POST['name'];

$password=$_POST['password'];

 
$sql = "Select * from logindata where name='$name' AND password='$password'";
$row=mysqli_query($conn,$sql);
$num = mysqli_num_rows($row);
if($num==1){
    header("location: welcome.html");
      
}
else {
    print '<script>alert("Wrong credentials")</script>';  
}

mysqli_close($conn);
?>
