<?php
// Connect to MySQL database
if($_SERVER['REQUEST_METHOD']=='POST'){
$HOSTNAME='localhost';
$USERNAME='root';
$PASSWARD='';
$DATABASE='form';
// Retrieve user data from registration form
$name = $_POST['name'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_BCRYPT);
$address = $_POST['address'];
$phone = $_POST['phone'];
$mysqli = mysqli_connect($HOSTNAME,$USERNAME,$PASSWARD,$DATABASE);

if ($mysqli) {
    //echo "connection successfully";
    //Insert data into the users table
$query = "INSERT INTO data (name, email, password, address, phone) VALUES ('$name', '$email', '$password', '$address', '$phone')";
$result=mysqli_query($mysqli,$query);
if($result){
    echo "Data insrted successfully";
}
else{
    die(mysqli_error($mysqli));
}
}
else{
    die(mysqli_error($mysqli));
}

}


?>
