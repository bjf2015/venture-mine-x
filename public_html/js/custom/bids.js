/**
 * @author JKetelaar
 */
$(document).ready(function () {
    loadUpdates();
});

function loadUpdates(){

    var data = {
        last : Math.floor(Date.now() / 1000)
    };
    var accountFunctions = {
        "parseUpdates": "parseUpdates"
    };
    request("actions.php?action=updates", data, accountFunctions);
    setTimeout("loadUpdates()", 2500);
}

function parseUpdates(data){
    if (data['result'] == 1){
        $("#newbidtext").text("Someone bid " + data['amount'] + " shares, each for $" + data['price'] + ", on " + data['venture']);
        $("#newbidlink").attr('href', 'item.php?id=' + data['venture_id']);
        $('#slide-bottom-popup').modal('show');
    }
}

function request(url, dataValues, functions){
    var request = $.ajax({
        url: url,
        type: "POST",
        data: dataValues,
        dataType: "json",
        success: function(data) {
            $.each(functions, function(key, functionValue){
                if (functionValue in window) {
                    window[functionValue](data);
                }
            });
            return data;
        }
    });

    request.error(function (jqXHR, textStatus) {
        console.log(textStatus);
        alert("Something went wrong, either reload the page or contact an administrator.")
    });
}