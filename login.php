<?php
 $username = filter_input(INPUT_POST, 'login');
 $password = filter_input(INPUT_POST, 'pass');
 if (!empty($username)){
if (!empty($password)){
$host = "sql2.freesqldatabase.com";
$dbusername = "sql2287835";
$dbpassword = "bV9!gQ8*";
$dbname = "dane";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO dane (email, pass)
values ('$username','$password')";
if ($conn->query($sql)){
echo "New record is inserted sucessfully";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else{
echo "Password should not be empty";
die();
}
}
else{
echo "Username should not be empty";
die();
}
?>