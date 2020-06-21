<?php
mysql_connect("localhost", "root", "");
mysql_select_db("twitter");
$username = $_POST["username"];
$password = $_POST["password"];
$content = $_POST["content"];
$sql = "select iduser from users where username = '$username'";
$res = mysql_query($sql);
if (mysql_num_rows($res) == 0) die ("User does not Exist");
$sql = "select iduser from users where username = '$username' and password = '$password'";
$res = mysql_query($sql);
if (mysql_num_rows($res) == 0) die ("Password is Incorrcet");
$res = mysql_fetch_array($res);
$id = $res["iduser"];
$date = date("Y-m-d");
$sql = "insert into tweets (iduser, content, datet) values('$id', '$content', '$date')";
$res = mysql_query($sql);
echo "Tweeted Succefully";
mysql_close();
?>
