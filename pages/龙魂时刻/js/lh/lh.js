/**
 * Created by 抑郁的辣条 on 2017/9/12.
 */
$(function(){
    $(".news-slide .lb li").on("mouseenter",function(){
        $(".bigBigBox .bigBox.current").removeClass("current");
        $(".bigBigBox .bigBox").eq($(this).index()).addClass("current");
    });
    var timer = setInterval(function(){
        $(".imgbox > .img img").animate({
            opacity:0
        },500,function(){
            $(".imgbox > .img img").animate({
                opacity:1
            },500)
        })
    },1000);

    $(".circle > ul > li").on("click",function(){
        if($(".imgbox > .img img").attr("src")=="../images/img/ea64c710-7113-4121-aeaa-1322858e9214.jpg"){
            $(".imgbox > .img img").attr("src","../images/img/d98d8548-bcbf-45bd-b296-ddcc1697ef57.jpg");

        }else{
            $(".imgbox > .img img").attr("src","../images/img/ea64c710-7113-4121-aeaa-1322858e9214.jpg");
        }
        clearInterval(timer);
        var timer = setInterval(function(){
            $(".imgbox > .img img").animate({
                opacity:0
            },500,function(){
                $(".imgbox > .img img").animate({
                    opacity:1
                },500)
            })
        },1000);
    })

    var a = "";
    $(".content ul li").on("mouseover",function(){
        //var a = $(this).attr("data-src");
        //console.log(a);
        a = $(this).children("img").attr("src");
        //console.log(a);
        $(this).children("img").attr("src",$(this).attr("data-src"));
    })
    $(".content ul li").on("mouseout",function(){
        //console.log(a);
        $(this).children("img").attr("src",a);
    })
    var index;
    $(".hero .roles ul li").on("click",function(){
        $(".hero .lbt").children("img").eq($(this).index()).fadeIn(1000,function(){}).css("display","block");
        $(".hero .lbt").children("div").fadeIn(1000,function(){}).css("display","block");
         index= $(this).index();

    })
    $(".hero .lbt .btn-l").on("click",function(){
        $(".hero .lbt").children("img").each(function(index,element){
            $(element).css("display","");
        });
        index--;
        console.log(index);
        if(index==-1){
            index = 5;
        }
        if(index==6){
            index = 0;
        }
        $(".hero .lbt").children("img").eq(index).fadeIn(1000,function(){}).css("display","block");
    })
    $(".hero .lbt .btn-r").on("click",function(){
        $(".hero .lbt").children("img").each(function(index,element){
            $(element).css("display","");
        });
        index++;
        //console.log(index);
        if(index==-1){
            index = 5;
        }
        if(index==6){
            index = 0;
        }
        $(".hero .lbt").children("img").eq(index).fadeIn(1000,function(){}).css("display","block");
    })
            //人物介绍
    $(".hero .lbt .close").on("click",function(){
        $(".hero .lbt").children("img").fadeOut(1000,function(){});
        $(".hero .lbt div").fadeOut(1000,function(){});
    })

            //城市
    //$(".main .city .pl1").on("click",function(){
    //    $(".main .city1").children("img").css("display","block");
    //    console.log($(".main .close1"));
    //    $(".main .close1").css("display", "block")
    //})
    //
    //$(".main .city .pl2").on("click",function(){
    //    $(".main .city2").children("img").css("display","block");
    //    $(".main .close1").css("display", "block")
    //})
    //
    //$(".main .city .pl3").on("click",function(){
    //    $(".main .city3").children("img").css("display","block");
    //    $(".main .close1").css("display", "block")
    //})
    //
    //$(".main .city .pl4").on("click",function(){
    //    $(".main .city4").children("img").css("display","block");
    //    $(".main .close1").css("display", "block")
    //})
    $(".main .city a").on("click",function(){
        //console.log($(".main .bigCity .city1").eq($(this).index()));
        $(".main .bigCity .city1").eq($(this).index()).fadeIn(1000,function(){}).show();
        $(".main .close1").fadeIn(1000,function(){}).show();
    })
    $(".main .close1").on("click",function(){
        $(".main .city1").fadeOut(1000,function(){});
        $(".main .close1").fadeOut(1000,function(){});


    })

    //$(".main .close1").on("click",function(){
    //    $(".main .city1").children("img").css("display","none");
    //    $(".main .close1").css("display","none");
    //})


    window.scrollReveal = new scrollReveal();
//或者，elem 为动画元素的任何级别的父元素
//    window.scrollReveal2 = new scrollReveal({elem: document.getElementById('srcontainer')});
})



