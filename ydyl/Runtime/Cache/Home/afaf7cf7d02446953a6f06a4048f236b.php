<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>一带一路产业大联盟</title>
  <link rel="stylesheet" href="/Public/source/libs/reset.css">
  <link rel="stylesheet" href="/Public/css/indexthree.css">
  <!-- <link rel="stylesheet" href="/Public/share/css/share.css" type="text/css" /> -->
  <script type="text/javascript" src="/Public/source/libs/jquery.js"></script>
  <!-- <script src="/Public/share/js/share.js" type="text/javascript"></script> -->
  <script type="text/javascript" src="/Public/js/indexthree.js"></script>
</head>
<body>
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

  <!-- 一带一路建设网标题 -->
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
  <!-- 搜索框及前面导航 -->
  <div class="newSearch">
    <span class="yitype"><a href="" target="_blank"></a>></span><span class="ertype"></span><span>&nbsp;正文</span>
    <input type="text" class="search" placeholder="请输入搜索关键字">
  </div>
  <!-- 题目来源栏 -->
  <div class="titleSource">
    <p class="blackTitle"></p>
    <div class="dateTime">
      <span class="phptime"></span>
      <span class="from">来源:</span>
      <span class="from1">中国人民网</span>
      <div class="titleshare">
        <!-- <div class="bdsharebuttonbox"><a href="#" class="bds_more" data-cmd="more"></a><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a><a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a></div> -->

      </div>
    </div>
  </div>
  <div class="newMain clear">
    <div class="newMainleft">
      <div class="newDetial">
        <!-- <div class="newsImg"></div> -->
        <div class="contentWrap">
          <?php echo ($news["message"]); ?>
        </div>
      </div>
      <!-- 相关新闻 -->
      <div class="moreNew">
        <div class="nearnew">相关新闻</div>
        <!-- 单条新闻 -->
        <div class="detialWrap">
          <!-- <div class="singleNew">
            <p>一定选最好的黄金地段，雇发过设计师，建就得建最高档次的公寓，电梯直接入户，户型最小怎么也得四百平米</p>
            <div class="singleNewBottom">
              <div class="singleNewBottomImg">

              </div>
              <div class="singleNewBottomDes">
                <p>一定得选最好的黄金地段，雇法国设计师，建就得建最高档次的公寓！电梯直接入户，户型最小也得四百平米，什么宽带呀，光缆呀，卫星呀能给他接的全给他接上，楼上边有花园(儿)，楼里边有游泳池，楼子里站一个英国管家，戴假发，特绅士的那种，业主一进门(儿)，甭管有事(儿)没事，(儿)都得跟人家说may I help you sir(我能为您作点什么吗?)？一口地道的英国伦敦腔(儿)，倍(儿)有面子！社区里再建一所贵族学校，教材用哈佛的，一年光学费就得几万美金，再建一所美国诊所(儿)，二十四小时候诊，就是一个字(儿)贵，看感冒就得花个万八千的！</p>
                <div class="newTime">
                  <span class="time">2018-04-18 17:45:24</span>
                  <span class="share"></span>
                </div>
              </div>
            </div>
          </div> -->
        </div>

        <p class="moreShow">显示更多</p>
      </div>
    </div>
    <div class="newMainright">
      <div class="newWrap1">
        <!-- 二级导航 -->
        <!-- <div class="secondNav">
          <div class="secondTitle">国内新闻</div>
          <div class="secondImg">
            <div class="secondImgDes">
              习近平将出席亚洲博鳌论坛开幕式
            </div>
          </div>
          <ul class="secondNew">
            <li><a href="">一定得选最好的黄金地段，雇法国设计师</a></li>
            <li><a href="">一定得选最好的黄金地段，雇法国设计师</a></li>
            <li><a href="">一定得选最好的黄金地段，雇法国设计师</a></li>
            <li><a href="">一定得选最好的黄金地段，雇法国设计师</a></li>
            <li><a href="">一定得选最好的黄金地段，雇法国设计师</a></li>
            <li><a href="">一定得选最好的黄金地段，雇法国设计师</a></li>
          </ul>
        </div> -->
      </div>

      <!-- 广告 -->
      <div class="smallAd">

      </div>
    </div>
  </div>
  <!-- 最下面备案表 -->
  <div class="beian">
    <div class="beianWrap">
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
  $(function () {
    // var url = window.location.href
    // var title = document.title;
    // console.log(title);
    // $(".titleshare").socialShare({
    //     // content: '',
    //     url:url,
    //     titile:title
    // });

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
    })
</script>
<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"1","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"16"},"slide":{"type":"slide","bdImg":"6","bdPos":"right","bdTop":"100"}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];
</script>