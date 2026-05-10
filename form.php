<!DOCTYPE html>
<html>
<head>
    <title>Lab 19 Form</title>
</head>
<body>

<form method="GET" action="process.php">
    Name: <input type="text" name="name"><br>
    Age: <input type="number" name="age"><br>
    Email: <input type="text" name="email"><br>
    Password: <input type="password" name="password"><br>
    Motto: <input type="text" name="text"><br>

    Hobbies:
    <input type="checkbox" name="hobbies[]" value="Reading"> Reading
    <input type="checkbox" name="hobbies[]" value="Coding"> Coding
    <input type="checkbox" name="hobbies[]" value="Cooking"> Cooking
    <input type="checkbox" name="hobbies[]" value="Sports"> Sports
    <input type="checkbox" name="hobbies[]" value="Music"> Music
    <br>

    Gender:
    <input type="radio" name="gender" value="male"> Male
    <input type="radio" name="gender" value="female"> Female
    <br>

    Course:
    <select name="course">
        <option value="BSIT">BSIT</option>
        <option value="BSOA">BSOA</option>
    </select>
    <br><br>

    <input type="submit" value="Submit">
    <input type="reset" value="Reset">
</form>

</body>
</html>
