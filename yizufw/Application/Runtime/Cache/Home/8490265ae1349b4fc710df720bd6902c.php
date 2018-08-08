<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php echo ($lo); ?>
<?php if(is_array($index_news)): $i = 0; $__LIST__ = $index_news;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; echo ($vo["id"]); endforeach; endif; else: echo "" ;endif; ?>
</body>
</html>