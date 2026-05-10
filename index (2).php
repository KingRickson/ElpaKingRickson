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
if(isset($_GET ['name'])) {
 echo "Hello, " . $_GET['name'] . "<br>";
}
if(isset($_GET ['email'])) {
 echo "Email: " . $_GET['email'];
}
?>


</body>
</html>
