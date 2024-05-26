<?php
// Include your database connection file here
include 'partials/_dbconnect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["borrower_submit"])) {
    // Retrieve form data
    $borrower_name = $_POST['borrower_name'];
    $borrower_email = $_POST['borrower_email'];
    $loan_amount = $_POST['loan_amount'];

    // Insert data into the borrowers table
    $sql = "INSERT INTO borrowers (borrower_name, borrower_email, loan_amount) VALUES ('$borrower_name', '$borrower_email', '$loan_amount')";

    // Execute the SQL query
    // Assuming $conn is your database connection object
    if ($conn->query($sql) === TRUE) {
        echo "Borrower information added successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>
