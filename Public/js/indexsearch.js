$(function () {
  var list;
  list = JSON.parse(localStorage.getItem("search"));
  console.log(list);
  if(list.length == 0){
    $(".searchWrap").text("抱歉，没有您要搜索的内容").css("textAlign","center");
    $(".moreShow").css("display","none");
  }else{
    var msg = list.slice(0,10);
    var newWrap = $(".searchWrap");
    // for(var msg1 of msg){
    for(var i=0; i<msg.length; i++){
      var searchDetial = $('<div class="searchDetial">'
        +'<a href="indexthree?id='+ msg[i].id +'" target="_blank"><p class="searchDetialTitle">'+ msg[i].title +'</p></a>'
        +'<div class="searchDetialWrap">'+ msg[i].title +'</div>'
        +'<div class="searchTime clear">'
          +'<span class="imgVideo imgVideo'+ msg[i].id +'">视频</span>'
          +'<span class="timeDate">'+ msg[i].intime +'</span>'
          +'<span class="timeTitle">/时间</span>'
          +'<span class="mokuai">'+ msg[i].onename +'</span>'
        +'</div>'
      +'</div>').appendTo(newWrap);
      if(msg[i].videopath.length < 15){
        $(".imgVideo"+ msg[i].id +"").text("图文").css("background","#b2894f");
      }
    }
    moreShowFn ()
    $(".moreShow").css("display","block");
    $(".moreShow").on("click",function () {
      moreShowFn ();
    })
    var z = 10;
    function moreShowFn () {
        var newWrap = $(".searchWrap");
        for(var i=z; i<z+1; i++){
          var searchDetial = $('<div class="searchDetial">'
            +'<a href="indexthree?id='+ list[i].id +'" target="_blank"><p class="searchDetialTitle">'+ list[i].title +'</p></a>'
            +'<div class="searchDetialWrap">'+ list[i].title +'</div>'
            +'<div class="searchTime clear">'
              +'<span class="imgVideo imgVideo'+ list[i].id +'">视频</span>'
              +'<span class="timeDate">'+ list[i].intime +'</span>'
              +'<span class="timeTitle">/时间</span>'
              +'<span class="mokuai">'+ list[i].onename +'</span>'
            +'</div>'
          +'</div>').appendTo(newWrap);
          if(msg1.videopath.length < 15){
            $(".imgVideo"+ list[i].id +"").text("图文").css("background","#b2894f");
          }
        }
        z = z + 1;
      }
  }
    // 右侧新闻
    $.ajax({
      url:"http://www.cupoftea.cn/Home/Index/indexdata",
      success:function (msg) {
        var data = JSON.parse(msg);
        console.log(data);
        var right = data.slice(0,3);
        var mainRight = $(".searchnewright");
        mainRight.empty();
        // for(var right1 of right){
        for(var i=0; i<right.length; i++){
          var tworight = $('<div class="secondNav" twoid="'+right[i].id+'">'
            +'<div class="secondTitle" twoid="'+ right[i].id +'">'+ right[i].name +'</div>'
            +'<div class="secondImg secondImg'+ right[i].news[0].id +'">'
              +'<a href="/Home/Index/indexthree?id='+ right[i].news[0].id +'" target="_blank"><div class="secondImgDes">'+ right[i].news[0].title +'</div></a>'
            +'</div>'
            +'<ul class="secondNew secondNew'+ right[i].id +'">'
            +'</ul>'
          +'</div>').appendTo(mainRight);
          $(".secondImg"+ right[i].news[0].id +"").css({
            "background":"url(http://www.cupoftea.cn"+ right[i].news[0].himg +")",
            "backgroundSize":"100% 100%"
          });
          // var rightnews = right1.news;
          var rightnews = right[i].news.slice(1);
          // console.log(right1.news);
          // for(var xinwen of rightnews.slice(1)){
          for(var j=0; j<rightnews.length; j++){
            var li = $('<li><a href="/Home/Index/indexthree?id='+ rightnews[j].id +'" target="_blank">'+ rightnews[j].title +'</a></li>').appendTo($(".secondNew"+ right[i].id +""));
          }
        }
      }
    })

})
