<?php
    include('assets/php/session.php');
    if($user_session == "Cook") {
        // tabella senza i prezzi dei piatti
    }
    else {
        // tabella con i prezzi dei piatti
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Info Order</title>
</head>
<body>
    <h3>This is Info Order: <?php echo $user_session ?></h3>
    <button onclick="window.location.href = 'list_order.php'">Go Back</button>
</body>
</html>