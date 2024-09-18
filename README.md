# Payment Page

This is a simple PHP-based payment page that simulates a payment process where users can enter their details and make a payment. The page includes a countdown timer and displays a payment confirmation message after successful submission.

## Features

- **Countdown Timer**: A 40-second countdown that disables the form if time expires.
- **Payment Form**: Users can enter their name, card details, expiry date, CVV, and amount.
- **Masked Card Number**: Displays only the last 4 digits of the card number for security.
- **Payment Confirmation**: Displays a confirmation of the payment with details entered by the user.

## Installation & Usage

1. Clone the repository or copy the code:
    ```bash
    git clone <repository_url>
    ```

2. Place the `.php` file into your web server's document root:
    - For **XAMPP**, place it in `htdocs`
    - For **WAMP/LAMP**, place it in `www`

3. Start your local server and navigate to the page:
    ```bash
    http://localhost/payment.php
    ```

4. Fill in the payment details in the form and submit.

## Prerequisites

- A web server that supports PHP (e.g., XAMPP, WAMP, or LAMP).
- A browser to view the page.

## How It Works

1. The page loads with a 40-second countdown timer.
2. Users fill out the payment form with their name, card details, and amount.
3. Upon submission, the form is processed by PHP and a confirmation message is displayed.
4. If the countdown timer reaches zero, the form is hidden and the text "Time expired" is shown.

## Code Breakdown

- **HTML**: Creates the form structure and styles the page.
- **PHP**: Processes the form submission, simulates payment, and displays the confirmation message.
- **JavaScript**: Manages the 40-second countdown timer.

## Form Fields

- **Name**: The name of the cardholder.
- **Card Number**: The card number entered by the user.
- **Expiry Date**: The expiry date of the card.
- **CVV**: The security code (3 digits).
- **Amount**: The amount to be paid.

## License

This project is open-source and free to use for educational purposes. No warranties are provided.

