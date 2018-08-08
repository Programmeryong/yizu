<?php if (!defined('THINK_PATH')) exit();?><div class="layui-form">
    <table class="layui-table">
        <thead>
        <tr>
            <th>
                <input type="checkbox" class="-checkbox -header" lay-skin="primary" lay-filter="allChoose">
            </th>
            <th>ID</th>
            <th>用户</th>
            <th>消息标题</th>
            <th>消息内容</th>
            <th>发布时间</th>
            <th>状态</th>
            <th>操作</th>
        </thead>
        <tbody id="x-img">
        <?php if(is_array($userNews_list)): $i = 0; $__LIST__ = $userNews_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                <td>
                    <input type="checkbox" class="-checkbox" lay-skin="primary" lay-filter="itemChoose"
                           data-id='<?php echo ($vo["id"]); ?>'>
                </td>
                <td><?php echo ($vo["id"]); ?></td>
                <td><?php echo ($vo["phone"]); ?></td>
                <td><?php echo ($vo["title"]); ?></td>
                <td><?php echo ($vo["content"]); ?></td>
                <td><?php echo (date('Y-m-d H:i',$vo["time"])); ?></td>
                <td class="td-status">
                    <?php if(($vo["status"]) == "1"): ?><span class="layui-badge layui-bg-green">已读</span>
                        <?php else: ?>
                        <span class="layui-badge layui-bg-gray">未读</span><?php endif; ?>
                </td>
                <td class="td-manage">
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