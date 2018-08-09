<?php if (!defined('THINK_PATH')) exit();?><div class="layui-form">
    <table class="layui-table">
        <thead>
        <tr>
            <th width="10%">ID</th>
            <th width="15%">新闻类别</th>
            <th width="20%">展示缩略图</th>
            <th width="45%">文章标题</th>
            <th width="10%">操作</th>
        </thead>
        <tbody id="x-img">
        <?php if(is_array($news_list)): $i = 0; $__LIST__ = $news_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                <td><?php echo ($vo["id"]); ?></td>
                <td><?php echo ($vo["title"]); ?></td>
                <td>
                    <img class="layui-upload-img table-img" id="preview" src='<?php echo ($vo["img_url"]); ?>'>
                </td>
                <td><?php echo ($vo["news_title"]); ?></td>
                <td>
                    <button class="layui-btn" id="save" data-id="<?php echo ($vo["id"]); ?>">
                        选择
                    </button>
                </td>
            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
        </tbody>
    </table>
    <div class="page">
        <?php echo ($page); ?>
    </div>
</div>