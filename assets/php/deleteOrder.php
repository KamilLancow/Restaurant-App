<?php
    include "config.php";
    
    $selected_table = $_POST['table'];
    
    $sql = "DELETE FROM info_orders WHERE Id_table = '$selected_table';";
    $sql .= "DELETE FROM list_orders WHERE Id_table = '$selected_table';";

    if ($conn->multi_query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    $conn->close();
?>