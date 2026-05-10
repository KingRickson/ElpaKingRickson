<?php
// Display submitted data with validation
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

if (!empty($_GET["password"])) {
    echo "Password: " . htmlspecialchars($_GET['password']) . "<br>";
}

if (isset($_GET["gender"])) {
    echo "Gender: " . htmlspecialchars($_GET['gender']) . "<br>";
}

if (isset($_GET["course"])) {
    echo "Course: " . htmlspecialchars($_GET['course']) . "<br>";
}

if (isset($_GET["text"])) {
    echo "Motto: " . htmlspecialchars($_GET['text']) . "<br>";
}

if (!empty($_GET["hobbies"])) {
    echo "Hobbies: " . implode(", ", array_map("htmlspecialchars", $_GET["hobbies"])) . "<br>";
}
?>
