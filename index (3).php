<!DOCTYPE html>
<html>
<body>

<form method="get" action="">
 Name: <input type="text" name="name">
 <input type="submit">
 Email: <input type="text" name="email">
 <input type="submit">
 
</form>

<?php
if(empty($_POST["name"])) {
 echo "Name is required" . "<br>";
} else {
    echo "Name: " . $_GET['name'];
}
if(isset($_GET ['email'])) {
 echo "Email: " . $_GET['email'];
}
?>


</body>
</html>
