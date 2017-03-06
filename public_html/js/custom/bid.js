/**
 * @author JKetelaar
 */
var chart;
$(document).ready(function () {
    $('#price').attr('min', $("#min_value").val());
    $('#price').attr('max', $("#max_value").val());

    $('#bidform').on('submit', function (e) {
        $("#error-box-wrapper").hide();

        e.preventDefault();
        var price = $("#price").val();
        var amount = $("#amount").val();

        $.post("actions.php?action=bid",
            {
                price: price,
                amount: amount,
                venture: $("#venture_id").val()
            },
            function (data, status) {
                if (data == "correct"){
                    location.href = "thanks.php?id=" + $("#venture_id").val();
                }else{
                    alert(data);
                }
            });
    });

    chart = new CanvasJS.Chart("chartContainer", {
        title: {
            text: "Live Data"
        },
        axisX: {
            title: "Price per share"
        },
        axisY: {
            title: "Amount of shares"
        },
        data: [{
            type: "line",
            dataPoints: []
        }]
    });
    chart.render();
    load();

});

function showError(message) {
    $("#error-box").text(message);
    $("#error-box-wrapper").show();
}

function load(){

    var data = {
        id : $("#venture_id").val()
    };
    var accountFunctions = {
        "parse": "parse"
    };
    request("actions.php?action=totalgraph", data, accountFunctions);
    setTimeout("load()", 5000);
}

function parse(data){
    chart.options.data[0].dataPoints = data;
    chart.render();
}