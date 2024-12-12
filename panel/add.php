
<?php
include ('../db_config.php');

mysqli_query($polaczenie,"INSERT INTO podstrony (nazwapodstr,tresc,waga)VALUES ('nowa','Tresc nowej stronki',10)");
echo "Dane chyba dodane!<br>";

mysqli_close($polaczenie);
?>

