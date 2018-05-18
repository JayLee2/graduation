$(function () {
    $('.asideNav>li>a').click(function () {
        $(this).next('ul').slideToggle();
        $(this).css({"background":"#09c"}).parent().siblings().children("a").css({"background":"none"});
        $(this).children('i').toggleClass('icon-shangjiantou1');
        $('.contont').empty();
        return false;
    })
    setInterval(function () {
        var mydate=new Date();
        var hours=mydate.getHours()<10?'0'+mydate.getHours():mydate.getHours();
        var min=mydate.getMinutes()<10?'0'+mydate.getMinutes():mydate.getMinutes();
        var sec=mydate.getSeconds()<10?'0'+mydate.getSeconds():mydate.getSeconds();
        $('.hours').html(hours);
        $('.min').html(min);
        $('.sec').html(sec);
        var week=mydate.getDay();
        var weekStr;
        switch (week){
            case 0:weekStr='星期日';break;
            case 1:weekStr='星期一';break;
            case 2:weekStr='星期二';break;
            case 3:weekStr='星期三';break;
            case 4:weekStr='星期四';break;
            case 5:weekStr='星期五';break;
            case 6:weekStr='星期六';
        }
        $('.conRight>p').html(weekStr);
        var year=mydate.getFullYear();
        var month=mydate.getMonth();
        var day=mydate.getDate();
        $('.year').html(year);
        $('.month').html(month+1);
        $('.day').html(day);
    },1000)
    $('.push').click(function () {
        $('.contont').empty();
        $('.con2').css({"display":"block"})
    })
})