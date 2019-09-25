
<!DOCTYPE html>
<html>
<body>

<?php

$database_host = "localhost";
$database_name = "xmlapp";
$database_username = "root";
$database_password = "root";

$database_connection = new mysqli($database_host, $database_username, $database_password, $database_name);

if(mysqli_connect_errno()){
    echo "problem kod spajanja na bazu!";
    die;
}

$query = "SELECT id, username FROM users";

$stmt = $database_connection->prepare($query);

$stmt->execute();

$id = "";
$username = "";

$stmt->bind_result($id, $username);


?>
<table border="1">
    <thead>
        <th>id</th>
        <th>Username</th>
    </thead>
    <tbody>
<?php
while($stmt->fetch()){ 
    ?>
        <tr>
        <td><?php echo $id; ?></td>
        <td><?php echo $username; ?></td>
        </tr>
<?php }

?>

</tbody>
</table>
</body>
</html>