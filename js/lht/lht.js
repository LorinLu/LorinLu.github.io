/**
 * Created by Lorin on 2017/9/12.
 */

//����������Ч
//var txtAnim = {
//	len: 0,
//	txtDom: "",
//	arrTxt: [],
//	init: function(obj) {
//		this.obj = obj;
//		this.txtDom = obj.innerHTML.replace(/\s+/g, "");
//		this.len = this.txtDom.length;
//		obj.innerHTML = "";
//		this.addDom();
//	},
//	addDom: function() {
//		for (var i = 0; i < this.len; i++) {
//			var spanDom = document.createElement("span");
//			spanDom.innerHTML = this.txtDom.substring(i, i + 1);
//			this.obj.appendChild(spanDom);
//			this.arrTxt.push(spanDom);
//		};
//		for (var j = 0; j < this.len; j++) {
//			this.arrTxt[j].style.position = "relative";
//		};
//		this.strat();
//	},
//	strat: function() {
//		for (var i = 0; i < this.len; i++) {
//			this.arrTxt[i].onmouseover = function() {
//				this.stop = 0;
//				this.speed = -1;
//				var $this = this;
//				this.timer = setInterval(function() {
//						$this.stop += $this.speed; //0 += -1
//						if ($this.stop <= -20) {
//							$this.speed = 1;
//						}
//						$this.style.top = $this.stop + "px";
//						if ($this.stop >= 0) {
//							clearInterval($this.timer);
//							$this.style.top = 0 + "px";
//						};
//					},
//					15);
//			};
//		}
//	}
//}
//var bigWqtjs = document.getElementsByClassName("big-wqtj");
//            $(".heroText p").each(function(index,element){
//                txtAnim.init($(element)[0]);
//                console.log($(element)[0]);
//            });





//��ں���----------------------------------------


//ͷ��
$(".header-top .nav>li").on("mouseenter",function(){
	$(this).children("ul").stop().slideDown("50");
});
$(".header-top .nav>li").on("mouseleave",function(){
	$(this).children("ul").stop().slideUp("50");
});


//�����趨Ԥ��---------------------------------------
$(function(){
	var slogan = document.getElementsByClassName("slogan")[0];
	//console.log(slogan);
	var sloOpa = 0;
	var sloBig = 2.1;
	var sloganTimer = setInterval(function(){
		sloBig-=0.05;
		sloOpa+=0.05;
		if(sloBig<1){
			sloBig=sloOpa=1;
			clearInterval(sloganTimer);
		}
		slogan.style.opacity = sloOpa;
		slogan.style.transform = "scale3d(" + sloBig + "," + sloBig + "," + sloBig + ")";
	},50);


	//bannerNum
	$(".bannerNum").on("mouseenter","li",function(){
		$(".bannerNum li.active").removeClass("active");
		$(this).addClass("active");
	});

//��Ϸ��Ѷ
//��Ϸ��Ѷ���
	$(".bannerNum").on("mouseenter","li",function(){

		$(".bannerNum li.active").removeClass("active");
		$(this).addClass("active");
	});
//��Ϸ��Ѷ�ұ�
	$(".info-header111 .list1 li").on("mouseenter",function(){
//                console.log($(this));
		$(".info-header111 .list1 li.active").removeClass("active");
		$(this).addClass("active");
		$(".info-head .ul-inner ul.active").removeClass("active");
		$(".info-head .ul-inner ul").eq($(this).index()).addClass("active");
	});


	//��������
	var kt = $(".viewKing").offset().top;

	$(window).scroll(function(){
		var st = $(this).scrollTop();
		if(st<=kt-400){
			$(".viewKing").stop().animate({
				top: 150,
				opacity: 0
			}, 700);
		}
		if(st>kt-400) {
			$(".viewKing").stop().animate({
				top: "",
				opacity: 1
			}, 500);
		}
	});
	//��ʼ��Ӣ������
	$(".heroVoice li.active").css({
		top:0,
		opacity: 1
	});
	//��ʼ��Ӣ��ѡ���
	$(".selectList li.active").children("b").css({
		top:  -397
	});
	//Ӣ����Ϣ����
	var gameBlock = document.getElementsByClassName("viewKing")[0];

	$(".selectList li").on("mouseenter",function(){
		$(".selectList li.active").removeClass("active");
		$(this).addClass("active");
		$(".selectList li").each(function(index,element){
			$(element).children("b").animate({
				top:""
			},100);
		});
		$(".selectList li.active").children("b").animate({
			top:  -$(this).children("b").outerHeight()
		},100);
		$(".heroBody>li.active").removeClass("active");
		$(".heroBody>li").eq($(this).index()).addClass("active");
		$(".heroName img.active").removeClass("active");
		$(".heroName img").eq($(this).index()).addClass("active");
		$(".heroText .big-wqtj.active").removeClass("active");
		$(".heroText .big-wqtj").eq($(this).index()).addClass("active");

		//Ӣ������

		//������������Key
		var x = 0;

		$(".heroVoice li.active").removeClass("active");
		$(".heroVoice li").eq($(this).index()).addClass("active");
		$(".heroVoice li.active").siblings().stop().animate({
			top:-700,
			opacity: 0
		},800,function(){
			$(".heroVoice li.active").stop().animate({
				top: "",
				opacity: 1
			},800,function(){
				//��������
				var mountainTimer = setInterval(function(){
					x++;
					if(x < 12){
						if(x % 2==0){
							gameBlock.style.left = Math.random()*50+"px";
							gameBlock.style.top = Math.random()*50+"px";
						}else{
							gameBlock.style.right = Math.random()*50+"px";
							gameBlock.style.bottom = Math.random()*50+"px";
						}
					}else{
						gameBlock.style.left = 0;
						gameBlock.style.top = 0;
						clearInterval(mountainTimer);
					}
				},50)
			});
		});


	});
	//��Ϸ��ɫ----------------------------------
	$(".game-features-banner li").on("click",function(){
		$(this).siblings(".active").removeClass("active");
		$(this).addClass("active");
	});
	var gameT = $(".game-features").offset().top;

	$(window).scroll(function(){
		var st = $(this).scrollTop();
		if(st<=gameT-400){
			$(".game-features").stop().animate({
				top: 150,
				opacity: 0
			}, 700);
		}
		if(st>gameT-400) {
			$(".game-features").stop().animate({
				top: "",
				opacity: 1
			}, 500);
		}
	});

	//ͬ����Ʒ------------------------------
	//��̬����ÿ��li��left   (��֪��ΪɶûЧ��)
	$(".videoAndPicture li").each(function(index,element){
		$(element).attr("left",index *50+"px");
	});
	//var cT = $(".cosplay").offset().top;
	//$(window).scroll(function(){
	//	var st = $(this).scrollTop();
	//	if(st<=cT-400){
	//		$(".cosplay").stop().animate({
	//			top: 150,
	//			opacity: 0
	//		}, 300);
	//	}
	//	if(st>cT-400) {
	//		$(".cosplay").stop().animate({
	//			top: "",
	//			opaccity: 1
	//		}, 500);
	//	}
	//});

	//����ר��----------------------------
	//var vT = $(".videoAndPicture").offset().top;
	//$(window).scroll(function(){
	//	var st = $(this).scrollTop();
	//	if(st<=vT-400){
	//		$(".videoAndPicture").stop().animate({
	//			top: 150,
	//			opacity: 0
	//		}, 700);
	//	}
	//	if(st>vT-400) {
	//		$(".videoAndPicture").stop().animate({
	//			top: "",
	//			opacity: 1
	//		}, 500);
	//	}
	//});



});


//��������
function ffcc(element){
	var ElementTop =0;
	var flag = true;
	element.fcTimer = setInterval(function(){
		if(flag){
			ElementTop+=Math.random();
			if(ElementTop>20){
				flag=false;
			}
		}else{
			ElementTop-=Math.random();
			if(ElementTop<-20){
				flag=true;
			}
		}
		element.style.top = ElementTop + "px";
	},20);
}

//�����ֲ�
function superAnimate(element,target,total){
	var timeSpan  = 15;
	//console.log(element.offsetLeft);
	var distance = Math.abs(target-element.offsetLeft);
	var step = distance/total*timeSpan;
	clearInterval(element.timer);
	element.timer = setInterval(function(){
		var currentLeft = element.offsetLeft;
		currentLeft += currentLeft>=target? -step: step;
		element.style.left = currentLeft + "px";
		if(Math.abs(currentLeft-target)<=step){
			clearInterval(element.timer);
			element.style.left = target + "px";
		}
	},timeSpan);
}