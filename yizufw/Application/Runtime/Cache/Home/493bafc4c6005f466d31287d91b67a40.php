<?php if (!defined('THINK_PATH')) exit();?><ul class="aa">
	<?php if(is_array($fy_list)): $i = 0; $__LIST__ = $fy_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
			<div class="house_list_out">
				<div class="media">
					<div class="media-left house_list_img">
					    <a href="#">
					        <img class="media-object" src="<?php echo ($vo["fengmian_img"]); ?>" alt="...">
					    </a>
					</div>
					<div class="media-body">
						
						<div class="title">
							<h3 class="media-heading block85"><?php echo ($vo["fangyuanname"]); ?></h3>
						</div>
						
					    <p>
					    	<span class="where">
								区域：<span class="qu"><?php echo ($vo["district_name"]); ?></span> - <span class=""><?php echo ($vo["metro_name"]); ?></span>- <span class=""><?php echo ($vo["site_name"]); ?></span>
					    	</span>
						</p>
						
					    <p><span class="from">来自：<?php echo ($vo["identity"]); ?></span></p>
					    <p><span class="floor">总层：<?php echo ($vo["zhun_cg"]); ?></span></p>	
					    
					    <ul class="pingmi clearfix">
					    	<li><?php echo ($vo["mianji"]); ?>㎡</li>
					    	<li>325㎡</li>
					    	<li>425㎡</li>
					    	<li>725㎡</li>
					    	<li>1285㎡</li>
					    	<li>更多</li>
					    </ul>
					    
					    <div class="posit">
					    	<p>
					    		<span style="color: #FF3333;">￥<span style="font-size: 28px!important;"><?php echo ($vo["danjia"]); ?></span></span><?php echo ($vo["unit"]); ?>
					    	</p>
					    	<!-- <p><span class="metro fontSize14"><?php echo ($vo["sheshi"]); ?></span></p> -->
					    	<p style="display: none;"><span class="str"><?php echo ($vo["sheshi"]); ?></span></p >
					    	<p><span class="biao metro fontSize14">地铁十分钟</span></p>
							<p><span class="biao less_house fontSize14">稀缺房源</span></p>
							<p><span class="biao dai_jiaju fontSize14">带办公家具</span></p>
							<p><span class="biao know_prop fontSize14">知名物业</span></p>
							<p><span class="biao mfcw fontSize14">免费车位</span></p>
					    	<p><span class="biao zmkfs fontSize14">知名开发商</span></p>
					    	
					    </div>
					</div>
				</div>
			</div>
		</li><?php endforeach; endif; else: echo "" ;endif; ?>
	
</ul>
<nav aria-label="Page navigation" class="paging">
    <ul class="pagination" >
    	<li>
	    	<?php echo ($page); ?>
	    </li>
    </ul>
</nav>