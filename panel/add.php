
<?php
include ('../db_config.php');

mysqli_query($polaczenie,"INSERT INTO podstrony (nazwapodstr,tresc)VALUES ('nowa','Tresc nowej stronki')");
echo "Dane chyba dodane!<br>";

mysqli_close($polaczenie);
?>

