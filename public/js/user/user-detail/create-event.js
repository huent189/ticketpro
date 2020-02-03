class Base
{
    constructor()
    {
        this.initEvent();
    }
    initEvent()
    {
        $(document).on('click', '#btn-add-ticket', { 'jsObject': this }, this.addTicketClass);
        $(document).on('click', '.btn-delete-ticket', { 'jsObject': this }, this.deleteTicketClass);
    }

    addTicketClass()
    {
        $('#tickets-container').append(
            '<div class="card-shadow-primary border mb-3 card card-body border-primary ticket-body">\n'+
                '<div class="row-header">\n'+
                    '<div class="title-ticket"><h6> Vé sự kiện</h6></div>\n'+
                    '<span class="btn-delete-ticket btn"><i class="fas fa-trash-alt"></i></span>\n'+
                '</div>\n'+
                '<div class="form-row">\n'+
                    '<div class="col-md-6">\n'+
                        '<div class="position-relative form-group"><label  class="">Tên vé</label><input name="ticketName[]" type="text" class="form-control"></div>\n'+
                    '</div>\n'+
                    '<div class="col-md-3">\n'+
                        '<div class="position-relative form-group"><label  class="">Giá vé</label><input name="ticketPrice[]" type="text"placeholder="(VNĐ)" class="form-control"></div>\n'+
                    '</div>\n'+
                    '<div class="col-md-3">\n'+
                        '<div class="position-relative form-group"><label  class="">Tổng số lượng vé</label><input name="ticketNum[]"  type="number" class="form-control"></div>\n'+
                    '</div>\n'+ 
                    '<div class="position-relative form-group col-md-12"><label for="exampleText" class="">Lợi ích</label><textarea name="benefit[]"  class="form-control" placeholder="Mỗi lợi ích trong một cặp <li> </li>"></textarea></div>\n'+
                    '</div>\n'+                           
                '</div>\n'+
            '</div'
        );
    }

    deleteTicketClass()
    {
        var e=this;
        console.log(this.parentNode.parentNode.remove());
        return this;
    }
}

 function readURL(input, position) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $(position).attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}

$(document).ready(function () {
    $("#input_cover_image").change(function () {
        readURL(this,'#cover_image');
    });
    $("#input_ticket_map").change(function () {
        readURL(this,'#ticket_map');
    });$("#input_organizer_avatar").change(function () {
        readURL(this,'#organizer_image');
    });
    new Base();
});
