<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?>﻿<?php include template("content","header"); ?>
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
								<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=d1dd719e49dcd7307d16f12e00128176&action=category&catid=9&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'9','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
 
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
									fax：025-66091685
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
						<div class="col-md-9 column">
							<p style="margin-top:50px;margin-left:-60px;">
Suzhou hengyi Automation Co., Ltd.It is a high-tech company integrating R &amp; D, design and system. Its main business is intelligent manufacturing, providing reliable automatic single machine, production line and reliable testing equipment for customers. Our aim is urgent customers, think of the customers think. By understanding the real needs of customers, we design the most reasonable and satisfactory plan to produce efficient, stable and convenient maintenance equipment for customers, providing excellent automation equipment and process solutions, and improving the quality of customer products. </br>
In March 2014 the company was formally established in Nanjing city Jiangning District Rhine Road, the sales volume of 7 million. In August 2015, in order to expand the scale of the company, it moved to 185 of Yan Hu Road, Jiangning District, Nanjing, with a sales volume of over 15 million. In 2016, the performance increased steadily, with sales of over 20 million. In July 2017, the Wuhan office was established, which was mainly responsible for the operations of Wuhan and Changsha. In October 2017, the headquarters was set up in Wujiang District, Suzhou, and Nanjing, as an office, was expected to have sales of 30 million. Since 2014, the company has been working with the American national instrument (NI) and has become one of the NI's authorised gold medal system integrators in China. </br>
After several years of development, the size of the company is growing, and there are now three business departments:</br>
1. automation department: responsible for automatic assembly and process, automatic production line design and development, including single cabinet, multi cabinet, automatic production line, semi-automatic production line, industrial robot manufacturing and so on.</br>
2. measuring work department: responsible for engineering project general package, design, development, site installation, management, test bench development and so on;</br>
3.Test business department: responsible for the assembly and process of functional testing equipment, providing customers with diversified testing and measuring solutions and equipment in the automotive industry.</br>
The three departments are sharing resources, mutual assistance and cooperation and improving together. For the oversize item company, cross sectoral cooperation Team is set up to ensure that the quality and quality of the project are successfully completed.
							</p>
							<img src="<?php echo IMG_PATH;?>aboutpr.png" style="margin-left:-10px;">
						</div>
					</div>
					
               </div>
					
				<?php include template("content","footer"); ?>