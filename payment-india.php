<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Payment Page</title>
</head>
<body>
    <h1>Payment Page</h1>
    <form action="process-payment.php" method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Registered Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="mobile">Mobile Number:</label>
        <input type="text" id="mobile" name="mobile" required><br><br>

        <label for="amount">Amount:</label>
        <input type="number" id="amount" name="amount" required><br><br>

        <button type="submit">Submit</button>
    </form>
</body>
</html>
