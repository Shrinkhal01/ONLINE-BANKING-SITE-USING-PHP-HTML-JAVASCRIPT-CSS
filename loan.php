<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loan Application</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Loan Application</h1>
        <!-- Borrower's Form -->
        <div class="loan-form" id="borrower-form">
            <h2>Borrower's Information</h2>
            <form action="borrower.php" method="POST">
                <div class="form-group">
                    <label for="borrower_name">Name:</label>
                    <input type="text" id="borrower_name" name="borrower_name" required>
                </div>
                <div class="form-group">
                    <label for="borrower_email">Email:</label>
                    <input type="email" id="borrower_email" name="borrower_email" required>
                </div>
                <div class="form-group">
                    <label for="loan_amount">Loan Amount:</label>
                    <input type="number" id="loan_amount" name="loan_amount" required>
                </div>
                <button type="submit" name="borrower_submit">Apply for Loan</button>
            </form>
        </div>
        <!-- Lender's Form -->
        <div class="loan-form" id="lender-form">
            <h2>Lender's Information</h2>
            <form action="lender.php" method="POST">
                <div class="form-group">
                    <label for="lender_name">Name:</label>
                    <input type="text" id="lender_name" name="lender_name" required>
                </div>
                <div class="form-group">
                    <label for="lender_email">Email:</label>
                    <input type="email" id="lender_email" name="lender_email" required>
                </div>
                <div class="form-group">
                    <label for="loan_amount">Loan Amount:</label>
                    <input type="number" id="loan_amount" name="loan_amount" required>
                </div>
                <button type="submit" name="lender_submit">Lend Money</button>
            </form>
        </div>
        <style>
            body {
    font-family: Arial, sans-serif;
    background-color: #f7f7f7;
    margin: 0;
    padding: 0;
    background-image: url('lo.jpg'); /* Adding background image */
    background-size: cover; /* Ensuring the background image covers the entire page */
    background-position: center; /* Centering the background image */
    background-repeat: no-repeat;
}

.container {
    max-width: 600px;
    margin: 50px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

h1 {
    text-align: center;
    margin-bottom: 30px;
    color: #333;
}

.loan-form {
    margin-bottom: 40px;
}

h2 {
    margin-bottom: 20px;
    color: #007bff;
}

.form-group {
    margin-bottom: 20px;
}

label {
    display: block;
    font-weight: bold;
    color: #555;
}

input[type="text"],
input[type="number"],
input[type="email"] {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

button {
    display: block;
    width: 100%;
    padding: 10px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s;
}

button:hover {
    background-color: #0056b3;
}

            </style>
    </div>
</body>
</html>
