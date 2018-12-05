<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?>﻿<?php include template("content","header"); ?>
				<div class="row clearfix">
					<div class="col-md-12 column">
						<div class="row clearfix">
							<div class="col-md-6 column">
								<div class="row clearfix">
									<div class="col-md-12 column">
										<div class="page-header" style="color:#0ba29a;font-family:微软雅黑;">
											<h3 style="border-bottom:1px solid #ddd; font-family:微软雅黑;">
												推荐产品 <br /><br />
											</h3>
										</div>
										<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=4c1c09885d10b4f12bd0d3273c9f31fa&action=position&posid=18&order=id&num=3&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('posid'=>'18','order'=>'id',)).'4c1c09885d10b4f12bd0d3273c9f31fa');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'18','order'=>'id','limit'=>'3',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
										<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?> 
										<div class="media" style="margin-bottom:-20px;">
											 <a href="<?php echo $r['url'];?>" class="pull-left" ><img src="<?php echo thumb($r['thumb'],137,0);?>" class="media-object"style="height:100px;width:136px;" alt='' /></a>
											<div class="media-body">
												<h5 class="media-heading" style="float:left;padding-top:50px;padding-left:20px;font-family:微软雅黑;" >
													<?php echo $CATEGORYS[$r['catid']]['catname'];?>
												</h5> 
												<h5 class="media-heading" style="float:left;padding-top:50px;padding-left:20px; font-family:微软雅黑;" >
													<?php echo $r['title'];?>
												</h5  style="float:left;padding-top:50px;" > 
												   <p style="float:right;padding-top:50px;padding-left:20px;"><a style="color:#0ba29a;" href="<?php echo $CATEGORYS[$r['catid']]['url'];?>"> 更多+</a></p>
											</div>
											
											
										</div>
										<hr style="height:1px;border:none;border-top:2px dashed #0ba29a;" /> 
										<?php $n++;}unset($n); ?>
										<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
										
										
									</div>
								</div>
							</div>
							<div class="col-md-6 column">
								<div class="row clearfix">
									<div class="col-md-12 column">
									<div class="page-header" style="color:#0ba29a;font-family:微软雅黑;">
											<h3 style="border-bottom:1px solid #ddd; font-family:微软雅黑;">
												关于峘一<br /><br />
											</h3>
									</div>
										<div class="row clearfix">
											
											<div class="col-md-5 column" style="color:#555;font-family:宋体; font-weight:500; font-size:13.5px;">
												<p>
													苏州峘一自动化有限公司是一家集研发、设计与系统集成为一体的高新技术公司，主营业务为智能制造，为客户
													提供可靠的自动化单机、生产线和可靠的检测设备。我们的宗旨是急客户所急，想客户所想。通过了解客户真实需求，
													设计最合理满意的方案，给客户生产制造高效、稳定、方便维护的设备，提供卓越的自动化设备及工艺解决方案，提高客户产品质量。
												</p>
											</div>
											<div class="col-md-7 column">
												<img  src="<?php echo IMG_PATH;?>about.png"  style="width:340px;height:258px;"/>
											</div>
										</div>
									</div>
								</div>
								
							</div>
						</div>
					</div>
				</div>
					<div class="row clearfix">
					<div class="col-md-12 column">
						<div class="row clearfix">
							<div class="col-md-6 column">
								
								<div class="row clearfix">
									<div class="col-md-12 column">
										<div class="page-header" style="color:#0ba29a;font-family:微软雅黑;">
											<h4>
												最新公告
											</h4>
										</div>
										
										<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"announce\" data=\"op=announce&tag_md5=cc74500f9a19b58f8eeedfe77a1e0d31&action=lists&siteid=%24siteid&num=3\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$announce_tag = pc_base::load_app_class("announce_tag", "announce");if (method_exists($announce_tag, 'lists')) {$data = $announce_tag->lists(array('siteid'=>$siteid,'limit'=>'3',));}?>
										 
										   <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
											 <p> <a href="<?php echo APP_PATH;?>index.php?m=announce&c=index&a=show&aid=<?php echo $r['aid'];?>"><?php echo $r['title'];?></a></p>.
											 	<hr style="height:1px;border:none;border-top:1px dashed #0ba29a;" />
										   <?php $n++;}unset($n); ?>
										 
										<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
											
										
									</div>
								</div>
							</div>
							<div class="col-md-6 column">
								
								<div class="row clearfix">
									<div class="col-md-12 column">
										<div class="page-header" style="color:#0ba29a;font-family:微软雅黑;">
											<h4>
												联系我们
											</h4>
									    </div>
										<div class="row clearfix">
											<div class="col-md-7 column" style="padding-right:0px;">
												<p style="line-height:12px;">苏州峘一自动化有限公司</p>
												<p style="line-height:12px;">地址：苏州市吴江区云梨路699号7栋</p>
												<p style="line-height:12px;">电话：025-66091685  传真 ：025-66091685</p>
												
											</div>
											<div class="col-md-5 column" style="padding:0px;">
													<p style="line-height:12px;">
														联系人 ：朱先生  18512515806
													</p>
													<p style="line-height:12px;">
														邮箱：guanghai.zhu@lrmation.com
													</p>
													<p style="line-height:12px;">
														网址：http://www.lrmation.com
                                                     </p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
<?php include template("content","footer"); ?>				