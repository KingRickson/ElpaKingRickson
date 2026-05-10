<!DOCTYPE html>
<html>
<body>

<form method="get" action="">
 Name: <input type="text" name="name">
 <input type="submit">
 <br>
 Email: <input type="text" name="email">
 <input type="submit">
</form>

<?php
if (empty($_GET["name"])) {
    echo "Name is required <br>";
} else {
    echo "Name: " . htmlspecialchars($_GET['name']) . "<br>";
}

if (!filter_var($_GET["email"], FILTER_VALIDATE_EMAIL)) {
    echo "Invalid email format <br>";
} else {
    echo "Email: " . htmlspecialchars($_GET['email']) . "<br>";
}

?>

</body>
</html>
