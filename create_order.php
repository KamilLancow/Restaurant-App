<?php
    include('assets/php/session.php');
    if (isset($_COOKIE['selected_tables'])) {
        $json_tables = $_COOKIE['selected_tables'];
        $selected_tables = json_decode($json_tables);
      }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Order</title>
</head>
<body>
    <h3>This is Create Order: <?php echo $user_session ?></h3>
    <h3>
        <?php 
            echo "Table".(count($selected_tables) > 1 ? 's : ' : ' : ');
            foreach ($selected_tables as $key => $value) {
                echo ($key < (count($selected_tables)-1)) ?  $value. ", " :  $value;
            }
        ?>
    </h3>

    <button onclick="window.location.href = 'list_table.php'">Go Back</button>
    <button onclick="window.location.href = 'list_order.php'">Order</button>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    
</body>
</html>