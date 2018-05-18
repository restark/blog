<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>ydyl后台管理</title>



		<meta name="keywords" content="ydyl后台管理" />
		<meta name="description" content="ydyl后台管理" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<!-- basic styles -->
		<link href="/Public/assets/css/bootstrap.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="/Public/assets/css/font-awesome.min.css" />

		<!--[if IE 7]>
		  <link rel="stylesheet" href="/Public/assets/css/font-awesome-ie7.min.css" />
		<![endif]-->

		<!-- page specific plugin styles -->

		<!-- fonts -->

		<!-- <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" /> -->

		<!-- ace styles -->

		<link rel="stylesheet" href="/Public/assets/css/ace.min.css" />
		<link rel="stylesheet" href="/Public/assets/css/ace-rtl.min.css" />
		<link rel="stylesheet" href="/Public/assets/css/ace-skins.min.css" />

		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="/Public/assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->

		<script src="/Public/assets/js/ace-extra.min.js"></script>

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

		<!--[if lt IE 9]>
		<script src="/Public/assets/js/html5shiv.js"></script>
		<script src="/Public/assets/js/respond.min.js"></script>
		<![endif]-->






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
								<a href="#">新闻管理</a>
							</li>
							<li class="active">修改新闻</li>
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
						                    <h3 class="panel-title">修改新闻</h3>
						                </div>

							            <div class="table-responsive">
							             	<div class="container-fluid">
											    <div class="row-fluid">
											        <div class="span12">
											            <form action="<?php echo U('Admin/News/dochange');?>" method="post" enctype="multipart/form-data">
											            <input type="hidden" name='id' value="<?php echo ($id); ?>"></input>
												            <table class="table table-hover">
												                <!--<thead>
												                    <tr colspan='2'>
												                        <th>发布博文</th>
												                    </tr>
												                </thead>-->
												                <tbody>
																					<tr>
																							<td align=right width=30%>新闻所属分类(若修改请在下面选择)：</td>
																							<td colspan="2">
																								<div style="width:200px,height:30px,float:left" id
																								="firstDiv" name="onetype">

																							</div>
																								<div style="width:200px,height:30px,float:left" id="secondDiv" name="twotype">

																								</div>
																							</td>
																					</tr>
												                    <tr>
												                        <td align=right width=30%>新闻所属分类：</td>
												                        <td colspan="2">
																									<select style="width:200px" id
																									="firstSelect" name="onetype">
																										<option value="">请选择大第一类别</option>
																									</select>
																									<select style="width:200px" id="secondSelect" name="twotype">
																										<option value="">请选择第二类别</option>
																									</select>
												                        </td>
												                    </tr>
												                    <tr class="news_header" >
												                        <td align=right>新闻标题：</td>
												                        <td>
												                        	<input style="width:500px;" type="text" name="title" value="<?php echo ($new["title"]); ?>">
												                        </td>
												                    </tr>

												                    <tr class="news_header" >
												                        <td align=right>新闻摘要：</td>
												                        <td>
												                        	<input style="width:500px;" type="text" name="describe" value="<?php echo ($new["newsdescribe"]); ?>">
												                        </td>
												                    </tr>

												                    <tr class="news_people" >
												                        <td align=right>编辑人：</td>
												                        <td>
												                        	<input style="width:500px;" type="text" name="editorname" value='<?php echo ($new["editorname"]); ?>' >
												                        </td>
												                    </tr>



																	<tr class="news_key" >
												                        <td align=right>文章来源：</td>
												                        <td>
												                        	<input style="width:500px;" type="text" name="comefrom" value='<?php echo ($new["comefrom"]); ?>' >
												                        </td>
												                    </tr>







												                    <tr class="news_people" >
												                        <td align=right>新闻页头图：</td>
												                        <td>

    <input name="photo[]" type="file" value="<?php echo ($new["himg"]); ?>" /><a href="" id="oldimg" target="_blank">点击查看原新闻页头图</a>
												                        </td>
												                    </tr>
																						<!-- 单选框及位置 -->
																						<tr class="news_key" >
																	                        <td align=right>是否上传视频：</td>
																	                        <td>
																	                        	<input class="yesnot" style="width:50px;" type="checkbox" name="isvideo" value='1' >
																														<select name="left" id="videoWeizhi">
																															<option value="">请选择视频位置</option>
																															<option 
																																<?php if($new['isleft'] == 0 ): ?>selected="selected"<?php endif; ?>
																															 value="0">非轮播视频</option>
																															<option <?php if($new['isleft'] == 1 ): ?>selected="selected"<?php endif; ?> value="1">轮播视频</option>
																														</select>
																	                        </td>
																	                    </tr>

																											<tr style="visibility:hidden" id="video" class="news_video" >
				  												                        <td align=right>视频上传：</td>
				  												                        <td>
				     																		 	<input name="photo[]" type="file" value="<?php echo ($new["videopath"]); ?>" />
				  												                        </td>
				  												                    </tr>






												                    <tr class="news_content" >
												                        <td colspan='2'>
												             <textarea style="width:100%; height:500px; display: block; margin: 0 auto;" id='content' name='message'><?php echo ($new["message"]); ?></textarea>
												                        </td>
												                    </tr>
												                    <tr class="danger">
												                        <td colspan="2" align="center">

												                        	<input  type="submit" class="btn btn-primary btn-lg" value="修改新闻"></input>
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

				$('#submit').click(function(){
					//alert(1);
					if($('.news_class').val()==""){
						alert("请输入所属分类");
						return false;
					}else if($('.news_people input').val()==""){
						alert("请输入编辑人");
						return false;
					}else if($('.news_header input').val()==""){
						alert("请输入标题");
						return false;
					}else if($('.news_content textarea').val()==""){
						alert("请输入内容");
						return false;
					}
				})
			})
			$('.yesnot').on("click",function () {
				var yesnot = $('.yesnot').prop('checked');
				console.log(yesnot);
				if(yesnot == true){
					$("#video").css("visibility","visible");
				}else{
					$("#video").css("visibility","hidden").attr("disabled","disabled");
				}
			})



		</script>
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

					var urlid = window.location.href;
					var index = urlid.lastIndexOf("\/");
					urlid  = urlid .substring(index + 1, urlid.length);
					var url = urlid.split(".");
					var id = url[0];
					console.log(id);
					var id = {
						"id":id
					}
					$.ajax({
						url:"<?php echo U('Admin/News/changemessage');?>",
						data:id,
						dataType:"json",
						type:'get',
						success:function (msg) {
							console.log(msg);
							console.log(msg.onetype);
							// var option = $("#firstSelect option").each(function () {
							// 	console.log($(this).val());
							// 	if($(this).val() == msg.onetype){
							// 		$(this).attr("selected","selected")
							// 	}
							// })
							$("#oldimg").attr("href",msg.himg);
							$("#firstDiv").text("一级类别:"+msg.onetype+"");
							$("#secondDiv").text("二级类别:"+msg.twotype+"");
							if(msg.isvideo == 1){
								$(".yesnot").attr("checked","checked");
								$("#video").css("visibility","visible");
								if(msg.isleft == 0){
									$("#videoWeizhi").val("0")
								}else if(msg.isleft == 0){
									$("#videoWeizhi").val("1")
								}
							};
						}
					})

				}
			})


		</script>

		<!-- inline scripts related to this page -->

</body>
</html>