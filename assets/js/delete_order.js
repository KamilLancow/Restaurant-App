$("#del_delete").click(function () {
    alert("order deleted.");
    $("#delete_div").load('./assets/php/deleteOrder.php',{table: tables[0]}, function() {
        leave_deleteOrderUI();
    });
});

$("#del_cancel").click(function () { 
    $("#delete_order_ui").toggle();
});

function leave_deleteOrderUI() {
    $("#delete_order_ui").toggle();
    tables.pop();
    $('li[style="color: blue;"]').css("color", "black");
}