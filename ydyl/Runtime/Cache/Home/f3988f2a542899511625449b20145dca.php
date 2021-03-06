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
  <div class="register">
    <!-- 左侧部分 -->
    <div class="registerLeft">
      <p style="margin-top:35px">请输入真实姓名，其他用户不可见，我网将严格保密</p>
      <p style="margin-top:50px">请使用你的手机注册，绑定后可用手机登录网站</p>
      <p style="margin-top:35px">请输入图像验证码</p>
      <p style="margin-top:50px">请输入6位短信验证码</p>
      <p style="margin-top:55px">8-20个字符，建议使用大小写字母及数字，增强密码安全性</p>

    </div>
    <!-- 右侧部分 -->
    <div class="registerRight">
      <p class="blueRegister">&nbsp;注册</p>
      <input class="name" type="text" placeholder="请输入您的真实姓名">
      <input class="phone" type="text" placeholder="请输入您的手机号">
      <div class="tuxiang">
        <input type="text" class="imgyan" placeholder="请输入图像验证码">
        <img src="<?php echo U('Home/Login/verify');?>" onClick="this.src=this.src+'?'+Math.random()">
      </div>
      <div class="yanzheng">
        <input class="yanzhengma" type="text" placeholder="请输入您的验证码">
        <div class="fasong">发送验证码</div>
      </div>
      <input class="password" type="password" placeholder="请输入您的密码">
      <p class="error">您输入的密码格式有错误，请重新输入</p>

      <div class="xieyi">
        <div class="tongyi"></div><div class="butongyi"></div><p>我已阅读并同意<a href="">一带一路建设网</a>协议</p>
      </div>
      <div class="surezhuce">注册</div>
    </div>
  </div>
</body>
</html>
<script type="text/javascript">
  $(function () {
    $(".butongyi").css("display","none");
    var i = 0;
    $(".tongyi").on("click",function () {
      $(this).css("display","none");
      $(".butongyi").css("display","block");
      i = 1;
    })
    $(".butongyi").on("click",function () {
      $(this).css("display","none");
      $(".tongyi").css("display","block");
      i = 0;
    })
    var validCode=true;
    $(".fasong").on("click",function () {
      var time=60;
      var code = $(this);
      var name = $(".name").val();
      var phone = $(".phone").val();
      var imgyan = $(".imgyan").val();
      if(name != "" && phone!="" && imgyan !=""){
        console.log(imgyan);
        if(!(/^1[3|4|5|8][0-9]\d{4,8}$/.test(phone))){
            alert("不是完整的11位手机号");
            return false;
        }else{
          var dat = {
            "phone":phone,
            "tcode":imgyan
          };
          console.log(dat);
          $.ajax({
            url:"http://www.cupoftea.cn/Home/Login/sendcode",
            data:dat,
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
          					  alert('验证码错误');
          					}else if(data==4){
                      alert("手机号已存在");
                    }
	            }
          })
        }
      }else{
        alert("请将姓名、手机号、图像验证码补充完整");
      }
    })

    // 点击注册
    $(".surezhuce").on("click",function () {
      if(i == 0){
        var name = $(".name").val();
        var phone = $(".phone").val();
        var password = $(".password").val();
        var yanzhengma = $(".yanzhengma").val();
        if(name != "" && phone!="" && password != "" && yanzhengma != ""){
          if(!(/^[\w]{8,12}$/.test(password))){
              $(".error").css("visibility","visible");
              return false;
          }else{
            $(".error").css("visibility","hidden");
            var da = {
              "name":name,
              "phone":phone,
              "code":yanzhengma,
              "password":password
            };
            console.log(da);
            $.ajax({
              url:"http://www.cupoftea.cn/Home/Login/doregister",
              data:da,
              dataType:"json",
              type:"post",
              success:function (msg) {
                if(msg == 1){
                  window.location.href = "http://www.cupoftea.cn";
                }else if(msg == 3){
                  alert("验证码错误");
                }else if(msg == 4){
                  alert("手机号已存在");
                }else if(msg == 0) {
                  alert("注册失败");
                }
              }
            })
          }
        }
      }else if(i == 1){
        alert("请点击同意一带一路建设网协议");
      }

    })
  })
</script>