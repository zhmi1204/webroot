/**
 * Created by zhoum on 2018/7/5.
 */

//方法一
//$(".header .nav ul li").hover(
//    function() {
//        $(this).children(".secondmenu").show();
//    },function(){
//        $(this).children(".secondmenu").hide();
//    }
//);

//方法二
$(".header .nav li").hover(
    function(){
        //slideToggle三个参数
        //speed,动画时长
        //easing,切换效果
        //fn,动画完成后执行函数
        $(this).children("ul").slideToggle(0);
    }
);