<?php
$conn = mysqli_connect("localhost", "root", "dagotthatdope", "twitter");
$username = $_POST["username"];
$name = $_POST["name"];
$password = $_POST["password"];
$sql = "select id from users where username = '$username'";
$res = mysqli_query($conn, $sql);
if (mysqli_num_rows($res) == 0) {
  $sql = "insert into users (username, name, password) values ('$username', '$name', '$password')";
  $res = mysqli_query($conn, $sql);
  echo "User Added Successfuly";
}
else {
  echo "User Already Exist";
}
mysqli_close($conn);
?>
