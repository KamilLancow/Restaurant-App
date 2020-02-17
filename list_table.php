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
    <ul style="list-style-type:none">
        <?php
        for ($x = 1; $x <= 30; $x++) {
            echo "<li style='color: black;'>Table <span>". $x. "</span></li>";
        }
        ?>
    </ul>

    <button onclick="window.location.href = 'assets/php/logout.php'">Go Back</button>
    <button id="create_order">Create Order</button>
    <button id="delete_order">Delete Order</button>
    <button onclick="window.location.href = 'list_order.php'">List Orders</button>
    
    <div id="delete_order_ui" hidden>
        <h3>This is Delete Order:</h3>
        <p></p>
        <button id="del_delete">Delete Order</button>
        <button id="del_cancel">Cancel</button>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="assets/js/list_table.js"></script>
</body>
</html>