<?php
echo '<h1>Feeds</h1>';
$conn = mysqli_connect("localhost", "root", "dagotthatdope", "twitter");
$sql = "select name, content from users u, tweets t where u.id = t.iduser order by datet";
$res = mysqli_query($conn, $sql);
echo "<table><tr><th>Name</th><th>Tweets</th></tr>";
while ($r = mysqli_fetch_array($res)) {
  $name = $r["name"];
  $content = $r["content"];
  echo "<tr><td>$name</td><td>$content</td></tr>";
}
echo '</table>';
mysqli_close($conn);
?>
