<?php
include ('../db_config.php');
$a=$_POST['pod'];
$dane=$_POST['nazwapodstr'];
$dane2=$_POST['trescpodstr'];
$dane3=$_POST['waga'];
mysqli_query($polaczenie,"UPDATE podstrony SET nazwapodstr = '".$dane."' WHERE id = '".$a."'");
mysqli_query($polaczenie,"UPDATE podstrony SET tresc = '".$dane2."' WHERE id = '".$a."'");
mysqli_query($polaczenie,"UPDATE podstrony SET waga = '".$dane3."' WHERE id = '".$a."'");
echo 'OK<br><a href=".">PANEL</a><br>';

?>