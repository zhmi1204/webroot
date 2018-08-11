/**
 * Created by zhoum on 2018/7/6.
 */
$(window).scroll(function(){
    var docScrollTop = $(document).scrollTop();
    var imgh = $(".ads").height();
    //console.log("ads高度：" + imgh);
    //console.log("滚动条高度: " + docScrollTop);
    if(docScrollTop>=imgh){
        $(".header").css({
            "position":"fixed",
            "top":0
        });
    }else{
        $(".header").removeAttr("style");
    }

});
