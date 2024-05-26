<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Money Transfer - UPI</title>
    <link rel="stylesheet" href="styles.css">
    <!-- Include Instascan JavaScript and CSS -->
    <script src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
            background-image: url('up.png'); /* Adding background image */
            background-size: cover; /* Ensuring the background image covers the entire page */
            background-position: center; /* Centering the background image */
            background-repeat: no-repeat; /* Preventing the background image from repeating */
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.9); /* Adding slight transparency */
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
            color: #333;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: bold;
            color: #555;
        }

        .input-wrapper {
            position: relative;
        }

        input[type="text"],
        input[type="number"],
        textarea {
            width: calc(100% - 120px);
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button {
            position: absolute;
            top: 70%;
            right: 50;
            transform: translateY(-50%);
            padding: 10px 15px;
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

        /* Scanner container */
        .scanner-container {
            display: none;
            margin-top: 20px;
            border: 2px solid #007bff;
            border-radius: 8px;
            overflow: hidden;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Online Money Transfer - UPI</h1>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
            <div class="form-group">
                <label for="upi_id">Recipient's UPI ID:</label>
                <input type="text" id="upi_id" name="upi_id" required>
                <!-- Button to trigger the scanner -->
                <button type="button" onclick="scanUPICode()">Scan UPI ID</button>
            </div>
            <div class="form-group">
                <label for="amount">Amount (INR):</label>
                <input type="number" id="amount" name="amount" required>
            </div>
            <div class="form-group">
                <label for="remarks">Remarks:</label>
                <textarea id="remarks" name="remarks"></textarea>
            </div>
            <button type="submit" name="submit">Transfer</button>
        </form>
        <!-- Scanner container -->
        <video id="scanner" style="display:none;"></video>
    </div>

    <script>
        function scanUPICode() {
            // Get the scanner container
            var scanner = document.getElementById('scanner');
            
            // Initialize Instascan
            let scannerObj = new Instascan.Scanner({ video: scanner });
            scannerObj.addListener('scan', function (content) {
                // Once a code is scanned, set it as the UPI ID input value
                document.getElementById('upi_id').value = content;
                // Stop the scanner
                scannerObj.stop();
                // Hide the scanner container
                scanner.style.display = 'none';
            });

            // Start the scanner
            Instascan.Camera.getCameras().then(function (cameras) {
                if (cameras.length > 0) {
                    scannerObj.start(cameras[0]);
                    scanner.style.display = 'block'; // Show the scanner container
                } else {
                    console.error('No cameras found.');
                }
            }).catch(function (e) {
                console.error(e);
            });
        }
    </script>
</body>
</html>
