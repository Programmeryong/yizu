<?php if (!defined('THINK_PATH')) exit();?><div class="tabs_li">
    <ul class="nav nav-pills">
        <li role="presentation" class="active" value="0">全部</li>
        <?php if(is_array($type)): foreach($type as $key=>$vo): ?><li role="presentation" class="news_li" id="news_li_<?php echo ($vo["id"]); ?>"><?php echo ($vo["title"]); ?></li><?php endforeach; endif; ?>
    </ul>
    <span><span>首页</span>><span>新闻咨询</span></span>
</div>

<ul>
    <?php if(is_array($news_list)): $i = 0; $__LIST__ = $news_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
            <a href="<?php echo U('News/getNews');?>?id=<?php echo ($vo["id"]); ?>">
                <div class="media">
                    <div class="media-left news_img">

                        <img class="media-object" src="<?php echo ($vo["img_url"]); ?>">

                    </div>
                    <div class="media-body news_info clearfix">
                        <span class="new_type fontSize18 onehide"><?php echo ($vo["title"]); ?> | <?php echo ($vo["news_title"]); ?></span>
                        <span class="time fontSize24"><?php echo (date('m-d',$vo["time"])); ?></span>
                        <p><?php echo ($vo["describe"]); ?></p>
                        <span class="arrow_right"><img src="/Public/Home/images/icon/arrow-righ.png"/></span>
                    </div>
                </div>
            </a>
        </li><?php endforeach; endif; else: echo "" ;endif; ?>
    <!--分页按钮-->
    <nav class="paging" id="all_news_page" style="margin: 20px 0 20px 0;text-align: center">
        <div class="pages clearfix">
            <?php echo ($page); ?>
        </div>
    </nav>
    <!--分页按钮-->
</ul>
<ul>
    <?php if(is_array($news_1)): $i = 0; $__LIST__ = $news_1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
            <a href="<?php echo U('News/getNews');?>?id=<?php echo ($vo["id"]); ?>">
                <div class="media">
                    <div class="media-left news_img">

                        <img class="media-object" src="<?php echo ($vo["img_url"]); ?>">

                    </div>
                    <div class="media-body news_info clearfix">
                        <span class="new_type fontSize18 onehide"><?php echo ($vo["title"]); ?> | <?php echo ($vo["news_title"]); ?></span>
                        <span class="time fontSize24"><?php echo (date('m-d',$vo["time"])); ?></span>
                        <p><?php echo ($vo["describe"]); ?></p>
                        <span class="arrow_right"><img src="/Public/Home/images/icon/arrow-righ.png"/></span>
                    </div>
                </div>
            </a>
        </li><?php endforeach; endif; else: echo "" ;endif; ?>
    <!--分页按钮-->
    <nav class="paging" id="all_news_page1" style="margin: 20px 0 20px 0;text-align: center">
        <div class="pages clearfix">
            <?php echo ($page1); ?>
        </div>
    </nav>
    <!--分页按钮-->
</ul>
<ul>
    <?php if(is_array($news_2)): $i = 0; $__LIST__ = $news_2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
            <a href="<?php echo U('News/getNews');?>?id=<?php echo ($vo["id"]); ?>">
                <div class="media">
                    <div class="media-left news_img">

                        <img class="media-object" src="<?php echo ($vo["img_url"]); ?>">

                    </div>
                    <div class="media-body news_info clearfix">
                        <span class="new_type fontSize18 onehide"><?php echo ($vo["title"]); ?> | <?php echo ($vo["news_title"]); ?></span>
                        <span class="time fontSize24"><?php echo (date('m-d',$vo["time"])); ?></span>
                        <p><?php echo ($vo["describe"]); ?></p>
                        <span class="arrow_right"><img src="/Public/Home/images/icon/arrow-righ.png"/></span>
                    </div>
                </div>
            </a>
        </li><?php endforeach; endif; else: echo "" ;endif; ?>
    <!--分页按钮-->
    <nav class="paging" id="all_news_page2" style="margin: 20px 0 20px 0;text-align: center">
        <div class="pages clearfix">
            <?php echo ($page2); ?>
        </div>
    </nav>
    <!--分页按钮-->
</ul>
<ul>
    <?php if(is_array($news_3)): $i = 0; $__LIST__ = $news_3;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
            <a href="<?php echo U('News/getNews');?>?id=<?php echo ($vo["id"]); ?>">
                <div class="media">
                    <div class="media-left news_img">

                        <img class="media-object" src="<?php echo ($vo["img_url"]); ?>">

                    </div>
                    <div class="media-body news_info clearfix">
                        <span class="new_type fontSize18 onehide"><?php echo ($vo["title"]); ?> | <?php echo ($vo["news_title"]); ?></span>
                        <span class="time fontSize24"><?php echo (date('m-d',$vo["time"])); ?></span>
                        <p><?php echo ($vo["describe"]); ?></p>
                        <span class="arrow_right"><img src="/Public/Home/images/icon/arrow-righ.png"/></span>
                    </div>
                </div>
            </a>
        </li><?php endforeach; endif; else: echo "" ;endif; ?>
    <!--分页按钮-->
    <nav class="paging" id="all_news_page3" style="margin: 20px 0 20px 0;text-align: center">
        <div class="pages clearfix">
            <?php echo ($page3); ?>
        </div>
    </nav>
    <!--分页按钮-->
</ul>
<script>
    $(function () {
        $('.tabs_li>ul>li').eq(2).click();
        $('#news_li_2').addClass('active ');
    })
</script>