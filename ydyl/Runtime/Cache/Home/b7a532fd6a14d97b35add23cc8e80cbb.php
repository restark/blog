<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>一带一路产业大联盟</title>
  <link rel="stylesheet" href="/Public/source/libs/reset.css">
  <link rel="stylesheet" href="/Public/css/logistics.css">
  <script type="text/javascript" src="/Public/source/libs/jquery.js"></script>
</head>
<body>
  <!-- 顶部图片 -->
  <div class="fenjin"></div>
  <!-- 一带一路建设网标题 -->
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
  <!-- 水运陆运横条 -->
  <div class="yunshu">
    <ul class="clear">
      <li class="yunshuli liclass">水运</li>
      <li class="yunshuli">陆运</li>
      <li class="yunshuli">空运</li>
      <li class="yunshuli">火车运输</li>
    </ul>
  </div>
  <div class="yunshuWrap">
    <div class="highSearch clear">
      <input type="text" placeholder="请输入项目名称">
      <input type="text" placeholder="请输入国家名称">
      <input type="text" placeholder="请输入单号">
      <div class="highSearchButton"></div>
    </div>
    <!-- table表格 -->
    <div class="tableDiv">
      <ul class="tableTitle">
        <li class="one">编号</li>
        <li class="two">项目名称</li>
        <li class="three">起始地</li>
        <li class="four">目的地</li>
        <li class="five">物流公司</li>
        <li class="six">单号</li>
        <li class="seven">进度</li>
        <li class="eight">异常</li>
        <li class="nine">操作</li>
      </ul>
      <ul class="tableline">
        <li class="one">001</li>
        <li class="two">生活物品</li>
        <li class="three">中国广州深圳市</li>
        <li class="four">沙特阿拉伯</li>
        <li class="five">中国国际物流公司</li>
        <li class="six">123456789</li>
        <li class="seven">运送中</li>
        <li class="eight">无异常</li>
        <li class="nine">查看详情</li>
      </ul>
      <ul class="tableline">
        <li class="one">001</li>
        <li class="two">生活物品</li>
        <li class="three">中国广州深圳市</li>
        <li class="four">沙特阿拉伯</li>
        <li class="five">中国国际物流公司</li>
        <li class="six">123456789</li>
        <li class="seven">运送中</li>
        <li class="eight">无异常</li>
        <li class="nine">查看详情</li>
      </ul>
      <ul class="tableline">
        <li class="one">001</li>
        <li class="two">生活物品</li>
        <li class="three">中国广州深圳市</li>
        <li class="four">沙特阿拉伯</li>
        <li class="five">中国国际物流公司</li>
        <li class="six">123456789</li>
        <li class="seven">运送中</li>
        <li class="eight">无异常</li>
        <li class="nine">查看详情</li>
      </ul>
      <ul class="tableline">
        <li class="one">001</li>
        <li class="two">生活物品</li>
        <li class="three">中国广州深圳市</li>
        <li class="four">沙特阿拉伯</li>
        <li class="five">中国国际物流公司</li>
        <li class="six">123456789</li>
        <li class="seven">运送中</li>
        <li class="eight">无异常</li>
        <li class="nine">查看详情</li>
      </ul>
      <ul class="tableline">
        <li class="one">001</li>
        <li class="two">生活物品</li>
        <li class="three">中国广州深圳市</li>
        <li class="four">沙特阿拉伯</li>
        <li class="five">中国国际物流公司</li>
        <li class="six">123456789</li>
        <li class="seven">运送中</li>
        <li class="eight">无异常</li>
        <li class="nine">查看详情</li>
      </ul>
      <ul class="tableline">
        <li class="one">001</li>
        <li class="two">生活物品</li>
        <li class="three">中国广州深圳市</li>
        <li class="four">沙特阿拉伯</li>
        <li class="five">中国国际物流公司</li>
        <li class="six">123456789</li>
        <li class="seven">运送中</li>
        <li class="eight">无异常</li>
        <li class="nine">查看详情</li>
      </ul>
      <ul class="tableline">
        <li class="one">001</li>
        <li class="two">生活物品</li>
        <li class="three">中国广州深圳市</li>
        <li class="four">沙特阿拉伯</li>
        <li class="five">中国国际物流公司</li>
        <li class="six">123456789</li>
        <li class="seven">运送中</li>
        <li class="eight">无异常</li>
        <li class="nine">查看详情</li>
      </ul>
      <ul class="tableline">
        <li class="one">001</li>
        <li class="two">生活物品</li>
        <li class="three">中国广州深圳市</li>
        <li class="four">沙特阿拉伯</li>
        <li class="five">中国国际物流公司</li>
        <li class="six">123456789</li>
        <li class="seven">运送中</li>
        <li class="eight">无异常</li>
        <li class="nine">查看详情</li>
      </ul>
    </div>
    <!-- 分页 -->
    <div class="fenye">

    </div>
  </div>
</body>
</html>
<script type="text/javascript">
  $(function(){
    $(".nine").on("click",function () {
      window.location.href = "http://www.cupoftea.cn/Home/Index/urgent";
    })
    $(".yunshu>ul>li").on("click",function () {
      $(this).addClass("liclass").siblings().removeClass("liclass");
    })
  })
</script>