<?php
// Establish a database connection (replace with your own credentials)
$servername = "localhost";
$username = "root";
$password = "769015S";
$dbname = "expense_trackerdb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve data from the HTML form
$PersonName = $_POST['PersonName'];
$date = $_POST['date'];
$category = $_POST['category'];
$PaymentMethod = $_POST['PaymentMethod'];
$amount = $_POST['amount'];

// Insert the data into the database
$sql = "INSERT INTO expenses (PersonName, date, category, PaymentMethod, amount) VALUES ('$PersonName', '$date', '$category', '$PaymentMethod', $amount)";

if ($conn->query($sql) === TRUE) {
    echo "Expense added successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
