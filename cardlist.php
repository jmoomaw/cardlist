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
    $card = "-<p>-<p>-<p>-<p><table><tr><td></td><td></td><td><center>&nbsp".$data[1]."&nbsp</center></td><td> </td><td></td></tr><tr><td></td><td></td><th><center>&nbsp".$data[0]."&nbsp</center></th><td></td><td></td></tr><tr><td></td><td></td><td><center>&nbsp".$data[13]."&nbsp</center></td><td></td><td></td></tr><tr><td></td><td></td><td><center>&nbsp".$data[14]."&nbsp</center></td><td></td><td></td></tr><tr><td>".$data[3]."&nbsp&nbsp</td><td></td><td><center>&nbsp".$data[15]."&nbsp</center></td><td></td><td>".$data[4]."&nbsp&nbsp</td></tr><tr><td></td><td>Power: ".$data[5]."&nbsp&nbsp</td><td><center>&nbsp".$data[16]."&nbsp</center></td><td>".$data[8]."&nbsp&nbsp</td><td></td></tr><tr><td></td><td>Resistance: ".$data[6]."&nbsp&nbsp</td><td><center>&nbsp".$data[17]."&nbsp</center></td><td>".$data[9]."&nbsp&nbsp</td><td></td></tr><tr><td></td><td>Income: ".$data[7]."&nbsp&nbsp</td><td><center>&nbsp".$data[18]."&nbsp</center></td><td>".$data[10]."&nbsp&nbsp</td><td></td></tr><tr><td></td><td></td><td><center>&nbsp".$data[19]."&nbsp</center></td><td>".$data[11]."&nbsp&nbsp</td><td></td></tr><tr><td></td><td></td><td><center>&nbsp".$data[20]."&nbsp</center></td><td>".$data[12]."&nbsp&nbsp</td><td></td></tr><tr><td></td><td></td><td><center>".$data[21]."</center></td><td></td><td></td></tr><tr><td></td><td></td><td><center>".$data[22]."</center></td><td></td><td></td></tr><tr><td></td><td></td><td><center>".$data[23]."</center></td><td></td><td></td></tr><tr><td></td><td></td><td><center>".$data[24]."</center></td><td></td><td></td></tr><tr><td></td><td></td><td><center>&nbsp".$data[2]."&nbsp</center></td><td></td><td></td></tr></table>";
//    $body = "<body><p><p><p><form method=\"post\" action=\"\"><input type=\"text\" name=\"value\"><input type=\"submit\"></form></body>";
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
