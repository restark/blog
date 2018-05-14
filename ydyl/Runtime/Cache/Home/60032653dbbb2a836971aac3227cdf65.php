<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>一带一路产业大联盟</title>
  <link rel="stylesheet" href="/Public/source/libs/reset.css">
  <link rel="stylesheet" href="/Public/css/login/zhuce.css">
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
        <li>登录</li>
        <li>&</li>
        <li>注册</li>
        <li>&</li>
        <li>局域网</li>
      </ul>
    </div>
  </div>
  <!-- 蓝色横线 -->
  <hr style=" height:2px;border:none;border-top:2px solid #007fdd;">
  <!-- 注册登录模块 -->
  <div class="register">
    <!-- 左侧部分 -->
    <div class="registerLeft">
      <p style="margin-top:35px">请输入真实姓名，其他用户不可见，我网将严格保密</p>
      <p style="margin-top:55px">请使用你的手机注册，绑定后可用手机登录网站</p>
      <p style="margin-top:50px">请输入6位短信验证码</p>
      <p style="margin-top:55px">8-20个字符，建议使用大小写字母及数字，增强密码安全性</p>
      <p style="margin-top:70px">请输入图像验证码</p>
    </div>
    <!-- 右侧部分 -->
    <div class="registerRight">
      <p class="blueRegister">&nbsp;注册</p>
      <input class="name" type="text" placeholder="请输入您的真实姓名">
      <input class="phone" type="text" placeholder="请输入您的手机号">
      <div class="yanzheng">
        <input class="yanzhengma" type="text" placeholder="请输入您的验证码">
        <div class="fasong">发送验证码</div>
      </div>
      <input class="password" type="text" placeholder="请输入您的密码">
      <p class="error">您输入的密码格式有错误，请重新输入</p>
      <div class="tuxiang">
        <input type="text" placeholder="请输入图像验证码">
        <div class="qingqiutu"></div>
        <div class="shuaxin"></div>
      </div>
      <div class="xieyi">
        <div class="tongyi"></div><p>我已阅读并同意<a href="">一带一路建设网</a>协议</p>
      </div>
      <div class="surezhuce">注册</div>
    </div>
  </div>
</body>
</html>
<script type="text/javascript">
  $(function () {
    var validCode=true;
    $(".fasong").on("click",function () {
      var time=60;
      var code = $(this);
      var name = $(".name").val();
      var phone = $(".phone").val();
      if(name != "" && phone!=""){
        if(!(/^1[3|4|5|8][0-9]\d{4,8}$/.test(phone))){
            alert("不是完整的11位手机号");
            return false;
        }else{
          $.ajax({
            url:"http://www.cupoftea.cn/Home/Login/sendcode",
            data:{"phone":phone},
            dataType:"json",
            type:"get",
            success:function (msg) {
              var data = msg; 
	                if(data==0){
	                    alert('发送失败，请重新点击发送');
	                }else if(data==1){
				  		    //发送验证码
			           	  if (validCode) {
  				           	validCode=false;
  				           	code.addClass("msgs1");
  			               	var t=setInterval(function(){
  				           		time--;
  				           		code.html(time+"秒");
  				           		if (time==0) {
  					       			clearInterval(t);
  				           			code.html("重新获取");
  					       			validCode=true;
          								}
          							},1000)
          						}
  	                }else if(data==3){
          					  alert('您请求验证码次数过于频繁,请明天再来');
          					}else{}
	            }
          })
        }
      }




    })
  })
</script>