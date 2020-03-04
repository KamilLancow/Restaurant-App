<?php
    include("config.php");
    
    $info_order = json_decode($_POST['array'], true);
    $selected_table = $_POST['table'];
    
    $sql = "INSERT INTO list_orders (Id_table) VALUES ('$selected_table');";
    for ($i=0; $i < count($info_order); $i++) { 
        $id_dish = $info_order[$i][0];
        $quantity = $info_order[$i][1];
        $sql .= "INSERT INTO info_orders (Id_table, Id_dish, Quantity) VALUES ('$selected_table', '$id_dish', '$quantity');";
    }

    if ($conn->multi_query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>