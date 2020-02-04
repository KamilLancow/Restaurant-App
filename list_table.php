<?php
    include('assets/php/session.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List Tables</title>
</head>
<body>
    <h3>This is List Tables: <?php echo $user_session ?></h3>

    <button onclick="goHome()">Go Back</button>
    <button onclick="window.location.href = 'create_order.php'">Create Order</button>
    <button onclick="toggle_deleteOrder()">Delete Order</button>
    <button onclick="window.location.href = 'list_order.php'">List Orders</button>
    
    <div id="delete_order_ui" style="height:100%;width:100%;" hidden>
        <h3>This is Delete Order: <?php echo $user_session ?></h3>
        <button onclick="toggle_deleteOrder()">Cancel</button>
        <button onclick="deleteOrder()">Confirm</button>
    </div>


    <script src="assets/js/script.js"></script>
</body>
</html>