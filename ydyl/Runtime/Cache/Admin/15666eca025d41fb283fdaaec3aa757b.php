<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>一带一路后台管理</title>
		<meta name="keywords" content="一带一路后台管理" />
		<meta name="description" content="一带一路后台管理" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<!-- basic styles -->
		<link href="/Public/assets/css/bootstrap.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="/Public/assets/css/font-awesome.min.css" />

		<link rel="stylesheet" href="/Public/assets/css/ace.min.css" />
		<link rel="stylesheet" href="/Public/assets/css/ace-rtl.min.css" />
		<link rel="stylesheet" href="/Public/assets/css/ace-skins.min.css" />
		<!-- 选择上传图片 -->
		<!-- bootstrap.css前边已经引用过 -->
		<link rel="stylesheet" href="/Public/assets/css/main.css?v=0.04" />
		<link rel="stylesheet" href="/Public/assets/css/cropper.css?v=0.02">


		<script src="/Public/assets/js/ace-extra.min.js"></script>

		<script type="text/javascript">
        	window.UEDITOR_HOME_URL='/Data/ueditor/';
        	window.onload=function(){
            	window.UEDITOR_CONFIG.initialFrameHeight=600;
            	UE.getEditor('content');
        	}
     	</script>

	</head>
	<body>

	<!-- 加载编辑器的容器 -->
    <script id="container" name="content" type="text/plain">
        这里写你的初始化内容
    </script>

    <!-- 配置文件 -->
    <script type="text/javascript" src="/Data/ueditor/ueditor.config.js"></script>
    <!-- 编辑器源码文件 -->
    <script type="text/javascript" src="/Data/ueditor/ueditor.all.js"></script>
		<div class="navbar navbar-default" id="navbar">
			<script type="text/javascript">
				try{ace.settings.check('navbar' , 'fixed')}catch(e){}
			</script>

			<div class="navbar-container" id="navbar-container">
				<div class="navbar-header pull-left">
					<a href="<?php echo U('Admin/Index/index');?>" class="navbar-brand">
						<small>
							<i class="icon-leaf"></i>
							ydyl后台管理系统
						</small>
					</a><!-- /.brand -->
				</div><!-- /.navbar-header -->

				<div class="navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">
						

						<li class="purple">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="icon-bell-alt icon-animated-bell"></i>
								<span class="badge badge-important">上次登陆时间：<?php echo $_SESSION['logintime'];?></span>
							</a>

							
						</li>

						<li class="green">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="icon-envelope icon-animated-vertical"></i>
								<span class="badge badge-success">上次登陆IP：<?php echo $_SESSION['loginip'];?></span>
							</a>

					
						</li>

						<li class="light-blue">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<img class="nav-user-photo" src="/Public/assets/avatars/user.png" alt="Jason's Photo" />
								<span class="user-info">
									<small>欢迎光临,</small>
									<?php echo $_SESSION['username'];?>
								</span>

								<i class="icon-caret-down"></i>
							</a>

							<ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								<li>
									<a href="<?php echo U('Admin/System/password');?>">
										<i class="icon-cog"></i>
										修改密码
									</a>
								</li>

								
								<li class="divider"></li>

								<li>
									<a href="<?php echo U('Admin/Login/logout');?>">
										<i class="icon-off"></i>
										退出
									</a>
								</li>
							</ul>
						</li>
					</ul><!-- /.ace-nav -->
				</div><!-- /.navbar-header -->
			</div><!-- /.container -->
</div>

		<div class="main-container" id="main-container">
			<script type="text/javascript">
				try{ace.settings.check('main-container' , 'fixed')}catch(e){}
			</script>
			<div class="main-container-inner">
				<a class="menu-toggler" id="menu-toggler" href="#">
					<span class="menu-text"></span>
				</a>
				<div class="sidebar" id="sidebar">
					<script type="text/javascript">
						try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
					</script>

					<div class="sidebar-shortcuts" id="sidebar-shortcuts">
						<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
							<button class="btn btn-success">
								<i class="icon-signal"></i>
							</button>

							<button class="btn btn-info">
								<i class="icon-pencil"></i>
							</button>

							<button class="btn btn-warning">
								<i class="icon-group"></i>
							</button>

							<button class="btn btn-danger">
								<i class="icon-cogs"></i>
							</button>
						</div>

						<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
							<span class="btn btn-success"></span>

							<span class="btn btn-info"></span>

							<span class="btn btn-warning"></span>

							<span class="btn btn-danger"></span>
						</div>
					</div><!-- #sidebar-shortcuts -->

					<ul class="nav nav-list">
						
					


						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-desktop"></i>
								<span class="menu-text">新闻管理</span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li>
									<a href="<?php echo U('Admin/News/index');?>">
										<i class="icon-double-angle-right"></i>
										新闻列表
									</a>
								</li>

								<li>
									<a href="<?php echo U('Admin/News/news');?>">
										<i class="icon-double-angle-right"></i>
										添加新闻
									</a>
								</li>
								
								<li>
									<a href="<?php echo U('Admin/News/addtype');?>">
										<i class="icon-double-angle-right"></i>
										新闻类别
									</a>
								</li>

								<!-- <li>
									<a href="<?php echo U('Admin/News/trach');?>">
										<i class="icon-double-angle-right"></i>
										回收站
									</a>
								</li> -->
							</ul>
						</li>
						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-edit"></i>
								<span class="menu-text"> 图片 </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li>
									<a href="<?php echo U('Admin/Img/index');?>">
										<i class="icon-double-angle-right"></i>
										图片列表
									</a>
								</li>

								<li>
									<a href="<?php echo U('Admin/Img/addimg');?>">
										<i class="icon-double-angle-right"></i>
										添加图片
									</a>
								</li>

								
							</ul>
						</li>

						<!-- <li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-list"></i>
								<span class="menu-text"> 表格 </span>
						
								<b class="arrow icon-angle-down"></b>
							</a>
						
							<ul class="submenu">
								
							</ul>
						</li>
						 -->
					

						


						

						
					</ul><!-- /.nav-list -->

					<div class="sidebar-collapse" id="sidebar-collapse">
						<i class="icon-double-angle-left" data-icon1="icon-double-angle-left" data-icon2="icon-double-angle-right"></i>
					</div>

					<script type="text/javascript">
						try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
					</script>
</div>
				<!-- 11111 -->
				<div class="main-content">
					<div class="breadcrumbs" id="breadcrumbs">
						<script type="text/javascript">
							try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
						</script>

						<ul class="breadcrumb">
							<li>
								<i class="icon-home home-icon"></i>
								<a href="#">ydyl后台</a>
							</li>

							<li>
								<a href="#">图片管理</a>
							</li>
							<li class="active">添加图片</li>
						</ul><!-- .breadcrumb -->

						<div class="nav-search" id="nav-search">
							<form class="form-search">
								<span class="input-icon">
									<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
									<i class="icon-search nav-search-icon"></i>
								</span>
							</form>
						</div><!-- #nav-search -->
					</div>
					<div class="page-content">
						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
							 	<div class="content col-md-12 col-sm-12">
						            <div class="panel panel-primary">
						                <div class="panel-heading">
						                    <h3 class="panel-title">添加图片</h3>
						                </div>
							            <div class="table-responsive">
							             	<div class="container-fluid">
											    <div class="row-fluid">
											        <div class="span12">
											        <!-- 之前的表单 -->
											            <form calss="submit-all" action="<?php echo U('Admin/Img/doadd');?>" method="post" enctype="multipart/form-data">
												            <table class="table table-hover">
												                <tbody>
												                   

												                    <tr class="news_header" >
												                        <td align=right>标题：</td>
												                        <td>
												                        	<input style="width:500px;" type="text" name="title" >
												                        </td>
												                    </tr>
												                    <tr class="news_header" >
												                        <td align=right>发布人姓名：</td>
												                        <td>
												                        	<input style="width:500px;" type="text" name="editorname" >
												                        </td>
												                    </tr>
												                    <tr class="news_header" >
												                        <td align=right>图片来源：</td>
												                        <td>
												                        	<input style="width:500px;" type="text" name="comefrom" >
												                        </td>
												                    </tr>
																						<tr class="news_people" >
												                        <td align=right>图片：</td>
												                        <td>
   																		 	<input name="photo[]" type="file"  />
												                        </td>
												                    </tr>
																						<!-- 单选框及位置 -->
																			
											                    	<tr class="danger">
												                        <td colspan="2" align="center">
												                        	<input  type="submit" id="mm" class="btn btn-primary btn-lg" value="上传图片" />
												                        </td>
												                    </tr>
												                </tbody>
												            </table>
												        </form>
											        </div>
											    </div>
											</div>
										</div>
									</div>
								</div>
								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div><!-- /.main-content -->
				<!-- 11111 -->

			<!-- eeeeee -->
			
			<!-- eeeeee -->
								<div class="ace-settings-container" id="ace-settings-container">
					<div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
						<i class="icon-cog bigger-150"></i>
					</div>

					<div class="ace-settings-box" id="ace-settings-box">
						<div>
							<div class="pull-left">
								<select id="skin-colorpicker" class="hide">
									<option data-skin="default" value="#438EB9">#438EB9</option>
									<option data-skin="skin-1" value="#222A2D">#222A2D</option>
									<option data-skin="skin-2" value="#C6487E">#C6487E</option>
									<option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
								</select>
							</div>
							<span>&nbsp; 选择皮肤</span>
						</div>

						<div>
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-navbar" />
							<label class="lbl" for="ace-settings-navbar"> 固定导航栏</label>
						</div>

						<div>
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-sidebar" />
							<label class="lbl" for="ace-settings-sidebar"> 固定侧边栏</label>
						</div>

						<div>
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-breadcrumbs" />
							<label class="lbl" for="ace-settings-breadcrumbs"> 固定面包屑</label>
						</div>

						<div>
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" />
							<label class="lbl" for="ace-settings-rtl"> 菜单栏换到右边</label>
						</div>

						<div>
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-add-container" />
							<label class="lbl" for="ace-settings-add-container">
								
								<b>切换到窄屏</b>
							</label>
						</div>
					</div>
				</div><!-- /#ace-settings-container -->

			</div><!-- /.main-container-inner -->

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="icon-double-angle-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="/Public/assets/js/jquery-2.0.3.min.js"></script>
		<!-- <![endif]-->

		<!--[if IE]>
			<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<![endif]-->

		<!--[if !IE]> -->

		<script type="text/javascript">
			window.jQuery || document.write("<script src='/Public/assets/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
		</script>

		<!-- <![endif]-->

		<!--[if IE]>
		<script type="text/javascript">
 			window.jQuery || document.write("<script src='/Public/assets/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
		</script>
		<![endif]-->

		<script type="text/javascript">
			if("ontouchend" in document) document.write("<script src='/Public/assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="/Public/assets/js/bootstrap.min.js"></script>
		<script src="/Public/assets/js/typeahead-bs2.min.js"></script>
		<!-- page specific plugin scripts -->
		<!-- ace scripts -->
		<script src="/Public/assets/js/ace-elements.min.js"></script>
		<script src="/Public/assets/js/ace.min.js"></script>
		<script>
			$(function(){
				$('.nav-list>li').eq(2).addClass('open');
				$('.nav-list>li').eq(2).addClass('active');
				$('.nav-list>li>.submenu').eq(2).slideDown();

				$('.close-canvas').click(function () {
					$('#my-canvas').hide();
				});
				$('.bb').click(function () {
					$('#my-canvas').show();
				});
				$('.yesnot').on("click",function () {
					var yesnot = $('.yesnot').prop('checked');
					console.log(yesnot);
					if(yesnot == true){
						$("#video").css("visibility","visible");
					}else{
						$("#video").css("visibility","hidden").attr("disabled","disabled");
					}
				})

				$('#mm').click(function(){
					//alert(1);
					if($('#firstSelect').val()==""){
						alert("请输入所属一级类别");
						return false;
					}else if($('#secondSelect').val()==""){
						alert("请输入所属二级类别");
						return false;
					}else if($('.news_header input').val()==""){
						alert("请输入标题");
						return false;
					}
					else if($('.news_people input').val()==""){
						alert("请上传图片");
						return false;
					}else if($('.news_content textarea').val()==""){
						alert("请输入内容");
						return false;
					}else if ($('.yesnot').prop('checked') == true) {
						if($('#videoWeizhi').val()==""){
							alert("请选择视频位置");
							return false;
						}else if($(".news_video input").val()==""){
							alert("请上传视频");
							return false;
						}
					}
					// 组装数据
					// var data = $('.btn-lg').attr('imgid');
					// $.ajax({
					// 	url: '/Admin/News/addnew',
					// 	type: 'post',
				 //        data: data,
				 //        dataType: 'json',
				 //        success: function (data) {
				 //        	console.log(data);
				 //        }
					// });
				})
			})
		</script>
		<!-- inline scripts related to this page -->

	<!-- 裁剪图片的js加载 -->
  	<script src="/Public/assets/js/bootstrap.min.js"></script>
  	<script src="/Public/assets/js/cropper.js"></script>
  	<script src="/Public/assets/js/main.js?v=0.02"></script>
  	<!-- <script src="/Public/assets/js/myCrop.js"></script> -->
	<script type="text/javascript">
		$.ajax({
			url:"<?php echo U('Admin/News/type');?>",
			success:function (msg) {
				var msg = JSON.parse(msg);
				console.log(msg);
				var firstSelect = $("#firstSelect");
				var secondSelect = $("#secondSelect");
				for(var first of msg){
					var option1 = $("<option value="+ first.id +"></option>");
					option1.html(first.name);
					firstSelect.append(option1);
				}
				firstSelect.on("change",function () {
					var firstVal = firstSelect.val();
					for(var first of msg){
						console.log(first);
						if(firstVal == first.id){
							secondSelect.empty();
							for(var second of first.next){
                var option3 = $("<option value="+ second.id +"></option>");
                option3.html(second.name);
                secondSelect.append(option3);
              }
						}
					}
				})
			}
		})

	</script>

</body>
</html>