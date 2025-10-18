<?php
// Database connection
$conn = new mysqli('localhost', 'root', '', 'database_name');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["image"])) {
    $name = $conn->real_escape_string($_POST['name']);
    $age = $conn->real_escape_string($_POST['age']);

    // Image upload
    $targetDir = "./uploads/";
    $fileName = basename($_FILES["image"]["name"]);
    $targetFilePath = $targetDir . time() . "_" . $fileName; // avoid duplicate names

    if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath)) {
        // Insert name and image path into database
        $sql = "INSERT INTO users (name, age, image_path) VALUES ('$name','$age', '$targetFilePath')";

        if ($conn->query($sql) === TRUE) {
            echo "Name and image saved successfully.";
        } else {
            echo "Database Error: " . $conn->error;
        }
    } else {
        echo "Error uploading the image.";
    }
}

$conn->close();
?>
<form method="post" enctype="multipart/form-data">
    Name: <input type="text" name="name" required><br><br>
    Age: <input type="text" name="age" required>
    Upload Image: <input type="file" name="image" accept="image/*" required><br><br>
    <button type="submit">Save</button>
</form>

