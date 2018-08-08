<?php if (!defined('THINK_PATH')) exit();?><div class="layui-form">
    <table class="layui-table">
        <thead>
        <tr>
            <th width="20">
                <input type="checkbox" class="-checkbox -header" lay-skin="primary" lay-filter="allChoose">
            </th>
            <th width="30">ID</th>
            <th width="70">新闻类别</th>
            <th width="20">展示缩略图</th>
            <th>文章标题</th>
            <th>关键字</th>
            <th>摘要</th>
            <th width="20">文章内容</th>
            <th width="80">发布人</th>
            <th width="115">发布时间</th>
            <th width="50">状态</th>
            <th width="60">操作</th>
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
                <td><?php echo ($vo["keyword"]); ?></td>
                <td><?php echo ($vo["describe"]); ?></td>
                <td>
                    <button class="layui-btn" onclick="x_admin_show('文章内容')">
                        点击查看
                    </button>
                </td>
                <td><?php echo ($vo["username"]); ?></td>
                <td><?php echo (date('Y-m-d H:i:s',$vo["time"])); ?></td>
                <td class="td-status">
                    <?php if(($vo["status"]) == "1"): ?><span class="layui-badge layui-bg-green">已显示</span>
                        <?php else: ?>
                        <span class="layui-badge layui-bg-gray">已隐藏</span><?php endif; ?>
                </td>
                <td class="td-manage">
                    <?php if(($vo["status"]) == "1"): ?><a onclick="member_stop(this,'<?php echo ($vo["id"]); ?>','<?php echo ($vo["status"]); ?>')"
                           href="javascript:void(0);" title="隐藏">
                            <i class="layui-icon">&#xe6af;</i>
                        </a>
                        <?php else: ?>
                        <a onclick="member_stop(this,'<?php echo ($vo["id"]); ?>','<?php echo ($vo["status"]); ?>')"
                           href="javascript:void(0);" title="显示">
                            <i class="layui-icon">&#xe69c;</i>
                        </a><?php endif; ?>
                    <a title="修改" onclick="x_admin_show('修改')"
                       href="javascript:void(0);">
                        <i class="layui-icon">&#xe642;</i>
                    </a>
                    <a title="删除"
                       onclick="member_del(this,'<?php echo ($vo["id"]); ?>')"
                       href="javascript:void(0);">
                        <i class="layui-icon">&#xe640;</i>
                    </a>
                </td>
            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
        </tbody>
    </table>
    <div class="page">
        <?php echo ($page); ?>
    </div>
</div>