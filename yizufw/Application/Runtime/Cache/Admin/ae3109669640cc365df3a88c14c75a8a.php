<?php if (!defined('THINK_PATH')) exit();?><div class="layui-form">
    <table class="layui-table">
        <thead>
        <tr>
            <th width="20">
                <input type="checkbox" class="-checkbox -header" lay-skin="primary" lay-filter="allChoose">
            </th>
            <th width="30">ID</th>
            <th width="20">新闻类别</th>
            <th width="20">展示缩略图</th>
            <th width="180">文章标题</th>
            <th width="20">操作</th>
        </thead>
        <tbody id="x-img">
        <?php if(is_array($news_list)): $i = 0; $__LIST__ = $news_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                <td>
                    <input type="checkbox" class="-checkbox" lay-skin="primary" lay-filter="itemChoose"
                           data-id='<?php echo ($vo["id"]); ?>'>
                </td>
                <td><?php echo ($vo["id"]); ?></td>
                <td><?php echo ($vo["title"]); ?></td>
                <td>
                    <img class="layui-upload-img table-img" id="preview" src='<?php echo ($vo["img_url"]); ?>'>
                </td>
                <td><?php echo ($vo["news_title"]); ?></td>
                <td class="td-manage">
                    <a id="moveUp" data-id="<?php echo ($vo["id"]); ?>"
                       href="javascript:void(0);" title="上移">
                        <span class="layui-badge layui-bg-green">上移</span>
                    </a>
                    <a title="删除"
                       onclick="member_del(this,'<?php echo ($vo["id"]); ?>')"
                       href="javascript:void(0);">
                        <span class="layui-badge layui-btn-danger">删除</span>
                    </a>
                </td>
            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
        </tbody>
    </table>
    <div class="page">
        <?php echo ($page); ?>
    </div>
</div>