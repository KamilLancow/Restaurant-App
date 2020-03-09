(function(){

    /** The selected dish from #list_dishes is added to #list_selected_dishes */
    $("#list_dishes li").click(function () { 
        $("#list_selected_dishes").append("<li><button class='dish_delete'>x</button>" + $(this).html() + 
            "<span> <button class='dish_substract' disabled>-</button> <p class='quantity'>x<span>1</span></p> <button class='dish_add'>+</button> </span> <p class='combined_price'><span>"+ $(this).find(">p span").text() +"</span> $</p></li>");
        UpdateTotalPrice();
        ToggleText();
    });

    /** Delete the dish from #list_selected_dishes */
    $("#list_selected_dishes").on('click', ".dish_delete", function () {
        $(this).parent().remove();
        UpdateTotalPrice();
        ToggleText();
    });

    /** Decrease quantity of the dish*/
    $("#list_selected_dishes").on('click', ".dish_substract", function () {
        element_li = $(this).parent().parent();
        if(element_li.find(".quantity span").text() == "2")
            element_li.find(".dish_substract").attr("disabled", "");
    
        UpdateQuantity("-", element_li);
        UpdateTotalPrice();
    });

    /** Increase quantity of the dish*/
    $("#list_selected_dishes").on('click', ".dish_add", function () {
        element_li = $(this).parent().parent();
        if(element_li.find(".quantity span").text() == "1")
            element_li.find(".dish_substract").removeAttr("disabled");
        
        UpdateQuantity("+", element_li);
        UpdateTotalPrice();
    });

    function UpdateQuantity(operation, element) {
        var base_price = element.find(".base_price span").text();
        var quantity = element.find(".quantity span").text();
        if (operation == "+")
            element.find(".quantity span").text(++quantity);
        else if (operation == "-")
            element.find(".quantity span").text(--quantity);
        element.find(".combined_price").html("<span>" + base_price * quantity + "</span> $");
    }

    function UpdateTotalPrice() {
        var total_price = 0;
        $("#list_selected_dishes li .combined_price span").each(function () { 
            total_price+= parseFloat($(this).text());
        });
        $("#total_price span").text(total_price);
    }

    function ToggleText() {
        if ($("#total_price span").text() != "0"){
            // delete text from list
            $("#list_selected_dishes > p").remove();
        } else {
            // add text to list
            $("#list_selected_dishes").html("<p>Select your dishes.</p>");
        }
    }
    
    $("#order_btn").click(function () { 
        if ($("#list_selected_dishes > p").text() == "Select your dishes") {
            alert("Select at least 1 dish.");
        } else {
            var info_order = new Array();
            $("#list_selected_dishes > li").each(function (index, element) {
                info_order[index] = new Array(2);
                info_order[index][0] = $(this).find(".id_dish").text();
                info_order[index][1] = $(this).find(".quantity span").text();
            });
    
            $("#order_div").load('./assets/php/createOrder.php',{table: selected_table, array: JSON.stringify(info_order)}, function() {
                window.location.href = 'list_order.php';
            });
        }
    });


})();