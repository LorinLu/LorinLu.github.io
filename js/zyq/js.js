/**
 * Created by Administrator on 2017/9/10.
 */

//控制左侧固定栏的出现与消失
var erweimaBtn=document.getElementById("erweimaBtn");
var erweimaTOP=document.getElementById("erweimaTOP");
erweimaBtn.onclick=function(){
    erweimaTOP.style.display="block";
}
erweimaTOP.onclick=function(){
    erweimaTOP.style.display="none";

}
//控制container中点击图标的出现与消失

$(".container-bottom .xiaoshi").on("click",function(){
    $(".container-bottom>div.current").removeClass("current");
})

$(function(){
    $(".container-top>a").on("click",function(){
        $(this).name = true;
        $(".container-bottom>div.current").removeClass("current");
        console.log($(".container-bottom>div").eq($(this).index()));
        if($(this).name==true){
            console.log(1);
            //$(".container-bottom>div.current").removeClass("current");
        }else{
            $(".container-bottom>div").eq($(this).index()).addClass("current");
        }
        //$(".container-bottom>div").eq($(this).index()).className.indexOf()
        //$(".container-bottom>div").each(function(index,element){
        //    $(element).hide();
        //});
        //$(".container-bottom>div").eq($(this).index()).toggle();
    });
});


//获取图片移动的距离和位置

function animate(element,target) {
    clearInterval(element.timer);
    element.timer = setInterval(function () {
        var currentLeft = element.offsetLeft;
        var step = 40;
        currentLeft += currentLeft <= target ? step : -step;
        element.style.left = currentLeft + "px";
        if (Math.abs(target - currentLeft) <= step) {
            clearInterval(element.timer);
            element.style.left = target + "px";
        }
    }, 20);
}


var inner = document.getElementById("inner");
var ul = inner.children[0];
var arrow = document.getElementsByClassName("arrow")[0];
var leftBtn = arrow.children[0];
var rightBtn = arrow.children[1];
var imgWidth = inner.offsetWidth;
var currentIndex = 0;


//右点击函数封装

//leftBtn.onclick=moveLeft;
//rightBtn.onclick=moveright;
//鼠标停留在左右点击按钮上，让图片停止滚动，因为按钮没有卸载轮播图片之上
leftBtn.onmouseover=function(){
    clearInterval(timer);
}
rightBtn.onmouseover=function(){
    clearInterval(timer);
}



leftBtn.onclick=function(){

    moveLeft();
};
rightBtn.onclick=function(){

    moveright();
};


function moveLeft() {
    if (currentIndex == 0) {
        currentIndex = ul.children.length - 1;
        ul.style.left = currentIndex * imgWidth * -1 + "px";

    }
    //最后一张与第一张相同
    currentIndex--;
//        console.log(currentIndex);
    var target = imgWidth * currentIndex * -1;
    animate(ul, target);

}

function moveright() {
    if (currentIndex == ul.children.length - 1) {
        currentIndex = 0;
        ul.style.left = 0;
    }
    currentIndex++;
    var target = imgWidth * currentIndex * -1;
    animate(ul, target);
}


var timer=setInterval(function(){
    moveright();
},1000);
inner.onmouseover = function(){
    //停止自动轮播
    clearInterval(timer);
}
inner.onmouseout = function(){
        //恢复自动轮播
        timer= setInterval(moveright,1600);
    }



