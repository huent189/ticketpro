$(document).ready(function(){
    var expire_time = $('meta[name="expire-time"]').attr('content');
    var clock_func = setInterval(function(){
        var current_time = Math.floor((new Date).getTime() / 1000);
        var diff_time = expire_time - current_time;
        if(diff_time <= 0){
            clearInterval(clock_func);
        }
        $('#s').html(diff_time % 60);
        diff_time = Math.floor(diff_time / 60);
        $('#m').html(diff_time % 60);
    }, 1000);
})
