<?php
// Include your database connection file here
include 'partials/_dbconnect.php';


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["lender_submit"])) {
    // Retrieve form data
    $lender_name = $_POST['lender_name'];
    $lender_email = $_POST['lender_email'];
    $loan_amount = $_POST['loan_amount'];

    // Insert data into the lenders table
    $sql = "INSERT INTO lenders (lender_name, lender_email, loan_amount) VALUES ('$lender_name', '$lender_email', '$loan_amount')";

    // Execute the SQL query
    // Assuming $conn is your database connection object
    if ($conn->query($sql) === TRUE) {
        echo "Lender information added successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>
