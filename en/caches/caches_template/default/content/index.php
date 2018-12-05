<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?>﻿<?php include template("content","header"); ?>
				<div class="row clearfix">
					<div class="col-md-12 column">
						<div class="row clearfix">
							<div class="col-md-6 column">
								<div class="row clearfix">
									<div class="col-md-12 column">
										<div class="page-header" style="color:#0ba29a;font-family:微软雅黑;">
											<h3 style="border-bottom:1px solid #ddd; font-family:微软雅黑;">
												Recommended products 
											<br /><br />
											</h3>
										</div>
										<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=4c1c09885d10b4f12bd0d3273c9f31fa&action=position&posid=18&order=id&num=3&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$tag_cache_name = md5(implode('&',array('posid'=>'18','order'=>'id',)).'4c1c09885d10b4f12bd0d3273c9f31fa');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'18','order'=>'id','limit'=>'3',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
										<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?> 
										<div class="media" style="margin-bottom:-20px;">
											 <a href="<?php echo $r['url'];?>" class="pull-left" ><img src="<?php echo thumb($r['thumb']);?>" class="media-object"style="height:100px;width:136px;" alt='' /></a>
											<div class="media-body">
												<h5 class="media-heading" style="float:left;padding-top:50px;padding-left:20px;font-family:微软雅黑;" >
													<?php echo $CATEGORYS[$r['catid']]['catname'];?>
												</h5> 
												<h5 class="media-heading" style="float:left;padding-top:50px;padding-left:20px; font-family:微软雅黑;" >
													<?php echo $r['title'];?>
												</h5  style="float:left;padding-top:50px;" > 
												   <p style="float:right;padding-top:50px;padding-left:20px;"><a style="color:#0ba29a;" href="<?php echo $CATEGORYS[$r['catid']]['url'];?>"> more+</a></p>
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
												About hengyi
											<br /><br />
											</h3>
									</div>
										<div class="row clearfix">
											
											<div class="col-md-5 column" style="color:#555;font-family:宋体; font-weight:500; font-size:13.5px;">
												<p>
													Suzhou hengyi Automation Co., Ltd.It is a new and high technology company which integrates research and development, design and system. The main business is intelligent manufacturing.
Provide reliable automatic single machine, production line and reliable testing equipment. Our aim is urgent customers, think of the customers think. By understanding the real needs of the customers,
The most reasonable and satisfactory plan is designed to produce efficient, stable and convenient maintenance equipment for customers, providing excellent automation equipment and process solutions to improve customer product quality.
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
												Latest announcement
											</h4>
										</div>
										
										<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"announce\" data=\"op=announce&tag_md5=cc74500f9a19b58f8eeedfe77a1e0d31&action=lists&siteid=%24siteid&num=3\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$announce_tag = pc_base::load_app_class("announce_tag", "announce");if (method_exists($announce_tag, 'lists')) {$data = $announce_tag->lists(array('siteid'=>$siteid,'limit'=>'3',));}?>
										 
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
												Contact us
											</h4>
									    </div>
										<div class="row clearfix">
											<div class="col-md-7 column" style="padding-right:0px;">
												<p style="line-height:12px;">Suzhou hengyi Automation Co., Ltd.</p>
												<p style="line-height:12px;">Address: Suzhou city Wujiang District cloud pear road 699 Building No. 7</p>
												<p style="line-height:12px;">phone：025-66091685  fax ：025-66091685</p>
												
											</div>
											<div class="col-md-5 column" style="padding:0px;">
													<p style="line-height:12px;">
														Contact: Mr. Zhu  18512515806
													</p>
													<p style="line-height:12px;">
														email：guanghai.zhu@lrmation.com
													</p>
													<p style="line-height:12px;">
														Website：http://www.lrmation.com
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