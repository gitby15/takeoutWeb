<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>主页</title>

</head>
<body>
  
  <form action="/index.php/Home/User/searchRestaurant" method="post">
  
  查找餐厅：<input type="text" name="word" />
  <input type="submit"  value="搜索" />
  <br />
  <form/>
  
  <a href="/index.php/Home/User/getRestaurant/rid/<?php echo ($rid[1]); ?>/rname/<?php echo ($rname[1]); ?>"><?php echo ($rname[1]); ?><a/><br/>
  <a href="/index.php/Home/User/getRestaurant/rid/<?php echo ($rid[2]); ?>/rname/<?php echo ($rname[2]); ?>"><?php echo ($rname[2]); ?><a/><br/>
  <a href="/index.php/Home/User/getRestaurant/rid/<?php echo ($rid[3]); ?>/rname/<?php echo ($rname[3]); ?>"><?php echo ($rname[3]); ?><a/><br/>
  <a href="/index.php/Home/User/getRestaurant/rid/<?php echo ($rid[4]); ?>/rname/<?php echo ($rname[4]); ?>"><?php echo ($rname[4]); ?><a/><br/>
  <a href="/index.php/Home/User/getRestaurant/rid/<?php echo ($rid[5]); ?>/rname/<?php echo ($rname[5]); ?>"><?php echo ($rname[5]); ?><a/>
  
</body>
</html>