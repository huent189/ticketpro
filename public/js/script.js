$('input').addClass('border-blue')

$('input').blur(function () {
    var value = this.value;
    if (!value) {
        $(this).removeClass('border-blue');
        $(this).addClass('border-red');
    }
    else  {
        $(this).removeClass('border-red');
    }
});
function getAcc(){
    var value = $('.input-acc').val();
    return value;
}
function getPass(){
    var value = $('.input-pass').val();
    return value;
}
$('.btn').click(function(event){
    event.preventDefault() ;
    if(getAcc()=="admin" && getPass()== '1234')
    {
       alert("Đăng nhập thành công")
    }
    else if((getPass()==null || getPass() != "1234") && (getAcc()!= "admin"|| getAcc() == null))
    {
        $(".notifi-error span").text("Tài khoản hoặc mật khẩu không chính xác!") 
    }
   
})
