$(function () {
    let pri=5;
    let now=0;
    let next=1;
    let z=2;
    let di;
    $('.banRight').click(function () {
        z++
        di=now+2;
        if(now==4){
            di=0
        }
        if(now==5){
            di=1
        }
        $('.ban>ul>li').eq(next).css({"transform":"translate3d(220px,0px,0px)","z-index":`${z}`});
        $('.ban>ul>li').eq(pri).css({"transform":"translate3d(220px,0px,-300px)"});
        $('.ban>ul>li').eq(now).css({"transform":"translate3d(-150px,0px,-300px)"})

        $('.ban>ul>li').eq(di).css({"transform":"translate3d(565px,0px,-300px)"})
        pri++;
        now++;
        next++;
        if(pri==6){
            pri=0
        }
        if(next==6){
            next=0
        }
        if(now==6){
            now=0
        }
    })
    $('.banLeft').click(function () {
        console.log(now)
        z++
        di=now-2;
        if(di==-1){
            di=5
        }if(di==-2){
            di=4
        }
        $('.ban>ul>li').eq(pri).css({"transform":"translate3d(220px,0px,0px)","z-index":`${z}`});
        $('.ban>ul>li').eq(next).css({"transform":"translate3d(220px,0px,-300px)"});
        $('.ban>ul>li').eq(di).css({"transform":"translate3d(-150px,0px,-300px)"})

        $('.ban>ul>li').eq(now).css({"transform":"translate3d(565px,0px,-300px)"})
        pri--;
        now--;
        next--;
        if(pri==-1){
            pri=5
        }
        if(next==-1){
            next=5
        }
        if(now==-1){
            now=5
        }

    })
})