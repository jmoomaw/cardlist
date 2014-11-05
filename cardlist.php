-
<p>-
<p>-
<p><h1>Welcome to the Illuminati Card Search</h1></p>
<p>Fnord.</p>
<form method="post" action="">
<input type="text" name="value">
<input type="submit">
</form>

<?php
$search = $_POST['value'];
$lsearch = strtolower($search);
//$search = "Open";
$lines = file('/var/www/applications/cardlist.txt');
// Store true when the text is found
$found = false;
foreach($lines as $line)
{
  if(strpos(strtolower($line), $lsearch) !== false)
  {
    $found = true;
    echo "<p>";
    $data = str_getcsv($line);
    $card = "-<p>-<p>-<p>-<p><table><tr><td></td><td></td><td><center>".$data[1]."</cent
er></td><td> </td><td></td></tr><tr><td></td><td></td><th><center>".$data[0]."</center><
/th><td></td><td></td></tr><tr><td></td><td></td><td><center>".$data[13]."</center></td>
<td></td><td></td></tr><tr><td></td><td></td><td><center>".$data[14]."</center></td><td>>
</td><td></td></tr><tr><td>".$data[3]."</td><td></td><td><center>".$data[15]."</center><<
/td><td></td><td>".$data[4]."</td></tr><tr><td></td><td>Power: ".$data[5]."</td><td><cenn
ter>".$data[16]."</center></td><td>".$data[8]."</td><td></td></tr><tr><td></td><td>Resiss
tance: ".$data[6]."</td><td><center>".$data[17]."</center></td><td>".$data[9]."</td><td>>
</td></tr><tr><td></td><td>Income: ".$data[7]."</td><td><center>".$data[18]."</center><//
td><td>".$data[10]."</td><td></td></tr><tr><td></td><td></td><td><center>".$data[19]."<//
center></td><td>".$data[11]."</td><td></td></tr><tr><td></td><td></td><td><center>".$datt
a[20]."</center></td><td>".$data[12]."</td><td></td></tr><tr><td></td><td></td><td><centt
er>".$data[21]."</center></td><td></td><td></td></tr><tr><td></td><td></td><td><center>""
.$data[22]."</center></td><td></td><td></td></tr><tr><td></td><td></td><td><center>".$daa
ta[23]."</center></td><td></td><td></td></tr><tr><td></td><td></td><td><center>".$data[22
4]."</center></td><td></td><td></td></tr><tr><td></td><td></td><td><center>".$data[2]."<<
/center></td><td></td><td></td></tr></table>";
//    $body = "<body><p><p><p><form method=\"post\" action=\"\"><input type=\"text\" namm
e=\"value\"><input type=\"submit\"></form></body>";
    echo $card;
   }
}
// If the text was not found, show a message
if(!$found)
{
  $card = 'No match found';
  echo $card;
}

?>
