<?php
include ('auth.php');
if(czy_zalogowany()){
    echo('
        <a href="..">Strona glowna</a><br>
        <a href="add.php">Dodawanie podstron</a><br>
        <a href="delete.php">Kasowanie podstron</a><br>
        <a href="mod0.php">Modyfikowanie podstron</a><br>
        <a href="wyloguj.php">Wyloguj</a><br>
    ');
}
else{
    echo('Zaloguj się!');
}