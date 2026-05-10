<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>


<form method="get" action="">
 Name: <input type="text" name="name">
 <input type="submit">
 <br>
 Email: <input type="text" name="email">
 <input type="submit">
 <br>
 Motto: <input type="text" name="text">
 <input type="submit">
 <br>
 <input type="radio" name="gender" value="male"> Male
 <input type="radio" name="gender" value="female"> Female
  <div class="dropdown">
    <button>Course</button>
    <div class="content"> 
      <a href="#">BSIT</a>
      <a href="#">BSOA</a>
    </div>
  </div>
</form>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

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
if (isset($_GET["course"])) {
    echo "Course: " . htmlspecialchars($_GET['course']) . "<br>";
}
if (isset($_GET["text"])) {
    echo "Text: " . htmlspecialchars($_GET['text']) . "<br>";
}
?>

</body>
</html>
