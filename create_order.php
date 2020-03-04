<?php
    include('assets/php/session.php');

    if (isset($_COOKIE['selected_table']))
        $selected_table = $_COOKIE['selected_table'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Order</title>
    <style>
        /** TEMPORARY */
        ul{
            list-style-type:none
        }
        li>img, li>span, li>p {
            display: inline-block;
        }
        li>span>p {
            margin: 5px;
        }
        img{
            width: 20px;
            height: auto;
        }
        li>.id_dish, #order_div {
            display: none;
        }
    </style>
</head>
<body>
    <h3>This is Create Order: <?php echo $user_session ?></h3>
    <h3>
        <?php 
            echo "Table: " .$selected_table;
        ?>
    </h3>
    <ul id="list_dishes">
        <?php
        /** here the dishes are loaded from database */
        include('assets/php/getDishes.php');
        ?>
    </ul>
    <ul id="list_selected_dishes">
        <!-- the selected dishes are added here using js -->
        <p>Select your dishes</p>
    </ul>
    <p id="total_price">Total: <span>0</span> $</p>
    <button onclick="window.location.href = 'list_table.php'">Go Back</button>
    <button id="order_btn">Order</button>
    <div id="order_div"></div>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script type="text/javascript">
        var selected_table = '<?php echo $selected_table; ?>';
    </script>
    <script src="assets/js/create_order.js"></script>
</body>
</html>