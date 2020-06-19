<?php
mysql_connect("localhost", "root", "");
mysql_select_db("twitter");
$username = $_POST["username"];
$name = $_POST["name"];
$password = $_POST["password"];
$sql = "select iduser from users where username = '$username'";
$res = mysql_query($sql);
if (mysql_num_rows($res) == 0) {
  $sql = "insert into users (username, name, password) values ('$username', '$name', '$password')";
  $res = mysql_query($sql);
  echo "User Added Successfuly";
}
else {
  echo "User Already Exist";
}
mysql_close();
?>
