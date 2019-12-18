
function addTiketClass()
{
    $('#ticket-classes').append(
        '<li>\n' +
        '                                            <div class="media" style="margin-bottom: 10px">\n' +
        '                                                <div class="media-body">\n' +
        '                                                    <p class="mt-0">Tên vé</p>\n' +
        '                                                    <div class="space"></div>\n' +
        '                                                    <input class="form-control form-control-lg" type="text" placeholder="&nbsp;Tên loại vé" name="ticketClassName[]" required>\n' +
        '                                                </div>\n' +
        '                                            </div>\n' +
        '                                            <table class="table">\n' +
        '                                                <tbody>\n' +
        '                                                <tr>\n' +
        '                                                    <td>Giá vé (VND) <span><br><br></span> <input type="number" placeholder="0" name="price[]" required></td>\n' +
        '                                                    <td>Tổng số lượng vé <span><br><br></span> <input type="number" placeholder="0" name="numOfTicket[]"required></td>\n' +
        '                                                </tr>\n' +
        '                                                <tr>\n' +
        '                                                    <td>Ngày bắt đầu bán</td>\n' +
        '                                                    <td>\n' +
        '                                                        <div class="input-group " style="margin-bottom: 10px;">\n' +
        '                                                            <input type="datetime-local" class="form-control" id="basic-url" aria-describedby="basic-addon3"name="timeStartSell[]"required>\n' +
        '                                                        </div>\n' +
        '                                                    </td>\n' +
        '                                                </tr>\n' +
        '                                                <tr>\n' +
        '                                                    <td> Ngày kết thúc bán</td>\n' +
        '                                                    <td>\n' +
        '                                                        <div class="input-group " style="margin-bottom: 10px;">\n' +
        '                                                            <input type="datetime-local" class="form-control" id="basic-url" aria-describedby="basic-addon3"name="timeEndSell[]" required>\n' +
        '                                                        </div>\n' +
        '                                                    </td>\n' +
        '                                                </tr>\n' +
        '                                                <tr>\n' +
        '\n' +
        '                                                    <div class="input-group">\n' +
        '                                                        <div class="input-group-prepend">\n' +
        '                                                            <span class="input-group-text">Thêm mô tả vé</span>\n' +
        '                                                        </div>\n' +
        '                                                        <textarea class="form-control" aria-label="With textarea" name="description[]"></textarea>\n' +
        '                                                    </div>\n' +
        '                                                </tr>\n' +
        '                                                </tbody>\n' +
        '                                            </table>\n' +
        '                                        </li>'
    );
}

function deleteTicketClass() {
}