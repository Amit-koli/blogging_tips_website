<?php
$conn=mysqli_connect("localhost","amit","Amit0000@","data123");

if(isset($_POST['submit'])){
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];

$checkUser ="SELECT * from logindata where email='$email'";
$result = mysqli_query($conn,$checkUser);

$count=mysqli_num_rows($result);
 if($count>0){
   echo '<script type="text/JavaScript">
   alert("email already exist");
   </script>';
 }
 else{
 if($password===$cpassword){
$sql = "INSERT INTO logindata (name, email, password ,cpassword)
VALUES ('$name', '$email', '$password','$cpassword')";

 
    if(mysqli_query($conn,$sql)){
   
        header("location: login.php");
       
   }
}
  
 else {
    echo '<script type="text/JavaScript">
    alert("password is not match");
    </script>';
 }
}

 

mysqli_close($conn);

}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Signup</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- <script src="javascript.js" defer></script> -->
  </head>
  <body>
    
    <div class="container">
      <div class="form">
        <h1>Signup</h1>
        <form method="post" action="connect9.php">
          <input type="text" name ="name"placeholder="Username">
          <input type="email" name ="email" placeholder="Email">
          <input id="p" type="password" name ="password" placeholder="Password" >
          <input id="c" type="password" name ="cpassword" placeholder="Confirm Password">
          <button type="submit" name="submit">Signup</button>
          <p>Already have an account? <a href="project.html">Login here</a>.</p>
        </form>
      </div>
    </div>
  </body>
  <!-- <script>
    function validatePassword() {
  const password = document.getElementById("p").value;
  const confirmPassword = document.getElementById("c").value;

 // if (password !== confirmPassword) {
  //  alert("Passwords do not match!");
    //return false;
  } /*else {
    alert("Passwords match!");
    return true;
  }
  */
//}
  </script> -->
</html>

