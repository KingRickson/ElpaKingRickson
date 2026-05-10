<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>


<form method="get" action="">
 Name: <input type="text" name="name" value="<?php if(isset($_GET['name'])) echo htmlspecialchars($_GET['name']); ?>">
 <input type="submit">
 <br>
 Age: <input type="number" name="age" value="<?php if(isset($_GET['age'])) echo htmlspecialchars($_GET['age']); ?>">
 <input type="submit">
 <br>
 Email: <input type="text" name="email" value="<?php if(isset($_GET['email'])) echo htmlspecialchars($_GET['email']); ?>">
 <input type="submit">
 <br>
 Password: <input type="password" name="password" value="<?php if(isset($_POST['password'])) echo htmlspecialchars($_POST['password']); ?>">
 <input type="submit">
 <br>
 Motto: <input type="text" name="text" value="<?php if(isset($_GET['text'])) echo htmlspecialchars($_GET['text']); ?>">
 <input type="submit">
 <br>
 Hobbies: <input type="checkbox" name="hobbies[]" value="Reading" <?php if(isset($_GET['hobbies']) && in_array("Reading", $_GET['hobbies'])) echo "checked"; ?>> Reading
 <input type="checkbox" name="hobbies[]" value="Coding" <?php if(isset($_GET['hobbies']) && in_array("Coding", $_GET['hobbies'])) echo "checked"; ?>> Coding
 <input type="checkbox" name="hobbies[]" value="Cooking" <?php if(isset($_GET['hobbies']) && in_array("Cooking", $_GET['hobbies'])) echo "checked"; ?>> Cooking
 <input type="checkbox" name="hobbies[]" value="Sports" <?php if(isset($_GET['hobbies']) && in_array("Sports", $_GET['hobbies'])) echo "checked"; ?>> Sports
 <input type="checkbox" name="hobbies[]" value="Music" <?php if(isset($_GET['hobbies']) && in_array("Music", $_GET['hobbies'])) echo "checked"; ?>> Music
 <br>
 <input type="radio" name="gender" value="male" <?php if(isset($_GET['gender']) && $_GET['gender']=="male") echo "checked"; ?>> Male
 <input type="radio" name="gender" value="female" <?php if(isset($_GET['gender']) && $_GET['gender']=="female") echo "checked"; ?>> Female
 <br>
 <select name="course">
   <option value="BSIT" <?php if(isset($_GET['course']) && $_GET['course']=="BSIT") echo "selected"; ?>>BSIT</option>
   <option value="BSOA" <?php if(isset($_GET['course']) && $_GET['course']=="BSOA") echo "selected"; ?>>BSOA</option>
 </select>

 Reset: <input type="reset" value="Reset">
</form>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

<?php
if (empty($_GET["name"])) {
    echo "Name is required <br>";
} else {
    echo "Name: " . htmlspecialchars($_GET['name']) . "<br>";
}
if (empty($_GET["age"])) {
    echo "Age is required <br>";
} else {
    echo "Age: " . htmlspecialchars($_GET['age']) . "<br>";
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
