<?php
    session_start();
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $whoIs = $_POST["whoIs"];
        $_SESSION['user'] = $whoIs;
        ($whoIs == "Cook") ? header("Location: list_order.php") : header("Location: list_table.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
</head>
<body>
    <h3>This is Index</h3>
    <form action="" method="POST">
        <button name="whoIs" value="Cook">Cook</button>
        <button name="whoIs" value="Waiter">Waiter</button>
    </form>
</body>
</html>