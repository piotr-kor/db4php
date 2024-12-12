<?php
session_start();

function zaloguj($login, $haslo) {
  if ($login == "admin" && $haslo == "123") {
    $_SESSION["zalogowany"] = 1;
  }
}


function wyloguj() {
  session_destroy();
}


function czy_zalogowany() {
  if (isset($_SESSION["zalogowany"]) && $_SESSION["zalogowany"] == 1) {
    return 1;
  } else {
    return 0;
  }
}

?>