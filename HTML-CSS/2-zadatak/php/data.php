<?php
foreach ($_GET as $varname => $varvalue) echo "$varname---$varvalue<br>\n";
?>

<!DOCTYPE html>
<html lang="hr">

<body>
<h3>Username</h3>
Korisničko Ime: <?php echo $_POST['uname']; ?><br>
Puno Ime: <?php echo $_POST["puno_ime"]; ?><br>
Lozinka: <?php echo $_POST["password"]; ?><br>
Da: <?php echo $_POST["contact"]; ?><br>
Ne: <?php echo $_POST["contact"]; ?>
</body>

</html>
