<?php
include ('auth.php');

$out = '<!DOCTYPE html>
<html>
<head>
  <title>Logowanie</title>
</head>
<body>
<h1>Logowanie</h1>';
echo $out;

if (isset($_POST['zaloguj'])) {
  $login = $_POST['login'];
  $haslo = $_POST['haslo'];
  zaloguj($login, $haslo);

  if (czy_zalogowany()) {
    header("Location: index2.php");
    exit();
  } else {
    echo "<p>Błędne dane logowania.</p>";
  }
}
?>

<form method="post">
  <label for="login">Login:</label><br>
  <input type="text" id="login" name="login"><br>
  <label for="haslo">Hasło:</label><br>
  <input type="password" id="haslo" name="haslo"><br><br>
  <input type="submit" value="Zaloguj" name="zaloguj">
</form>

</body>
</html>