<?php
    include('config.php');
    $sql = "SELECT Id_dish, Name, Info, Price FROM dishes";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo '<li><p class="id_dish">' .$row["Id_dish"] .'</p><img src="assets/php/getImageDish.php?id=' .$row["Id_dish"] .'" alt="">
                <span><p>' .$row["Name"] .'</p><p>' .$row["Info"] .'</p></span>
                <p class="base_price"><span>' .$row["Price"] .'</span> $</p></li>';
        }
    } else {
        echo "<li>No dishes avaible.</li>";
    }
    $conn->close();
?>