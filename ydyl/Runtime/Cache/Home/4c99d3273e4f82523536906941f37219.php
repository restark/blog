<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>一带一路产业大联盟</title>
  <link rel="stylesheet" href="/Public/source/libs/reset.css">
  <link rel="stylesheet" href="/Public/css/login/login.css">
  <script type="text/javascript" src="/Public/source/libs/jquery.js"></script>
</head>
<body>
  <!-- 一带一路建设网标题 -->
  <div class="oneTitle clear">
    <!-- 标题图片 -->
    <div class="titleImage"></div>
    <div class="titleNav">
      <!-- 一带一路一行导航 -->
      <ul class="titleBlue">
        <li><a href="http://www.cupoftea.cn">中国一带一路建设网首页</a></li>
      </ul>
      <ul class="titleBlack">
        <li><a href="/Home/Login/index.html">登录</a></li>
        <li>&</li>
        <li><a href="/Home/Login/register.html">注册</a></li>
        <li>&</li>
        <li><a href="/Home/Login/juyuwang.html">局域网</a></li>
      </ul>
    </div>
  </div>
  <!-- 蓝色横线 -->
  <hr style=" height:2px;border:none;border-top:2px solid #007fdd;">
  <!-- 注册登录模块 -->
  <div class="login">
    <!-- 广告 -->
    <div class="loginAd"></div>
    <div class="denglu">
      <p class="denglup">&nbsp;登录</p>
      <input type="text" class="phone" placeholder="请输入您的手机号">
      <input type="password" class="pwd" placeholder="请输入您的密码">
      <div class="tishi">
        <span class="error">您输入的账号或密码错误，请重新输入</span><span class="forget"><a href="<?php echo U('Home/Login/forget');?>">忘记密码</a></span>
      </div>
      <div class="loginSure">登录</div>
      <div class="loginRegister" onclick="window.location.href='http://www.cupoftea.cn/Home/Login/register.html'">注册</div>
    </div>
  </div>
</body>
</html>
<script type="text/javascript">
  $(function () {
    $(".loginSure").on("click",function () {
      var phone = $(".phone").val();
      var pwd = $(".pwd").val();
      var tishi = $(".error");
      if(phone != "" && pwd != ""){
        $.ajax({
          url:"http://www.cupoftea.cn/Home/Login/login",
          type:'post',
          data:{
            "phone":phone,
            "password":pwd
          },
          dataType:"json",
          success:function (msg) {
            if(msg == 1){
              window.location.href = "http://www.cupoftea.cn";
            }else if(msg == 0){
              tishi.css("display","block");
            }
          }
        })
      }
    })
  })
</script>