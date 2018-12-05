<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
				<div class="container">
				<div class="row clearfix">
					<div class="col-md-12 column" >
						<ul class="breadcrumb"style="background-color:#fff;padding-top:30px;" >
							<li>
								  Current position: <a href="javascript:history.go(-1)">Return</a> 
							
							
							</li>
							<li>
								 <a href="javascript:;" style="color:#0ba29a;"><?php echo $CATEGORYS[$CAT['parentid']]['catname'];?></a>
							</li>
							<li class="active">
								<?php echo $CATEGORYS[$catid]['catname'];?>
							</li>
						</ul>
						
						
						
						<hr style="height:1px;border:none;border-top:1px dashed #0ba29a;" />
					</div>
					<div class="row clearfix">
						<div class="col-md-3 column">
							<div class="col-md-12 column">
								<ul class="list-group">
								<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=0912227015ab4b311ab02db1fcbd9f99&action=category&catid=11&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'11','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
 
								<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?> 
									<li class="list-group-item" style="border:none;font-family:微软雅黑;font-size:16px;margin-bottom:-20px;margin-top:30px;"><a <?php if($catid!=$r[catid]) { ?>style="color:#0ba29a;"{elseif}style="color:#000;"<?php } ?> href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a></li>
									<li style="border:none;border:1px dashed #0ba29a;width:120px;margin-left:0px; list-style:none; ">&nbsp;</li>
								<?php $n++;}unset($n); ?>
 
								<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
									
								</ul>
							</div>
							<div class="col-md-12 column" style="margin-top:50px;">
							 <p>
									Suzhou hengyi Automation Co., Ltd.
								</p>
								<p>
									Address: Suzhou city Wujiang District cloud pear road 699 Building No. 7
								</p>
								<p>
									phone：025-66091685
								</p>
								<p>
									fax ：025-66091685
								</p>
								<p>
									Contact: Mr. Zhu  18512515806
								</p>
								<p>
									email：guanghai.zhu@lrmation.com 

								</p>
								<p>
									Website：http://www.lrmation.com
 

								</p>
							</div>
						</div>
						<div class="container">
	<div class="row clearfix">
		<div class="col-md-4 column"style="border:1px solid #0ba29a;padding:20px 20px 3px;">
			<div class="carousel slide" id="carousel-791247" >
				
				<div class="carousel-inner" > 
					 
					<?php $nn=0;?>
					<?php $n=1; if(is_array($pictureurls)) foreach($pictureurls AS $pic_k => $r) { ?>
					<?php $nn=$nn+1;?>	
					<div class="<?php if($nn==1) { ?>active<?php } ?> item">
						<img style="height:300px; width:400px;" alt="" src="<?php echo thumb($r[url]);?>" />
					</div> 
					<?php $n++;}unset($n); ?>
					
					
					
				</div> 
				<div style="border-top:2px solid #0ba29a; margin-top:10px;width:389px; margin-left:-20px;"></div>
				<div>
					<a style="float:left; margin-left:-30px; margin-top:3px;"  href="#carousel-791247" data-slide="prev"><img style="height:40px;" alt="" src="<?php echo IMG_PATH;?>pic1.png" /></a>
					<a style="float:left; margin-left:330px;margin-top:-37px;"  href="#carousel-791247" data-slide="next"><img style="height:40px;" alt="" src="<?php echo IMG_PATH;?>pic2.png" /></a>
				</div>
		 
			</div>
		</div>
			<div class="col-md-5 column">
									
					<div class="col-md-12 column">
						<div class="tabbable" id="tabs-263274">
							<ul class="nav nav-tabs nav-tabs1">
								<li class="active" style="height:33px; width:100px; border:3px solid #0ba29a; border-top-left-radius:6px; border-top-right-radius:6px; text-align:center;padding:auto; padding-top:3px; margin-right:40px;margin-left:20px;">
									 <a href="#panel-825377" data-toggle="tab" style="text-align:center;padding:auto; padding-top:3px; color:black;">产品介绍</a>
								</li>
								<li  style="height:33px; width:100px; border:3px solid #0ba29a; border-top-left-radius:6px; border-top-right-radius:6px; text-align:center;padding:auto; padding-top:3px; margin-right:40px;">
									 <a href="#panel-620755" data-toggle="tab" style="text-align:center;padding:auto; padding-top:3px; color:black;">软件平台</a>
								</li>
								<li  style="height:33px; width:100px; border:3px solid #0ba29a; border-top-left-radius:6px; border-top-right-radius:6px; text-align:center;padding:auto; padding-top:3px; margin-right:20px;">
									 <a href="#panel-620756" data-toggle="tab" style="text-align:center;padding:auto; padding-top:3px; color:black;" >硬件平台</a>
								</li>
							</ul>
							<div class="tab-content"  class="col-md-12 column" style="border-top:2px solid #0ba29a; margin-top:-2px;">
								<div class="tab-pane active" id="panel-825377">
									<p>
										<?php echo $cpjs;?>
									</p>
								</div>
								<div class="tab-pane" id="panel-620755">
									<p>
										<?php echo $rjpt;?>
									</p>
								</div>
								<div class="tab-pane" id="panel-620756">
									<p><?php echo $yjpt;?>
									</p>
								</div>
							</div>
						</div>
					</div>
			</div>
		
	</div>
</div>
									
									
									
									
									
									
									
									
									
									
									
									
									
					</div>
					
               </div>
					
				<?php include template("content","footer"); ?>