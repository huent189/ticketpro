function changeTicket (self,ticket_class, val){
    var display_field = $('#'+ticket_class + "_val");
    var current = parseInt(display_field.val());
    current = current + val;
    console.log(current);
    if((current >= display_field.attr("min") && current <= display_field.attr("max"))){
        display_field.val(current);
        if($("#info_"+ticket_class).length){
            $("#info_"+ticket_class).html(current);
            $("#sum_"+ticket_class).html(current * display_field.attr("price"));
        } else {
            var tmp = $("#ticket_info").html();
            tmp += '<tr>\n<th scope="row">'+ ($("#ticket_info").children().length + 1)+'</th>\n<td>'+ticket_class
            + '</td>\n<td id="info_'+ticket_class+'">'
            + current +'</td>\n<td id="sum_'+ticket_class+'">' + (current * display_field.attr("price")) +' VND</td>\n</tr>\n';
            $("#ticket_info").html(tmp);
        }
        console.log($("#sum_*"));
        
    }
}