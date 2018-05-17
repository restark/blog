$(function() {

  // 请求轮播图数据
  $.ajax({
    url:"http://www.cupoftea.cn/Home/Index/indexfor",
    success:function(msg) {
      var msg = JSON.parse(msg);
      console.log(msg);
      // for(var data of msg){
      for(var i=0; i<msg.length; i++){
        var lunboDiv = $('<div class="swiper-slide index'+ msg[i].id +'" onclick="window.open()"></div>').appendTo($(".swiper-container1 .swiper-wrapper"));
        $(".index"+ msg[i].id +"").css({
          "backgroundImage":"url(http://www.cupoftea.cn"+ msg[i].himg +")",
          "backgroundSize":"cover"
        })
      }
      // 轮播的初始化定义
    	var swiper = new Swiper('.swiper-container1', {
            autoplay : 3000,
            effect : 'fade',
            loop : true,
            autoplayDisableOnInteraction : false,
            speed:1000,
            pagination: '.swiper-pagination',
            prevButton:'.swiper-button-prev',
    		    nextButton:'.swiper-button-next',
            paginationClickable: true
        });
    }
  });


  // 请求所有一级目录对应数据数据
  // $.ajax({
  //   url:"http://www.cupoftea.cn/Home/Index/indexdata",
  //   success:function(msg) {
  //     var msg = JSON.parse(msg);
  //     var Arr = [];
  //     for(var msg1 of msg){
  //       if(msg1.name == "轮播图" || msg1.name == "首页头条"){
  //
  //       }else{
  //         Arr.push(msg1);
  //       }
  //     }
  //     console.log(msg);
  //     console.log(Arr);
  //     var result = [];
  //     for(var i=0;i<Arr.length;i+=3){
  //        result.push(Arr.slice(i,i+3));
  //     }
  //     console.log(result);
  //     for(var result1 of result){
  //       var adBottomThree = $("<div class='adBottomThree'><div class='advertise1'></div></div>").insertBefore($(".videoZhi"));
  //       for(var result2 of result1){
  //         console.log(result2);
  //         var twoPage = $('<div class="twoPage">'
  //           +'<div class="twoPageDiv">'
  //             +'<span class="twoPageTitle">'+ result2.name +'</span>'
  //             +'<span class="twoPageMore" onclick="window.open()">查看更多></span>'
  //           +'</div>'
  //           +'<div class="twoPageImg blueImage'+ result2.news[0].id +'">'
  //             +'<a href="" target="_blank"><div class="twoPageDes">'+ result2.news[0].title +'</div></a>'
  //           +'</div>'
  //           +'<ul class="twoPageUl">'
  //             +'<li><div><a href="" target="_blank">'+ result2.news[1].title +'</a></div><span>'+ result2.news[1].intime +'</span></li>'
  //             +'<li><div><a href="" target="_blank">'+ result2.news[2].title +'</a></div><span>'+ result2.news[2].intime +'</span></li>'
  //             +'<li><div><a href="" target="_blank">'+ result2.news[3].title +'</a></div><span>'+ result2.news[3].intime +'</span></li>'
  //             +'<li><div><a href="" target="_blank">'+ result2.news[4].title +'</a></div><span>'+ result2.news[4].intime +'</span></li>'
  //           +'</ul>'
  //         +'</div>');
  //         adBottomThree.prepend(twoPage);
  //         $(".blueImage"+ result2.news[0].id +"").css({
  //           "backgroundImage":"url(http://www.cupoftea.cn"+ result2.news[0].himg +")",
  //           "backgroundSize":"100% 100%"
  //         })
  //       }
  //     }
  //   }
  // })
    // 请求新闻列表的数据
    $.ajax({
      url:"http://www.cupoftea.cn/Home/Index/indexdata",
      success:function(msg) {
        var msg = JSON.parse(msg);
        console.log(msg);
        var twoPageTitle = $(".twoPageTitle");
        // twoPageTitle.each(function () {
        //   console.log($(this).text());
        //     for(var data of msg){
        //       if($(this).text() == data.name){
        //         $(this).parent().next().children().children().text(data.news[0].title).attr("newid",data.news[0].id);
        //         $(this).next().attr({
        //           "href":"Home/Index/indextwo#"+ data.name +"?"+ data.id +"",
        //           "target":"_blank"
        //         });
        //         $(this).parent().next().children().attr({
        //           "href":"Home/Index/indexthree?id="+ data.news[0].id +"",
        //           "target":"_blank"
        //         })
        //         $(this).parent().next().css({
        //           "backgroundImage":"url(http://www.cupoftea.cn"+ data.news[0].himg +")",
        //           "backgroundSize":"100% 100%"
        //         })
        //         var msg1 = data.news.slice(1);
        //         console.log(msg1);
        //         for(var msg2 of msg1){
        //           var li = $('<li><div><a href="Home/Index/indexthree?id='+ msg2.id +'" target="_blank">'+ msg2.title +'</a></div><span>'+ msg2.intime +'</span></li>').appendTo($(this).parent().next().next());
        //         }
        //       }
        //     }
        // })
        for(var i=0; i<twoPageTitle.length; i++){
            // console.log($(twoPageTitle[i]).text());
              // for(var data of msg){
              for(var j=0; j<msg.length; j++){
                if($(twoPageTitle[i]).text() == msg[j].name){
                  $(twoPageTitle[i]).parent().next().children().children().text(msg[j].news[0].title).attr("newid",msg[j].news[0].id);
                  $(twoPageTitle[i]).next().attr({
                    "href":"Home/Index/indextwo#"+ msg[j].name +"?"+ msg[j].id +"",
                    "target":"_blank"
                  });
                  $(twoPageTitle[i]).parent().next().children().attr({
                    "href":"Home/Index/indexthree?id="+ msg[j].news[0].id +"",
                    "target":"_blank"
                  })
                  $(twoPageTitle[i]).parent().next().css({
                    "backgroundImage":"url(http://www.cupoftea.cn"+ msg[j].news[0].himg +")",
                    "backgroundSize":"100% 100%"
                  })
                  var msg1 = msg[j].news.slice(1);
                  // console.log(msg1);
                  // for(var msg2 of msg1){
                  for(var k=0; k<msg1.length; k++){
                    var li = $('<li><div><a href="Home/Index/indexthree?id='+ msg1[k].id +'" target="_blank">'+ msg1[k].title +'</a></div><span>'+ msg1[k].intime +'</span></li>').appendTo($(twoPageTitle[i]).parent().next().next());
                  }
                }
              }
        }
      }
    })

  // 请求大标题数据
  $.ajax({
    url:"http://www.cupoftea.cn/Home/Index/indexcool",
    success:function(msg) {
      var msg = JSON.parse(msg);
      console.log(msg);
      var onthree = msg.onthree;
      // var ti_content = $(".ti_content");
      // for(var onthree1 of onthree){
      for(var i=0; i<onthree.length; i++){
        // var jishi = $('<div class="ti_news"><a href="/Home/Index/indexthree?id='+ onthree1.id +'" target="_blank">'+ onthree1.title +'</a></div>').appendTo(ti_content);
        var jishi = $('<li><a href="/Home/Index/indexthree?id='+ onthree[i].id +'" target="_blank">'+ onthree[i].title +'</a></li>').appendTo($(".roll__list"));
      }

      var one = msg.one;
      $(".bigTitle>p>a").text(one[0].title).attr({
        "href":"Home/Index/indexthree?id="+ one[0].id+"",
        "target":"_blank"
      });
      var one1 = one.slice(1);
      // for(var one11 of one1){
      for(var i=0; i<one1.length; i++){
        // console.log(one11.id);
        var li = $('<li><a href="Home/Index/indexthree?id='+ one1[i].id +'" target="_blank">'+ one1[i].title +'</a></li>');
        $(".bigTitle>ul").prepend(li);
      }

      var right = msg.right;
      var top = right[0].news;
      var bottom = right[1].news;
      $(".mainNewTop>p>a").text(top[0].title).attr({
        "href":"Home/Index/indexthree?id="+ top[0].id+"",
        "target":"_blank"
      });
      var top1 = top.slice(1);
      // for(var top11 of top1){
      for(var i=0; i<top1.length; i++){
        var topli = $('<li><a href="Home/Index/indexthree?id='+ top1[i].id +'" target="_blank">'+ top1[i].title +'</a></li>');
        $(".mainNewTop>ul").prepend(topli);
      }

      $(".mainNewBottom>p>a").text(top[1].title);
      var bottom1 = bottom.slice(1);
      console.log(bottom1);
      // for(var bottom11 of bottom1){
      for(var i=0; i<bottom1.length; i++){
        var bottomli = $('<li><a href="Home/Index/indexthree?id='+ bottom1[i].id+'" target="_blank">'+ bottom1[i].title +'</a></li>');
        $(".mainNewBottom>ul").prepend(bottomli);
      }

      var left = msg.left;
      console.log(left);
      $('.bigImage').css({
        "backgroundImage":"url(http://www.cupoftea.cn"+ left[0].himg +")",
        "backgroundSize":"100% 100%"
      })
      $(".biglunboDes").html(left[0].title);
      $(".lianjie").attr({
        "href":"Home/Index/indexthree?id="+ left[0].id+"",
        "target":"_blank"
      });
      var leftOther = left.slice(1);
      console.log(leftOther);
      for(var k=0; k<leftOther.length; k++){
        var smallImage = $('<div class="smallImage" xinwen="'+ leftOther[k].id +'" id="smallImage'+ leftOther[k].id +'" image="'+ leftOther[k].himg +'" title="'+ leftOther[k].title +'"></div>').appendTo($(".smalllunbo"));
        $("#smallImage"+ leftOther[k].id +"").css({
          "backgroundImage":"url(http://www.cupoftea.cn"+ leftOther[k].himg +")",
          "backgroundSize":"100% 100%"
        })
      }
      $(".smallImage").on("click",function(){
        var title = $(this).attr("title");
        var image = $(this).attr("image");
        var lian = $(this).attr("xinwen");
        $('.bigImage').css({
          "backgroundImage":"url(http://www.cupoftea.cn"+ image +")",
          "backgroundSize":"100% 100%"
        })
        $(".biglunboDes").html(title);
        $(".lianjie").attr({
          "href":"Home/Index/indexthree?id="+ lian +"",
          "target":"_blank"
        });
      })
      // // for(var video of left){
      // for(var i=0; i<left.length; i++){
      //   var lunboDiv = $('<div class="swiper-slide swiper-slide1" style="height:100px"><video src="http://www.cupoftea.cn/'+ left[i].videopath +'" controls="controls" width="140px" height="100px" videoTitle="'+ left[i].title +'"></video></div>').appendTo($(".swiper-container2 .swiper-wrapper"));
      // }
      // var swiper = new Swiper('.swiper-container2', {
      //       prevButton:'.swiper-button-prev1',
    	// 	    nextButton:'.swiper-button-next1',
      //       slidesPerView: 4,
      //       paginationClickable: true,
      //       spaceBetween: 30,
      //       freeMode: true
      //   });
      //
      //   $(".biglunbo>video").attr("src","http://www.cupoftea.cn/"+ left[0].videopath +"");
      //   $(".biglunbo>.biglunboDes").text(left[0].title);
      //
      //   $(".swiper-slide1").on("click",function () {
      //     $(".biglunbo>.biglunboDes").text($(this).children().attr("videoTitle"));
      //     var src = $(this).children().attr("src");
      //     $(".biglunbo>video").attr({
      //       "src":src,
      //       "autoplay":"autoplay"
      //     });
      //   })
    }
  })

  // 请求图库数据
  $.ajax({
    url:"http://www.cupoftea.cn/Home/Index/indeximg",
    success:function(msg) {
      var msg = JSON.parse(msg);
      console.log(msg);
      var msg1 = msg.slice(0,1);
      var msg2 = msg.slice(1);
      $(".imgleft").css({
        "backgroundImage":"url(http://www.cupoftea.cn"+ msg1[0].himg +")",
        "backgroundSize":"100% 100%"
      });
      $(".imgleft>a").attr({
        "href":"http://www.cupoftea.cn"+ msg1[0].himg +"",
        "download":"http://www.cupoftea.cn"+ msg1[0].himg +""
      })
      $(".smallImg1").css({
        "backgroundImage":"url(http://www.cupoftea.cn"+ msg2[0].himg +")",
        "backgroundSize":"100% 100%"
      });
      $(".smallImg1>a").attr({
        "href":"http://www.cupoftea.cn"+ msg2[0].himg +"",
        "download":"http://www.cupoftea.cn"+ msg2[0].himg +""
      })
      $(".smallImg2").css({
        "backgroundImage":"url(http://www.cupoftea.cn"+ msg2[1].himg +")",
        "backgroundSize":"100% 100%"
      });
      $(".smallImg2>a").attr({
        "href":"http://www.cupoftea.cn"+ msg2[1].himg +"",
        "download":"http://www.cupoftea.cn"+ msg2[1].himg +""
      })
      $(".smallImg3").css({
        "backgroundImage":"url(http://www.cupoftea.cn"+ msg2[2].himg +")",
        "backgroundSize":"100% 100%"
      });
      $(".smallImg3>a").attr({
        "href":"http://www.cupoftea.cn"+ msg2[2].himg +"",
        "download":"http://www.cupoftea.cn"+ msg2[2].himg +""
      })
      $(".smallImg4").css({
        "backgroundImage":"url(http://www.cupoftea.cn"+ msg2[3].himg +")",
        "backgroundSize":"100% 100%"
      });
      $(".smallImg4>a").attr({
        "href":"http://www.cupoftea.cn"+ msg2[3].himg +"",
        "download":"http://www.cupoftea.cn"+ msg2[3].himg +""
      })
    }
  })

  // 请求视频数据
  $.ajax({
    url:"http://www.cupoftea.cn/Home/Index/indexvideo",
    success:function(msg) {
      var msg = JSON.parse(msg);
      console.log(msg);
      $(".videoLeft video").attr("src","http://www.cupoftea.cn"+ msg[0].videopath +"");
      $(".videoLeftDes").text(msg[0].title);

      $(".smallVideo1 video").attr("src","http://www.cupoftea.cn"+ msg[1].videopath +"");
      $(".smallVideoDes1").text(msg[1].title);
      $(".smallVideo2 video").attr("src","http://www.cupoftea.cn"+ msg[2].videopath +"");
      $(".smallVideoDes2").text(msg[2].title);
      $(".smallVideo3 video").attr("src","http://www.cupoftea.cn"+ msg[3].videopath +"");
      $(".smallVideoDes3").text(msg[3].title);
      $(".smallVideo4 video").attr("src","http://www.cupoftea.cn"+ msg[4].videopath +"");
      $(".smallVideoDes4").text(msg[4].title);
      $(".smallVideo5 video").attr("src","http://www.cupoftea.cn"+ msg[5].videopath +"");
      $(".smallVideoDes5").text(msg[5].title);
      $(".smallVideo6 video").attr("src","http://www.cupoftea.cn"+ msg[6].videopath +"");
      $(".smallVideoDes6").text(msg[6].title);
    }
  })





})
