<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <meta http-equiv="X-UA-Compatible" content="ie=edge"> -->
  <!-- <meta http-equiv=”X-UA-Compatible” content=”IE=edge,chrome=1″ /> -->
  <meta http-equiv=“X-UA-Compatible” content=“chrome=1″ />
  <title>一带一路产业大联盟</title>
  <link rel="stylesheet" href="/Public/source/libs/reset.css">
  <link rel="stylesheet" href="/Public/css/index.css">
  <link rel="stylesheet" href="/Public/source/libs/swiper-3.3.1.min.css">
  <link rel="stylesheet" href="/Public/source/libs/demo.css">
  <!-- <link rel="stylesheet" href="/Public/source/libs/style.css"> -->
  <!-- <link rel="stylesheet" href="/Public/source/libs/theme.css"> -->
  <script type="text/javascript" src="/Public/source/libs/jquery.js"></script>
  <script type="text/javascript" src="/Public/js/index.js"></script>
  <script type="text/javascript" src="/Public/source/libs/swiper-3.3.1.min.js"></script>
  <script type="text/javascript" src="/Public/source/libs/rollSlide.js"></script>
  <!-- <script type="text/javascript" src="/Public/source/libs/jquery.tickerNews.min.js"></script> -->
  <!-- <script type="text/javascript" src="/Public/source/libs/zh-CN.js"></script> -->
</head>
<body>
  <!-- 顶部图片 -->
  <div class="fenjin"></div>
  <link rel="stylesheet" href="/Public/source/libs/reset.css">
<link rel="stylesheet" href="/Public/css/denglu.css">
<div class="oneTitle clear">
  <!-- 标题图片 -->
  <div class="titleImage"></div>
  <div class="titleNav">
    <!-- 一带一路一行导航 -->
    <ul class="titleBlue">
      <li><a href="http://www.people.com.cn/" target="_blank">人民网</a></li>
      <li><a href="http://www.xinhuanet.com/" target="_blank">新华网</a></li>
      <li><a href="https://www.yidaiyilu.gov.cn/" target="_blank">中国一带一路网</a></li>
      <li><a href="http://zgbx.people.com.cn/" target="_blank">中国报协网</a></li>
      <li><a href="http://www.baoye.net/" target="_blank">中国报业网</a></li>
      <li><a href="http://www.dangbaotoutiao.com/" target="_blank">党报头条网</a></li>
    </ul>
    <ul class="titleBlack">
      <li><a class="aa" href="/Home/Login/index.html">登录</a></li>
      <li>&</li>
      <li><a class="bb" href="/Home/Login/register.html">注册</a></li>
      <li>&</li>
      <li><a class="cc" href="/Home/Login/juyuwang.html">局域网</a></li>
    </ul>
  </div>
</div>
<script type="text/javascript">
  $(function () {
    $.ajax({
      url:"http://www.cupoftea.cn/Home/Login/islogin",
      success:function (msg) {
        var msg = JSON.parse(msg)
        console.log(msg);
        if(msg.status == 0){

        }else if(msg.status == 1){
          var data = msg.data;
          $(".aa").text("欢迎").attr("href","");
          $(".bb").text(data.name).attr("href","");
          $(".cc").text("退出").attr("href","");
        }
      }
    })
    $(".cc").on("click",function () {
      if($(this).text() == "退出"){
        $.ajax({
          url:"http://www.cupoftea.cn/Home/Login/loginout",
          success:function(msg){
            console.log(msg);
          }
        })
      }else{
        $(".aa").text("登录").attr("href","/Home/Login/index.html");
        $(".bb").text("注册").attr("href","/Home/Login/register.html");
        $(".cc").text("局域网").attr("href","/Home/Login/juyuwang.html");
      }
    })
  })
</script>

  <!-- 蓝色横线 -->
  <hr style=" height:2px;border:none;border-top:2px solid #007fdd;">
  <!-- 搜索框横栏 -->
  <div class="searchHeng">
    <input type="text" class="search" placeholder="请输入搜索关键字">
    <ul class="language">
      <li> عربي </li>
      <li>Tiếng Việt</li>
      <li>한국어.</li>
      <li>日本語</li>
      <li>ภาษาไทย</li>
      <li>русский</li>
      <li>eesti</li>
      <li>български</li>
      <li>polskim</li>
      <li>......</li>
    </ul>
  </div>
  <!-- 渐变条 -->
  <div class="jianbian"></div>
  <!-- 导航栏 -->
  <link rel="stylesheet" href="/Public/source/libs/reset.css">
<link rel="stylesheet" href="/Public/css/daohang.css">
<!-- 导航栏 -->
<div class="daohang">
  <ul class="daohangNav">
    <li class="shouye bian"><a class="biana" href="http://www.cupoftea.cn">网站首页</a></li>
    <li><a href="">时政新闻</a></li>
    <li><a href="">政策环境</a></li>
    <li><a href="">大数据云</a></li>
    <li><a href="">智库建设</a></li>
    <li><a href="">文化旅游</a></li>
    <li><a href="">能源制造</a></li>
    <li><a href="http://www.cupoftea.cn/Home/Index/logistics" target="_blank">物资大流通</a></li>
    <li><a href="">金融资本</a></li>
    <li><a href="">关于我们</a></li>
    <li><a href="">人物专访</a></li>
    <li><a href="">人工智能</a></li>
    <li><a href="">健康医产</a></li>
    <li><a href="">创新创业</a></li>
    <li><a href="">绿色农业</a></li>
    <li><a href="">国际合作</a></li>
    <li><a href="">安全应急</a></li>
    <li><a href="http://www.cupoftea.cn/index/chanye.html" target="_blank">产业大联盟</a></li>
    <li><a href="https://www.ipr99.com/" target="_blank">知识产权</a></li>
    <div class="more">+更多</div>
  </ul>
</div>
<script type="text/javascript">
  // $.ajax({
  //   url:"<?php echo U('Home/Index/type');?>",
  //   success:function (msg) {
  //     var msg = JSON.parse(msg);
  //     console.log(msg);
  //     if(msg.length<1){
  //       for(var data of msg){
  //         var li = $('<li oneid='+ data.id +'><a href="">'+ data.name +'</a></li>').insertAfter($(".shouye"));
  //       }
  //     }else {
  //       var msg1 = msg.slice(0,17);
  //       var msg2 = msg.slice(18);
  //       for(var data of msg1){
  //         var li = $('<li oneid='+ data.id +'><a href="">'+ data.name +'</a></li>').insertAfter($(".shouye"));
  //       }
  //       var i=0;
  //       $(".more").on("click",function(){
  //         if(i==0){
  //           for(var data of msg2){
  //             var li = $('<li class="del" oneid='+ data.id +'><a href="">'+ data.name +'</a></li>').appendTo($(".daohangNav"));
  //           }
  //           i=1;
  //         }else{
  //           $(".del").remove();
  //           i=0;
  //         }
  //       });
  //     }
  //
  //   }
  // })



      // 请求一级类别数据
      $.ajax({
        url:"http://www.cupoftea.cn/Home/Index/type",
        success:function (msg) {
          var msg = JSON.parse(msg);
          console.log(msg);
          // var erji = $(".daohangNav>li>a").each(function () {
          //   // for(var msg1 of msg){
          //   for(var i=0; i<msg.length; i++){
          //     if(msg[i].name == "知识产权" || msg[i].name == "产业大联盟" || msg[i].name == "物资大流通"){
          //
          //     }else{
          //       if($(this).text() == msg[i].name){
          //         $(this).attr({
          //           "href":"http://www.cupoftea.cn/Index/indextwo#"+ msg[i].name +"?"+ msg[i].id +"",
          //           "target":"_blank"
          //         });
          //       }
          //     }
          //   }
          // })
          var erji = $(".daohangNav>li>a");
          for(var i=0; i<erji.length; i++){
            for(var j=0; j<msg.length; j++){
              if(msg[j].name == "知识产权" || msg[j].name == "产业大联盟" || msg[j].name == "物资大流通"){

              }else{
                if($(erji[i]).text() == msg[j].name){
                  $(erji[i]).attr({
                    "href":"http://www.cupoftea.cn/Index/indextwo#"+ msg[j].name +"?"+ msg[j].id +"",
                    "target":"_blank"
                  });
                }
              }
            }
          }
        }
      })
      // 导航栏选中状态
      // $(".daohangNav>li").on("click",function () {
      //   $(this).addClass('bian').siblings().removeClass("bian");
      //   $(this).children().addClass("biana");
      //   $(this).siblings().children().removeClass("biana");
      // })
</script>

  <!-- 一带一路大banner -->
  <div class="bigBanner">
    <div class="swiper-container swiper-container1">
      <div class="swiper-wrapper">

      </div>
      <div class="swiper-button-prev"></div>
    	<div class="swiper-button-next"></div>
			<div class="swiper-pagination"></div>
    </div>
    <!-- 蓝色横条 -->
    <div class="blueHeng">
      <ul>
        <!-- <a href=""><li>前2月对"一带一路"沿线出口增长13.3%</li></a>
        <a href=""><li>前2月对"一带一路"沿线出口增长13.3%</li></a>
        <a href=""><li>前2月对"一带一路"沿线出口增长13.3%</li></a> -->
        <!-- <div>查看更多></div> -->
        <!-- <div class="TickerNews" id="T1">
          <div class="ti_wrapper">
              <div class="ti_slide">
                  <div class="ti_content">

                  </div>
              </div>
          </div>
        </div> -->
        <div class="roll-wrap roll_row" id="e">
            <ul class="roll__list" style="position: absolute; left: 0; top: 0;">
                <!-- <li>1</li> -->
                <!-- <li style="width: 200px;">2</li>
                <li>3</li>
                <li style="width: 400px;">4</li>
                <li>5</li>
                <li>6</li>
                <li>7</li>
                <li>8</li>
                <li>9</li> -->
            </ul>
        </div>
      </ul>
    </div>
  </div>
  <!-- 大标题 -->
  <div class="bigTitle">
    <p><a href="">中国是亚洲经济增长的重要后盾</a></p>
    <ul>
      <!-- <li><a href="">一带一路沿线出口增长13.3%</a></li>
      <li><a href="">一带一路沿线出口增长13.3%</a></li>
      <li><a href="">一带一路沿线出口增长13.3%</a></li> -->
    </ul>
  </div>
  <!-- 大标题下面部分 -->
  <div class="mainNew">
    <!-- 左侧大部分 -->
    <div class="mainNewLeft">
      <!-- 轮播图展示部分 -->
      <div class="biglunbo">
        <!-- <video src="" controls="controls" width="710px" height="370px">
          您的浏览器不支持视频播放，请更换升级或更换浏览器
        </video> -->
        <div class="bigImage">

        </div>
        <a class="lianjie"><div class="biglunboDes"></div></a>
      </div>
      <!-- 小图片轮播部分 -->
      <div class="smalllunbo">
        <!-- <div class="swiper-container swiper-container2">
          <div class="swiper-wrapper">

          </div>
          <div class="swiper-button-prev1"></div>
        	<div class="swiper-button-next1"></div>
        </div> -->
        <!-- <div class="smallImage">

        </div>
        <div class="smallImage">

        </div>
        <div class="smallImage">

        </div>
        <div class="smallImage">

        </div> -->
      </div>
    </div>
    <!-- 右侧大部分 -->
    <div class="mainNewRight">
      <!-- 上部分 -->
      <div class="mainNewTop">
        <p><a href="">荷兰国王访华听取“一带一路”介绍</a></p>
        <ul>
          <!-- <li><a href="">港珠澳大桥主体工程完成交工验收，具备通车试运营能力</a></li>
          <li><a href="">港珠澳大桥主体工程完成交工验收，具备通车试运营能力</a></li>
          <li><a href="">港珠澳大桥主体工程完成交工验收，具备通车试运营能力</a></li>
          <li><a href="">港珠澳大桥主体工程完成交工验收，具备通车试运营能力</a></li>
          <li><a href="">港珠澳大桥主体工程完成交工验收，具备通车试运营能力</a></li>
          <li><a href="">港珠澳大桥主体工程完成交工验收，具备通车试运营能力</a></li> -->
        </ul>
      </div>
      <!-- 下部分 -->
      <div class="mainNewBottom">
        <p><a href="">荷兰国王访华听取“一带一路”介绍</a></p>
        <ul>
          <!-- <li><a href="">港珠澳大桥主体工程完成交工验收，具备通车试运营能力</a></li>
          <li><a href="">港珠澳大桥主体工程完成交工验收，具备通车试运营能力</a></li>
          <li><a href="">港珠澳大桥主体工程完成交工验收，具备通车试运营能力</a></li>
          <li><a href="">港珠澳大桥主体工程完成交工验收，具备通车试运营能力</a></li>
          <li><a href="">港珠澳大桥主体工程完成交工验收，具备通车试运营能力</a></li>
          <li><a href="">港珠澳大桥主体工程完成交工验收，具备通车试运营能力</a></li> -->
        </ul>
      </div>
    </div>
  </div>
  <!-- 广告图 -->
  <div class="advertise advertise1"></div>
  <!-- 广告图下面三列页面 -->
  <!-- 广告图下面三列页面 -->
  <div class="adBottomThree">
    <div class="twoPage">
      <!-- 二级标题 -->
      <div class="twoPageDiv">
        <span class="twoPageTitle">时政新闻</span>
        <a href=""><span class="twoPageMore">查看更多></span></a>
      </div>
      <!-- 图片 -->
      <div class="twoPageImg">
        <a href=""><div class="twoPageDes">葫芦岛项目热烈欢迎领导来视察</div></a>
      </div>
      <ul class="twoPageUl">
        <!-- <li><div><a href="">荷兰国王今起访华，将听取工作汇报</a></div><span>2018-02-01</span></li>
        <li><div><a href="">荷兰国王今起访华，将听取工作汇报</a></div><span>2018-02-01</span></li>
        <li><div><a href="">荷兰国王今起访华，将听取工作汇报</a></div><span>2018-02-01</span></li>
        <li><div><a href="">荷兰国王今起访华，将听取工作汇报</a></div><span>2018-02-01</span></li> -->
      </ul>
    </div>
    <div class="twoPage">
      <!-- 二级标题 -->
      <div class="twoPageDiv">
        <span class="twoPageTitle">政策环境</span>
        <a href=""><span class="twoPageMore">查看更多></span></a>
      </div>
      <!-- 图片 -->
      <div class="twoPageImg">
        <a href=""><div class="twoPageDes">葫芦岛项目热烈欢迎领导来视察</div></a>
      </div>
      <ul class="twoPageUl">
        <!-- <li><div><a href="">荷兰国王今起访华，将听取工作汇报</a></div><span>2018-02-01</span></li>
        <li><div><a href="">荷兰国王今起访华，将听取工作汇报</a></div><span>2018-02-01</span></li>
        <li><div><a href="">荷兰国王今起访华，将听取工作汇报</a></div><span>2018-02-01</span></li>
        <li><div><a href="">荷兰国王今起访华，将听取工作汇报</a></div><span>2018-02-01</span></li> -->
      </ul>
    </div>
    <div class="twoPage">
      <!-- 二级标题 -->
      <div class="twoPageDiv">
        <span class="twoPageTitle">热点专题</span>
        <a href=""><span class="twoPageMore">查看更多></span></a>
      </div>
      <!-- 图片 -->
      <div class="twoPageImg">
        <a href=""><div class="twoPageDes">葫芦岛项目热烈欢迎领导来视察</div></a>
      </div>
      <ul class="twoPageUl">
        <!-- <li><div><a href="">荷兰国王今起访华，将听取工作汇报</a></div><span>2018-02-01</span></li>
        <li><div><a href="">荷兰国王今起访华，将听取工作汇报</a></div><span>2018-02-01</span></li>
        <li><div><a href="">荷兰国王今起访华，将听取工作汇报</a></div><span>2018-02-01</span></li>
        <li><div><a href="">荷兰国王今起访华，将听取工作汇报</a></div><span>2018-02-01</span></li> -->
      </ul>
    </div>
  </div>
  <!-- 广告图 -->
  <div class="advertise advertise2"></div>
  <div class="adBottomThree">
    <div class="twoPage">
      <!-- 二级标题 -->
      <div class="twoPageDiv">
        <span class="twoPageTitle">大数据云</span>
        <a href=""><span class="twoPageMore">查看更多></span></a>
      </div>
      <!-- 图片 -->
      <div class="twoPageImg">
        <a href=""><div class="twoPageDes">葫芦岛项目热烈欢迎领导来视察</div></a>
      </div>
      <ul class="twoPageUl">
        <!-- <li><div><a href="">荷兰国王今起访华，将听取工作汇报</a></div><span>2018-02-01</span></li>
        <li><div><a href="">荷兰国王今起访华，将听取工作汇报</a></div><span>2018-02-01</span></li>
        <li><div><a href="">荷兰国王今起访华，将听取工作汇报</a></div><span>2018-02-01</span></li>
        <li><div><a href="">荷兰国王今起访华，将听取工作汇报</a></div><span>2018-02-01</span></li> -->
      </ul>
    </div>
    <div class="twoPage">
      <!-- 二级标题 -->
      <div class="twoPageDiv">
        <span class="twoPageTitle">智库建设</span>
        <a href=""><span class="twoPageMore">查看更多></span></a>
      </div>
      <!-- 图片 -->
      <div class="twoPageImg">
        <a href=""><div class="twoPageDes">葫芦岛项目热烈欢迎领导来视察</div></a>
      </div>
      <ul class="twoPageUl">
        <!-- <li><div><a href="">荷兰国王今起访华，将听取工作汇报</a></div><span>2018-02-01</span></li>
        <li><div><a href="">荷兰国王今起访华，将听取工作汇报</a></div><span>2018-02-01</span></li>
        <li><div><a href="">荷兰国王今起访华，将听取工作汇报</a></div><span>2018-02-01</span></li>
        <li><div><a href="">荷兰国王今起访华，将听取工作汇报</a></div><span>2018-02-01</span></li> -->
      </ul>
    </div>
    <div class="twoPage">
      <!-- 二级标题 -->
      <div class="twoPageDiv">
        <span class="twoPageTitle">文化旅游</span>
        <a href=""><span class="twoPageMore">查看更多></span></a>
      </div>
      <!-- 图片 -->
      <div class="twoPageImg">
        <a href=""><div class="twoPageDes">葫芦岛项目热烈欢迎领导来视察</div></a>
      </div>
      <ul class="twoPageUl">
        <!-- <li><div><a href="">荷兰国王今起访华，将听取工作汇报</a></div><span>2018-02-01</span></li>
        <li><div><a href="">荷兰国王今起访华，将听取工作汇报</a></div><span>2018-02-01</span></li>
        <li><div><a href="">荷兰国王今起访华，将听取工作汇报</a></div><span>2018-02-01</span></li>
        <li><div><a href="">荷兰国王今起访华，将听取工作汇报</a></div><span>2018-02-01</span></li> -->
      </ul>
    </div>
  </div>
  <!-- 广告图 -->
  <div class="advertise advertise3"></div>
  <!-- 视频直播 -->
  <div class="videoZhi">
    <div class="videoTitle">
      <span class="videoGif"></span>
      <span class="videoFont">视频直播</span>
      <span class="videoMore">查看更多></span>
    </div>
    <!-- 下半部分 -->
    <div class="videoBottom">
      <div class="videoLeft">
        <video src="http://jq22com.qiniudn.com/jq22-sp.mp4" controls="controls" width="710px" height="370px">
          您的浏览器不支持视频播放，请更换升级或更换浏览器
        </video>
        <div class="videoLeftDes">阿拉塔电站全面实施阿拉塔电站全面实施阿拉塔电站全面实施阿拉塔电站全面实施阿拉塔电站全面实施</div>
      </div>
      <div class="videoRight">
        <div class="smallVideo smallVideo1">
          <video src="http://jq22com.qiniudn.com/jq22-sp.mp4" controls="controls" width="220px" height="106px">
            您的浏览器不支持视频播放，请更换升级或更换浏览器
          </video>
          <div class="smallVideoDes smallVideoDes1">阿拉塔电站全面实施阿拉</div>
        </div>
        <div class="smallVideo smallVideo2">
          <video src="http://jq22com.qiniudn.com/jq22-sp.mp4" controls="controls" width="220px" height="106px">
            您的浏览器不支持视频播放，请更换升级或更换浏览器
          </video>
          <div class="smallVideoDes smallVideoDes2"></div>
        </div>
        <div class="smallVideo smallVideo3">
          <video src="http://jq22com.qiniudn.com/jq22-sp.mp4" controls="controls" width="220px" height="106px">
            您的浏览器不支持视频播放，请更换升级或更换浏览器
          </video>
          <div class="smallVideoDes smallVideoDes3"></div>
        </div>
        <div class="smallVideo smallVideo4">
          <video src="http://jq22com.qiniudn.com/jq22-sp.mp4" controls="controls" width="220px" height="106px">
            您的浏览器不支持视频播放，请更换升级或更换浏览器
          </video>
          <div class="smallVideoDes smallVideoDes4"></div>
        </div>
        <div class="smallVideo smallVideo5">
          <video src="http://jq22com.qiniudn.com/jq22-sp.mp4" controls="controls" width="220px" height="106px">
            您的浏览器不支持视频播放，请更换升级或更换浏览器
          </video>
          <div class="smallVideoDes smallVideoDes5"></div>
        </div>
        <div class="smallVideo smallVideo6">
          <video src="http://jq22com.qiniudn.com/jq22-sp.mp4" controls="controls" width="220px" height="106px">
            您的浏览器不支持视频播放，请更换升级或更换浏览器
          </video>
          <div class="smallVideoDes smallVideoDes6"></div>
        </div>
      </div>
    </div>
  </div>
  <!-- 广告图 -->
  <div class="advertise advertise4"></div>
  <div class="adBottomThree">
    <div class="twoPage">
      <!-- 二级标题 -->
      <div class="twoPageDiv">
        <span class="twoPageTitle">能源制造</span>
        <a href=""><span class="twoPageMore">查看更多></span></a>
      </div>
      <!-- 图片 -->
      <div class="twoPageImg">
        <a href=""><div class="twoPageDes">葫芦岛项目热烈欢迎领导来视察</div></a>
      </div>
      <ul class="twoPageUl">
        <!-- <li><div><a href="">荷兰国王今起访华，将听取工作汇报</a></div><span>2018-02-01</span></li>
        <li><div><a href="">荷兰国王今起访华，将听取工作汇报</a></div><span>2018-02-01</span></li>
        <li><div><a href="">荷兰国王今起访华，将听取工作汇报</a></div><span>2018-02-01</span></li>
        <li><div><a href="">荷兰国王今起访华，将听取工作汇报</a></div><span>2018-02-01</span></li> -->
      </ul>
    </div>
    <div class="twoPage">
      <!-- 二级标题 -->
      <div class="twoPageDiv">
        <span class="twoPageTitle">物资大流通</span>
        <a href=""><span class="twoPageMore">查看更多></span></a>
      </div>
      <!-- 图片 -->
      <div class="twoPageImg">
        <a href=""><div class="twoPageDes">葫芦岛项目热烈欢迎领导来视察</div></a>
      </div>
      <ul class="twoPageUl">
        <!-- <li><div><a href="">荷兰国王今起访华，将听取工作汇报</a></div><span>2018-02-01</span></li>
        <li><div><a href="">荷兰国王今起访华，将听取工作汇报</a></div><span>2018-02-01</span></li>
        <li><div><a href="">荷兰国王今起访华，将听取工作汇报</a></div><span>2018-02-01</span></li>
        <li><div><a href="">荷兰国王今起访华，将听取工作汇报</a></div><span>2018-02-01</span></li> -->
      </ul>
    </div>
    <div class="twoPage">
      <!-- 二级标题 -->
      <div class="twoPageDiv">
        <span class="twoPageTitle">金融资本</span>
        <a href=""><span class="twoPageMore">查看更多></span></a>
      </div>
      <!-- 图片 -->
      <div class="twoPageImg">
        <a href=""><div class="twoPageDes">葫芦岛项目热烈欢迎领导来视察</div></a>
      </div>
      <ul class="twoPageUl">
        <!-- <li><div><a href="">荷兰国王今起访华，将听取工作汇报</a></div><span>2018-02-01</span></li>
        <li><div><a href="">荷兰国王今起访华，将听取工作汇报</a></div><span>2018-02-01</span></li>
        <li><div><a href="">荷兰国王今起访华，将听取工作汇报</a></div><span>2018-02-01</span></li>
        <li><div><a href="">荷兰国王今起访华，将听取工作汇报</a></div><span>2018-02-01</span></li> -->
      </ul>
    </div>
  </div>
  <!-- 广告图 -->
  <div class="advertise advertise5"></div>
  <div class="adBottomThree">
    <div class="twoPage">
      <!-- 二级标题 -->
      <div class="twoPageDiv">
        <span class="twoPageTitle">人物专访</span>
        <a href=""><span class="twoPageMore">查看更多></span></a>
      </div>
      <!-- 图片 -->
      <div class="twoPageImg">
        <a href=""><div class="twoPageDes">葫芦岛项目热烈欢迎领导来视察</div></a>
      </div>
      <ul class="twoPageUl">
        <!-- <li><div><a href="">荷兰国王今起访华，将听取工作汇报</a></div><span>2018-02-01</span></li>
        <li><div><a href="">荷兰国王今起访华，将听取工作汇报</a></div><span>2018-02-01</span></li>
        <li><div><a href="">荷兰国王今起访华，将听取工作汇报</a></div><span>2018-02-01</span></li>
        <li><div><a href="">荷兰国王今起访华，将听取工作汇报</a></div><span>2018-02-01</span></li> -->
      </ul>
    </div>
    <div class="twoPage">
      <!-- 二级标题 -->
      <div class="twoPageDiv">
        <span class="twoPageTitle">人工智能</span>
        <a href=""><span class="twoPageMore">查看更多></span></a>
      </div>
      <!-- 图片 -->
      <div class="twoPageImg">
        <a href=""><div class="twoPageDes">葫芦岛项目热烈欢迎领导来视察</div></a>
      </div>
      <ul class="twoPageUl">
        <!-- <li><div><a href="">荷兰国王今起访华，将听取工作汇报</a></div><span>2018-02-01</span></li>
        <li><div><a href="">荷兰国王今起访华，将听取工作汇报</a></div><span>2018-02-01</span></li>
        <li><div><a href="">荷兰国王今起访华，将听取工作汇报</a></div><span>2018-02-01</span></li>
        <li><div><a href="">荷兰国王今起访华，将听取工作汇报</a></div><span>2018-02-01</span></li> -->
      </ul>
    </div>
    <div class="twoPage">
      <!-- 二级标题 -->
      <div class="twoPageDiv">
        <span class="twoPageTitle">健康医产</span>
        <a href=""><span class="twoPageMore">查看更多></span></a>
      </div>
      <!-- 图片 -->
      <div class="twoPageImg">
        <a href=""><div class="twoPageDes">葫芦岛项目热烈欢迎领导来视察</div></a>
      </div>
      <ul class="twoPageUl">
        <!-- <li><div><a href="">荷兰国王今起访华，将听取工作汇报</a></div><span>2018-02-01</span></li>
        <li><div><a href="">荷兰国王今起访华，将听取工作汇报</a></div><span>2018-02-01</span></li>
        <li><div><a href="">荷兰国王今起访华，将听取工作汇报</a></div><span>2018-02-01</span></li>
        <li><div><a href="">荷兰国王今起访华，将听取工作汇报</a></div><span>2018-02-01</span></li> -->
      </ul>
    </div>
  </div>
  <!-- 数据查询 -->
  <div class="dataSearch">
    <div class="dataSearchTitle">
      <span class="dataSearchImg"></span>
      <span class="dataSearchFont">数据查询</span>
    </div>
    <!-- 数据查询下半部分 -->
    <a href="http://www.cupoftea.cn/Home/Index/lookdata" target="_blank">
    <div class="dataBottom">
      <div class="dataSingle">
        <div class="dataImg" style="background:url(/Public/source/image/国别宏观.png) no-repeat bottom center"></div>
        <p>国别宏观</p>
      </div>
      <div class="dataSingle">
        <div class="dataImg" style="background:url(/Public/source/image/中国地图.png) no-repeat bottom center"></div>
        <p>中国宏观</p>
      </div>
      <div class="dataSingle">
        <div class="dataImg" style="background:url(/Public/source/image/投资.png) no-repeat bottom center"></div>
        <p>投资贸易</p>
      </div>
      <div class="dataSingle">
        <div class="dataImg" style="background:url(/Public/source/image/统计.png) no-repeat bottom center"></div>
        <p>地方统计</p>
      </div>
    </div>
    </a>
  </div>
  <div class="advertise advertise7"></div>
  <div class="adBottomThree">
    <div class="twoPage">
      <!-- 二级标题 -->
      <div class="twoPageDiv">
        <span class="twoPageTitle">创新创业</span>
        <a href=""><span class="twoPageMore">查看更多></span></a>
      </div>
      <!-- 图片 -->
      <div class="twoPageImg">
        <a href=""><div class="twoPageDes">葫芦岛项目热烈欢迎领导来视察</div></a>
      </div>
      <ul class="twoPageUl">
        <!-- <li><div><a href="">荷兰国王今起访华，将听取工作汇报</a></div><span>2018-02-01</span></li>
        <li><div><a href="">荷兰国王今起访华，将听取工作汇报</a></div><span>2018-02-01</span></li>
        <li><div><a href="">荷兰国王今起访华，将听取工作汇报</a></div><span>2018-02-01</span></li>
        <li><div><a href="">荷兰国王今起访华，将听取工作汇报</a></div><span>2018-02-01</span></li> -->
      </ul>
    </div>
    <div class="twoPage">
      <!-- 二级标题 -->
      <div class="twoPageDiv">
        <span class="twoPageTitle">绿色农业</span>
        <a href=""><span class="twoPageMore">查看更多></span></a>
      </div>
      <!-- 图片 -->
      <div class="twoPageImg">
        <a href=""><div class="twoPageDes">葫芦岛项目热烈欢迎领导来视察</div></a>
      </div>
      <ul class="twoPageUl">
        <!-- <li><div><a href="">荷兰国王今起访华，将听取工作汇报</a></div><span>2018-02-01</span></li>
        <li><div><a href="">荷兰国王今起访华，将听取工作汇报</a></div><span>2018-02-01</span></li>
        <li><div><a href="">荷兰国王今起访华，将听取工作汇报</a></div><span>2018-02-01</span></li>
        <li><div><a href="">荷兰国王今起访华，将听取工作汇报</a></div><span>2018-02-01</span></li> -->
      </ul>
    </div>
    <div class="twoPage">
      <!-- 二级标题 -->
      <div class="twoPageDiv">
        <span class="twoPageTitle">国际合作</span>
        <a href=""><span class="twoPageMore">查看更多></span></a>
      </div>
      <!-- 图片 -->
      <div class="twoPageImg">
        <a href=""><div class="twoPageDes">葫芦岛项目热烈欢迎领导来视察</div></a>
      </div>
      <ul class="twoPageUl">
        <!-- <li><div><a href="">荷兰国王今起访华，将听取工作汇报</a></div><span>2018-02-01</span></li>
        <li><div><a href="">荷兰国王今起访华，将听取工作汇报</a></div><span>2018-02-01</span></li>
        <li><div><a href="">荷兰国王今起访华，将听取工作汇报</a></div><span>2018-02-01</span></li>
        <li><div><a href="">荷兰国王今起访华，将听取工作汇报</a></div><span>2018-02-01</span></li> -->
      </ul>
    </div>
  </div>
  <!-- 广告图 -->
  <div class="advertise advertise6"></div>
  <!-- 产业大联盟三个图片 -->
  <div class="bigLian">
    <a href="http://www.cupoftea.cn/Home/Index/chanye" target="_blank"><div class="bigLianOne"></div></a>
    <a href="https://3dly.wware.org/yidaiyilu/" target="_blank"><div class="bigLianTwo"></div></a>
    <a href="http://shop.cupoftea.cn" target="_blank"><div class="bigLianThree"></div></a>
  </div>
  <div class="adBottomThree">
    <div class="twoPage">
      <!-- 二级标题 -->
      <div class="twoPageDiv">
        <span class="twoPageTitle">安全应急</span>
        <a href=""><span class="twoPageMore">查看更多></span></a>
      </div>
      <!-- 图片 -->
      <div class="twoPageImg">
        <a href=""><div class="twoPageDes">葫芦岛项目热烈欢迎领导来视察</div></a>
      </div>
      <ul class="twoPageUl">
        <!-- <li><div><a href="">荷兰国王今起访华，将听取工作汇报</a></div><span>2018-02-01</span></li>
        <li><div><a href="">荷兰国王今起访华，将听取工作汇报</a></div><span>2018-02-01</span></li>
        <li><div><a href="">荷兰国王今起访华，将听取工作汇报</a></div><span>2018-02-01</span></li>
        <li><div><a href="">荷兰国王今起访华，将听取工作汇报</a></div><span>2018-02-01</span></li> -->
      </ul>
    </div>
    <div class="twoPage">
      <!-- 二级标题 -->
      <div class="twoPageDiv">
        <span class="twoPageTitle">产业大联盟</span>
        <a href=""><span class="twoPageMore">查看更多></span></a>
      </div>
      <!-- 图片 -->
      <div class="twoPageImg">
        <a href=""><div class="twoPageDes">葫芦岛项目热烈欢迎领导来视察</div></a>
      </div>
      <ul class="twoPageUl">
        <!-- <li><div><a href="">荷兰国王今起访华，将听取工作汇报</a></div><span>2018-02-01</span></li>
        <li><div><a href="">荷兰国王今起访华，将听取工作汇报</a></div><span>2018-02-01</span></li>
        <li><div><a href="">荷兰国王今起访华，将听取工作汇报</a></div><span>2018-02-01</span></li>
        <li><div><a href="">荷兰国王今起访华，将听取工作汇报</a></div><span>2018-02-01</span></li> -->
      </ul>
    </div>
    <div class="twoPage">
      <!-- 二级标题 -->
      <div class="twoPageDiv">
        <span class="twoPageTitle">知识产权</span>
        <a href=""><span class="twoPageMore">查看更多></span></a>
      </div>
      <!-- 图片 -->
      <div class="twoPageImg">
        <a href=""><div class="twoPageDes">葫芦岛项目热烈欢迎领导来视察</div></a>
      </div>
      <ul class="twoPageUl">
        <!-- <li><div><a href="">荷兰国王今起访华，将听取工作汇报</a></div><span>2018-02-01</span></li>
        <li><div><a href="">荷兰国王今起访华，将听取工作汇报</a></div><span>2018-02-01</span></li>
        <li><div><a href="">荷兰国王今起访华，将听取工作汇报</a></div><span>2018-02-01</span></li>
        <li><div><a href="">荷兰国王今起访华，将听取工作汇报</a></div><span>2018-02-01</span></li> -->
      </ul>
    </div>
  </div>
  <!-- 广告图 -->
  <div class="advertise advertise7"></div>
  <!-- 炫酷图库 -->
  <div class="downImg">
    <!-- 图库顶部顶部 -->
    <div class="imgTop">
      <span class="imgImg"></span>
      <span class="imgFont">炫酷图库</span>
      <span class="imgMore">查看更多</span>
    </div>
    <!-- 炫酷图库下部 -->
    <div class="imgBottom">
      <!-- 左侧大的 -->
      <div class="imgleft">
        <a href=""><span class="download"></span></a>
      </div>
      <!-- 右侧 -->
      <div class="imgRight">
        <div class="smallImg smallImg1">
          <a href=""><span class="download"></span></a>
        </div>
        <div class="smallImg smallImg2">
          <a href=""><span class="download"></span></a>
        </div>
        <div class="smallImg smallImg3">
          <a href=""><span class="download"></span></a>
        </div>
        <div class="smallImg smallImg4">
          <a href=""><span class="download"></span></a>
        </div>
      </div>
    </div>
  </div>
  <!-- 广告图 -->
  <div class="advertise advertise8"></div>
  <!-- 丝绸图 -->
  <div class="sichou"></div>
  <!-- 下部蓝色导航 -->
  <div class="bottomNav">
    <!-- 蓝色导航容器 -->
    <div class="blueContent">
      <div class="firstLine clear">
        <div class="singleBlue">
          <p><a href="http://www.cupoftea.cn/Index/indextwo#时政新闻?1" target="_blank">时政新闻</a></p>
          <ul>
            <li><a href="http://www.cupoftea.cn/Index/indextwo#时政新闻?1" target="_blank">领导动态</a></li>
            <li><a href="http://www.cupoftea.cn/Index/indextwo#时政新闻?1" target="_blank">国内新闻</a></li>
            <li><a href="http://www.cupoftea.cn/Index/indextwo#时政新闻?1" target="_blank">国际新闻</a></li>
            <li><a href="http://www.cupoftea.cn/Index/indextwo#时政新闻?1" target="_blank">智库资源</a></li>
            <li><a href="http://www.cupoftea.cn/Index/indextwo#时政新闻?1" target="_blank">地方资讯</a></li>
            <li><a href="http://www.cupoftea.cn/Index/indextwo#时政新闻?1" target="_blank">会议活动</a></li>
          </ul>
        </div>
        <div class="singleBlue">
          <p><a href="http://www.cupoftea.cn/Index/indextwo#政策环境?2" target="_blank">政策环境</a></p>
          <ul>
            <li><a href="http://www.cupoftea.cn/Index/indextwo#政策环境?2" target="_blank">权威发布</a></li>
            <li><a href="http://www.cupoftea.cn/Index/indextwo#政策环境?2" target="_blank">政策法规</a></li>
            <li><a href="http://www.cupoftea.cn/Index/indextwo#政策环境?2" target="_blank">政策解读</a></li>
            <li><a href="http://www.cupoftea.cn/Index/indextwo#政策环境?2" target="_blank">标准建设</a></li>
            <li><a href="http://www.cupoftea.cn/Index/indextwo#政策环境?2" target="_blank">国际借鉴</a></li>
            <li><a href="http://www.cupoftea.cn/Index/indextwo#政策环境?2" target="_blank">政策咨询</a></li>
          </ul>
        </div>
        <div class="singleBlue">
          <p><a href="http://www.cupoftea.cn/Index/indextwo#大数据云?5" target="_blank">大数据云</a></p>
          <ul>
            <li><a href="http://www.cupoftea.cn/Index/indextwo#大数据云?5" target="_blank">数据新闻</a></li>
            <li><a href="http://www.cupoftea.cn/Index/indextwo#大数据云?5" target="_blank">数据建设</a></li>
            <li><a href="http://www.cupoftea.cn/Index/indextwo#大数据云?5" target="_blank">数据查询</a></li>
            <li><a href="http://www.cupoftea.cn/Index/indextwo#大数据云?5" target="_blank">大数据解读</a></li>
          </ul>
        </div>
        <div class="singleBlue">
          <p><a href="http://www.cupoftea.cn/Index/indextwo#智库建设?9" target="_blank">智库建设</a></p>
          <ul>
            <li><a href="http://www.cupoftea.cn/Index/indextwo#智库建设?9" target="_blank">国际人文</a></li>
            <li><a href="http://www.cupoftea.cn/Index/indextwo#智库建设?9" target="_blank">中华人文</a></li>
            <li><a href="http://www.cupoftea.cn/Index/indextwo#智库建设?9" target="_blank">友好往来</a></li>
            <li><a href="http://www.cupoftea.cn/Index/indextwo#智库建设?9" target="_blank">舌尖上的美味</a></li>
            <li><a href="http://www.cupoftea.cn/Index/indextwo#智库建设?9" target="_blank">民族服饰</a></li>
            <li><a href="http://www.cupoftea.cn/Index/indextwo#智库建设?9" target="_blank">非遗研究院</a></li>
          </ul>
        </div>
        <div class="singleBlue">
          <p><a href="http://www.cupoftea.cn/Index/indextwo#文化旅游?10" target="_blank">文化旅游</a></p>
          <ul>
            <li><a href="http://www.cupoftea.cn/Index/indextwo#文化旅游?10" target="_blank">国学风采</a></li>
            <li><a href="http://www.cupoftea.cn/Index/indextwo#文化旅游?10" target="_blank">旅游名录</a></li>
            <li><a href="http://www.cupoftea.cn/Index/indextwo#文化旅游?10" target="_blank">城市名片</a></li>
            <li><a href="http://www.cupoftea.cn/Index/indextwo#文化旅游?10" target="_blank">教育培训</a></li>
            <li><a href="http://www.cupoftea.cn/Index/indextwo#文化旅游?10" target="_blank">名山大川</a></li>
            <li><a href="http://www.cupoftea.cn/Index/indextwo#文化旅游?10" target="_blank">文化活动</a></li>
            <li><a href="http://www.cupoftea.cn/Index/indextwo#文化旅游?10" target="_blank">视频专栏</a></li>
          </ul>
        </div>
        <div class="singleBlue">
          <p><a href="http://www.cupoftea.cn/Index/indextwo#能源制造?11" target="_blank">能源制造</a></p>
          <ul>
            <li><a href="http://www.cupoftea.cn/Index/indextwo#能源制造?11" target="_blank">新能源</a></li>
            <li><a href="http://www.cupoftea.cn/Index/indextwo#能源制造?11" target="_blank">航空产业园</a></li>
            <li><a href="http://www.cupoftea.cn/Index/indextwo#能源制造?11" target="_blank">3D打印</a></li>
          </ul>
        </div>
        <div class="singleBlue">
          <p><a href="http://www.cupoftea.cn/Home/Index/logistics" target="_blank">物资大流通</a></p>
          <ul>
            <li><a href="http://www.cupoftea.cn/Home/Index/logistics" target="_blank">水运</a></li>
            <li><a href="http://www.cupoftea.cn/Home/Index/logistics" target="_blank">陆运</a></li>
            <li><a href="http://www.cupoftea.cn/Home/Index/logistics" target="_blank">空运</a></li>
            <li><a href="http://www.cupoftea.cn/Home/Index/logistics" target="_blank">火车运输</a></li>
          </ul>
        </div>
      </div>
      <div class="secondLine clear">
        <div class="singleBlue">
          <p><a href="http://www.cupoftea.cn/Index/indextwo#金融资本?12" target="_blank">金融资本</a></p>
          <ul>
            <li><a href="http://www.cupoftea.cn/Index/indextwo#金融资本?12" target="_blank">全球经济</a></li>
            <li><a href="http://www.cupoftea.cn/Index/indextwo#金融资本?12" target="_blank">金融市场</a></li>
            <li><a href="http://www.cupoftea.cn/Index/indextwo#金融资本?12" target="_blank">创新经济</a></li>
            <li><a href="http://www.cupoftea.cn/Index/indextwo#金融资本?12" target="_blank">互联网时代的新经济模式</a></li>
          </ul>
        </div>
        <div class="singleBlue">
          <p><a href="http://www.cupoftea.cn/Index/indextwo#人物专访?13" target="_blank">人物专访</a></p>
          <ul>
            <li><a href="http://www.cupoftea.cn/Index/indextwo#人物专访?13" target="_blank">巨匠大师</a></li>
            <li><a href="http://www.cupoftea.cn/Index/indextwo#人物专访?13" target="_blank">平凡人生</a></li>
            <li><a href="http://www.cupoftea.cn/Index/indextwo#人物专访?13" target="_blank">难忘记忆</a></li>
          </ul>
        </div>
        <div class="singleBlue">
          <p><a href="http://www.cupoftea.cn/Index/indextwo#人工智能?14" target="_blank">人工智能</a></p>
          <ul>
            <li><a href="http://www.cupoftea.cn/Index/indextwo#人工智能?14" target="_blank">智能识别</a></li>
            <li><a href="http://www.cupoftea.cn/Index/indextwo#人工智能?14" target="_blank">智能搜索</a></li>
            <li><a href="http://www.cupoftea.cn/Index/indextwo#人工智能?14" target="_blank">信息感应</a></li>
            <li><a href="http://www.cupoftea.cn/Index/indextwo#人工智能?14" target="_blank">智能分析</a></li>
          </ul>
        </div>
        <div class="singleBlue">
          <p><a href="http://www.cupoftea.cn/Index/indextwo#健康医产?15" target="_blank">健康医产</a></p>
          <ul>
            <li><a href="http://www.cupoftea.cn/Index/indextwo#健康医产?15" target="_blank">绿色康养</a></li>
            <li><a href="http://www.cupoftea.cn/Index/indextwo#健康医产?15" target="_blank">健康食品</a></li>
            <li><a href="http://www.cupoftea.cn/Index/indextwo#健康医产?15" target="_blank">保健产业</a></li>
            <li><a href="http://www.cupoftea.cn/Index/indextwo#健康医产?15" target="_blank">药企发展</a></li>
            <li><a href="http://www.cupoftea.cn/Index/indextwo#健康医产?15" target="_blank">全科医疗</a></li>
            <li><a href="http://www.cupoftea.cn/Index/indextwo#健康医产?15" target="_blank">中医中药</a></li>
            <li><a href="http://www.cupoftea.cn/Index/indextwo#健康医产?15" target="_blank">医疗美容</a></li>
            <li><a href="http://www.cupoftea.cn/Index/indextwo#健康医产?15" target="_blank">美妆名伶</a></li>
            <li><a href="http://www.cupoftea.cn/Index/indextwo#健康医产?15" target="_blank">优生优育</a></li>
            <li><a href="http://www.cupoftea.cn/Index/indextwo#健康医产?15" target="_blank">人文医学</a></li>
          </ul>
        </div>
        <div class="singleBlue">
          <p><a href="http://www.cupoftea.cn/Index/indextwo#创新创业?16" target="_blank">创新创业</a></p>
          <ul>
            <li><a href="http://www.cupoftea.cn/Index/indextwo#创新创业?16" target="_blank">创业指导</a></li>
            <li><a href="http://www.cupoftea.cn/Index/indextwo#创新创业?16" target="_blank">项目甄选</a></li>
            <li><a href="http://www.cupoftea.cn/Index/indextwo#创新创业?16" target="_blank">天使孵化</a></li>
            <li><a href="http://www.cupoftea.cn/Index/indextwo#创新创业?16" target="_blank">黑马实战营</a></li>
          </ul>
        </div>
        <div class="singleBlue">
          <p><a href="http://www.cupoftea.cn/Index/indextwo#绿色农业?19" target="_blank">绿色农业</a></p>
          <ul>
            <li><a href="http://www.cupoftea.cn/Index/indextwo#绿色农业?19" target="_blank">动植物农业</a></li>
            <li><a href="http://www.cupoftea.cn/Index/indextwo#绿色农业?19" target="_blank">休闲农业</a></li>
            <li><a href="http://www.cupoftea.cn/Index/indextwo#绿色农业?19" target="_blank">传统美食</a></li>
            <li><a href="http://www.cupoftea.cn/Index/indextwo#绿色农业?19" target="_blank">三色农业</a></li>
            <li><a href="http://www.cupoftea.cn/Index/indextwo#绿色农业?19" target="_blank">菌类农业</a></li>
            <li><a href="http://www.cupoftea.cn/Index/indextwo#绿色农业?19" target="_blank">设施农业</a></li>
            <li><a href="http://www.cupoftea.cn/Index/indextwo#绿色农业?19" target="_blank">园艺农业</a></li>
            <li><a href="http://www.cupoftea.cn/Index/indextwo#绿色农业?19" target="_blank">观光农业</a></li>
            <li><a href="http://www.cupoftea.cn/Index/indextwo#绿色农业?19" target="_blank">环保农业</a></li>
            <li><a href="http://www.cupoftea.cn/Index/indextwo#绿色农业?19" target="_blank">信息农业</a></li>
          </ul>
        </div>
        <div class="singleBlue">
          <p><a href="http://www.cupoftea.cn/index/chanye.html" target="_blank">产业大联盟</a></p>
          <ul>
            <li><a href="https://3dly.wware.org/yidaiyilu/" target="_blank">3D展厅</a></li>
            <li><a href="http://shop.cupoftea.cn" target="_blank">盟品电商</a></li>
            <li><a href="http://www.cupoftea.cn/index/chanye.html" target="_blank">联盟动态</a></li>
            <li><a href="http://www.cupoftea.cn/index/chanye.html" target="_blank">联盟成员单位</a></li>
            <li><a href="http://www.cupoftea.cn/index/chanye.html" target="_blank">榜上有名</a></li>
            <li><a href="http://www.cupoftea.cn/index/chanye.html" target="_blank">信息通告</a></li>
          </ul>
        </div>
      </div>
      <div class="thirdLine clear">
        <div class="singleBlue">
          <p><a href="http://www.cupoftea.cn/Index/indextwo#国际合作?21" target="_blank">国际合作</a></p>
          <ul>
            <li><a href="http://www.cupoftea.cn/Index/indextwo#国际合作?21" target="_blank">各国概况</a></li>
            <li><a href="http://www.cupoftea.cn/Index/indextwo#国际合作?21" target="_blank">企业咨询</a></li>
            <li><a href="http://www.cupoftea.cn/Index/indextwo#国际合作?21" target="_blank">合作项目</a></li>
            <li><a href="http://www.cupoftea.cn/Index/indextwo#国际合作?21" target="_blank">项目查询</a></li>
            <li><a href="http://www.cupoftea.cn/Index/indextwo#国际合作?21" target="_blank">项目申请</a></li>
            <li><a href="http://www.cupoftea.cn/Index/indextwo#国际合作?21" target="_blank">交流互动</a></li>
            <li><a href="http://www.cupoftea.cn/Index/indextwo#国际合作?21" target="_blank">海外剪影</a></li>
          </ul>
        </div>
        <div class="singleBlue">
          <p><a href="http://www.cupoftea.cn/Index/indextwo#安全应急?23" target="_blank">安全应急</a></p>
          <ul>
            <li><a href="http://www.cupoftea.cn/Index/indextwo#安全应急?23" target="_blank">公共安全</a></li>
            <li><a href="http://www.cupoftea.cn/Index/indextwo#安全应急?23" target="_blank">安全预警</a></li>
            <li><a href="http://www.cupoftea.cn/Index/indextwo#安全应急?23" target="_blank">应急处置</a></li>
            <li><a href="http://www.cupoftea.cn/Index/indextwo#安全应急?23" target="_blank">应急科技</a></li>
          </ul>
        </div>
        <div class="singleBlue">
          <p><a href="https://www.ipr99.com/" target="_blank">知识产权</a></p>
          <ul>
            <li><a href="https://www.ipr99.com/" target="_blank">溯源存证</a></li>
            <li><a href="https://www.ipr99.com/right_regis/" target="_blank">版权登记</a></li>
            <li><a href="https://www.ipr99.com/domestic_trademark/" target="_blank">商标注册</a></li>
            <li><a href="https://www.ipr99.com/domestic_patent/" target="_blank">专利申请</a></li>
            <li><a href="https://www.ipr99.com/expertise/" target="_blank">司法鉴定</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- 最下面备案表 -->
  <!-- <link rel="stylesheet" href="/Public/source/libs/reset.css">
<link rel="stylesheet" href="/Public/css/foot.css">
<div class="beian">
  <div class="beianWrap clear">
    <div class="beianOne">
      <span class="zhidao">指导单位&nbsp;:&nbsp;人民日报社 中国报业协会</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="zhuban">主办单位&nbsp;:&nbsp;中国报业 中国金天北京网络科技中心</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="yunying">运营支持&nbsp;:&nbsp;北京沐宏宇企业策划中心</span>
    </div>
    <div class="beianTwo">
      <span class="banquan">版权所有&nbsp;:&nbsp;中国金天国际集团 中国金天北京网络科技中心</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>京ICP备14028561号-3</span>
    </div>
    <div class="erweima">

    </div>
  </div>
</div>
 -->
  <div class="beian">
    <div class="beianWrap clear">
      <div class="beianOne">
        <span class="zhidao">指导单位&nbsp;:&nbsp;人民日报社 中国报业协会</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="zhuban">主办单位&nbsp;:&nbsp;中国报业 中国金天北京网络科技中心</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="yunying">运营支持&nbsp;:&nbsp;北京沐宏宇企业策划中心</span>
      </div>
      <div class="beianTwo">
        <span class="banquan">版权所有&nbsp;:&nbsp;中国金天国际集团 中国金天北京网络科技中心</span>&nbsp;&nbsp;&nbsp;&nbsp;<span>法律顾问: 北京市连纵律师事务所</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>京ICP备14028561号-3</span>
      </div>
      <div class="erweima">

      </div>
    </div>
  </div>
</body>
</html>
<script type="text/javascript">
// 请求蓝色导航底部数据
// $.ajax({
//   url:"<?php echo U('Home/Index/type');?>",
//   success:function (msg) {
//     var msg = JSON.parse(msg);
//     console.log(msg);
//     for(var data of msg){
//       var onetitle = $('<div class="singleBlue">'
//         +'<p><a href="">'+ data.name +'</a></p>'
//         +'<ul class="oneul'+ data.id +'"></ul>'
//       +'</div>').appendTo($(".blueContent"));
//       for(var data1 of data.two){
//         var twotitle = $('<li><a href="">'+ data1.name +'</a></li>').appendTo($(".oneul"+ data.id +""));
//       }
//     }
//   }
// }
$(function(){
//   var timer;
// _Ticker = $("#T1").newsTicker();
// _Ticker.on("mouseenter",function(){
//   var __self = this;
//   timer = setTimeout(function(){
//     __self.pauseTicker();
//   },200);
// });
// _Ticker.on("mouseleave",function(){
//   clearTimeout(timer);
//   if(!timer) return !1;
//   this.startTicker();
// });
  $('#e').rollNoInterval().left();
});
// 搜索事件
$(".search").keyup(function(event) {
  if (event.keyCode == 13) {
    var search = $(this).val();
    if(search != ""){
      console.log(search);
      $.ajax({
        url:"http://www.cupoftea.cn/Home/Index/searchnews",
        data:{"keywords":search},
        dataType:"json",
        type:"post",
        success:function (msg) {
          console.log(msg);
          var msg = JSON.stringify(msg);
          localStorage.setItem("search",msg);
          window.open("http://www.cupoftea.cn/Home/Index/indexsearch");
        }
      })
    }
  }
})
</script>