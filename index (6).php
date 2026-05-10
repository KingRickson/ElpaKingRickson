<!DOCTYPE html>
<html>
<body>

<form method="get" action="">
 Name: <input type="text" name="name">
 <input type="submit">
 <br>
 Email: <input type="text" name="email">
 <input type="submit">
 <br>
 <input type="radio" name="gender" value="male"> Male
 <input type="radio" name="gender" value="female"> Female
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
if (isset($_GET["gender"])) {
    echo "Gender: " . htmlspecialchars($_GET['gender']) . "<br>";
}
?>

</body>
</html>
