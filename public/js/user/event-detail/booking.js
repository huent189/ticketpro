$(document).ready(function() {
    stickBookingDetail();
});
function stickBookingDetail()
{
    var pos = $('#booking_detailx').position();
    $(window).scroll(function(){
        var postScroll = $(document).scrollTop()
        if(parseInt(postScroll)-165 > parseInt(pos.top))
        {            
            $('#booking_detailx').addClass('fixed');
        }
        else
        {
            $('#booking_detailx').removeClass('fixed');
        }
    });
}

var sum = 0;
function changeTicket(self,ticket_class, val)
{
    var display_field = $('#class_'+ticket_class + "_val");
    var current = parseInt(display_field.html());
    console.log(current);
    current = current + val;
    if((current >= display_field.attr("min") && current <= display_field.attr("max"))){
        display_field.html(current);
        sum +=display_field.attr("price") * val;
        console.log($("#number_of_"+ticket_class));
        if($("#number_of_"+ticket_class).length){
            $("#number_of_"+ticket_class).html(current);
            $("#sum_"+ticket_class).html(current * display_field.attr("price") + ' VNĐ');
        } 
        else {
            var tmp = $("#ticket_info").html();
            tmp += '<tr><td>'+$('#class_'+ticket_class + "_type").html()
            + '</td>\n<td id="number_of_'+ticket_class+'">'
            + current +'</td>\n<td id="sum_'+ticket_class+'">' + formatCurrency(current * display_field.attr("price")) +' VND</td>\n</tr>\n';
            $("#ticket_info").html(tmp);
        }
        $("#sum_all").html(formatCurrency(sum) + " VND");
    }

}

function formatCurrency(num) {
    return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1.')
  }