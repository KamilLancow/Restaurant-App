<?php
    include('assets/php/session.php');
    if($user_session == "Cook") {
        $path_goBack = "window.location.href = 'assets/php/logout.php'";
        $btn_text = "Order Ready";
        $btn_onClick = "innerHTML = '<b>Confirmed!</b>'";
    }
    else {
        $path_goBack = "window.location.href = 'list_table.php'";
        $btn_text = "Pay";
        $btn_onClick = "window.location.href = 'pay_order.php'";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List Orders</title>
</head>
<body>
    <h3>This is List Order: <?php echo $user_session ?></h3>
    <button onclick="<?php echo $path_goBack ?>">Go Back</button>
    <button onclick="window.location.href = 'info_order.php'">Info Order</button>
    <button onclick="<?php echo $btn_onClick ?>"><?php echo $btn_text ?></button>
    
    
</body>
</html>