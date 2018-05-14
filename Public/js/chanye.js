$(function() {
  var list;
  // 请求二级类别   右侧列表及  即时新闻数据
  $.ajax({
    url:"http://www.cupoftea.cn/Home/Index/cydlm",
    success:function (msg) {
      var msg = JSON.parse(msg);
      console.log(msg);
      var right = msg.right.reverse();
      console.log(right);
      // 即时新闻
      var three = msg.three;
      // 解析二级导航栏
      var ul = $(".twoNav>ul");
      //右侧新闻模块
      var mainRight = $(".mainRight");
      mainRight.empty();
      // for(var right1 of right){
      for(var i=0;i<right.length;i++){
        if(right[i].name != "盟品电商" && right[i].name != "3D展厅"){
          var li = $("<li twoid='"+ right[i].id +"'>"+ right[i].name +"</li>").appendTo(ul);
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
          for(var j=0;j<rightnews.length; j++){
            var li = $('<li><a href="/Home/Index/indexthree?id='+ rightnews[j].id +'" target="_blank">'+ rightnews[j].title +'</a></li>').appendTo($(".secondNew"+ right[i].id +""));
          }
        }
      }
      $($(".twoNav>ul>li")[2]).addClass('change');
      $($(".secondNav")[0]).css("display","none");
      $(".twoNav>ul>li").on("click",function () {
        var newWrap = $(".newWrap");
        newWrap.empty();
        var thisid = $(this).attr("twoid");
        $(this).addClass("change").siblings().removeClass("change");
        var secondNavArr = $(".secondNav");
        // secondNavArr.each(function () {
        //   if(thisid == $(this).attr("twoid")){
        //     $(this).css("display","none").siblings().css("display","block");
        //     // 请求对应数据  等加载更过完成后
        //     $.ajax({
        //       url:"http://www.cupoftea.cn/Home/Index/clicktwo",
        //       data:{"id":thisid},
        //       dataType:"json",
        //       type:"post",
        //       success:function (msg) {
        //         console.log(msg);
        //         list = msg.list;
        //         z = 0;
        //         moreShowFn ()
        //         $(".moreShow").css("display","block");
        //       }
        //     })
        //   }
        // })
        for(var i=0; i<secondNavArr.length;i++){
            if(thisid == $(secondNavArr[i]).attr("twoid")){
              $(secondNavArr[i]).css("display","none").siblings().css("display","block");
              // 请求对应数据  等加载更过完成后
              $.ajax({
                url:"http://www.cupoftea.cn/Home/Index/clicktwo",
                data:{"id":thisid},
                dataType:"json",
                type:"post",
                success:function (msg) {
                  console.log(msg);
                  list = msg.list;
                  z = 0;
                  moreShowFn ()
                  $(".moreShow").css("display","block");
                }
              })
            }
        }
      })

      // 即时新闻
      // var ti_content = $(".ti_content");
      // for(var three1 of three){
      for(var i=0; i<three.length;i++){
        // var jishi = $('<div class="ti_news"><a href="/Home/Index/indexthree?id='+ xinwen.id +'" target="_blank">'+ three1.title +'</a></div>').appendTo(ti_content);
        var jishi = $('<li><a href="/Home/Index/indexthree?id='+ three[i].id +'" target="_blank">'+ three[i].title +'</a></li>').appendTo($(".roll__list"));
      }

      // 请求二级类别数据
      var twoid = $(".twoNav>ul>li");
      var id =  $(twoid[2]).attr("twoid")
      console.log(id);
      $.ajax({
        url:"http://www.cupoftea.cn/Home/Index/twolistleft",
        data:{"id":id},
        dataType:"json",
        type:"post",
        success:function (msg) {
          console.log(msg);
          list = msg.list;
          moreShowFn ()
          $(".moreShow").css("display","block");

          var left = msg.video;
          console.log(left);
          $(".bignew").css({
            "background":"url(http://www.cupoftea.cn"+ left[0].himg +") no-repeat top center",
            "backgroundSize":"100% 100%"
          })
          $(".bignewDes>a").text(left[0].title).attr("href","/Home/Index/indexthree?id="+ left[0].id +"");

        }
      })


    }
  })

  $(".moreShow").on("click",function () {
    moreShowFn ();

  })



var z = 0;
function moreShowFn () {
    var newWrap = $(".newWrap");
    for(var i=z; i<z+1; i++){
      console.log(list,i);
      var newNew = $('<div class="singleNew">'
        +'<a href="/Home/Index/indexthree?id='+ list[i].id +'" target="_blank"><p>'+ list[i].title +'</p></a>'
        +'<div class="singleNewBottom">'
          +'<div class="singleNewBottomImg singleNewBottomImg'+ list[i].id +'">'

          +'</div>'
          +'<div class="singleNewBottomDes">'
            +'<p id="singleNewBottomDes'+ list[i].id +'">'+ list[i].newsdescribe +'</p>'
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
