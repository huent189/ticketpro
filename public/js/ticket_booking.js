sum = 0;
function changeTicket (self,ticket_class, val){
    var display_field = $('#class_'+ticket_class + "_val");
    var current = parseInt(display_field.html());
    console.log(current);
    current = current + val;
    if((current >= display_field.attr("min") && current <= display_field.attr("max"))){
        display_field.html(current);
        sum +=display_field.attr("price") * val;
        if($("#info_"+ticket_class).length){
            $("#info_"+ticket_class).html(current);
            $("#sum_"+ticket_class).html(current * display_field.attr("price") + ' VNĐ');
        } else {
            var tmp = $("#ticket_info").html();
            tmp += '<tr>\n<th scope="row">'+ ($("#ticket_info").children().length + 1)+'</th>\n<td>'+$('#class_'+ticket_class + "_type").html()
            + '</td>\n<td id="info_'+ticket_class+'">'
            + current +'</td>\n<td id="sum_'+ticket_class+'">' + formatCurrency(current * display_field.attr("price")) +' VND</td>\n</tr>\n';
            $("#ticket_info").html(tmp);
        }
        $("#sum_all").html(formatCurrency(sum) + " VND");
    }
}
function formatCurrency(num) {
    return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1.')
  }

function submitTicket() {
    // var tickets = $("td[id*='info_']");
    var data = [];
    $("td[id*='info_']").each(function (index) {
        data.push({'ticket-class': $(this).attr('id').substring(5), 'quantity':$(this).html()})
    });
    console.log('hera');
    
    $.ajax({
        url:  'validate-tickets',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: "POST",
        data: JSON.stringify({'_token': $('meta[name="csrf-token"]').attr('content'), "tickets": data}),
        cache: false,
        contentType: 'application/json; charset=utf-8',
        processData: false,
        success: function (response)
        {
            console.log(response);
            window.location.href = response.redirectURL;
        }
    });
}