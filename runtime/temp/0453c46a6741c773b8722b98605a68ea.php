<?php /*a:5:{s:60:"D:\phpStudy\WWW\tp5.1\application\admin\view\brands\add.html";i:1552264287;s:56:"D:\phpStudy\WWW\tp5.1\application\admin\view\layout.html";i:1550652373;s:63:"D:\phpStudy\WWW\tp5.1\application\admin\view\public\header.html";i:1554427842;s:61:"D:\phpStudy\WWW\tp5.1\application\admin\view\public\left.html";i:1551940195;s:63:"D:\phpStudy\WWW\tp5.1\application\admin\view\public\footer.html";i:1551775700;}*/ ?>

  <!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title>layout 后台大布局 - Layui</title>
  <link rel="stylesheet" href="/static/page/page.css">
  <link rel="stylesheet" href="/static/layui/css/layui.css">
  <script src="/static/JS/jquery-3.3.1.min.js"></script>
  <script src="/static/layui/layui.js"></script>
</head>
<body class="layui-layout-body">
<div class="layui-layout layui-layout-admin">
  <div class="layui-header">
    <div class="layui-logo">layui 后台布局</div>
    <!-- 头部区域（可配合layui已有的水平导航） -->
    <ul class="layui-nav layui-layout-left">
      <li class="layui-nav-item"><a href="">控制台</a></li>
      <li class="layui-nav-item"><a href="">商品管理</a></li>
      <li class="layui-nav-item"><a href="">用户</a></li>
      <li class="layui-nav-item">
        <a href="javascript:;">其它系统</a>
        <dl class="layui-nav-child">
          <dd><a href="">邮件管理</a></dd>
          <dd><a href="">消息管理</a></dd>
          <dd><a href="">授权管理</a></dd>
        </dl>
      </li>
    </ul>
    <ul class="layui-nav layui-layout-right">
      <li class="layui-nav-item"><a href="">站点首页</a></li>
          <li class="layui-nav-item">
          
        <dl class="layui-nav-child">
          <dd><a href="">基本资料</a></dd>
          <dd><a href="">安全设置</a></dd>
        </dl>
      </li>
      <li class="layui-nav-item"><a href="<?php echo url('Login/unLogin'); ?>">退了</a></li>
    </ul>
  </div>
  <div class="layui-side layui-bg-black">
    <div class="layui-side-scroll">
      <!-- 左侧导航区域（可配合layui已有的垂直导航） -->
      <ul class="layui-nav layui-nav-tree"  lay-filter="test">
        <?php
          $controller = request() -> controller();
          if(in_array($controller,['Goods','Category','Brands'])){
            echo "<li class='layui-nav-item layui-nav-itemed'>";
          }else{
            echo "<li class='layui-nav-item'>";
          }
        ?>
          <a class="" href="javascript:;">商品管理</a>
          <dl class="layui-nav-child">
            <dd <?php if($controller == 'Goods'): ?>class="layui-this"<?php endif; ?>><a href="<?php echo url('Goods/index'); ?>">商品管理</a></dd>
            <dd <?php if($controller == 'Category'): ?>class="layui-this"<?php endif; ?>><a href="<?php echo url('Category/index'); ?>">商品分类</a></dd>
            <dd <?php if($controller == 'Brands'): ?>class="layui-this"<?php endif; ?>><a href="<?php echo url('Brands/index'); ?>">商品品牌</a></dd>
            <!-- <dd><a href="">超链接</a></dd> -->
          </dl>
        </li>
        <?php
          $controller = request() -> controller();
          if(in_array($controller,['Index','User','Menu'])){
            echo "<li class='layui-nav-item layui-nav-itemed'>";
          }else{
            echo "<li class='layui-nav-item'>";
          }
        ?>
        
          <a href="javascript:;">权限管理</a>
          <dl class="layui-nav-child">
            <dd <?php if($controller == 'Index'): ?>class="layui-this"<?php endif; ?>><a href="<?php echo url('Index/admin'); ?>">管理员管理</a></dd>
            <dd <?php if($controller == 'User'): ?>class="layui-this"<?php endif; ?>><a href="<?php echo url('User/add'); ?>">角色管理</a></dd>
            <dd <?php if($controller == 'Menu'): ?>class="layui-this"<?php endif; ?>><a href="<?php echo url('Menu/index'); ?>">菜单管理</a></dd>
            <!-- <dd><a href="">超链接</a></dd> -->
          </dl>
        </li>
        <?php
          $controller = request() -> controller();
          if(in_array($controller,['Friend'])){
            echo "<li class='layui-nav-item layui-nav-itemed'>";
          }else{
            echo "<li class='layui-nav-item'>";
          }
        ?>
        
          <a href="javascript:;">友链管理</a>
          <dl class="layui-nav-child">
            <dd <?php if($controller == 'Friend'): ?>class="layui-this"<?php endif; ?>><a href="<?php echo url('Friend/add'); ?>">友链添加</a></dd>
            <!-- <dd <?php if($controller == 'Friend'): ?>class="layui-this"<?php endif; ?>><a href="<?php echo url('Friend/Index'); ?>">友链展示</a></dd> -->
            <!-- <dd <?php if($controller == 'Menu'): ?>class="layui-this"<?php endif; ?>><a href="<?php echo url('Menu/index'); ?>">菜单管理</a></dd> -->
            <!-- <dd><a href="">超链接</a></dd> -->
          </dl>
        </li>
        <li class="layui-nav-item"><a href="">云市场</a></li>
        <li class="layui-nav-item"><a href="">发布商品</a></li>
      </ul>
    </div>
  </div>

  <div class="layui-body">
    <!-- 内容主体区域 -->
    <div style="padding: 15px;"> 
      <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>

</head>
<body>
  
  <ul id='5'>
    <li></li>
    <li></li>
    <li class="aa"></li>
    <li></li>
    <li></li>
  </ul>

<script>
$('.name').find('.aa');    $('.name').children('.aa');
$('.name li');             $('.name').children();



</script>


</body>
</html>
    </div>
  </div>
  
  <div class="layui-footer">
    <!-- 底部固定区域 -->
    @ 备案许可证编号：京ICP备19002474
  </div>
</div>

<script>
//JavaScript代码区域
layui.use('element', function(){
  var element = layui.element;
  
});
</script>
</body>
</html>