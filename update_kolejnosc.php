
<?php
include ('db_config.php');

	mysqli_query($polaczenie,"ALTER TABLE `podstrony` ADD `waga` INT NOT NULL AFTER `tresc`");
    mysqli_query($polaczenie,"UPDATE podstrony SET waga = '1' "); 
    mysqli_query($polaczenie,"ALTER TABLE `podstrony` CHANGE `tresc` `tresc` TEXT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL");
	echo "Tabele chyba zmodyfikowane!<br>";
	mysqli_close($polaczenie);
	
?>

