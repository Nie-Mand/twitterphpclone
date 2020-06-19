<?php
$conn = mysqli_connect("localhost", "root", "dagotthatdope", "twitter");
$username = $_POST["username"];
$password = $_POST["password"];
$content = $_POST["content"];
$sql = "select id from users where username = '$username'";
$res = mysqli_query($conn, $sql);
if (mysqli_num_rows($res) == 0) die ("User does not Exist");
$sql = "select id from users where username = '$username' and password = '$password'";
$res = mysqli_query($conn, $sql);
if (mysqli_num_rows($res) == 0) die ("Password is Incorrcet");
$id = mysqli_fetch_array($res)["id"];
$date = date("Y-m-d");
$sql = "insert into tweets (iduser, content, datet) values('$id', '$content', '$date')";
$res = mysqli_query($conn, $sql);
echo "Tweeted Succefully";
echo mysqli_error($conn);
mysqli_close($conn);
?>
