<!DOCTYPE html>
<html>  
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>


<form method="POST" action="">
 Name: <input type="text" name="name" value="<?php if(isset($_POST['name'])) echo htmlspecialchars($_POST['name']); ?>">
 <input type="submit">
 <br>
 Age: <input type="number" name="age" value="<?php if(isset($_POST['age'])) echo htmlspecialchars($_POST['age']); ?>">
 <input type="submit">
 <br>
 Email: <input type="text" name="email" value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']); ?>">
 <input type="submit">
 <br>
 Password: <input type="password" name="password" value="<?php if(isset($_POST['password'])) echo htmlspecialchars($_POST['password']); ?>">
 <input type="submit">
 <br>
 Motto: <input type="text" name="text" value="<?php if(isset($_POST['text'])) echo htmlspecialchars($_POST['text']); ?>">
 <input type="submit">
 <br>
 Hobbies: <input type="checkbox" name="hobbies[]" value="Reading" <?php if(isset($_POST['hobbies']) && in_array("Reading", $_POST['hobbies'])) echo "checked"; ?>> Reading
 <input type="checkbox" name="hobbies[]" value="Coding" <?php if(isset($_POST['hobbies']) && in_array("Coding", $_POST['hobbies'])) echo "checked"; ?>> Coding
 <input type="checkbox" name="hobbies[]" value="Cooking" <?php if(isset($_POST['hobbies']) && in_array("Cooking", $_POST['hobbies'])) echo "checked"; ?>> Cooking
 <input type="checkbox" name="hobbies[]" value="Sports" <?php if(isset($_POST['hobbies']) && in_array("Sports", $_POST['hobbies'])) echo "checked"; ?>> Sports
 <input type="checkbox" name="hobbies[]" value="Music" <?php if(isset($_POST['hobbies']) && in_array("Music", $_POST['hobbies'])) echo "checked"; ?>> Music
 <br>
 <input type="radio" name="gender" value="male" <?php if(isset($_POST['gender']) && $_POST['gender']=="male") echo "checked"; ?>> Male
 <input type="radio" name="gender" value="female" <?php if(isset($_POST['gender']) && $_POST['gender']=="female") echo "checked"; ?>> Female
 <br>
 <select name="course">
   <option value="BSIT" <?php if(isset($_POST['course']) && $_POST['course']=="BSIT") echo "selected"; ?>>BSIT</option>
   <option value="BSOA" <?php if(isset($_POST['course']) && $_POST['course']=="BSOA") echo "selected"; ?>>BSOA</option>
 </select>

 Reset: <input type="reset" value="Reset">
</form>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">



</body>
</html>
