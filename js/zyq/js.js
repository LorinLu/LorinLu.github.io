/**
 * Created by Administrator on 2017/9/10.
 */

//�������̶����ĳ�������ʧ
var erweimaBtn=document.getElementById("erweimaBtn");
var erweimaTOP=document.getElementById("erweimaTOP");
erweimaBtn.onclick=function(){
    erweimaTOP.style.display="block";
}
erweimaTOP.onclick=function(){
    erweimaTOP.style.display="none";

}
//����container�е��ͼ��ĳ�������ʧ

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


//��ȡͼƬ�ƶ��ľ����λ��

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


//�ҵ��������װ

//leftBtn.onclick=moveLeft;
//rightBtn.onclick=moveright;
//���ͣ�������ҵ����ť�ϣ���ͼƬֹͣ��������Ϊ��ťû��ж���ֲ�ͼƬ֮��
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
    //���һ�����һ����ͬ
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
    //ֹͣ�Զ��ֲ�
    clearInterval(timer);
}
inner.onmouseout = function(){
        //�ָ��Զ��ֲ�
        timer= setInterval(moveright,1600);
    }



