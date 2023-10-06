//php code for make payment
<!DOCTYPE html>
<html>
<head>
    <title>Payment Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .payment-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            text-align: center;
            max-width: 400px;
            width: 100%;
        }

        h1 {
            color: #4CAF50;
        }

        #countdown {
            font-size: 18px;
            color: #333;
        }

        form {
            margin-top: 20px;
        }

        label {
            display: block;
            margin-bottom: 10px;
            color: #333;
            font-weight: bold;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        button[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="payment-container">
        <h1>Payment Page</h1>
        <div id="countdown">Time remaining: <span id="countdown-display">40 seconds</span></div>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Simulate a successful payment (in a real scenario, you would integrate a payment gateway here)
            $name = $_POST["name"];
            $cardNumber = $_POST["cardNumber"];
            $expiry = $_POST["expiry"];
            $cvv = $_POST["cvv"];
            $amount = $_POST["amount"];

            // Display payment details
            echo "<h2>Payment Successful</h2>";
            echo "<p>Name: $name</p>";
            echo "<p>Card Number: **** **** **** " . substr($cardNumber, -4) . "</p>";
            echo "<p>Expiry Date: $expiry</p>";
            echo "<p>CVV: ***</p>";
            echo "<p>Amount: $amount</p>";
        } else {
        ?>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required><br>

            <label for="cardNumber">Card Number:</label>
            <input type="text" id="cardNumber" name="cardNumber" required><br>

            <label for="expiry">Expiry Date:</label>
            <input type="text" id="expiry" name="expiry" required><br>

            <label for="cvv">CVV:</label>
            <input type="text" id="cvv" name="cvv" required><br>

            <label for="amount">Amount:</label>
            <input type="text" id="amount" name="amount" required><br>

            <button type="submit">Make Payment</button>
        </form>
        <?php
        }
        ?>
    </div>

    <script>
        // Countdown timer for 40 seconds
        var countdown = 40;
        var countdownDisplay = document.getElementById('countdown-display');

        function updateCountdown() {
            countdownDisplay.innerText = countdown + ' seconds';
            if (countdown > 0) {
                countdown--;
                setTimeout(updateCountdown, 1000);
            } else {
                countdownDisplay.innerText = 'Time expired';
                document.forms[0].style.display = "none";
            }
        }

        // Start the countdown
        updateCountdown();
    </script>
</body>
</html>
