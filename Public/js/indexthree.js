$(function () {
  var urlid = window.location.href;
  var index = urlid.lastIndexOf("\=");
  urlid  = urlid .substring(index + 1, urlid.length);
  console.log(urlid);
  var list;
  $.ajax({
    url:"http://www.cupoftea.cn/Home/Index/threelist",
    data:{"id":urlid},
    dataType:"json",
    type:"post",
    success:function (msg) {
      console.log(msg);
      if(msg.one.name == "产业大联盟"){
        $(".yitype a").text(msg.one.name).attr("href","http://www.cupoftea.cn/index/chanye.html");
      }else{
        $(".yitype a").text(msg.one.name).attr("href","http://www.cupoftea.cn/Index/indextwo#"+ msg.one.name +"?"+ msg.one.id +"");
      }
      var threeType = $(".daohangNav>li>a");
      // threeType.each(function () {
      //   if($(this).text() == msg.one.name){
      //     $(this).parent().css("border-bottom","2px solid #fff");
      //     $(this).parent().siblings().css("border-bottom","2px solid #0081de");
      //     $(this).css("font-weight","bold");
      //     $(this).parent().siblings().children().css("font-weight","normal")
      //   }
      // })
      for(var i=0; i<threeType; i++){
          if($(threeType[i]).text() == msg.one.name){
            $(threeType[i]).parent().css("border-bottom","2px solid #fff");
            $(threeType[i]).parent().siblings().css("border-bottom","2px solid #0081de");
            $(threeType[i]).css("font-weight","bold");
            $(threeType[i]).parent().siblings().children().css("font-weight","normal")
          }
      }
      $(".ertype").text(msg.two.name+'>');
      var news = msg.news;
      $(".blackTitle").text(news.title);
      $(".phptime").text(news.intime);
      $(".form1").text(news.comefrom);
      // 判断是否有视频
      if(news.videopath.length>=15){
        var detialVideo = $('<div class="newsImg"><video src="http://www.cupoftea.cn'+ news.videopath +'"' +'controls="controls" width="710px" height="370px">'
          +'您的浏览器不支持视频播放，请更换升级或更换浏览器'
        +'</video></div>').prepend($(".contentWrap"));
      }

      // 底部查看更多部分
      list = msg.more;
      console.log(list);
      moreShowFn ()
      $(".moreShow").css("display","block");

      // 右侧相同类别列表
      var right = msg.right;
      if(right.length != 0){
        var mainRight = $(".newWrap1");
        mainRight.empty();
        // for(var right1 of right){
        for(var i=0; i<right.length; i++){
          console.log(right[i].id);
          if(right[i].name != "3D展厅" && right[i].name != "盟品电商"){
            var tworight = $('<div class="secondNav" twoid="'+ right[i].id +'">'
              +'<div class="secondTitle" twoid="'+ right[i].id +'">'+ right[i].name +'</div>'
              +'<div class="secondImg secondImg'+ right[i].news[0].id +'">'
                +'<a href="indexthree?id='+ right[i].news[0].id +'" target="_blank"><div class="secondImgDes">'+ right[i].news[0].title +'</div></a>'
              +'</div>'
              +'<ul class="secondNew secondNew'+ right[i].id +'">'
              +'</ul>'
            +'</div>').appendTo(mainRight);
            $(".secondImg"+ right[i].news[0].id +"").css({
              "background":"url(http://www.cupoftea.cn"+ right[i].news[0].himg +")",
              "backgroundSize":"100% 100%"
            });
            // var rightnews = right[i].news;
            var rightnews = right[i].news.slice(1);
            // console.log(right1.news);
            // for(var xinwen of rightnews.slice(1)){
            for(var j=0; j<rightnews.length; j++){
              var li = $('<li><a href="indexthree?id='+ rightnews[j].id +'" target="_blank">'+ rightnews[j].title +'</a></li>').appendTo($(".secondNew"+ right[i].id +""));
            }
          }
        }
      }
    }
  })
  $(".moreShow").on("click",function () {
    moreShowFn ();

  })
  var z = 0;
  function moreShowFn () {
      var newWrap = $(".detialWrap");
      for(var i=z; i<z+1; i++){
        console.log(list,i);
        var newNew = $('<div class="singleNew">'
          +'<a href="indexthree?id='+ list[i].id +'" target="_blank"><p>'+ list[i].title +'</p></a>'
          +'<div class="singleNewBottom">'
            +'<div class="singleNewBottomImg singleNewBottomImg'+ list[i].id +'">'

            +'</div>'
            +'<div class="singleNewBottomDes">'
              +'<p>'+ list[i].newsdescribe +'</p>'
              +'<div class="newTime">'
                +'<span class="time">'+ list[i].intime +'</span>'
                // +'<span class="share"></span>'
              +'</div>'
            +'</div>'
          +'</div>'
        +'</div>').appendTo(newWrap);
        if(list[i].himg ==""){
          $(".singleNewBottomImg").css({
            "background":"url(http://www.cupoftea.cn/Public/source/image/%E9%BB%98%E8%AE%A4%E5%9B%BE.jpg)",
            "backgroundSize":"100% 100%"
          })
        }else{
          $(".singleNewBottomImg"+ list[i].id +"").css({
            "background":"url(http://www.cupoftea.cn"+ list[i].himg +")",
            "backgroundSize":"100% 100%"
          })
        }
      }
      z = z + 1;
    }
})
