(function(){

var tables = new Array();

$("li").click(function(){
    var num_table = $(this).children("span").text();
    if ($(this).css("color") == "rgb(0, 0, 0)" && tables.length == 0) {// add table to array
        tables.push(num_table);
        color = "blue";
        $(this).css("color", color);// TO REMOVE & do css
    } else if ($(this).css("color") != "rgb(0, 0, 0)" && tables.length == 1) {// remove table to array
        tables.splice(tables.indexOf(num_table), 1);
        color = "black";
        $(this).css("color", color);// TO REMOVE & do css
    }
});

$("#create_order").click(function () {
    if(tables.length == 1){// if user selects just one table then he can create order
        //tables.sort(function(a, b){return a-b});
        //document.cookie = "selected_tables=" + JSON.stringify(tables);
        document.cookie = "selected_table=" + tables[0];
        window.location.href = 'create_order.php';
    } else {// else user cannot create an order
        alert("Select a table!")
    }
});

$("#delete_order").click(function () {
    if (tables.length == 1) {// if user selects one table display 'delete_order' UI
        $("#delete_order_ui > p").html("Do you really want to delete the order for Table " +  tables[0] + " ?");
        $("#delete_order_ui").toggle();
    } else if(tables.length > 1){// else user cannot delete order/s
        alert("Select just one table!")
    } else {
        alert("Select one table!")
    }
});

$("#del_delete").click(function () {
    alert("order deleted.");// TO DO: delete order from db
    leave_deleteOrderUI();
});

$("#del_cancel").click(function () { 
    $("#delete_order_ui").toggle();
});

function leave_deleteOrderUI() {
    $("#delete_order_ui").toggle();
    tables.pop();
    $('li[style="color: blue;"]').css("color", "black");
}

})();
