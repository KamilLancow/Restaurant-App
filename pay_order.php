<?php
    include('assets/php/session.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pay Order</title>
</head>
<body>
    <h3>This is Pay Order: <?php echo $user_session ?></h3>
    <button onclick="window.location.href = 'list_order.php'">Go Back</button>
    <button onclick="window.location.href = 'list_table.php'">Confirm Payment</button>
</body>
</html>