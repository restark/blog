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
		  <link rel="stylesheet" href="assets/css/font-awesome-ie7.min.css" />
		<![endif]-->

		<!-- page specific plugin styles -->

		<!-- fonts -->

		<!-- <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" /> -->

		<!-- ace styles -->

		<link rel="stylesheet" href="/Public/assets/css/ace.min.css" />
		<link rel="stylesheet" href="/Public/assets/css/ace-rtl.min.css" />
		<link rel="stylesheet" href="/Public/assets/css/ace-skins.min.css" />

		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->

		<script src="/Public/assets/js/ace-extra.min.js"></script>

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

		<!--[if lt IE 9]>
		<script src="assets/js/html5shiv.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
	</head>

	<body>
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
								<a href="#">后台首页</a>
							</li>

							<li>
								<a href="#">设置</a>
							</li>
							<li class="active">系统基本信息</li>
						</ul><!-- .breadcrumb -->

						<div class="nav-search" id="nav-search">
							<form class="form-search">
								<span class="input-icon">
									<input type="text" placeholder="搜索 ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
									<i class="icon-search nav-search-icon"></i>
								</span>
							</form>
						</div><!-- #nav-search -->
					</div>



					<div class="page-content">
						<div class="row">
							<div class="col-xs-12">
								
								<!-- PAGE CONTENT BEGINS -->
								<div class="">
								    <div class="row">
								        <div class="content col-md-12 col-sm-12">
								            <div class="panel panel-primary">
								                <div class="panel-heading">
								                    <h3 class="panel-title">系统基本信息</h3>
								                </div>
								          
								            <div class="table-responsive">
								             <div class="container-fluid">
								    <div class="row-fluid">
								        <div class="span12">
								            <table class="table table-striped table-hover">
								                <thead>
								                    <tr align=center>
								                        <th class="pull-right" >
								                            系统配置名称
								                        </th>
								                        <th width=50%>
								                            系统配置信息
								                        </th>
								                        
								        
								                    </tr>
								                </thead>
								                <tbody class="table-striped">
								                    <tr>
								                        <td align=right>
								                             当前服务器的操作系统：
								                        </td>
								                        <td>
								                           <?php echo PHP_OS?>                       </td>
								                        
								                    </tr>
								                    <tr class="">
								                        <td align=right>
								                             请求页面时通信协议的名称和版本：
								                        </td>
								                        <td>
								                             <?php echo $_SERVER['SERVER_PROTOCOL']?>                       </td>
								                        
								                    </tr>
								                    <tr class="">
								                        <td align=right>
								                             PHP的版本：
								                        </td>
								                        <td>
								                            <?php echo PHP_VERSION?>                    </td>
								                       
								                    </tr>
								                    <tr class="">
								                        <td align=right>
								                             请求开始时的时间戳：
								                        </td>
								                        <td>
								                             <?php echo $_SERVER['REQUEST_TIME']?>                      </td>
								                        
								                    </tr>
								                    <tr class="">
								                        <td align=right>
								                             当前主机名：
								                        </td>
								                        <td>
								                           <?php echo $_SERVER['SERVER_NAME']?>                    </td>
								                       
								                    </tr>
								
								
								                    <tr class="">
								                        <td align=right>
								                             用户使用的浏览器信息：
								                        </td>
								                        <td>
								                            <?php echo $_SERVER['HTTP_USER_AGENT']?>       </td>
								                        
								                    </tr>
								
								                    <tr class="">
								                        <td align=right>
								                             正在浏览当前页面用户的 IP 地址：
								                        </td>
								                        <td>
								                          <?php echo $_SERVER['REMOTE_ADDR']?>                    </td>
								                        
								                    </tr>
								
								                    <tr class="" >
								                        <td align=right>
								                             正在浏览当前页面用户的主机名：
								                        </td>
								                        <td>
								                                    <?php echo $_SERVER['REMOTE_HOST']?>                </td>
								                        
								                    </tr>
								                    <tr class="">
								                        <td align=right>
								                              用户连接到服务器时所使用的端口：
								                        </td>
								                        <td>
								                           <?php echo $_SERVER['REMOTE_PORT']?>                        
								                        </td>
								                        
								                    </tr>
								
								
								                    <tr class="">
								                        <td align=right>
								                           服务器所使用的端口：
								                        </td>
								                        <td>
								                          <?php echo $_SERVER['SERVER_PORT'] ?>                     </td>
								                        
								                    </tr>
								
								                    <tr class="">
								                        <td align=right>
								                            服务器版本和虚拟主机名：
								                        </td>
								                        <td>
								                          <?php echo $_SERVER['SERVER_SIGNATURE']?>
								                        </td>
								                        
								                    </tr>
								                    <tr class="">
								                        <td align=right>
								                            当前脚本所在文件系统：
								                        </td>
								                        <td>
								                          <?php echo $_SERVER['PATH_TRANSLATED']?>                       </td>
								                        
								                    </tr>
								                    
								                </tbody>
								            </table>
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
 window.jQuery || document.write("<script src='assets/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
</script>
<![endif]-->

		<script type="text/javascript">
			if("ontouchend" in document) document.write("<script src='/Public/assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");

$(function(){
				$('.nav-list>li').eq(0).addClass('open');
				$('.nav-list>li').eq(0).addClass('active');
				$('.nav-list>li>.submenu').eq(0).slideDown();
			})
			
		</script>
		<script src="/Public/assets/js/bootstrap.min.js"></script>
		<script src="/Public/assets/js/typeahead-bs2.min.js"></script>

		<!-- page specific plugin scripts -->

		<!-- ace scripts -->

		<script src="/Public/assets/js/ace-elements.min.js"></script>
		<script src="/Public/assets/js/ace.min.js"></script>

		<!-- inline scripts related to this page -->
	
</body>
</html>