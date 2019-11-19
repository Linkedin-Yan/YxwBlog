// window.onload = function(){

// }
$(function () {
    // 0.富文本框引入
    // 1.当前时间累加效果实现
    function runtime() {
        var date = new Date();
        var year = date.getFullYear();
        var month = date.getMonth() + 1;
        var day = date.getDate();
        var week = date.getDay();
        var hour = date.getHours();
        var minute = date.getMinutes();
        var second = date.getSeconds();
        var array = ["天", "一", "二", "三", "四", "五", "六"]
        // 在时间输入到页面以前作出当时分秒小于10的时候添0判断。
        if (hour < 10) { hour = "0" + hour }
        if (minute < 10) { minute = "0" + minute }
        if (second < 10) { second = "0" + second }
        $("#time").text("当前时间：" + year + "年" + month + "月" + day + "日" + "星期" + array[week] + "  " + hour + ":" + minute + ":" + second);
        $("#time").css({"cursor":"pointer"});
        $("#WB_time").text("今天"+ " "+ hour + ":" + minute);
    }
    runtime();
    setInterval(runtime, 1000);
    //1.5关注我or分享按钮的事件
    
    $(".header-opt span:nth-child(1)").click(function(){
       $(this).text("已关注");
       $(".btn-flow01").stop().animate({bottom:'240px'}).css({"display":"block"}).fadeOut(1000);
    });
    $(".header-opt span:nth-child(2)").click(function(){
       $(this).text("已分享");
       $(".btn-flow02").stop().animate({bottom:'240px'}).css({"display":"block"}).fadeOut(1000);
    });
    // 2.鼠标点击文本框时,边框颜色发生改变
    $("textarea").focus(function () {
        $(this).css({ "border": "1px solid #fa7d3c" });

    })
    $("textarea").blur(function () {
        $(this).css({ "border": "1px solid #ccc" });
    })
    // 2.5 fullPage页面鼠标点击文本框时,边框颜色发生改变
    $(".focus").css({ "border": "1px solid #fafafa"});
    $(".focus").focus(function () {
        $(this).css({ "border": "1px solid #0060df" });

    })
    $(".focus").blur(function () {
        $(this).css({ "border": "1px solid #ccc" });
    })
    //3.已输入字数统计
    $(".textarea").keyup(function () {
        var text = $(".textarea").val();
        // length不需要带();
        var count = text.length;
        $(".count").text("已输入" + count + "字");
        // console.log(count);
        if (count == 0) {
            $(".count").text("");
        }
    })
    //4.动态发布功能
    $("#btn").click(function(){
        var text =  $(".textarea").val();//单击的同时获取到textarea文本框的值.
        //单击发布按钮的时候留言框下滑显示
        $(".WB_datail_00").slideDown(300).css({"display":"block"})
        //同时在下面的ul盒子里追加内容显示。
        $(".WB_datail_00 ul").prepend("<li>"+ text +"</li>");
        $(".WB_datail_00 ul li:first").hide().slideDown();
        $(".textarea").val("");
     
    });
    //5.分页列表展示
    $(".pagination li").click(function(){
        // $(this).addClass("active").siblings().removeClass("active");
        // $(".pagination li:first").removeClass("active");
        // $(".pagination li:last").removeClass("active");
    });
    //6.底部版权二维码展示
        // 鼠标经过微信二维码时图片展示
    $(".branding .scan-wx").mouseover(function(){
        $(".branding .scan img:first").addClass("show");
        $(".branding .scan img:last").removeClass("show");
    })
    
        // 鼠标经过QQ二维码时图片展示
    $(".branding .scan-qq").mouseover(function(){
        $(".branding .scan img:last").addClass("show");
        $(".branding .scan img:first").removeClass("show");
    })
   
    // 7.打赏区域弹出层
        //点击打赏时阴影层和打赏层同时出现
    $('[data-event="rewards"]').click(function () {
        $('.rewards, .rewards-layer').fadeIn();
    })
        //点击关闭按钮时弹出层消失
    $('[data-event="rewards-close"]').click(function () {
        $('.rewards, .rewards-layer').fadeOut();
    })
    //8.点击喜欢,增加数字。
    for (var i = 0; i < $('.likes').length; i++) {
        var ran = Math.floor(Math.random() * 10 + 1)
        $('.likes').eq(i).text(ran);
    }
    $(".article-social img").click(function () {
        var num = $(this).next().text();
        num++;
        $(this).next().text(num);
    });
   //9.图片墙页 每次页面刷新重置点赞数量
    for (var i = 0; i < $('.isnum').length; i++) {
        var ran_01 = Math.floor(Math.random() * 10 + 1);
        var ran_02 = Math.floor(Math.random() * 10 + 1);
        $("#waterfall .iNum .isnum_01").eq(i).text(ran_01);	
        $("#waterfall .iNum .isnum_02").eq(i).text(ran_02);	
    }
    //10.鼠标经过图片轻微放大效果;
    // $(".img-thumbnail").mouseover(function(){
    //     $(this).css({"width":"240px","height":"140px"});
    // });
    // $(".img-thumbnail").mouseout(function(){
    //     $(this).css({"width":"230px","height":"130px"});
    // });
    //10.下拉固定导航栏
    $(".nav2").hide();
		$(window).scroll(function() {
            //
			if($(document).scrollTop() >= 200) {
                $(".nav2").addClass("fixnav").slideDown();
                // $(".main-side").css({"position":"fixed"});
			} else {
				$(".nav2").slideUp();
            }
            //当滚动条的高度距离顶部的高度的时候
            // if($(document).scrollTop() >= 700){
            //     $(".main-side-show").css({"display":"block"});
            // }else{
            //     $(".main-side-show").css({"display":"none"});
            // }
    });

    //11.阅览室页面鼠标经过改变.cur样式,相应的背景图片更换。
    $(".news-info-list .focus-btn").mouseover(function(){
        $(this).addClass("cur").siblings().removeClass("cur");
        var img_index = $(this).index();
        $(".news-pic-list li").eq(img_index).fadeIn(500).siblings().fadeOut(500);
    });
    //12.当点击确定以后,将会跳到首页中去。
    // $("[href='#']").click(function{
    //     alert("111");
    // });

});
//00.点击分类导航上的分类导航以后可以跳转到指定的分类模块中去。
$(function () {
    // let news=$(".news-body");
    $(".lp-list .lp-item").click(function () {
        let index=$(this).index();
        $(document).scrollTop($(".news-body").eq(index).offset().top-50);
        // $(".lp-list .lp-item ")
    })
})