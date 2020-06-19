<?php
echo '<h1>Feeds</h1>';
mysql_connect("localhost", "root", "");
mysql_select_db("twitter");
$sql = "select name, content from users u, tweets t where u.id = t.iduser order by datet";
$res = mysql_query($sql);
echo "<table><tr><th>Name</th><th>Tweets</th></tr>";
while ($r = mysql_fetch_array($res)) {
  $name = $r["name"];
  $content = $r["content"];
  echo "<tr><td>$name</td><td>$content</td></tr>";
}
echo '</table>';
mysql_close();
?>
