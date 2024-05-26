<?php

include 'partials/_dbconnect.php';
$sql = "SELECT * FROM `transactions`"; // Corrected table name
$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/table.css">
    <title>TRANSACTION LOG</title>
</head>

<body>
    <?php include 'partials/_navbar.php' ?>

    <div class="cover"></div>

    <h1>TRANSACTION &nbsp; LOG</h1>
    <div class="all_users" style="height: 500px;">
        <table>
            <tr>
                <th>ID</th>
                <th>SENDER</th>
                <th>RECEIVER</th>
                <th>AMOUNT</th>
                <th>DATE & TIME</th>
            </tr>
            <?php
            if ($result && mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $id = isset($row['id']) ? $row['id'] : '';
                    $sender = isset($row['sender_id']) ? $row['sender_id'] : '';
                    $receiver = isset($row['receiver_id']) ? $row['receiver_id'] : '';
                    $amount = isset($row['amount']) ? $row['amount'] : '';
                    $time = isset($row['time']) ? $row['time'] : '';
                    echo "
                    <tr>
                        <td>$id</td>
                        <td>$sender</td>
                        <td>$receiver</td>
                        <td>$amount</td>
                        <td>$time</td>
                    </tr>
                    ";
                }
            } else {
                echo "<tr><td colspan='5'>No transactions found</td></tr>";
            }
            ?>
        </table>
    </div>

    <?php include 'partials/_footer.php' ?>
    <!-- script -->
    <script src="js/navscroll.js"></script>
</body>

</html>
