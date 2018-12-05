<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?>﻿<!DOCTYPE html>
<html>
  <head>
    <title>苏州峘一自动化有限公司</title>
	   
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- 引入 Bootstrap -->
      <link href="<?php echo CSS_PATH;?>bootstrap.min.css" rel="stylesheet">
	  <!--
	  <link href="<?php echo CSS_PATH;?>default_blue.css" rel="stylesheet">
	  
	  -->
      <!-- HTML5 Shiv 和 Respond.js 用于让 IE8 支持 HTML5元素和媒体查询 -->
      <!-- 注意： 如果通过 file://  引入 Respond.js 文件，则该文件无法起效果 -->
      <!--[if lt IE 9]>
         <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
         <script src="https://oss.maxcdn.com/libs/respond.<?php echo JS_PATH;?>1.3.0/respond.min.js"></script>
      <![endif]-->
	  
	 
	  <style>
	  p a:link    {color:black;}
p a:visited {color:black;}
p a:hover   {color:black;}
p a:active  {color:black;}
.list-group-item a:link    {color:black; text-decoration:none;}
.list-group-item a:visited {color:black; text-decoration:none;}
.list-group-item a:hover   {color:black; text-decoration:none;}
.list-group-item a:active  {color:black; text-decoration:none;}
p a:link    {color:black; text-decoration:none;}
p a:visited {color:black; text-decoration:none;}
p a:hover   {color:black; text-decoration:none;}
p a:active  {color:black; text-decoration:none;}
.active{background-color:none;}
.page-header{border-bottom:0px;}

.nav-tabs1 li a:link    {color:black; text-decoration:none; border:none; background-color:white;height:10px;}
.nav-tabs1 li a:visited {color:black; text-decoration:none; border:none; background-color:white;height:10px;}
.nav-tabs1 li a:hover   {color:black; text-decoration:none; border:none; background-color:white;height:10px;}
.nav-tabs1 li a:active  {color:black; text-decoration:none; border:none; background-color:white;height:10px;}

	  </style>
  </head>
  <body>
  
        <!-- jQuery (Bootstrap 的 JavaScript 插件需要引入 jQuery) -->
      <script src="<?php echo JS_PATH;?>jquery.js"></script>
      <!-- 包括所有已编译的插件 -->
      <script src="<?php echo JS_PATH;?>bootstrap.min.js"></script>
			<div class="container">
				<div class="row clearfix">
<div class="col-md-12 column hidden-md hidden-lg">				
<nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse"
                data-target="#example-navbar-collapse">
            <span class="sr-only">切换导航</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">导航栏目</a>
    </div>
    <div class="collapse navbar-collapse" id="example-navbar-collapse">
        <ul class="nav navbar-nav">
					<li class="dropdown">
						<a href="<?php echo $CATEGORYS['9']['url'];?>" class="dropdown-toggle" data-toggle="dropdown">
							<?php echo $CATEGORYS['9']['catname'];?> <b class="caret"></b>
						</a>
						<ul class="dropdown-menu"> 
						<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=6e196bb1cddfb5d66935e64e7da31877&action=category&catid=9&num=8&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'9','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'8',));}?>
						<?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
							<li class="divider"></li>
							<li><a href="<?php echo $v['url'];?>"><?php echo $v['catname'];?></a></li>
						<?php $n++;}unset($n); ?> 		 
						<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> 			
						</ul>
					</li>
					
					<li  <?php if($catid==10) {?> class="active" <?php } ?> ><a href="<?php echo $CATEGORYS['10']['url'];?>" ><?php echo $CATEGORYS['10']['catname'];?></a></li>
					<li class="dropdown">
						<a href="<?php echo $CATEGORYS['11']['url'];?>" class="dropdown-toggle" data-toggle="dropdown">
							<?php echo $CATEGORYS['11']['catname'];?> <b class="caret"></b>
						</a>
						<ul class="dropdown-menu"> 
						<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=80b2b9f9e5a07693c4ae94a8f7b18a55&action=category&catid=11&num=8&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'11','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'8',));}?>
						<?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
							<li class="divider"></li>
							<li><a href="<?php echo $v['url'];?>"><?php echo $v['catname'];?></a></li>
						<?php $n++;}unset($n); ?> 		 
						<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> 			
						</ul>
					</li>
					<li  <?php if($catid==12) {?> class="active" <?php } ?> ><a href="<?php echo $CATEGORYS['12']['url'];?>" ><?php echo $CATEGORYS['12']['catname'];?></a></li>
					<li class="dropdown">
						<a href="<?php echo $CATEGORYS['13']['url'];?>" class="dropdown-toggle" data-toggle="dropdown">
							<?php echo $CATEGORYS['13']['catname'];?> <b class="caret"></b>
						</a>
						<ul class="dropdown-menu"> 
						<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=51a42dd9ad8bd381864b65d7a544881e&action=category&catid=13&num=8&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'13','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'8',));}?>
						<?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
							<li class="divider"></li>
							<li><a href="<?php echo $v['url'];?>"><?php echo $v['catname'];?></a></li>
						<?php $n++;}unset($n); ?> 		 
						<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> 			
						</ul>
					</li>
					
			 
            
        </ul>
    </div>
    </div>
</nav>	
</div>	
		
					<div class="col-md-12 column hidden-xs hidden-sm">
					
				 	
						<div class="row clearfix">
							<div class="col-md-12 column">
							    <div class="input-group" style="float:right;padding-top:30px; ">
			                      
									
								 <form action="<?php echo APP_PATH;?>index.php" method="get" target="_blank">
									<input type="hidden" name="m" value="search"/>
									<input type="hidden" name="c" value="index"/>
									<input type="hidden" name="a" value="init"/>
									<input type="hidden" name="typeid" value="3" id="typeid"/>
									<input type="hidden" name="siteid" value="<?php echo $siteid;?>" id="siteid"/>
									<input type="text" class="text" name="q" id="q"  style=" border-radius:5px;border:3px solid #0ba29a; height:42px; color:black;"  placeholder="产品搜索"/>
									<input type="submit" value="" style="background:url(<?php echo IMG_PATH;?>search.png); width:30px; height:30px;margin-left:2px;padding-bottom:8px;border:0x;" />
								</form>
									
									
								</div>
							</div>
						</div>
						<div class="row clearfix visible-md visible-lg" style="margin-bottom:20px;">
							<div class="col-md-4 column">
								<img alt="140x140" src="<?php echo IMG_PATH;?>logo.png"  style="height:80px;width:310px;margin-top:-35px;">
							</div>
							<div class="col-md-8 column" >
								<ul class="nav nav-tabs" style="border-bottom:none;font-family:微软雅黑;font-size:16px;">
								
								<li>
									<a href="<?php echo siteurl($siteid);?>" <?php if($catid) { ?> style="background-color:#fff;border:none;color:#0ba29a;" <?php  }else{ ?> style="background-color:#0ba29a;color:#fff;"<?php } ?>>首页</a>
								</li>
								<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=6e196bb1cddfb5d66935e64e7da31877&action=category&catid=9&num=8&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'9','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'8',));}?>
								
								<li class="dropdown" >
										<a href="#" data-toggle="dropdown" class="dropdown-toggle" <?php if($catid!=14&&$catid!=15&&$catid!=16) { ?> style="background-color:#fff;border:none;color:#0ba29a;" <?php  }else{ ?> style="background-color:#0ba29a;color:#fff;"<?php } ?> >关于峘一</a>
										<ul class="dropdown-menu" style="border:none;">
											<?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
											<li style="background-color:#0ba29a;margin-bottom:1px;">
												 <a href="<?php echo $v['url'];?>" style="background-color:#0ba29a;color:#fff;" ><?php echo $v['catname'];?></a>
											</li>
											<?php $n++;}unset($n); ?>
											
										</ul>
								</li>
								<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
								 
								 
								<li>
									<a href="<?php echo $CATEGORYS['10']['url'];?>" <?php if($catid!=10) { ?> style="background-color:#fff;border:none;color:#0ba29a;" <?php  }else{ ?> style="background-color:#0ba29a;color:#fff;"<?php } ?>><?php echo $CATEGORYS['10']['catname'];?></a>
								</li>
								<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=80b2b9f9e5a07693c4ae94a8f7b18a55&action=category&catid=11&num=8&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'11','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'8',));}?>
								
								<li class="dropdown" >
										<a href="#" data-toggle="dropdown" class="dropdown-toggle" <?php if($catid!=17&&$catid!=18&&$catid!=19) { ?> style="background-color:#fff;border:none;color:#0ba29a;" <?php  }else{ ?> style="background-color:#0ba29a;color:#fff;"<?php } ?> >产品中心</a>
										<ul class="dropdown-menu" style="border:none;">
											<?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
											<li style="background-color:#0ba29a;margin-bottom:1px;">
												 <a href="<?php echo $v['url'];?>" style="background-color:#0ba29a;color:#fff;" ><?php echo $v['catname'];?></a>
											</li>
											<?php $n++;}unset($n); ?>
											
										</ul>
								</li>
								<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
								<li>
									<a href="<?php echo $CATEGORYS['12']['url'];?>" <?php if($catid!=12) { ?> style="background-color:#fff;border:none;color:#0ba29a;" <?php  }else{ ?> style="background-color:#0ba29a;color:#fff;"<?php } ?>><?php echo $CATEGORYS['12']['catname'];?></a>
								</li>
								<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=51a42dd9ad8bd381864b65d7a544881e&action=category&catid=13&num=8&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'13','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'8',));}?>
								
								<li class="dropdown" >
										<a href="#" data-toggle="dropdown" class="dropdown-toggle" <?php if($catid!=22&&$catid!=23) { ?> style="background-color:#fff;border:none;color:#0ba29a;" <?php  }else{ ?> style="background-color:#0ba29a;color:#fff;"<?php } ?> >联系我们</a>
										<ul class="dropdown-menu" style="border:none;">
											<?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
											<li style="background-color:#0ba29a;margin-bottom:1px;">
												 <a href="<?php echo $v['url'];?>" style="background-color:#0ba29a;color:#fff;" ><?php echo $v['catname'];?></a>
											</li>
											<?php $n++;}unset($n); ?>
											
										</ul>
								</li>
								<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
								
									
									<li >
										 <a href="en" style="background-color:#fff;border:none;color:#0ba29a;">中文|English</a>
									</li>
									
								</ul>
							</div>
						</div>
					</div>
					     <div class="row clearfix" style="border-bottom:5px solid #0ba29a">
						 </div>
				</div>